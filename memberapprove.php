<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}



if(isset($_POST['submit']))
{

$a=$_POST['id'];
$b=$_POST['cname'];
$c=$_POST['caddrs'];
$d=$_POST['cmob'];
$e=$_POST['cemail'];
$f=$_POST['cpan'];

$sql2="update `tbl_customer` set status='1' where cust_id=$a";

$result=mysqli_query($con,$sql2);

header('location:memberview.php');
//header('location:emphome.php');
//$result=mysqli_query($con,$sql);
//header()
}
?>