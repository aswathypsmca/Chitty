<<<<<<< HEAD
<?php
include_once "dbcon.php";

if (!empty($_POST["cust_id"])) {
  $c_id = $_POST["cust_id"];

  $query = "SELECT * FROM tbl_custchitty WHERE c_id = '$c_id'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select id</option>
  <?php

 while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["cust_id"];?>"> <?php echo $row["cust_id"]; ?> </option>

     <?php
}
}
?>
=======
<?php
include_once "dbcon.php";

if (!empty($_POST["cust_id"])) {
  $c_id = $_POST["cust_id"];

  $query = "SELECT * FROM tbl_custchitty WHERE c_id = '$c_id'";

  $results = mysqli_query($con, $query);
  ?>
  <option >select id</option>
  <?php

 while($row=mysqli_fetch_array($results)) {
       ?>
       <option value="<?php echo $row["cust_id"];?>"> <?php echo $row["cust_id"]; ?> </option>

     <?php
}
}
?>
>>>>>>> 2bee366b678049223a2f9629c7b2f9479641ec98
