const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        fuchsia: colors.fuchsia,
      },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
