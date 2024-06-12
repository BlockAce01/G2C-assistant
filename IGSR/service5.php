<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permits for dumping transportation of animals</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include_once 'header.php';
  ?>

  <div class="wrapper">
    <div class="section">
      <h1>Permits for dumping transportation of animals</h1>
      <div class="sev-head"><p>The following steps should be followed to obtain a permit for dumping and transporting animals.</p></div>

      <div class="sev-body">
      <p>The following documents must be submitted to obtain a permit to transport animals.</p>

      <ul>
        <li>Application form.
        </li>
        <li>Post medical report.</li>
        <li>Animal vouchers.</li>
        <li>Village Officer's report proving ownership.</li>
        <li>Receipt of payment of due fee.</li>
        <li>Other documents may be required depending on the nature of the transport.</li>
      </ul>

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