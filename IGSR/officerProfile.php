<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Officer Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include_once 'header.php';
  ?>

<div class="wrapper" id="wrapper-citizenProfile">
  <div id="service-log-buton">
    <a href="officerServices.php" class="signbtn">Service Log</a>
  </div>
  <div class="section">
    <div class="profile-details">
      <div class="profile-section-main">
        <img src="/images/manager.png" alt="user">
        <h2>DK Ariyadasa</h2>
      </div>
      <div class="profile-section-secondary">
        <div class="column">
          <div class="userDetail-bar">
            <h4>NIC No</h4><b class="divider">></b><p>2000xxxxxxxx</p>
          </div>
          <div class="userDetail-bar">
            <h4>Phone No</h4><b class="divider">></b><p>076xxxxxxx</p>
          </div><br>
          <div class="userDetail-bar">
            <h4>Email</h4><b class="divider">></b><p>yoxxxxxx@gmail.com</p>
          </div>
        </div>
        <div class="column">
          <div class="userDetail-bar">
            <h4>officer ID</h4><b class="divider">></b><p>IGSR001xxxxx</p>
          </div>
          <div class="userDetail-bar">
            <h4>Position</h4><b class="divider">></b><p>IGSR001xxxxx</p>
          </div>
        </div>
      </div>
      <div class="btn-section">
        <a href="signin.php" class="signbtn">Sign out</a>
      </div>
    </div>
  </div>
</div>
  
  <?php
  include_once 'footer.php';
?>
  <!--end of footer section-->
</body>
</html>