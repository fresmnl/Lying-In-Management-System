 <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;800;900&display=swap"
    />
  <style>
    :root { --background-overlay: rgba(0, 0, 0, 0.25); --box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); --border-radius: 8px; --background-color: #fdfdfd; --text-color: #004268; --text-color-dark: #004168; --font-color: #fdfdfd; }

.login-reset-message-box-child { height: 61.375rem; width: 94.5rem; position: relative; background-color: var(--background-overlay); display: none; max-width: 100%; }

.frame-child, .send { position: relative; display: none; }

.send { font-weight: 800; min-width: 2.813rem; }

.frame-child { width: 28.75rem; height: 24.125rem; box-shadow: var(--box-shadow); border-radius: var(--border-radius); background-color: var(--background-color); max-width: 100%; }

.sent-email-img-1-icon { align-self: stretch; flex: 1; position: relative; max-width: 100%; overflow: hidden; max-height: 100%; object-fit: cover; z-index: 3; }

.sent-email-img-1-wrapper { height: 13.438rem; width: 14.25rem; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; padding: 0.937rem 0 0; box-sizing: border-box; }

.frame-item { height: 2.188rem; width: 2.188rem; position: relative; z-index: 3; }

.frame-parent { width: 20.688rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-between; max-width: 100%; gap: 1.25rem; }

.check-your-email, .the-link-has { align-self: stretch; position: relative; z-index: 3; }

.the-link-has { margin: 0; font-size: inherit; font-weight: 900; font-family: inherit; }

.check-your-email { font-size: 0.875rem; font-weight: 500; color: var(--text-color); }

.the-link-has-been-sent-to-your-parent { flex: 1; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; gap: 0.562rem; max-width: 100%; }

.frame-wrapper, .rectangle-parent { display: flex; box-sizing: border-box; max-width: 100%; }

.frame-wrapper { align-self: stretch; flex-direction: row; align-items: flex-start; justify-content: flex-end; padding: 0 3.062rem 0 3.312rem; }

.rectangle-parent { width: 28.75rem; box-shadow: var(--box-shadow); border-radius: var(--border-radius); background-color: var(--background-color); flex-direction: column; align-items: flex-end; justify-content: flex-start; padding: 0.687rem 0.687rem 2.625rem; gap: 2rem; z-index: 2; font-size: 1.563rem; color: var(--text-color-dark); }

.login-reset-message-box { width: 100%; position: relative; background-color: var(--background-overlay); overflow: hidden; display: flex; flex-direction: row; align-items: flex-start; justify-content: center; padding: 18.625rem 1.25rem; box-sizing: border-box; line-height: normal; letter-spacing: normal; text-align: center; font-size: 1.25rem; color: var(--font-color); font-family: Lato; }

@media screen and (max-width: 450px) { .send { font-size: 1rem; } .frame-parent { flex-wrap: wrap; } .the-link-has { font-size: 1.25rem; } .frame-wrapper { padding-left: 1.25rem; padding-right: 1.25rem; box-sizing: border-box; } .rectangle-parent { gap: 1rem; padding-top: 1.25rem; padding-bottom: 1.688rem; box-sizing: border-box; } }

  </style>
  <body>
    <div class="login-reset-message-box">
      <div class="login-reset-message-box-child"></div>
      <div class="send">Send</div>
      <div class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="frame-parent">
          <div class="sent-email-img-1-wrapper">
            <img
              class="sent-email-img-1-icon"
              loading="lazy"
              alt=""
              src="images/msg-box.svg"
            />
          </div>
          <img
            class="frame-item"
            loading="lazy"
            alt=""
            src="images/X.svg"
          />
        </div>
        <div class="frame-wrapper">
          <div class="the-link-has-been-sent-to-your-parent">
            <h2 class="the-link-has">
              The link has been sent to your email address
            </h2>
            <div class="check-your-email">
              Check your email address to reset your password.
            </div>
          </div>
        </div>
      </div>
    </div>