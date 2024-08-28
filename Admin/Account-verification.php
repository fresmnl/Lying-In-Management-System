
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
                <form action="Account-Add-History.php">
                      <input type="submit" value="View" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
                  </form>
                </div>
              </div>
            </div>
            <div class="empty-content">
              <div class="div">01</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>