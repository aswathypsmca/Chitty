<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Gramin chitty Management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
        <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
 <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">
<a href="adminhome.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>


 
  <a href="logout.php">LOGOUT</a><br>


    </div>
    </div>
  </div>
  <!-- Div for login section -->
  <div class="login2">
  


<form method="post" name="myform" action="#">
	<table style="width:200% cellpadding:1%  ">
	<tr><td><h3>VIEW CHITTY MEMBERS</h3></td></tr>
	
	<tr><td> CHITTY NAME:</td><td><select name="cname">
	<option value="select" selected>select</option>
   <!-- <option value="HOD">HOD</option>
    <option value="ASSISTANT PROFESSOR">ASSISTANT PROFESSOR</option>
    <option value="PROFESSOR">PROFESSOR</option>
	<option value="OTHER">OTHER</option>-->
  </select></td></tr></br><tr></tr>
  <tr><td><input type="submit" name="submit" value="VIEW">&nbsp&nbsp<input type="reset" name="clear" value="CLEAR"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
  </form>
<!--<table border=5px style="margin-left:5%; margin-top:5%;">
<tr><th>ID</th><th>NAME</th><th> ADDRESS</th><th>MOBILE</th><th>CHITTY NAME</th></tr>-->
<?php
$c=$_SESSION['user_name'];
$sql="SELECT * FROM `tbl_customer` WHERE c_email='$c'";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	
	?>
	<tr> 	
	<td><?php echo $row['c_id'] ?></td>
	
	<td><?php echo $row['c_name'] ?></td>
	<td><?php echo $row['c_address'] ?></td>
	<td><?php echo $row['c_mob'] ?></td>
	<!--<td><?php echo $row['file'] ?></td>
	 <form action='#' method="post">
	  <td><a href="/oass/upload/<?php echo $row['file']?>"download">download</a></td>-->
    </tr>
	<?php
}

?>  

</table>

    
</div>

 

   
      

      <div class="footer">
        <center><marquee>Amal Jyothi College of Engineering</marquee></center>
      </div>

    </body>
    </html>
