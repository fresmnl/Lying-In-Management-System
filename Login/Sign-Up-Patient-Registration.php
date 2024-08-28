<?php
require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['prev_operation'] = $db_conn->cleanStr($_POST['prev_operation'] ?? 'N/A');
  $_SESSION['operation_date'] = $db_conn->cleanStr($_POST['operation_date'] ?? 'N/A');
  $_SESSION['smoker'] = $db_conn->cleanStr($_POST['smoker'] ?? 'N/A');
  $_SESSION['drinker'] = $db_conn->cleanStr($_POST['drinker'] ?? 'N/A');
  $_SESSION['pack_per_year'] = $db_conn->cleanStr($_POST['pack_per_year'] ?? '');
  $_SESSION['bottle_per_month'] = $db_conn->cleanStr($_POST['bottle_per_month'] ?? '');
  $_SESSION['drug_user'] = $db_conn->cleanStr($_POST['drug_user'] ?? 'N/A');
  $_SESSION['hypertension'] = $db_conn->cleanStr($_POST['hypertension'] ?? 'N/A');
  $_SESSION['asthma'] = $db_conn->cleanStr($_POST['asthma'] ?? 'N/A');
  $_SESSION['blood_disorder'] = $db_conn->cleanStr($_POST['blood_disorder'] ?? 'N/A');
  $_SESSION['heart_disorder'] = $db_conn->cleanStr($_POST['heart_disorder'] ?? 'N/A');
  $_SESSION['liver_disorder'] = $db_conn->cleanStr($_POST['liver_disorder'] ?? 'N/A');
  $_SESSION['kidney_disorder'] = $db_conn->cleanStr($_POST['kidney_disorder'] ?? 'N/A');
  $_SESSION['pulmonary_tuberculosis'] = $db_conn->cleanStr($_POST['pulmonary_tuberculosis'] ?? 'N/A');
  $_SESSION['skin_disease'] = $db_conn->cleanStr($_POST['skin_disease'] ?? 'N/A');
  $_SESSION['others_checkbox'] = $db_conn->cleanStr($_POST['others_checkbox'] ?? 'N/A');
  $_SESSION['skin_disease_type'] = $db_conn->cleanStr($_POST['skin_disease_type'] ?? 'N/A');
  $_SESSION['diabetes_mellitus'] = $db_conn->cleanStr($_POST['diabetes_mellitus'] ?? 'N/A');
  $_SESSION['diabetes_type'] = $db_conn->cleanStr($_POST['diabetes_type'] ?? 'N/A');
  $_SESSION['allergy'] = $db_conn->cleanStr($_POST['allergy'] ?? 'N/A');
  $_SESSION['allergy_type'] = $db_conn->cleanStr($_POST['allergy_type'] ?? 'N/A');
  $_SESSION['cancer'] = $db_conn->cleanStr($_POST['cancer'] ?? 'N/A');
  $_SESSION['cancer_type'] = $db_conn->cleanStr($_POST['cancer_type'] ?? 'N/A');
  $_SESSION['cancer_stage'] = $db_conn->cleanStr($_POST['cancer_stage'] ?? 'N/A');
  $_SESSION['others_input'] = $db_conn->cleanStr($_POST['others_input'] ?? 'N/A');
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="../src/output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/Sign-Up-Patient-Registration.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
  <title>Create an Account - Registration</title>
</head>

<body>
  <div class="sign-up-patient-registration">
    <main class="rectangle-parent">
      <div class="frame-child"></div>
      <section class="content">
        <div class="content-child"></div>
        <div class="branding">
          <img
            class="logo-white-1"
            loading="lazy"
            alt=""
            src="images/signup-logo.svg" />
        </div>
        <div class="form-container">
          <div class="form">
            <div class="title">
              <div class="create-an-account">Create an Account</div>
            </div>
            <div class="provide-the-required">
              Provide the required information to get started.
            </div>
          </div>
        </div>
        <div class="signin-link-wrapper">
          <div class="signin-link">
            <div class="already-have-an-account-wrapper">
              <div class="already-have-an">Already have an account?</div>
            </div>
            <button class="signin-button">
              <div class="signin-button-child"></div>
              <a class="sign-in" href="Login.php">Sign in</a>
            </button>
          </div>
        </div>
      </section>
      <section class="progress">
        <div class="steps">
          <div class="step-container">
            <div class="step-one">
              <div class="step-indicator">
                <div class="dots">
                  <div class="indicators"></div>
                  <b class="step-placeholder">1</b>
                </div>
                <div class="dots1">
                  <div class="dots-child"></div>
                </div>
                <div class="dots2">
                  <div class="dots-item"></div>
                  <b class="b">2</b>
                </div>
                <div class="dots3">
                  <div class="dots-inner"></div>
                </div>
                <div class="dots4">
                  <div class="ellipse-div"></div>
                  <b class="b1">3</b>
                </div>
              </div>
            </div>
            <div class="personal-details-parent">
              <div class="personal-details">Personal Details</div>
              <div class="history-button">
                <div class="history">History</div>
              </div>
              <div class="registration">Registration</div>
            </div>
          </div>
          <form id="SignUpForm" action="" method="POST">
            <div class="input-fields-wrapper">
              <div class="input-fields">
                <div class="input-fields-child"></div>
                <div class="user-pass-container">
                  <div class="input-labels">
                    <b class="username">Username</b>
                  </div>
                  <div class="input-values">
                    <div class="input-values-child"></div>
                    <input
                      class="auto-generated-username"
                      readonly
                      name="username"
                      value="<?php echo htmlspecialchars($_SESSION['username']) ?? ''; ?>"
                      type="text" />
                  </div>
                </div>
                <div class="user-pass-container1">
                  <div class="password-wrapper">
                    <b class="password">Password<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  </div>
                  <div class="rectangle-group relative">
                    <div class="frame-item"></div>
                    <input
                      class="enter-a-password"
                      placeholder="Enter a password"
                      name="password"
                      type="password"
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
                <div class="user-pass-container2">
                  <div class="confirm-password-wrapper">
                    <b class="confirm-password">Confirm Password<span class="font-bold text-[#ff0000] ml-1">*</span></b>
                  </div>
                  <div class="rectangle-container relative">
                    <div class="frame-inner"></div>
                    <input
                      class="re-enter-a-password"
                      placeholder="Re-enter a password"
                      name="confirm_password"
                      type="password"
                      id="passwordField2"
                      required />
                    <span class="absolute text-[#004168] right-[15px] top-[12px] cursor-pointer" id="eyeBtn2"><i class="fa-regular fa-eye-slash" id="eyeIcon2"></i></span>
                  </div>
                </div>
                <?php if (isset($_GET['message'])): ?>
                  <div class="message"><?php echo htmlspecialchars($_GET['message']); ?></div>
                <?php endif; ?>
                <div class="agreement">
                  <input class="checkbox" type="checkbox" name="agreement" required value="yes" />

                  <div class="i-agree-to-container">
                    <span class="i-agree-to">I agree to the </span>
                    <b>Terms of Service and Privacy Policy</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation">
              <div class="buttons">
                <input type="button" value="Previous" onclick="window.location.href='Sign-Up-Patient-History.php';" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
              </div>
              <div class="submit-buttons">
                <input type="reset" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                <input type="submit" value="Create" class="next-button" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
              </div>
            </div>
          </form>
        </div>
  </div>
  </section>
  </main>
  </div>
  <script>
    $('#SignUpForm').on('submit', function(e) {
      e.preventDefault(); // Prevent the form from submitting the traditional way

      $.ajax({
        type: 'POST',
        url: 'Sign-Up-Patient-Registration-Process.php', // Replace with the correct path to your PHP script
        data: $(this).serialize(), // Serialize form data
        dataType: 'json',
        success: function(response) {
          console.log('AJAX Success Response:', response);
          if (response.status === 'success') {
            Swal.fire({
              icon: 'success',
              title: response.message,
              showConfirmButton: false,
              timer: 3000
            }).then(() => {
              window.location.href = 'Login.php'; // Redirect after showing the success message
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: response.message
            });
          }
        },
        error: function(xhr, status, error) {
          console.error('AJAX Error: ', status, error);
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong with the request.'
          });
        }
      });
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
</body>

</html>