/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue"
  ],
  theme: {
      darkMode: 'class',
      extend: {
          strokeWidth: {
              '3': '3',
          }
      }
  },
  plugins: [],
}

