
<?php

session_start();

if ($_SESSION['admin']['loggedin'] !== true && !isset($_SESSION['admin']['username'])) {
  header("Location: ../Login/Login.php");
}
?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>

<link rel="stylesheet" href="css/Account-verification.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>

  <body>
    <div class="admin-registration">
      <header class="content">
        <div class="content-child"></div>
        <button class="rectangle-parent">
          <div class="frame-child"></div>
          <a href="Account-verification.php" class="verification">Verification</a>
        </button>
        <div class="history-wrapper">
          <a href="Account-History.php" class="history">History</a>
        </div>
      </header>
      <section class="account-info-wrapper">
        <div class="account-info">
          <a class="number-of-accounts">Number of Accounts</a>
          <div class="new-user-verification">
            <div class="user-verification">
              <b class="new-user-verification1">New User Verification</b>
              <div class="user-information">
                <div class="user-information-child"></div>
                <div class="user-name">
                  <b class="caudilla-mary-grace-container">
                    <p class="caudilla">CAUDILLA,</p>
                    <p class="mary-grace-pangan">MARY GRACE PANGAN</p>
                  </b>
                  <div class="user-i-d">
                    <div class="complete-name">Complete name</div>
                  </div>
                </div>
                <div class="user-name1">
                  <b class="p2024-01">P2024-01</b>
                  <div class="patient-id-wrapper">
                    <a class="patient-id">Patient ID</a>
                  </div>
                </div>
                <div class="user-creation">
                  <div class="creation-details">
                    <div class="rectangle-group">
                      <div class="frame-item"></div>
                      <b class="b">05/26/2024</b>
                    </div>
                    <div class="date-info">
                      <div class="date-created">Date created</div>
                    </div>
                  </div>
                </div>
                <div class="view-details">
                    <form>
                        <button id="openModal" type="button" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">View</button>
                    </form>

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
                        <div class="buttons"
                        style="
                              display: flex;
                              padding: 0 0 2rem 3rem;
                              gap: 36rem;
                          ">
                          <div class="cancel-btn">
                          <form action="">
                              <input type="submit" value="Cancel" style="cursor: pointer; width: 144px; height: 50px; background: none; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px;   color: rgba(216, 60, 50, 0.8); border: 2px solid rgba(216, 60, 50, 0.8);">
                          </form>
                          </div>
                          <div class="reject-verify-btn" style="display:flex; gap:7rem;">
                          <form action="">
                              <input type="submit" value="Reject" style="cursor: pointer; width: 144px; height: 50px; background: rgba(216, 60, 50, 0.8); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px;   color: #fdfdfd; border: 2px solid rgba(216, 60, 50, 0.8);;">
                          </form>
                          <form action="">
                              <input type="submit" value="Verify" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px;   color: #fdfdfd; border: 2px solid #00C8D2;">
                          </form>
                          </div>
                          </div>
                    </div>
                </div>
                </div>
                </div>
              </div>
              <div class="empty-content">
              <div class="div">01</div>
            </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
  <script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

  </script>