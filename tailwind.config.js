/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: "Montserrat",
                workSans: "Work Sans",
                mavenPro: "Maven Pro",
            },
            colors: {
                main: "#009335",
                button: "#00CB54",
                contrast: "#1E2022",
                contrast2: "#191919",
                contrast3: "#7D797A",
                links: "#BABABA",
                bars: "#736549",
                bluish: "#ECF5FE",
            },
        },
    },
    plugins: [],
};
