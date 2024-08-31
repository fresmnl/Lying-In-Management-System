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

/* Alternate row coloring */
.simple-table tr:nth-child(even) {
    background-color: #f9f9f9;
}


</style>
<body>
  <div class="admin-record-account">
    <section class="main">
      <header class="rectangle-parent">
      </header>
      <div class="health-facility-details-wrapper">
        <div class="health-facility-details">
          <div class="health-facility-details-inner">
            <div class="search-input-fields-parent">
              <div class="search-input-fields">
                <h3 class="information-of-health">
                Account of Patients
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
    </section>
  </div>
  <main class="accounts-table" style=" width: 68rem;margin-left: 21rem;">
  <table class="simple-table">
        <thead>
            <tr>
                <th>Action</th>
                <th>Action</th>
                <th>Patient ID</th>
                <th>Name of Patient</th>
                <th>Username</th>
                <th>Password</th>
                <th>Date Created</th>
                <th>Birthdate</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Civil Status</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Educational Attainment</th>
                <th>Employment Status</th>
                <th>Occupation</th>
                <th>DSWD NHTS</th>
                <th>4Ps Member</th>
                <th>ID Type</th>
                <th>Attach File</th>
                <th>Smoker</th>
                <th>Pack/Years</th>
                <th>Drinker</th>
                <th>Bottle/Day</th>
                <th>Drug Use/Abuse</th>
                <th>Hypertension</th>
                <th>Asthma</th>
                <th>Blood<br>Disorder</th>
                <th>Heart<br>Disorder</th>
                <th>Liver<br> Disorder</th>
                <th>Kidney<br>Disorder</th>
                <th>Pulmonary<br>Tuberculosis</th>
                <th>Diabetes<br>Mellitus</th>
                <th>Type</th>
                <th>Cancer</th>
                <th>Type</th>
                <th>Stage</th>
                <th>Skin<br>Disease</th>
                <th>Type</th>
                <th>Allergy</th>
                <th>Type</th>
                <th>Others</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Deactivate</button></td>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">View</button></td>
                <td>P2024-01</td>
                <td>Caudilla, Mary Grace Pangan</td>
                <td>rhmLyingInClinic</td>
                <td>●●●●●●●●</td>
            </tr>
            <tr>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Deactivate</button></td>
                <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">View</button></td>
                <td>P2024-02</td>
                <td>Magdato, Leah Jean</td>
                <td>hermosaLHC</td>
                <td>●●●●●●●●</td>
            </tr>
        </tbody>
    </table>
  </main>
</body>