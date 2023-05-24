module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
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
