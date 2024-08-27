
<?php
session_start();

$username = $_SESSION['admin']['username'] ?? '';
$isLoggedIn = $_SESSION['admin']['loggedin'] ?? '';

if ($isLoggedIn !== true && !isset($username)) {
  header("Location: ../Login/Login.php");
}

require '../Database/db-config.php';


// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");


// error_log(print_r($_POST, true));
// error_log(print_r($_SESSION, true));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // error_log(print_r($_POST, true));

  $_SESSION['hfacility']['health_facility'] = strtoupper($db_conn->cleanStr($_POST['health_facility']));
  $_SESSION['hfacility']['city_municipality'] = strtoupper($db_conn->cleanStr($_POST['city_municipality']));
  $_SESSION['hfacility']['telephone_number'] = strtoupper($db_conn->cleanStr($_POST['telephone_number']));
  $_SESSION['hfacility']['email'] = strtoupper($db_conn->cleanStr($_POST['email']));
  $_SESSION['hfacility']['contact_number'] = strtoupper($db_conn->cleanStr($_POST['contact_number']));
  $_SESSION['hfacility']['health_facility_id'] = strtoupper($db_conn->generateHealthFacilityId($db_conn->NumberOfHealthFacility()));
  $_SESSION['hfacility']['account_id'] = strtoupper($db_conn->generateAccountId($db_conn->NumberOfAccount()));
  // echo "<script>console.log(" . json_encode($_SESSION['admin']) . ");</script>";
}


?>

<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>

<link rel="stylesheet" href="css/Registration-Next.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />

<div class="admin-registration-next">
  <form id="SignUpForm" class="credentials" action="" method="POST">
    <div class="credentials-child"></div>
    <button class="facility-heading">
      <div class="facility-heading-child"></div>
      <b class="create-an-account">Create an Account for Health Facility</b>
    </button>
    <div class="input-fields">
      <div class="field-labels">
        <b class="username">Username</b>
        <div class="input-containers">
          <div class="input-containers-child"></div>
          <input
            class="enter-a-username"
            placeholder="Enter a username"
            name="username"
            type="text"
            value="<?= htmlspecialchars($_SESSION['hfacility']['username'] ?? '', ENT_QUOTES) ?>"
            required />
        </div>
      </div>
    </div>
    <div class="input-fields1">
      <div class="password-parent">
        <b class="password">Password</b>
        <div class="rectangle-parent relative">
          <div class="frame-child"></div>
          <input
            class="enter-a-strong"
            placeholder="Enter a strong password"
            type="password"
            name="password"
            id="passwordField"
            required />
          <span class="absolute text-[#004168] right-[15px] top-[12px] cursor-pointer" id="eyeBtn"><i class="fa-regular fa-eye-slash" id="eyeIcon"></i></span>
        </div>
        <div id="passChecker" class="relative text-left justify-start items-start p-0 m-0 flex-col flex-wrap hidden transition-all duration-2">
          <p id="min8" class="font-bold text-red-500 m-0 p-0"><i class="fa-solid fa-circle-exclamation mr-2"></i>Atleast 8 characters.
          </p>
          <p id="smallerLetter" class="font-bold text-red-500 m-0 p-0"><i class="fa-solid fa-circle-exclamation mr-2"></i>No lowercase.
          </p>
          <p id="capitalLetter" class="font-bold text-red-500 m-0 p-0"><i class="fa-solid fa-circle-exclamation mr-2"></i>No uppercase.
          </p>
          <p id="numbers" class="font-bold text-red-500 m-0 p-0"><i class="fa-solid fa-circle-exclamation mr-2"></i>
            No numbers.</p>
          <p id="specialChar" class="font-bold text-red-500 m-0 p-0"><i class="fa-solid fa-circle-exclamation mr-2"></i>
            No special characters.</p>
        </div>
      </div>
    </div>
    <div class="input-fields2">
      <div class="confirm-password-parent">
        <b class="confirm-password">Confirm Password</b>
        <div class="rectangle-group relative">
          <div class="frame-item"></div>
          <input
            class="re-enter-a-password"
            placeholder="Re-enter a password"
            type="password"
            name="confirm_password"
            id="passwordField2"
            required />
          <span class="absolute text-[#004168] right-[15px] top-[12px] cursor-pointer" id="eyeBtn2"><i class="fa-regular fa-eye-slash" id="eyeIcon2"></i></span>
        </div>
      </div>
    </div>
    <div class="navigation">
      <div class="actions">
          <a class="back" href="Registration.php">Back</a>
        <div class="submission">
          <input type="reset" class="clear" value="Clear">
          <input type="submit" class="next" value="Next">
        </div>
      </div>
    </div>
  </form>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('SignUpForm'); 

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); 

            const formData = new FormData(this);

            fetch('Registration-Process.php', { 
                method: 'POST',
                body: formData
            })
            .then(response => {
                
                if (response.ok && response.headers.get('Content-Type').includes('application/json')) {
                    return response.json();
                } else {
                    throw new Error('Invalid response from server');
                }
            })
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    }).then(() => {
                        window.location.href = 'Dashboard.php'; 
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong with the request.'
                });
                console.error('Error:', error);
            });
        });
    } else {
        console.error('Form element not found.');
    }
});


  var passwordField = document.getElementById("passwordField");
  var passwordField2 = document.getElementById("passwordField2");
  var eyeBtn = document.getElementById("eyeBtn");
  var eyeIcon = document.getElementById("eyeIcon");
  var eyeBtn2 = document.getElementById("eyeBtn2");
  var eyeIcon2 = document.getElementById("eyeIcon2");
  var min8 = document.getElementById("min8");
  var smallerLetter = document.getElementById("smallerLetter");
  var capitalLetter = document.getElementById("capitalLetter");
  var numbers = document.getElementById("numbers");
  var specialChar = document.getElementById("specialChar");

  passwordField.addEventListener("focus", () => {
    var showHide = document.getElementById("passChecker");
    showHide.classList.remove("hidden");
    showHide.classList.add("flex");
  });
  passwordField.addEventListener("blur", () => {
    var showHide = document.getElementById("passChecker");
    showHide.classList.add("hidden");
    showHide.classList.remove("flex");
  });
  // eye button click function
  eyeBtn.addEventListener("click", function(e) {
    e.preventDefault();
    if (eyeIcon.classList.contains("fa-eye")) {
      eyeIcon.classList.remove("fa-eye");
      eyeIcon.classList.add("fa-eye-slash");
      passwordField.type = "password";
    } else {
      eyeIcon.classList.remove("fa-eye-slash");
      eyeIcon.classList.add("fa-eye");
      passwordField.type = "text";
    }
  });
  eyeBtn2.addEventListener("click", function(e) {
    e.preventDefault();
    if (eyeIcon2.classList.contains("fa-eye")) {
      eyeIcon2.classList.remove("fa-eye");
      eyeIcon2.classList.add("fa-eye-slash");
      passwordField2.type = "password";
    } else {
      eyeIcon2.classList.remove("fa-eye-slash");
      eyeIcon2.classList.add("fa-eye");
      passwordField2.type = "text";
    }
  });
  // check password condition function
  function checkCondition(element, regex) {
    if (regex.test(passwordField.value)) {
      element.classList.add("text-green-400");
      element.classList.remove("text-red-500");
      element
        .querySelector(".fa-circle-exclamation")
        ?.classList.add("fa-circle-check");
      element
        .querySelector(".fa-circle-check")
        ?.classList.remove("fa-circle-exclamation");
    } else {
      element.classList.add("text-red-500");
      element.classList.remove("text-green-400");
      element
        .querySelector(".fa-circle-check")
        ?.classList.add("fa-circle-exclamation");
      element
        .querySelector(".fa-circle-exclamation")
        ?.classList.remove("fa-circle-check");
    }
  }

  // input field live input checker
  passwordField.addEventListener("input", function() {
    checkCondition(min8, /.{8,}/);
    checkCondition(smallerLetter, /(?=.*[a-z])/);
    checkCondition(capitalLetter, /(?=.*[A-Z])/);
    checkCondition(numbers, /(?=.*\d)/);
    checkCondition(specialChar, /(?=.*[!@#$%^&*])/);
  });
</script>