module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'red': '#FF0000',
            'grey-light': '#F5F6F9',
            'grey': 'rgba(0, 0, 0, 0.4)',
            'blue': '#47cdff',
            'blue-light': '#8ae2fe',
            'error': 'var(--text-error-color)',
            page: 'var(--page-background-color)',
            card: 'var(--card-background-color)',
            button: 'var(--button-background-color)',
            header: 'var(--header-background-color)',
            default: 'var(--text-default-color)'
        },
    },
  },
  plugins: [],
}
