<?php
include("config.php");
extract($_POST);
$query = "INSERT INTO `contact-data`(`destination`, `email`, `arrivals`, `departure`) VALUES ('".$destination."','".$email."',".$arrivals.",'".$departure."')";
$result = $mysqli->query($query);
if(!$result){
    echo"Something Went Wrong" .$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>
