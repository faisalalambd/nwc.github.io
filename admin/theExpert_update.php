<?php include("config.php");

echo  $id               = $_GET['id'];
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


$sql = "UPDATE theExpert SET image='$filename', name='$name', designation='$designation', consultation='$consultation', experience='$experience' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: theExpert.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
