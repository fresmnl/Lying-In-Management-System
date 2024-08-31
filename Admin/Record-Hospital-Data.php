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

    .accounts-table {
    width: 100%;
    overflow-x: auto; /* Enables horizontal scrolling */
    /* Optional: Add padding or margin if needed */
}

/* Styling for the table */
.simple-table {
    width: 100%;
    min-width: 1000px; /* Ensures the table is wide enough to trigger scrolling */
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    /* Optional: Add a margin to center the table if needed */
}

/* Styling for table headers and cells */
.simple-table th, .simple-table td {
    border: 1px solid #ddd; /* Add border to table cells */
    padding: 8px;
    text-align: left;
    white-space: nowrap; /* Prevents text from wrapping */
    color: #004168; /* Dark blue text color */
}

/* Header styling */
.simple-table th {
    background-color: rgba(0, 172, 206, 0.4); /* Light blue background */
    font-weight: bold;
}

/* Alternate row coloring */
.simple-table tr:nth-child(even) {
    background-color: #f9f9f9;
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
        </div>
        <button type="submit">Save</button>
      </form>
      </div>
    </div>
  </div>
  <main class="accounts-table" style=" width: 71rem;margin-left: 20rem;position: absolute;top: 17rem;">
  <table class="simple-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Hospital ID</th>
                <th>Name of Hospital</th>
                <th>Address</th>
                <th>Sector</th>
                <th>Email Address</th>
                <th>Landline No.</th>
                <th>Mobile No.</th>
                <th>Head</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>H202401-01</td>
                <td>Bataan Peninsula Medical Center</td>
                <td>San Ramon, Dinalupihan</td>
                <td>Private</td>
                <td>bpmc0813@gmail.com</td>
                <td>1234-5678</td>
                <td>+63 (912) 550 7012</td>
                <td>Caudilla, Mary Grace Pangan</td>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Edit</button></td>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Archive</button></td>

            </tr>
            <tr>
                <td>2</td>
                <td>H202402-02</td>
                <td>Isaac & Catalina Medical Center</td>
                <td>Calero Street, Ibayo, Balanga</td>
                <td>Private</td>
                <td>icmcbalanga@gmail.com</td>
                <td>1234-5678</td>
                <td>+63 (912) 550 7012</td>
                <td>Caudilla, Mary Grace Pangan</td>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Edit</button></td>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Archive</button></td>
            </tr>
        </tbody>
    </table>
  </main>

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