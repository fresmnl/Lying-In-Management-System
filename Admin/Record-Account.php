<?php include '../nav-side-bar/nav-side.php'; ?>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;700;800&display=swap"
    />
<style>
  :root { --primary-color: #00acce; --primary-color-light: #00c8d2; --primary-color-hover: #1ac7e8; --secondary-color: #004168; --secondary-color-light: rgba(0, 66, 104, 0.6); --background-color: rgba(253, 253, 253, 0.7); --background-color-light: rgba(253, 253, 253, 0.8); --text-color-light: #fdfdfd; --separator-color: #00acce; }

.account-of-health { flex: 1; position: relative; white-space: nowrap; }

.accounts-header { width: 19.5rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0 0.062rem; box-sizing: border-box; }

.frame-child { height: 3.125rem; width: 25.188rem; position: relative; border-radius: 10px; background-color: var(--background-color-light); border: 2px solid var(--primary-color-light); box-sizing: border-box; display: none; max-width: 100%; z-index: 1; }

.layer-1-icon, .search { position: relative; flex-shrink: 0; }

.search { width: calc(100% - 57px); border: 0; outline: 0; font-weight: 500; font-family: Lato; font-size: 1.125rem; background-color: transparent; height: 1.375rem; flex: 1; color: var(--secondary-color-light); text-align: left; display: inline-block; min-width: 14.25rem; max-width: 106%; padding: 0; z-index: 1; }

.layer-1-icon { width: 1.188rem; height: 1.188rem; overflow: hidden; z-index: 2; }

.rectangle-parent, .search-and-add-inner, .search-icon { display: flex; align-items: flex-start; justify-content: flex-start; }

.search-icon { flex-direction: column; padding: 0.125rem 0 0; margin-left: -2.438rem; }

.rectangle-parent, .search-and-add-inner { box-sizing: border-box; max-width: 100%; }

.rectangle-parent { align-self: stretch; border-radius: 10px; background-color: var(--background-color-light); border: 2px solid var(--primary-color-light); flex-direction: row; padding: 0.625rem 1rem 0.75rem 1.375rem; }

.search-and-add-inner { flex: 1; flex-direction: column; padding: 0.062rem 0 0; }

.frame-item { height: 3.125rem; width: 14.5rem; position: relative; border-radius: 10px; background-color: var(--primary-color-light); display: none; }

.add-new-account { flex: 1; position: relative; font-weight: 800; white-space: pre-wrap; flex-shrink: 0; z-index: 1; }

.rectangle-group { width: 14.563rem; border-radius: 10px; background-color: var(--primary-color-light); display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0.75rem 0 0.875rem; box-sizing: border-box; white-space: nowrap; }

.accounts-header-parent, .content, .search-and-add { display: flex; align-items: flex-start; max-width: 100%; }

.search-and-add { align-self: stretch; flex-direction: row; justify-content: flex-start; gap: 0.625rem; text-align: center; font-size: 1.25rem; color: var(--text-color-light); }

.accounts-header-parent, .content { flex-direction: column; }

.accounts-header-parent { align-self: stretch; justify-content: flex-start; gap: 1rem; }

.content { width: 40.375rem; justify-content: flex-end; padding: 0 0 0.187rem; box-sizing: border-box; }

.count-value, .number-of-accounts { position: relative; white-space: nowrap; }

.number-of-accounts { text-decoration: none; align-self: stretch; font-weight: 700; color: inherit; }

.count-value { width: 10.25rem; font-size: 2.813rem; font-weight: 800; color: var(--separator-color); text-align: center; display: inline-block; }

.accounts-count, .main { width: 11.188rem; display: flex; flex-direction: column; align-items: flex-end; justify-content: flex-start; gap: 0.5rem; text-align: right; font-size: 1.125rem; }

.main { width: 67.563rem; flex-direction: row; justify-content: space-between; gap: 1.25rem; max-width: 100%; text-align: left; font-size: 1.375rem; color: var(--secondary-color); font-family: Lato; }

.facility-account-child, .login-form-container-child { width: 67.5rem; position: relative; border: 1.5px solid var(--separator-color); box-sizing: border-box; display: none; max-width: 100%; }

.login-form-container-child { height: 43.063rem; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: rgba(0, 172, 206, 0.05); }

.facility-account-child { height: 3.125rem; border-radius: 8px 8px 0 0; background-color: rgba(0, 172, 206, 0.4); }

.name-of-rhu, .no { position: relative; display: inline-block; z-index: 2; }

.no { width: 1.813rem; min-width: 1.813rem; }

.name-of-rhu { flex: 1; min-width: 7rem; }

.facility-name { width: 10.438rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; gap: 1.625rem; }

.date-created, .username { position: relative; display: inline-block; min-width: 6.813rem; z-index: 2; }

.username { min-width: 5.188rem; }

.credentials-fields { width: 8.75rem; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; }

.password { position: relative; display: inline-block; min-width: 4.938rem; z-index: 2; }

.credentials-fields1 { width: 7.313rem; display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; padding: 0 1.25rem 0 0; box-sizing: border-box; text-align: left; }

.action, .status { position: relative; display: inline-block; min-width: 3.25rem; z-index: 2; }

.action { min-width: 3.375rem; }

.status-and-action { flex: 1; display: flex; flex-direction: row; align-items: flex-start; justify-content: space-between; min-width: 6.188rem; gap: 1.25rem; text-align: left; }

.credentials, .facility-account, .login-form-container { display: flex; flex-direction: row; align-items: flex-start; max-width: 100%; }

.credentials { width: 38.25rem; justify-content: flex-start; gap: 1.937rem; }

.facility-account, .login-form-container { border: 1.5px solid var(--separator-color); box-sizing: border-box; }

.facility-account { flex: 1; border-radius: 8px 8px 0 0; background-color: rgba(0, 172, 206, 0.4); justify-content: space-between; padding: 0.875rem 3.437rem 0.625rem 0.812rem; gap: 1.25rem; z-index: 1; }

.login-form-container { align-self: stretch; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 8px; background-color: rgba(0, 172, 206, 0.05); justify-content: flex-start; padding: 0 0 39.812rem; }

.showing-1- { position: relative; font-weight: 500; white-space: pre-wrap; }

.pagination { display: flex; flex-direction: column; align-items: flex-start; justify-content: flex-start; padding: 0.375rem 0 0; }

.navigation-buttons-child { position: absolute; top: 0; left: 0; background-color: rgba(0, 172, 206, 0.05); border-top: 1.5px solid var(--separator-color); border-bottom: 1.5px solid var(--separator-color); border-left: 1.5px solid var(--separator-color); box-sizing: border-box; width: 100%; height: 100%; display: none; }

.vector-icon { position: absolute; top: 0.625rem; left: 0.688rem; width: 0.5rem; height: 0.75rem; object-fit: contain; z-index: 4; }

.navigation-buttons { height: 1.875rem; width: 1.875rem; position: relative; background-color: rgba(0, 172, 206, 0.05); border-top: 1.5px solid var(--separator-color); border-bottom: 1.5px solid var(--separator-color); border-left: 1.5px solid var(--separator-color); box-sizing: border-box; z-index: 3; }

.b, .frame-inner { position: relative; }

.frame-inner { height: 1.875rem; width: 1.875rem; background-color: rgba(0, 172, 206, 0.05); border-top: 1.5px solid var(--separator-color); border-bottom: 1.5px solid var(--separator-color); border-left: 1.5px solid var(--separator-color); box-sizing: border-box; display: none; }

.b { flex: 1; z-index: 2; }

.rectangle-container { flex: 1; background-color: rgba(0, 172, 206, 0.05); border-top: 1.5px solid var(--separator-color); border-bottom: 1.5px solid var(--separator-color); border-left: 1.5px solid var(--separator-color); display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; padding: 0.312rem 0 0.25rem; z-index: 1; }

.example-labels-child { position: absolute; top: 0; left: 0; background-color: rgba(0, 172, 206, 0.05); border: 1.5px solid var(--separator-color); box-sizing: border-box; width: 100%; height: 100%; display: none; }

.vector-icon1 { position: absolute; top: 0.625rem; left: 0.688rem; width: 0.5rem; height: 0.75rem; object-fit: contain; z-index: 1; }

.example-labels { height: 1.875rem; width: 1.875rem; position: relative; background-color: rgba(0, 172, 206, 0.05); border: 1.5px solid var(--separator-color); box-sizing: border-box; }

.navigation { width: 5.625rem; display: flex; flex-direction: row; align-items: flex-start; justify-content: flex-start; text-align: center; color: var(--secondary-color); }

.table-footer, .table-header { display: flex; align-items: flex-start; font-family: Lato; }

.table-footer { align-self: stretch; flex-direction: row; justify-content: space-between; gap: 1.25rem; text-align: left; font-size: 0.875rem; color: var(--secondary-color); }

.table-header { flex: 1; flex-direction: column; justify-content: flex-start; gap: 0.937rem; max-width: 100%; text-align: center; font-size: 1.125rem; color: var(--secondary-color); }

.accounts-table, .admin-registration { display: flex; justify-content: flex-start; box-sizing: border-box; }

.accounts-table { width: 67.688rem; flex-direction: row; align-items: flex-start; padding: 0 0 0 0.062rem; max-width: 100%; }

.admin-registration { width: 100%; position: absolute; background-color: var(--background-color); overflow: hidden; flex-direction: column; align-items: center; padding: 4.062rem 1.25rem 4.187rem 1.312rem; gap: 1.25rem; line-height: normal; letter-spacing: normal; top: 2rem; left: 9rem; }

@media screen and (max-width: 1050px) { .facility-account { padding-right: 1.688rem; box-sizing: border-box; } }

@media screen and (max-width: 1000px) { .account-of-health { display: none; } .accounts-header { width: 0.125rem; } .rectangle-group { display: none; } .facility-account { flex-wrap: wrap; } }

@media screen and (max-width: 725px) { .add-new-account { display: none; } .rectangle-group { width: 0.063rem; } .credentials { flex-wrap: wrap; gap: 0.938rem; } .login-form-container { padding-bottom: 25.875rem; box-sizing: border-box; } }

@media screen and (max-width: 450px) { .table-footer { flex-wrap: wrap; } }

</style>    
<div class="admin-registration">
      <header class="main">
        <div class="content">
          <div class="accounts-header-parent">
            <div class="accounts-header">
              <b class="account-of-health">Account of Health Facilities</b>
            </div>
            <div class="search-and-add">
              <div class="search-and-add-inner">
                <div class="rectangle-parent">
                  <div class="frame-child"></div>
                  <input class="search" placeholder="Search..." type="text" />

                  <div class="search-icon">
                    <img
                      class="layer-1-icon"
                      alt=""
                      src="./public/layer-1.svg"
                    />
                  </div>
                </div>
              </div>
              <div class="rectangle-group">
                <div class="frame-item"></div>
                <div class="add-new-account">+ Add new account</div>
              </div>
            </div>
          </div>
        </div>
        <div class="accounts-count">
          <a class="number-of-accounts">Number of Accounts</a>
          <div class="count-value">25</div>
        </div>
      </header>
      <main class="accounts-table">
        <section class="table-header">
          <div class="login-form-container">
            <div class="login-form-container-child"></div>
            <div class="facility-account">
              <div class="facility-account-child"></div>
              <div class="facility-name">
                <b class="no">No.</b>
                <b class="name-of-rhu">Name of RHU</b>
              </div>
              <div class="credentials">
                <b class="date-created">Date Created</b>
                <div class="credentials-fields">
                  <b class="username">Username</b>
                </div>
                <div class="credentials-fields1">
                  <b class="password">Password</b>
                </div>
                <div class="status-and-action">
                  <b class="status">Status</b>
                  <b class="action">Action</b>
                </div>
              </div>
            </div>
          </div>
          <footer class="table-footer">
            <div class="pagination">
              <div class="showing-1-">showing 1 - 20 of 25 items</div>
            </div>
            <div class="navigation">
              <div class="navigation-buttons">
                <div class="navigation-buttons-child"></div>
                <img
                  class="vector-icon"
                  loading="lazy"
                  alt=""
                  src="./public/vector.svg"
                />
              </div>
              <div class="rectangle-container">
                <div class="frame-inner"></div>
                <b class="b">1</b>
              </div>
              <div class="example-labels">
                <div class="example-labels-child"></div>
                <img class="vector-icon1" alt="" src="./public/vector-1.svg" />
              </div>
            </div>
          </footer>
        </section>
      </main>
    </div>
  </body>
</html>