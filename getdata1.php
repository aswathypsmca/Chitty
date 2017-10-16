<<<<<<< HEAD
<?php
include_once "dbcon.php";

if (!empty($_POST["Did"])) {
  $Did = $_POST["Did"];
  $query = "SELECT c_name,c_address,c_mob FROM `tbl_customer` WHERE cust_id = '$Did'";

  $results = mysqli_query($con, $query);
  $row=mysqli_fetch_array($results);
  echo $row['c_name'] .":" . $row['c_address'] . ":" .$row['c_mob'];
 
}
?>
=======
<?php
include_once "dbcon.php";

if (!empty($_POST["Did"])) {
  $Did = $_POST["Did"];
  $query = "SELECT c_name,c_address,c_mob FROM `tbl_customer` WHERE cust_id = '$Did'";

  $results = mysqli_query($con, $query);
  $row=mysqli_fetch_array($results);
  echo $row['c_name'] .":" . $row['c_address'] . ":" .$row['c_mob'];
 
}
?>
>>>>>>> 2bee366b678049223a2f9629c7b2f9479641ec98
