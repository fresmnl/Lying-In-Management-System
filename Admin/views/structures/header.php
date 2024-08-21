<?php
// ob_clean();
session_start();

$userID = $_SESSION['userID'];
$username = $_SESSION['username'];
$facility = $_SESSION['facility'];
if (isset($_SESSION['RHUprovince'])) {
  $RHUprovince = $_SESSION['RHUprovince'];
}
if (!isset($_SESSION["username"])) {
  header('Location: Admin-Login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHO Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../img/webpage-logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/Admin-Dashboard.css">
  <link rel="stylesheet" href="css/Admin-Registration.css">
  <link rel="stylesheet" href="../src/output.css">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

</head>

<body>