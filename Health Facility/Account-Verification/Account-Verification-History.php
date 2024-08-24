<?php include '../nav-side-bar/sidebar.php'; ?>
<?php include '../nav-side-bar/navbar.php'; ?>   

<link rel="stylesheet" href="Account-Verification-History.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="health-facility-dashboard">
      <header class="content">
        <div class="content-child"></div>
        <div class="verification-wrapper">
           <a href="Account-Verification.php" class="verification">Verification</a>
        </div>
        <button class="history-tab">
          <div class="history-tab-child"></div>
              <a href="Account-Verification-History.php" class="history">History</a>
        </button>
      </header>
      <div class="patient-info-wrapper">
        <div class="patient-info">
          <div class="patient-info-child"></div>
          <div class="date-value">2024</div>
          <div class="verified-symbol-wrapper">
            <img
              class="verified-symbol-icon"
              alt=""
              src="./public/verified-symbol.svg"
            />
          </div>
        </div>
      </div>
    </div>
  </body>