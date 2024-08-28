<?php
require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $_SESSION['middle_name'] = $db_conn->cleanStr($_POST['middle_name'] ?? '');
  $_SESSION['last_name'] = $db_conn->cleanStr($_POST['last_name'] ?? '');
  $_SESSION['first_name'] =$db_conn->cleanStr($_POST['first_name'] ?? '');
  $_SESSION['sex'] = $db_conn->cleanStr($_POST['sex'] ?? '');
  $_SESSION['civil_status'] = $db_conn->cleanStr($_POST['civil_status'] ?? '');
  $_SESSION['birth_date'] = $db_conn->cleanStr($_POST['birth_date'] ?? '');
  $_SESSION['age'] = $db_conn->cleanStr($_POST['age'] ?? '');
  $_SESSION['email_address'] = $db_conn->cleanStr($_POST['email_address'] ?? '');
  $_SESSION['contact_number'] = $db_conn->cleanStr($_POST['contact_number'] ?? '');
  $_SESSION['street_address'] = $db_conn->cleanStr($_POST['street_address'] ?? '');
  $_SESSION['barangay_address'] = $db_conn->cleanStr($_POST['barangay_address'] ?? '');
  $_SESSION['municipality_address'] = $db_conn->cleanStr($_POST['municipality_address'] ?? '');
  $_SESSION['province_address'] = $db_conn->cleanStr($_POST['province_address'] ?? '');
  $_SESSION['educational_attainment'] = $db_conn->cleanStr($_POST['educational_attainment'] ?? '');
  $_SESSION['employment_status'] = $db_conn->cleanStr($_POST['employment_status'] ?? '');
  $_SESSION['occupation'] = $db_conn->cleanStr($_POST['occupation'] ?? '');
  $_SESSION['dswd_nhts'] = strtoupper($db_conn->cleanStr($_POST['dswd_nhts'] ?? ''));
  $_SESSION['4ps_member'] = strtoupper($db_conn->cleanStr($_POST['4ps_member'] ?? ''));
  $_SESSION['identification_type'] = $db_conn->cleanStr($_POST['identification_type'] ?? '');
  $_SESSION['identification_card'] = $db_conn->cleanStr($_POST['identification_card'] ?? '');
  $_SESSION['username'] = 
            strtoupper(substr($db_conn->cleanStr($_POST['first_name'] ?? ''), 0, 1)) . 
            strtoupper(substr($db_conn->cleanStr($_POST['last_name'] ?? ''), 0, 1)) . 
            strtolower(substr($db_conn->cleanStr($_POST['last_name'] ?? ''), 1)) . 
            substr($db_conn->cleanStr($_POST['birth_date'] ?? ''), -4);
  $_SESSION['patient_id'] = strtoupper($db_conn->generatePatientId($db_conn->NumberOfPatient()));
  $_SESSION['account_id'] = strtoupper($db_conn->generateAccountId($db_conn->NumberOfAccount()));

  $fullname = strtoupper($db_conn->cleanStr($_POST['first_name'] ?? ''));
  if (isset($_POST['middle_name']) && $_POST['middle_name'] !== "-") {
    // $middle_name = " " . strtoupper(substr($db_conn->cleanStr($_POST['middle_name'] ?? ''), 0, 1)) . ". ";
    $middle_name = strtoupper($db_conn->cleanStr($_POST['middle_name'] ?? ''));
    $last_name = strtoupper($db_conn->cleanStr($_POST['last_name'] ?? ''));
    $fullname .= " " . $middle_name . " " . $last_name;
  } else {
    $fullname .= " " . strtoupper($db_conn->cleanStr($_POST['last_name'] ?? ''));
  }

  $_SESSION['fullname'] = $fullname;

  // Check if email address exists
  $email = $_SESSION['email_address'];
  if ($db_conn->emailExists($email)) {
      // Redirect with error query parameter
      header('Location: Sign-Up-Patient-Personal.php?error=email_exists');
      exit();
  } else {
      // Redirect with success query parameter
      header('Location: ' . $_SERVER['PHP_SELF']);
      exit();
  }


  // Handle file upload
  // if (isset($_FILES['identification_card']) && $_FILES['identification_card']['error'] === UPLOAD_ERR_OK) {
  //     $fileTmpPath = $_FILES['identification_card']['tmp_name'];
  //     $fileName = $_FILES['identification_card']['name'];
  //     $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  //     $allowedExts = ['jpg', 'jpeg', 'png'];

  //     if (in_array($fileExtension, $allowedExts)) {
  //         $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
  //         $uploadDir = '../uploaded_files/';
  //         $destPath = $uploadDir . $newFileName;

  //         if (move_uploaded_file($fileTmpPath, $destPath)) {
  //             $user_data['identification_card'] = $db_conn->cleanStr($newFileName);
  //         } else {
  //             echo 'Error moving the uploaded file.';
  //             exit;
  //         }
  //     } else {
  //         echo 'Invalid file type. Allowed types: jpg, jpeg, png.';
  //         exit;
  //     }
  // } else {
  //     $user_data['identification_card'] = '';
  // }

  // Prepare and execute SQL insert statement
  // $sql = "INSERT INTO `patient_info` (
  //                       `Patient_Id`, `Health_Facility`, `Fname`, `Mname`, `Lname`, `fullname`, `Birthday`, 
  //                       `Street_Address`, `Barangay_Address`, `Municipality_Address`, `Province_Address`, `Contact_No`, `email`, `civil_status`, 
  //                       `sex`, `Educational_Attainment`, `Employment_Status`, `Occupation`, `DSWD_NHTS`, `4PS_MEMBER`, `Identification`, `Id_Type`
  //                   ) 
  //                   VALUES (
  //                       :patient_id, :health_facility, :first_name, :middle_name, :last_name, :fullname, :birth_date, :street_address, 
  //                       :barangay_address, :municipality_address, :province_address, :contact_number, :email_address, :civil_status, 
  //                       :sex, :educational_attainment, :employment_status, :occupation, :dswd_nhts, :4ps_member, :identification_card, 
  //                       :identification_type
  //                   )";

  // $stmt = $db_conn->query($sql, array_merge($user_data, ['fullname' => $fullname]));

  // if ($stmt) {
  //   header('Location: Sign-Up-Patient-History.php');
  //   exit();
  // } else {
  //   echo 'Failed to insert data into the database.';
  // }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="global.css" />
  <link rel="stylesheet" href="css/Sign-Up-Patient-History.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
  <title>Create an Account - History</title>
  <style>
    .rectangle-parent1 {
      display: flex;
      align-items: center;
      background-color: transparent;
      position: relative;
    }

    .frame-input {
      border: 1px solid #ccc;
      background-color: transparent;
      padding: 5px;
      flex: 1;
      font-size: 16px;
      outline: none;
    }

    .frame-icon {
      cursor: pointer;
      margin-left: 10px;
    }

    .calendar-popup {
      display: none;
      position: absolute;
      top: 3.4rem;
      left: 0;
      background: white;
      border: 2px solid var(--color-deepskyblue);
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      width: 326px;
    }

    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .calendar-header select {
      padding: 5px;
    }

    .calendar-days {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 5px;
    }

    .calendar-day,
    .calendar-day-name {
      text-align: center;
      padding: 5px;
      border: 1px solid #ddd;
      cursor: pointer;
    }

    .calendar-day-name {
      font-weight: bold;
    }

    .calendar-day.selected {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>

<body>

  <div class="sign-up-patient-history">
    <main class="rectangle-parent">
      <div class="frame-child"></div>
      <header class="rectangle-group">
        <div class="frame-item"></div>
        <div class="logo-white-1-wrapper">
          <img
            class="logo-white-1"
            loading="lazy"
            alt=""
            src="images/signup-logo.svg" />
        </div>
        <div class="frame-wrapper">
          <div class="frame-parent">
            <div class="create-an-account-wrapper">
              <a class="create-an-account">Create an Account</a>
            </div>
            <div class="provide-the-required">
              Provide the required information to get started.
            </div>
          </div>
        </div>
        <div class="frame-container">
          <div class="frame-group">
            <div class="already-have-an-account-wrapper">
              <div class="already-have-an">Already have an account?</div>
            </div>
            <button class="rectangle-container">
              <div class="frame-inner"></div>
              <a class="sign-in" href="Login.php">Sign in</a>
            </button>
          </div>
        </div>
      </header>
      <form action="Sign-Up-Patient-Registration.php" method="POST">
        <section class="frame-section">
          <div class="frame-div">
            <div class="frame-parent1">
              <div class="frame-wrapper1">
                <div class="frame-parent2">
                  <div class="ellipse-parent">
                    <div class="ellipse-div"></div>
                    <a class="a">1</a>
                  </div>
                  <div class="line-wrapper">
                    <div class="line-div"></div>
                  </div>
                  <div class="ellipse-group">
                    <div class="frame-child1"></div>
                    <a class="a1">2</a>
                  </div>
                  <div class="line-container">
                    <div class="frame-child2"></div>
                  </div>
                  <div class="ellipse-container">
                    <div class="frame-child3"></div>
                    <a class="a2">3</a>
                  </div>
                </div>
              </div>
              <div class="frame-parent3">
                <div class="frame-parent4">
                  <div class="frame-parent5">
                    <div class="personal-details-header-wrapper">
                      <div class="personal-details-header">
                        <div class="personal-details">Personal Details</div>
                        <div class="history">History</div>
                      </div>
                    </div>
                    <div class="frame-parent6">
                      <div class="if-a-particular-field-does-not-wrapper">
                        <div class="if-a-particular-container">
                          <span class="if-a-particular">If a particular field does not apply to you, kindly
                            enter</span>
                          <b> "N/A"</b>
                          <span class="not-applicable-in">
                            (Not Applicable) in that field.</span>
                        </div>
                      </div>
                      <div class="rectangle-div"></div>
                      <div class="frame-parent7">
                        <div class="past-surgical-history-wrapper">
                          <div class="past-surgical-history">
                            Past Surgical History
                          </div>
                        </div>
                        <div class="frame-parent8">
                          <div class="operation-date-header-wrapper">
                            <div class="operation-date-header">
                              <b class="major-minor">Major / Minor Operation</b>
                              <b class="date">Date</b>
                            </div>
                          </div>
                          <div class="frame-parent9">
                            <div class="frame-button" style="padding: 0.55rem;">
                              <div class="frame-child4"></div>
                              <input
                                class="enter-the-name"
                                style="border: none; background-color:transparent;"
                                placeholder="Enter the name or type of operation"
                                type="text"
                                name="prev_operation" />
                            </div>
                            <div class="rectangle-parent1">
                              <div class="frame-child5"></div>
                              <input
                                style="outline: none;border:none;"
                                class="frame-input"
                                id="dateInput"
                                placeholder="mm/dd/yyyy"
                                type="text"
                                name="operation_date" />
                              <img
                                class="frame-icon"
                                alt="Calendar"
                                src="images/calendar.svg"
                                id="calendarIcon" />
                              <div class="calendar-popup" id="calendarPopup">
                                <div class="calendar-header">
                                  <select id="monthSelect"></select>
                                  <select id="yearSelect"></select>
                                </div>
                                <div class="calendar-days" id="calendarDays">
                                  <!-- Days of the week will be inserted here -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-parent12">
                    <div class="registration-wrapper">
                      <div class="registration">Registration</div>
                    </div>
                    <div class="rectangle-parent4">
                      <div class="frame-child9"></div>
                      <div class="frame-parent13">
                        <div class="personal-and-social-history-wrapper">
                          <div class="personal-and-social">
                            Personal and Social History
                          </div>
                        </div>
                        <div class="frame-parent14">
                          <div class="packyears-wrapper">
                            <b class="packyears">Pack/Years</b>
                          </div>
                          <div class="frame-parent15">
                            <div class="frame-wrapper2">
                              <div class="frame-parent16">
                                <div class="frame-wrapper3">
                                  <div class="smoker-checkboxes-parent">
                                    <input
                                      class="smoker-checkboxes"
                                      type="checkbox"
                                      name="smoker"
                                      id="smoker"
                                      <?= isset($_SESSION['smoker']) && $_SESSION['smoker'] === "YES" ? "Checked":"" ?>
                                      value="yes" />

                                    <input
                                      class="smoker-checkboxes1"
                                      type="checkbox"
                                      name="drinker"
                                      id="drinker"
                                      <?= isset($_SESSION['drinker']) && $_SESSION['drinker'] === "YES" ? "Checked":"" ?>
                                      value="yes" />
                                  </div>
                                </div>
                                <div class="frame-parent17">
                                  <div class="smoker-parent">
                                    <div class="smoker">Smoker</div>
                                    <!-- <div class="smoker1">Smoker</div> -->
                                  </div>
                                  <div class="alcoholic-beverage-drinker">
                                    Alcoholic Beverage Drinker
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="gallery-images-parent">
                              <input
                                class="gallery-images"
                                type="text"
                                name="pack_per_year"
                                id="pack_per_year"
                                value="<?= htmlspecialchars($_SESSION['pack_per_year'] ?? '', ENT_QUOTES) ?>"
                                disabled
                                style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;">

                              <div class="frame-parent18">
                                <div class="bottlesday-wrapper">
                                  <b class="bottlesday">Bottles/Month</b>
                                </div>
                                <input
                                  class="gallery-images"
                                  type="text"
                                  name="bottle_per_month"
                                  id="bottle_per_month"
                                  value="<?= htmlspecialchars($_SESSION['bottle_per_month'] ?? '', ENT_QUOTES) ?>"
                                  disabled
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="frame-parent19">
                        <input 
                        class="frame-input1" 
                        type="checkbox" 
                        name="drug_user" 
                        <?= isset($_SESSION['drug_user']) && $_SESSION['drug_user'] === "YES" ? "Checked":"" ?>
                        value="yes"  />

                        <div class="drugs-use">Drugs Use / Abuse</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rectangle-parent5">
                  <div class="frame-child10"></div>
                  <div class="frame-parent20">
                    <div class="family-history-wrapper">
                      <div class="family-history">Family History</div>
                    </div>
                    <div class="frame-parent21">
                      <div class="frame-parent22">
                        <input class="frame-input2" type="checkbox" name="hypertension" <?= isset($_SESSION['hypertension']) && $_SESSION['hypertension'] === "YES" ? "Checked":"" ?> value="yes" />

                        <div class="hypertension">Hypertension</div>
                      </div>
                      <div class="frame-parent23">
                        <input class="frame-input3" type="checkbox" name="asthma" <?= isset($_SESSION['asthma']) && $_SESSION['asthma'] === "YES" ? "Checked":"" ?> value="yes" />

                        <div class="asthma">Asthma</div>
                      </div>
                      <div class="frame-parent24">
                        <input class="frame-input4" type="checkbox" name="blood_disorder" <?= isset($_SESSION['blood_disorder']) && $_SESSION['blood_disorder'] === "YES" ? "Checked":"" ?> value="yes" />

                        <div class="blood-disorder">Blood Disorder</div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-parent25">
                    <div class="family-history-second-row-chec-parent">
                      <input
                        class="family-history-second-row-chec"
                        type="checkbox"
                        name="heart_disorder" value="yes" />

                      <div class="heart-disorder">Heart Disorder</div>
                    </div>
                    <div class="frame-parent26">
                      <input class="frame-input5" type="checkbox" name="liver_disorder" <?= isset($_SESSION['liver_disorder']) && $_SESSION['liver_disorder'] === "YES" ? "Checked":"" ?> value="yes" />

                      <div class="liver-disorder">Liver Disorder</div>
                    </div>
                    <div class="frame-parent27">
                      <input class="frame-input6" type="checkbox" name="kidney_disorder" <?= isset($_SESSION['kidney_disorder']) && $_SESSION['kidney_disorder'] === "YES" ? "Checked":"" ?> value="yes" />

                      <div class="kidney-disorder">Kidney Disorder</div>
                    </div>
                  </div>
                  <div class="frame-parent28">
                    <div class="tuberculosis-checkboxes-wrapper">
                      <div class="tuberculosis-checkboxes">
                        <input class="tuberculosis-checkbox" type="checkbox" name="pulmonary_tuberculosis" <?= isset($_SESSION['pulmonary_tuberculosis']) && $_SESSION['pulmonary_tuberculosis'] === "YES" ? "Checked":"" ?> value="pulmonary tuberculosis" />

                        <input class="tuberculosis-checkbox1" type="checkbox" id="skin_disease" name="skin_disease" <?= isset($_SESSION['skin_disease']) && $_SESSION['skin_disease'] === "YES" ? "Checked":"" ?> value="skin disease" /><!-- TODO classname dont match with value -->

                        <input class="tuberculosis-checkbox2" type="checkbox" id="others" name="others_checkbox" <?= isset($_SESSION['others_checkbox']) && $_SESSION['others_checkbox'] === "YES" ? "Checked":"" ?> /><!-- TODO classname dont match with value -->
                      </div>
                    </div>
                    <div class="skin-disease-options-parent">
                      <div class="skin-disease-options">
                        <div class="skin-disease-type">
                          <div class="pulmonary-tuberculosis">
                            Pulmonary Tuberculosis
                          </div>
                          <div class="skin-disease-input">
                            <div class="skin-disease-types">
                              <div class="skin-disease">Skin Disease</div>
                              <!-- <div class="skin-disease1">Skin Disease</div> -->
                            </div>
                            <div class="skin-disease-type-input">
                              <div class="type-input">
                                <div class="specific-type">
                                  <b class="type">Type:</b>
                                  <b class="type1">Type:</b>
                                </div>
                              </div>
                              <div class="specific-type-checkboxes" style="border:none; background:none;">
                                <div
                                  class="specific-type-checkboxes-child"></div>
                                <input
                                  class="gallery-images"
                                  type="text"
                                  name="skin_disease_type"
                                  id="skin_disease_type"
                                  disabled
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width: 8rem;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="diabetes-options-parent">
                          <div class="diabetes-options">
                            <div class="diabetes-checkboxes">
                              <input
                                class="diabetes-checkbox"
                                type="checkbox"
                                id="diabetes_mellitus"
                                <?= isset($_SESSION['diabetes_mellitus']) && $_SESSION['diabetes_mellitus'] === "YES" ? "Checked":"" ?>
                                name="diabetes_mellitus" value="diabetes mellitus" />

                              <input
                                class="diabetes-checkbox1"
                                type="checkbox"
                                id="allergy"
                                <?= isset($_SESSION['allergy']) && $_SESSION['allergy'] === "YES" ? "Checked":"" ?>
                                name="allergy" value="allergy" /><!--TODO classname dont match with the value-->
                            </div>
                          </div>
                          <div class="medical-conditions">
                            <div class="conditions">
                              <div class="diabetes-mellitus">
                                Diabetes Mellitus
                              </div>
                              <div class="allergy-details">
                                <div class="allergy-type">
                                  <b class="type2">Type:</b>
                                </div>
                                <input
                                  class="gallery-images"
                                  type="text"
                                  name="diabetes_type"
                                  id="diabetes_type"
                                  disabled
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width: 8rem;">
                              </div>
                            </div>
                            <div class="conditions1">
                              <div class="allergy-parent">
                                <div class="allergy">Allergy</div>
                                <!-- <div class="allergy1">Allergy</div> -->
                              </div>
                              <div class="frame-parent29">
                                <div class="frame-wrapper4">
                                  <div class="type-parent">
                                    <b class="type3">Type:</b>
                                    <b class="type4">Type:</b>
                                  </div>
                                </div>
                                <div class="rectangle-parent6" style="border:none; background:none">
                                  <div class="frame-child11"></div>
                                  <input
                                    class="gallery-images"
                                    type="text"
                                    name="allergy_type"
                                    id="allergy_type"
                                    disabled
                                    style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width: 8rem;">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cancer-options-parent">
                          <input class="cancer-options" type="checkbox" id="cancer" name="cancer" <?= isset($_SESSION['cancer']) && $_SESSION['cancer'] === "YES" ? "Checked":"" ?> value="cancer" />

                          <div class="cancer-details">
                            <div class="cancer-type">
                              <div class="cancer">Cancer</div>
                              <div class="cancer-type-input">
                                <div class="cancer-type-box">
                                  <div class="cancer-specific-type">
                                    <b class="type5">Type:</b>
                                  </div>
                                  <input
                                    class="gallery-images"
                                    type="text"
                                    name="cancer_type"
                                    id="cancer_type"
                                    disabled
                                    style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width:8rem;">
                                </div>
                              </div>
                            </div>
                            <div class="cancer-stage">
                              <div class="cancer-stage-input">
                                <div class="cancer-stage-box">
                                  <b class="stage">Stage:</b>
                                </div>
                                <input
                                  class="gallery-images"
                                  type="text"
                                  name="cancer_stage"
                                  id="cancer_stage_type"
                                  disabled
                                  style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width:8rem;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="others-input-parent">
                        <div class="Others">Others</div>
                        <!-- <input
                        class="others-input"
                        placeholder="Others:"
                        type="text"
                        name="others_input" /> this is not necessary as you only need label-->

                        <input
                          class="gallery-images"
                          type="text"
                          name="others_input"
                          id="others_input"
                          disabled
                          style="align-self:stretch;height:3.125rem;position:relative;border-radius:var(--br-5xs);background-color:var(--color-gray-400);border:1.5px solid var(--color-darkturquoise);box-sizing:border-box;z-index:4;width:64rem;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <footer class="pagination">
              <div class="page-controls">
                <input type="button" value="Previous" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;" onclick="window.location.href='Sign-Up-Patient-Personal.php';">
                <div class="next-button">
                  <input type="reset" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  <input type="submit" value="Next" class="next-button" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
                </div>
              </div>
            </footer>
          </div>
        </section>
      </form>
    </main>
  </div>
  <script>
    function toggleInput(inputElement, checkboxElement) {
      inputElement.disabled = !checkboxElement.checked;
    }

    const elements = {
      smoker: {
        checkbox: document.getElementById("smoker"),
        input: document.getElementById("pack_per_year")
      },
      drinker: {
        checkbox: document.getElementById("drinker"),
        input: document.getElementById("bottle_per_month")
      },
      diabetes: {
        checkbox: document.getElementById("diabetes_mellitus"),
        input: document.getElementById("diabetes_type")
      },
      cancer: {
        checkbox: document.getElementById("cancer"),
        input: document.getElementById("cancer_type"),
        stageInput: document.getElementById("cancer_stage_type")
      },
      skinDisease: {
        checkbox: document.getElementById("skin_disease"),
        input: document.getElementById("skin_disease_type")
      },
      allergy: {
        checkbox: document.getElementById("allergy"),
        input: document.getElementById("allergy_type")
      },
      others: {
        checkbox: document.getElementById("others"),
        input: document.getElementById("others_input")
      }
    };

    Object.keys(elements).forEach(key => {
      const {
        checkbox,
        input,
        stageInput
      } = elements[key];
      toggleInput(input, checkbox);
      if (stageInput) toggleInput(stageInput, checkbox);
    });

    Object.keys(elements).forEach(key => {
      const {
        checkbox,
        input,
        stageInput
      } = elements[key];
      checkbox.addEventListener("change", () => {
        toggleInput(input, checkbox);
        if (stageInput) {
          stageInput.disabled = !checkbox.checked;
        }
      });
    });
  </script>
</body>

</html>
<script src="javascript/calendar-history.js"></script>