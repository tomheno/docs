const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
  purge: ['source/**/*.blade.php', 'source/**/*.md', 'source/**/*.html'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Commissioner', ...defaultTheme.fontFamily.sans],
        mono: ['JetBrains Mono', ...defaultTheme.fontFamily.mono],
      },
      colors: {
        primary: {
          50: '#f9edec',
          100: '#F5E3E1',
          200: '#E9C0BA',
          300: '#e0a69f',
          400: '#da958b',
          500: '#cd7165',
          600: '#C35547',
          700: '#ad4638',
          800: '#9a3412',
          900: '#7c2d12',
        },
        secondary: {
          50: '#eaf6fa',
          100: '#d5edf6',
          200: '#abdaed',
          300: '#82c8e3',
          400: '#63BADD',
          500: '#3AA8D3',
          600: '#278BB3',
          700: '#0e7490',
          800: '#155e75',
          900: '#164e63',
        },
        success: colors.emerald,
        danger: colors.red,
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            fontWeight: theme('fontWeight.light'),
            color: theme('colors.gray.600'),
            h1: {
              fontWeight: theme('fontWeight.light'),
              color: theme('colors.primary.700'),
            },
            h2: {
              fontWeight: theme('fontWeight.normal'),
            },
            h3: {
              fontWeight: theme('fontWeight.normal'),
            },
            a: {
              color: theme('colors.primary.500'),
              '&:hover': {
                color: theme('colors.primary.700'),
              },
            },
            blockquote: {
              color: theme('colors.gray.700'),
            },
            code: {
              fontWeight: theme('fontWeight.normal'),
              backgroundColor: theme('colors.gray.100'),
              borderRadius: theme('borderRadius.sm'),
              padding: `${theme('spacing[0.5]')} theme('spacing.1')`,
            },
          },
        },
      }),
    },
  },
  variants: {
    extend: {},
  },
  corePlugins: {
    container: false,
  },
  plugins: [require('@tailwindcss/typography')],
}
