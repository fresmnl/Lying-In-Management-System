<?php include '../nav-side-bar/sidebar.php'; ?>
<?php include '../nav-side-bar/navbar.php'; ?>   

<link rel="stylesheet" href="Account-New-Request.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="health-facility-dashboard">
      <div class="main">
        <div class="main-child"></div>
        <button class="requests">
          <div class="requests-child"></div>
          <a href="../Account-New-User-Schedule/Account-New-Request.php" class="request">Request</a>
        </button>
        <div class="history-wrapper">
          <a href="../Account-New-User-Schedule/Account-New-History.php" class="history">History</a>
        </div>
      </div>
      <section class="request-details">
        <div class="request-info">
          <a class="number-of-request">Number of Request</a>
          <div class="new-user-request">
            <div class="user-request">
              <b class="new-user-schedule">New User Schedule Request</b>
              <div class="request-data">
                <div class="request-data-child"></div>
                <div class="user-data">
                  <b class="caudilla-mary-grace-container">
                    <p class="caudilla">CAUDILLA,</p>
                    <p class="mary-grace-pangan">MARY GRACE PANGAN</p>
                  </b>
                  <div class="user-i-d">
                    <div class="complete-name">Complete name</div>
                  </div>
                </div>
                <div class="user-data1">
                  <b class="p2024-01">P2024-01</b>
                  <div class="patient-id-wrapper">
                    <div class="patient-id">Patient ID</div>
                  </div>
                </div>
                <div class="schedule-details">
                  <div class="requested-schedule-info">
                    <div class="rectangle-parent">
                      <div class="frame-child"></div>
                      <b class="schedule-date">05/26/2024</b>
                    </div>
                    <div class="schedule-time">
                      <div class="requested-schedule">Requested Schedule</div>
                    </div>
                  </div>
                </div>
                <div class="actions">
                  <div class="action-buttons">
                    <button class="rectangle-group">
                      <div class="frame-item"></div>
                      <div class="decline">Decline</div>
                    </button>
                    <button class="rectangle-container">
                      <div class="frame-inner"></div>
                      <div class="approve">Approve</div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer">
              <div class="footer-content">01</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>