<<<<<<< HEAD
<?php
$id=$_REQUEST['id'];
include 'dbcon.php';
$sql="delete from tbl_feedback where f_id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:view_feedback.php")
=======
<?php
$id=$_REQUEST['id'];
include 'dbcon.php';
$sql="delete from tbl_feedback where f_id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:view_feedback.php")
>>>>>>> 2bee366b678049223a2f9629c7b2f9479641ec98
?>