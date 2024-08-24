<?php include 'nav-side-bar/sidebar.php'; ?>
<?php include 'nav-side-bar/navbar.php'; ?>

<link rel="stylesheet" href="css/Registration.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"/>
    <div class="admin-registration">
      <form class="rectangle-parent">
        <div class="frame-child"></div>
        <button class="health-facility-registration">
          <div class="health-facility-registration-child"></div>
          <b class="create-an-account">Create an Account for Health Facility</b>
        </button>
        <div class="facility-name-input">
          <div class="facility-name-instructions">
            <b class="name-of-health">Name of Health Facility</b>
            <div class="complete-name">
              <div class="complete-name-child"></div>
              <input
                class="enter-the-complete"
                placeholder="Enter the complete name"
                type="text"
              />
            </div>
          </div>
        </div>
        <div class="location-contact">
          <div class="city-municipality-input-parent">
            <div class="city-municipality-input">
              <div class="city-email">
                <div class="city-municipality-field">
                  <b class="citymunicipality">City/Municipality</b>
                </div>
                <div class="rectangle-container">
                  <div class="frame-inner"></div>
                  <input
                    class="city"
                    placeholder="Enter the City/Municipality"
                    type="text"
                  />
                </div>
              </div>
              <div class="landline-no-parent">
                <b class="landline-no">Landline No,</b>
                <div class="rectangle-container">
                  <div class="frame-inner"></div>
                  <input
                    class="pxxx-yyyy"
                    placeholder="PXXX-YYYY"
                    type="text"
                  />
                </div>
              </div>
            </div>
            <div class="city-municipality-input1">
              <div class="frame-parent">
                <div class="email-address-wrapper">
                  <b class="email-address">Email Address</b>
                </div>
                <div class="group-div">
                  <div class="rectangle-div"></div>
                  <input
                    class="examplegmailcom"
                    placeholder="example@gmail.com"
                    type="text"
                  />
                </div>
              </div>
              <div class="frame-group">
                <div class="mobile-no-wrapper">
                  <b class="mobile-no">Mobile No.</b>
                </div>
                <div class="rectangle-parent1">
                  <div class="frame-child1"></div>
                  <input
                    class="xxx-yyy-zzzz"
                    placeholder="+63 (XXX) YYY ZZZZ"
                    type="text"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="actions">
          <div class="clear-next">
            <div class="rectangle-parent2">
              <div class="frame-child2"></div>
              <div class="clear">Clear</div>
            </div>
            <div class="rectangle-parent3">
              <div class="frame-child3"></div>
              <a class="next" href="Registration-Next.php">Next</a>
            </div>
          </div>
        </div>
      </form>
    </div>