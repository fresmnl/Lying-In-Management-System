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
<link rel="stylesheet" href="css/Record-Info-New.css" />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
</head>
<style>
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
.simple-table td{
  font-weight: none;
}

/* Alternate row coloring */
.simple-table tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
<body>
  <div class="admin-record-account">
    <section class="main">
      <header class="rectangle-parent">
        <div class="frame-child"></div>
        <button class="new-account-details">
          <div class="new-account-details-child"></div>
          <a href="Record-Info-New.php" class="new-account">New Account</a>
        </button>
        <div class="authorized-account-wrapper">
          <a href="Record-Info-Authorize.php" class="authorized-account">Authorized Account</a>
        </div>
      </header>
      <div class="health-facility-details-wrapper">
        <div class="health-facility-details">
          <div class="health-facility-details-inner">
            <div class="search-input-fields-parent">
              <div class="search-input-fields">
                <h3 class="information-of-health">
                  Information of Health Facility for New Account
                </h3>
              </div>
              <div class="rectangle-group">
                <div class="frame-item"></div>
                <input class="search" placeholder="Search..." type="text" />

                <div class="search-layer">
                  <img
                    class="layer-1-icon"
                    alt=""
                    src="./public/layer-1.svg" />
                </div>
              </div>
            </div>
          </div>
          <div class="account-numbers">
            <b class="number-of-accounts">Number of Accounts</b>
            <div class="number-value">12</div>
          </div>
        </div>
      </div>
      <main class="accounts-table" style="width: 68rem;margin-left: 4.4rem;">
  <table class="simple-table">
        <thead>
            <tr>
                <th>Action</th>
                <th>Name of Health Facility</th>
                <th>City or Municipality</th>
                <th>Email Address</th>
                <th>Telephone No.</th>
                <th>Mobile No.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
            </tr>
        </tbody>
    </table>
  </main>
    </section>
    <div class="item-display">
      <div class="display-settings">
        <div class="display-options">
          <div class="showing-1-">showing 1 - 20 of 25 items</div>
        </div>
        <div class="display-items">
          <div class="item-structure">
            <div class="item-structure-child"></div>
            <img
              class="item-content-icon"
              loading="lazy"
              alt=""
              src="./public/vector.svg" />
          </div>
          <div class="item-structure1">
            <div class="item-structure-item"></div>
            <b class="b">1</b>
          </div>
          <div class="item-structure2">
            <div class="item-structure-inner"></div>
            <img
              class="vector-icon"
              loading="lazy"
              alt=""
              src="./public/vector-1.svg" />
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>