<?php
$names=$_POST['name'];
$st=$_POST['sellto'];
$weight=(int)$_POST['weight'];
$rate=(int)$_POST['rate'];
$total=$weight*$rate;


$status=$_POST['status'];
$conn=mysqli_connect("localhost","root","1807","haroontraders") or die("Connection error");
$sql= "INSERT INTO sell_details(EntryBy,SellTo,weights,rate,totalprice,status_given) values('{$names}','{$st}','{$weight}','{$rate}','{$total}','{$status}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost:800/dukan/sell.php");

mysqli_close($conn);
 ?>