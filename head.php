<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #333;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 17px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 24px;
  font-weight: bold;
  color:#FF0104  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
#qw{
  font-size: medium;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Finacial Record Entry</a>
    <div class="header-right">
    <a href="checkbalance.php"  <?php if($active=='about') echo "class='act'"; ?> >Check Balance </a>
    <a href="purchase.php"  <?php if($active=='why') echo "class='act'"; ?>>Purchase Entry</a>
      <a href="sell.php"  <?php if($active=='donate') echo "class='act'"; ?>>Sell Entry</a>

      <a href="record.php" <?php if($active=='need') echo "class='act'"; ?>>RecordOF(Fixed Company)</a>
      <a href="advance.php" <?php if($active=='need') echo "class='act'"; ?>>Advance Entry</a>
      <a class="dropdown"><a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#" style="font-weight:bold; "> 
        <?php
        include 'conn.php';
        include 'session.php';
        

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $username=$_SESSION['username'];
        $sql="select * from admin_info where admin_username='$username'";
        $result=mysqli_query($conn,$sql) or die("query failed.");
        $row=mysqli_fetch_assoc($result);
        echo "Hello ".$row['admin_name'];
  }?><span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#D6EAF8;">
          <li><a href="change_password.php" style="color:#DC7633  ">Change Password </a></li>
          <li><a href="logout.php" style="color:#D35400 ;">Logout</a></li>
          <li><a href="details.php" style="color:#D35400 ;">Check All Details</a></li>
          
        </ul>
    </a>
      
</div>
  </div>

</body>
</html>
