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
<?php
include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  ?>


<body>

    <div class="header">
        <?php $active = "checkbalance.php";
        include('head.php'); ?>
    </div>
    <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
        <div class="container">
            <div id="content-wrap" style="padding-bottom:75px;">

                <br>
                <h1 style="text-align:center;font-size:45px;">Welcome to Haroon Traders Finance System</h1>
                <br>
                <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
                    <div class="container">
                        <div id="content-wrap" style="padding-bottom:50px;">

                            <form name="donor" action="showbalance.php" method="post">
                                <div class="row">


                                    <div class="col-lg-4 mb-4">
                                        <div class="font-italic">Name<span style="color:red">*</span></div>
                                        <div><select name="name" class="form-control" required>
                                                <option value="" selected disabled>Select</option>
                                                <option value="Ali">Ali</option>
                                                <option value="Mohd">Mohd</option>
                                                <option value="Ahmed">Ahmed</option>
                                                <option value="Niyaz">Niyaz</option>
                                                <option value="Imam">Imam</option>
                                                <option value="Abba">Abba</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="font-italic">Select Expenses/Income<span style="color:red">*</span></div>
                                        <div><select name="type" class="form-control" required>
                                                <option value="" selected disabled>Select</option>
                                                <option value="user_spend">Expenses</option>
                                                <option value="user_got">Income</option>
                                                

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer">
                                            <input type="reset" name="reset" class="btn btn-primary" value="reset" style="cursor:pointer">
                                        </div>
                                    </div>



                                </div>
                            </form>
                        </div></div></div></div></div>
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