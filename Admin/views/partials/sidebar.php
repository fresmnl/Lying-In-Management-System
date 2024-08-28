<style>
   #logo-sidebar{
      width: 16.8rem;
      background-color: #00ACCE;
   }
   #sidebar-container{
      background-color: #00ACCE;
   }
   #side-title{
      color: #fdfdfd;
   }
   #record-dropdown-toggle{
      color: #fdfdfd;
   }
   #record-dropdown-toggle li a{
      font-size: 20px;
   }
</style>
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-2 transition-transform -translate-x-full border-r border-gray-200 sm:translate-x-0 bg-[#2d82b5]" aria-label="Sidebar">
   <div class="logo" style="width: 16.8rem;">
      <img class="w-25" src="nav-side-bar/logo-side.png" alt="Logo">
   </div>
   <div id="sidebar-container" class="h-full px-3 pb-4 overflow-y-auto bg-[#2D82B5]">

      <ul class="space-y-6 font-medium text-xl">
         <li>
            <a href="Dashboard.php" class="flex items-center p-2 rounded-lg mt-10 hover:text-[#2D82B5] hover:fill-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Dashboard.php') echo ' text-[#2D82B5] fill-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                                                                      else echo 'text-white fill-[#fff]' ?>">
               <svg class="w-5" fill="" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#a)">
                     <path d="m1.3889 13.889h8.3333c0.76388 0 1.3889-0.625 1.3889-1.3889v-11.111c0-0.76389-0.625-1.3889-1.3889-1.3889h-8.3333c-0.76389 0-1.3889 0.625-1.3889 1.3889v11.111c0 0.7639 0.625 1.3889 1.3889 1.3889zm0 11.111h8.3333c0.76388 0 1.3889-0.625 1.3889-1.3889v-5.5555c0-0.7639-0.625-1.3889-1.3889-1.3889h-8.3333c-0.76389 0-1.3889 0.625-1.3889 1.3889v5.5555c0 0.7639 0.625 1.3889 1.3889 1.3889zm13.889 0h8.3333c0.7639 0 1.3889-0.625 1.3889-1.3889v-11.111c0-0.7639-0.625-1.3889-1.3889-1.3889h-8.3333c-0.7639 0-1.3889 0.625-1.3889 1.3889v11.111c0 0.7639 0.625 1.3889 1.3889 1.3889zm-1.3889-23.611v5.5556c0 0.76389 0.625 1.3889 1.3889 1.3889h8.3333c0.7639 0 1.3889-0.625 1.3889-1.3889v-5.5556c0-0.76389-0.625-1.3889-1.3889-1.3889h-8.3333c-0.7639 0-1.3889 0.625-1.3889 1.3889z" fill="" />
                  </g>
                  <defs>
                     <clipPath id="a">
                        <rect width="25" height="25" fill="" />
                     </clipPath>
                  </defs>
               </svg>
               <span id="side-title" class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a id="registration" href="Registration.php" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" class="flex items-center p-2 rounded-lg hover:fill-[#2D82B5] hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] group hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Registration.php') echo ' text-[#2D82B5] fill-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                                                                                                                                                                   else echo 'text-white fill-[#fff]' ?>">
               <svg width="28" height="28" viewBox="0 0 28 28" fill="" xmlns="http://www.w3.org/2000/svg">
                  <path d="M23.2708 24.5047L25.1334 21.3867H21.4088L23.2708 24.5047Z" fill="" />
                  <path d="M25.4531 7.13831H21.0887V20.5467H25.4531V7.13831Z" fill="" />
                  <path d="M25.4531 3.09625H21.0887V6.29833H25.4531V3.09625Z" fill="" />
                  <path d="M18.6536 24.9037V21.3561H4.23357C3.79383 21.3566 3.37162 21.5286 3.05681 21.8356C2.74199 22.1427 2.55943 22.5604 2.54797 23V23.2601C2.55942 23.6996 2.74188 24.1172 3.05652 24.4241C3.37117 24.7311 3.79316 24.9032 4.23273 24.9037H18.6536Z" fill="" />
                  <path d="M2.54797 5.02935V21.1652C3.00977 20.7476 3.61014 20.5163 4.23273 20.5162H18.6527V3.09735H4.47997C3.96773 3.09787 3.47662 3.30159 3.11442 3.66379C2.75221 4.026 2.54849 4.51711 2.54797 5.02935Z" fill="" />
               </svg>

               <span id="side-title" class="flex-1 ms-3 text-left rtl:text-right text-xl whitespace-nowrap hover:fill-[#2D82B5]">Registration</span>
            </a>
         </li>
         <li>
            <button type="button" onclick="RecordToggleCollapse()" class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg fill-[#fff] hover:fill-[#2D82B5] group hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] text-white hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]" aria-controls="dropdown-toggle" data-collapse-toggle="dropdown-toggle">
               <svg width="25" height="25" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                  <path d="M23.625 7H15.8375L13.825 3.9375C13.7375 3.675 13.3875 3.5 13.125 3.5H4.375C2.8875 3.5 1.75 4.6375 1.75 6.125V21.875C1.75 23.3625 2.8875 24.5 4.375 24.5H23.625C25.1125 24.5 26.25 23.3625 26.25 21.875V9.625C26.25 8.1375 25.1125 7 23.625 7ZM9.625 16.625H6.125C5.6 16.625 5.25 16.275 5.25 15.75C5.25 15.225 5.6 14.875 6.125 14.875H9.625C10.15 14.875 10.5 15.225 10.5 15.75C10.5 16.275 10.15 16.625 9.625 16.625ZM12.25 13.125H6.125C5.6 13.125 5.25 12.775 5.25 12.25C5.25 11.725 5.6 11.375 6.125 11.375H12.25C12.775 11.375 13.125 11.725 13.125 12.25C13.125 12.775 12.775 13.125 12.25 13.125ZM24.5 20.65L16.975 8.75H23.625C24.15 8.75 24.5 9.1 24.5 9.625V20.65Z" fill="" />
               </svg>
               <span id="side-title" class="flex-1 ms-3 text-left rtl:text-right text-xl whitespace-nowrap hover:fill-[#2D82B5]">Records</span>
               <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
               </svg>
            </button>
            <ul id="record-dropdown-toggle" class="hidden my-2 space-y-2">
               <li>
                  <a id="side-title" href="Record-Account.php" class=" hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Account.php') echo 'text-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                      else echo 'text-white'; ?> flex items-center w-full h-10 transition duration-75 rounded-lg p-4 pl-14 group">Facility Account</a>
               </li>
               <li>
                  <a id="side-title" href="Record-Info-New.php" class="flex items-center w-full p-4 h-10 transition duration-75 rounded-lg pl-14 group <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Info-New.php' || $_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Info-Authorize.php') echo 'text-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                             else echo 'text-white'; ?> hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] dark:hover:text-[#2D82B5]">Facility Information</a>

               </li>
               <li>
                  <a id="side-title" href="Record-Number.php" class="flex items-center w-full p-4 h-10 transition duration-75 rounded-lg pl-14 group <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Number.php') echo 'text-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                         else echo 'text-white'; ?> hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] dark:hover:text-[#2D82B5]">Numbers</a>
                                                                                                                                                         </li>
                   <li>
                   <a id="side-title" href="Record-Hospital-Data.php" class="flex items-center w-full p-4 h-10 transition duration-75 rounded-lg pl-14 group <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Hospital.php') echo 'text-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                else echo 'text-white'; ?> hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] dark:hover:text-[#2D82B5]">Hospitals</a>
               </li>
            </ul>
         </li>
         <li>
            <button type="button" onclick="AccountToggleCollapse()" class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg fill-[#fff] hover:fill-[#2D82B5] group hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] text-white hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]" aria-controls="dropdown-toggle" data-collapse-toggle="dropdown-toggle">
               <svg width="25" height="25" viewBox="0 0 35 35" fill="" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.75 3.5C11.884 3.5 8.75 6.63401 8.75 10.5C8.75 14.366 11.884 17.5 15.75 17.5C19.6159 17.5 22.75 14.366 22.75 10.5C22.75 6.63401 19.6159 3.5 15.75 3.5ZM7.01528 19.25C5.08051 19.25 3.5 20.8021 3.5 22.75C3.5 25.7096 4.95742 27.941 7.23623 29.3941C9.4797 30.8245 12.5042 31.5 15.75 31.5C16.469 31.5 17.1771 31.4669 17.8684 31.3997C16.543 29.7505 15.75 27.6554 15.75 25.375C15.75 23.0482 16.5757 20.9141 17.9501 19.25H7.01528ZM18.6114 24.3598C20.5153 23.8735 21.6458 21.9154 21.115 20.0235L20.8416 19.0491C21.2863 18.7073 21.7682 18.4146 22.2799 18.1785L22.8704 18.805C24.251 20.2699 26.5799 20.2711 27.962 18.8076L28.5302 18.206C29.0514 18.4518 29.541 18.7569 29.9911 19.1126L29.7703 19.8517C29.194 21.7803 30.3595 23.7965 32.3185 24.2597L32.9292 24.4041C32.967 24.7223 32.9865 25.0462 32.9865 25.3748C32.9865 25.6478 32.973 25.9175 32.9469 26.1833L32.1409 26.3891C30.237 26.8756 29.1065 28.8337 29.6373 30.7256L29.9105 31.6999C29.4658 32.0416 28.984 32.3346 28.4722 32.5707L27.8819 31.9442C26.5013 30.4792 24.1724 30.478 22.7902 31.9415L22.2215 32.5437C21.7003 32.2978 21.2109 31.993 20.7608 31.6374L20.982 30.8975C21.5583 28.9688 20.3927 26.9525 18.4338 26.4894L17.822 26.3447C17.7844 26.0269 17.7649 25.7031 17.7649 25.3748C17.7649 25.1017 17.7782 24.8318 17.8045 24.566L18.6114 24.3598ZM27.1257 25.3748C27.1257 24.4083 26.3422 23.6248 25.3757 23.6248C24.4092 23.6248 23.6257 24.4083 23.6257 25.3748C23.6257 26.3412 24.4092 27.1248 25.3757 27.1248C26.3422 27.1248 27.1257 26.3412 27.1257 25.3748Z" fill="" />
               </svg>
               <span id="side-title" class="flex-1 ms-3 text-left rtl:text-right text-xl whitespace-nowrap">Account Settings</span>
               <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
               </svg>
            </button>
            <ul id="account-dropdown-toggle" class="hidden my-2 space-y-2">
               <li>
                  <a href="Record-Account-Edit.php" class=" hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Account-Edit.php') echo 'text-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                            else echo 'text-white'; ?> flex items-center w-full h-10 transition duration-75 rounded-lg p-4 pl-14 group">Edit Account</a>
               </li>
               <li>
                  <a href="Record-Account-Deact.php" class="flex items-center w-full p-4 h-10 transition duration-75 rounded-lg pl-14 group <?php if ($_SERVER['REQUEST_URI'] === '/CapstoneProject/Lying-In-Management-System/Admin/Record-Account-Deact.php') echo 'text-[#2D82B5] dark:bg-[#EDF1F6] shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)]';
                                                                                                                                                   else echo 'text-white'; ?> hover:text-[#2D82B5] dark:hover:bg-[#EDF1F6] hover:shadow-[0_4px_6px_-1px_rgba(0,0,0,0.2)] dark:hover:text-[#2D82B5]">Archived Records</a>
               </li>
            </ul>
         </li>
      </ul>
   </div>
</aside>
<script src="Functions.js"></script>
