<?php include("config.php");

echo  $id           = $_GET['id'];
echo  $title        = ($_REQUEST['title']);
echo  $paragraph    = ($_REQUEST['paragraph']);

$sql = "UPDATE ourTreatments SET title='$title', paragraph='$paragraph' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: ourTreatments.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
