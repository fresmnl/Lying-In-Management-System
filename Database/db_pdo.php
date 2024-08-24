<?php
// db.php

// Database configuration
$host = 'localhost';      // Database host
$dbname = 'db_lyingin'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optionally, set other PDO attributes as needed
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Optional: enable PDO emulation mode for prepared statements
    // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    echo "Database connection successful.";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Database connection failed: " . $e->getMessage();
    die();
}

