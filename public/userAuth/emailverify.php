<?php

//THIS PERFORMS THE EMAIL VERIFICATION FUNCTIONALITY FROM THE EMAILVERIFICATION.HTML PAGE FORM

//connect to the database
include 'connectdb.php';

//start session
session_start();

if(isset($_POST['emailverify'])) {

    //get the data from the session variable
    $email = $_SESSION['email_verification']['email'];

    // Check if the email is already registered
    $sql = "SELECT email FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) != 0) {
        echo "Email already registered";
        exit();
    }

    // Generate a random token of 32 characters
    $verificationToken = bin2hex(random_bytes(16));

    // Store the token in the session variable
    $_SESSION['email_verification']['token'] = $verificationToken;

    // Send email to the user with a link to verify the email
    $to = $email;
    $subject = "NoteSpace Email Verification";
    $message = "your verification token is $verificationToken \n\n Copy and paste this token in the verification page to verify your email \n\n <a href='http://localhost/notespace/dist/emailverify.html'>Go to verification page</a>";
    // Send email
    $mailSent = mail($to, $subject, $message);

    // Check if mail is sent
    if ($mailSent) {
        header("Location: ../emailverify.html");
    }else {
        echo "Something went wrong";
    }
}

//if the user clicks on the verify button in the emailverification.html page

if(isset($_POST['verify'])) {
    //get the token from the session variable
    $token = $_SESSION['email_verification']['token'];

    //get the token entered by the user
    $userToken = $_POST['token'];

    //check if the tokens match
    if($token == $userToken) {
        //get the data from the session variable
        $fname = $_SESSION['email_verification']['fname'];
        $lname = $_SESSION['email_verification']['lname'];
        $email = $_SESSION['email_verification']['email'];
        $pwdHash = $_SESSION['email_verification']['pwdHash'];
        $school = $_SESSION['email_verification']['school'];
        $verified = 1;

        //clear the session variable
        unset($_SESSION['email_verification']);

        //rehash the password
        $pwdHash = password_hash($pwdHash, PASSWORD_DEFAULT);

        //prepare the sql statement
        $sql = "INSERT INTO users (fname, lname, email, pwd, school, verified) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        //bind the parameters
        if($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssi", $fname, $lname, $email, $pwdHash, $school, $verified);
            mysqli_stmt_execute($stmt);
            header("Location: login.html");
        }else {
            echo "Something went wrong";
        }
    }else {
        echo "Tokens do not match";
    }

}


?>