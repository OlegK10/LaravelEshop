/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            vl: '330px',
            sm: '480px',
            slm: '525px',
            md: '768px',
            lg: '976px',
            lgx: '1024px',
            xs: '1100px',
            xm: '1300px',
            xl: '1440px',
        },
        extend: {
            borderWidth: {
                "1": '1px',
            },
            boxShadow: {
                r: "1px 0px 2px 0px rgba(0, 0, 0, 0.25)",
                compo: "0px 2px 2px 0px rgba(0, 0, 0, 0.25)",
            },
            fontFamily: {
                default: ['Urbanist', 'sans-serif'],
            },
            colors: {
                "theme-1": "rgba(241, 245, 249)",
                "theme-2": "rgba(255, 255, 249)",
                "main": "rgba(145,200,51)"
            }
        },
    },
    plugins: [],
}

