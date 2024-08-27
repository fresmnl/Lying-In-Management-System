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
    <link rel="stylesheet" href="css/Record-Hospital-Data.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <style>
    .popup-overlay {
      display: none; /* Hidden by default */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
      z-index: 1000;
    }

    .popup-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 0;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      width: 62rem;
    }

    .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      cursor: pointer;
    }

  </style>
</head>
<body>
  <div class="admin-record-hospital-daa">
    <div class="rectangle-parent">
      <div class="frame-child"></div>
      <div class="rectangle-group">
        <div class="frame-item"></div>
        <a href="Record-Hospital-Data.php" class="hospital-data">Hospital Data</a>
      </div>
      <a href="Record-Hospital-Archived.php" class="frame-inner" style="text-decoration:none;">Archived</a>
    </div>
    <main class="admin-record-hospital-da-inner">
      <section class="frame-parent">
        <div class="frame-wrapper">
          <div class="frame-group">
            <div class="frame-container">
              <div class="frame-div">
                <div class="total-number-of-hospitals-wrapper">
                  <b class="total-number-of">Total Number of Hospitals</b>
                </div>
                <div class="rectangle-container">
                  <div class="rectangle-div"></div>
                  <input class="search" placeholder="Search..." type="text" />
                  <div class="layer-1-wrapper">
                    <img class="layer-1-icon" alt="" src="./public/layer-1.svg" />
                  </div>
                </div>
              </div>
              <div class="showing-1-20-of-25-items-wrapper">
                <div class="showing-1-">showing 1 - 20 of 25 items</div>
              </div>
            </div>
            <div class="frame-wrapper1">
              <div class="group-div">
                <div class="frame-child1"></div>
                <div class="add-button-container">
                  <div class="add-button-duplicate">
                    <button class="add-hospital">+ Add Hospital</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hospital-number-display-parent">
          <div class="hospital-number-display">
            <div class="number-display-container">
              <b class="number-of-hospitals">Number of Hospitals</b>
              <div class="hospital-number-value">25</div>
            </div>
          </div>
          <div class="frame-parent1">
            <div class="rectangle-parent1">
              <div class="frame-child2"></div>
              <img class="vector-icon" loading="lazy" alt="" src="./public/vector.svg" />
            </div>
            <div class="rectangle-parent2">
              <div class="frame-child3"></div>
              <b class="b">1</b>
            </div>
            <div class="rectangle-parent3">
              <div class="frame-child4"></div>
              <img class="vector-icon1" loading="lazy" alt="" src="./public/vector-1.svg" />
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Pop-up content -->
  <div id="popup" class="popup-overlay">
    <div class="popup-content">
      <span class="close-button">&times;</span>
      <h2 style="background-color:#00ACCE; text-align: center; padding:1rem; color: #fdfdfd;">Add Hospital</h2>
      <div class="form-container" style="margin: 2rem;border: 2px solid #00ACCE;background-color: #EDF1F6;">
      <form style="padding: 2rem;">
        <div>
          <div>
            Name of Hospital
            <input type="text" placeholder="Enter the name">
          </div>
          <div>
            Sector
            
          </div>
        </div>
        <button type="submit">Save</button>
      </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addHospitalButton = document.querySelector('.add-hospital');
      const popup = document.getElementById('popup');
      const closeButton = document.querySelector('.close-button');

      // Show popup
      addHospitalButton.addEventListener('click', function() {
        popup.style.display = 'block';
      });

      // Close popup
      closeButton.addEventListener('click', function() {
        popup.style.display = 'none';
      });

      // Close popup when clicking outside the content area
      window.addEventListener('click', function(event) {
        if (event.target === popup) {
          popup.style.display = 'none';
        }
      });
    });
  </script>