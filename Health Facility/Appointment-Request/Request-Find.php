<?php include '../nav-side-bar/sidebar.php'; ?>
<?php include '../nav-side-bar/navbar.php'; ?>  

<link rel="stylesheet" href="css/Request-Find.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="health-facility-dashboard">
      <header class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="search-status">
          <button class="clinic-search">
            <div class="clinic-search-child"></div>
            <a href="../Appointment-Request/Request-Find.php" class="find-a-clinic">Find a Clinic</a>
          </button>
          <div class="status-wrapper">
            <a href="../Appointment-Request/Request-Status.php" class="status">Status</a>
          </div>
          <div class="divider"></div>
        </div>
        <div class="schedule-wrapper">
          <a class="schedule">Schedule</a>
        </div>
        <div class="frame-item"></div>
        <div class="successful-patients-wrapper">
          <a class="successful-patients">Successful Patients</a>
        </div>
        <div class="frame-inner"></div>
        <div class="high-risk-history-wrapper">
          <a class="high-risk-history">High-risk History</a>
        </div>
        <div class="line-div"></div>
        <div class="sent-record-wrapper">
          <a class="sent-record">Sent Record</a>
        </div>
      </header>
    </div>
  </body>