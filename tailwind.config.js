const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
      './storage/framework/views/*.php',
      './resources/**/*blade.php'

  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      // Build your palette here
      transparent: 'transparent',
      current: 'currentColor',
      gray: colors.trueGray,
      red: colors.red,
      blue: colors.sky,
      yellow: colors.amber,
      teal: colors.teal,
    },
    extend: {
      
    },
    
    
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
}

module.exports = {
  theme: {
    
  }
}