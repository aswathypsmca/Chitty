<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}

if(isset($_POST['submit']))
{
$id1=$_SESSION['user_name'];
$a=$_POST["sname"];
$b=$_POST["PHNO"];
$c=$_POST["email"];

$sql="UPDATE `tbl_staff` SET `s_name`='$a',`s_mob`='$b',`s_email`='$c'  WHERE  s_email='$id1'";
//print_r($sql);
$result=mysqli_query($con,$sql);
//$result=mysqli_query($con,$sql);
header('location:staffprofile.php');
}
?>
