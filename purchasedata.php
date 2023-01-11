<?php
$names=$_POST['name'];
$pf=$_POST['purchasefrom'];
$weight=(int)$_POST['weight'];
$rate=(int)$_POST['rate'];
$total=$weight*$rate;
$yes=(int)$_POST['yes'];

    
    if($yes==1){
        $weightafter=($weight/0.8)-$weight;
    }
   

else{
    
    $weightafter=0;
}


$conn=mysqli_connect("localhost","root","1807","haroontraders") or die("Connection error");
$sql= "INSERT INTO purchase_details(EntryBy,purchasefrom,weights,rate,totalprice,weightafter) values('{$names}','{$pf}','{$weight}','{$rate}','{$total}','{$weightafter}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost:800/dukan/purchase.php");

mysqli_close($conn);
 ?>
