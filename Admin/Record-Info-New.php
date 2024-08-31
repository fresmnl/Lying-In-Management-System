<?php

session_start();

require '../Database/db-admin.php';

$db_admin = new Admin();

if ($_SESSION['admin']['loggedin'] !== true && !isset($_SESSION['admin']['username'])) {
  header("Location: ../Login/Login.php");
}
?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>
<link rel="stylesheet" href="css/Record-Info-New.css" />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
</head>
<style>
.accounts-table { width: 100%; overflow-x: auto; } .simple-table { width: 100%; min-width: 1000px; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); } .simple-table th, .simple-table td { border: 1px solid #ddd; padding: 8px; text-align: left; white-space: nowrap; color: #004168; } .simple-table th { background-color: rgba(0, 172, 206, 0.4); font-weight: bold; } .simple-table tr:nth-child(even) { background-color: #f9f9f9; }
.simple-table button{background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;}
.modal { display: none; position: fixed; z-index: 2; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4); } .modal-content { background-color: #fefefe; margin: 15% auto; border: 1px solid #888; width: 78%; border-radius: 10px; position: relative; left: 8rem; top: -5rem; } .close { color: #aaa; float: right; font-size: 28px; font-weight: bold; } .close:hover, .close:focus { color: black; text-decoration: none; cursor: pointer; } .Patient-h { background-color: #00ACCE; color: #fdfdfd; font-family: 'Lato'; font-style: normal; font-weight: 700; font-size: 22px; line-height: 26px; text-align: center; padding: 1rem; } .personal-container { margin: 3rem; border: 2.5px solid rgba(0, 172, 206, 0.6); border-radius: 15px; background-color: #ECFCFF; } .personal-heading { padding: 0.7rem; font-size: 21px; border-bottom: 2.5px solid rgba(0, 172, 206, 0.6); text-align: center; color: #004168; } .personal-div1, .personal-div2, .personal-div3, .personal-div4, .personal-div5, .personal-div6, .personal-div7 { display: flex; gap: 14rem; padding: 8px; } .personal-div5 { gap: 11rem; } .personal-div7 { gap: 32rem; } .name-div, .bday-div, .age-div { display: flex; } p { font-family: 'Lato'; font-style: normal; font-weight: 500; font-size: 18px; line-height: 22px; } .p1, .p2 { color: rgba(0, 65, 104, 0.8); } .p1-value { color: #004168; } .p2 { text-align: left; } .past-p { font-family: 'Lato'; font-style: normal; font-weight: 900; font-size: 20px; line-height: 24px; color: #004168; text-align: left; padding: 0.5rem; margin-top: 1rem; } .button-container { display: flex; } .done-btn { width: 144px; height: 50px; background: #00C8D2; border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; text-align: center; color: #FDFDFD; margin: 1rem 1.5rem 1rem 1rem; margin-left: auto; }
</style>

<body>
  <div class="admin-record-account">
    <section class="main">
      <header class="rectangle-parent">
      </header>
      <div class="health-facility-details-wrapper">
        <div class="health-facility-details">
          <div class="health-facility-details-inner">
            <div class="search-input-fields-parent">
              <div class="search-input-fields">
                <h3 class="information-of-health">
                  Account of Patients
                </h3>
              </div>
              <div class="rectangle-group">
                <div class="frame-item"></div>
                <input class="search" placeholder="Search..." type="text" />

                <div class="search-layer">
                  <img
                    class="layer-1-icon"
                    alt=""
                    src="./public/layer-1.svg" />
                </div>
              </div>
            </div>
          </div>
          <div class="account-numbers">
            <b class="number-of-accounts">Number of Accounts</b>
            <div class="number-value"><?= htmlspecialchars($db_admin->getNumberOfPatientAccount() ?? '0', ENT_QUOTES) ?></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <main class="accounts-table" style=" width: 68rem;margin-left: 21rem;">
  <table class="simple-table">
        <thead>
            <tr>
            <th>Action</th> <th>Action</th> <th>Patient ID</th> <th>Name of Patient</th> <th>Username</th> <th>Password</th> <th>Date Created</th> <th>Birthdate</th> <th>Age</th> <th>Sex</th> <th>Civil Status</th> <th>Email Address</th> <th>Phone Number</th> <th>Address</th> <th>Educational Attainment</th> <th>Employment Status</th> <th>Occupation</th> <th>DSWD NHTS</th> <th>4Ps Member</th> <th>ID Type</th> <th>Attach File</th> <th>Smoker</th> <th>Pack/Years</th> <th>Drinker</th> <th>Bottle/Day</th> <th>Drug Use/Abuse</th> <th>Hypertension</th> <th>Asthma</th> <th>Blood<br>Disorder</th> <th>Heart<br>Disorder</th> <th>Liver<br> Disorder</th> <th>Kidney<br>Disorder</th> <th>Pulmonary<br>Tuberculosis</th> <th>Diabetes<br>Mellitus</th> <th>Type</th> <th>Cancer</th> <th>Type</th> <th>Stage</th> <th>Skin<br>Disease</th> <th>Type</th> <th>Allergy</th> <th>Type</th> <th>Others</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button>Deactivate</button></td>
                <td><button  id="openModal" type="button">View</button></td>
            </tr>
       
        </tbody>
    </table>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="verification-container">
                          <div class="Patient-h">Patient Verification</div>
                          <div class="personal-container">
                            <p class="personal-heading">Personal Details</p>
                              <div class="personal-div1">
                                <div class="name-div">
                                  <p class="p1">Complete Name:</p>
                                  <p>Caudilla, Mary Grace Pangan</p>
                                </div>
                                <div class="bday-div">
                                  <p class="p1">Birthdate:</p>
                                  <p>03/05/2003</p>
                                </div>
                                <div class="age-div">
                                  <p class="p1">Age:</p>
                                  <p>21</p>
                                </div>
                              </div>
                              <div class="personal-div2">
                                <div class="name-div">
                                  <p class="p1">Sex:</p>
                                  <p>Female</p>
                                </div>
                                <div class="bday-div">
                                  <p class="p1">Civil Status:</p>
                                  <p>Single</p>
                                </div>
                                <div class="age-div">
                                  <p class="p1">Email Address:</p>
                                  <p>mgpcaudilla@gmail.com</p>
                                </div>
                              </div>
                              <div class="personal-div3">
                                <div class="name-div">
                                  <p class="p1">Phone Number:</p>
                                  <p>+63 (987) 654 3210</p>
                                </div>
                                <div class="bday-div">
                                  <p class="p1">Complete Address:</p>                                  
                                  <p>102 Orchids Tagumpay Orani Bataan</p>
                                </div>
                              </div>
                              <div class="personal-div4">
                                <div class="name-div">
                                  <p class="p1">Educational Attainment:</p>
                                  <p>College</p>
                                </div>
                                <div class="bday-div">
                                  <p class="p1">Employment Status:</p>
                                  <p>Student</p>
                                </div>
                                <div class="age-div">
                                  <p class="p1">Occupation:</p>
                                  <p>N/A</p>
                                </div>
                              </div>
                              <div class="personal-div5">
                                <div class="name-div">
                                  <p class="p1">DSWD NHTS:</p>
                                  <p>No</p>
                                </div>
                                <div class="bday-div">
                                  <p class="p1">4Ps Member:</p>
                                  <p>No</p>
                                </div>
                                <div class="age-div">
                                  <p class="p1">ID Type:</p>
                                  <p>Philippine Identification System ID (PhilID)</p>
                                </div>
                              </div>
                              <div class="personal-div6">
                                <div class="name-div">
                                  <p class="p1">Attach File:</p>
                                </div>
                              </div>
                          </div>
                          <div class="personal-container">
                            <p class="personal-heading">History</p>
                            <div class="past-container"><p class="past-p">Past Surgical History</p></div>
                              <div class="personal-div1">
                                <div class="name-div">
                                  <p class="p1">Major / Minor Operation:</p>
                                  <p>Ovarian Cystectomy</p>
                                </div>
                                <div class="bday-div">
                                <p class="p1">Date:</p>
                                <p>05/21/2000</p>
                                </div>
                              </div>
                              <div class="personal-div2">
                              <div class="name-div">
                                  <p class="p1">Major / Minor Operation:</p>
                                  <p>Ovarian Cystectomy</p>
                                </div>
                                <div class="bday-div">
                                <p class="p1">Date:</p>
                                <p>05/21/2000</p>
                                </div>
                              </div>
                              <div class="past-container"><p class="past-p">Personal and Social History</p></div>
                              <div class="personal-div3">
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Smoker</p>
                                  <p class="p2">Pack/Years: <span class="p1-value">0</span></p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Alcoholic Beverage Drinker</p>
                                  <p class="p2">Bottles/Day: <span class="p1-value">0</span></p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Drugs Use / Abuse</p>
                                </div>
                              </div>
                              <div class="past-container"><p class="past-p">Family History</p></div>
                              <div class="personal-div3">
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Hypertension</p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Asthma</p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Blood Disorder</p>
                                </div>
                              </div>
                              <div class="personal-div3">
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Heart Disorder</p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Liver Disorder</p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Kidney Disorder</p>
                                </div>
                              </div>
                              <div class="personal-div3">
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Pulmonary Tuberculosis</p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Diabetes Mellitus</p>
                                  <p class="p2">Type: <span class="p1-value"></span></p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Cancer</p>
                                  <p class="p2">Type: <span class="p1-value"></span></p>
                                  <p class="p2">Stage: <span class="p1-value"></span></p>
                                </div>
                              </div>
                              <div class="personal-div3">
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Skin Disease </p>
                                  <p class="p2">Type: <span class="p1-value"></span></p>
                                </div>
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Allergy</p>
                                  <p class="p2">Type: <span class="p1-value"></span></p>
                                </div>
                              </div>
                              <div class="personal-div3">
                                <div class="checkbox-div">
                                  <p> <input type="checkbox">Others:</p>
                                </div>
                              </div>
                          </div>
                          <div class="personal-container">
                            <p class="personal-heading">Registration</p>
                              <div class="personal-div7">
                                <div class="name-div">
                                  <p class="p1">Username:</p>
                                  <p>Caudilla, Mary Grace Pangan</p>
                                </div>
                                <div class="bday-div">
                                <p class="p1">Password:</p>
                                <p> ●●●●●●●●</p>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="button-container">
                          <button class="done-btn">Done</button>
                        </div>
                    </div>
                </div>
  </main>
</body>
<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModal");

// Get the <span> element that closes the modal
var closeButton = document.querySelector('.done-btn');

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
      });

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

  </script>