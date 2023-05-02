<?php include("config.php");

echo  $title        = ($_REQUEST['title']);
echo  $paragraph    = ($_REQUEST['paragraph']);


$sql = "INSERT INTO ourTreatments (title, paragraph) VALUES ('$title', '$paragraph')";

if (mysqli_query($conn, $sql)) {
    header("Location: ourTreatments.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
