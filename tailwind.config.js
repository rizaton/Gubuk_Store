/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      width: {
        350: "350px",
        550: "550px",
        800: "800px",
        202: "202px",
        1200: "1200px",
      },
      borderWidth: {
        "border-w-tipis": "1px",
      },
    },
  },
  daisyui: {
    themes: [
      {
        nord: {
          ...require("daisyui/src/theming/themes")["nord"],
          "base-100": "#1D232A",
          "base-200": "#191E24",
          "base-300": "#15191E",
          "base-content": "#e5e7eb",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
};
