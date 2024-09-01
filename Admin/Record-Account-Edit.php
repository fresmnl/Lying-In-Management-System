<?php

session_start();

if ($_SESSION['admin']['loggedin'] !== true && !isset($_SESSION['admin']['username'])) {
  header("Location: ../Login/Login.php");
}
?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'views/partials/navbar.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?> 