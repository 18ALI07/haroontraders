<?php
$names=$_POST['name'];
$pf=$_POST['purchasefrom'];
$type=$_POST['type'];
if($type==="other"){
    $othertype=$_POST['other'];
}
else{
    $othertype=$type;
}
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
$sql= "INSERT INTO records(EntryBy,CompOwnerName,material,weights,rate,weightafter,totalprice) values('{$names}','{$pf}','{$othertype}','{$weight}','{$rate}','{$weightafter}','{$total}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost:800/dukan/record.php");

mysqli_close($conn);
 ?>