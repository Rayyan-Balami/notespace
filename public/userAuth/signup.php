<?php
//show error
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

//handle signup form
//check if submit button is clicked
if (isset($_POST['submit'])) {
    //connect to database
    include '../connectdb.php';
    //get all the data from form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $accType = $_POST['accType'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $school = $_POST['school'];
    $terms = $_POST['terms'];
    
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
    //check if email already exists
    $sql = "SELECT email FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $numRows = $stmt->num_rows;
    if ($numRows > 0) {
        //alert user that email already exists in javascript
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Email already exists",
            allowOutsideClick: false,
            showCancelButton: true,
            confirmButtonText: "Choose Different Email",
            cancelButtonText: "Login",
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to signup page
                window.location.href = "signupForm.html";
            } else {
                // Redirect to login page
                window.location.href = "login.php";
            }
        });
    </script>';
    exit();
    }
    //check if password and confirm password are same
    if ($pwd == $cpwd) {
        //check if email already exists
        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $numRows = $stmt->num_rows;
        if ($numRows > 0) {
            //alert user that email already exists in javascript
            echo '<script>
                            Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Email already exists. Please choose a different email address."
                            });
                    </script>';
        } else {
            //hash the password
            $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
            //insert data into database
            $sql = "INSERT INTO users (fname,lname,email,accType,pwd,school) VALUES (?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $fname, $lname, $email, $accType, $hashPwd, $school);
            $stmt->execute();
            if ($stmt) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Account created successfully."
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to login page
                            window.location.href = "emailVerification.php";
                        }
                    });
                </script>';
            } else {
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Something went wrong. Please try again."
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to signup page
                            window.location.href = "signupForm.html";
                        }
                    });
                </script>';
            }
        }
    } else {
        echo '<script>
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "Passwords do not match."
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to signup page
                        window.location.href = "signupForm.html";
                    }
                });
            </script>';
    }
}
?>