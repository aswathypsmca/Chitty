<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
	
$a=$_POST["uname"];
$b=$_POST["pwd"];
}
//INSERT INTO `tbl_login`(`log_id`, `role_id`, `user_name`, `password`, `status`) VALUES
$sql="SELECT * FROM `tbl_login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['log_id'];
	echo($row['log_id']);
	?>
	
	<?php 
	if($a==$row['user_name']&&$b==$row['password']&&$row['role_id']==1)
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['role_name']='admin';
		 $_SESSION['log_id']=$i;
		 
		 $sql1="UPDATE `tbl_login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:adminhome.php');
		 }
	else if($a==$row['user_name']&&$b==$row['password']&&$row['role_id']==2)	 
		 {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['role_name']='admin';
		 $_SESSION['log_id']=$i; 
		 
		 $sql1="UPDATE `tbl_login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:stafflogin.php');
		 }
		 else if($a==$row['user_name']&&$b==$row['password']&&$row['role_id']==3)	 
		 {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['role_name']='admin';
		 $_SESSION['log_id']=$i;
		 
		 $sql1="UPDATE `tbl_login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:memberlogin.php');
		 }


	
			 
	?>	
	
	<?php
}
echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
	

?> 
