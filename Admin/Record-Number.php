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
<link rel="stylesheet" href="css/Record-Number.css" />
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

/* Alternate row coloring */
.simple-table tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
<body>
  <div class="admin-record-account">
    <section class="left-panel">
      <div class="accounts-panel">
        <h3 class="numbers">Numbers</h3>
        <div class="account-count-panel">
          <a class="number-of-accounts">Number of Accounts</a>
        </div>
      </div>
      <nav class="search-panel">
        <div class="search-input-panel">
          <div class="rectangle-parent">
            <div class="frame-child"></div>
            <input class="search" placeholder="Search..." type="text" />

            <div class="add-account-panel">
              <img class="layer-1-icon" alt="" src="./public/layer-1.svg" />
            </div>
          </div>
        </div>
        <div class="pagination-panel">
          <div class="rectangle-group">
            <div class="frame-item"></div>
            <h3 class="add-new-account">+ Add new account</h3>
          </div>
        </div>
        <div class="account-list">25</div>
      </nav>
    </section>
  </div>
  <main class="accounts-table" style=" width: 68rem;margin-left: 23rem;">
  <table class="simple-table">
        <thead>
            <tr>
                <th>Facility ID</th>
                <th>Name of Health Facility</th>
                <th>Successful Childbirth</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HF2024-01</td>
                <td>Caudilla, Mary Grace Pangan</td>
                <td>rhmLyingInClinic</td>
            </tr>
            <tr>
                <td>HF2024-02</td>
                <td>Magdato, Leah Jean</td>
                <td>hermosaLHC</td>
            </tr>
        </tbody>
    </table>
  </main>
</body>