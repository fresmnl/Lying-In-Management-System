if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
window.onbeforeunload = function(e){
  history.go(-1);
}
function handleSelectChange() {
  var value = document.getElementById("role").value;
  var forgetPassword = document.getElementById("forget-password");
  var signUp = document.getElementById("sign-up");

  if (value === "Admin") {
    forgetPassword.style.display = "none";
    signUp.style.display = "none";
  }else if(value === "Health Facility"){
    forgetPassword.style.display = "block";
    signUp.style.display = "none";
  }else if(value === "Patient"){
    forgetPassword.style.display = "block";
    signUp.style.display = "block";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const roleSelection = document.querySelector(".role-selection");
  const selectRoleLabel = document.querySelector(".select-a-role");
  const dropdownOptions = document.querySelector(".dropdown-options");
  const options = document.querySelectorAll(".dropdown-options .option");

  roleSelection.addEventListener("click", function (event) {
    // Show dropdown options only if the click is on the dropdown icon or the label
    if (
      event.target.closest(".dropdown-icon") ||
      event.target.closest(".select-role-label")
    ) {
      roleSelection.classList.toggle("open");
      dropdownOptions.style.display = roleSelection.classList.contains("open")
        ? "flex"
        : "none";
    }
  });

  options.forEach((option) => {
    option.addEventListener("click", function () {
      const selectedRole = this.getAttribute("data-value");
      selectRoleLabel.textContent = selectedRole;
      selectRoleLabel.classList.add("selected");
      roleSelection.classList.remove("open");
      dropdownOptions.style.display = "none";
    });
  });

  document.addEventListener("click", function (event) {
    if (!roleSelection.contains(event.target)) {
      roleSelection.classList.remove("open");
      dropdownOptions.style.display = "none";
    }
  });
});

//dropdown for designated rhu//
document
  .getElementById("toggleDropdown")
  .addEventListener("click", function () {
    const dropdownContent = document.getElementById("dropdownContent");
    if (
      dropdownContent.style.display === "none" ||
      dropdownContent.style.display === ""
    ) {
      dropdownContent.style.display = "block";
    } else {
      dropdownContent.style.display = "none";
    }
  });

// Optional: Close the dropdown if the user clicks outside of it
