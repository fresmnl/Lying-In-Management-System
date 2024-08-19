
<!DOCTYPE html>
<html>
<t>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/Sign-Up-Patient.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
  <title>Create an Account - Personal</title>
  </head>

  <body>
    <div class="sign-up-patient-personal-d">
      <form action="">
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
                  <div class="registration">Registration</div>
                </div>
              </div>
              <div class="name-and-r-h-u">
                <div class="rectangle-parent">
                  <div class="frame-child"></div>
                  <div class="designated-r-h-u-label-parent">
                    <div class="designated-r-h-u-label">
                      <b class="designated-rhu-name">Designated RHU Name</b>
                    </div>
                    <div class="rectangle-group">
                      <div class="frame-item"></div>
                      <div class="select-rhu">Select RHU</div>
                      <div class="r-h-u-dropdown">
                        <img
                          id="toggleDropdown"
                          class="layer-1-icon"
                          alt="Dropdown Arrow"
                          src="images/drop-arrow.svg" />
                        <!-- Dropdown content -->
                        <div id="dropdownContent" class="dropdown-content">
                          <a href="#">Option 1</a>
                          <a href="#">Option 2</a>
                          <a href="#">Option 3</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="name-fields">
                    <div class="name-labels">
                      <b class="first-name">First Name</b>
                    </div>
                    <div class="rectangle-container">
                      <div class="frame-inner"></div>
                      <input
                        name="first-name"
                        class="enter-your-first"
                        placeholder="Enter your first name"
                        type="text" />
                    </div>
                  </div>
                  <div class="middle-name-label-parent">
                    <div class="middle-name-label">
                      <b class="middle-name">Middle Name</b>
                    </div>
                    <div class="rectangle-container">
                      <div class="frame-inner"></div>
                      <input
                        name="middle-name" 
                        class="enter-your-first"
                        placeholder="Enter your middle name"
                        type="text" />
                    </div>
                    <div class="middle-name-instruction">
                      <div class="write-a-dash">
                        Write a dash (-) if no middle name
                      </div>
                    </div>
                  </div>
                  <div class="name-fields1">
                    <div class="last-name-wrapper">
                      <b class="last-name">Last Name</b>
                    </div>
                    <div class="rectangle-parent1">
                      <div class="frame-child1"></div>
                      <input
                        name="last-name"
                        class="enter-you-last"
                        placeholder="Enter you last name"
                        type="text" />
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
                          <b class="sex">Sex</b>
                        </div>
                        <div class="sex-dropdown">
                          <div class="sex-dropdown-child"></div>
                          <div class="select-a-sex">Select a sex</div>
                          <div class="sex-options">
                            <img
                              id="toggleSexDropdown"
                              class="layer-1-icon1"
                              alt="Dropdown Arrow"
                              src="images/drop-arrow.svg" />
                          </div>
                          <!-- Dropdown content -->
                          <div id="sexDropdownContent" class="dropdown-content">
                            <a href="#" data-value="Male">Male</a>
                            <a href="#" data-value="Female">Female</a>
                            <a href="#" data-value="Other">Other</a>
                          </div>
                        </div>
                      </div>
                      <div class="civil-status">
                        <b class="civil-status1">Civil Status</b>
                        <div class="civil-status-dropdown">
                          <div class="civil-status-dropdown-child"></div>
                          <div class="select-a-status">Select a status</div>
                          <div class="status-options">
                            <img
                              id="toggleStatusDropdown"
                              class="layer-1-icon2"
                              alt="Dropdown Arrow"
                              src="images/drop-arrow.svg" />
                          </div>
                          <!-- Dropdown content -->
                          <div id="statusDropdownContent" class="dropdown-content">
                            <a href="#" data-value="Single">Single</a>
                            <a href="#" data-value="Married">Married</a>
                            <a href="#" data-value="Divorced">Divorced</a>
                            <a href="#" data-value="Widowed">Widowed</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="right-column">
                      <div class="birthdate-and-age">
                        <div class="birthdate-field">
                          <b class="birthdate">Birthdate</b>
                        </div>
                        <div class="birthdate-input">
                          <div class="birthdate-input-child"></div>
                          <div class="mmddyyyy" id="displayDate">mm/dd/yyyy</div>
                          <img
                            class="placeholder-icon"
                            alt="Calendar"
                            src="images/calendar.svg"
                            id="calendarIcon" />
                          <div class="calendar-popup" id="calendarPopup">
                            <div class="calendar-header">
                              <select id="monthSelect"></select>
                              <select id="yearSelect"></select>
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
                          <div class="calculated-from-birthdate" id="ageText">
                            Calculated from birthdate
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="left-column1">
                    <div class="left-column-item"></div>
                    <div class="frame-parent">
                      <div class="email-address-wrapper">
                        <b class="email-address">Email Address</b>
                      </div>
                      <div class="frame-div">
                        <div class="frame-child3"></div>
                        <input
                          class="examplegmailcom"
                          placeholder="example@gmail.com"
                          type="text" />
                      </div>
                    </div>
                    <div class="frame-group">
                      <div class="phone-number-wrapper">
                        <b class="phone-number">Phone Number</b>
                      </div>
                      <div class="rectangle-parent3">
                        <div class="frame-child4"></div>
                        <input
                          class="xxx-yyy-zzzz"
                          placeholder="+63 (XXX) YYY ZZZZ"
                          type="text" />
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
                        <b class="no-street">No. & Street</b>
                        <div class="city-province">
                          <div class="barangay-field">
                            <b class="barangay">Barangay</b>
                          </div>
                          <b class="city-or-municipality">City or Municipality</b>
                          <b class="province">Province</b>
                        </div>
                      </div>
                    </div>
                    <div class="input-fields">
                      <div class="rectangle-parent5">
                        <div class="frame-child6"></div>
                        <input
                          class="enter-the-no"
                          placeholder="Enter the No. & Street"
                          type="text" />
                      </div>
                      <div class="name-fields">
                        <div class="rectangle-container">
                          <div class="frame-inner"></div>
                          <input
                            class="enter-your-first"
                            placeholder="Enter the Barangay"
                            type="text" />
                        </div>
                      </div>
                      <div class="name-fields">
                        <div class="rectangle-container">
                          <div class="frame-inner"></div>
                          <input
                            class="enter-your-first"
                            placeholder="Enter the Municipality"
                            type="text" />
                        </div>
                      </div>
                      <div class="name-fields">
                        <div class="rectangle-container">
                          <div class="frame-inner"></div>
                          <input
                            class="enter-your-first"
                            placeholder="Enter the Province"
                            type="text" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="occupation-and-education">
                  <div class="occupation-and-education-child"></div>
                  <div class="occupation-education-fields">
                    <div class="occupation-and-education-title">
                      <b class="educational-attainment">Educational Attainment</b>
                      <div class="employment-status-wrapper">
                        <b class="employment-status">Employment Status</b>
                      </div>
                      <b class="occupation">Occupation</b>
                    </div>
                  </div>
                  <form class="attainment-status-selection-parent">
                    <div class="attainment-status-selection">
                      <div class="attainment-status-selection-child"></div>
                      <div class="select-an-attainment">Select an attainment</div>
                      <div class="attainment-status-layers">
                        <img
                          id="toggleAttainmentDropdown"
                          class="layer-1-icon3"
                          alt="Dropdown Arrow"
                          src="images/drop-arrow.svg" />
                      </div>
                      <!-- Dropdown content -->
                      <div id="attainmentDropdownContent" class="dropdown-content">
                        <a href="#" data-value="Elementary">Elementary</a>
                        <a href="#" data-value="High School">High School</a>
                        <a href="#" data-value="Bachelor's Degree">Bachelor's Degree</a>
                        <a href="#" data-value="Master's Degree">Master's Degree</a>
                        <a href="#" data-value="Doctorate">Doctorate</a>
                        <a href="#" data-value="N/A">N/A</a>
                      </div>
                    </div>
                    <div class="rectangle-parent6">
                      <div class="frame-child7"></div>
                      <div class="select-a-status1">Select a status</div>
                      <div class="layer-1-wrapper">
                        <img
                          id="toggleStatusDropdown1"
                          class="layer-1-icon4"
                          alt="Dropdown Arrow"
                          src="images/drop-arrow.svg" />
                      </div>
                      <!-- Dropdown content -->
                      <div id="statusDropdownContent1" class="dropdown-content">
                        <a href="#" data-value="Active">Active</a>
                        <a href="#" data-value="Inactive">Inactive</a>
                        <a href="#" data-value="Pending">Pending</a>
                      </div>
                    </div>
                    <div class="occupation-input">
                      <div class="occupation-input-child"></div>
                      <input
                        class="enter-you-occupation"
                        placeholder="Enter your occupation"
                        type="text" />
                    </div>
                  </form>
                </div>
              </div>
              <div class="d-s-w-d-match-parent">
                <div class="d-s-w-d-match">
                  <div class="d-s-w-d-match-child"></div>
                  <div class="d-s-w-d-match-details">
                    <b class="dswd-nhts">DSWD NHTS?</b>
                    <div class="i-d-type-selection-parent">
                      <div class="i-d-type-selection">
                        <div class="i-d-type-dropdown">
                          <input class="i-d-type-layer" type="radio" name="dswd-nhts" id="yes-option" />
                        </div>
                        <div class="yes">Yes</div>
                      </div>
                      <div class="i-d-type-no">
                        <div class="i-d-type-no-dropdown">
                          <input class="samay-patel" type="radio" name="dswd-nhts" id="no-option" />
                        </div>
                        <div class="no">No</div>
                      </div>
                    </div>
                  </div>
                  <div class="membership-attachment">
                    <b class="ps-member">4Ps Member?</b>
                    <div class="membership-attachment-status">
                      <div class="membership-file-selection">
                        <div class="choose-file-dialog">
                          <input class="choose-file-layer" type="radio" name="ps-member" id="yes-file" />
                        </div>
                        <div class="yes1">Yes</div>
                      </div>
                      <div class="no-file-status">
                        <div class="no-file-dialog">
                          <input class="no-file-layer" type="radio" name="ps-member" id="no-file" />
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
                      <b class="id-type">ID Type</b>
                    </div>
                    <div class="i-d-type-dropdown-container">
                      <div class="i-d-type-dropdown-container-child"></div>
                      <div class="select-an-id">Select an ID Type</div>
                      <div class="i-d-type-dropdown-layer">
                        <img
                          id="toggleIdTypeDropdown"
                          class="layer-1-icon5"
                          alt="Dropdown Arrow"
                          src="images/drop-arrow.svg" />
                      </div>
                      <!-- Dropdown content -->
                      <div id="idTypeDropdownContent" class="dropdown-content">
                        <a href="#" data-value="Driver's License">Driver's License</a>
                        <a href="#" data-value="Passport">Passport</a>
                        <a href="#" data-value="National ID">National ID</a>
                        <a href="#" data-value="Student ID">Student ID</a>
                      </div>
                    </div>
                  </div>
                  <div class="frame-parent1">
                    <div class="attach-file-wrapper">
                      <b class="attach-file">Attach File</b>
                    </div>
                    <div class="rectangle-parent7">
                      <div class="frame-child8"></div>
                      <button class="frame-button">
                        <div class="frame-child9"></div>
                        <div class="choose-file">Choose File</div>
                      </button>
                      <div class="no-file-chosen-wrapper">
                        <div class="no-file-chosen">No File Chosen</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="steps-container-inner">
                <div class="username-input-parent">
                  <div class="username-input">
                    <b class="username">Username</b>
                  </div>
                  <div class="generated-username">
                    <div class="auto-username">
                      <div class="auto-username-child"></div>
                      <input
                        class="auto-generated-username"
                        placeholder="Auto-Generated Username"
                        type="text" />
                    </div>
                    <div class="username-actions">
                      <button class="group-button">
                        <div class="frame-child10"></div>
                        <div class="clear">Clear</div>
                      </button>
                      <button class="clear-next-buttons">
                        <div class="clear-next-buttons-child"></div>
                        <a class="next" href="Sign-Up-Patient-History.php">Next</a>
                        <div class="next-button-container">
                          <img
                            class="div-cssbx-icon"
                            alt=""
                            src="images/left-arrow.svg" />
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </form>
    </div>
  </body>

</html>

<script src="javascript/Sign-up.js"></script>
<script src="javascript/calendar-personal.js"></script>