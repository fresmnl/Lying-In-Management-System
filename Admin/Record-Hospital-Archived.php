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

<link rel="stylesheet" href="css/Record-Hospital-Archived.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="admin-record-hospital-da">
      <div class="video-details" style="margin-left: 0.8rem;">
        <div class="video-details-child"></div>
        <div class="current-data">
          <a href="Record-Hospital-Data.php" class="hospital-data">Hospital Data</a>
        </div>     
        <a href="Record-Hospital-Archived.php" class="video-details-item">Archived</a>
      </div>
      <section class="hospital-count-details-wrapper">
        <div class="hospital-count-details">
          <a class="number-of-hospital">Number of Hospital</a>
          <div class="hospital-list">
            <div class="hospital-item">
              <b class="archived-records">Archived Records</b>
              <div class="hospital-info">
                <div class="hospital-info-child"></div>
                <div class="hospital-details">
                  <b class="caudilla-mary-grace-container">
                    <p class="caudilla">CAUDILLA,</p>
                    <p class="mary-grace-pangan">MARY GRACE PANGAN</p>
                  </b>
                  <div class="name-of-hospital">Name of hospital</div>
                </div>
                <div class="hospital-details1">
                  <b class="bataan-peninsula-medical-container">
                    <p class="bataan-peninsula-medical">
                      BATAAN PENINSULA MEDICAL
                    </p>
                    <p class="center">CENTER</p>
                  </b>
                  <div class="address">Address</div>
                </div>
                <div class="action-buttons">
                  <form action="Account-Add-Personal.php">
                      <input type="submit" value="Delete Permanently" style="cursor: pointer; width: 15rem; height: 50px;background: rgba(216, 60, 50, 0.8); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #fdfdfd; border:none">
                  </form>
              
                  <form action="Account-Add-Personal.php">
                      <input type="submit" value="Restore" style="cursor: pointer; width: 8.5rem; height: 50px;background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #fdfdfd; border:none">
                  </form>
                  
                </div>
              </div>
            </div>
            <div class="empty-state">
              <div class="div">03</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>