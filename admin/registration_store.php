<?php include("config.php");

echo  $name       = ($_REQUEST['name']);
echo  $email      = ($_REQUEST['email']);
echo  $password   = ($_REQUEST['password']);
echo  $contact    = ($_REQUEST['contact']);
echo  $address    = ($_REQUEST['address']);


$sql = "INSERT INTO user_admin (name, email, password, contact, address) VALUES ('$name', '$email', '$password', '$contact', '$address')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
