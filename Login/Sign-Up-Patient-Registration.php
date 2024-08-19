<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="css/Sign-Up-Patient-Registration.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
    <title>Create an Account - Registration</title>
  </head>
  <body>
    <div class="sign-up-patient-registrati">
      <main class="rectangle-parent">
        <div class="frame-child"></div>
        <section class="content">
          <div class="content-child"></div>
          <div class="branding">
            <img
              class="logo-white-1"
              loading="lazy"
              alt=""
              src="images/signup-logo.svg"
            />
          </div>
          <div class="form-container">
            <div class="form">
              <div class="title">
                <div class="create-an-account">Create an Account</div>
              </div>
              <div class="provide-the-required">
                Provide the required information to get started.
              </div>
            </div>
          </div>
          <div class="signin-link-wrapper">
            <div class="signin-link">
              <div class="already-have-an-account-wrapper">
                <div class="already-have-an">Already have an account?</div>
              </div>
              <button class="signin-button">
                <div class="signin-button-child"></div>
                <a class="sign-in" href="Login.php">Sign in</a>
              </button>
            </div>
          </div>
        </section>
        <section class="progress">
          <div class="steps">
            <div class="step-container">
              <div class="step-one">
                <div class="step-indicator">
                  <div class="dots">
                    <div class="indicators"></div>
                    <b class="step-placeholder">1</b>
                  </div>
                  <div class="dots1">
                    <div class="dots-child"></div>
                  </div>
                  <div class="dots2">
                    <div class="dots-item"></div>
                    <b class="b">2</b>
                  </div>
                  <div class="dots3">
                    <div class="dots-inner"></div>
                  </div>
                  <div class="dots4">
                    <div class="ellipse-div"></div>
                    <b class="b1">3</b>
                  </div>
                </div>
              </div>
              <div class="personal-details-parent">
                <div class="personal-details">Personal Details</div>
                <div class="history-button">
                  <div class="history">History</div>
                </div>
                <div class="registration">Registration</div>
              </div>
            </div>
            <div class="input-fields-wrapper">
              <div class="input-fields">
                <div class="input-fields-child"></div>
                <div class="user-pass-container">
                  <div class="input-labels">
                    <b class="username">Username</b>
                  </div>
                  <div class="input-values">
                    <div class="input-values-child"></div>
                    <input
                      class="auto-generated-username"
                      placeholder="Auto-Generated Username"
                      type="text"
                    />
                  </div>
                </div>
                <div class="user-pass-container1">
                  <div class="password-wrapper">
                    <b class="password">Password</b>
                  </div>
                  <div class="rectangle-group">
                    <div class="frame-item"></div>
                    <input
                      class="enter-a-password"
                      placeholder="Enter a password"
                      type="text"
                    />
                  </div>
                </div>
                <div class="user-pass-container2">
                  <div class="confirm-password-wrapper">
                    <b class="confirm-password">Confirm Password</b>
                  </div>
                  <div class="rectangle-container">
                    <div class="frame-inner"></div>
                    <input
                      class="re-enter-a-password"
                      placeholder="Re-enter a password"
                      type="text"
                    />
                  </div>
                </div>
                <div class="agreement">
                  <input class="checkbox" type="checkbox" />

                  <div class="i-agree-to-container">
                    <span class="i-agree-to">I agree to the </span>
                    <b>Terms of Service and Privacy Policy</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation">
              <div class="buttons">
              <form action="Sign-Up-Patient-History.php">
                      <input type="submit" value="Previous" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                </div>
                <div class="submit-buttons">
                <form action=" ">
                      <input type="submit" value="Clear" style="cursor: pointer; width: 144px; height: 50px; background: #fdfdfd; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #00C8D2; border: 2px solid #00C8D2;">
                  </form>
                  <form action="">
                      <input type="submit" value="Create" class="next-button" style="cursor: pointer; width: 144px; height: 50px; background: #00C8D2; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; font-family: 'Lato'; font-style: normal; font-weight: 800; font-size: 20px; line-height: 24px; color: #FDFDFD; border: none;">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>