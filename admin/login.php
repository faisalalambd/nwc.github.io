<?php

// Starting Session
session_start();

// Variable To Store Error Message
$error = '';


if (isset($_POST['submit'])) {

    if (empty($_POST['email']) || empty($_POST['password'])) {

        $error = "email or Password is invalid";
    } else {

        // Define $email and $password
        $email = $_POST['email'];
        $password = $_POST['password'];

        // mysqli_connect() function opens a new connection to the MySQL server.
        $conn = mysqli_connect("localhost", "srsomgcd_nwc_admin", "123@jAmifree", "srsomgcd_nwc");

        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT email, password from user_admin where email=? AND password=?";

        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->bind_result($email, $password);
        $stmt->store_result();

        //fetching the contents of the row
        if ($stmt->fetch()) {

            // Initializing Session
            $_SESSION['login_user'] = $email;

            // Redirecting To Profile Page
            header("location: index.php?text='Try Again'");
        }
    }

    // Closing Connection
    mysqli_close($conn);
}
