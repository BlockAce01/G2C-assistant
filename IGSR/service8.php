<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration of Voluntary Organization</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
  include_once 'header.php';
?>

  <div class="wrapper">
    <div class="section">
      <h1>Registration of Voluntary Organization</h1>
      <div class="sev-head"><p>You need to submit the following documents</p></div>

      <div class="sev-body">
      <p>The following documents must be submitted to Registration of Voluntary Organization</p>

      <ol>
        <li>Formal request letter written in relation to organization registration
        </li>
        <li>Application
        </li>
        <li>Attested copy of first meeting report and attendance register
        </li>
        <li>A certified copy of the minutes of the meeting and the attendance register where the constitution was passed
        </li>
        <li>Details of previous registration (if any)</li>
        <li>Audit report</li>
        <li>Details of bank accounts/funds.</li>
        <li>Deed of Agreement</li>
        <li>Details of officers of the Society</li>
        <li>Attested copy of membership register of the society
        </li>
        <li>A certified copy of the constitution</li>
        <li>Recommendation of Village Officer</li>
        <li>Future work plan</li>
      </ol>
      

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