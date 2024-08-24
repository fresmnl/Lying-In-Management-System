<?php
require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");

session_start();

header('Content-Type: application/json'); // Ensure the response is JSON

$response = ['status' => 'error', 'message' => ''];

$message = "";

// $passPattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
$passPattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['agreement'] = $db_conn->cleanStr($_POST['agreement'] ?? '');

    $_SESSION['password'] = $db_conn->cleanStr($_POST['password'] ?? '');
    $_SESSION['confirm_password'] = $db_conn->cleanStr($_POST['confirm_password'] ?? '');

    $errors = []; // Array to accumulate error messages

    // Check password strength
    if (!preg_match($passPattern, $_SESSION['password'])) {
        $errors[] = "Weak Password";
    }

    // Check if passwords match
    if ($_SESSION['password'] !== $_SESSION['confirm_password']) {
        $errors[] = "Passwords don't match!";
    }

    // If there are errors, return them and stop further processing
    if (!empty($errors)) {
        $response['message'] = implode(' OR ', $errors); // Combine all error messages
        echo json_encode($response);
        exit();
    }

    $user_data = [
        'health_facility' => strtoupper($_SESSION['health_facility'] ?? ''),
        'middle_name' => strtoupper($_SESSION['middle_name'] ?? 'N/A'),
        'last_name' => strtoupper($_SESSION['last_name'] ?? ''),
        'first_name' => strtoupper($_SESSION['first_name'] ?? ''),
        'sex' => strtoupper($_SESSION['sex'] ?? ''),
        'civil_status' => strtoupper($_SESSION['civil_status'] ?? ''),
        'birth_date' => strtoupper($_SESSION['birth_date'] ?? ''),
        'age' => strtoupper($_SESSION['age'] ?? ''),
        'email_address' => strtoupper($_SESSION['email_address'] ?? ''),
        'contact_number' => strtoupper($_SESSION['contact_number'] ?? ''),
        'street_address' => strtoupper($_SESSION['street_address'] ?? ''),
        'barangay_address' => strtoupper($_SESSION['barangay_address'] ?? ''),
        'municipality_address' => strtoupper($_SESSION['municipality_address'] ?? ''),
        'province_address' => strtoupper($_SESSION['province_address'] ?? ''),
        'educational_attainment' => strtoupper($_SESSION['educational_attainment'] ?? ''),
        'employment_status' => strtoupper($_SESSION['employment_status'] ?? ''),
        'occupation' => strtoupper($_SESSION['occupation'] ?? ''),
        'dswd_nhts' => strtoupper($_SESSION['dswd_nhts'] ?? ''),
        '4ps_member' => strtoupper($_SESSION['4ps_member'] ?? ''),
        'identification_type' => strtoupper($_SESSION['identification_type'] ?? ''),
        'identification_card' => $_SESSION['identification_card'] ?? '',
        'username' => $_SESSION['username'] ?? '',
        'patient_id' => $_SESSION['patient_id'] ?? '',
        'account_id' => $_SESSION['account_id'] ?? '',
        'fullname' => $_SESSION['fullname'] ?? '',
        'prev_operation' => strtoupper($_SESSION['prev_operation'] ?? 'N/A'),
        'operation_date' => strtoupper($_SESSION['operation_date'] ?? 'N/A'),
        'smoker' => strtoupper($_SESSION['smoker'] ?? 'N/A'),
        'drinker' => strtoupper($_SESSION['drinker'] ?? 'N/A'),
        'pack_per_year' => strtoupper($_SESSION['pack_per_year'] ?? 'N/A'),
        'bottle_per_month' => strtoupper($_SESSION['bottle_per_month'] ?? 'N/A'),
        'drug_user' => strtoupper($_SESSION['drug_user'] ?? 'N/A'),
        'hypertension' => strtoupper($_SESSION['hypertension'] ?? 'N/A'),
        'asthma' => strtoupper($_SESSION['asthma'] ?? 'N/A'),
        'blood_disorder' => strtoupper($_SESSION['blood_disorder'] ?? 'N/A'),
        'heart_disorder' => strtoupper($_SESSION['heart_disorder'] ?? 'N/A'),
        'liver_disorder' => strtoupper($_SESSION['liver_disorder'] ?? 'N/A'),
        'kidney_disorder' => strtoupper($_SESSION['kidney_disorder'] ?? 'N/A'),
        'pulmonary_tuberculosis' => strtoupper($_SESSION['pulmonary_tuberculosis'] ?? 'N/A'),
        'skin_disease' => strtoupper($_SESSION['skin_disease'] ?? 'N/A'),
        'others_checkbox' => strtoupper($_SESSION['others_checkbox'] ?? 'N/A'),
        'skin_disease_type' => strtoupper($_SESSION['skin_disease_type'] ?? 'N/A'),
        'diabetes_mellitus' => strtoupper($_SESSION['diabetes_mellitus'] ?? 'N/A'),
        'diabetes_type' => strtoupper($_SESSION['diabetes_type'] ?? 'N/A'),
        'allergy' => strtoupper($_SESSION['allergy'] ?? 'N/A'),
        'allergy_type' => strtoupper($_SESSION['allergy_type'] ?? 'N/A'),
        'cancer' => strtoupper($_SESSION['cancer'] ?? 'N/A'),
        'cancer_type' => strtoupper($_SESSION['cancer_type'] ?? 'N/A'),
        'cancer_stage' => strtoupper($_SESSION['cancer_stage'] ?? 'N/A'),
        'others_input' => strtoupper($_SESSION['others_input'] ?? 'N/A'),
        'password' => $_SESSION['password'] ?? '',
        'confirm_password' => $_SESSION['confirm_password'] ?? '',
        'agreement' => $_SESSION['agreement'] ?? '',
        'role' => 'Patient'
    ];

    // Check if all required session data is set and not empty
    $required_keys = [
        'health_facility',
        'middle_name',
        'last_name',
        'first_name',
        'sex',
        'civil_status',
        'birth_date',
        'age',
        'email_address',
        'contact_number',
        'street_address',
        'barangay_address',
        'municipality_address',
        'province_address',
        'educational_attainment',
        'employment_status',
        'occupation',
        'dswd_nhts',
        '4ps_member',
        'identification_type',
        'identification_card',
        'username',
        'patient_id',
        'fullname'
    ];

    $missing_keys = array_filter($required_keys, fn($key) => empty($user_data[$key]));

    if (empty($missing_keys)) {
        try {
            // Start a transaction
            $db_conn->startTransaction();

            // Insert data into the patient_info table
            $sqlUser = "INSERT INTO `patient_info` (
                `Patient_Id`, `Health_Facility`, `Fname`, `Mname`, `Lname`, `fullname`, `Birthday`, `Age`, 
                `Street_Address`, `Barangay_Address`, `Municipality_Address`, `Province_Address`, `Contact_No`, `email`, `civil_status`, 
                `sex`, `Educational_Attainment`, `Employment_Status`, `Occupation`, `DSWD_NHTS`, `4PS_MEMBER`, `Identification`, `Id_Type`
            ) VALUES (
                :patient_id, :health_facility, :first_name, :middle_name, :last_name, :fullname, :birth_date, :age, :street_address, 
                :barangay_address, :municipality_address, :province_address, :contact_number, :email_address, :civil_status, 
                :sex, :educational_attainment, :employment_status, :occupation, :dswd_nhts, :4ps_member, :identification_card, 
                :identification_type
            )";

            $paramsUser = [
                ':patient_id' => $user_data['patient_id'],
                ':health_facility' => $user_data['health_facility'],
                ':first_name' => $user_data['first_name'],
                ':middle_name' => $user_data['middle_name'],
                ':last_name' => $user_data['last_name'],
                ':fullname' => $user_data['fullname'],
                ':birth_date' => $user_data['birth_date'],
                ':age' => $user_data['age'],
                ':street_address' => $user_data['street_address'],
                ':barangay_address' => $user_data['barangay_address'],
                ':municipality_address' => $user_data['municipality_address'],
                ':province_address' => $user_data['province_address'],
                ':contact_number' => $user_data['contact_number'],
                ':email_address' => $user_data['email_address'],
                ':civil_status' => $user_data['civil_status'],
                ':sex' => $user_data['sex'],
                ':educational_attainment' => $user_data['educational_attainment'],
                ':employment_status' => $user_data['employment_status'],
                ':occupation' => $user_data['occupation'],
                ':dswd_nhts' => $user_data['dswd_nhts'],
                ':4ps_member' => $user_data['4ps_member'],
                ':identification_card' => $user_data['identification_card'],
                ':identification_type' => $user_data['identification_type']
            ];

            $db_conn->query($sqlUser, $paramsUser);

            // Insert data into patient_history table
            $sqlProfile = "INSERT INTO `patient_history` (
                `Patient_Id`, `Previous_Operation`, `Operation_Date`, `Smoker`, `Packs_Per_Year`, `Drinker`, `Bottle_Per_Month`, 
                `Hypertension`, `Asthma`, `Blood_Disorder`, `Heart_Disorder`, `Liver_Disorder`, `Kidney_Disorder`, 
                `Pulmonary_Tuberculosis`, `Diabetes_Mellitus`, `Diabetes_Mellitus_Type`, `Cancer`, `Cancer_Type`, `Stage`, 
                `Skin_Disease`, `Skin_Disease_Type`, `Allergy`, `Allergy_Type`, `Others`, `Others_Type`
            ) VALUES (
                :patient_id, :prev_operation, :operation_date, :smoker, :pack_per_year, :drinker, :bottle_per_month, 
                :hypertension, :asthma, :blood_disorder, :heart_disorder, :liver_disorder, :kidney_disorder, 
                :pulmonary_tuberculosis, :diabetes_mellitus, :diabetes_type, :cancer, :cancer_type, :cancer_stage, 
                :skin_disease, :skin_disease_type, :allergy, :allergy_type, :others_checkbox, :others_input
            )";

            $paramsProfile = [
                ':patient_id' => $user_data['patient_id'],
                ':prev_operation' => $user_data['prev_operation'],
                ':operation_date' => $user_data['operation_date'],
                ':smoker' => $user_data['smoker'],
                ':pack_per_year' => $user_data['pack_per_year'],
                ':drinker' => $user_data['drinker'],
                ':bottle_per_month' => $user_data['bottle_per_month'],
                ':hypertension' => $user_data['hypertension'],
                ':asthma' => $user_data['asthma'],
                ':blood_disorder' => $user_data['blood_disorder'],
                ':heart_disorder' => $user_data['heart_disorder'],
                ':liver_disorder' => $user_data['liver_disorder'],
                ':kidney_disorder' => $user_data['kidney_disorder'],
                ':pulmonary_tuberculosis' => $user_data['pulmonary_tuberculosis'],
                ':diabetes_mellitus' => $user_data['diabetes_mellitus'],
                ':diabetes_type' => $user_data['diabetes_type'],
                ':cancer' => $user_data['cancer'],
                ':cancer_type' => $user_data['cancer_type'],
                ':cancer_stage' => $user_data['cancer_stage'],
                ':skin_disease' => $user_data['skin_disease'],
                ':skin_disease_type' => $user_data['skin_disease_type'],
                ':allergy' => $user_data['allergy'],
                ':allergy_type' => $user_data['allergy_type'],
                ':others_checkbox' => $user_data['others_checkbox'],
                ':others_input' => $user_data['others_input']
            ];

            $db_conn->query($sqlProfile, $paramsProfile);

            // Insert data into user_account table
            $sqlAccount = "INSERT INTO `user_account`(`Account_Id`, `Patient_Id`, `Username`, `Email`, `Password`, `Role`) VALUES (:account_id, :patient_id, :username, :email, :password, :role)";

            $paramsAccount = [
                ':account_id' => $user_data['account_id'],
                ':patient_id' => $user_data['patient_id'],
                ':username' => $user_data['username'],
                ':email' => $user_data['email_address'],
                ':password' => $user_data['password'],
                ':role' => $user_data['role']
            ];

            $db_conn->query($sqlAccount, $paramsAccount);

            // Commit the transaction
            $db_conn->proceed();

            $response['status'] = 'success';
            $response['message'] = 'Registered Successfully!';
            echo json_encode($response);

            // header("Location: Login.php");
            session_unset();
            session_destroy();
            exit();
        } catch (Exception $e) {
            // Roll back the transaction in case of an error
            $db_conn->terminateTransaction();
            $response['message'] = "Error: " . $e->getMessage();
            echo json_encode($response);
            exit();
        }
    } else {
        $response['message'] = "Missing data: " . implode(', ', $missing_keys);
        echo json_encode($response);
        exit();
    }
    // header('Location: Sign-Up-Patient-Process.php');
    // $user_data = [
    //     'patient_id' => strtoupper($db_conn->generatePatientId($db_conn->NumberOfPatient())),
    //     'health_facility' => strtoupper($db_conn->cleanStr($_POST['health_facility'] ?? '')),
    //     'first_name' => strtoupper($db_conn->cleanStr($_POST['first_name'] ?? '')),
    //     'middle_name' => strtoupper($db_conn->cleanStr($_POST['middle_name'] ?? '')),
    //     'last_name' => strtoupper($db_conn->cleanStr($_POST['last_name'] ?? '')),
    //     'sex' => strtoupper($db_conn->cleanStr($_POST['sex'] ?? '')),
    //     'civil_status' => strtoupper($db_conn->cleanStr($_POST['civil_status'] ?? '')),
    //     'birth_date' => strtoupper($db_conn->cleanStr($_POST['birth_date'] ?? '')),
    //     'email_address' => strtoupper($db_conn->cleanStr($_POST['email_address'] ?? '')),
    //     'contact_number' => strtoupper($db_conn->cleanStr($_POST['contact_number'] ?? '')),
    //     'street_address' => strtoupper($db_conn->cleanStr($_POST['street_address'] ?? '')),
    //     'barangay_address' => strtoupper($db_conn->cleanStr($_POST['barangay_address'] ?? '')),
    //     'municipality_address' => strtoupper($db_conn->cleanStr($_POST['municipality_address'] ?? '')),
    //     'province_address' => strtoupper($db_conn->cleanStr($_POST['province_address'] ?? '')),
    //     'educational_attainment' => strtoupper($db_conn->cleanStr($_POST['educational_attainment'] ?? '')),
    //     'employment_status' => strtoupper($db_conn->cleanStr($_POST['employment_status'] ?? '')),
    //     'occupation' => strtoupper($db_conn->cleanStr($_POST['occupation'] ?? '')),
    //     'dswd_nhts' => strtoupper($db_conn->cleanStr($_POST['dswd_nhts'] ?? '')),
    //     '4ps_member' => strtoupper($db_conn->cleanStr($_POST['4ps_member'] ?? '')),
    //     'identification_type' => strtoupper($db_conn->cleanStr($_POST['identification_type'] ?? '')),
    //     'identification_card' => $db_conn->cleanStr($_POST['identification_card'] ?? '')
    // ];

    // $fullname = strtoupper($db_conn->cleanStr($_POST['first_name'] ?? ''));
    // if (isset($_POST['middle_name']) && $_POST['middle_name'] !== "-") {
    //     $middle_name = " " . strtoupper(substr($db_conn->cleanStr($_POST['middle_name'] ?? ''), 0, 1)) . ". ";
    //     $fullname .= $middle_name . strtoupper($db_conn->cleanStr($_POST['last_name'] ?? ''));
    // } else {
    //     $fullname .= " " . strtoupper($db_conn->cleanStr($_POST['last_name'] ?? ''));
    // }

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
    //                     `Patient_Id`, `Health_Facility`, `Fname`, `Mname`, `Lname`, `fullname`, `Birthday`, 
    //                     `Street_Address`, `Barangay_Address`, `Municipality_Address`, `Province_Address`, `Contact_No`, `email`, `civil_status`, 
    //                     `sex`, `Educational_Attainment`, `Employment_Status`, `Occupation`, `DSWD_NHTS`, `4PS_MEMBER`, `Identification`, `Id_Type`
    //                 ) 
    //                 VALUES (
    //                     :patient_id, :health_facility, :first_name, :middle_name, :last_name, :fullname, :birth_date, :street_address, 
    //                     :barangay_address, :municipality_address, :province_address, :contact_number, :email_address, :civil_status, 
    //                     :sex, :educational_attainment, :employment_status, :occupation, :dswd_nhts, :4ps_member, :identification_card, 
    //                     :identification_type
    //                 )";

    // $stmt = $db_conn->query($sql, array_merge($user_data, ['fullname' => $fullname]));
}
