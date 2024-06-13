<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citizen profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include_once 'header.php';
  ?>
  <div class="wrapper" id="wrapper-citizenProfile">
    <div class="section">
      <div class="profile-details">
        <div class="profile-section-main">
          <img src="/images/userProfile.png" alt="user">
          <h2>ABC Sumanapala</h2>
        <div class="profile-section-secondary">
          <div class="column">
            <div class="userDetail-bar">
              <h4>NIC No</h4><b class="divider">></b><p>2000xxxxxxxx</p>
            </div>
            <div class="userDetail-bar">
              <h4>Email</h4><b class="divider">></b><p>yoxxxxxx@gmail.com</p>
            </div><br>
            <div class="userDetail-bar">
              <h4>DoB</h4><b class="divider">></b><p>yyyy-mm-dd</p>
            </div>
          </div>
          <div class="column">
            <div class="userDetail-bar">
              <h4>Phone No</h4><b class="divider">></b><p>076xxxxxxx</p>
            </div>
            <div class="userDetail-bar">
              <h4>Address</h4><b class="divider">></b><p>58/A,<br> Lane, <br>City, <br>District</p>
            </div>
          </div>
        </div>
        <div class="btn-section">
          <a href="signin.php" class="signbtn">Sign out</a>
        </div>
      </div>
    </div>
  </div>
  
<?php include_once 'footer.php';?>
  <!--end of footer section-->
</body>
</html>