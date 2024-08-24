<?php include '../nav-side-bar/sidebar.php'; ?>
<?php include '../nav-side-bar/navbar.php'; ?>   

<link rel="stylesheet" href="Account-Add-Personal.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="health-facility-dashboard">
      <main class="main">
        <div class="main-child"></div>
        <div class="account">
          <div class="account-child"></div>
          <b class="create-an-account">Create an Account</b>
        </div>
        <section class="details">
          <div class="personal-history">
            <div class="indicators">
              <div class="indicator-row-parent">
                <div class="indicator-row">
                  <div class="indicators-row">
                    <div class="indicators-content">
                      <div class="indicator-shapes"></div>
                      <b class="empty-indicator-row">1</b>
                    </div>
                    <div class="indicators-content1">
                      <div class="indicators-content-child"></div>
                    </div>
                    <div class="indicators-content2">
                      <div class="indicators-content-item"></div>
                      <b class="b">2</b>
                    </div>
                    <div class="indicators-content3">
                      <div class="indicators-content-inner"></div>
                    </div>
                    <div class="indicators-content4">
                      <div class="ellipse-div"></div>
                      <b class="b1">3</b>
                    </div>
                  </div>
                </div>
                <div class="disclaimer-parent">
                  <div class="disclaimer">
                    <div class="disclaimer-container-wrapper">
                      <div class="disclaimer-container">
                        <div class="personal-details">Personal Details</div>
                        <div class="history">History</div>
                      </div>
                    </div>
                    <div class="if-a-particular-container">
                      <span class="if-a-particular"
                        >If a particular field does not apply to you, kindly
                        enter</span
                      >
                      <b> "N/A"</b>
                      <span class="not-applicable-in">
                        (Not Applicable) in that field.</span
                      >
                    </div>
                  </div>
                  <div class="registration">Registration</div>
                </div>
              </div>
            </div>
            <div class="form">
              <div class="rectangle-parent">
                <div class="frame-child"></div>
                <div class="name-fields">
                  <div class="name-labels">
                    <b class="health-facility">Health Facility</b>
                  </div>
                  <div class="name-inputs">
                    <div class="name-inputs-child"></div>
                    <div class="reyes-hernandez-maternity">
                      Reyes-Hernandez Maternity & Lying-in Clinic
                    </div>
                  </div>
                </div>
                <div class="name-fields1">
                  <div class="first-name-wrapper">
                    <b class="first-name">First Name</b>
                  </div>
                  <div class="age-value">
                        <div class="age-value-child"></div>
                        <input
                          class="calculated-from-birthdate"
                          placeholder="Enter your first name"
                          type="text"
                        />
                      </div>
                </div>
                <div class="name-fields2">
                  <div class="last-name-wrapper">
                    <b class="last-name">Last Name</b>
                  </div>
                  <div class="age-value">
                        <div class="age-value-child"></div>
                        <input
                          class="calculated-from-birthdate"
                          placeholder="Enter your last name"
                          type="text"
                        />
                      </div>
                </div>
                <div class="middle-name-field-parent">
                  <div class="middle-name-field">
                    <b class="middle-name">Middle Name</b>
                  </div>
                  <div class="age-value">
                        <div class="age-value-child"></div>
                        <input
                          class="calculated-from-birthdate"
                          placeholder="Enter your middle name"
                          type="text"
                        />
                      </div>
                  <div class="middle-name-disclaimer">
                    <div class="write-a-dash">
                      Write a dash (-) if no middle name
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="personal-info">
              <form class="personal-info-fields">
                <div class="sex-status">
                  <div class="sex-status-child"></div>
                  <div class="sex-civil-status">
                    <div class="sex-civil-status-labels">
                      <div class="sex-email-labels">
                        <b class="sex">Sex</b>
                      </div>
                      <div class="sex-input">
                        <div class="sex-input-child"></div>
                        <div class="select-a-sex">Select a sex</div>
                        <div class="sex-dropdown-layer">
                          <img
                            class="layer-1-icon"
                            alt=""
                            src="./public/layer-1.svg"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="civil-status-email-labels">
                      <div class="civil-status-email">
                        <b class="civil-status">Civil Status</b>
                      </div>
                      <div class="civil-status-input">
                        <div class="civil-status-input-child"></div>
                        <div class="select-a-status">Select a status</div>
                        <div class="civil-status-dropdown-layer">
                          <img
                            class="layer-1-icon1"
                            alt=""
                            src="./public/layer-1-1.svg"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="birthdate-phone">
                    <div class="birthdate-phone-fields">
                      <div class="birthdate-phone-labels">
                        <b class="birthdate">Birthdate</b>
                      </div>
                      <button class="birthdate-input">
                        <div class="birthdate-input-child"></div>
                        <div class="mmddyyyy">mm/dd/yyyy</div>
                        <img
                          class="empty-birthdate-icon"
                          alt=""
                          src="./public/empty-birthdate.svg"
                        />
                      </button>
                    </div>
                    <div class="age-phone-number-labels">
                      <div class="age-phone-number">
                        <b class="age">Age</b>
                      </div>
                      <div class="age-value">
                        <div class="age-value-child"></div>
                        <input
                          class="calculated-from-birthdate"
                          placeholder="Calculated from birthdate"
                          type="text"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sex-status1">
                  <div class="sex-status-item"></div>
                  <div class="frame-parent">
                    <div class="email-address-wrapper">
                      <b class="email-address">Email Address</b>
                    </div>
                    <div class="frame-div">
                      <div class="frame-child1"></div>
                      <input
                        class="examplegmailcom"
                        placeholder="example@gmail.com"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="frame-group">
                    <div class="phone-number-wrapper">
                      <b class="phone-number">Phone Number</b>
                    </div>
                    <div class="rectangle-parent1">
                      <div class="frame-child2"></div>
                      <input
                        class="xxx-yyy-zzzz"
                        placeholder="+63 (XXX) YYY ZZZZ"
                        type="text"
                      />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="address">
              <div class="rectangle-parent2">
                <div class="frame-child3"></div>
                <div class="address-field">
                  <div class="complete-address">Complete Address:</div>
                </div>
                <div class="address-input">
                  <div class="address-details">
                    <div class="address-subfields">
                      <div class="address-labels-content">
                        <b class="no-street">No. & Street</b>
                      </div>
                      <div class="address-labels-content1">
                        <b class="barangay">Barangay</b>
                      </div>
                      <b class="city-or-municipality">City or Municipality</b>
                      <b class="province">Province</b>
                    </div>
                  </div>
                  <div class="street-input">
                    <div class="street-input-container">
                      <div class="street-input-wrapper">
                        <div class="street-input-wrapper-child"></div>
                        <input
                          class="enter-the-no"
                          placeholder="Enter the No. & Street"
                          type="text"
                        />
                      </div>
                    </div>
                    <div class="rectangle-parent3">
                      <div class="frame-child4"></div>
                      <input class="enter-the-no"placeholder="Enter the Barangay"></i>
                    </div>
                    <div class="city-province">
                      <button class="group-button">
                        <div class="frame-child5"></div>
                        <input class="enter-the-no" placeholder="City or Municipality">
                      </button>
                      <button class="rectangle-parent4">
                        <div class="frame-child6"></div>
                        <input class="enter-the-no" placeholder="Enter the Province">
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="occupation-details-wrapper">
              <div class="occupation-details">
                <div class="occupation-details-child"></div>
                <div class="occupation-field">
                  <div class="occupation-label">
                    <b class="educational-attainment">Educational Attainment</b>
                    <div class="employment-status">
                      <b class="employment-status1">Employment Status</b>
                    </div>
                    <b class="occupation">Occupation</b>
                  </div>
                </div>
                <div class="attainment-status-occupation">
                  <div class="attainment-status-occupation-i">
                    <div class="attainment-status-occupation-i-child"></div>
                    <div class="select-an-attainment">Select an attainment</div>
                    <div class="attainment-status-dropdown-lay">
                      <img
                        class="layer-1-icon2"
                        alt=""
                        src="./public/layer-1-2.svg"
                      />
                    </div>
                  </div>
                  <div class="attainment-status-occupation-i1">
                    <div class="attainment-status-occupation-i-item"></div>
                    <div class="select-a-status1">Select a status</div>
                    <div class="layer-1-wrapper">
                      <img
                        class="layer-1-icon3"
                        alt=""
                        src="./public/layer-1-3.svg"
                      />
                    </div>
                  </div>
                  <div class="attainment-status-occupation-i2">
                    <div class="attainment-status-occupation-i-inner"></div>
                    <input
                      class="enter-you-occupation"
                      placeholder="Enter you occupation"
                      type="text"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="membership">
              <div class="membership-details">
                <div class="membership-options">
                  <div class="membership-options-child"></div>
                  <div class="membership-labels">
                    <b class="dswd-nhts">DSWD NHTS?</b>
                    <div class="membership-inputs">
                      <div class="n-h-t-s-input">
                        <div class="field">
                          <div class="field1">
                            <input class="field2" type="radio" />
                          </div>
                          <div class="yes">Yes</div>
                        </div>
                        <div class="field3">
                          <div class="field4">
                            <input class="field5" type="radio" />
                          </div>
                          <div class="no">No</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="membership-labels1">
                    <b class="ps-member">4Ps Member?</b>
                    <div class="membership-labels-inner">
                      <div class="frame-container">
                        <div class="frame-parent1">
                          <div class="frame-wrapper">
                            <input class="frame" type="radio" />
                          </div>
                          <div class="yes1">Yes</div>
                        </div>
                        <div class="frame-parent2">
                          <div class="frame-frame">
                            <input class="frame1" type="radio" />
                          </div>
                          <div class="no1">No</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="field6">
                  <div class="field-child"></div>
                  <div class="field7">
                    <div class="field8">
                      <div class="please-ensure-that">
                        Please ensure that the information on your ID matches
                        the details you have provided in your account.
                      </div>
                    </div>
                    <div class="field9">
                      <b class="id-type">ID Type</b>
                    </div>
                    <div class="field10">
                      <div class="field-item"></div>
                      <div class="select-an-id">Select an ID Type</div>
                      <div class="field11">
                        <img
                          class="layer-1-icon4"
                          alt=""
                          src="./public/layer-1-4.svg"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="field12">
                    <div class="field13">
                      <b class="attach-file">Attach File</b>
                    </div>
                    <div class="field14">
                      <div class="field-inner"></div>
                      <button class="field15">
                        <div class="field-child1"></div>
                        <div class="choose-file">Choose File</div>
                      </button>
                      <div class="field16">
                        <div class="no-file-chosen">No File Chosen</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="field17">
              <div class="field18">
                <div class="field19">
                  <b class="username">Username</b>
                </div>
                <div class="field20">
                  <button class="field21">
                    <div class="field-child2"></div>
                    <div class="auto-generated-username">
                      Auto-Generated Username
                    </div>
                  </button>
                  <div class="actions">
                  </form>
                    <form action="">
                      <input type="submit" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                    <form action="Account-Add-History.php">
                      <input type="submit" value="Next" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>