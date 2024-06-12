<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permits for felling wood</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include_once 'header.php';
  ?>

  <div class="wrapper">
    <div class="section">
      <h1>Permits for felling wood</h1>
      <div class="sev-head"><p>The following steps should be followed to obtain a permit for logging.</p></div>

      <div class="sev-body">
      <p>The following documents must be submitted to obtain a logging permit.</p>

      <ul>
        <li>Letter of request to the Divisional Secretary
        </li>
        <li>Completed application form obtained from the Divisional Secretariat.</li>
        <li>Copy of grant letter attested by Grama Niladhari.</li>
        <li>Death certificate if the owner is deceased, husband/wife request letter and children's consent letters.</li>
        <li>Written consent of the partners certified by the Village Officer in case of joint land.</li>
        <li>If it is a court order, the written order.</li>
        <li>Bank's and Power of Attorney letter if the deed is mortgaged.</li>
        <li>If a local council order, that written order.</li>
        <li>Explanatory Letter of Margin if Reserved Adjacent.</li>
      </ul>
      <p>Submit your request in writing to the Divisional Secretariat</p>
      <p>Write the reason for felling trees correctly and clearly in the application form you receive</p>

      <div class="sev-head"><p>Tree felling permit will be issued after inspecting the trees and getting the recommendation report of the village officer, forest officer, and agriculture consultant.</p></div>

      </div>
    </div>

    <div class="section" style="width: 70%;">
      <form style="width: 95%;">
        <h1>Get the Service</h1>
        <div class="regi-head">
          <h2>Divitional Secretariat Office</h2>
        </div>

        <div class="two-forms">
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <input type="text" class="input-field" placeholder="District">
          </div>
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <input type="text" class="input-field" placeholder="DS Divition">
          </div>
        </div>

        <div class="regi-head">
          <h2>Choose Date</h2>
        </div>
        <img src="images/calander.png" style="margin: 30px;">

        <button type="submit" class="btn">Confirm</button>
      </form>
    </div>
  </div>

  <?php
  include_once 'footer.php';
?>
  <!--end of footer section-->
</body>
</html>