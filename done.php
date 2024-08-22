<?php
$Name=$_GET['Name'];
$Mail=$_GET['Mail_Id'];
$Password=$_GET['Password'];
$Phone=$_GET['Phone No'];
$conn = mysqli_connect("Localhost","root","");

if(!$conn)
{

echo "connection failed";
echo (mysqli_connect_error());
}

else
{
$q="SELECT `S.no`, `UserName`, `Phone No`, `Mail_Id`, `Password`, `Status`, `Insert_Time` FROM `hacker`.`stud` WHERE  `S.no`=1 AND `UserName`='$Name' AND `Phone No`=$Phone No AND `Mail_Id`='$Mail_Id' AND `Password`='$Password' AND `Status`='Y' AND `Insert_Time` IS NULL LIMIT 1;

if($conn->query($q))
{
echo "successfully Resgister";
}
else
{
echo "No successfully Resgister";
}
}
?>

 
