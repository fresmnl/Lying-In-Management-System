
<?php

session_start();

require '../Database/db-admin.php';

if ($_SESSION['admin']['loggedin'] !== true && !isset($_SESSION['admin']['username'])) {
  header("Location: ../Login/Login.php");
}

$db_admin = new Admin();




?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<!-- <?php include 'nav-side-bar/navbar.php'; ?> -->
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>

<link rel="stylesheet" href="css/Dashboard.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />

<<<<<<< HEAD
<title>Admin-Dashboard</title>
<div class="admin-dashboard">
  <section class="layout">
    <div class="container">
      <div class="metrics-container">
        <div class="metrics-labels">
          <div class="metrics-labels-child"></div>
          <div class="metrics-sub-labels">
            <div class="metrics-details">
              <div class="metrics-details-child"></div>
              <img
                class="layer-1-icon"
                loading="lazy"
                alt=""
                src="images/total-health-facilities.png" />
            </div>
          </div>
          <div class="account-labels">
            <b class="total-health-facilities">Total Health Facilities</b>
            <div class="where-your-money"><?= htmlspecialchars($db_admin->getAllHealthFacilityAccount() ?? '', ENT_QUOTES) ?></div>
          </div>
        </div>
        <div class="metrics-labels1">
          <div class="metrics-labels-item"></div>
          <div class="metrics-labels-inner">
            <div class="rectangle-parent">
              <div class="frame-child"></div>
              <img
                class="frame-icon"
                loading="lazy"
                alt=""  
                src="images/new-accounts.png" />
            </div>
          </div>
          <div class="new-accounts-parent">
            <b class="new-accounts">New Accounts</b>
            <div class="div"><?= htmlspecialchars($db_admin->getUnauthorizedHealthFacilityAccount() ?? '', ENT_QUOTES) ?></div>
          </div>
        </div>
        <div class="metrics-labels2">
          <div class="rectangle-div"></div>
          <div class="frame-div">
            <div class="rectangle-group">
              <div class="frame-item"></div>
              <img
                class="frame-icon1"
                loading="lazy"
                alt=""
                src="images/authorized-accounts.png" />
            </div>
          </div>
          <div class="authorized-accounts-parent">
            <b class="authorized-accounts">Authorized Accounts</b>
            <div class="div1"><?= htmlspecialchars($db_admin->getVerifiedHealthFacilityAccount() ?? '', ENT_QUOTES) ?></div>
          </div>
        </div>
      </div>
      <div class="ownership-types-parent">
        <div class="ownership-types">
          <div class="ownership-types-child"></div>
          <div class="institutional-ownership">
            <b class="ownership">Ownership</b>
          </div>
          <div class="ownership-types-inner">
            <img
              class="frame-inner"
              loading="lazy"
              alt=""
              src="images/ownership.png" />
          </div>
          <div class="government-type-wrapper">
            <div class="government-type">
              <div class="government-marker">
                <div class="government-label">
                  <div class="government-indicator"></div>
                </div>
                <div class="government-name">
                  <div class="government">Government</div>
                  <b class="empty-cell">80%</b>
                </div>
              </div>
              <div class="private-type-parent">
                <div class="private-type">
                  <div class="private-marker"></div>
                </div>
                <div class="private-name">
                  <div class="private">Private</div>
                  <b class="empty-cell1">20%</b>
                </div>
=======
<d>
    <div class="admin-dashboard1" >
      <div class="main">
        <div class="facilities-overview">
          <div class="decorations">
            <div class="decorations-child"></div>
            <div class="facilities-chart">
              <div class="landmark-label">
                <div class="landmark-label-child"></div>
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.8154 51.7559H30.9634V41.3569H26.8154V44.4769V51.7559Z" fill="#FDFDFD"/>
                    <path d="M24.7406 45.5159H21.6296C21.4933 45.5158 21.3583 45.4888 21.2324 45.4365C21.1065 45.3842 20.9922 45.3077 20.8959 45.2112C20.7996 45.1147 20.7233 45.0002 20.6712 44.8742C20.6192 44.7482 20.5924 44.6132 20.5926 44.4769V40.3169C20.5923 40.1805 20.6189 40.0454 20.6709 39.9193C20.7229 39.7932 20.7992 39.6786 20.8955 39.582C20.9918 39.4854 21.1062 39.4088 21.2322 39.3564C21.3581 39.3041 21.4932 39.2771 21.6296 39.2769H42.3696C42.506 39.2769 42.6411 39.3038 42.7671 39.3562C42.8931 39.4085 43.0076 39.4851 43.1039 39.5817C43.2002 39.6783 43.2766 39.793 43.3285 39.9192C43.3804 40.0453 43.407 40.1805 43.4066 40.3169V44.4769C43.4068 44.6133 43.3802 44.7483 43.3282 44.8744C43.2762 45.0004 43.1999 45.115 43.1036 45.2115C43.0072 45.308 42.8928 45.3846 42.7669 45.4368C42.6409 45.489 42.5059 45.5159 42.3696 45.5159H39.2586V51.7559H45.4816V11.7999L31.9996 4.07593L18.5176 11.7999V51.7559H24.7406V45.5159ZM34.9996 35.9999C34.9996 36.2651 34.8942 36.5195 34.7067 36.707C34.5191 36.8946 34.2648 36.9999 33.9996 36.9999H29.9996C29.7344 36.9999 29.48 36.8946 29.2925 36.707C29.1049 36.5195 28.9996 36.2651 28.9996 35.9999V31.9999C28.9996 31.7347 29.1049 31.4804 29.2925 31.2928C29.48 31.1053 29.7344 30.9999 29.9996 30.9999H33.9996C34.2648 30.9999 34.5191 31.1053 34.7067 31.2928C34.8942 31.4804 34.9996 31.7347 34.9996 31.9999V35.9999ZM34.9996 27.9999C34.9996 28.2651 34.8942 28.5195 34.7067 28.707C34.5191 28.8946 34.2648 28.9999 33.9996 28.9999H29.9996C29.7344 28.9999 29.48 28.8946 29.2925 28.707C29.1049 28.5195 28.9996 28.2651 28.9996 27.9999V23.9999C28.9996 23.7347 29.1049 23.4804 29.2925 23.2928C29.48 23.1053 29.7344 22.9999 29.9996 22.9999H33.9996C34.2648 22.9999 34.5191 23.1053 34.7067 23.2928C34.8942 23.4804 34.9996 23.7347 34.9996 23.9999V27.9999ZM42.9996 35.9999C42.9996 36.2651 42.8942 36.5195 42.7067 36.707C42.5191 36.8946 42.2648 36.9999 41.9996 36.9999H37.9996C37.7344 36.9999 37.48 36.8946 37.2925 36.707C37.1049 36.5195 36.9996 36.2651 36.9996 35.9999V31.9999C36.9996 31.7347 37.1049 31.4804 37.2925 31.2928C37.48 31.1053 37.7344 30.9999 37.9996 30.9999H41.9996C42.2648 30.9999 42.5191 31.1053 42.7067 31.2928C42.8942 31.4804 42.9996 31.7347 42.9996 31.9999V35.9999ZM37.9996 22.9999H41.9996C42.2648 22.9999 42.5191 23.1053 42.7067 23.2928C42.8942 23.4804 42.9996 23.7347 42.9996 23.9999V27.9999C42.9996 28.2651 42.8942 28.5195 42.7067 28.707C42.5191 28.8946 42.2648 28.9999 41.9996 28.9999H37.9996C37.7344 28.9999 37.48 28.8946 37.2925 28.707C37.1049 28.5195 36.9996 28.2651 36.9996 27.9999V23.9999C36.9996 23.7347 37.1049 23.4804 37.2925 23.2928C37.48 23.1053 37.7344 22.9999 37.9996 22.9999ZM26.9996 11.9999C26.9996 11.7347 27.1049 11.4804 27.2925 11.2928C27.48 11.1053 27.7344 10.9999 27.9996 10.9999H28.9996V9.99993C28.9996 9.73471 29.1049 9.48036 29.2925 9.29282C29.48 9.10528 29.7344 8.99993 29.9996 8.99993H33.9996C34.2648 8.99993 34.5191 9.10528 34.7067 9.29282C34.8942 9.48036 34.9996 9.73471 34.9996 9.99993V10.9999H35.9996C36.2648 10.9999 36.5191 11.1053 36.7067 11.2928C36.8942 11.4804 36.9996 11.7347 36.9996 11.9999V15.9999C36.9996 16.2651 36.8942 16.5195 36.7067 16.707C36.5191 16.8946 36.2648 16.9999 35.9996 16.9999H34.9996V17.9999C34.9996 18.2651 34.8942 18.5195 34.7067 18.707C34.5191 18.8946 34.2648 18.9999 33.9996 18.9999H29.9996C29.7344 18.9999 29.48 18.8946 29.2925 18.707C29.1049 18.5195 28.9996 18.2651 28.9996 17.9999V16.9999H27.9996C27.7344 16.9999 27.48 16.8946 27.2925 16.707C27.1049 16.5195 26.9996 16.2651 26.9996 15.9999V11.9999ZM20.9996 23.9999C20.9996 23.7347 21.1049 23.4804 21.2925 23.2928C21.48 23.1053 21.7344 22.9999 21.9996 22.9999H25.9996C26.2648 22.9999 26.5191 23.1053 26.7067 23.2928C26.8942 23.4804 26.9996 23.7347 26.9996 23.9999V27.9999C26.9996 28.2651 26.8942 28.5195 26.7067 28.707C26.5191 28.8946 26.2648 28.9999 25.9996 28.9999H21.9996C21.7344 28.9999 21.48 28.8946 21.2925 28.707C21.1049 28.5195 20.9996 28.2651 20.9996 27.9999V23.9999ZM20.9996 31.9999C20.9996 31.7347 21.1049 31.4804 21.2925 31.2928C21.48 31.1053 21.7344 30.9999 21.9996 30.9999H25.9996C26.2648 30.9999 26.5191 31.1053 26.7067 31.2928C26.8942 31.4804 26.9996 31.7347 26.9996 31.9999V35.9999C26.9996 36.2651 26.8942 36.5195 26.7067 36.707C26.5191 36.8946 26.2648 36.9999 25.9996 36.9999H21.9996C21.7344 36.9999 21.48 36.8946 21.2925 36.707C21.1049 36.5195 20.9996 36.2651 20.9996 35.9999V31.9999Z" fill="#FDFDFD"/>
                    <path d="M41.3328 41.3569H39.2588V43.4369H41.3328V41.3569Z" fill="#FDFDFD"/>
                    <path d="M13 31H11V33H13V31Z" fill="#FDFDFD"/>
                    <path d="M24.741 41.3569H22.667V43.4369H24.741V41.3569Z" fill="#FDFDFD"/>
                    <path d="M14.3701 55.9159H49.6301V53.8359H46.5181H38.2221H25.7781H17.4821H14.3701V55.9159Z" fill="#FDFDFD"/>
                    <path d="M37.1851 51.7559V44.4769V41.3569H33.0371V51.7559H37.1851Z" fill="#FDFDFD"/>
                    <path d="M33 25H31V27H33V25Z" fill="#FDFDFD"/>
                    <path d="M25 33H23V35H25V33Z" fill="#FDFDFD"/>
                    <path d="M33 33H31V35H33V33Z" fill="#FDFDFD"/>
                    <path d="M41 33H39V35H41V33Z" fill="#FDFDFD"/>
                    <path d="M25 25H23V27H25V25Z" fill="#FDFDFD"/>
                    <path d="M31 16V17H33V16C33 15.7348 33.1054 15.4804 33.2929 15.2929C33.4804 15.1054 33.7348 15 34 15H35V13H34C33.7348 13 33.4804 12.8946 33.2929 12.7071C33.1054 12.5196 33 12.2652 33 12V11H31V12C31 12.2652 30.8946 12.5196 30.7071 12.7071C30.5196 12.8946 30.2652 13 30 13H29V15H30C30.2652 15 30.5196 15.1054 30.7071 15.2929C30.8946 15.4804 31 15.7348 31 16Z" fill="#FDFDFD"/>
                    <path d="M41 25H39V27H41V25Z" fill="#FDFDFD"/>
                    <path d="M13 39H11V41H13V39Z" fill="#FDFDFD"/>
                    <path d="M47.5557 51.756H50.6667H59.9997V49.676H47.5557V51.756Z" fill="#FDFDFD"/>
                    <path d="M13.3327 57.9961H10.2217V60.0761H53.7777V57.9961H50.6667H13.3327Z" fill="#FDFDFD"/>
                    <path d="M53 23H51V25H53V23Z" fill="#FDFDFD"/>
                    <path d="M53 39H51V41H53V39Z" fill="#FDFDFD"/>
                    <path d="M16.444 51.756V49.676H4V51.756H13.333H16.444Z" fill="#FDFDFD"/>
                    <path d="M13 23H11V25H13V23Z" fill="#FDFDFD"/>
                    <path d="M16.444 16.1069L11.344 14.3999L4 18.0799V47.5999H16.444V16.1069ZM15 41.9999C15 42.2651 14.8946 42.5195 14.7071 42.707C14.5196 42.8945 14.2652 42.9999 14 42.9999H10C9.73478 42.9999 9.48043 42.8945 9.29289 42.707C9.10536 42.5195 9 42.2651 9 41.9999V37.9999C9 37.7347 9.10536 37.4803 9.29289 37.2928C9.48043 37.1053 9.73478 36.9999 10 36.9999H14C14.2652 36.9999 14.5196 37.1053 14.7071 37.2928C14.8946 37.4803 15 37.7347 15 37.9999V41.9999ZM15 33.9999C15 34.2651 14.8946 34.5195 14.7071 34.707C14.5196 34.8945 14.2652 34.9999 14 34.9999H10C9.73478 34.9999 9.48043 34.8945 9.29289 34.707C9.10536 34.5195 9 34.2651 9 33.9999V29.9999C9 29.7347 9.10536 29.4803 9.29289 29.2928C9.48043 29.1053 9.73478 28.9999 10 28.9999H14C14.2652 28.9999 14.5196 29.1053 14.7071 29.2928C14.8946 29.4803 15 29.7347 15 29.9999V33.9999ZM15 25.9999C15 26.2651 14.8946 26.5195 14.7071 26.707C14.5196 26.8945 14.2652 26.9999 14 26.9999H10C9.73478 26.9999 9.48043 26.8945 9.29289 26.707C9.10536 26.5195 9 26.2651 9 25.9999V21.9999C9 21.7347 9.10536 21.4803 9.29289 21.2928C9.48043 21.1053 9.73478 20.9999 10 20.9999H14C14.2652 20.9999 14.5196 21.1053 14.7071 21.2928C14.8946 21.4803 15 21.7347 15 21.9999V25.9999Z" fill="#FDFDFD"/>
                    <path d="M52.6607 14.3999L47.5557 16.1069V47.5999H59.9997V18.0799L52.6607 14.3999ZM54.9997 41.9999C54.9997 42.2651 54.8943 42.5195 54.7068 42.707C54.5192 42.8945 54.2649 42.9999 53.9997 42.9999H49.9997C49.7344 42.9999 49.4801 42.8945 49.2926 42.707C49.105 42.5195 48.9997 42.2651 48.9997 41.9999V37.9999C48.9997 37.7347 49.105 37.4803 49.2926 37.2928C49.4801 37.1053 49.7344 36.9999 49.9997 36.9999H53.9997C54.2649 36.9999 54.5192 37.1053 54.7068 37.2928C54.8943 37.4803 54.9997 37.7347 54.9997 37.9999V41.9999ZM54.9997 33.9999C54.9997 34.2651 54.8943 34.5195 54.7068 34.707C54.5192 34.8945 54.2649 34.9999 53.9997 34.9999H49.9997C49.7344 34.9999 49.4801 34.8945 49.2926 34.707C49.105 34.5195 48.9997 34.2651 48.9997 33.9999V29.9999C48.9997 29.7347 49.105 29.4803 49.2926 29.2928C49.4801 29.1053 49.7344 28.9999 49.9997 28.9999H53.9997C54.2649 28.9999 54.5192 29.1053 54.7068 29.2928C54.8943 29.4803 54.9997 29.7347 54.9997 29.9999V33.9999ZM54.9997 25.9999C54.9997 26.2651 54.8943 26.5195 54.7068 26.707C54.5192 26.8945 54.2649 26.9999 53.9997 26.9999H49.9997C49.7344 26.9999 49.4801 26.8945 49.2926 26.707C49.105 26.5195 48.9997 26.2651 48.9997 25.9999V21.9999C48.9997 21.7347 49.105 21.4803 49.2926 21.2928C49.4801 21.1053 49.7344 20.9999 49.9997 20.9999H53.9997C54.2649 20.9999 54.5192 21.1053 54.7068 21.2928C54.8943 21.4803 54.9997 21.7347 54.9997 21.9999V25.9999Z" fill="#FDFDFD"/>
                    <path d="M53 31H51V33H53V31Z" fill="#FDFDFD"/>
                  </svg>
>>>>>>> 09ea39e4d29900759e72edd50dab3b97041c12f4
              </div>
            </div>
            <div class="accounts-chart">
              <b class="total-health-facilities">Total Health Facilities</b>
              <div class="empty-accounts"><?= htmlspecialchars($db_admin->getAllHealthFacilityAccount() ?? '', ENT_QUOTES) ?></div>
            </div>
          </div>
          <div class="rectangle-parent">
            <div class="frame-child"></div>
            <div class="frame-wrapper">
              <div class="rectangle-group">
                <div class="frame-item"></div>
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M40 37.376C47.1254 37.376 61.376 40.8774 61.376 48V53.376H18.6267V48C18.6267 40.8747 32.8774 37.376 40.0027 37.376H40ZM16 26.624H24V32H16V40H10.624V32H2.62402V26.624H10.624V18.624H16V26.624ZM40 32C34.1254 32 29.376 27.2507 29.376 21.376C29.376 15.5014 34.1254 10.6267 40 10.6267C45.8747 10.6267 50.624 15.5014 50.624 21.376C50.624 27.2507 45.8747 32 40 32Z" fill="#FDFDFD"/>
                </svg>
              </div>
            </div>
            <div class="new-accounts-parent">
              <b class="new-accounts">New Accounts</b>
              <div class="div">0</div>
            </div>
          </div>
          <div class="rectangle-container">
            <div class="frame-inner"></div>
            <div class="frame-container">
              <div class="frame-div">
                <div class="rectangle-div"></div>
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 17.6C20 24 25.3333 29.3334 32 29.3334C38.6667 29.3334 44 24 44 17.6C44 11.2 38.6667 5.8667 32 5.8667C25.3333 5.8667 20 11.2 20 17.6ZM38.6667 17.6C38.6667 21.0667 35.7333 24 32 24C28.2667 24 25.3333 21.0667 25.3333 17.6C25.3333 14.1334 28.2667 11.2 32 11.2C35.7333 11.2 38.6667 14.1334 38.6667 17.6Z" fill="#FDFDFD"/>
                  <path d="M17.5996 44.8C18.6663 40.2667 22.3996 37.3333 26.6663 37.3333H37.333C39.4663 37.3333 41.5996 38.1333 43.4663 39.4667C44.533 40.5333 46.3996 40.2667 47.1996 39.2C48.2663 38.1333 47.9996 36.2667 46.933 35.4667C44.2663 33.3333 40.7996 32 37.333 32H26.6663C19.9996 32 14.133 36.5333 12.2663 43.4667L10.933 48.5333C10.133 50.9333 10.6663 53.6 12.2663 55.7333C13.8663 57.6 15.9996 58.6667 18.6663 58.6667H37.0663C38.6663 58.6667 39.733 57.6 39.733 56C39.733 54.4 38.6663 53.3333 37.0663 53.3333H18.6663C17.5996 53.3333 17.0663 52.8 16.7996 52.2667C15.9996 51.7333 15.733 50.6667 15.9996 49.8667L17.5996 44.8Z" fill="#FDFDFD"/>
                  <path d="M46.1333 55.2001C46.6666 55.7334 47.1999 56.0001 47.9999 56.0001C48.2666 56.0001 48.2666 56.0001 48.5333 56.0001C49.3333 55.7334 50.1333 55.2001 50.3999 54.6668L55.7333 44.0001C56.2666 42.6668 55.7333 41.0668 54.6666 40.5334C53.3333 40.0001 51.7333 40.5334 51.1999 41.6001L47.4666 49.0668L44.7999 46.4001C43.7333 45.3334 42.1333 45.3334 41.0666 46.4001C39.9999 47.4668 39.9999 49.0668 41.0666 50.1334L46.1333 55.2001Z" fill="#FDFDFD"/>
                </svg>
              </div>
            </div>
            <div class="authorized-accounts-parent">
              <b class="authorized-accounts">Authorized Accounts</b>
              <div class="div1">0</div>
            </div>
          </div>
        </div>
        <div class="ownership-structure">
          <div class="landmark">
            <div class="landmark-child"></div>
            <div class="ownership-type">
              <div class="ownership-detail">
                <b class="ownership">Ownership</b>
              </div>
              <div class="institution-type">
                <div class="empty-institution">80%</div>
                <div class="governmental">
                  <b class="government">Government</b>
                </div>
              </div>
            </div>
            <div class="private">
              <div class="empty-private">20%</div>
              <div class="private-type">
                <b class="private1">Private</b>
              </div>
            </div>
          </div>
          <div class="ownership-types">
            <div class="ownership-types-child"></div>
            <div class="frame-parent">
              <div class="institutional-character-wrapper">
                <b class="institutional-character">Institutional Character</b>
              </div>
              <div class="parent">
                <div class="div2">20%</div>
                <div class="free-standing-wrapper">
                  <b class="free-standing">Free-Standing</b>
                </div>
              </div>
            </div>
            <div class="group">
              <div class="div3">80%</div>
              <div class="institution-based-wrapper">
                <b class="institution-based">Institution-Based</b>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="calendar-parent">
      <div class="calendar">
      <div class="calendar-layout">
        <div class="calendar-header">
        <div class="month-navigation">
  <div class="month-selector">
    <img id="prev-month" src="images/prev-btn.png">
    <div class="current-month">
      <a id="month-year"></a>
    </div>
    <img id="next-month" src="images/next-btn.png">
  </div>
</div>
          <div class="weekdays">
            <b>S M T W T F S</b>
          </div>
        </div>
        <div id="calendar-days" class="month-year"></div>
      </div>
        </div>
        <div class="statistics-types-parent">
          <div class="statistics-types">
            <div class="statistics-types-child"></div>
            <div class="statistics-detail">
              <div class="statistics-detail-child"></div>
              <b class="number-of-hospitals">Number of Hospitals</b>
            </div>
            <div class="empty-statistics">25</div>
          </div>
          <div class="statistics-types1">
            <div class="statistics-types-item"></div>
            <div class="rectangle-parent1">
              <div class="frame-child1"></div>
              <b class="number-of-patients">Number of Patients</b>
            </div>
            <div class="div6">32</div>
          </div>
        </div>
      </div>
    </div>
    <main class="accounts-table" style="width: 68rem; margin-left: 23rem; position: absolute; top: 41rem;">
  <table class="simple-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name of Health Facility</th>
        <th>Successful Childbirth</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Reyes-Hernandez Maternity & Lying-in Clinic</td>
        <td>12</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Hermosa Lying-in and Health Center</td>
        <td>41</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Hermosa Lying-in and Health Center</td>
        <td>41</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Reyes-Hernandez Maternity & Lying-in Clinic</td>
        <td>12</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Hermosa Lying-in and Health Center</td>
        <td>41</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Hermosa Lying-in and Health Center</td>
        <td>41</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3" class="footer-cell">
          <button>See more...</button>
        </td>
      </tr>
    </tfoot>
  </table>
</main>
  </body>
  <script>
  const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  let currentDate = new Date();

  function renderCalendar(date) {
    const monthYear = document.getElementById("month-year");
    const calendarDays = document.getElementById("calendar-days");
    const year = date.getFullYear();
    const month = date.getMonth();
    // Update month-year text
    monthYear.textContent = `${months[month]} ${year}`;

    // Get the first day of the month
    const firstDay = new Date(year, month, 1).getDay();
    // Get the last date of the month
    const lastDate = new Date(year, month + 1, 0).getDate();

    // Clear existing days
    calendarDays.innerHTML = "";
    // Add empty cells for days before the first day
    for (let i = 0; i < firstDay; i++) {
      const cell = document.createElement('div');
      calendarDays.appendChild(cell);
    }

    // Add cells for each day of the month
    for (let day = 1; day <= lastDate; day++) {
      const cell = document.createElement('div');
      cell.textContent = day;
      if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
        cell.classList.add('highlight');
      }
      calendarDays.appendChild(cell);
    }

    // Adjust the number of cells per row to fit 7 days
    calendarDays.style.gridTemplateColumns = `repeat(7, 1fr)`;
  }

  function updateMonth(offset) {
    currentDate.setMonth(currentDate.getMonth() + offset);
    renderCalendar(currentDate);
  }

  document.getElementById("prev-month").addEventListener("click", () => updateMonth(-1));
  document.getElementById("next-month").addEventListener("click", () => updateMonth(1));

  // Initial render
  renderCalendar(currentDate);

</script>
