<?php
$conn = mysqli_connect("Localhost","root","");
if(!$conn)
{
echo "connetion failed";
echo (mysqli_connect_error());
}


$Name = $_GET['name'];
$Age =$_GET['age'];
$Phone =$_GET['phone'];
$Email =$_GET['mail'];
$Password =$_GET['passcode'];

$q="INSERT INTO `dhanush`.`prince` (`Name`, `Age`, `Phone`, `Mail`, `Password`)VALUES ('$Name', '$Age','$Phone','$Email','$Password')";
if($conn->query($q))
echo "<center><h2>Information Successfully Registered</h2></center>";
else
echo "Information not Successfully Registered";
?>