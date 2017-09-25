<!DOCTYPE html>
<html>
<head>
  
  <title>GRAMIN CHITTY MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
   <!-- <img class="logo" src="logo1.png" alt="Logo"/>-->
    <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font><br></b>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<b class="heading2"><strong><font color="blue" size="4"><a href="#about.php">ABOUT</a></font></strong></b>
  </div>
  <!-- Div for body section -->
  <div class="body">
   <div class="pic">
      <img class="mySlides" src="LEAF_MONEY.jpg" width="894px" height="515px" >
	  <img class="mySlides" src="finance.png" width="894px" height="515px" >
	  <img class="mySlides" src="MONEY_TREE.jpg" width="894px" height="515px" >
	<img class="mySlides" src="CHITTY_CALC.jpg" width="894px" height="515px" >
	
	  
	  	<div class="line" height:"5px">
			</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

      </div>
  <!-- Div for login section -->
  <div class="login">
  
  <!-- php code begins-->



    <center><h2 class="login_head"><u><br>Login to Gramin Chitty<u></h2></center>
<table width="150px" align="center">
<tr><td>
      <form name="myform" method="post" action='logcon.php'>
        <center><h3><br><br>Username<br><input type="text" name="uname"  placeholder="email-id" required><br><br>
          Password<br><input type="password" name="pwd"  placeholder="password" required><br><br>
          <input type="submit" name= "submit" value="login"><br><br>
		  &nbsp;&nbsp;&nbsp;&nbsp;<a href="#forgot.php">Forgot password?</a>
           </h3>
		   

        </form>
</td>
</tr>
</table>
      </div>
      <div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>
    </body>
    </html>
