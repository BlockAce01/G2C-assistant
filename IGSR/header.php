<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IGSR</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link  href="style.css" rel="stylesheet">
</head>
<body>
  <header class="shadow">
    <div class="logo">
      <a href="index.php"><img src="images\logo.png" alt="logo" ></a>
    </div>
    <div class="navigation">
          <a href="index.php">Home</a>
          <a href="index.php#service">Services</a>
          <a href="index.php#About">About us</a>
          <a href="index.php#Contact">Contact</a>
    </div>
    <div class="notific">
      <a href="#"><img src="images/bell.png"></a>
      <div class="notification-box">
        <h4>Notifications</h4>
        <div class="notific-area">
          <a href="" class="A-notification">
            <div class="notification-content">
              This notification is a test.This notification is a test.This notification is a test.This notification is a test.
            </div>
            <div class="time-stamp">
              1 min ago
            </div>
          </a>
          <a href="" class="A-notification">
            <div class="notification-content">
              This notification is a test.This notification is a test.This notification is a test.This notification is a test.
            </div>
            <div class="time-stamp">
              1 min ago
            </div>
          </a>
          <a href="" class="A-notification">
            <div class="notification-content">
              This notification is a test.This notification is a test.This notification is a test.This notification is a test.
            </div>
            <div class="time-stamp">
              1 min ago
            </div>
          </a>
          <a href="" class="A-notification">
            <div class="notification-content">
              This notification is a test.This notification is a test.This notification is a test.This notification is a test.
            </div>
            <div class="time-stamp">
              1 min ago
            </div>
          </a>
          <a href="" class="A-notification">
            <div class="notification-content">
              This notification is a test.This notification is a test.This notification is a test.This notification is a test.
            </div>
            <div class="time-stamp">
              1 min ago
            </div>
          </a>
          
        </div>
      </div>
    </div>
    <div class="profile-login-btn">
      <a href="signin.php" class="sign-btn" id="signin">SignIn</a>
      <a href="signup.php" class="sign-btn" id="signup">SignUp</a>
      <a href="citizenProfile.php" class="profile-icn" id="citizen-pro">
        <img src="images/user.png" alt="user-icon">
      </a>
      <a href="officerProfile.php" class="profile-icn" id="officer-pro">
        <img src="images/officer.png" alt="officer-icon">
      </a>
    </div>

    <div class="menu-btn"></div>

    <!--drop down menu-->
    <div class="dropdownMenu">
      <div class="profile">
        <a href="citizenProfile.php" class="profile-icn" id="citizen-proD">
          <img src="images/user.png" alt="user-icon">
        </a>
        <a href="officerProfile.php" class="profile-icn" id="officer-proD">
          <img src="images/officer.png" alt="officer-icon">
        </a>
        <div class="profile-details">
          <h5>WTY Kavinda</h5>
          <span>ID:2003245556</span>
        </div>
      </div>
      <hr id="dropmenu-line-T">
      <div class="nav-dropDown-menu">
        <a href="index.php">Home</a>
        <a href="index.php#service">Services</a>
        <a href="index.php#About">About us</a>
        <a href="index.php#Contact">Contact</a>
      </div>
      <hr id="dropmenu-line-B">
      <div class="signbtn-dropdwn">
        <a href="signin.php" class="sign-btn" id="signinD">SignIn</a>
        <a href="signup.php" class="sign-btn" id="signupD">SignUp</a>
        <a href="index.php" class="sign-btn" id="signOut">SignOut</a>
      </div>
    </div>
  </header>
  <script src="script.js"></script>
</body>
=======
  <header>
    <div class="logo">
      <img src="images\logo.png">
    </div>
    <nav class="navigation">
          <a href="index.php">Home</a>
          <a href="#">Services</a>
          <a href="#">About us</a>
          <a href="#">Contact</a>
          <button><a href="signin.php" class="signin">Sign In</a></button>
          <a href="#"><img src="images/bell.png"></a>
    </nav>
  </header>
</body>
</html>