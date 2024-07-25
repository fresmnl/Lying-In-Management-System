<?php include '../nav-side-bar/nav-side.php'; ?>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800&display=swap"
/>
<style>
  :root { --color-background-light: #edf1f6; --color-primary: #00acce; --color-primary-hover: #1ac7e8; --color-secondary: #00c8d2; --color-tertiary: #00adb8; --color-text-dark: #004268; --color-text-light: #fdfdfd; --color-text-muted: rgba(0, 66, 104, 0.6); --color-background-muted: rgba(253, 253, 253, 0.7); --color-background-light-hover: #e3e3e3; } .dashboard { text-decoration: none; position: relative; font-weight: 600; color: inherit; display: inline-block; min-width: 6.188rem; } .login-form-container-child { align-self: stretch; height: 39rem; position: relative; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; background-color: var(--color-background-light); display: none; } .facility-account-child { height: 4.813rem; width: 44.75rem; position: relative; border-radius: 8px 8px 0 0; background-color: var(--color-primary); display: none; max-width: 100%; } .create-an-account { position: relative; font-size: 1.563rem; font-family: Lato; color: var(--color-text-light); text-align: center; z-index: 2; } .facility-account { cursor: pointer; border: 0; padding: 1.5rem 1.25rem 1.437rem 1.625rem; background-color: var(--color-primary); align-self: stretch; border-radius: 8px 8px 0 0; display: flex; flex-direction: row; align-items: flex-start; justify-content: center; box-sizing: border-box; max-width: 100%; z-index: 1; } .facility-account:hover { background-color: var(--color-primary-hover); } .username { width: 7.75rem; position: relative; font-size: 1.125rem; display: inline-block; font-family: Lato; color: var(--color-text-dark); text-align: left; z-index: 1; } .example-labels-child { height: 3.125rem; width: 39.125rem; position: relative; border-radius: 10px; background-color: var(--color-background-muted); border: 1.5px solid var(--color-secondary); box-sizing: border-box; display: none; max-width: 100%; } .example { width: 8.875rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--color-text-muted); text-align: left; display: inline-block; padding: 0; z-index: 2; } .example-labels { align-self: stretch; border-radius: 10px; background-color: var(--color-background-muted); border: 1.5px solid var(--color-secondary); box-sizing: border-box; flex-direction: row; padding: 0.75rem 1.187rem; z-index: 1; } .credentials, .example-labels, .input-fields { display: flex; align-items: flex-start; justify-content: flex-start; max-width: 100%; } .credentials { flex: 1; flex-direction: column; gap: 0.562rem; } .input-fields { width: 43.625rem; flex-direction: row; padding: 0 2.25rem 1.25rem; box-sizing: border-box; } .password { width: 7.75rem; position: relative; font-size: 1.125rem; display: inline-block; font-family: Lato; color: var(--color-text-dark); text-align: left; z-index: 1; } .frame-child { height: 3.125rem; width: 39.125rem; position: relative; border-radius: 10px; background-color: var(--color-background-muted); border: 1.5px solid var(--color-secondary); box-sizing: border-box; display: none; max-width: 100%; } .enter-a-strong { width: 19.025rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--color-text-muted); text-align: left; display: inline-block; padding: 0; z-index: 1; } .rectangle-parent { align-self: stretch; border-radius: 10px; background-color: var(--color-background-muted); border: 1.5px solid var(--color-secondary); box-sizing: border-box; flex-direction: row; padding: 0.75rem 1.562rem; z-index: 1; } .input-fields1, .password-parent, .rectangle-parent { display: flex; align-items: flex-start; justify-content: flex-start; max-width: 100%; } .password-parent { flex: 1; flex-direction: column; gap: 0.562rem; } .input-fields1 { width: 43.625rem; flex-direction: row; padding: 0 2.25rem 1.25rem; box-sizing: border-box; } .confirm-password { width: 12.938rem; position: relative; font-size: 1.125rem; display: inline-block; font-family: Lato; color: var(--color-text-dark); text-align: left; z-index: 1; } .frame-item { height: 3.125rem; width: 39.125rem; position: relative; border-radius: 10px; background-color: var(--color-background-muted); border: 1.5px solid var(--color-secondary); box-sizing: border-box; display: none; max-width: 100%; } .re-enter-a-password { width: 14.256rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--color-text-muted); text-align: left; display: inline-block; padding: 0; z-index: 2; } .rectangle-group { align-self: stretch; border-radius: 10px; background-color: var(--color-background-muted); border: 1.5px solid var(--color-secondary); box-sizing: border-box; flex-direction: row; padding: 0.75rem 1.187rem; z-index: 1; } .confirm-password-parent, .input-fields2, .rectangle-group { display: flex; align-items: flex-start; justify-content: flex-start; max-width: 100%; } .confirm-password-parent { flex: 1; flex-direction: column; gap: 0.562rem; } .input-fields2 { width: 43.625rem; flex-direction: row; padding: 0 2.25rem 2.312rem; box-sizing: border-box; } .frame-inner { height: 3.125rem; width: 9rem; position: relative; border-radius: 10px; background-color: var(--color-text-light); border: 2px solid var(--color-secondary); box-sizing: border-box; display: none; } .back { flex: 1; position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--color-secondary); text-align: center; z-index: 1; } .rectangle-container { cursor: pointer; border: 2px solid var(--color-secondary); padding: 0.625rem 2.25rem; background-color: var(--color-text-light); width: 9rem; border-radius: 10px; box-sizing: border-box; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; z-index: 1; } .group-button:hover, .rectangle-container:hover, .rectangle-div { background-color: var(--color-background-light-hover); border: 2px solid var(--color-tertiary); box-sizing: border-box; } .rectangle-div { height: 3.125rem; width: 9rem; position: relative; border-radius: 10px; background-color: var(--color-text-light); border: 2px solid var(--color-secondary); display: none; } .clear { flex: 1; position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--color-secondary); text-align: center; z-index: 1; } .group-button { cursor: pointer; border: 2px solid var(--color-secondary); padding: 0.625rem 2.25rem; background-color: var(--color-text-light); flex: 0.8947; border-radius: 10px; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; z-index: 1; } .frame-child1 { height: 3.125rem; width: 9rem; position: relative; border-radius: 10px; background-color: var(--color-secondary); display: none; } .create { flex: 1; position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--color-text-light); text-align: center; z-index: 1; } .rectangle-parent1 { cursor: pointer; border: 0; padding: 0.812rem 2.125rem; background-color: var(--color-secondary); flex: 1; border-radius: 10px; justify-content: flex-start; z-index: 1; } .rectangle-parent1:hover { background-color: var(--color-tertiary); } .actions, .form-actions, .rectangle-parent1 { display: flex; flex-direction: row; align-items: flex-start; } .form-actions { width: 19.5rem; justify-content: flex-start; gap: 1.5rem; } .actions { flex: 1; justify-content: space-between; max-width: 100%; gap: 1.25rem; } .login-form-container, .navigation { justify-content: flex-start; max-width: 100%; } .navigation { width: 43.625rem; display: flex; flex-direction: row; align-items: flex-start; padding: 0 2.25rem; box-sizing: border-box; } .login-form-container { margin: 0; width: 44.75rem; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; background-color: var(--color-background-light); flex-direction: column; padding: 0.25rem 0 2.312rem; gap: 2.125rem; position: absolute; left: 36rem; top: 7rem; } .admin-registration, .content, .login-form-container { display: flex; align-items: flex-start; box-sizing: border-box; } .content { align-self: stretch; flex-direction: row; justify-content: center; padding: 0 0 0 11.5rem; max-width: 100%; } .admin-registration { width: 100%; position: relative; background-color: var(--color-text-light); overflow: hidden; flex-direction: column; justify-content: flex-start; padding: 5.937rem 3.75rem 10.625rem; gap: 4.312rem; line-height: normal; letter-spacing: normal; text-align: left; font-size: 1.25rem; color: var(--color-text-light); font-family: Lato; } @media screen and (max-width: 900px) { .actions { flex-wrap: wrap; } .login-form-container { gap: 1.063rem; } .admin-registration, .content { padding-left: 5.75rem; box-sizing: border-box; } .admin-registration { gap: 2.125rem; padding-left: 1.875rem; padding-right: 1.875rem; } } @media screen and (max-width: 700px) { .login-form-container { padding-top: 1.25rem; padding-bottom: 1.5rem; box-sizing: border-box; } } @media screen and (max-width: 450px) { .dashboard { font-size: 1rem; } .create-an-account { font-size: 1.25rem; } .back, .clear, .create { font-size: 1rem; } .content { padding-left: 1.25rem; box-sizing: border-box; } .admin-registration { gap: 1.063rem; } }
</style>
      <section class="content">
        <form class="login-form-container">
          <div class="login-form-container-child"></div>
          <button class="facility-account">
            <div class="facility-account-child"></div>
            <b class="create-an-account"
              >Create an Account for Health Facility</b
            >
          </button>
          <div class="input-fields">
            <div class="credentials">
              <b class="username">Username</b>
              <div class="example-labels">
                <div class="example-labels-child"></div>
                <input class="example" placeholder="@example" type="text" />
              </div>
            </div>
          </div>
          <div class="input-fields1">
            <div class="password-parent">
              <b class="password">Password</b>
              <div class="rectangle-parent">
                <div class="frame-child"></div>
                <input
                  class="enter-a-strong"
                  placeholder="Enter a strong password"
                  type="text"
                />
              </div>
            </div>
          </div>
          <div class="input-fields2">
            <div class="confirm-password-parent">
              <b class="confirm-password">Confirm Password</b>
              <div class="rectangle-group">
                <div class="frame-item"></div>
                <input
                  class="re-enter-a-password"
                  placeholder="Re-enter a password"
                  type="text"
                />
              </div>
            </div>
          </div>
          <div class="navigation">
            <div class="actions">
              <button class="rectangle-container">
                <div class="frame-inner"></div>
                <a class="back" href="Registration.php" style="text-decoration: none;">Back</a>
              </button>
              <div class="form-actions">
                <button class="group-button">
                  <div class="rectangle-div"></div>
                  <div class="clear">Clear</div>
                </button>
                <button class="rectangle-parent1">
                  <div class="frame-child1"></div>
                  <div class="create">Create</div>
                </button>
              </div>
            </div>
          </div>
        </form>
      </section>