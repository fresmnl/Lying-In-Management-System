<?php

require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");

session_start();

header('Content-Type: application/json'); // Ensure the response is JSON

$response = ['status' => 'error', 'message' => '', 'role' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $role = $db_conn->cleanStr($_POST["role"]);
    $username = $db_conn->cleanStr($_POST["username"]);
    $password = $db_conn->cleanStr($_POST["password"]);

    // Validate input
    if (empty($username) || empty($password)) {
        $response['message'] = 'Please enter both username/email and password.';
    } else {
        // Query to fetch user based on username or email
        $sql = "SELECT * FROM user_account WHERE Username = :username OR Email = :username";
        $params = ['username' => $username];
        $stmt = $db_conn->query($sql, $params);

        if ($stmt) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && $password === $user['Password'] && $user['Status'] !== DATABASE::NON_VERIFIED) {
                // Check the role and set session accordingly
                if ($user['Role'] === DATABASE::ADMIN) {
                    $_SESSION['admin']['loggedin'] = true;
                    $_SESSION['admin']['username'] = $user['Username'];
                    $_SESSION['admin']['role'] = $user['Role'];
                    $response['status'] = 'success';
                    $response['message'] = 'Admin login successfully!';
                    $response['role'] = DATABASE::ADMIN;
                } else {
                    // General case for Patient or Health Facility
                    $_SESSION['user']['loggedin'] = true;
                    $_SESSION['user']['username'] = $user['Username'];
                    $_SESSION['user']['role'] = $user['Role'];
                    $response['status'] = 'success';
                    $response['message'] = 'Login successfully!';
                    $response['role'] = $user['Role']; // Reflect the actual role of the user
                }
            } else {
                $response['message'] = 'Invalid username/email or password.';
            }
        } else {
            $response['message'] = 'Database query failed.';
        }
    }
}

// Return the JSON response
echo json_encode($response);
exit();
