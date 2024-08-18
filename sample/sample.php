<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Example</title>
    <style>
        /* Basic styles for the rectangle parent */
        .rectangle-parent1 {
            display: flex;
            align-items: center;
            background-color: transparent; /* Set background to transparent */
            position: relative;
        }

        /* Style for the input field */
        .frame-input {
            border: 1px solid #ccc;
            background-color: transparent; /* Set background to transparent */
            padding: 5px;
            flex: 1; /* Allows input field to take up available space */
            font-size: 16px;
            outline: none; /* Remove default outline */
        }

        /* Style for the icon */
        .frame-icon {
            cursor: pointer;
            margin-left: 10px; /* Adjust space between input and icon if needed */
        }

        /* Calendar popup styles */
        .calendar-popup {
            display: none; /* Hidden by default */
            position: absolute;
            top: 100%; /* Below the input */
            left: 0;
            background: white;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Ensure it appears above other content */
            width: 300px; /* Adjust width as needed */
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .calendar-header select {
            padding: 5px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-day, .calendar-day-name {
            text-align: center;
            padding: 5px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .calendar-day-name {
            font-weight: bold;
        }

        .calendar-day.selected {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="rectangle-parent1">
        <div class="frame-child5"></div>
        <input
            class="frame-input"
            id="dateInput"
            placeholder="mm/dd/yyyy"
            type="text"
        />
        <img
            class="frame-icon"
            alt="Calendar"
            src="images/calendar.svg"
            id="calendarIcon"
        />
        <div class="calendar-popup" id="calendarPopup">
            <div class="calendar-header">
                <select id="monthSelect"></select>
                <select id="yearSelect"></select>
            </div>
            <div class="calendar-days" id="calendarDays">
                <!-- Days of the week will be inserted here -->
            </div>
        </div>
    </div>

    <script>
        const calendarPopup = document.getElementById("calendarPopup");
        const calendarIcon = document.getElementById("calendarIcon");
        const currentMonthElement = document.getElementById("monthSelect");
        const yearSelect = document.getElementById("yearSelect");
        const calendarDaysElement = document.getElementById("calendarDays");
        const dateInput = document.getElementById("dateInput");

        let currentDate = new Date();

        function populateMonthYearSelectors() {
            // Populate month dropdown
            const months = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            months.forEach((month, index) => {
                const option = document.createElement("option");
                option.value = index;
                option.textContent = month;
                currentMonthElement.appendChild(option);
            });
            currentMonthElement.value = currentDate.getMonth();

            // Populate year dropdown
            const startYear = 1900;
            const endYear = 2100;
            for (let year = startYear; year <= endYear; year++) {
                const option = document.createElement("option");
                option.value = year;
                option.textContent = year;
                yearSelect.appendChild(option);
            }
            yearSelect.value = currentDate.getFullYear();
        }

        function generateCalendar(date) {
            const month = date.getMonth();
            const year = date.getFullYear();

            // Clear existing days
            calendarDaysElement.innerHTML = "";

            // Set month and year in dropdowns
            currentMonthElement.value = month;
            yearSelect.value = year;

            // Create day names
            const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            dayNames.forEach(dayName => {
                const dayNameElement = document.createElement("div");
                dayNameElement.classList.add("calendar-day-name");
                dayNameElement.textContent = dayName;
                calendarDaysElement.appendChild(dayNameElement);
            });

            // Get the first day of the month and the number of days in the month
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            // Add empty cells for days before the first day of the month
            for (let i = 0; i < firstDay; i++) {
                const emptyCell = document.createElement("div");
                calendarDaysElement.appendChild(emptyCell);
            }

            // Add days of the month
            for (let day = 1; day <= daysInMonth; day++) {
                const dayCell = document.createElement("div");
                dayCell.classList.add("calendar-day");
                dayCell.textContent = day;
                dayCell.dataset.date = `${year}-${month + 1}-${day}`;
                dayCell.addEventListener("click", handleDateClick);
                calendarDaysElement.appendChild(dayCell);
            }
        }

        function showCalendar() {
            calendarPopup.style.display = calendarPopup.style.display === "block" ? "none" : "block";
        }

        function handleDateClick(event) {
            const selectedDate = new Date(event.target.dataset.date);
            const formattedDate = `${String(selectedDate.getMonth() + 1).padStart(2, '0')}/${String(selectedDate.getDate()).padStart(2, '0')}/${selectedDate.getFullYear()}`;
            
            // Update the input field with the selected date
            dateInput.value = formattedDate;

            // Highlight the selected date
            document.querySelectorAll('.calendar-day').forEach(day => day.classList.remove('selected'));
            event.target.classList.add('selected');

            // Hide the calendar after selection
            calendarPopup.style.display = "none";
        }

        function updateCalendar() {
            currentDate.setMonth(parseInt(currentMonthElement.value));
            currentDate.setFullYear(parseInt(yearSelect.value));
            generateCalendar(currentDate);
        }

        // Toggle calendar visibility
        calendarIcon.addEventListener("click", showCalendar);

        // Update calendar on month/year change
        currentMonthElement.addEventListener("change", updateCalendar);
        yearSelect.addEventListener("change", updateCalendar);

        // Initialize calendar
        populateMonthYearSelectors();
        generateCalendar(currentDate);

        // Hide calendar if clicking outside
        document.addEventListener("click", function(event) {
            if (!calendarPopup.contains(event.target) && event.target !== calendarIcon) {
                calendarPopup.style.display = "none";
            }
        });
    </script>
</body>
</html>
