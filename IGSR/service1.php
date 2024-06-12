<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Providing income cetificates</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include_once 'header.php';
  ?>

  <div class="wrapper">
    <div class="section">
      <h1>Providing income cetificates</h1>
      <div class="sev-head"><p>The following steps should be followed to obtain a providing income cetificate.</p></div>

      <div class="sev-body">
      <p>The following steps should be followed to get an income certificate.</p>

      <ol>
        <li>Obtain and complete an income certificate application form from the Village Officers of their Division.
        </li>
        <li>Attested copy of a document that can prove your annual income.<br>
          <p> Example for this, </p><p>:- Land deed or license if income is derived from land.<br>
            :- If from a business, its registration certificate.<br>
            :- Vehicle registration certificate if income is from vehicles.</P>
        </li>
        <li>Do you work in a government or corporate organization?.<br>
        <P>if yes, (Attested copy of salary statement obtained from said institution.)</P></li>
        <li>Obtaining the Village Officer's recommendation for the application form.</li>        
      </ol>
      <p>If all the above steps are done correctly, hand over all the documents to the ". " officer of the Divisional Secretariat.</p>
      <p>Then he will tell you the amount of tax to be paid according to your annual income.</p>
      <p>Bring the money to the payment point of the Divisional Secretariat and hand over the receipt to the same officer after paying it.</p>
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