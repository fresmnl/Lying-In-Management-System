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
  <body>
    <div class="admin-record-hospital-da" style="width: 98.5rem;">
      <div class="centimeter-wrapper">
        <div class="centimeter-wrapper-child"></div>
        <div class="project-content">
          <div class="project-content-child"></div>
          <a href="Record-Hospital-Data" class="hospital-data">Hospital Data</a>
        </div>
        <div class="centimeter-wrapper-item">
          <div class="project-content-child"></div>
          <a href="Record-Hospital-Archived.php" class="hospital-data">Archived</a>
        </div>
      </div>
      <main class="search-hospitals-wrapper">
        <section class="search-hospitals">
          <div class="search-bar">
            <div class="search-input">
              <div class="search-button">
                <div class="search-layer">
                  <div class="hospital-count">
                    <b class="total-number-of">Total Number of Hospitals</b>
                  </div>
                  <div class="rectangle-parent">
                    <div class="frame-child"></div>
                    <input class="search" placeholder="Search..." type="text" />

                    <div class="search-icon">
                      <img
                        class="layer-1-icon"
                        alt=""
                        src="./public/layer-1.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="items-shown">
                  <div class="showing-1-">showing 1 - 20 of 25 items</div>
                </div>
              </div>
              <div class="search-input-inner">
              <button id="addHospitalBtn" style="cursor: pointer; width: 11rem; height: 50px;background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #fdfdfd; border:none">
    + Add Hospital
</button>
                  
              </div>
            </div>
          </div>
          <div class="hospital-count-details-parent">
            <div class="hospital-count-details">
              <div class="number-details">
                <b class="number-of-hospitals">Number of Hospitals</b>
                <div class="hospital-count-value">25</div>
              </div>
            </div>
            <div class="last-name-layout-parent">
              <div class="last-name-layout">
                <div class="last-name-layout-child"></div>
                <img
                  class="vector-icon"
                  loading="lazy"
                  alt=""
                  src="./public/vector.svg"
                />
              </div>
              <div class="card-layout">
                <div class="card-layout-child"></div>
                <b class="b">1</b>
              </div>
              <div class="layout">
                <div class="layout-child"></div>
                <img
                  class="vector-icon1"
                  loading="lazy"
                  alt=""
                  src="./public/vector-1.svg"
                />
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- Add this HTML structure after your current code -->
    <div id="addHospitalModal" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h2>Add Hospital</h2>
    <!-- Your form goes here -->
    <form id="hospitalForm">
      <!-- Form fields as seen in your image -->
      <!-- Example Field -->
      <label for="hospitalName">Name of Hospital:</label>
      <input type="text" id="hospitalName" name="hospitalName" placeholder="Enter the name">

      <!-- Other form fields go here -->

      <!-- Action Buttons -->
      <button type="button" class="close-btn">Cancel</button>
      <button type="submit">Add</button>
    </form>
  </div>
</div>

      <h3>Name of the Hospital Leader</h3>

      <div class="form-group">
        <input type="text" placeholder="Enter the last name">
        <input type="text" placeholder="Enter the first name">
        <input type="text" placeholder="Enter the middle name">
      </div>

      <div class="modal-footer">
        <button type="button" class="cancel-btn">Cancel</button>
        <button type="submit" class="add-btn">Add</button>
      </div>
    </form>
  </div>
</div>
<script>
  // Wait for the DOM to load before running the script
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("addHospitalModal");
  const addButton = document.getElementById("addHospitalBtn");
  const closeBtn = document.querySelector(".close-btn");

  // Show the modal when the add button is clicked
  addButton.addEventListener("click", () => {
    modal.style.display = "block";
  });

  // Close the modal when the close button is clicked
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  // Close the modal if the user clicks outside of it
  window.addEventListener("click", (event) => {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});

</script>
  </body>