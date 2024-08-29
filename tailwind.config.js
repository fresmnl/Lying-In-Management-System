/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./Admin/**/*.{html,js,php}",
    "./Login/**/*.{html,js,php}"
  ],
  theme: {
      screens: {
        lg: {
          max: "1200px",
        },
        mq1050: {
          raw: "screen and (max-width: 1050px)",
        },
        mq750: {
          raw: "screen and (max-width: 750px)",
        },
        mq450: {
          raw: "screen and (max-width: 450px)",
        },
      },
    extend: {},
  },
  plugins: [],
}

