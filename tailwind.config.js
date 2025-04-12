module.exports = {
  content: [
    "./*.html",
    "./*.php",
    "./include/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        baleen: '#201f54',
      },
      backgroundImage: {
        'gradient-animation': 'linear-gradient(-45deg, #8F87F1, #C68EFD, #E9A5F1, #FED2E2)',
      },
      backgroundSize: {
        '400': '400% 400%',
      },
      animation: {
        gradient: 'gradient 20s ease infinite',
      },
      keyframes: {
        gradient: {
          '0%': { backgroundPosition: '0% 50%' },
          '25%': { backgroundPosition: '50% 100%' },
          '50%': { backgroundPosition: '100% 50%' },
          '75%': { backgroundPosition: '50% 0%' },
          '100%': { backgroundPosition: '0% 50%' },
        },
      },
    },
  },
  plugins: [],
}