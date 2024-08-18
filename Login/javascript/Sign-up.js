// Function to toggle visibility of dropdown
function toggleDropdown(dropdownId) {
    var dropdownContent = document.getElementById(dropdownId);
    dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
  }
  
  // Function to handle dropdown option selection
  function handleDropdownSelection(dropdownId, targetClass) {
    var options = document.querySelectorAll(`#${dropdownId} a`);
    options.forEach(function(option) {
        option.addEventListener("click", function(event) {
            event.preventDefault();
            var selectedText = this.textContent;
            document.querySelector(targetClass).textContent = selectedText;
            document.getElementById(dropdownId).style.display = "none";
        });
    });
  }
  
  // Setup dropdowns on page load
  window.onload = function() {
    const dropdownIds = [
        "attainmentDropdownContent",
        "sexDropdownContent",
        "statusDropdownContent",
        "statusDropdownContent1",
        "dropdownContent",
        "idTypeDropdownContent"
    ];
    
    dropdownIds.forEach(function(id) {
        document.getElementById(id).style.display = "none";
    });
  };
  
  // Dropdown toggles and option handling
  document.getElementById("toggleDropdown").addEventListener("click", function() {
    toggleDropdown("dropdownContent");
  });
  handleDropdownSelection("dropdownContent", ".select-rhu");
  
  document.getElementById("toggleSexDropdown").addEventListener("click", function() {
    toggleDropdown("sexDropdownContent");
  });
  handleDropdownSelection("sexDropdownContent", ".select-a-sex");
  
  document.getElementById("toggleStatusDropdown").addEventListener("click", function() {
    toggleDropdown("statusDropdownContent");
  });
  handleDropdownSelection("statusDropdownContent", ".select-a-status");
  
  document.getElementById("toggleAttainmentDropdown").addEventListener("click", function() {
    toggleDropdown("attainmentDropdownContent");
  });
  handleDropdownSelection("attainmentDropdownContent", ".select-an-attainment");
  
  document.getElementById("toggleStatusDropdown1").addEventListener("click", function() {
    toggleDropdown("statusDropdownContent1");
  });
  handleDropdownSelection("statusDropdownContent1", ".select-a-status1");
  
  document.getElementById("toggleIdTypeDropdown").addEventListener("click", function() {
    toggleDropdown("idTypeDropdownContent");
  });
  handleDropdownSelection("idTypeDropdownContent", ".select-an-id");

  
  //calendar
  