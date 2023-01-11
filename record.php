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
<?php include 'session.php';?>
<?php
include 'conn.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  ?>

<body>
  <div class="header"> 
    <?php $active = "home";  include('head.php'); ?>
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
       
          <form name="donor" action="recordata.php" method="post">
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
           </div>
            <div class="row" >




              <div class="col-lg-4 mb-4">
                <div class="font-italic">Company/Owner Name<span style="color:red">*</span></div>
                <div><input type="text" name="purchasefrom" class="form-control" required></div>
              </div>
              <div class="col-lg-4 mb-4">
               <div class="font-italic">Material Type<span style="color:red">*</span></div>
               <div><select name="type" class="form-control" id="material" onchange="showhidden(event)" required>
                   <option value="" selected disabled>Select</option>
                   <option value="ms turning">MS TURNING</option>
                   <option value="ms tukda">MS TUKDA</option>
                   <option value="ss turning 202">SS TURNING 202</option>
                   <option value="ss tukda 202">SS TUKDA 202</option>
                   <option value="ss turning 304">SS TURNING 304</option>
                   <option value="ss tukda 304">SS TUKDA 304</option>
                   <option value="ss turning 316">SS TURNING 316</option>
                   <option value="ss tukda 316">SS TUKDA 316</option>
                   <option value="Alm turning ">ALM TURNING</option>
                   <option value="Alm tukda">ALM TUKDA</option>
                   <option value="ms punching">MS PUNCHING</option>
                   <option value="other">OTHER</option>

                 </select>
               </div>
             </div>
             <div class="col-lg-4 mb-4">
                <div class="font-italic" id="add"></div>
                
              </div>
            
             <script>

               showhidden=(event)=>{
                let x=event.target.value;
                
                if(x==="other"){
                    let div1 = document.createElement('div');
                    div1.class="col-lg-4 mb-4";
                    let div2= document.createElement('div');
                    div2.class="font-italic";
                    div2.innerHTML='Specify other<span style="color:red">*</span>';
                    let div3 = document.createElement('div');
                    div3.class="other";
                    let input=document.createElement('input');
                    input.class="form-control";
                    input.type="text";
                    input.name="other";
                    
                    input.style.width="100%";
                    input.style.padding="0.375rem 0.75rem";
                    input.style.fontsize="1rem";
                    input.style.fontWeight="400";
                    input.style.lineHeight="1.5";
                    input.style.color=" var(--bs-body-color)";
                    input.style.backgroundColor="var(--bs-form-control-bg)";
                    input.style.backgroundClip="padding-box";
                    input.style.border=" var(--bs-border-width) solid var(--bs-border-color)"
                    input.style.webkitAppearance="none";
                    input.style.appearance="none";

                    
                    input.style.borderRadius="0.375rem";
                    input.style.transition=" border-color .15s ease-in-out,box-shadow .15s ease-in-out";
                    input.required=true;
                    div3.appendChild(input);
                    div2.appendChild(div3);
                    div1.appendChild(div2);
                    let divmain=document.getElementById("add");
                    divmain.appendChild(div1);
                    
    }


                    
                }
                
                
             </script>
             
             
            </div>
            <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="font-italic">Weight IN Kg<span style="color:red">*</span></div>
                <div><input type=" text" name="weight" class="form-control" required></div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="font-italic">Rate<span style="color:red">*</span></div>
                <div><input type="text" name="rate" class="form-control" required></div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="font-italic">Yes<span style="color:red">*</span></div>
                <div><input type="text" name="yes" class="form-control" required></div>
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
            


            </div>


        </div>
      </div>
</div></div>
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
