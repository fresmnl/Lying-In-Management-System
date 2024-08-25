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
    $_SESSION['hfacility']['username'] = $db_conn->cleanStr($_POST['username'] ?? '');
    $_SESSION['hfacility']['password'] = $db_conn->cleanStr($_POST['password'] ?? '');
    $_SESSION['hfacility']['confirm_password'] = $db_conn->cleanStr($_POST['confirm_password'] ?? '');

    $errors = []; // Array to accumulate error messages

    // Check password strength
    if (!preg_match($passPattern, $_SESSION['hfacility']['password'])) {
        $errors[] = "Weak Password";
    }

    // Check if passwords match
    if ($_SESSION['hfacility']['password'] !== $_SESSION['hfacility']['confirm_password']) {
        $errors[] = "Passwords don't match!";
    }

    // If there are errors, return them and stop further processing
    if (!empty($errors)) {
        $response['message'] = implode(' OR ', $errors); // Combine all error messages
        echo json_encode($response);
        exit();
    }

    $user_data = [
        'health_facility' => strtoupper($_SESSION['admin']['health_facility'] ?? ''),
        'city_municipality' => strtoupper( $_SESSION['admin']['city_municipality'] ?? ''),
        'telephone_number' => strtoupper($_SESSION['admin']['telephone_number'] ?? ''),
        'email' => strtoupper($_SESSION['admin']['email'] ?? ''),
        'contact_number' => strtoupper($_SESSION['admin']['contact_number'] ?? ''),
        'health_facility_id' => strtoupper($_SESSION['admin']['health_facility_id'] ?? ''),
        'account_id' => strtoupper( $_SESSION['admin']['account_id'] ?? ''),
        'username' => strtoupper($_SESSION['admin']['username'] ?? ''),
        'password' => strtoupper($_SESSION['admin']['password'] ?? ''),
        'confirm_password' => strtoupper($_SESSION['admin']['confirm_password'] ?? ''),
        'role' => 'Health Facility'
    ];

    // Check if all required session data is set and not empty
    $required_keys = [
        'health_facility',
        'city_municipality',
        'telephone_number',
        'email',
        'contact_number',
        'health_facility_id',
        'account_id',
        'username',
        'password',
        'confirm_password'
    ];

    $missing_keys = array_filter($required_keys, fn($key) => empty($user_data[$key]));

    if (empty($missing_keys)) {
        try {
            // Start a transaction
            $db_conn->startTransaction();

            // Insert data into user_account table
            $sqlAccount = "INSERT INTO `user_account`(`Account_Id`, `User_Id`, `Username`, `Email`, `Password`, `Role`) 
            VALUES (:account_id, :health_facility_id, :username, :email, :password, :role)";

            $paramsAccount = [
                ':account_id' => $user_data['account_id'],
                ':health_facility_id' => $user_data['health_facility_id'],
                ':username' => $user_data['username'],
                ':email' => $user_data['email'],
                ':password' => $user_data['password'],
                ':role' => $user_data['role']
            ];

            $db_conn->query($sqlAccount, $paramsAccount);


            // Insert data into the patient_info table
            $sqlUser = "INSERT INTO `health_facility_info`(`Health_Facility_Id`, `Account_Id`, `Health_Facility_Name`, 
                                    `City_Municipality`, `Landline_Number`, `Mobile_Number`, `Email`) 
                                    VALUES (:health_facility_id, :account_id, :health_facility, :city_municipality, :telephone_number, :email, :contact_number)";

            $paramsUser = [
                ':health_facility_id' => $user_data['health_facility_id'],
                ':account_id' => $user_data['account_id'],
                ':health_facility' => $user_data['health_facility'],
                ':city_municipality' => $user_data['city_municipality'],
                ':telephone_number' => $user_data['telephone_number'],
                ':email' => $user_data['email'],
                ':contact_number' => $user_data['contact_number']
            ];

            $db_conn->query($sqlUser, $paramsUser);
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
}
