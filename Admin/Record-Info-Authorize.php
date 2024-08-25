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

    <link rel="stylesheet" href="css/Record-Info-Authorize.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="admin-record-account">
      <section class="frame-parent">
        <header class="rectangle-parent">
          <div class="frame-child"></div>
          <div class="new-account-wrapper">
            <a href="Record-Info-New.php" class="new-account">New Account</a>
          </div>
          <div class="rectangle-group">
            <div class="frame-item"></div>
            <a href="Record-Info-Authorize.php" class="authorized-account">Authorized Account</a>
          </div>
        </header>
        <div class="frame-wrapper">
          <div class="frame-group">
            <div class="frame-container">
              <div class="skills-parent">
                <div class="skills">
                  <b class="information-of-health"
                    >Information of Health Facility for Authorized Account</b
                  >
                </div>
                <div class="frame-div">
                  <div class="rectangle-container">
                    <div class="frame-inner"></div>
                    <input class="search" placeholder="Search..." type="text" />

                    <div class="layer-1-wrapper">
                      <img
                        class="layer-1-icon"
                        alt=""
                        src="./public/layer-1.svg"
                      />
                    </div>
                  </div>
                  <div class="rectangle-parent1">
                    <div class="rectangle-div"></div>
                    <div class="all">All</div>
                    <div class="quotes">
                      <img
                        class="layer-1-icon1"
                        alt=""
                        src="./public/layer-1-1.svg"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="number-of-accounts-parent">
              <b class="number-of-accounts">Number of Accounts</b>
              <div class="div">12</div>
            </div>
          </div>
        </div>
      </section>
      <div class="admin-record-account-inner">
        <div class="frame-parent1">
          <div class="showing-1-20-of-25-items-wrapper">
            <div class="showing-1-">showing 1 - 20 of 25 items</div>
          </div>
          <div class="frame-parent2">
            <div class="rectangle-parent2">
              <div class="frame-child1"></div>
              <img
                class="vector-icon"
                loading="lazy"
                alt=""
                src="./public/vector.svg"
              />
            </div>
            <div class="rectangle-parent3">
              <div class="frame-child2"></div>
              <b class="b">1</b>
            </div>
            <div class="rectangle-parent4">
              <div class="frame-child3"></div>
              <img
                class="vector-icon1"
                loading="lazy"
                alt=""
                src="./public/vector-1.svg"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>