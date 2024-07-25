    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@800;900&display=swap"
    />
  <style>
    :root { --background-overlay: rgba(0, 0, 0, 0.25); --box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); --border-radius: 8px; --primary-color: #00acce; --primary-hover: #1ac7e8; --secondary-color: #fdfdfd; --text-color: #004168; }

.login-updated-message-box-child { height: 61.375rem; width: 94.5rem; position: relative; background-color: var(--background-overlay); display: none; max-width: 100%; }

.frame-icon, .frame-icon1 { height: 1.25rem; width: 1.25rem; position: relative; overflow: hidden; flex-shrink: 0; display: none; }

.frame-child { width: 28.75rem; height: 24.125rem; position: relative; box-shadow: var(--box-shadow); border-radius: var(--border-radius); background-color: var(--secondary-color); display: none; max-width: 100%; }

.check-img-1-icon { height: 9.375rem; width: 11.644rem; position: relative; object-fit: cover; z-index: 3; }

.password-update { align-self: stretch; display: flex; flex-direction: row; align-items: flex-start; justify-content: center; padding: 0 1.25rem 0 1.312rem; }

.your-password-has { align-self: stretch; position: relative; font-weight: 900; z-index: 3; }

.message-box { align-self: stretch; display: flex; flex-direction: column; align-items: flex-end; justify-content: flex-start; gap: 1.187rem; }

.frame-item { height: 3.125rem; width: 19.813rem; position: relative; box-shadow: var(--box-shadow); border-radius: var(--border-radius); background-color: var(--primary-color); display: none; }

.go-to-sign { width: 10.25rem; position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--secondary-color); text-align: center; display: inline-block; z-index: 1; }

.rectangle-group, .signin-link-container { display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; }

.rectangle-group { cursor: pointer; border: 0; padding: 0.812rem 4.75rem; background-color: var(--primary-color); box-shadow: var(--box-shadow); border-radius: var(--border-radius); white-space: nowrap; z-index: 3; }

.rectangle-group:hover { background-color: var(--primary-hover); }

.signin-link-container { padding: 0 3.25rem 0 3.187rem; }

.login-updated-message-box, .rectangle-parent { display: flex; align-items: flex-start; box-sizing: border-box; }

.rectangle-parent { width: 28.75rem; box-shadow: var(--box-shadow); border-radius: var(--border-radius); background-color: var(--secondary-color); flex-direction: column; justify-content: flex-start; padding: 2.687rem 1.25rem 3rem; gap: 2.875rem; max-width: 100%; z-index: 2; }

.login-updated-message-box { width: 100%; position: relative; background-color: var(--background-overlay); overflow: hidden; flex-direction: row; justify-content: center; padding: 18.625rem 1.25rem; line-height: normal; letter-spacing: normal; text-align: center; font-size: 1.563rem; color: var(--text-color); font-family: Lato; top: -6rem; }

@media screen and (max-width: 450px) { .your-password-has { font-size: 1.25rem; } .rectangle-group, .signin-link-container { padding-left: 1.25rem; padding-right: 1.25rem; box-sizing: border-box; } .rectangle-parent { gap: 1.438rem; padding-top: 1.75rem; padding-bottom: 1.938rem; box-sizing: border-box; } }

  </style>
    <div class="login-updated-message-box">
      <div class="login-updated-message-box-child"></div>
      <div class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="message-box">
          <div class="password-update">
            <img
              class="check-img-1-icon"
              loading="lazy"
              alt=""
              src="images/updated.svg"
            />
          </div>
          <div class="your-password-has">Your password has been updated</div>
        </div>
        <div class="signin-link-container">
            <a href="Login.php" style="text-decoration:none;">
          <button class="rectangle-group">
            <div class="frame-item"></div>
            <div class="go-to-sign">Go to Sign In Page</div>
          </button>
          </a>
        </div>
      </div>
    </div>