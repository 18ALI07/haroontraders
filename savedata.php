<?php
$names=$_POST['name'];
$moneyspend=(int)$_POST['moneyspend'];
$moneygot=(int)$_POST['moneygot'];
$fromwhere=$_POST['fromwhere'];
$conn=mysqli_connect("localhost","root","1807","haroontraders") or die("Connection error");
if(isset($_POST['moneyspend'])){
$sql= "INSERT INTO user_spend(names,moneyspend,fromwhere) values('{$names}','{$moneyspend}','{$fromwhere}')";}
if(isset($_POST['moneygot'])){
    $sql= "INSERT INTO user_got(names,moneygot,fromwhere) values('{$names}','{$moneygot}','{$fromwhere}')";}

$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost:800/dukan/home.php");

mysqli_close($conn);
 ?>
