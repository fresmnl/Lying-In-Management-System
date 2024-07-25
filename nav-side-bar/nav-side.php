<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800&display=swap"
    />
    <title>Dashboard</title>
  </head>
  <style>
    body{ margin: 0;}.proj-navigation-child{width:16.938rem;height:61.375rem;position:relative;background-color:#00acce;display:none;}.proj-logo-white-1{height:3.125rem;width:12.5rem;position:relative;object-fit:cover;z-index:2;}.proj-logo-white-1-wrapper{display:flex;flex-direction:row;align-items:flex-start;justify-content:flex-end;padding:0 1.625rem 0 0.75rem;}.proj-dashboard,.proj-free-icon-1-1{position:relative;z-index:2;}.proj-free-icon-1-1{height:1.563rem;width:1.563rem;overflow:hidden;flex-shrink:0;min-height:1.563rem;}.proj-dashboard{text-decoration:none;font-weight:600;color:inherit;display:inline-block;min-width:6.188rem;}.proj-free-icon-1-1-parent,.proj-navigation-inner{display:flex;flex-direction:row;align-items:flex-start;justify-content:flex-start;}.proj-free-icon-1-1-parent{gap:0.875rem;}.proj-navigation-inner{align-self:stretch;padding:0 0.312rem;}.proj-empty-icon,.proj-registration{position:relative;z-index:2;}.proj-empty-icon{height:1.75rem;width:1.75rem;overflow:hidden;flex-shrink:0;min-height:1.75rem;}.proj-registration{font-weight:600;display:inline-block;min-width:6.938rem;}.proj-content-left,.proj-empty-parent,.proj-registration-wrapper{display:flex;align-items:flex-start;justify-content:flex-start;}.proj-registration-wrapper{flex-direction:column;padding:0.125rem 0 0;}.proj-content-left,.proj-empty-parent{flex-direction:row;}.proj-empty-parent{gap:0.812rem;}.proj-content-left{align-self:stretch;padding:0 0.187rem;}.proj-icon,.proj-records{position:relative;z-index:2;}.proj-icon{height:1.75rem;width:1.75rem;overflow:hidden;flex-shrink:0;min-height:1.75rem;}.proj-records{font-weight:600;display:inline-block;min-width:4.625rem;}.proj-parent,.proj-settings-title{display:flex;align-items:flex-start;justify-content:flex-start;}.proj-settings-title{flex-direction:column;padding:0.125rem 0 0;}.proj-parent{flex-direction:row;gap:0.812rem;}.proj-layer-1-icon{width:1.375rem;height:1.375rem;position:relative;overflow:hidden;flex-shrink:0;z-index:2;}.proj-settings-layer{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-end;padding:0 0 0.125rem;}.proj-frame-parent{align-self:stretch;display:flex;flex-direction:row;align-items:flex-end;justify-content:space-between;padding:0 0 0 0.187rem;gap:1.25rem;}.proj-input-icon{width:2.188rem;height:2.188rem;position:relative;overflow:hidden;flex-shrink:0;z-index:2;}.proj-settings-top{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;padding:0 0.562rem 0 0;}.proj-account-settings{align-self:stretch;position:relative;font-weight:600;z-index:2;}.proj-account-settings-wrapper{flex:1;display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;padding:0.312rem 0 0;}.proj-layer-1-icon1{width:1.375rem;height:1.375rem;position:relative;overflow:hidden;flex-shrink:0;z-index:2;}.proj-layer-1-wrapper{flex-direction:column;align-items:flex-start;padding:0.437rem 0 0;}.proj-layer-1-wrapper,.proj-navigation,.proj-settings-top-parent{display:flex;justify-content:flex-start;}.proj-settings-top-parent{align-self:stretch;flex-direction:row;align-items:flex-start;}.proj-navigation{width:16.938rem;background-color:#00acce;flex-direction:column;align-items:flex-end;padding:0.562rem 1.062rem 41.437rem 1rem;box-sizing:border-box;gap:2.25rem;z-index:1;}.proj-content-child{height:4.25rem;width:77.563rem;position:relative;box-shadow:0 4px 4px rgba(0,0,0,0.25);background-color:#fdfdfd;display:none;max-width:100%;}.proj-admin{font-weight:800;color:#00c8d2;}.proj-have-a-nice,.proj-welcome-back-admin-container{position:relative;white-space:nowrap;z-index:1;}.proj-welcome-back-admin-container{text-decoration:none;color:inherit;}.proj-have-a-nice{font-size:0.75rem;font-weight:500;}.proj-content-inner,.proj-welcome-back-admin-parent{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;}.proj-welcome-back-admin-parent{align-self:stretch;gap:0.062rem;}.proj-content-inner{width:14.813rem;padding:0.25rem 0 0;box-sizing:border-box;}.proj-frame-child{height:2.813rem;width:8rem;position:relative;border-radius:8px;background-color:#00c8d2;display:none;}.proj-icons{width:1.263rem;height:1.3rem;position:relative;z-index:1;}.proj-icons-wrapper{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;padding:0.087rem 0 0;}.proj-log-out{text-decoration:none;position:relative;font-size:1.125rem;font-weight:600;font-family:Lato;color:#fdfdfd;text-align:left;display:inline-block;min-width:3.75rem;white-space:nowrap;z-index:1;}.proj-content,.proj-nav-side-bar,.proj-logout-btn{display:flex;flex-direction:row;align-items:flex-start;}.proj-logout-btn{cursor:pointer;border:0;padding:0.687rem 0.937rem 0.737rem;background-color:#00c8d2;width:8rem;border-radius:8px;justify-content:flex-start;box-sizing:border-box;gap:0.706rem;z-index:1;}.proj-content,.proj-nav-side-bar{background-color:#fdfdfd;font-family:Lato;}.proj-content{flex:1;box-shadow:0 4px 4px rgba(0,0,0,0.25);justify-content:space-between;padding:0.687rem 6.625rem 0.75rem 2.187rem;box-sizing:border-box;top:0;z-index:99;position:sticky;max-width:100%;gap:1.25rem;text-align:center;font-size:1.125rem;color:#004168;}.proj-nav-side-bar{width:100%;position:relative;overflow:hidden;justify-content:flex-start;line-height:normal;letter-spacing:normal;text-align:left;font-size:1.25rem;color:#fdfdfd;}@media screen and (max-width:1200px){.proj-content{padding-right:3.313rem;box-sizing:border-box;}}@media screen and (max-width:1050px){.proj-navigation{padding-top:1.25rem;padding-bottom:26.938rem;box-sizing:border-box;}}@media screen and (max-width:750px){.proj-content{padding-right:1.625rem;box-sizing:border-box;}}@media screen and (max-width:450px){.proj-account-settings,.proj-dashboard,.proj-records,.proj-registration{font-size:1rem;}.proj-navigation{gap:1.125rem;padding-bottom:17.5rem;box-sizing:border-box;}}
  </style>
  <body>
    <div class="proj-nav-side-bar">
      <div class="proj-navigation">
        <div class="proj-navigation-child"></div>
        <div class="proj-logo-white-1-wrapper">
          <img
            class="proj-logo-white-1"
            loading="lazy"
            alt=""
            src="logo.svg"
          />
        </div>
        <div class="proj-navigation-inner">
          <div class="proj-free-icon-1-1-parent">
            <img
              class="proj-free-icon-1-1"
              loading="lazy"
              alt=""
              src="./public/free-icon-1-1.svg"
            />

            <a class="proj-dashboard">Dashboard</a>
          </div>
        </div>
        <div class="proj-content-left">
          <div class="proj-empty-parent">
            <img
              class="proj-empty-icon"
              loading="lazy"
              alt=""
              src="./public/20983018981679815074-1.svg"
            />

            <div class="proj-registration-wrapper">
              <div class="proj-registration">Registration</div>
            </div>
          </div>
        </div>
        <div class="proj-frame-parent">
          <div class="proj-parent">
            <img
              class="proj-icon"
              loading="lazy"
              alt=""
              src="./public/16186220721595341301-1.svg"
            />

            <div class="proj-settings-title">
              <div class="proj-records">Records</div>
            </div>
          </div>
          <div class="proj-settings-layer">
            <img
              class="proj-layer-1-icon"
              loading="lazy"
              alt=""
              src="./public/layer-1.svg"
            />
          </div>
        </div>
        <div class="proj-settings-top-parent">
          <div class="proj-settings-top">
            <img
              class="proj-input-icon"
              loading="lazy"
              alt=""
              src="./public/frame.svg"
            />
          </div>
          <div class="proj-account-settings-wrapper">
            <div class="proj-account-settings">Account Settings</div>
          </div>
          <div class="proj-layer-1-wrapper">
            <img class="proj-layer-1-icon1" alt="" src="./public/layer-1-1.svg" />
          </div>
        </div>
      </div>
      <header class="proj-content">
        <div class="proj-content-child"></div>
        <div class="proj-content-inner">
          <div class="proj-welcome-back-admin-parent">
            <a class="proj-welcome-back-admin-container">
              <b>Welcome Back, </b>
              <span class="proj-admin">Admin</span>
              <b>!</b>
            </a>
            <div class="proj-have-a-nice">
              Have a nice day keeping the system in check.
            </div>
          </div>
        </div>
        <button class="proj-logout-btn">
          <div class="proj-frame-child"></div>
          <div class="proj-icons-wrapper">
            <img class="proj-icons" alt="" src="./public/-icons.svg" />
          </div>
          <a class="proj-log-out">Log out</a>
        </button>
      </header>
    </div>
  </body>
</html>