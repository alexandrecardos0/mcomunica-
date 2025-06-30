/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./wp-content/themes/mcomunica/**/*.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "1rem",
        md: "1rem",
        lg: "1rem",
        xl: "2rem",
      },
      screens: {
        sm: "360px",
        md: "728px",
        lg: "984px",
        xl: "1300px",
      },
    },
    extend: {
      aspectRatio: {
        '5/6': '5 / 6',
      },
      "colors": {
        primary: {
          50: "#F0F6FF",
          100: "#E0EDFF",
          200: "#BDD8FF",
          300: "#9EC6FF",
          400: "#7AB2FF",
          500: "#5A9EFF",
          600: "#1476FF",
          700: "#0057D1",
          800: "#00398A",
          900: "#001E47",
          950: "#000F24"
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography')({
      className: 'wysiwyg',
    }),
  ],
}

