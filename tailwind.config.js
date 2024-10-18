/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize: {
        // Custom font sizes for different screen sizes
        'mobile-base': ['14px', '1.5'],   // Font for mobile content
        'mobile-heading': ['18px', '1.5'], // Font for mobile headings
        'tablet-base': ['16px', '1.6'],   // Font for tablet content
        'tablet-heading': ['20px', '1.6'], // Font for tablet headings
        'desktop-base': ['18px', '1.7'],   // Font for desktop content
        'desktop-heading': ['24px', '1.7'], // Font for desktop headings

        'icon-mobile': '24px',  // Font size for mobile icons
        'icon-tablet': '28px',  // Font size for tablet icons
        'icon-desktop': '32px', // Font size for desktop icons
      },
      container:{
        center:true
      },
      fontFamily: {
        roboto: ['Roboto']
      },
      screens: {
        'lg-lite': '930px'
      }
    },
  },
  plugins: [],
}