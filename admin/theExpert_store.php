<?php include("config.php");

echo  $name             = ($_REQUEST['name']);
echo  $designation      = ($_REQUEST['designation']);
echo  $consultation     = ($_REQUEST['consultation']);
echo  $experience       = ($_REQUEST['experience']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO theExpert (image, name, designation, consultation, experience) VALUES ('$filename', '$name', '$designation', '$consultation', '$experience')";

if (mysqli_query($conn, $sql)) {
    header("Location: theExpert.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
