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
     <div class="container my-5"></div>
      <div class="row">




              <div class="col-lg-4 mb-4">
                <div class="font-italic" style="padding-bottom: 10px; font-size:larger">Purchase Details<span style="color:red">*</span></div>
                <button class="btn btn-danger" onclick="window.location.href = 'purchasedetails.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>

              </div>
              <div class="col-lg-4 mb-4">
                <div class="font-italic" style="padding-bottom: 10px; font-size:larger">Sell Details<span style="color:red">*</span></div>
                <button class="btn btn-danger" onclick="window.location.href = 'selldetails.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>

              </div>
              <div class="col-lg-4 mb-4">
                <div class="font-italic " style="padding-bottom: 10px; font-size:larger">Records of a Company<span style="color:red">*</span></div>
                <button class="btn btn-danger" onclick="window.location.href = 'recordetails.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>

              </div>
              <div class="col-lg-4 mb-4">
                <div class="font-italic " style="padding-bottom: 10px; font-size:larger">Advance Detail of Each<span style="color:red">*</span></div>
                <button class="btn btn-danger" onclick="window.location.href = 'advancedetails.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>

              </div>
            </div>
            
      
      


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



