    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;800;900&display=swap"
    />
    <style>
      :root { --primary-color: #00acce; --primary-color-hover: #1ac7e8; --secondary-color: #004168; --secondary-color-light: rgba(0, 66, 104, 0.6); --background-color: rgba(253, 253, 253, 0.7); --background-color-light: rgba(253, 253, 253, 0.8); --text-color-light: #fdfdfd; --separator-color: #00acce; }

.main-child { align-self: stretch; width: 53.75rem; position: relative; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: var(--background-color); display: none; max-width: 100%; }

.content, .separator { box-sizing: border-box; }

.separator { width: 0.375rem; height: 2.188rem; position: relative; border-right: 6px solid var(--separator-color); z-index: 1; }

.content { height: 4.313rem; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; padding: 2.5rem 0 0; }

.new-password1, .your-new-password { position: relative; font-family: Lato; text-align: left; z-index: 1; }

.new-password1 { margin: 0; font-size: 1.563rem; font-weight: 900; color: var(--secondary-color); }

.your-new-password { align-self: stretch; font-size: 0.875rem; font-weight: 500; color: var(--secondary-color); }

.new-password { align-self: stretch; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; gap: 0.5rem; }

.label-pair-child { height: 3.125rem; width: 21.313rem; position: relative; border-radius: 8px; background-color: var(--background-color-light); border: 1.5px solid var(--primary-color); box-sizing: border-box; display: none; max-width: 100%; }

.new-password2 { width: 7.563rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--secondary-color-light); text-align: left; display: inline-block; padding: 0; z-index: 2; }

.input-fields-icon { width: 1.25rem; height: 1.25rem; position: relative; overflow: hidden; flex-shrink: 0; z-index: 2; }

.label-pair, .placeholder { display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; padding: 0.062rem 0 0; }

.label-pair { flex: 1; border-radius: 8px; background-color: var(--background-color-light); border: 1.5px solid var(--primary-color); flex-direction: row; justify-content: space-between; padding: 0.75rem 0.937rem 0.75rem 0.687rem; gap: 1.25rem; z-index: 1; }

.frame-child, .input-labels, .label-pair { box-sizing: border-box; max-width: 100%; }

.input-labels { align-self: stretch; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0 0 0.25rem; }

.frame-child { height: 3.125rem; width: 21.313rem; position: relative; border-radius: 8px; background-color: var(--background-color-light); border: 1.5px solid var(--primary-color); display: none; }

.confirm-pasword { width: 8.938rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--secondary-color-light); text-align: left; display: inline-block; padding: 0; z-index: 2; }

.frame-icon { width: 1.25rem; height: 1.25rem; position: relative; overflow: hidden; flex-shrink: 0; z-index: 2; }

.frame-wrapper { display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; padding: 0.062rem 0 0; }

.input-labels1, .rectangle-parent { display: flex; flex-direction: row; align-items: flex-start; box-sizing: border-box; max-width: 100%; }

.rectangle-parent { flex: 1; border-radius: 8px; background-color: var(--background-color-light); border: 1.5px solid var(--primary-color); justify-content: space-between; padding: 0.75rem 0.937rem 0.75rem 0.687rem; gap: 1.25rem; z-index: 1; }

.input-labels1 { align-self: stretch; justify-content: flex-start; padding: 0 0 1.062rem; }

.reset-button-child { height: 3.125rem; width: 15.438rem; position: relative; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: var(--primary-color); display: none; }

.reset-password1 { position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--text-color-light); text-align: center; z-index: 2; text-decoration: none; }

.reset-button { cursor: pointer; border: 0; padding: 0.812rem 3.125rem 0.812rem 3.25rem; background-color: var(--primary-color); box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; flex-direction: row; white-space: nowrap; z-index: 1; }

.reset-button:hover { background-color: var(--primary-color-hover); }

.password-form, .password-inputs, .reset-button, .reset-password { display: flex; align-items: flex-start; justify-content: flex-start; }

.reset-password { flex-direction: row; padding: 0 2.937rem; }

.password-form, .password-inputs { flex-direction: column; max-width: 100%; }

.password-inputs { margin: 0; width: 21.313rem; gap: 1.562rem; }

.password-form { flex: 1; padding: 2.437rem 0 0; box-sizing: border-box; min-width: 16.188rem; }

.branding-child, .logo02-1-icon { position: relative; max-width: 100%; }

.branding-child { height: 25.438rem; width: 23.375rem; border-radius: 0 8px 8px 0; background-color: var(--primary-color); display: none; }

.logo02-1-icon { height: 8.313rem; flex: 1; overflow: hidden; object-fit: cover; z-index: 2; }

.branding { width: 23.375rem; border-radius: 0 8px 8px 0; background-color: var(--primary-color); justify-content: flex-start; padding: 8.562rem 0.937rem; max-width: 100%; z-index: 1; }

.branding, .login-new-password, .main { display: flex; flex-direction: row; align-items: flex-start; box-sizing: border-box; }

.main { width: 53.75rem; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: var(--background-color); justify-content: flex-start; padding: 0 0 0 4rem; gap: 0.562rem; max-width: 100%; position: relative; top: -6rem; }

.login-new-password { width: 100%; position: relative; background: radial-gradient(50% 50% at 50% 50%, #4adede, #2d82b5 60%, #787ff6 99.51%); overflow: hidden; justify-content: center; padding: 17.937rem 1.25rem 18rem; line-height: normal; letter-spacing: normal; }

@media screen and (max-width: 825px) { .main { flex-wrap: wrap; padding-left: 1.25rem; padding-right: 1.25rem; padding-bottom: 1.25rem; box-sizing: border-box; } }

@media screen and (max-width: 450px) { .new-password1 { font-size: 1.25rem; } .reset-password { padding-left: 1.25rem; padding-right: 1.25rem; box-sizing: border-box; } .branding { padding-top: 5.563rem; padding-bottom: 5.563rem; box-sizing: border-box; } }

    </style>
    <title>New Password</title>
    <div class="login-new-password">
      <div class="main">
        <div class="main-child"></div>
        <div class="content">
          <div class="separator"></div>
        </div>
        <div class="password-form">
          <form class="password-inputs">
            <div class="new-password">
              <h3 class="new-password1">New Password</h3>
              <div class="your-new-password">
                Your new password must be different from previous used password.
              </div>
            </div>
            <div class="input-labels">
              <div class="label-pair">
                <div class="label-pair-child"></div>
                <input
                  class="new-password2"
                  placeholder="New password"
                  type="text"
                />

                <div class="placeholder">
                  <img
                    class="input-fields-icon"
                    alt=""
                    src="images/hide.svg"
                  />
                </div>
              </div>
            </div>
            <div class="input-labels1">
              <div class="rectangle-parent">
                <div class="frame-child"></div>
                <input
                  class="confirm-pasword"
                  placeholder="Confirm Pasword"
                  type="text"
                />

                <div class="frame-wrapper">
                  <img class="frame-icon" alt=""             
                   src="images/hide.svg"
                  />
                </div>
              </div>
            </div>
            <div class="reset-password">
            <a href="Login-updated-Message-Box.php" style="text-decoration:none;">
              <button class="reset-button">
                <div class="reset-button-child"></div>
                <div class="reset-password1">Reset Password</div>
              </button>
            </a>
            </div>
          </form>
        </div>
        <div class="branding">
          <div class="branding-child"></div>
          <img
            class="logo02-1-icon"
            loading="lazy"
            alt=""
            src="images/login-logo.svg"
          />
        </div>
      </div>
    </div>
  </body>
</html>