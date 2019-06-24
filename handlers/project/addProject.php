<?php
include 'connectToDB.php';
$con = db_connect();

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$Headline = $_POST["headline"];
$shortDescription = $_POST["shortdescription"];
$longDescription = $_POST["longdescription"];
$imageName = $_FILES["picture"]["name"];
$uploadOk = 1;

$query = "INSERT INTO Project (`Headline`, `Description`, `longDescription`, `Picture`) VALUES (\"$Headline\", \"$shortDescription\",\"$longDescription\" , \"$imageName\")";

//echo "heyo";
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if (file_exists($target_file)) {
    if ($uploadOk == 0) {
        echo "Projektet blev ikke tilføjet.";
// if everything is ok, try to upload file
    } else {
        $con->query($query);
        echo "Projektet er tilføjet.";
        echo "<br>";
        echo "<a href='../../index.php?page=projects'>Gå tilbage til projekt siden.</a>";
//      header("Location:../../projects.php");
    }
}
else {
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            $con->query($query);
            echo "Projektet er tilføjet";
            echo "<br>";
            echo "<a href='../../index.php?page=projects'>Gå tilbage til projekt siden.</a>";
//        header("Location:../../projects.php");

        } else {
            echo "Sorry, there was an error uploading your file.";
//        header("Location:../../administration.php");
        }
    }
}