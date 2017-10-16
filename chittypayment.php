<?php
include 'dbcon.php';

	if(!(isset($_SESSION['user_name'])))
	{

	//header('location:index.php');
	}

		if(isset($_POST['submit']))
		{
			$a=$_POST["chitname"];
			$b=$_POST["install"];
			$c=$_POST["division"];
			$d=$_POST["amount"];
			//echo $d;
			$e=$_POST["sdate"];
	$sql1="INSERT INTO `tbl_chittreg` (`chitt_name`, `installment`, `divisions`, `chitt_amount`, `s_date`, `status`)
			VALUES ('$a','$b','$c','$d','$e','0')";
	$result1=mysqli_query($con,$sql1);

	$q11 = "SELECT `c_id` FROM `tbl_chittreg` WHERE `chitt_name`=$a ";

	$row1 = mysqli_query($con,$q11);
		}
?>


<!DOCTYPE html>
<html>
<head>

  <title>chitty management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
	<body>
	<!-- Div for header section -->
		<div class="header">
		<!--<img class="logo" src="logo1.png" alt="Logo"/>-->
		<br>
		<b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
		<br>
		<b class="heading2"><strong><font color="blue" size="4">GOVT.OF KERALA</font></strong></b>
		</div>
  <!-- Div for body section -->
		<div class="body1" >
		<!-- <center><img src="ajce.png" id="ajce_img"></center>-->
			<div class="body_text1">
			<a href="stafflogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br>
			<br><br>
			<a href="logout.php">LOGOUT</a><br>
			</div>
		</div>
  <!-- Div for login section -->
		<div class="login2">
		<!--<center><h2 class="login_head">-->
			<div class="body_text3">
	<form method="post" name="myform" action="#">
			<table style="width:200% cellpadding:1%  ">
			<br><tr><td><h3>CHITTY PAYMENT</h3></td></tr>
			<tr><td> CHITTY NAME:</td> 
			<td><select name="chitty" onchange="getId(this.value);">
				<option value="">select chitty</option>
			<?php
				$query = "SELECT * FROM tbl_chittreg ";
				$results = mysqli_query($con, $query);
			while($row=mysqli_fetch_array($results)) 
			{
			?>
				<option value="<?php echo $row["c_id"];?>"> <?php echo $row["chitt_name"]; ?> </option>
			<?php
				echo $row["chitt_name"];
			}
			?>
			
				</select>
				
				 

		</td></tr></br><tr></tr>
		<tr><td>Customer ID:</td><td>
		<select name="customer" id="customer" onchange="getId1(this.value);">
        <option value=" ">select id</option>
		</select></br><tr></tr>
		
	<tr><td> NAME:</td> <td><input type="text"name="cname" id="cname"></td></tr></br><tr></tr> 
	<tr><td> ADDRESS:</td> <td><input type="text" name="caddr"id="caddr"></td></tr></br><tr></tr>
	<tr><td> PHONE:</td> <td><input type="text" name="cmob" id="cmob" maxlength="10" ></td></TR></br></tr><tr></tr>
	
	<tr><td> INSTALLMENT NO:</td> <td> <input type="varchar" name="instalno" placeholder="Total installment" required></td></tr></br><tr></tr>
	<tr><td> AMOUNT:</td> <td><input type="varchar" name="amount" required></td></tr></br><tr></tr>
	<tr><td> DIVIDENT:</td> <td><input type="varchar" name="divident" required></td></tr></br><tr></tr>
	<tr><td> PAYING DATE:</td> <td><input type="date" name="sdate"required></td></tr></br><tr></tr>
	<tr><td> STAFF NAME:</td><td><select>
	<option>select</option>
		<?php
		$sql="SELECT * FROM `tbl_staff`";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result))
		{
	//$i=$row['log_id'];
	//echo($row['chitt_name']);
		?>
			<option><?php echo $row['s_name'] ?></option>
    
		<?php
		}
		?>
	<tr><td ><input type="submit" name="submit" value="PAY">&nbsp&nbsp<input type="reset" name="clear" value="RESET"></td></tr><tr></tr>	
	&nbsp&nbsp</table>
	</form>
		</div></div></div>

	<div class="footer">
    <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
    </div>
	<script src="js/jquery.js"></script>
<script>
function getId(val){

  $.ajax({
    type: "POST",
    url: "getdata.php",
    data: "cust_id="+val,
    success: function(data){
	//	alert(data);
      $("#customer").html(data);

}
});
}

 function getId1(val){

  $.ajax({
    type: "POST",
    url: "getdata1.php",
    data: "Did="+val,
    success: function(data){
		var aa =data.split(":");
		//alert(aa[0]);
		$('#cname').val(aa[0]);
				$('#caddr').val(aa[1]);

						$('#cmob').val(aa[2]);

     // $("#village").html(data);

}
});
} 
</script>

    </body>
    </html>
