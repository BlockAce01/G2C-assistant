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




      
      <h1>Registration of Business Names</h1>
      
      <div class="sev-head"><p>Following steps should be followed to register business name.</p></div>

      <div class="sev-body">
      <p>First of all, you have to go to the local council belonging to the divisional secretariat where your business is run and pay the fee for the relevant year and get the trade license.</p>
      <br>
      <p>After you get the trade license, you can get the set of application forms related to business name registration from the divisional secretariat office where your business belongs.</p>
      <br>


      <p style="text-align: center;">Documents to be submitted in addition to the application set</p>
      <ul>
        <li>Deed copy of the land where the business is running.
        </li>
        <li>Sheets of land acquired in fourteen days.
        </li>
        <li>If the ownership of the land is owned by someone else, the letter expressing the consent of the owner.
        </li>
        <li>If it is a lease agreement, that agreement.</li>
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