<?php
include("config.php");
extract($_POST);
$query = "INSERT INTO `contactdata`(`destination`, `	email`, `arrivals`, `departure`) VALUES ('".$destination."','".$email."',".$arrivals.",'".$departure."')";
$result = $mysqli->query($query);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>