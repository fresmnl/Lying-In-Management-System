<?php

require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");

header('Content-Type: application/json'); // Ensure the response is JSON

$response = ['status' => 'error', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = trim($_POST["role"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Validate input
    if ($role === "Select a role") {
        $response['message'] = 'Please select a role.';
    } elseif (empty($username) || empty($password)) {
        $response['message'] = 'Please enter both username/email and password.';
    } else {
        $role = $db_conn->cleanStr($role);
        $username = $db_conn->cleanStr($username);
        $password = $db_conn->cleanStr($password);

        $sql = "SELECT * FROM user_account WHERE Username = :username OR Email = :username";
        $params = ['username' => $username];
        $stmt = $db_conn->query($sql, $params);

        if ($stmt) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && $password === $user['Password']) {
                if ($role === $user['Role']) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_name'] = $user['Username'];
                    $_SESSION['role'] = $user['Role'];

                    // Successful login
                    $response['status'] = 'success';
                    $response['message'] = 'Login Successfully!';
                } else {
                    $response['message'] = 'Invalid role.';
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
