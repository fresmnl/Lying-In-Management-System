<?php

session_start();

if ($_SESSION['admin']['username'] !== true && !isset($_SESSION['admin']['loggedin'])) {
  header("Location: ../Login/Login.php");
  // echo '<script>console.log('.json_encode($_SESSION).');</script>';
}
?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>
<link rel="stylesheet" href="css/Registration.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
<div class="admin-registration">
  <form class="rectangle-parent" action="Registration-Next.php" method="POST">
    <div class="frame-child"></div>
    <button class="health-facility-registration">
      <div class="health-facility-registration-child"></div>
      <b class="create-an-account">Create an Account for Health Facility</b>
    </button>
    <div class="facility-name-input">
      <div class="facility-name-instructions">
        <b class="name-of-health">Name of Health Facility<span class="font-bold text-[#ff0000] ml-1">*</span></b>
        <div class="complete-name">
          <div class="complete-name-child"></div>
          <input
            class="enter-the-complete"
            placeholder="Enter the complete name"
            type="text"
            name="health_facility"
            value="<?= htmlspecialchars($_SESSION['hfacility']['health_facility'] ?? '', ENT_QUOTES) ?>"
            required />
        </div>
      </div>
    </div>
    <div class="location-contact">
      <div class="city-municipality-input-parent">
        <div class="city-municipality-input">
          <div class="city-email">
            <div class="city-municipality-field">
              <b class="citymunicipality">City/Municipality<span class="font-bold text-[#ff0000] ml-1">*</span></b>
            </div>
            <div class="rectangle-container">
              <select id="dropdownSelect" name="city_municipality" class="select-rhu" required>
                <option value="">Select Health Facility</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "BALANGA CITY" ? "selected" : "" ?> value="Balanga City">Balanga City</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "ABUCAY" ? "selected" : "" ?> value="Abucay">Abucay</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "BAGAC" ? "selected" : "" ?> value="Bagac">Bagac</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "DINALUPIHAN" ? "selected" : "" ?> value="Dinalupihan">Dinalupihan</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "HERMOSA" ? "selected" : "" ?> value="Hermosa">Hermosa</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "LIMAY" ? "selected" : "" ?> value="Limay">Limay</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "MARIVELES" ? "selected" : "" ?> value="Mariveles">Mariveles</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "MORONG" ? "selected" : "" ?> value="Morong">Morong</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "ORANI" ? "selected" : "" ?> value="Orani">Orani</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "ORION" ? "selected" : "" ?> value="Orion">Orion</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "PILAR" ? "selected" : "" ?> value="Pilar">Pilar</option>
                <option <?= isset($_SESSION['hfacility']['city_municipality']) && $_SESSION['hfacility']['city_municipality'] === "SAMAL" ? "selected" : "" ?> value="Samal">Samal</option>
              </select>
            </div>
          </div>
          <div class="landline-no-parent">
            <b class="landline-no">Landline No.</b>
            <div class="rectangle-container">
              <div class="frame-inner"></div>
              <input
                class="pxxx-yyyy"
                placeholder="PXXX-YYYY"
                type="text"
                maxlength="8"
                name="telephone_number"
                id="phoneNumber"
                value="<?= htmlspecialchars($_SESSION['hfacility']['telephone_number'] ?? '', ENT_QUOTES) ?>" />
            </div>
          </div>
        </div>
        <div class="city-municipality-input1">
          <div class="frame-parent">
            <div class="email-address-wrapper">
              <b class="email-address">Email Address<span class="font-bold text-[#ff0000] ml-1">*</span></b>
            </div>
            <div class="group-div">
              <div class="rectangle-div"></div>
              <input
                class="examplegmailcom"
                placeholder="example@gmail.com"
                type="email"
                name="email"
                value="<?= htmlspecialchars($_SESSION['hfacility']['email'] ?? '', ENT_QUOTES) ?>"
                required />
            </div>
          </div>
          <div class="frame-group">
            <div class="mobile-no-wrapper">
              <b class="mobile-no">Mobile No.<span class="font-bold text-[#ff0000] ml-1">*</span></b>
            </div>
            <div class="rectangle-parent1">
              <div class="frame-child1"></div>
              <input
                class="xxx-yyy-zzzz"
                placeholder="+63 (XXX) YYY ZZZZ"
                type="text"
                maxlength="14"
                name="contact_number"
                id="contactNumber"
                value="<?= htmlspecialchars($_SESSION['hfacility']['contact_number'] ?? '', ENT_QUOTES) ?>"
                required />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="actions">
      <div class="clear-next">
        <div class="rectangle-parent2">
          <div class="frame-child2"></div>
          <input type="reset" class="clear" name="clear" value="Clear">
        </div>
        <div class="rectangle-parent3">
          <div class="frame-child3"></div>
          <input type="submit" class="next" value="Next">
        </div>
      </div>
    </div>
  </form>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('error')) {
      const errorType = urlParams.get('error');
      if (errorType === 'email_exists') {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'The email address is already registered.'
        });
      }
    } else if (urlParams.has('success')) {
      const successType = urlParams.get('success');
      if (successType === 'email_available') {
        Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: 'Email address is available.'
        });
      }
    }
  });

  var phoneNumber = document.getElementById('phoneNumber');

  phoneNumber.addEventListener('input', () => {

    let value = phoneNumber.value.replace(/\D/g, '');
    if (value.length > 3) {
      value = value.slice(0, 3) + '-' + value.slice(3, 7);

    }

    phoneNumber.value = value;

  });
  var contactNumber = document.getElementById("contactNumber");

  contactNumber.addEventListener("input", () => {
    // let value = contactNumber.value.replace(/\D/g, "");
    const prefix = '+63';
    let currentValue = contactNumber.value;
    if (!currentValue.startsWith(prefix)) {
      contactNumber.value = prefix + currentValue.replace(prefix, '');
    }
  });
</script>