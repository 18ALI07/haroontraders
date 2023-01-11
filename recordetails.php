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

          <U><h1 class="page-title">Welcome to Haroon Traders Finance System</h1></U>

        </div>

      </div>
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

        <h3 class="page-title" style="padding-top:19px">Record Details Of Companies</h3>

        </div>

      </div>
      
      <hr>
      <?php
      $active = "details.php"; 
      include 'conn.php';
      
        
        $offset = 0;
        $count=$offset+1;
        $sql= "select * from records";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)   {
       ?>

       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">S.no</th>
          <th style="text-align:center">Entry By</th>
          <th style="text-align:center">Company/Owner Name</th>
          <th style="text-align:center">Material</th>
          <th style="text-align:center">Weights</th>
          <th style="text-align:center">Rate</th>
          <th style="text-align:center">Weight After</th>
          <th style="text-align:center">Total Price</th>
          <th style="text-align:center">Time</th>
          
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $row['EntryBy']; ?></td>
                  <td><?php echo $row['CompOwnerName']; ?></td>
                  <td><?php echo $row['material']; ?></td>
                  <td><?php echo $row['weights']; ?></td>
                  <td><?php echo $row['rate']; ?></td>
                  <td><?php echo $row['weightafter']; ?></td>
                  <td><?php echo $row['totalprice']; ?></td>
                  
                    <td><?php echo $row['At_Time']; ?></td>
                    
              </tr>
            <?php } ?>
          </tbody>
      </table>
    </div>
    <?php } ?>





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




