<header
  class="flex-1 shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] bg-[#fdfdfd] flex flex-row items-start justify-center py-[0.875rem] pl-[13.75rem] pr-[1.25rem] box-border gap-[45.25rem] top-[0] sticky max-w-full text-center text-[1.125rem] text-[#004168] font-[Lato] lg:gap-[22.625rem] lg:pl-[6.875rem] lg:box-border mq450:gap-[5.625rem] mq450:pl-[1.25rem] mq450:box-border mq750:gap-[11.313rem] mq750:pl-[3.438rem] mq750:box-border z-10 h-[4.25rem]"
  style="gap: 46rem;">
  <div
    class="h-[4.25rem] w-[94.5rem] relative shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] bg-[#fdfdfd] hidden max-w-full"></div>
  <div
    class="flex flex-col items-start justify-start pt-[0.062rem] px-[0rem] pb-[0rem]">
    <div class="flex flex-col items-start justify-start gap-[0.062rem]">
      <a
        class="[text-decoration:none] relative whitespace-nowrap z-[1] text-[inherit]">
        <b>Welcome Back, </b>
        <span class="font-extrabold text-[#00c8d2]">Admin</span>
        <b>!</b>
      </a>
      <div
        class="relative text-[0.75rem] font-medium whitespace-nowrap z-[1]">
        Have a nice day keeping the system in check.
      </div>
    </div>
  </div>
  <button
    class="cursor-pointer border-[#00acce] border-[2px] border-solid pt-[0.312rem] pb-[0.375rem] pl-[0.687rem] pr-[0.625rem] bg-[#edf1f6] w-[8.688rem] rounded-[8px] box-border flex flex-row items-start justify-start gap-[0.125rem] z-[1]">
    <div
      class="h-[2.5rem] w-[8.688rem] relative rounded-[8px] bg-[#edf1f6] border-[#00acce] border-[2px] border-solid box-border hidden"></div>
    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_1_55)">
        <path d="M11.5 0C5.14805 0 0 5.14805 0 11.5C0 17.852 5.14805 23 11.5 23C17.852 23 23 17.852 23 11.5C23 5.14805 17.852 0 11.5 0ZM11.5 5.75C13.2865 5.75 14.7344 7.19828 14.7344 8.98438C14.7344 10.7705 13.2879 12.2188 11.5 12.2188C9.71391 12.2188 8.26562 10.7705 8.26562 8.98438C8.26562 7.19828 9.71211 5.75 11.5 5.75ZM11.5 20.125C9.12228 20.125 6.96738 19.1578 5.4041 17.5963C6.13184 15.7182 7.92871 14.375 10.0625 14.375H12.9375C15.0731 14.375 16.87 15.7173 17.5959 17.5963C16.0326 19.1592 13.8764 20.125 11.5 20.125Z" fill="#004168" fill-opacity="0.8" />
      </g>
      <defs>
        <clipPath id="clip0_1_55">
          <rect width="23" height="23" fill="white" />
        </clipPath>
      </defs>
    </svg>
    <div id="profile"
      class="w-[5.563rem] flex flex-col items-start justify-start pt-[0.062rem] px-[0rem] pb-[0rem] box-border">
      <a
        class="[text-decoration:none] self-stretch relative text-[1.125rem] font-semibold font-[Lato] text-[rgba(0,66,104,0.8)] text-right inline-block min-w-[5.563rem] z-[2]"><?= htmlspecialchars($_SESSION['admin']['username'] ?? 'No User', ENT_QUOTES) ?></a>
    </div>
    <div id="logout" class="hidden absolute cursor-pointer top-15 py-3 px-10 w-max rounded-md text-[#FDFDFD] shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.3)] bg-[#00C8D2] items-center justify-center" style="top: 0.6rem; left:88rem;">
      Logout
    </div>
  </button>
</header>
</div>

<script>
  var logoutPopup = document.getElementById('logout');
  var profile = document.getElementById('profile');
  var logoutLink = document.getElementById('logoutLink');
  profile.addEventListener('click', () => {
    if (logoutPopup.classList.contains('hidden')) {
      logoutPopup.classList.remove('hidden');
      logoutPopup.classList.add('flex');
    } else {
      logoutPopup.classList.add('hidden');
      logoutPopup.classList.remove('flex');
    }
  });

  logoutPopup.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent the default link behavior
    Swal.fire({
      title: 'Are you sure?',
      text: 'Do you want to logout?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, logout!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to logout page if confirmed
        window.location.href = 'admin-logout.php';
      }
    });
  });
</script>