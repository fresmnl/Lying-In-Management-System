<?php include '../nav-side-bar/sidebar.php'; ?>
<?php include '../nav-side-bar/navbar.php'; ?>  

<link rel="stylesheet" href="css/Request-Status.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
  </head>
  <body>
    <div class="health-facility-dashboard">
      <div class="health-facility-dashboard-child"></div>
      <header class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="metrics">
        <a href="../Appointment-Request/Request-Find.php" class="status">Find a Clinic</a>
        </div>
        <button class="status-panel">
          <div class="status-panel-child"></div>
          <a href="../Appointment-Request/Request-Status.php" class="status">Status</a>
          </button>
        <div class="metrics1">
          <a class="schedule">Schedule</a>
        </div>
        <div class="metrics2"></div>
        <div class="metrics3">
          <a class="successful-patients">Successful Patients</a>
        </div>
        <div class="metrics4"></div>
        <div class="metrics5">
          <a class="high-risk-history">High-risk History</a>
        </div>
        <div class="metrics6"></div>
        <div class="metrics7">
          <a class="sent-record">Sent Record</a>
        </div>
      </header>
      <section class="requests">
        <div class="request-types">
          <div class="pending-request">
            <b class="pending">Pending</b>
            <div class="other-requests">
              <b class="accepted">Accepted</b>
              <div class="other-request-types">
                <b class="rejected">Rejected</b>
              </div>
              <div class="other-request-types1">
                <b class="cancelled">Cancelled</b>
              </div>
            </div>
          </div>
          <div class="map">
            <div class="map-layers">
              <div class="main-layer">
                <div class="main-layer-child"></div>
                <div class="placeholder">2024</div>
                <div class="map-pin">
                  <img class="pin-icon" alt="" src="./public/pin.svg" />
                </div>
              </div>
              <div class="additional-layers">
                <div class="layer-1-parent">
                  <img
                    class="layer-1-icon"
                    loading="lazy"
                    alt=""
                    src="./public/layer-1.svg"
                  />

                  <div class="overlay-layers">
                    <div class="sub-layer">
                      <img
                        class="layer-1-icon1"
                        loading="lazy"
                        alt=""
                        src="./public/layer-1-1.svg"
                      />
                    </div>
                    <img
                      class="layer-1-icon2"
                      loading="lazy"
                      alt=""
                      src="./public/layer-1-2.svg"
                    />

                    <img
                      class="layer-1-icon3"
                      loading="lazy"
                      alt=""
                      src="./public/layer-1-3.svg"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>