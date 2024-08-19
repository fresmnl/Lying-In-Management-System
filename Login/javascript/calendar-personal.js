const calendarPopup = document.getElementById("calendarPopup");
const calendarIcon = document.getElementById("calendarIcon");
const currentMonthElement = document.getElementById("monthSelect"); // <select> element for months
const yearSelect = document.getElementById("yearSelect"); // <select> element for years
const calendarDaysElement = document.getElementById("calendarDays"); // Container for calendar days
const displayDate = document.getElementById("displayDate");
const ageText = document.getElementById("ageText");

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
    
    // Update the display date
    displayDate.textContent = formattedDate;

    // Calculate age
    const age = calculateAge(selectedDate);

    // Update the age text
    ageText.textContent = `${age} years old`;

    // Highlight the selected date
    document.querySelectorAll('.calendar-day').forEach(day => day.classList.remove('selected'));
    event.target.classList.add('selected');

    // Hide the calendar after selection
    calendarPopup.style.display = "none";
}

function calculateAge(birthDate) {
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDifference = today.getMonth() - birthDate.getMonth();
    
    // Adjust age if birthdate hasn't occurred yet this year
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age;
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
