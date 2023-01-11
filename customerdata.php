<?php
$names=$_POST['cust_name'];
$conn=mysqli_connect("localhost","root","1807","haroontraders") or die("Connection error");
$sql= "INSERT INTO customer_info(cust_name) values('{$names}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost:800/dukan/advance.php");

mysqli_close($conn);
 ?>