var registrationToggle = document.getElementById("register-dropdown-toggle");
function RegisterToggleCollapse() {
  registrationToggle.classList.toggle("hidden");
}

var recordToggle = document.getElementById("record-dropdown-toggle");
function RecordToggleCollapse() {
  recordToggle.classList.toggle("hidden");
}

var accountToggle = document.getElementById("account-dropdown-toggle");

function AccountToggleCollapse() {
  accountToggle.classList.toggle("hidden");
}

HFRegistration =
  "/CapstoneProject/Lying-In-Management-System/Admin/Registration.php";
  AccountVerification =
  "/CapstoneProject/Lying-In-Management-System/Admin/Account-Verification.php";
  AccountHistory =
  "/CapstoneProject/Lying-In-Management-System/Admin/Account-History.php";
RecordAccount =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Account.php";
RecordInformation =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Info-New.php";
RecordInformationAuth =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Info-Authorize.php";
RecordNumber =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Number.php";
RecordHospital =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Hospital-Data.php";
RecordHospitalArchive =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Hospital-Archived.php";
RecordAccountEdit =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Account-Edit.php";
RecordAccountDeact =
  "/CapstoneProject/Lying-In-Management-System/Admin/Record-Account-Deact.php";


if (
  window.location.pathname == RecordAccount ||
  window.location.pathname == RecordInformation ||
  window.location.pathname == RecordInformationAuth ||
  window.location.pathname == RecordNumber ||
  window.location.pathname == RecordHospital ||
  window.location.pathname == RecordHospitalArchive
) {
  recordToggle.classList.remove("hidden");
}
if (
  window.location.pathname == RecordAccountEdit ||
  window.location.pathname == RecordAccountDeact
) {
  accountToggle.classList.remove("hidden");
}
if (
  window.location.pathname == HFRegistration ||
  window.location.pathname == AccountVerification ||
  window.location.pathname == AccountHistory
) {
  registrationToggle.classList.remove("hidden");
}
