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

  <title> chitty management system </title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
    
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>&nbsp
    <b class="heading2"><strong><font color="blue" size="4">Govt.Of Kerala</font></strong></b><BR>


  </div>
  <!-- Div for body section -->
  <div class="body1">
<div class="body_text1">
<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>

		
<a href="mchangepsw.php" >CHANGE PASSWORD</a><br><br>

 <br><br>
 
  <a href="logout.php">LOGOUT</a><br>


</div>
    </div>
	</div>
  <!-- Div for login section -->
  <div class="login2">
<!--<center><img src="clg.png" id="ajce_img"width="400px" height="300px" ></center>-->

 <h2 style="color:red">PROFILE</h2>  
<?php
$vv=$_SESSION["user_name"];

$sql="SELECT * FROM  `tbl_customer` WHERE c_email='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>

               <div class="body_text00">
        <form name="myform" method="post" action="#">
	 <table >
		<tr><td> name:</td> <td><input type="text" name="cname" value="<?php echo $r['c_name']?>"></td></tr>
	
		<tr><td>Phone:</td><td><input type="phno"name="PHNO"value="<?php echo $r['c_mob']?>"></td></tr>
        <tr><td> Email:</td> <td><input type="email" name="email" value="<?php echo $r['c_email'] ?>" ></td></tr>
		
		</table>
 
      
<!--<center><img src="clg.png" id="ajce_img"width="1100px" height="300px" ></center>-->

  	
   </div>
</div>
      <div class="footer">
        <center><marquee>Gramin chitty management</marquee></center>
      </div>
	  

    </body>
    </html>
