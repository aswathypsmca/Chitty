<<<<<<< HEAD
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
=======
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

$a=$_POST["PHNO"];
//$b=$_POST["email"];
$c=$_POST["saddress"];
$d=$_POST["splace"];
$sql="UPDATE `tbl_staff` SET `s_mob`='$a',`s_address`='$c',`splace`='$d'  WHERE  s_email='$id1'";
//print_r($sql);
$result=mysqli_query($con,$sql);
//$sql2="UPDATE `tbl_login` SET `user_name`='$b' WHERE  s_email='$id1'";
//$result2=mysqli_query($con,$sql2);
header('location:staffprofile.php');
}
?>
>>>>>>> 2bee366b678049223a2f9629c7b2f9479641ec98
