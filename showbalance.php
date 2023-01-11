
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <?php include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  ?>

    <div class="header">
        <?php $active = "checkbalance.php";
        include('head.php'); ?>
    </div>
    <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:75px;">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Welcome to Haroon Traders Finance System</h1>

        </div>

      </div>
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

        <?php
$active = "checkbalance.php"; 
$table=$_POST['type'];

include 'conn.php';

if(isset($_POST['name'])){ $names=$_POST['name'];}
          else{
            $names=1;
          }
         if($table=='user_spend'){
         $conn=mysqli_connect("localhost","root","1807","haroontraders") or die("Connection error");
         
          $sql= "select sum(g.moneygot)-sum(s.moneyspend) as moneyleft from user_spend as s,user_got as g where s.names='{$names}' and g.names='{$names}'";
          $result=mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);
          if($row['moneyleft']!=null){
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) { ?>
        
        <p>
            
            <h4>Total Money Left By <?php echo $names?>:<?php echo $row['moneyleft']; }}?></h4>
            
        </p>

              
            
        
          <?php } else
             $sql1="select sum(moneygot) as Total from user_got";
             $result=mysqli_query($conn,$sql1);
             if(mysqli_num_rows($result)>0)   {
                 while($row = mysqli_fetch_assoc($result)) { ?>
           
           <p>
          
               <h4>Total: <span><?php echo $row['Total']; ?></span></h4>
              
           </p>
         <?php }}}?>

        
        <?php 
       
          if($table=='user_got'){
          $sql1="select sum(moneygot) as Total from user_got";
          $result=mysqli_query($conn,$sql1);
          if(mysqli_num_rows($result)>0)   {
              while($row = mysqli_fetch_assoc($result)) { ?>
        
        <p>
       
            <h4>Total: <span><?php echo $row['Total']; ?></span></h4>
           
        </p>

              
            
            <?php }
      } ?>
         
          <?php } ?>
              
        </div>
        

      </div>
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">
        <?php   if($table=='user_spend'){
          ?>
          <h4 class="page-title">Check your Expenditure</h4>
          <?php } else{?>
            <h4 class="page-title">Check your Income</h4>
            <?php }?>
        </div>

      </div>
      <hr>
      <?php
      $active = "checkbalance.php"; 
      include 'conn.php';
      if(isset($_POST['name'])){ $names=$_POST['name'];}
                else{
                  $names=1;
                }
      
      $table=$_POST['type'];
        
        if(isset($_GET['page'])){
          $page = $_GET['page'];
        }else{
          $page = 1;
        }
        $offset = ($page - 1);
        $count=$offset+1;
        $sql= "select * from $table  where names='{$names}'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)   {
       ?>

       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">Sr.No</th>
          <th style="text-align:center">Name</th>
        <?php   if($table=='user_spend'){
          ?>
          <th style="text-align:center">money Spend</th>
       <?php } else{?>
        <th style="text-align:center">money Got</th>

       <?php }?>
          <th style="text-align:center">From/Where</th>
          <th style="text-align:center">Time with Date</th>

          
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $row['names']; ?></td>
                  <?php   if($table=='user_spend'){
          ?>
                  <td><?php echo $row['moneyspend']; ?></td>
                  <?php } else{?>
                    <td><?php echo $row['moneygot']; ?></td>
                    <?php } ?>
                  <td><?php echo $row['fromwhere']; ?></td>
                  <td><?php echo $row['time']; ?></td>
                    
                    
              </tr>
            <?php } ?>
          </tbody>
      </table>
    </div> <?php } ?>





</div></div></div></div>
    
    <?php include('footer.php'); }
      

      else {
          echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
          ?>
          <form method="post" name="" action="login.php" class="form-horizontal">
            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-4" style="float:left">
      
                <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
              </div>
            </div>
          </form>
      <?php }
       ?>
          </div>
      
        
      
      
      </body>
      
      </html>