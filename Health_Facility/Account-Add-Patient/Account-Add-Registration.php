<?php include '../nav-side-bar/sidebar.php'; ?>
<?php include '../nav-side-bar/navbar.php'; ?>   

<link rel="stylesheet" href="Account-Add-Registration.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="health-facility-dashboard">
      <main class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="rectangle-group">
          <div class="frame-item"></div>
          <b class="create-an-account">Create an Account</b>
        </div>
        <section class="content">
          <form class="frame-parent">
            <div class="frame-group">
              <div class="frame-wrapper">
                <div class="frame-container">
                  <div class="ellipse-parent">
                    <div class="frame-inner"></div>
                    <b class="b">1</b>
                  </div>
                  <div class="line-wrapper">
                    <div class="line-div"></div>
                  </div>
                  <div class="ellipse-group">
                    <div class="ellipse-div"></div>
                    <b class="b1">2</b>
                  </div>
                  <div class="line-container">
                    <div class="frame-child1"></div>
                  </div>
                  <div class="ellipse-container">
                    <div class="frame-child2"></div>
                    <b class="b2">3</b>
                  </div>
                </div>
              </div>
              <div class="personal-details-parent">
                <div class="personal-details">Personal Details</div>
                <div class="history-wrapper">
                  <div class="history">History</div>
                </div>
                <div class="registration">Registration</div>
              </div>
            </div>
            <div class="temp-indicator-container">
              <div class="rectangle-container">
                <div class="rectangle-div"></div>
                <div class="frame-div">
                  <div class="username-wrapper">
                    <b class="username">Username</b>
                  </div>
                  <div class="password-input-fields">
                    <div class="password-input-fields-child"></div>
                    <input
                      class="auto-generated-username"
                      placeholder="Auto-Generated Username"
                      type="text"
                    />
                  </div>
                </div>
                <div class="frame-parent1">
                  <div class="password-wrapper">
                    <b class="password">Password</b>
                  </div>
                  <div class="rectangle-parent1">
                    <div class="frame-child3"></div>
                    <input
                      class="enter-a-password"
                      placeholder="Enter a password"
                      type="text"
                    />
                  </div>
                </div>
                <div class="frame-parent2">
                  <div class="confirm-password-wrapper">
                    <b class="confirm-password">Confirm Password</b>
                  </div>
                  <div class="rectangle-parent2">
                    <div class="frame-child4"></div>
                    <input
                      class="re-enter-a-password"
                      placeholder="Re-enter a password"
                      type="text"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="indicator-container">
              <div class="frame-parent3">
              <form action="Account-Add-Personal.php">
                  </form>
                  <form action="Account-Add-History.php">
                      <input type="submit" value="Previous" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                <div class="frame-parent4">
                <form action="Account-Add-Personal.php">
                      <input type="submit" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                  <form action="Account-Add-Registration.php">
                      <input type="submit" value="Create" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
                  </form>
                </div>
              </div>
            </div>
          </form>
        </section>
      </main>
    </div>
  </body>