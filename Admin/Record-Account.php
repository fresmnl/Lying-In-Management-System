<?php

session_start();

require '../Database/db-admin.php';

$db_admin = new Admin();

if ($_SESSION['admin']['loggedin'] !== true && !isset($_SESSION['admin']['username'])) {
  header("Location: ../Login/Login.php");
}

function maskHash($hash, $maskChar = '*') {
  $length = strlen($hash);
  if ($length <= 4) {
      return $maskChar; // Mask very short hashes with a single mask character
  }
  // Keep first 2 characters and last 2 characters visible, mask the middle part
  return substr($hash, 0, 2) . str_repeat($maskChar, $length - 4) . substr($hash, -2);
}

?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php' ; ?>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato:wght@500;700;800&display=swap" />
  <link rel="stylesheet" href="css/Record-Account.css">
  <div class="admin-registration">
    <header class="main">
      <div class="content">
        <div class="accounts-header-parent">
          <div class="accounts-header">
            <b class="account-of-health">Account of Health Facilities</b>
          </div>
          <div class="search-and-add">
            <div class="search-and-add-inner">
              <div class="rectangle-parent">
                <div class="frame-child"></div>
                <input class="search" placeholder="Search..." type="text" />

                <div class="search-icon">
                  <img
                    class="layer-1-icon"
                    alt=""
                    src="./public/layer-1.svg" />
                </div>
              </div>
            </div>
            <div class="rectangle-group">
              <div class="frame-item"></div>
              <div class="add-new-account">+ Add new account</div>
            </div>
          </div>
        </div>
      </div>
      <div class="accounts-count">
        <a class="number-of-accounts">Number of Accounts</a>
        <div class="count-value"><?= htmlspecialchars($db_admin->getNumberOfHFAccount() ?? '0', ENT_QUOTES) ?></div>
      </div>
    </header>
    <main class="accounts-table" style=" width: 68rem;">
      <table class="simple-table">
        <thead>
          <tr>
            <th>Action</th>
            <th>Action</th>
            <th>Facility ID</th>
            <th>Name of Health Facility</th>
            <th>Username</th>
            <th>Password</th>
            <th>Date Created</th>
            <th>Status</th>
            <th>City or Municipality</th>
            <th>Email Address</th>
            <th>Telephone No.</th>
            <th>Mobile No.</th>
            <th>Name of Owner</th>
            <th>Name of Head of the Facility</th>
            <th>Designation</th>
            <th>DOH License Number</th>
            <th>Ownership</th>
            <th>Institutional Character</th>
            <th>Bed Capacity</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>
          <?php $HealthFacilities = $db_admin->getHealthFacilityInfoAndAccount();

          foreach ($HealthFacilities as $health_facility):
          ?>
            <tr>
              <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">Deactivate</button></td>
              <td><button style="background-color:#00ACCE; padding: 8px; border-radius: 5px; color:#fdfdfd;">View</button></td>
              <td><?= htmlspecialchars($health_facility['Health_Facility_Id'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Health_Facility_Name'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Username'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars(maskHash(password_hash($health_facility['Password'], PASSWORD_BCRYPT)) ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Date_Created'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 8C6.20914 8 8 6.20914 8 4C8 1.79086 6.20914 0 4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8Z" fill="#36DE83" />
                </svg> Active</td>
              <td><?= htmlspecialchars($health_facility['City_Municipality'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Email'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Landline_Number'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Mobile_Number'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Owner'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Head'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Designation'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['DOH'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Ownership'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['Institution'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['bed'] ?? 'N/A', ENT_QUOTES) ?></td>
              <td><?= htmlspecialchars($health_facility['complete_address'] ?? 'N/A', ENT_QUOTES) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </main>
  </div>
  </body>

  </html>