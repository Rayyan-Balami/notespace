<?php

//logout the user
session_start();
session_unset();
session_destroy();

//show alert
include '../alert.php';

echo '<script>
        Swal.fire({
        icon: "success",
        title: "Success",
        text: "You have been logged out successfully. <br> See you soon. 👋",
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to home page
                window.location.href = "../notespace.php";
            }
        });
    </script>';
exit();
?>