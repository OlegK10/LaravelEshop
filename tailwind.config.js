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
            width: {
                '128': '32rem',
                'ml': '64rem',
            },
            height: {
                '128': '32rem',

            },
            boxShadow: {
                r: "1px 0px 2px 0px rgba(0, 0, 0, 0.25)",
                b: "0px 1px 0px 0px rgba(0, 0, 0, 0.25)",
                compo: "0px 2px 2px 0px rgba(0, 0, 0, 0.25)",
                in: "inset 0px 0px 7px -1px rgba(0,0,0,0.55)"
            },
            fontFamily: {
                default: ['Montserrat', 'sans-serif'],
                mayor: ["Cinzel", 'serif']
            },
            zIndex: {
                '60': '60',
            },
            colors: {
                "l1": "white",
                "l2": "DFDFDF",
                "d1": "#242424",
                "d2": "#4E4E4E",
                "d3":"#717171",
                "m": '#BDCD05',
                "od1": 'rgba(24,24,24,0.5)',
                "green": '#21CD05',
                "red": '#DC4040'
            }
        },
    },
    plugins: [],
}
