<!---------------start in header section-------------->
<?php
  include_once 'header.php';
?>
<!----------------end of header section---------------->




<!--------------start in body section------------------->
  <div class="wrapper">
    <div class="section" style="width: 70%;">
        
      <form style="width: 95%;" action="includes/signup.inc.php" method="POST">
        <h1>Register as a Citizen</h1>
        <div class="regi-head">
          <h2>User Information</h2>
        </div>
        <div class="two-forms">
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <input type="text" name="initials" class="input-field" placeholder="Initials">
          </div>
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <input type="text" name="lastname" class="input-field" placeholder="Lastname">
          </div>
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Email" required>
          <i class='bx bxs-envelope'></i>
        </div>
        <div class="two-forms">
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <input type="text" name="nic" class="input-field" placeholder="NIC Number">
          </div>
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <input type="number" name="pnumber" class="input-field" placeholder="Phone Number">
          </div>
        </div>

        <div class="regi-head">
          <h2>Divitional Secretariat Office</h2>
        </div>

        <div class="two-forms">
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <select name="district" class="input-field" id="district" onchange="updateDSO()">
               <option value="" selected disabled>Select District</option>
               <option value="Ampara">Ampara</option>
               <option value="Anuradhapura">Anuradhapura</option>
               <option value="Badulla">Badulla</option>
               <option value="Batticaloa">Batticaloa</option>
               <option value="Colombo">Colombo</option>
               <option value="Galle">Galle</option>
               <option value="Gampaha">Gampaha</option>
               <option value="Hambantota">Hambantota</option>
               <option value="Jaffna">Jaffna</option>
               <option value="Kalutara">Kalutara</option>
               <option value="Kandy">Kandy</option>
               <option value="Kegalle">Kegalle</option>
               <option value="Kilinochchi">Kilinochchi</option>
               <option value="Kurunegala">Kurunegala</option>
               <option value="Mannar">Mannar</option>
               <option value="Matale">Matale</option>
               <option value="Matara">Matara</option>
               <option value="Monaragala">Monaragala</option>
               <option value="Mullaitivu">Mullaitivu</option>
               <option value="Nuwara Eliya">Nuwara Eliya</option>
               <option value="Polonnaruwa">Polonnaruwa</option>
               <option value="Puttalam">Puttalam</option>
               <option value="Ratnapura">Ratnapura</option>
               <option value="Trincomalee">Trincomalee</option>
               <option value="Vavuniya">Vavuniya</option>
           </select>
          </div>
          <div class="input-box">
              <i class="bx bxs-user"></i>
              <select name="dsdivision" class="input-field" id="dsdivision">
                <option value="" selected disabled>Select DS Division</option>
                <!-- DSO options will be updated dynamically based on district selection -->
              </select>
          </div>
        </div>

        <div class="regi-head">
          <h2>Password</h2>
        </div>

        <div class="input-box">
          <input type="password" name="password" placeholder="Password" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="input-box">
          <input type="password" name="repassword" placeholder="Re-enter Password" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        
        <button type="submit" class="btn" name="submit" >Register</button>
      </form>
    </div>
  </div>
<!----------end of body section------------------------>






<!--------------start of java script section------------------------------------------------------------------------>

<script>
function updateDSO() {
    var district = document.getElementById("district").value;
    var dsdivision = document.getElementById("dsdivision");
    dsdivision.innerHTML = ""; // Clear previous options

    if (district === "Ampara") {
        var options = [
            "Addalachchenai",
            "Akkaraipattu",
            "Ampara",
            // Add more DSO options for Ampara district
        ];
    } else if (district === "Anuradhapura") {
        var options = [
            "Anuradhapura East",
            "Anuradhapura West",
            // Add more DSO options for Anuradhapura district
        ];
    }
    // Add else-if blocks for all 25 districts with respective DSO options

    // Add options to the select element
    for (var i = 0; i < options.length; i++) {
        var option = document.createElement("option");
        option.text = options[i];
        option.value = options[i];
        dsdivision.add(option);
    }
}
</script>

<!-----------------------------------------------end of java script----------------------------------------------->




<!-------------------footer section--------------->
<?php
  include_once "footer.php";
?>
<!------------------end of footer----------------->