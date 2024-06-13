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
    themes: ["light"],
  },
  plugins: [require("daisyui")],
};
