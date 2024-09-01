<?php

session_start();

if ($_SESSION['admin']['loggedin'] !== true && !isset($_SESSION['admin']['username'])) {
  header("Location: ../Login/Login.php");
}
?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>

<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />

<style>
  body {
    margin: 0;
    line-height: normal;
  }
</style>
</head>

<body>
  <div
    style="
        width: 100%;
        position: relative;
        background-color: #fdfdfd;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-start;
        padding: 4.25rem 0rem 54rem;
        box-sizing: border-box;
        line-height: normal;
        letter-spacing: normal;
        text-align: left;
        font-size: 1.25rem;
        color: #004268;
        font-family: Lato;
        left: 1rem;
      ">
    <div
      style="
          flex: 1;
          box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
          background-color: rgba(0, 200, 210, 0.4);
          display: flex;
          flex-direction: row;
          align-items: flex-start;
          justify-content: flex-start;
          padding: 0rem 17.562rem;
          box-sizing: border-box;
          gap: 1.937rem;
          max-width: 100%;
        ">
      <div
        style="
            align-self: stretch;
            width: 94.5rem;
            position: relative;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            background-color: rgba(0, 200, 210, 0.4);
            display: none;
            max-width: 100%;
          "></div>
      <div
        style="
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 0.812rem 0rem 0rem;
          ">
        <a href="Account-Verification.php"
          style="
              text-decoration: none;
              position: relative;
              font-weight: 600;
              color: inherit;
              display: inline-block;
              min-width: 6.375rem;
              z-index: 1;
            ">Verification</a>
      </div>
      <button
        style="
            cursor: pointer;
            border: none;
            padding: 0.812rem 1.125rem;
            background-color: #00acce;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            z-index: 1;
          ">
        <div
          style="
              height: 3.125rem;
              width: 6.438rem;
              position: relative;
              box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
              background-color: #00acce;
              display: none;
            "></div>
        <a href="Account-History.php"
          style="
              text-decoration: none;
              position: relative;
              font-size: 1.25rem;
              font-weight: 600;
              font-family: Lato;
              color: #fdfdfd;
              text-align: left;
              display: inline-block;
              min-width: 4.125rem;
              z-index: 2;
            ">History</a>
      </button>
    </div>
  </div>
</body>