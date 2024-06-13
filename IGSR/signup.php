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

    if (district === "Kandy") {
    options = [
      "Akurana", "Delthota", "Doluwa", "Gangawata Korale", "Ganga Ihala Korale", 
      "Harispattuwa", "Hatharaliyadda", "Kundasale", "Medadumbara", "Minipe", 
      "Panvila", "Pasbage Korale", "Pathadumbara", "Pathahewaheta", "Poojapitiya", 
      "Thumpane", "Udadumbara", "Udapalatha", "Udunuwara", "Yatinuwara"
    ];
  } else if (district === "Matale") {
    options = [
      "Ambanganga Korale", "Dambulla", "Galewela", "Laggala-Pallegama", "Matale", 
      "Naula", "Pallepola", "Rattota", "Ukuwela", "Wilgamuwa", "Yatawatta"
    ];
  } else if (district === "Nuwara Eliya") {
    options = [
      "Ambagamuwa", "Hanguranketha", "Kothmale", "Nuwara Eliya", "Walapane", 
      "Norwood", "Kothmale West", "Nildandahinna", "Thalawakale", "Mathurata"
    ];
  } else if (district === "Ampara") {
    options = [
      "Addalachchenai", "Akkaraipattu", "Alayadiwembu", "Ampara", "Damana", 
      "Dehiattakandiya", "Eragama", "Kalmunai Muslim", "Kalmunai Tamil", 
      "Karaitivu", "Lahugala", "Mahaoya", "Navithanveli", "Ninthavur", 
      "Padiyathalawa", "Pothuvil", "Sainthamarathu", "Samanthurai", "Thirukkovil", 
      "Uhana"
    ];
  } else if (district === "Batticaloa") {
    options = [
      "Eravur Pattu", "Eravur Town", "Kattankudy", "Koralai Pattu", 
      "Koralai Pattu Central", "Koralai Pattu North", "Koralai Pattu South", 
      "Koralai Pattu West", "Manmunai North", "Manmunai Pattu", 
      "Manmunai S. and Eruvil Pattu", "Manmunai South West", "Manmunai West", 
      "Porativu Pattu"
    ];
  } else if (district === "Trincomalee") {
    options = [
      "Gomarankadawala", "Kantalai", "Kinniya", "Kuchchaveli", "Morawewa", 
      "Muttur", "Padavi Sri Pura", "Seruvila", "Thambalagamuwa", "Trincomalee", 
      "Verugal"
    ];
  } else if (district === "Anuradhapura") {
    options = [
      "Galnewa", "Galenbindunuwewa", "Horowpothana", "Ipalogama", "Kahatagasdigiliya", 
      "Kebithigollewa", "Kekirawa", "Mahavilachchiya", "Medawachchiya", "Mihinthale", 
      "Nachchadoowa", "Nochchiyagama", "Nuwaragam Palatha Central", "Nuwaragam Palatha East", 
      "Padaviya", "Palagala", "Palugaswewa", "Rajanganaya", "Rambewa", "Thalawa", 
      "Thambuttegama", "Thirappane"
    ];
  } else if (district === "Polonnaruwa") {
    options = [
      "Dimbulagala", "Elahera", "Hingurakgoda", "Lankapura", "Medirigiriya", 
      "Thamankaduwa", "Welikanda"
    ];
  } else if (district === "Galle") {
    options = [
      "Akmeemana", "Ambalangoda", "Baddegama", "Balapitiya", "Bentota", 
      "Bope-Poddala", "Elpitiya", "Galle Four Gravets", "Gonapinuwala", 
      "Habaraduwa", "Hikkaduwa", "Imaduwa", "Karandeniya", "Nagoda", 
      "Niyagama", "Neluwa", "Thawalama", "Welivitiya-Divithura", "Yakkalamulla"
    ];
  } else if (district === "Matara") {
    options = [
      "Athuraliya", "Akurassa", "Devinuwara", "Dickwella", "Hakmana", 
      "Kamburupitiya", "Kirinda Puhulwella", "Kotapola", "Malimbada", 
      "Matara Four Gravets", "Mulatiyana", "Pasgoda", "Pitabeddara", 
      "Thihagoda", "Weligama", "Welipitiya"
    ];
  } else if (district === "Hambantota") {
    options = [
      "Ambalantota", "Angunakolapelessa", "Beliatta", "Hambantota", 
      "Katuwana", "Lunugamvehera", "Okewela", "Sooriyawewa", "Tangalle", 
      "Tissamaharama", "Weeraketiya"
    ];
  } else if (district === "Jaffna") {
    options = [
      "Chankanai", "Chavakachcheri", "Delft", "Island North", "Island South", 
      "Jaffna", "Karainagar", "Nallur", "Point Pedro", "Sandilipay", "Tellippalai", 
      "Uduvil", "Velanai"
    ];
  } else if (district === "Kilinochchi") {
    options = [
      "Karachchi", "Kandawalai", "Pachchilaipalli", "Poonakary"
    ];
  } else if (district === "Mannar") {
    options = [
      "Mannar", "Madhu", "Manthai West", "Musalai", "Nanaddan"
    ];
  } else if (district === "Vavuniya") {
    options = [
      "Vavuniya", "Vavuniya North", "Vavuniya South", "Venkalacheddikulam"
    ];
  } else if (district === "Mullaitivu") {
    options = [
      "Maritimepattu", "Oddusuddan", "Puthukudiyiruppu", "Thunukkai", "Welioya"
    ];
  } else if (district === "Kurunegala") {
    options = [
      "Alawwa", "Ambanpola", "Bamunakotuwa", "Bingiriya", "Ehetuwewa", 
      "Galgamuwa", "Ganewatta", "Giribawa", "Ibbagamuwa", "Katupotha", 
      "Kobeigane", "Kotavehera", "Kuliyapitiya East", "Kuliyapitiya West", 
      "Kurunegala", "Maho", "Maspotha", "Mawathagama", "Narammala", "Panduwasnuwara", 
      "Polgahawela", "Pothuheara", "Rasnayakapura", "Rideegama", "Udubaddawa", 
      "Wariyapola", "Weerambugedara"
    ];
  } else if (district === "Puttalam") {
    options = [
      "Anamaduwa", "Arachchikattuwa", "Chillaw", "Dankotuwa", "Kalpitiya", 
      "Karuwalagaswewa", "Mahakumbukkadawala", "Mundel", "Nattandiya", 
      "Nawagaththegama", "Pallama", "Puttalam", "Vanathavilluwa", "Wennappuwa"
    ];
  } else if (district === "Colombo") {
    options = [
      "Colombo", "Dehiwala", "Homagama", "Kaduwela", "Kesbewa", 
      "Kolonnawa", "Maharagama", "Moratuwa", "Padukka", "Ratmalana", 
      "Seethawaka", "Sri Jayawardanapura Kotte", "Thimbirigasyaya"
    ];
  } else if (district === "Gampaha") {
    options = [
      "Attanagalla", "Biyagama", "Divulapitiya", "Dompe", "Gampaha", 
      "Ja-Ela", "Katana", "Kelaniya", "Mahara", "Minuwangoda", 
      "Mirigama", "Negombo", "Wattala"
    ];
  } else if (district === "Kalutara") {
    options = [
      "Agalawatta", "Bandaragama", "Beruwala", "Bulathsinhala", "Dodangoda", 
      "Horana", "Ingiriya", "Kalutara", "Madurawala", "Matugama", 
      "Millaniya", "Palindanuwara", "Panadura", "Walallawita"
    ];
  } else if (district === "Kegalle") {
    options = [
      "Aranayaka", "Bulathkohupitiya", "Dehiowita", "Deraniyagala", 
      "Galigamuwa", "Kegalle", "Mawanella", "Rambukkana", "Ruwanwella", 
      "Warakapola", "Yatiyanthota"
    ];
  } else if (district === "Ratnapura") {
    options = [
      "Balangoda", "Eheliyagoda", "Elapatha", "Embilipitiya", "Godakawela", 
      "Imbulpe", "Kalawana", "Kiriella", "Kuruwita", "Kolonna", 
      "Nivithigala", "Opanayake", "Pelmadulla", "Ratnapura", "Weligepola"
    ];
  } else if (district === "Badulla") {
    options = [
      "Badulla", "Bandarawela", "Ella", "Hali Ela", "Haputale", 
      "Lunugala", "Mahiyanganaya", "Meegahakiula", "Passara", "Soranathota", 
      "Uva-Paranagama", "Welimada", "Wiyaluwa"
    ];
  } else if (district === "Monaragala") {
    options = [
      "Badalkumbura", "Bibile", "Buttala", "Kataragama", "Madulla", 
      "Medagama", "Monaragala", "Sevanagala", "Siyambalanduwa", "Thanamalwila", 
      "Wellawaya"
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