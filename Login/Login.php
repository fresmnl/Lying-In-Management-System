<?php
require '../Database/db-config.php';
$db_conn = new Database("localhost", "root", "", "db_lyingin");


$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST["sign_in"])) {
    if (empty($_POST["username"]) && empty($_POST["password"]) && $_POST["role"] === "Select a role") {
      $message = 'Please Select role and enter credentials.';
      header('Location: Login.php?message=' . urlencode($message));
    }elseif ($_POST["role"] === "Select a role") {
      $message = 'Please Select role.';
      header('Location: Login.php?message=' . urlencode($message));
    } elseif (empty($_POST["username"]) && empty($_POST["password"])) {
      $message = 'Please enter credentials.';
      header('Location: Login.php?message=' . urlencode($message));
    } elseif (empty($_POST["username"])) {
      $message = 'Please enter your username.';
      header('Location: Login.php?message=' . urlencode($message));
    } elseif (empty($_POST["password"])) {
      $message = 'Please enter your password.';
      header('Location: Login.php?message=' . urlencode($message));
    }else{
      $role = $db_conn->cleanStr($_POST["role"]);
      $username = $db_conn->cleanStr($_POST["username"]);
      $password = $db_conn->cleanStr($_POST["password"]);

      $sql = "SELECT Password FROM user_account WHERE Username = :username AND Role = :role";
      $params = ['username' => $username, 'role' => $role];
      $stmt = $db_conn->query($sql, $params);
      if ($stmt) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && $user['Password'] === $password && $user['Role'] === $role) {
            // Successful login
            $message = 'Login successful!';
            // Redirect to a protected area or dashboard
            header('Location: ../Admin/dashboard.php');
            exit();
        } else {
            // Invalid credentials
            $message = 'Invalid username or password.';
        }
    } else {
        $message = 'An error occurred while querying the database.';
    }
    }
  }
}
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
<title>Login</title>
<style>
  :root {
    --primary-color: #00acce;
    --tertiary-color: #004268;
    --background-color: rgba(253, 253, 253, 0.7);
    --hover-color: #1ac7e8;
    --text-color: rgba(0, 66, 104, 0.6);
    --border-color: #fdfdfd;
  }

  .solution-content-child {
    position: absolute;
    top: 0.063rem;
    left: 0;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    background-color: var(--background-color);
    width: 100%;
    height: 100%;
    display: none;
  }

  .logo-container-child {
    height: 30.75rem;
    width: 23.375rem;
    position: relative;
    background-color: var(--primary-color);
    display: none;
    max-width: 100%;
  }

  .logo02-1-icon {
    height: 8.313rem;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: cover;
    z-index: 3;
  }

  .logo-container {
    position: absolute;
    top: 0;
    left: 30.375rem;
    background-color: var(--primary-color);
    width: 23.375rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 11.062rem 0.937rem 11.375rem;
    box-sizing: border-box;
    max-width: 100%;
    z-index: 2;
  }

  .sign-in-to {
    margin: 0;
    position: relative;
    font-size: 1.563rem;
    font-weight: 900;
    font-family: Lato;
    color: #004168;
    text-align: center;
    z-index: 1;
  }

  .welcome-back {
    font-weight: 500;
    font-family: Lato;
    color: var(--tertiary-color);
  }

  .user {
    font-family: Lato;
    color: #004168;
  }

  .please-login-your {
    font-weight: 500;
    font-family: Lato;
    color: var(--tertiary-color);
  }

  .welcome-back-user-container {
    align-self: stretch;
    position: relative;
    font-size: 0.875rem;
    text-align: left;
    z-index: 1;
  }

  .footer-elements {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.5rem;
    max-width: 100%;
  }

  .form,
  .role-selection-child {
    box-sizing: border-box;
    max-width: 100%;
  }

  .form {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 0 0 0.562rem;
  }

  .role-selection-child {
    height: 3.125rem;
    width: 21.313rem;
    position: relative;
    border-radius: 8px;
    background-color: var(--primary-color);
    border: 1.5px solid var(--border-color);
    display: none;
  }

  .placeholder-icon {
    width: 1.438rem;
    height: 1.438rem;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 2;
  }

  .placeholder-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.812rem 0 0;
  }

  .dropdown-divider {
    width: 0.094rem;
    height: 3.156rem;
    position: relative;
    border-right: 1.5px solid var(--border-color);
    box-sizing: border-box;
    z-index: 2;
  }

  .dropdown-divider-wrapper {
    height: 3.063rem;
    width: 0.438rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 0.312rem 0 0;
    box-sizing: border-box;
  }
  .message{
    color: red;
    font-size: .9rem;
  }
  .select-a-role {
    position: relative;
    font-size: 1.125rem;
    font-weight: 600;
    font-family: Lato;
    color: rgba(253, 253, 253, 0.8);
    text-align: left;
    display: inline-block;
    min-width: 6.125rem;
    z-index: 2;
  }

  .password-wrapper,
  .select-role-label {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .select-role-label {
    flex-direction: column;
    padding: 0.875rem 0 0;
  }

  .password-wrapper {
    flex-direction: row;
    gap: 1rem;
  }

  .vector-icon {
    width: 0.894rem;
    height: 0.594rem;
    position: relative;
    z-index: 2;
  }

  .dropdown-icon {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1.187rem 0 0;
  }

  .footer-container-child,
  .role-selection {
    width: 21.313rem;
    border-radius: 8px;
    box-sizing: border-box;
    max-width: 100%;
  }

  .role-selection {
    background-color: var(--primary-color);
    border: 1.5px solid var(--border-color);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    padding: 0 0.875rem 0.062rem 0.75rem;
    gap: 1.25rem;
    z-index: 10;
    /* Adjusted to ensure it's in front */
    margin: 1.625rem 0 1.625rem 0
  }

  /* Add these styles to your existing CSS */
  .dropdown-options {
    display: none;
    flex-direction: column;
    position: absolute;
    background-color: var(--border-color);
    border: none;
    width: 21.313rem;
    top: 34%;
    left: 0;
  }

  .dropdown-options .option {
    padding: 0.875rem;
    cursor: pointer;
    color: #004168;
    font-size: 1.125rem;
    font-weight: 600;
    font-family: Lato;
  }

  .dropdown-options .option:hover {
    background-color: var(--hover-color);
  }

  .role-selection.open .dropdown-options {
    display: flex;
  }

  .select-a-role.selected {
    color: var(--border-color);
  }

  .footer-container-child {
    height: 3.125rem;
    position: relative;
    background-color: rgba(253, 253, 253, 0.8);
    border: 1.5px solid var(--primary-color);
    display: none;
  }

  .layer-1-icon {
    width: 1.375rem;
    height: 1.438rem;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 2;
  }

  .username-label {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.812rem 0 0;
  }

  .livello {
    width: 0.094rem;
    height: 3.156rem;
    position: relative;
    border-right: 1.5px solid var(--primary-color);
    box-sizing: border-box;
    z-index: 2;
  }

  .livello-wrapper,
  .password-placeholder {
    height: 3.063rem;
    width: 0.375rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 0.25rem 0 0;
    box-sizing: border-box;
  }

  .password-placeholder {
    width: 11.188rem;
    border: 0;
    outline: 0;
    background-color: transparent;
    height: 2.188rem;
    padding: 0.812rem 0 0;
    font-family: Lato;
    font-weight: 500;
    font-size: 1.125rem;
    color: var(--text-color);
  }

  .footer-container,
  .frame-child {
    width: 21.313rem;
    border-radius: 8px;
    background-color: rgba(253, 253, 253, 0.8);
    border: 1.5px solid var(--primary-color);
    box-sizing: border-box;
    max-width: 100%;
  }

  .footer-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 0.75rem 0.062rem;
    gap: 0.812rem;
    z-index: 1;
    margin-bottom: 1.625rem;
  }

  .frame-child {
    height: 3.125rem;
    position: relative;
    display: none;
  }

  .hidden-input-icon {
    width: 1.063rem;
    height: 1.063rem;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 2;
  }

  .username-input-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.937rem 0 0;
  }

  .username-input-child {
    height: 3.156rem;
    width: 0.094rem;
    position: relative;
    border-right: 1.5px solid var(--primary-color);
    box-sizing: border-box;
    z-index: 2;
  }

  .password {
    position: relative;
    font-size: 1.125rem;
    font-weight: 500;
    font-family: Lato;
    color: var(--text-color);
    text-align: left;
    display: inline-block;
    min-width: 4.938rem;
    z-index: 2;
  }

  .password-icon,
  .username-input {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }

  .password-icon {
    flex-direction: column;
    padding: 0.75rem 0 0;
  }

  .username-input {
    height: 3.063rem;
    flex-direction: row;
    gap: 1.143rem;
  }

  .eye-icon {
    width: 1.25rem;
    height: 1.25rem;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 2;
  }

  .title {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0 0 0.875rem;
  }

  .frame-wrapper,
  .rectangle-parent {
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    max-width: 100%;
  }

  .rectangle-parent {
    flex: 1;
    border-radius: 8px;
    background-color: rgba(253, 253, 253, 0.8);
    border: 1.5px solid var(--primary-color);
    align-items: flex-end;
    justify-content: space-between;
    padding: 0.062rem 0.812rem 0 0.562rem;
    gap: 1.25rem;
    z-index: 1;
  }

  .frame-wrapper {
    width: 21.313rem;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0 0 0.875rem;
  }

  .mask-container-child {
    height: 3.125rem;
    width: 15.438rem;
    position: relative;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    background-color: var(--primary-color);
    display: none;
  }

  .sign-in {
    position: relative;
    font-size: 1.25rem;
    font-weight: 800;
    font-family: Lato;
    color: var(--border-color);
    text-align: left;
    display: inline-block;
    min-width: 3.75rem;
    z-index: 2;
  }

  .mask-container {
    cursor: pointer;
    border: 0;
    padding: 0.712rem 1.15rem 0.712rem 1.212rem;
    background-color: var(--primary-color);
    flex: 1;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    white-space: nowrap;
    z-index: 1;
  }

  .mask-container:hover {
    background-color: var(--hover-color);
  }

  .form-parent,
  .mask-container-wrapper {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }

  .mask-container-wrapper {
    width: 22.438rem;
    flex-direction: row;
    padding: 0 3.5rem;
    box-sizing: border-box;
  }

  .form-parent {
    margin: 0;
    position: absolute;
    top: 2rem;
    left: 4.375rem;
    width: 28.75rem;
    flex-direction: column;
  }

  .solution-content-item {
    position: absolute;
    top: 3.313rem;
    left: 4rem;
    border-right: 6px solid var(--primary-color);
    box-sizing: border-box;
    width: 0.375rem;
    height: 2.188rem;
    z-index: 1;
  }

  .solution-content {
    height: 30.813rem;
    width: 53.75rem;
    position: relative;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    background-color: var(--background-color);
    max-width: 100%;
  }

  .login {
    width: 100%;
    height: 61.375rem;
    position: relative;
    background: radial-gradient(50% 50%at 50% 50%,
        #4adede,
        #2d82b5 60%,
        #787ff6 99.51%);
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 9rem 1.25rem 15.25rem;
    box-sizing: border-box;
    line-height: normal;
    letter-spacing: normal;
  }

  .sign-up,
  .reset-pass {
    width: 21rem;
  }

  .reset-pass p {
    text-align: right;
    margin: 0 0 1rem 0;
  }

  .reset-pass a {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 19px;
    color: rgba(0, 65, 104, 0.8);
    text-decoration: none;
  }

  .reset-pass a:hover {
    text-decoration: underline;
  }

  .sign-up p {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 19px;
    color: rgba(0, 65, 104, 0.8);
    text-align: center;
  }

  .sign-up span a {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 19px;
    color: #004168;
    text-decoration: none;
    margin-left: 1rem;
  }

  .sign-up span a:hover {
    text-decoration: underline;
  }

  select {
    position: relative;
    background-color: transparent;
    border: none;
    outline: none;
    color: white;
    width: 100%;
    font-size: 1.2rem;
  }

  select option {
    background-color: white;
    color: #004168;
  }



  @media screen and (max-width: 450px) {
    .sign-in-to {
      font-size: 1.25rem;
    }

    .footer-container {
      flex-wrap: wrap;
    }

    .solution-content {
      height: auto;
      min-height: 493;
    }

    .login {
      height: auto;
    }
  }
</style>
<form action="" method="POST">
  <div class="login">
    <div class="solution-content">
      <div class="solution-content-child"></div>
      <div class="logo-container">
        <div class="logo-container-child"></div>
        <img class="logo02-1-icon" loading="lazy" alt="" src="images/login-logo.svg" />
      </div>
      <d class="form-parent">
        <div class="form">
          <div class="footer-elements">
            <h3 class="sign-in-to">Sign in to TrustTrack</h3>
            <div class="welcome-back-user-container">
              <span class="welcome-back">Welcome back </span>
              <b class="user">User</b>
              <span class="please-login-your">! Please login your account.</span>
            </div>
          </div>
        </div>
        <div class="role-selection">
          <!-- <div class="role-selection-child"></div> -->
          <div class="password-wrapper">
            <div class="placeholder-wrapper">
              <img class="placeholder-icon" alt="" src="images/role.svg" />
            </div>
            <select name="role" id="">
              <option value="Select a role">Select a role</option>
              <option value="Admin">Admin</option>
              <option value="Health Facility">Health Facility</option>
              <option value="Patient">Patient</option>
            </select>
          </div>
        </div>
        <?php if (isset($_GET['message'])): ?>
          <div class="message"><?php echo htmlspecialchars($_GET['message']); ?></div>
        <?php endif; ?>
        <div class="footer-container">
          <div class="footer-container-child"></div>
          <div class="username-label">
            <img class="layer-1-icon" alt="" src="images/usename.svg" />
          </div>
          <div class="livello-wrapper">
            <div class="livello"></div>
          </div>
          <input class="password-placeholder" name="username" placeholder="Username" type="text" />
        </div>
        <div class="footer-container">
          <div class="footer-container-child"></div>
          <div class="username-label">
            <img class="hidden-input-icon" alt="" src="images/password.svg" />
          </div>
          <div class="livello-wrapper">
            <div class="livello"></div>
          </div>
          <input class="password-placeholder" name="password" placeholder="Password" type="Password" />
        </div>
        <!-- <div class="frame-wrapper">
          <div class="rectangle-parent">
            <div class="frame-child"></div>
            <div class="username-input">
              <div class="username-input-container">
                <img class="hidden-input-icon" alt="" src="images/password.svg" />
              </div>
              <div class="username-input-child"></div>
              <div class="password-icon">
                <div class="password">Password</div>
              </div>
            </div>
            <div class="title">
              <img class="eye-icon" alt="" src="images/hide.svg" />
            </div>
          </div>
        </div> -->
        <div class="reset-pass">
          <p><a href="Login-Reset-Password.php">Forgot Password?</a></p>
        </div>
        <div class="mask-container-wrapper">
          <input type="submit" name="sign_in" value="Sign in">
        </div>
        <div class="sign-up">
          <p>Don't have an account yet?<span><a href="Sign-Up-Patient-Personal.php">Sign up</a></span></p>
        </div>
</form>
</div>
</div>
</form>
<script src="script.js"></script>