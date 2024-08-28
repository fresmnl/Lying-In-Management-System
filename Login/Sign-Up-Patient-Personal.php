<?php
session_start();

require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");



?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="css/Sign-Up-Patient.css" />
<link rel="icon" type="image/x-icon" href="../Admin/images/webpage-logo.png">
<link rel="stylesheet" href="../src/output.css" />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
<title>Create an Account - Personal</title>
</head>

<body>
  <div class="sign-up-patient-personal-d">
    <form action="Sign-Up-Patient-History.php" method="POST">
      <input type="hidden" name="step" value="1">
      <main class="main-container">
        <div class="main-container-child"></div>
        <section class="content-area">
          <div class="content-area-child"></div>
          <div class="branding-and-login">
            <img
              class="logo-white-1"
              loading="lazy"
              alt=""
              src="images/signup-logo.svg" />
          </div>
          <div class="account-actions">
            <div class="create-account-heading-parent">
              <div class="create-account-heading">
                <a class="create-an-account">Create an Account</a>
              </div>
              <div class="provide-the-required">
                Provide the required information to get started.
              </div>
            </div>
          </div>
          <div class="login-actions-wrapper">
            <div class="login-actions">
              <div class="account-message">
                <div class="already-have-an">Already have an account?</div>
              </div>
              <button class="sign-in-button">
                <div class="sign-in-button-child"></div>
                <a class="sign-in" href="Login.php">Sign in</a>
              </button>
            </div>
          </div>
        </section>
        <section class="progress-indicator">
          <div class="steps-container">
            <div class="step-items">
              <div class="steps">
                <div class="step-indicators">
                  <div class="indicators"></div>
                  <a class="a">1</a>
                </div>
                <div class="step-indicators1">
                  <div class="step-indicators-child"></div>
                </div>
                <div class="step-indicators2">
                  <div class="step-indicators-item"></div>
                  <a class="a1">2</a>
                </div>
                <div class="step-indicators3">
                  <div class="step-indicators-inner"></div>
                </div>
                <div class="step-indicators4">
                  <div class="ellipse-div"></div>
                  <a class="a2">3</a>
                </div>
              </div>
            </div>
            <div class="form-container">
              <div class="form-fields">
                <div class="personal-details-title-parent">
                  <div class="personal-details-title">
                    <div class="details-title">
                      <div class="personal-details">Personal Details</div>
                      <div class="history">History</div>
                    </div>
                  </div>
                  <div class="if-a-particular-container">
                    <span class="if-a-particular">If a particular field does not apply to you, kindly
                      enter</span>
                    <b> "N/A"</b>
                    <span class="not-applicable-in">
                      (Not Applicable) in that field.</span>
                  </div>
                </div>
              </div>
              <div class="registration">Registration</div>
            </div>
          </div>
          <div class="name-and-r-h-u">
            <div class="rectangle-parent">
              <!-- <div class="frame-child"></div>
              <div class="designated-r-h-u-label-parent">
                <div class="designated-r-h-u-label">
                  <b class="designated-rhu-name">Health Facility</b>
                </div>
                <div class="rectangle-group">
                  <div class="frame-item"></div>
                  <div class="r-h-u-dropdown">

                    Dropdown using select
                    <select id="dropdownSelect" name="health_facility" class="select-rhu" required>
                      <option value="">Select Health Facility</option>
                      <?php $HealthfacilityNames = $db_conn->getHealthFacilityNames();

                      if (empty($HealthfacilityNames)) {
                        echo '<option value="">No facilities available' . $HealthfacilityNames . '</option>';
                      } else {
                        foreach ($HealthfacilityNames as $healthfacilityName) {
                          echo '<option value="' . $healthfacilityName['Name'] . '">' . $healthfacilityName['Name'] . '</option>';
                        }
                      }
                      ?>
                      <option <?= isset($_SESSION['health_facility']) && $_SESSION['health_facility'] === "RHU" ? "selected" : "" ?> value="RHU">RHU</option>
                    </select>
                  </div>
                </div>
              </div> -->
              <div class="name-fields">
                <div class="name-labels">
                  <b class="first-name">First Name<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                </div>
                <div class="rectangle-container">
                  <div class="frame-inner"></div>
                  <input
                    class="enter-your-first"
                    placeholder="Enter your first name"
                    type="text"
                    name="first_name"
                    value="<?= htmlspecialchars($_SESSION['first_name'] ?? '', ENT_QUOTES) ?>"
                    required />
                </div>
              </div>
              <div class="middle-name-label-parent">
                <div class="middle-name-label">
                  <b class="middle-name">Middle Name<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                </div>
                <div class="rectangle-container">
                  <div class="frame-inner"></div>
                  <input
                    class="enter-your-first"
                    placeholder="Enter your middle name"
                    type="text"
                    name="middle_name"
                    value="<?= htmlspecialchars($_SESSION['middle_name'] ?? '', ENT_QUOTES) ?>"
                    required />
                </div>
                <div class="middle-name-instruction">
                  <div class="write-a-dash">
                    Write a dash (-) if no middle name
                  </div>
                </div>
              </div>
              <div class="name-fields1">
                <div class="last-name-wrapper">
                  <b class="last-name">Last Name<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                </div>
                <div class="rectangle-parent1">
                  <div class="frame-child1"></div>
                  <input
                    class="enter-you-last"
                    placeholder="Enter you last name"
                    type="text"
                    name="last_name"
                    value="<?= htmlspecialchars($_SESSION['last_name'] ?? '', ENT_QUOTES) ?>"
                    required />
                </div>
              </div>
            </div>
          </div>
          <div class="contact-and-demographics">
            <div class="contact-and-demographic-fields">
              <div class="left-column">
                <div class="left-column-child"></div>
                <div class="contact-details">
                  <div class="sex-and-status">
                    <div class="sex-field">
                      <b class="sex">Sex<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    </div>
                    <div class="r-h-u-dropdown">
                      <!-- Dropdown using select -->
                      <select id="dropdownSex" name="sex" class="select-rhu" required>
                        <option value="">Select a sex</option>
                        <option <?= isset($_SESSION['sex']) && $_SESSION['sex'] === "Female" ? "selected" : "" ?> value="Female">Female</option>
                        <option <?= isset($_SESSION['sex']) && $_SESSION['sex'] === "Male" ? "selected" : "" ?> value="Male">Male</option>
                        <option <?= isset($_SESSION['sex']) && $_SESSION['sex'] === "Others" ? "selected" : "" ?> value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="civil-status">
                    <b class="civil-status1">Civil Status<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    <div class="r-h-u-dropdown">
                      <!-- Dropdown using select -->
                      <select id="dropdownSex" name="civil_status" class="select-rhu" required> //TO DO - duplicate id name
                        <option value="">Select a status</option>
                        <option <?= isset($_SESSION['civil_status']) && $_SESSION['civil_status'] === "Single" ? "selected" : "" ?> value="Single">Single</option>
                        <option <?= isset($_SESSION['civil_status']) && $_SESSION['civil_status'] === "Married" ? "selected" : "" ?> value="Married">Married</option>
                        <option <?= isset($_SESSION['civil_status']) && $_SESSION['civil_status'] === "Divorced" ? "selected" : "" ?> value="Divorced">Divorced</option>
                        <option <?= isset($_SESSION['civil_status']) && $_SESSION['civil_status'] === "Widowed" ? "selected" : "" ?> value="Widowed">Widowed</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="right-column">
                  <div class="birthdate-and-age">
                    <div class="birthdate-field">
                      <b class="birthdate">Birthdate<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    </div>
                    <div class="birthdate-input">
                      <div class="birthdate-input-child"></div>
                      <input name="birth_date" type="hidden" value="" id="birthday">
                      <div class="mmddyyyy" id="displayDate"><?= htmlspecialchars($_SESSION['birth_date'] ?? 'mm/dd/yyyy', ENT_QUOTES) ?></div>
                      <img
                        class="placeholder-icon"
                        alt="Calendar"
                        src="images/calendar.svg"
                        id="calendarIcon" />
                      <div class="calendar-popup" id="calendarPopup">
                        <div class="calendar-header">
                          <select id="monthSelect" required></select>
                          <select id="yearSelect" required></select>
                        </div>
                        <div class="calendar-days" id="calendarDays">
                          <!-- Days of the week will be inserted here -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="age-field">
                    <div class="age-label">
                      <b class="age">Age</b>
                    </div>
                    <div class="rectangle-parent2">
                      <div class="frame-child2"></div>
                      <input name="age" type="hidden" value="" id="age">
                      <div class="calculated-from-birthdate" id="ageText">
                        <?= htmlspecialchars($_SESSION['age'] ?? 'Calculated from birthdate', ENT_QUOTES) ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="left-column1">
                <div class="left-column-item"></div>
                <div class="frame-parent">
                  <div class="email-address-wrapper">
                    <b class="email-address">Email Address<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  </div>
                  <div class="frame-div">
                    <div class="frame-child3"></div>
                    <input
                      class="examplegmailcom"
                      placeholder="example@gmail.com"
                      type="email"
                      name="email_address"
                      value="<?= htmlspecialchars($_SESSION['email_address'] ?? '', ENT_QUOTES) ?>"
                      required />
                  </div>
                </div>
                <div class="frame-group">
                  <div class="phone-number-wrapper">
                    <b class="phone-number">Phone Number<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  </div>
                  <div class="rectangle-parent3">
                    <div class="frame-child4"></div>
                    <input
                      class="xxx-yyy-zzzz"
                      placeholder="Ex. +639518743351"
                      type="tel"
                      maxlength="14"
                      name="contact_number"
                      id="contactNumber"
                      value="<?= htmlspecialchars($_SESSION['contact_number'] ?? '', ENT_QUOTES) ?>"
                      required />
                  </div>
                </div>
              </div>
            </div>
            <div class="rectangle-parent4">
              <div class="frame-child5"></div>
              <div class="address-label">
                <div class="complete-address">Complete Address:</div>
              </div>
              <div class="address-fields">
                <div class="street-and-barangay">
                  <div class="street">
                    <b class="no-street">No. & Street<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    <div class="city-province">
                      <div class="barangay-field">
                        <b class="barangay">Barangay<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                      </div>
                      <b class="city-or-municipality">City or Municipality<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                      <b class="province">Province<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    </div>
                  </div>
                </div>
                <div class="input-fields">
                  <div class="rectangle-parent5">
                    <div class="frame-child6"></div>
                    <input
                      class="enter-the-no"
                      placeholder="Enter the No. & Street"
                      type="text"
                      name="street_address"
                      value="<?= htmlspecialchars($_SESSION['street_address'] ?? '', ENT_QUOTES) ?>"
                      required />
                  </div>
                  <div class="name-fields">
                    <div class="rectangle-container">
                      <div class="frame-inner"></div>
                      <input
                        class="enter-your-first"
                        placeholder="Enter the Barangay"
                        type="text"
                        name="barangay_address"
                        value="<?= htmlspecialchars($_SESSION['barangay_address'] ?? '', ENT_QUOTES) ?>"
                        required />
                    </div>
                  </div>
                  <div class="name-fields">
                    <div class="rectangle-container">
                      <div class="frame-inner"></div>
                      <input
                        class="enter-your-first"
                        placeholder="Enter the Municipality"
                        type="text"
                        name="municipality_address"
                        value="<?= htmlspecialchars($_SESSION['municipality_address'] ?? '', ENT_QUOTES) ?>"
                        required />
                    </div>
                  </div>
                  <div class="name-fields">
                    <div class="rectangle-container">
                      <div class="frame-inner"></div>
                      <input
                        class="enter-your-first"
                        placeholder="Enter the Province"
                        type="text"
                        name="province_address"
                        value="<?= htmlspecialchars($_SESSION['province_address'] ?? '', ENT_QUOTES) ?>"
                        required />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="occupation-and-education">
              <div class="occupation-and-education-child"></div>
              <div class="occupation-education-fields">
                <div class="occupation-and-education-title">
                  <div style="width: 24rem;">
                    <b class="educational-attainment">Educational Attainment<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    <div class="r-h-u-dropdown">
                      <!-- Dropdown using select -->
                      <select id="dropdownEducation" name="educational_attainment" class="select-rhu" required>
                        <option value="">Select an Attainment</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "Senior Highschool" ? "selected" : "" ?> value="Senior Highschool">Senior Highschool</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "Highschool" ? "selected" : "" ?> value="Highschool">Highschool</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "Vocational" ? "selected" : "" ?> value="Vocational">Vocational</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "College Graduate" ? "selected" : "" ?> value="College Graduate">College Graduate</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "Master's Degree" ? "selected" : "" ?> value="Master's Degree">Master's Degree</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "Vocational" ? "selected" : "" ?> value="Vocational">Vocational</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "Elementary" ? "selected" : "" ?> value="Elementary">Elementary</option>
                        <option <?= isset($_SESSION['educational_attainment']) && $_SESSION['educational_attainment'] === "N/A" ? "selected" : "" ?> value="N/A">N/A</option>
                      </select>
                    </div>
                  </div>
                  <div style="width: 24rem;">
                    <div class="employment-status-wrapper">
                      <b class="employment-status">Employment Status<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                      <div class="r-h-u-dropdown">
                        <!-- Dropdown using select -->
                        <select id="dropdownEmployment" name="employment_status" class="select-rhu" required>
                          <option value="">Select a status</option>
                          <option <?= isset($_SESSION['employment_status']) && $_SESSION['employment_status'] === "Student" ? "selected" : "" ?> value="Student">Student</option>
                          <option <?= isset($_SESSION['employment_status']) && $_SESSION['employment_status'] === "Unemployed" ? "selected" : "" ?> value="Unemployed">Unemployed</option>
                          <option <?= isset($_SESSION['employment_status']) && $_SESSION['employment_status'] === "Employed" ? "selected" : "" ?> value="Employed">Employed</option>
                          <option <?= isset($_SESSION['employment_status']) && $_SESSION['employment_status'] === "Part-time" ? "selected" : "" ?> value="Part-time">Part-time</option>
                          <option <?= isset($_SESSION['employment_status']) && $_SESSION['employment_status'] === "Full-time" ? "selected" : "" ?> value="Full-time">Full-time</option>
                          <option <?= isset($_SESSION['employment_status']) && $_SESSION['employment_status'] === "N/A" ? "selected" : "" ?> value="N/A">N/A</option>

                        </select>
                      </div>
                    </div>
                  </div>
                  <div style="width: 24rem;">
                    <b class="occupation">Occupation<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                    <div class="occupation-input">
                      <div class="occupation-input-child"></div>
                      <input
                        class="enter-you-occupation"
                        placeholder="Enter your occupation"
                        type="text"
                        name="occupation"
                        value="<?= htmlspecialchars($_SESSION['occupation'] ?? '', ENT_QUOTES) ?>"
                        required />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-s-w-d-match-parent">
              <div class="d-s-w-d-match">
                <div class="d-s-w-d-match-child"></div>
                <div class="d-s-w-d-match-details">
                  <b class="dswd-nhts">DSWD NHTS?<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  <div class="i-d-type-selection-parent">
                    <div class="i-d-type-selection">
                      <div class="i-d-type-dropdown">
                        <input class="i-d-type-layer" type="radio" name="dswd_nhts" value="yes" id="yes-option" <?= isset($_SESSION['dswd_nhts']) && $_SESSION['dswd_nhts'] === "YES" ? "Checked" : "" ?> required />
                      </div>
                      <div class="yes">Yes</div>
                    </div>
                    <div class="i-d-type-no">
                      <div class="i-d-type-no-dropdown">
                        <input class="samay-patel" type="radio" name="dswd_nhts" value="no" id="no-option" <?= isset($_SESSION['dswd_nhts']) && $_SESSION['dswd_nhts'] === "NO" ? "Checked" : "" ?> required />
                      </div>
                      <div class="no">No</div>
                    </div>
                  </div>
                </div>
                <div class="membership-attachment">
                  <b class="ps-member">4Ps Member?<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  <div class="membership-attachment-status">
                    <div class="membership-file-selection">
                      <div class="choose-file-dialog">
                        <input class="choose-file-layer" type="radio" name="4ps_member" value="yes" id="yes-file" <?= isset($_SESSION['4ps_member']) && $_SESSION['4ps_member'] === "YES" ? "Checked" : "" ?> required />
                      </div>
                      <div class="yes1">Yes</div>
                    </div>
                    <div class="no-file-status">
                      <div class="no-file-dialog">
                        <input class="no-file-layer" type="radio" name="4ps_member" value="no" id="no-file" <?= isset($_SESSION['4ps_member']) && $_SESSION['4ps_member'] === "NO" ? "Checked" : "" ?> required />
                      </div>
                      <div class="no1">No</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-s-w-d-match1">
                <div class="d-s-w-d-match-item"></div>
                <div class="frame-container">
                  <div class="please-ensure-that-the-informa-wrapper">
                    <div class="please-ensure-that">
                      Please ensure that the information on your ID matches the
                      details you have provided in your account.
                    </div>
                  </div>
                  <div class="id-type-wrapper">
                    <b class="id-type">ID Type<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  </div>
                  <div class="r-h-u-dropdown">
                    <!-- Dropdown using select -->
                    <select id="dropdownID" name="identification_type" class="select-rhu" required>
                      <option value="">Select an ID Type</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Philippine Passport" ? "selected" : "" ?> value="Philippine Passport">Philippine Passport</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Philippine National ID (PhilSys ID)" ? "selected" : "" ?> value="Philippine National ID (PhilSys ID)">Philippine National ID (PhilSys ID)</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Driver's License" ? "selected" : "" ?> value="Driver's License">Driver's License</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Social Security System (SSS) ID" ? "selected" : "" ?> value="Social Security System (SSS) ID">Social Security System (SSS) ID</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Pag-IBIG ID" ? "selected" : "" ?> value="Pag-IBIG ID">Pag-IBIG ID</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Taxpayer Identification Number (TIN) ID" ? "selected" : "" ?> value="Taxpayer Identification Number (TIN) ID">Taxpayer Identification Number (TIN) ID</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Voter's ID" ? "selected" : "" ?> value="Voter's ID">Voter's ID</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Unified Multi-Purpose ID (UMID)" ? "selected" : "" ?> value="Unified Multi-Purpose ID (UMID)">Unified Multi-Purpose ID (UMID)</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Barangay Clearance" ? "selected" : "" ?> value="Barangay Clearance">Barangay Clearance</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "PhilHealth ID" ? "selected" : "" ?> value="PhilHealth ID">PhilHealth ID</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Postal ID" ? "selected" : "" ?> value="Postal ID">Postal ID</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Police Clearance" ? "selected" : "" ?> value="Police Clearance">Police Clearance</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "National Bureau of Investigation (NBI) Clearance" ? "selected" : "" ?> value="National Bureau of Investigation (NBI) Clearance">National Bureau of Investigation (NBI) Clearance</option>
                      <option <?= isset($_SESSION['identification_type']) && $_SESSION['identification_type'] === "Cedula (Community Tax Certificate)" ? "selected" : "" ?> value="Cedula (Community Tax Certificate)">Cedula (Community Tax Certificate)</option>
                    </select>
                  </div>
                </div>
                <div class="frame-parent1">
                  <div class="attach-file-wrapper">
                    <b class="attach-file">Attach File<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  </div>
                  <div class="rectangle-parent7">
                    <div class="frame-child8"></div>
                    <div class="frame-button">
                      <!-- <div class="frame-child9"></div> -->
                      <input type="file" class="choose-file" name="identification_card" value="Choose File" accept=".png, .jpg, .jpeg" required />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="steps-container-inner justify-end">
              <div class="username-actions">
                <input type="reset" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                <input type="submit" name="next" value="Next" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
              </div>
            </div>
          </div>
        </section>
      </main>
    </form>
  </div>
</body>

</html>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('error')) {
      const errorType = urlParams.get('error');
      if (errorType === 'email_exists') {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'The email address is already registered.'
        });
      }
    } else if (urlParams.has('success')) {
      const successType = urlParams.get('success');
      if (successType === 'email_available') {
        Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: 'Email address is available.'
        });
      }
    }
  });
</script>
<script src="javascript/Sign-up.js"></script>
<script src="javascript/calendar-personal.js"></script>