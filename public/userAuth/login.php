<?php
//show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//show alert
include '../alert.php';

//check if user is already logged in
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '<script>
            Swal.fire({
            icon: "question",
            title: "huh?🤔",
            text: "You are already logged in."
            confirmButtonText: "Go Home",
            cancelButtonText: "Logout",
            allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to home page
                    window.location.href = "../index.php";
                }else{
                    // Redirect to logout page
                    window.location.href = "logout.php";
                }
            });
        </script>';
    exit();
}

//handle login form
//check if submit button is clicked
if(isset($_POST['submit'])){
    //connect to database
    include '../connectdb.php';
    //get all the data from form
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    //check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Invalid email address."
                });
            </script>';
        exit();
    }
    //check if email exists
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    //if email exists, verify password
    if ($row) {
        //verify password
        if (password_verify($pwd, $row['pwd'])) {
            //start session
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['accType'] = $row['accType'];
            $_SESSION['school'] = $row['school'];
            $_SESSION['verified'] = $row['verified'];
            //redirect to home page
            header("Location: ../notespace.php");
            exit();
        }else{
            echo '<script>
                    Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Incorrect password."
                    });
                </script>';
            exit();
        }
    }else{
        echo '<script>
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Email does not exist."
                });
            </script>';
        exit();
    }
}
?>

    




