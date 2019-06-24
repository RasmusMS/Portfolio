<?php
require_once '../../includes/connectToDB.php';
$conn = db_connect();
session_start();

$username = $_POST["Brugernavn"];
$password = $_POST["Adgangskode"];

//$hashPassword = password_hash("$password", PASSWORD_DEFAULT);

//var_dump($hashPassword);
//$query = "INSERT INTO `Administrator` (`Username`, `Pword`) VALUES (\"$username\", \"$hashPassword\");";
$sql = "SELECT `Username`, `Pword` FROM `Administrator` WHERE `Username` = \"$username\";";
//$conn->query($query);

$result = $conn->query($sql);
$rowcount = $result->num_rows;
if($rowcount > 0) {
    while($row = $result->fetch_assoc()) {
        $hashed_password = $row['Pword'];
        if(password_verify($password, $hashed_password)){
            $_SESSION['user'] = $username;
            header("location: ../../index.php?page=administration");
        }
        else {
            echo "<script>window.alert('Brugernavnet eller adgangskoden er forkert.');</script>";
            echo "<script>setTimeout(\"location.href = '../../index.php?page=login';\",1000);</script>";
        }
    }
}
else if ($rowcount == 0) {
    echo "<script>window.alert('Brugernavnet eller adgangskoden er forkert.');</script>";
    echo "<script>setTimeout(\"location.href = '../../index.php?page=login';\",1000);</script>";
}
else {
    echo "WTF?!?";
}