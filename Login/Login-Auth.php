<?php

session_start();

require '../Database/db-config.php';

// Initialize database connection
$db_conn = new Database("localhost", "root", "", "db_lyingin");

header('Content-Type: application/json'); // Ensure the response is JSON

$response = ['status' => 'error', 'message' => '', 'role' => ''];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $db_conn->cleanStr($_POST["role"]);
    $username = $db_conn->cleanStr($_POST["username"]);
    $password = $db_conn->cleanStr($_POST["password"]);

    // Validate input
    if ($role === "Select a role") {
        $response['message'] = 'Please select a role.';
    } elseif (empty($username) || empty($password)) {
        $response['message'] = 'Please enter both username/email and password.';
    } else {

        $sql = "SELECT * FROM user_account WHERE Username = :username OR Email = :username";
        $params = ['username' => $username];
        $stmt = $db_conn->query($sql, $params);

        if ($stmt) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && $password === $user['Password']) {
                if ($role === "Admin") {

                    $_SESSION['admin']['loggedin'] = true;
                    $_SESSION['admin']['username'] = $user['Username'];
                    $_SESSION['admin']['role'] = $user['Role'];
                    $response['status'] = 'success';
                    $response['message'] = 'Login Successfully!';
                    $response['role'] = $role;
 
                } elseif ($role === "Patient") {

                    $_SESSION['admin']['loggedin'] = true;
                    $_SESSION['admin']['username'] = $user['Username'];
                    $_SESSION['admin']['role'] = $user['Role'];
                    $response['status'] = 'success';
                    $response['message'] = 'Login Successfully!';
                    $response['role'] = $role;
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
