<?php include '../nav-side-bar/nav-side.php'; ?>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;700;800&display=swap"
    />
    <style>
      :root { --background-light: #edf1f6; --background-primary: #00acce; --background-hover: #1ac7e8; --background-secondary: rgba(253, 253, 253, 0.7); --background-tertiary: #fdfdfd; --border-color: #00c8d2; --border-hover: #00adb8; --text-color: #004268; --text-light: rgba(0, 66, 104, 0.6); --text-white: #fdfdfd; --text-accent: #00c8d2; --text-accent-light: #00adb8; --text-dark: #000000; } .frame-child { align-self: stretch; height: 38.75rem; position: relative; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: var(--background-light); display: none; } .health-facility-form-child { height: 4.813rem; width: 44.75rem; position: relative; border-radius: 8px 8px 0 0; background-color: var(--background-primary); display: none; max-width: 100%; } .create-an-account { position: relative; font-size: 1.563rem; font-family: Lato; color: var(--text-white); text-align: center; z-index: 2; } .health-facility-form { cursor: pointer; border: 0; padding: 1.5rem 1.25rem 1.437rem 1.75rem; background-color: var(--background-primary); align-self: stretch; border-radius: 8px 8px 0 0; display: flex; flex-direction: row; align-items: flex-start; justify-content: center; box-sizing: border-box; max-width: 100%; z-index: 1; } .health-facility-form:hover { background-color: var(--background-hover); } .name-of-health { width: 13.813rem; position: relative; font-size: 1.125rem; display: inline-block; font-family: Lato; color: var(--text-color); text-align: left; z-index: 1; } .facility-name-instruction-child { height: 3.125rem; width: 39.125rem; position: relative; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); box-sizing: border-box; display: none; max-width: 100%; } .enter-the-complete { width: 13.5rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--text-light); text-align: left; display: inline-block; padding: 0; z-index: 2; } .facility-name-instruction { align-self: stretch; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); box-sizing: border-box; flex-direction: row; justify-content: flex-start; padding: 0.75rem 1.187rem; z-index: 1; } .facility-name-details, .facility-name-field, .facility-name-instruction { display: flex; align-items: flex-start; max-width: 100%; } .facility-name-field { flex: 1; flex-direction: column; justify-content: flex-start; gap: 0.562rem; } .facility-name-details { align-self: stretch; flex-direction: row; justify-content: flex-end; padding: 0 3.062rem 1.25rem 2.562rem; box-sizing: border-box; } .citymunicipality { flex: 1; position: relative; font-size: 1.125rem; font-family: Lato; color: var(--text-color); text-align: left; z-index: 1; } .city-municipality-field { width: 10.563rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0 0.062rem; box-sizing: border-box; } .frame-item { height: 3.125rem; width: 18.875rem; position: relative; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); box-sizing: border-box; display: none; } .enter-the-citymunicipality { width: 15.188rem; position: relative; font-size: 1.125rem; font-weight: 500; font-family: Lato; color: var(--text-light); text-align: left; display: inline-block; flex-shrink: 0; z-index: 1; } .city-municipality-input, .rectangle-group { align-self: stretch; display: flex; align-items: flex-start; justify-content: flex-start; } .rectangle-group { cursor: pointer; border: 1.5px solid var(--border-color); padding: 0.75rem; background-color: var(--background-secondary); border-radius: 8px; flex-direction: row; white-space: nowrap; z-index: 1; } .rectangle-group:hover { background-color: rgba(227, 227, 227, 0.7); border: 1.5px solid var(--text-accent-light); box-sizing: border-box; } .city-municipality-input { flex-direction: column; gap: 0.562rem; } .landline-no { width: 7.75rem; position: relative; font-size: 1.125rem; display: inline-block; font-family: Lato; color: var(--text-color); text-align: left; z-index: 1; } .frame-inner { height: 3.125rem; width: 18.875rem; position: relative; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); box-sizing: border-box; display: none; } .pxxx-yyyy { width: 9.181rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--text-light); text-align: left; display: inline-block; padding: 0; z-index: 1; } .rectangle-container { align-self: stretch; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0.75rem; z-index: 1; } .city-municipality-input-parent, .landline-no-parent { display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; } .landline-no-parent { align-self: stretch; gap: 0.562rem; } .city-municipality-input-parent { flex: 1; gap: 3.375rem; min-width: 12.25rem; } .email-address { flex: 1; position: relative; font-size: 1.125rem; font-family: Lato; color: var(--text-color); text-align: left; z-index: 1; } .email-address-wrapper { width: 8.125rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0 0.187rem; box-sizing: border-box; } .rectangle-div { height: 3.125rem; width: 18.875rem; position: relative; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); box-sizing: border-box; display: none; } .examplegmailcom { width: 14.125rem; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; position: relative; color: var(--text-light); text-align: left; display: inline-block; white-space: nowrap; padding: 0; z-index: 1; } .frame-container, .group-div { align-self: stretch; display: flex; align-items: flex-start; justify-content: flex-start; } .group-div { border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); flex-direction: row; padding: 0.75rem; z-index: 1; } .frame-container { flex-direction: column; gap: 0.562rem; } .mobile-no { flex: 1; position: relative; font-size: 1.125rem; font-family: Lato; color: var(--text-color); text-align: left; z-index: 1; } .mobile-no-wrapper { width: 8.125rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0 0.187rem; box-sizing: border-box; } .frame-child1 { height: 3.125rem; width: 18.875rem; position: relative; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); box-sizing: border-box; display: none; } .xxx-yyy-zzzz { width: 100%; border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; flex: 1; position: relative; color: var(--text-light); text-align: left; display: inline-block; min-width: 10.625rem; padding: 0; z-index: 1; } .frame-div, .frame-group, .rectangle-parent1 { display: flex; align-items: flex-start; justify-content: flex-start; } .rectangle-parent1 { align-self: stretch; border-radius: 8px; background-color: var(--background-secondary); border: 1.5px solid var(--border-color); flex-direction: row; padding: 0.75rem 0.437rem 0.75rem 0.75rem; z-index: 1; } .frame-div, .frame-group { flex-direction: column; } .frame-div { align-self: stretch; gap: 0.562rem; } .frame-group { flex: 1; gap: 3.375rem; min-width: 12.25rem; } .frame-parent, .frame-wrapper { display: flex; flex-direction: row; align-items: flex-start; max-width: 100%; } .frame-parent { flex: 1; flex-wrap: wrap; justify-content: flex-start; gap: 1.375rem; } .frame-wrapper { align-self: stretch; justify-content: flex-end; padding: 0 3.062rem 2.312rem 2.562rem; box-sizing: border-box; } .frame-child2 { height: 3.125rem; width: 9rem; position: relative; border-radius: 8px; background-color: var(--text-tertiary); border: 2px solid var(--border-color); box-sizing: border-box; display: none; } .clear { flex: 1; position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--border-color); text-align: center; z-index: 1; } .group-button { cursor: pointer; border: 2px solid var(--border-color); padding: 0.625rem 2.25rem; background-color: var(--text-tertiary); flex: 0.8947; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; min-width: 5.875rem; z-index: 1; } .group-button:hover { background-color: #e3e3e3; border: 2px solid var(--text-accent-light); box-sizing: border-box; } .frame-child3 { height: 3.125rem; width: 9rem; position: relative; border-radius: 8px; background-color: var(--border-color); display: none; } .next { flex: 1; position: relative; font-size: 1.25rem; font-weight: 800; font-family: Lato; color: var(--text-white); text-align: center; z-index: 1; } .clear-next-buttons, .rectangle-parent2 { flex: 1; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; } .rectangle-parent2 { cursor: pointer; border: 0; padding: 0.812rem 2.125rem; background-color: var(--border-color); border-radius: 8px; box-sizing: border-box; min-width: 5.875rem; z-index: 1; } .rectangle-parent2:hover { background-color: var(--text-accent-light); } .clear-next-buttons { flex-wrap: wrap; gap: 1.5rem; } .clear-next-buttons-wrapper, .rectangle-parent { width: 25.625rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-end; padding: 0 3.062rem; box-sizing: border-box; max-width: 100%; } .rectangle-parent { margin: 0; width: 44.75rem; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: var(--background-light); flex-direction: column; align-items: flex-end; justify-content: flex-start; padding: 0 0 2.312rem; gap: 2.125rem; position: absolute; top: 7rem; left: 36rem; } .admin-registration { width: 100%; position: relative; background-color: var(--text-tertiary); overflow: hidden; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-end; padding: 12rem 19.125rem 10.625rem; box-sizing: border-box; line-height: normal; letter-spacing: normal; } @media screen and (max-width: 1200px) { .admin-registration { padding-left: 9.563rem; padding-right: 9.563rem; box-sizing: border-box; } } @media screen and (max-width: 750px) { .facility-name-details, .frame-wrapper { padding-right: 1.5rem; box-sizing: border-box; } .rectangle-parent { gap: 1.063rem; } .admin-registration { padding-left: 4.75rem; padding-right: 4.75rem; box-sizing: border-box; } } @media screen and (max-width: 450px) { .create-an-account { font-size: 1.25rem; } .city-municipality-input-parent, .frame-group { gap: 1.688rem; } .clear { font-size: 1rem; } .group-button { flex: 1; } .next { font-size: 1rem; } .admin-registration, .clear-next-buttons-wrapper { padding-left: 1.25rem; padding-right: 1.25rem; box-sizing: border-box; } }

    </style>
      <form class="rectangle-parent">
        <div class="frame-child"></div>
        <button class="health-facility-form">
          <div class="health-facility-form-child"></div>
          <b class="create-an-account">Create an Account for Health Facility</b>
        </button>
        <div class="facility-name-details">
          <div class="facility-name-field">
            <b class="name-of-health">Name of Health Facility</b>
            <div class="facility-name-instruction">
              <div class="facility-name-instruction-child"></div>
              <input
                class="enter-the-complete"
                placeholder="Enter the complete name"
                type="text"
              />
            </div>
          </div>
        </div>
        <div class="frame-wrapper">
          <div class="frame-parent">
            <div class="city-municipality-input-parent">
              <div class="city-municipality-input">
                <div class="city-municipality-field">
                  <b class="citymunicipality">City/Municipality</b>
                </div>
                <div class="rectangle-container">
                  <div class="frame-inner"></div>
                  <input
                    class="examplegmailcom"
                    placeholder="Enter the City/Municipality"
                    type="text"
                  />
                </div>
              </div>
              <div class="landline-no-parent">
                <b class="landline-no">Landline No,</b>
                <div class="rectangle-container">
                  <div class="frame-inner"></div>
                  <input
                    class="pxxx-yyyy"
                    placeholder="PXXX-YYYY"
                    type="text"
                  />
                </div>
              </div>
            </div>
            <div class="frame-group">
              <div class="frame-container">
                <div class="email-address-wrapper">
                  <b class="email-address">Email Address</b>
                </div>
                <div class="group-div">
                  <div class="rectangle-div"></div>
                  <input
                    class="examplegmailcom"
                    placeholder="example@gmail.com"
                    type="text"
                  />
                </div>
              </div>
              <div class="frame-div">
                <div class="mobile-no-wrapper">
                  <b class="mobile-no">Mobile No.</b>
                </div>
                <div class="rectangle-parent1">
                  <div class="frame-child1"></div>
                  <input
                    class="xxx-yyy-zzzz"
                    placeholder="+63 (XXX) YYY ZZZZ"
                    type="text"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear-next-buttons-wrapper">
          <div class="clear-next-buttons">
            <button class="group-button">
              <div class="frame-child2"></div>
              <div class="clear">Clear</div>
            </button>
            <button class="rectangle-parent2">
              <div class="frame-child3"></div>
              <a class="next" href="Registration-Next.php" style="text-decoration: none;">Next</A>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>