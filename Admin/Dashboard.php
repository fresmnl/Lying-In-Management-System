<?php include 'nav-side-bar/sidebar.php'; ?>
<?php include 'nav-side-bar/navbar.php'; ?>
<link rel="stylesheet" href="css/Dashboard.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"/>
    
<title>Admin-Dashboard</title>
<div class="admin-dashboard">
      <section class="layout">
        <div class="container">
          <div class="metrics-container">
            <div class="metrics-labels">
              <div class="metrics-labels-child"></div>
              <div class="metrics-sub-labels">
                <div class="metrics-details">
                  <div class="metrics-details-child"></div>
                  <img
                    class="layer-1-icon"
                    loading="lazy"
                    alt=""
                    src="images/total-health-facilities.png"
                    
                  />
                </div>
              </div>
              <div class="account-labels">
                <b class="total-health-facilities">Total Health Facilities</b>
                <div class="where-your-money">25</div>
              </div>
            </div>
            <div class="metrics-labels1">
              <div class="metrics-labels-item"></div>
              <div class="metrics-labels-inner">
                <div class="rectangle-parent">
                  <div class="frame-child"></div>
                  <img
                    class="frame-icon"
                    loading="lazy"
                    alt=""
                    src="images/new-accounts.png"
                  />
                </div>
              </div>
              <div class="new-accounts-parent">
                <b class="new-accounts">New Accounts</b>
                <div class="div">5</div>
              </div>
            </div>
            <div class="metrics-labels2">
              <div class="rectangle-div"></div>
              <div class="frame-div">
                <div class="rectangle-group">
                  <div class="frame-item"></div>
                  <img
                    class="frame-icon1"
                    loading="lazy"
                    alt=""
                    src="images/authorized-accounts.png"
                  />
                </div>
              </div>
              <div class="authorized-accounts-parent">
                <b class="authorized-accounts">Authorized Accounts</b>
                <div class="div1">20</div>
              </div>
            </div>
          </div>
          <div class="ownership-types-parent">
            <div class="ownership-types">
              <div class="ownership-types-child"></div>
              <div class="institutional-ownership">
                <b class="ownership">Ownership</b>
              </div>
              <div class="ownership-types-inner">
                <img
                  class="frame-inner"
                  loading="lazy"
                  alt=""
                  src="images/ownership.png"
                />
              </div>
              <div class="government-type-wrapper">
                <div class="government-type">
                  <div class="government-marker">
                    <div class="government-label">
                      <div class="government-indicator"></div>
                    </div>
                    <div class="government-name">
                      <div class="government">Government</div>
                      <b class="empty-cell">80%</b>
                    </div>
                  </div>
                  <div class="private-type-parent">
                    <div class="private-type">
                      <div class="private-marker"></div>
                    </div>
                    <div class="private-name">
                      <div class="private">Private</div>
                      <b class="empty-cell1">20%</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rectangle-container">
              <div class="frame-child1"></div>
              <div class="institutional-character-parent">
                <b class="institutional-character">Institutional Character</b>
                <div class="frame-wrapper">
                  <img
                    class="group-icon"
                    loading="lazy"
                    alt=""
                    src="images/institutional-character.png"
                  />
                </div>
              </div>
              <div class="frame-container">
                <div class="frame-parent">
                  <div class="frame-group">
                    <div class="free-standing-marker-wrapper">
                      <div class="free-standing-marker"></div>
                    </div>
                    <div class="free-standing-label">
                      <div class="free-standing">Free-Standing</div>
                      <b class="empty-cell2">20%</b>
                    </div>
                  </div>
                  <div class="institution-based-type-parent">
                    <div class="institution-based-type">
                      <div class="institution-based-marker"></div>
                    </div>
                    <div class="institution-based-label">
                      <div class="institution-based">Institution-Based</div>
                      <b class="empty-cell3">80%</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="calendar">
            <div class="calendar-layout">
            <div class="calendar-header">
                <div class="month-navigation">
                    <div class="month-selector">
                        <img id="prev-month" src="images/prev-btn.png">
                        <div class="current-month">
                            <a id="month-year"></a>
                        </div>
                        <img id="next-month" src="images/next-btn.png">
                    </div>
                </div>
                <div class="weekdays">
                    <b>S M T W T F S</b>
                </div>
            </div>
            <div id="calendar-days" class="month-year"></div>
        </div>
          <div class="facility-types">
            <div class="facility-types-child"></div>
            <div class="facility-type">
              <b class="lying-in-clinic">Lying-in Clinic</b>
              <div class="clinic-options">
                <div class="lyingin-availability">
                  <div class="availability-markers">
                    <div class="availability-indicators"></div>
                    <div class="availability-markers-child"></div>
                  </div>
                </div>
                <div class="availability-labels">
                  <div class="with-lyingin-label">
                    <div class="with-lying-in">With Lying-in</div>
                    <b class="with-count">66%</b>
                  </div>
                  <div class="without-lyingin-label">
                    <div class="without-lying-in">Without Lying-in</div>
                    <b class="without-count">34%</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="facility-types-inner">
              <img
                class="frame-child2"
                loading="lazy"
                alt=""
                src="images/lying-in-clinic.png"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="facility-table">
        <div class="facility-table-child"></div>
        <div class="table-header">
          <div class="table-header-child"></div>
          <div class="header-labels">
            <b class="no">No.</b>
            <b class="name-of-health">Name of Health Facility</b>
          </div>
          <div class="patient-metrics">
            <b class="previous-patients">Previous Patients</b>
            <b class="ongoing-patients">Ongoing Patients</b>
            <b class="account">Account</b>
            <b class="successful-childbirth">Successful Childbirth</b>
          </div>
        </div>
        <div class="table-header1">
          <div class="frame-parent1">
            <div class="number-label-parent">
              <div class="number-label">1</div>
              <div class="facility-name">
                <div class="reyes-hernandez-maternity">
                  Reyes-Hernandez Maternity & Lying-in Clinic
                </div>
              </div>
              <div class="empty-header">50</div>
            </div>
            <div class="div5">50</div>
            <div class="ongoing-patients-header">
              <div class="empty-header1">50</div>
              <div class="empty-header2">12</div>
            </div>
          </div>
        </div>
        <div class="separator"></div>
        <div class="table-header2">
          <div class="frame-parent2">
            <div class="parent">
              <div class="div6">2</div>
              <div class="hermosa-lying-in-and">
                Hermosa Lying-in and Health Center
              </div>
            </div>
            <div class="empty-header-wrapper">
              <div class="empty-header3">32</div>
            </div>
            <div class="frame">
              <div class="div7">32</div>
            </div>
            <div class="account-header">
              <div class="empty-header4">32</div>
              <div class="empty-header5">41</div>
            </div>
          </div>
        </div>
        <footer class="table-header3">
          <div class="table-header-item"></div>
          <div class="see-more">See More...</div>
        </footer>
      </section>
    </div>

    <script>
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        let currentDate = new Date();

        function renderCalendar(date) {
            const monthYear = document.getElementById("month-year");
            const calendarDays = document.getElementById("calendar-days");
            const year = date.getFullYear();
            const month = date.getMonth();

            // Update month-year text
            monthYear.textContent = `${months[month]} ${year}`;

            // Get the first day of the month
            const firstDay = new Date(year, month, 1).getDay();
            // Get the last date of the month
            const lastDate = new Date(year, month + 1, 0).getDate();

            // Clear existing days
            calendarDays.innerHTML = "";

            // Add empty cells for days before the first day
            for (let i = 0; i < firstDay; i++) {
                const cell = document.createElement('div');
                calendarDays.appendChild(cell);
            }

            // Add cells for each day of the month
            for (let day = 1; day <= lastDate; day++) {
                const cell = document.createElement('div');
                cell.textContent = day;
                if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                    cell.classList.add('highlight');
                }
                calendarDays.appendChild(cell);
            }

            // Adjust the number of cells per row to fit 7 days
            calendarDays.style.gridTemplateColumns = `repeat(7, 1fr)`;
        }

        function updateMonth(offset) {
            currentDate.setMonth(currentDate.getMonth() + offset);
            renderCalendar(currentDate);
        }

        document.getElementById("prev-month").addEventListener("click", () => updateMonth(-1));
        document.getElementById("next-month").addEventListener("click", () => updateMonth(1));

        // Initial render
        renderCalendar(currentDate);

        
    </script>