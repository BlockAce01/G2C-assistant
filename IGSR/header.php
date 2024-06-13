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
      <a class="service-btn">Services</a>
      <div class="service-box">
        <ul>
          <li><a href="service1.php">Providing income certificates</a></li>
          <li><a href="service2.php">Permits for felling wood</a></li>
          <li><a href="service3.php">Licenses for Timber transportation</a></li>
          <li><a href="service4.php">Permits for dumping and transportation of sand, soil, and gravel</a></li>
          <li><a href="service5.php">Permits for dumping transportation of animals</a></li>
          <li><a href="service6.php">Mode of obtaining Birth/Marriage/Death Certificates issued</a></li>
          <li><a href="service7.php">Registration of Business Names</a></li>
          <li><a href="service8.php">Registration of Voluntary Organization</a></li>
        </ul>
      </div>
      <a href="/IGSR/index.php#About">About us</a>
      <a href="/IGSR/index.php#Contact">Contact</a>
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
          <h5>ABC Darmapala</h5>
          <span>ID:2000245556</span>
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
</html>