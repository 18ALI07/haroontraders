<?php
include 'conn.php';
  $query_id = $_GET['id'];
$sql= "DELETE FROM purchase_details where query_id={$query_id}";
$result=mysqli_query($conn,$sql);

header("Location: purchasedetails.php");

mysqli_close($conn);

 ?>