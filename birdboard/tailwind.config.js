module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    boxShadow: {
        default: '0 0 5px 0 rgba(0, 0, 0, 0.8)'
    },

    extend: {
        colors: {
            'grey-light': '#F5F6F9',
            'grey': 'rgba(0, 0, 0, 0.4)',
            'blue': '#47cdff',
            'blue-light': '#8ae2fe'
        }
    },
  },
  plugins: [],
}
