<!-- <?php include 'nav-side-bar/sidebar.php'; ?> -->
<?php include 'nav-side-bar/navbar.php'; ?>
<?php require 'views/structures/header.php'; ?>
<!-- <?php require 'views/partials/navbar.php'; ?> -->
<?php require 'views/partials/sidebar.php'; ?>
<link rel="stylesheet" href="css/Record-Number.css" />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap" />
</head>

<body>
  <div class="admin-record-account">
    <section class="left-panel">
      <div class="accounts-panel">
        <h3 class="numbers">Numbers</h3>
        <div class="account-count-panel">
          <a class="number-of-accounts">Number of Accounts</a>
        </div>
      </div>
      <nav class="search-panel">
        <div class="search-input-panel">
          <div class="rectangle-parent">
            <div class="frame-child"></div>
            <input class="search" placeholder="Search..." type="text" />

            <div class="add-account-panel">
              <img class="layer-1-icon" alt="" src="./public/layer-1.svg" />
            </div>
          </div>
        </div>
        <div class="pagination-panel">
          <div class="rectangle-group">
            <div class="frame-item"></div>
            <h3 class="add-new-account">+ Add new account</h3>
          </div>
        </div>
        <div class="account-list">25</div>
      </nav>
    </section>
    <div class="account-list-header">
      <div class="account-list-body">
        <div class="account-list-item">
          <div class="showing-1-">showing 1 - 20 of 25 items</div>
        </div>
        <div class="account-list-item-actions">
          <div class="account-list-item-action">
            <div class="account-list-item-action-child"></div>
            <img
              class="account-list-item-action-icon"
              loading="lazy"
              alt=""
              src="./public/vector.svg" />
          </div>
          <div class="image-caption">
            <div class="image-caption-child"></div>
            <b class="b">1</b>
          </div>
          <div class="rectangle-container">
            <div class="frame-inner"></div>
            <img
              class="vector-icon"
              loading="lazy"
              alt=""
              src="./public/vector-1.svg" />
          </div>
        </div>
      </div>
    </div>
  </div>
</body>