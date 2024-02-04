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
                b: "0px 1px 0px 0px rgba(0, 0, 0, 0.25)",
                compo: "0px 2px 2px 0px rgba(0, 0, 0, 0.25)",
                in: "inset 0px 0px 7px -1px rgba(0,0,0,0.55)"
            },
            fontFamily: {
                default: ['Urbanist', 'sans-serif'],
            },
            colors: {
                "theme-1": "rgba(241, 245, 249)",
                "theme-2": "rgba(255, 255, 249)",
                "rev-theme-1": "rgba(24,24,24)",
                "main": "#BF72FB",
                "green": "rgba(74, 222, 128)",
                "red": "rgba(255, 0, 10)",
                "orange": "#F7B408",
                "blue": "#72C2FB"
            }
        },
    },
    plugins: [],
}

