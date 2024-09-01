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
  href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
</head>
<style>
  .popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1000;
  }

  .popup-content {
    position: absolute;
    top: 50%;
    left: 58%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    border-radius: 1rem;
    width: 70%;
    overflow-x: auto;
    height: 90%;
  }

  .popup-content h2 {
    background-color: #00ACCE;
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    text-align: center;
    color: #FDFDFD;
    padding: 1rem;
  }

  .form-container {
    border-radius: 1rem;
    margin: 2rem;
    border: 2px solid #00ACCE;
    background-color: #EDF1F6;
  }

  .form-container form {
    padding: 1rem;
  }

  .div1,
  .dropdown-container-sector {
    display: grid;
    width: 23rem;
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    color: #004168;
  }

  .div1 input,
  .dropdown-input {
    box-sizing: border-box;
    width: 46rem;
    height: 2.8rem;
    background: rgba(253, 253, 253, 0.7);
    border: 1.5px solid #00C8D2;
    border-radius: 8px;
    padding: 1rem;
  }

  .dropdown-input {
    width: 16rem;
    padding: 0 0 0 0.5rem;
  }

  .dropdown-container-sector {
    width: 15rem;
  }

  .form-container2,
  .form-container3,
  .form-container4 {
    display: flex;
    gap: 24rem;
    margin-bottom: 2rem;
  }

  .form-container3 {
    gap: 2rem;
  }

  .form-container3 .div1 input {
    width: 14rem;
  }

  .form-heading {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 900;
    font-size: 20px;
    color: #004168;
    margin-bottom: 4px;
  }

  .bataan-btn {
    box-sizing: border-box;
    width: 14rem;
    height: 2.8rem;
    color: #004168;
    text-align: left;
    padding-left: 1rem;
    background: rgba(0, 200, 210, 0.4);
    border: 1.5px solid #00C8D2;
    border-radius: 8px;
  }

  .form-container4 {
    gap: 1rem;
  }

  .form-container4 .div1 input {
    width: 20rem;
  }

  .form-navigation-container,
  .progress {
    display: flex;
    gap: 34rem;
    padding: 0 2rem;
  }

  .progress {
    gap: 1rem;
  }

  #cancel,
  #clear,
  #add {
    cursor: pointer;
    width: 144px;
    height: 50px;
    background: #fdfdfd;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    font-family: 'Lato';
    font-style: normal;
    font-weight: 800;
    font-size: 20px;
    line-height: 24px;
    color: #00C8D2;
    border: 2px solid #00C8D2;
  }

  #cancel {
    background: #FDFDFD;
    border: 2px solid rgba(216, 60, 50, 0.8);
    color: rgba(216, 60, 50, 0.8);
  }

  #add {
    background: #00C8D2;
    border-radius: 8px;
    color: #FDFDFD;
    border: 2px solid #00C8D2;
  }

  .accounts-table {
    width: 100%;
    overflow-x: auto;
  }

  .simple-table {
    width: 100%;
    min-width: 1000px;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .simple-table th,
  .simple-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    white-space: nowrap;
    color: #004168;
  }

  .simple-table th {
    background-color: rgba(0, 172, 206, 0.4);
    font-weight: bold;
  }

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
    <form action="">
      <div class="popup-content">
        <h2>Add Hospital</h2>
        <div class="form-container">
          <div class="form-container2">
            <div class="div1">
              Name of Hospital
              <input type="text" placeholder="Enter the name">
            </div>
            <div class="dropdown-container-sector">
              <label for="example-dropdown">Sector</label>
              <select id="example-dropdown" class="dropdown-input">
                <option value="" disabled selected>Select an option</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
                <option value="option4">Option 4</option>
              </select>
            </div>
          </div>

          <div class="form-heading">
            Hospital Address
          </div>
          <div class="form-container3">
            <div class="div1">
              No. & Street
              <input type="text" placeholder="Enter the No. & Street">
            </div>
            <div class="div1">
              Barangay
              <input type="text" placeholder="Enter the Barangay">
            </div>
            <div class="dropdown-container-sector">
              <label for="example-dropdown">City or Municipality</label>
              <select id="example-dropdown" class="dropdown-input">
                <option value="" disabled selected>Select an option</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
                <option value="option4">Option 4</option>
              </select>
            </div>
            <div class="div1">
              Provice
              <input class="bataan-btn" value="Bataan" readonly />
            </div>
          </div>

          <div class="form-heading">
            Contact Information
          </div>
          <div class="form-container4">
            <div class="div1">
              Email Address
              <input type="text" placeholder="example@gmail.com">
            </div>
            <div class="div1">
              Landline No.
              <input type="text" placeholder="(047) YYY ZZZZ">
            </div>
            <div class="div1">
              Mobile No.
              <input type="text" placeholder="+63 (XXX) YYY ZZZZ">
            </div>
          </div>

          <div class="form-heading">
            Name of the Hospital Leader
          </div>
          <div class="form-container4">
            <div class="div1">
              Last Name
              <input type="text" placeholder="Enter the last name">
            </div>
            <div class="div1">
              First Name
              <input type="text" placeholder="Enter the first name">
            </div>
            <div class="div1">
              Middle Name
              <input type="text" placeholder="Enter the middle name">
            </div>
          </div>
        </div>
        <footer class="form-navigation">
          <div class="form-navigation-container">
            <input id="cancel" type="submit" value="Cancel">
            <div class="progress">
              <input id="clear" type="reset" value="Clear">
              <input id="add" type="submit" value="Add">
            </div>
          </div>
        </footer>
      </div>
    </form>
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
      const closeButton = document.querySelector('cancel');

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