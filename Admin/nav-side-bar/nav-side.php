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
    body{ margin: 0;}.proj-navigation-child{width:16.938rem;height:61.375rem;position:relative;background-color:#00acce;display:none;}.proj-logo-white-1{height:3.125rem;width:14rem;position:relative;object-fit:cover;z-index:2;}.proj-logo-white-1-wrapper{display:flex;flex-direction:row;align-items:flex-start;justify-content:flex-end;padding:0 1.625rem 0 0.75rem;}.proj-dashboard,.proj-free-icon-1-1{position:relative;z-index:2;}.proj-free-icon-1-1{height:1.563rem;width:1.563rem;overflow:hidden;flex-shrink:0;min-height:1.563rem;}.proj-dashboard{text-decoration:none;font-weight:600;color:#00ACCE;display:inline-block;min-width:6.188rem;}.proj-free-icon-1-1-parent,.proj-navigation-inner{display:flex;flex-direction:row;align-items:flex-start;justify-content:flex-start;}.proj-free-icon-1-1-parent{gap:0.875rem;}.proj-navigation-inner{align-self:stretch;padding:0.8rem; background-color: white; border-radius: 0.5rem;}.proj-empty-icon,.proj-registration{position:relative;z-index:2;}.proj-empty-icon{height:1.75rem;width:1.75rem;overflow:hidden;flex-shrink:0;min-height:1.75rem;}.proj-registration{font-weight:600;display:inline-block;min-width:6.938rem;}.proj-content-left,.proj-empty-parent,.proj-registration-wrapper{display:flex;align-items:flex-start;justify-content:flex-start;}.proj-registration-wrapper{flex-direction:column;padding:0.125rem 0 0;}.proj-content-left,.proj-empty-parent{flex-direction:row;}.proj-empty-parent{gap:0.812rem;}.proj-content-left{align-self:stretch;padding:0 0.187rem;}.proj-icon,.proj-records,.proj-records-1{position:relative;z-index:2;} .proj-records-1{font-weight: 15px;}.proj-icon{height:1.75rem;width:1.75rem;overflow:hidden;flex-shrink:0;min-height:1.75rem;}.proj-records{font-weight:600;display:inline-block;min-width:4.625rem;}.proj-parent-1{display: inherit; width: 12rem;}.proj-parent,proj-parent-1,.proj-settings-title{display:flex;align-items:flex-start;justify-content:flex-start;}.proj-settings-title{flex-direction:column;padding:0.125rem 0 0;}.proj-parent{flex-direction:row;gap:0.812rem;}.proj-layer-1-icon{width:1.375rem;height:1.375rem;position:relative;overflow:hidden;flex-shrink:0;z-index:2;}.proj-settings-layer{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-end;padding:0 0 0.125rem;}.proj-frame-parent{align-self:stretch;display:flex;flex-direction:row;align-items:flex-end;justify-content:space-between;padding:0 0 0 0.187rem;gap:1.25rem;}.proj-input-icon{width:2.188rem;height:2.188rem;position:relative;overflow:hidden;flex-shrink:0;z-index:2;}.proj-settings-top{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;padding:0 0.562rem 0 0;}.proj-account-settings{align-self:stretch;position:relative;font-weight:600;z-index:2;}.proj-account-settings-wrapper{flex:1;display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;padding:0.312rem 0 0;}.proj-layer-1-icon1{width:1.375rem;height:1.375rem;position:relative;overflow:hidden;flex-shrink:0;z-index:2;}.proj-layer-1-wrapper{flex-direction:column;align-items:flex-start;padding:0.437rem 0 0;}.proj-layer-1-wrapper,.proj-navigation,.proj-settings-top-parent{display:flex;justify-content:flex-start;}.proj-settings-top-parent{align-self:stretch;flex-direction:row;align-items:flex-start;}.proj-navigation{width:17.938rem;background-color:#00acce;flex-direction:column;align-items:flex-end;padding:0.562rem 1.062rem 41.437rem 1rem;box-sizing:border-box;gap:2.25rem;z-index:1;}.proj-content-child{height:4.25rem;width:77.563rem;position:relative;box-shadow:0 4px 4px rgba(0,0,0,0.25);background-color:#fdfdfd;display:none;max-width:100%;}.proj-admin{font-weight:800;color:#00c8d2;}.proj-have-a-nice,.proj-welcome-back-admin-container{position:relative;white-space:nowrap;z-index:1;}.proj-welcome-back-admin-container{text-decoration:none;color:inherit;}.proj-have-a-nice{font-size:0.75rem;font-weight:500;}.proj-content-inner,.proj-welcome-back-admin-parent{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;}.proj-welcome-back-admin-parent{align-self:stretch;gap:0.062rem;}.proj-content-inner{width:14.813rem;padding:0.25rem 0 0;box-sizing:border-box;}.proj-frame-child{height:2.813rem;width:8rem;position:relative;border-radius:8px;background-color:#00c8d2;display:none;}.proj-icons{width:1.263rem;height:1.3rem;position:relative;z-index:1;}.proj-icons-wrapper{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;padding:0.087rem 0 0;}.proj-log-out{text-decoration:none;position:relative;font-size:1.125rem;font-weight:600;font-family:Lato;color:#004168;text-align:left;display:inline-block;min-width:3.75rem;white-space:nowrap;z-index:1;}.proj-content,.proj-nav-side-bar,.proj-logout-btn{display:flex;flex-direction:row;align-items:flex-start;}.proj-logout-btn{cursor:pointer;border:solid 2px #00ACCE;padding:0.687rem 0.937rem 0.737rem;background-color:#EDF1F6;width:10rem;border-radius:8px;justify-content:flex-start;box-sizing:border-box;gap:0.706rem;z-index:1;}.proj-content,.proj-nav-side-bar{background-color:#fdfdfd;font-family:Lato;}.proj-content{flex:1;box-shadow:0 4px 4px rgba(0,0,0,0.25);justify-content:space-between;padding:0.687rem 6.625rem 0.75rem 2.187rem;box-sizing:border-box;top:0;z-index:99;position:sticky;max-width:100%;gap:1.25rem;text-align:center;font-size:1.125rem;color:#004168;}.proj-nav-side-bar{width:100%;position:relative;overflow:hidden;justify-content:flex-start;line-height:normal;letter-spacing:normal;text-align:left;font-size:1.25rem;color:#fdfdfd;}
    /* Media query for screens up to 1200px wide */
    @media screen and (max-width: 1200px) {
      .proj-content {
          padding: 9px 10px 9px 8px;          
          box-sizing: border-box;
        }
        .proj-records-1,
        .proj-dashboard,
        .proj-records,
        .proj-registration,
        .proj-layer-1-icon{
            display: none;
        }
        .proj-navigation {
            gap: 1.125rem;
            padding-bottom: 450%;
            box-sizing: border-box;
            width: 6rem;
        }
       
        .proj-logo-white-1{
          position: relative;
          left: 2.1rem;
          width: 5rem;
          height: 1rem;        
        }
    }
    /* Media query for screens up to 1050px wide */
    @media screen and (max-width: 1050px) {
        .proj-navigation {
            padding-top: 1.25rem;
            padding-bottom: 26.938rem;
            box-sizing: border-box;
        }
    }
    /* Media query for screens up to 750px wide */
    @media screen and (max-width: 750px) {
      .proj-content {
          padding: 9px 10px 9px 8px;          
          box-sizing: border-box;
        }
        .proj-records-1,
        .proj-dashboard,
        .proj-records,
        .proj-registration,
        .proj-layer-1-icon{
            display: none;
        }
        .proj-navigation {
            gap: 1.125rem;
            padding-bottom: 450%;
            box-sizing: border-box;
            width: 6rem;
        }
       
        .proj-logo-white-1{
          position: relative;
          left: 2.1rem;
          width: 5rem;
          height: 1rem;        
        }
    }
    /* Media query for screens up to 450px wide */
    @media screen and (max-width: 450px) {
      .proj-content {
          padding: 9px 10px 9px 8px;          
          box-sizing: border-box;
        }
        .proj-logout-btn{
          width: 5rem;
          height: 1rem;        
        }
        .proj-icons {
          width: 15px;
          position: absolute;
          left: 273px;
          top: 13px;
        }
        .proj-log-out{
          font-size: 9px;
          position: absolute;
          left: 293px;
          top: 17px;
        }
        .proj-records-1,
        .proj-dashboard,
        .proj-records,
        .proj-registration,
        .proj-layer-1-icon{
            display: none;
        }
        .proj-navigation {
            gap: 1.125rem;
            padding-bottom: 450%;
            box-sizing: border-box;
            width: 6rem;
        }
       
        .proj-logo-white-1{
          position: relative;
          left: 2.1rem;
          width: 5rem;
          height: 1rem;        
        }
        .proj-welcome-back-admin-container,
        .proj-have-a-nice{
          font-size: 11px;
        }
      }
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
            src="nav-side-bar/images/Logo.png"
          />
        </div>
        <div class="proj-navigation-inner">
          <div class="proj-free-icon-1-1-parent">
          <svg class="proj-free-icon-1-1" fill="#00ACCE" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#a)">
              <path d="m1.3889 13.889h8.3333c0.76388 0 1.3889-0.625 1.3889-1.3889v-11.111c0-0.76389-0.625-1.3889-1.3889-1.3889h-8.3333c-0.76389 0-1.3889 0.625-1.3889 1.3889v11.111c0 0.7639 0.625 1.3889 1.3889 1.3889zm0 11.111h8.3333c0.76388 0 1.3889-0.625 1.3889-1.3889v-5.5555c0-0.7639-0.625-1.3889-1.3889-1.3889h-8.3333c-0.76389 0-1.3889 0.625-1.3889 1.3889v5.5555c0 0.7639 0.625 1.3889 1.3889 1.3889zm13.889 0h8.3333c0.7639 0 1.3889-0.625 1.3889-1.3889v-11.111c0-0.7639-0.625-1.3889-1.3889-1.3889h-8.3333c-0.7639 0-1.3889 0.625-1.3889 1.3889v11.111c0 0.7639 0.625 1.3889 1.3889 1.3889zm-1.3889-23.611v5.5556c0 0.76389 0.625 1.3889 1.3889 1.3889h8.3333c0.7639 0 1.3889-0.625 1.3889-1.3889v-5.5556c0-0.76389-0.625-1.3889-1.3889-1.3889h-8.3333c-0.7639 0-1.3889 0.625-1.3889 1.3889z" fill="#00ACCE" />
            </g>
          <defs>
            <clipPath id="a">
                <rect width="25" height="25" fill="#00ACCE" />
            </clipPath>
          </defs>
          </svg>
            <a class="proj-dashboard">Dashboard</a>
          </div>
        </div>
        <div class="proj-content-left">
          <div class="proj-empty-parent">
            <svg class="proj-empty-icon" width="28" height="28" viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.2708 24.5047L25.1334 21.3867H21.4088L23.2708 24.5047Z" />
              <path d="M25.4531 7.13831H21.0887V20.5467H25.4531V7.13831Z" />
              <path d="M25.4531 3.09625H21.0887V6.29833H25.4531V3.09625Z" />
              <path d="M18.6536 24.9037V21.3561H4.23357C3.79383 21.3566 3.37162 21.5286 3.05681 21.8356C2.74199 22.1427 2.55943 22.5604 2.54797 23V23.2601C2.55942 23.6996 2.74188 24.1172 3.05652 24.4241C3.37117 24.7311 3.79316 24.9032 4.23273 24.9037H18.6536Z" />
              <path d="M2.54797 5.02935V21.1652C3.00977 20.7476 3.61014 20.5163 4.23273 20.5162H18.6527V3.09735H4.47997C3.96773 3.09787 3.47662 3.30159 3.11442 3.66379C2.75221 4.026 2.54849 4.51711 2.54797 5.02935Z" />
            </svg>

            <div class="proj-registration-wrapper">
              <div class="proj-registration">Registration</div>
            </div>
          </div>
        </div>
        <div class="proj-frame-parent">
          <div class="proj-parent">
            <svg class="proj-icon" width="25" height="25" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.625 7H15.8375L13.825 3.9375C13.7375 3.675 13.3875 3.5 13.125 3.5H4.375C2.8875 3.5 1.75 4.6375 1.75 6.125V21.875C1.75 23.3625 2.8875 24.5 4.375 24.5H23.625C25.1125 24.5 26.25 23.3625 26.25 21.875V9.625C26.25 8.1375 25.1125 7 23.625 7ZM9.625 16.625H6.125C5.6 16.625 5.25 16.275 5.25 15.75C5.25 15.225 5.6 14.875 6.125 14.875H9.625C10.15 14.875 10.5 15.225 10.5 15.75C10.5 16.275 10.15 16.625 9.625 16.625ZM12.25 13.125H6.125C5.6 13.125 5.25 12.775 5.25 12.25C5.25 11.725 5.6 11.375 6.125 11.375H12.25C12.775 11.375 13.125 11.725 13.125 12.25C13.125 12.775 12.775 13.125 12.25 13.125ZM24.5 20.65L16.975 8.75H23.625C24.15 8.75 24.5 9.1 24.5 9.625V20.65Z" fill="#FFFFFF" />
            </svg>

            <div class="proj-settings-title">
              <div class="proj-records">Records</div>
            </div>
          </div>
          <div class="proj-settings-layer">
            <svg class="proj-layer-1-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
          </div>

        </div>
        <div class="proj-frame-parent">
          <div class="proj-parent-1">
          <svg width="30" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.75 3.5C11.884 3.5 8.75 6.63401 8.75 10.5C8.75 14.366 11.884 17.5 15.75 17.5C19.6159 17.5 22.75 14.366 22.75 10.5C22.75 6.63401 19.6159 3.5 15.75 3.5ZM7.01528 19.25C5.08051 19.25 3.5 20.8021 3.5 22.75C3.5 25.7096 4.95742 27.941 7.23623 29.3941C9.4797 30.8245 12.5042 31.5 15.75 31.5C16.469 31.5 17.1771 31.4669 17.8684 31.3997C16.543 29.7505 15.75 27.6554 15.75 25.375C15.75 23.0482 16.5757 20.9141 17.9501 19.25H7.01528ZM18.6114 24.3598C20.5153 23.8735 21.6458 21.9154 21.115 20.0235L20.8416 19.0491C21.2863 18.7073 21.7682 18.4146 22.2799 18.1785L22.8704 18.805C24.251 20.2699 26.5799 20.2711 27.962 18.8076L28.5302 18.206C29.0514 18.4518 29.541 18.7569 29.9911 19.1126L29.7703 19.8517C29.194 21.7803 30.3595 23.7965 32.3185 24.2597L32.9292 24.4041C32.967 24.7223 32.9865 25.0462 32.9865 25.3748C32.9865 25.6478 32.973 25.9175 32.9469 26.1833L32.1409 26.3891C30.237 26.8756 29.1065 28.8337 29.6373 30.7256L29.9105 31.6999C29.4658 32.0416 28.984 32.3346 28.4722 32.5707L27.8819 31.9442C26.5013 30.4792 24.1724 30.478 22.7902 31.9415L22.2215 32.5437C21.7003 32.2978 21.2109 31.993 20.7608 31.6374L20.982 30.8975C21.5583 28.9688 20.3927 26.9525 18.4338 26.4894L17.822 26.3447C17.7844 26.0269 17.7649 25.7031 17.7649 25.3748C17.7649 25.1017 17.7782 24.8318 17.8045 24.566L18.6114 24.3598ZM27.1257 25.3748C27.1257 24.4083 26.3422 23.6248 25.3757 23.6248C24.4092 23.6248 23.6257 24.4083 23.6257 25.3748C23.6257 26.3412 24.4092 27.1248 25.3757 27.1248C26.3422 27.1248 27.1257 26.3412 27.1257 25.3748Z" fill="#FDFDFD"/>
          </svg>
            <div class="proj-settings-title">
              <div class="proj-records-1">Account Settings</div>
            </div>
          </div>
          <div class="proj-settings-layer">
            <svg class="proj-layer-1-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
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
            <svg class="proj-icons" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_341_430)">
              <path d="M11.5 0C5.14805 0 0 5.14805 0 11.5C0 17.852 5.14805 23 11.5 23C17.852 23 23 17.852 23 11.5C23 5.14805 17.852 0 11.5 0ZM11.5 5.75C13.2865 5.75 14.7344 7.19828 14.7344 8.98438C14.7344 10.7705 13.2879 12.2188 11.5 12.2188C9.71391 12.2188 8.26562 10.7705 8.26562 8.98438C8.26562 7.19828 9.71211 5.75 11.5 5.75ZM11.5 20.125C9.12228 20.125 6.96738 19.1578 5.4041 17.5963C6.13184 15.7182 7.92871 14.375 10.0625 14.375H12.9375C15.0731 14.375 16.87 15.7173 17.5959 17.5963C16.0326 19.1592 13.8764 20.125 11.5 20.125Z" fill="#004168" fill-opacity="0.8"/>
              </g>
              <defs>
              <clipPath id="clip0_341_430">
              <rect width="23" height="23" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <a class="proj-log-out">ADMIN01</a>
        </button>
      </header>
    </div>
  </body>
</html>