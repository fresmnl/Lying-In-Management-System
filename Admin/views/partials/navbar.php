<nav class="fixed top-0 z-50 w-full m-0 p-0 shadow-md bg-[#edf1f6] h-auto">
  <div id="nav-bar" class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div id="nav-container" class="flex items-center justify-start rtl:justify-end">
        <span class="sr-only">Open sidebar</span>
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
        </button>
        <img id="logo" src="../img/result.svg" class="h-14 me-5" alt="TrustTrack Logo" />
        <ul id="text-container" class="flex text-md text-center m-0 p-0 items-center justify-center">
          <li id="text" class="mr-32 cursor-pointer"><span class="text-[#2fbad6]" data-popover-target="popover-image">User:</span> <?= $userID ?></li>
          <li id="text" class="mr-32 cursor-pointer"><span class="text-[#2fbad6]">Username:</span> <?= $username ?></li>
          <li id="text" class="mr-32 cursor-pointer"><span class="text-[#2fbad6]">Facility:</span> <?= $facility ?></li>
          <button class="w-32 flex items-center justify-evenly h-12 text-[#fff] border-2 bg-[#2fbad6] hover:text-[#fff] rounded-xl transition-all duration-150">
              <svg width="21" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.6375 8.925C20.525 8.8125 20.525 8.7 20.4125 8.5875L18.1625 6.3375C17.7125 5.8875 17.0375 5.8875 16.5875 6.3375C16.1375 6.7875 16.1375 7.4625 16.5875 7.9125L16.925 8.25H14C13.325 8.25 12.875 8.7 12.875 9.375C12.875 10.05 13.325 10.5 14 10.5H16.925L16.5875 10.8375C16.1375 11.2875 16.1375 11.9625 16.5875 12.4125C16.8125 12.6375 17.15 12.75 17.375 12.75C17.6 12.75 17.9375 12.6375 18.1625 12.4125L20.4125 10.1625C20.525 10.05 20.6375 9.9375 20.6375 9.825C20.75 9.4875 20.75 9.2625 20.6375 8.925Z" fill="#FDFDFD" />
                <path d="M15.125 12.75C14.45 12.75 14 13.2 14 13.875V15C14 15.675 13.55 16.125 12.875 16.125H11.75V6.45C11.75 4.9875 10.85 3.75 9.6125 3.3L7.8125 2.625H12.875C13.55 2.625 14 3.075 14 3.75V4.875C14 5.55 14.45 6 15.125 6C15.8 6 16.25 5.55 16.25 4.875V3.75C16.25 1.8375 14.7875 0.375 12.875 0.375H1.625C1.5125 0.375 1.4 0.375 1.2875 0.4875C1.175 0.4875 1.0625 0.6 1.0625 0.6C1.0625 0.6 1.0625 0.6 0.95 0.7125C0.8375 0.7125 0.725 0.825 0.725 0.9375C0.725 0.9375 0.725 0.9375 0.725 1.05C0.6125 1.05 0.5 1.1625 0.5 1.275C0.5 1.275 0.5 1.275 0.5 1.3875V1.5V17.25C0.5 17.7 0.8375 18.15 1.175 18.2625L8.6 21.075C8.825 21.1875 9.1625 21.1875 9.3875 21.1875C9.8375 21.1875 10.2875 21.075 10.625 20.7375C11.1875 20.2875 11.6375 19.6125 11.6375 18.9375V18.375H12.7625C14.675 18.375 16.1375 16.9125 16.1375 15V13.875C16.25 13.3125 15.8 12.75 15.125 12.75ZM2.75 16.4625V3.075L8.7125 5.325C9.1625 5.55 9.5 6 9.5 6.45V17.25V18.9375L2.75 16.4625Z" fill="#FDFDFD" />
              </svg>
              <a href="Admin-Logout" class="">Log out</a>
            </button>
        </ul>
      </div>
    </div>
  </div>
  </div>
</nav>
<script src="control.js"></script>

<style>
  /* Mobile styles */
  @media (max-width: 1024px) {
     #logo {
      width: 25%;
      margin: 0;
    }

    #nav-bar {
      padding: 0;
      height: auto;
    }
    
    #text {
      font-size: 15px;
      margin: 0 0 0 1rem;
      font-weight: bold;
    }

    #button {
      font-size: 12px;
      font-weight: bold;
      width: 5rem; 
      height: 3rem;    
      align-self: center;
      margin: 1rem 3rem 1rem 2rem;

    }

    #button:hover {
      background-color: #2fbad6;
      color: #fff;
    }

  }

  @media (max-width: 768px) {
    #logo {
      width: 25%;
      margin: 0;
    }

    #nav-bar {
      padding: 0.5rem;
      height: auto;
    }

    #text-container {
      display: flex;
      align-items: flex-start;
      position: relative;
    }
    
    #text {
      font-size: 13px;
      margin: 0 0 0 5px;
      font-weight: bold;
    }

    #button {
      margin:8px 0 0 5px;
      font-size: 12px;
      font-weight: bold;
      width: 15%; 
      height: 30px;    
      align-self: center;
    
    }

    #button:hover {
      background-color: #2fbad6;
      color: #fff;
    }

  }

  @media (max-width: 425px) {
    #logo {
      width: 40%;
      margin: 0 0 0 13%;
    }

    #nav-bar {
      padding: 0;
      height: auto;
    }

    #text-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 10px 10px 10px 3px;
      position: relative;
    }
    
    #text {
      font-size: 9px;
      margin: 0;
      font-weight: bold;
      color: #004168;

    }

    #button {
      margin-top: 5px;
      font-size: 7px;
      font-weight: bold;
      width: 90%; 
      height: 25px;    
      align-self: center;
      background-color: #004168;
      border: none;
      color: #fdfdfd;
    }

    #button:hover {
      background-color: #2fbad6;
      color: #fff;
    }

  }

  @media (max-width: 375px) {
    #logo {
      width: 40%;
      margin: 0 0 0 7%;
    }

    #nav-bar {
      padding: 0;
      height: auto;
    }

    #text-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 10px 10px 10px 3px;
      position: relative;
    }
    
    #text {
      font-size: 9px;
      margin: 0;
      font-weight: bold;
      color: #004168;

    }

    #button {
      margin-top: 5px;
      font-size: 7px;
      font-weight: bold;
      width: 90%; 
      height: 25px;    
      align-self: center;
      background-color: #004168;
      border: none;
      color: #fdfdfd;
    }

    #button:hover {
      background-color: #2fbad6;
      color: #fff;
    }

  }

  @media (max-width: 320px) {
    #logo {
      width: 40%;
      margin: 0;
    }

    #nav-bar {
      padding: 0;
      height: auto;
    }

    #text-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 10px 10px 10px 3px;
      position: relative;
    }

    #text {
      font-size: 9px;
      margin: 0;
      font-weight: bold;
      color: #004168;

    }

    #button {
      margin-top: 5px;
      font-size: 7px;
      font-weight: bold;
      width: 90%; 
      height: 25px;    
      align-self: center;
      background-color: #004168;
      border: none;
      color: #fdfdfd;
    }

    #button:hover {
      background-color: #2fbad6;
      color: #fff;
    }

  }
</style>