<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@500;600;700;800;900&display=swap"
    />
    <style>
      body {
        margin: 0;
        line-height: normal;
      }

      :root {
        /* fonts */
        --font-lato: Lato;

        /* font sizes */
        --font-size-lg: 1.125rem;
        --font-size-sm: 0.875rem;

        /* Colors */
        --color-gray-100: #fdfdfd;
        --color-gray-200: rgba(253, 253, 253, 0.8);
        --color-gray-300: rgba(253, 253, 253, 0.7);
        --color-deepskyblue: #00acce;
        --color-aliceblue: #edf1f6;
        --color-darkslategray-100: #004168;

        /* Paddings */
        --padding-sm: 0.875rem;
        --padding-87xl: 6.625rem;
        --padding-smi: 0.812rem;
        --padding-2xs: 0.687rem;
        --padding-12xs: 0.062rem;
        --padding-xl: 1.25rem;
        --padding-mini: 0.937rem;

        /* Border radiuses */
        --br-5xs: 8px;
      }

      .header-background {
        height: 4.25rem;
        width: 78.563rem;
        position: relative;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        background-color: var(--color-gray-100);
        display: none;
        max-width: 100%;
      }

      .admin-name {
        font-weight: 800;
        color: #00c8d2;
      }

      .subtext,
      .welcome-text {
        position: relative;
        white-space: nowrap;
        z-index: 1;
      }

      .welcome-text {
        text-decoration: none;
        color: inherit;
      }

      .subtext {
        font-size: var(--font-size-sm);
        font-weight: 500;
        text-align: right;
      }

      .welcome-wrapper,
      .admin-welcome-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        margin-left: 0;
      }

      .admin-welcome-container {
        gap: 0.062rem;
      }

      .welcome-wrapper {
        padding: var(--padding-12xs) 0 0;
      }

      .icon-background {
        height: 2.5rem;
        width: 8.688rem;
        position: relative;
        border-radius: var(--br-5xs);
        background-color: var(--color-aliceblue);
        border: 2px solid var(--color-deepskyblue);
        box-sizing: border-box;
        display: none;
      }

      .admin-id,
      .icon-image {
        position: relative;
        z-index: 2;
      }

      .icon-image {
        height: 1.438rem;
        width: 1.438rem;
        overflow: hidden;
        flex-shrink: 0;
        min-height: 1.438rem;
      }

      .admin-id {
        text-decoration: none;
        align-self: stretch;
        font-size: var(--font-size-lg);
        font-weight: 600;
        font-family: var(--font-lato);
        color: rgba(0, 66, 104, 0.8);
        text-align: right;
        display: inline-block;
        min-width: 5.563rem;
      }

      .admin-id-wrapper {
        width: 5.563rem;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: flex-start;
        padding: var(--padding-12xs) 0 0;
        box-sizing: border-box;
      }

      .page-container,
      .button-group,
      .header-container {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        box-sizing: border-box;
      }

      .button-group {
        cursor: pointer;
        border: 2px solid var(--color-deepskyblue);
        padding: 0.312rem 0.625rem 0.375rem var(--padding-2xs);
        background-color: var(--color-aliceblue);
        width: 8.688rem;
        border-radius: var(--br-5xs);
        justify-content: flex-end;
        gap: 0.125rem;
        z-index: 1;
        margin-left: auto;
      }

      .page-container,
      .header-container {
        background-color: var(--color-gray-100);
        max-width: 100%;
      }

      .header-container {
        position: absolute;
        right: 0;
        top: 0;
        width: 81rem;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        background-color: var(--color-gray-100);
        justify-content: space-between;
        padding: var(--padding-sm) var(--padding-87xl) var(--padding-smi) 3.187rem;
        z-index: 99;
        text-align: center;
        font-size: var(--font-size-lg);
        color: var(--color-darkslategray-100);
        font-family: var(--font-lato);
      }

      .page-container {
        width: 94.5rem;
        height: 61.375rem;
        overflow: hidden;
        justify-content: flex-end;
        padding: 0 0 57.125rem;
        line-height: normal;
        letter-spacing: normal;
      }

      @media screen and (max-width: 1200px) {
        .header-container {
          padding-left: 1.563rem;
          padding-right: 3.313rem;
          box-sizing: border-box;
        }
      }

      @media screen and (max-width: 600px) {
        .header-container {
          padding-right: 1.625rem;
          box-sizing: border-box;
        }
      }
    </style>
  </head>
  <body>
    <header class="header-container">
      <div class="header-background"></div>
      <div class="welcome-wrapper">
        <div class="admin-welcome-container">
          <a class="welcome-text">
            <b>Welcome Back, </b>
            <span class="admin-name">Admin</span>
            <b>!</b>
          </a>
          <div class="subtext">
            Have a nice day keeping the system in check.
          </div>
        </div>
      </div>
      <button class="button-group">
        <div class="icon-background"></div>
        <img class="icon-image" alt="" src="./public/frame.svg" />
        <div class="admin-id-wrapper">
          <a class="admin-id">ADMIN01</a>
        </div>
      </button>
    </header>
  </body>
</html>
