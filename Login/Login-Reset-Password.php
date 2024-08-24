<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;800;900&display=swap" />
<style>
  :root {
    --color-primary: #00acce;
    --color-secondary: #004168;
    --color-tertiary: rgba(253, 253, 253, 0.7);
    --color-text: #004268;
    --color-bg-gradient: radial-gradient(50% 50% at 50% 50%,
        #4adede,
        #2d82b5 60%,
        #787ff6 99.51%);
  }

  .main-child {
    align-self: stretch;
    width: 53.75rem;
    position: relative;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    background-color: var(--color-tertiary);
    display: none;
    max-width: 100%;
  }

  .frame-icon {
    width: 1.063rem;
    height: 1.063rem;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
  }

  .form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.125rem 0 0;
  }

  .frame-child,
  .go-back {
    position: relative;
    z-index: 1;
  }

  .go-back {
    font-weight: 500;
    display: inline-block;
    min-width: 3.75rem;
  }

  .go-back-link {
    color: var(--color-secondary);
    cursor: pointer;
    text-decoration: none;
  }

  .frame-child {
    width: 0.375rem;
    height: 2.188rem;
    border-right: 6px solid var(--color-primary);
    box-sizing: border-box;
  }

  .email-field-inner {
    height: 1.875rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.062rem 0 0;
    box-sizing: border-box;
  }

  .reset-your-password {
    margin: 0;
    position: relative;
    font-size: inherit;
    font-weight: 900;
    font-family: inherit;
    z-index: 1;
  }

  .email-field {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.562rem;
  }

  .please-provide-the {
    flex: 1;
    position: relative;
    font-weight: 500;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }

  .email-input,
  .email-instruction {
    align-self: stretch;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }

  .email-instruction {
    flex-direction: row;
    padding: 0 0 0 0.937rem;
    box-sizing: border-box;
    font-size: 0.875rem;
    color: var(--color-text);
  }

  .email-input {
    flex-direction: column;
    gap: 0.5rem;
  }

  .email-container-child {
    height: 3.125rem;
    width: 21.313rem;
    position: relative;
    border-radius: 8px;
    background-color: rgba(253, 253, 253, 0.8);
    border: 1.5px solid var(--color-primary);
    box-sizing: border-box;
    display: none;
    max-width: 100%;
  }

  .input-container-icon {
    width: 1.063rem;
    height: 1.063rem;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 2;
  }

  .email-field-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1rem 0 0;
  }

  .email-container-item {
    height: 3.156rem;
    width: 0.094rem;
    position: relative;
    border-right: 1.5px solid var(--color-primary);
    box-sizing: border-box;
    z-index: 2;
  }

  .label-container {
    width: 7.313rem;
    border: 0;
    outline: 0;
    background-color: transparent;
    height: 2.188rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.812rem 0 0;
    box-sizing: border-box;
    font-family: Lato;
    font-weight: 500;
    font-size: 1.125rem;
    color: rgba(0, 66, 104, 0.6);
  }

  .email-container,
  .instruction {
    display: flex;
    justify-content: flex-start;
    max-width: 100%;
  }

  .email-container {
    width: 21.313rem;
    height: 3.125rem;
    border-radius: 8px;
    background-color: rgba(253, 253, 253, 0.8);
    border: 1.5px solid var(--color-primary);
    box-sizing: border-box;
    flex-direction: row;
    align-items: flex-start;
    padding: 0.062rem 0.687rem 0;
    gap: 0.581rem;
    z-index: 1;
  }

  .instruction {
    align-self: stretch;
    flex-direction: column;
    align-items: flex-end;
    gap: 1.562rem;
  }

  .send-button-child {
    height: 3.125rem;
    width: 15.438rem;
    position: relative;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    background-color: var(--color-primary);
    display: none;
  }

  .send {
    position: relative;
    font-size: 1.25rem;
    font-weight: 800;
    font-family: Lato;
    color: #fdfdfd;
    text-align: center;
    display: inline-block;
    min-width: 2.813rem;
    z-index: 2;
    text-decoration: none;
  }

  .send-button,
  .send-button-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
  }

  .send-button {
    cursor: pointer;
    border: 0;
    padding: 0.812rem 1.25rem;
    background-color: var(--color-primary);
    flex: 1;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    justify-content: center;
    z-index: 1;
  }

  .send-button:hover {
    background-color: #1ac7e8;
  }

  .send-button-container {
    width: 21.313rem;
    justify-content: flex-end;
    padding: 0 2.937rem;
    box-sizing: border-box;
    max-width: 100%;
  }

  .instruction-container,
  .password-title {
    display: flex;
    justify-content: flex-start;
    max-width: 100%;
  }

  .instruction-container {
    flex: 1;
    flex-direction: column;
    align-items: flex-end;
    gap: 2.5rem;
  }

  .password-title {
    align-self: stretch;
    flex-direction: row;
    align-items: flex-start;
    padding: 0 0 0 1.812rem;
    box-sizing: border-box;
    font-size: 1.563rem;
  }

  .title-container {
    flex: 1;
    flex-direction: column;
    gap: 1.5rem;
    min-width: 15.625rem;
  }

  .content,
  .password-reset,
  .title-container {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    max-width: 100%;
  }

  .password-reset {
    align-self: stretch;
    flex-direction: row;
    gap: 0.25rem;
  }

  .content {
    flex: 1;
    flex-direction: column;
    padding: 1.437rem 0 0;
    box-sizing: border-box;
    min-width: 16.5rem;
  }

  .logo-container-child {
    height: 22.063rem;
    width: 23.375rem;
    position: relative;
    border-radius: 0 8px 8px 0;
    background-color: var(--color-primary);
    display: none;
    max-width: 100%;
  }

  .logo02-1-icon {
    height: 8.313rem;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    object-fit: contain;
    z-index: 2;
  }

  .logo-container {
    width: 23.375rem;
    border-radius: 0 8px 8px 0;
    background-color: var(--color-primary);
    justify-content: flex-start;
    padding: 6.625rem 0.937rem 7.125rem;
    min-width: 23.375rem;
    max-width: 100%;
    z-index: 1;
  }

  .login-reset-password,
  .logo-container,
  .main {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    box-sizing: border-box;
  }

  .main {
    width: 53.75rem;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    background-color: var(--color-tertiary);
    justify-content: flex-start;
    padding: 0 0 0 0.875rem;
    gap: 4.125rem;
    max-width: 100%;
    position: relative;
    top: -6rem;
  }

  .login-reset-password {
    width: 100%;
    position: relative;
    background: var(--color-bg-gradient);
    overflow: hidden;
    justify-content: center;
    padding: 19.625rem 1.25rem 19.687rem;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    font-size: 1rem;
    color: var(--color-secondary);
    font-family: Lato;
  }

  @media screen and (max-width: 825px) {

    .logo-container,
    .logo02-1-icon {
      flex: 1;
    }

    .main {
      flex-wrap: wrap;
      gap: 2.063rem;
      padding-right: 0.875rem;
      padding-bottom: 0.875rem;
      box-sizing: border-box;
    }
  }

  @media screen and (max-width: 675px) {
    .logo-container {
      min-width: 100%;
    }
  }

  @media screen and (max-width: 450px) {
    .reset-your-password {
      font-size: 1.25rem;
    }

    .send {
      font-size: 1rem;
    }

    .send-button-container {
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      box-sizing: border-box;
    }

    .instruction-container {
      gap: 1.25rem;
    }

    .password-reset {
      flex-wrap: wrap;
    }

    .logo-container {
      padding-top: 4.313rem;
      padding-bottom: 4.625rem;
      box-sizing: border-box;
    }

    .main {
      gap: 1rem;
    }
  }
</style>
<title>Forgot Password</title>
<div class="login-reset-password">
  <div class="main">
    <div class="main-child"></div>
    <div class="content">
      <div class="password-reset">
        <div class="form">
          <img
            class="frame-icon"
            loading="lazy"
            alt=""
            src="images/back-btn.svg" />
        </div>
        <div class="title-container">
          <div class="go-back">
            <a class="go-back-link" href="Login.php">Go Back</a>
          </div>
          <div class="password-title">
            <div class="instruction-container">
              <div class="instruction">
                <div class="email-input">
                  <div class="email-field">
                    <div class="email-field-inner">
                      <div class="frame-child"></div>
                    </div>
                    <h2 class="reset-your-password">Reset your Password</h2>
                  </div>
                  <div class="email-instruction">
                    <div class="please-provide-the">
                      Please provide the email you use with TrustTrack to
                      receive a password reset link.
                    </div>
                  </div>
                </div>
                <div class="email-container">
                  <div class="email-container-child"></div>
                  <div class="email-field-container">
                    <img
                      class="input-container-icon"
                      alt=""
                      src="images/email-logo.svg" />
                  </div>
                  <div class="email-container-item"></div>
                  <input
                    class="label-container"
                    placeholder="Email Address"
                    type="text" />
                </div>
              </div>
              <div class="send-button-container">
                <button class="send-button">
                  <div class="send-button-child"></div>
                  <div>
                    <a class="send" href="Login-New-Password.php">Send</a>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="logo-container">
      <div class="logo-container-child"></div>
      <img
        class="logo02-1-icon"
        loading="lazy"
        alt=""
        src="images/login-logo.svg" />
    </div>
  </div>
</div>

<script>
  import Swal from "sweetalert2";

  document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("SignIn").addEventListener("click", () => {
      Swal.fire({
        title: "Error!",
        text: "Do you want to continue",
        icon: "error",
        confirmButtonText: "Cool",
      });
    });
  });
</script>