<?php
$names=$_POST['givername'];
$pf=$_POST['takername'];
$amount=(float)$_POST['amount'];



$conn=mysqli_connect("localhost","root","1807","haroontraders") or die("Connection error");
$sql= "INSERT INTO advance_details(given_by,given_to,amount) values('{$names}','{$pf}','{$amount}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost:800/dukan/advance.php");

mysqli_close($conn);
 ?>