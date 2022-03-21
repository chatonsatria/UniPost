module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Montserrat: ['Montserrat', 'sans-serif']
            },
            animation: {
                fadeIn: "fadeIn 1s ease-in forwards",
                fadeInUp: "fadeInUp 1s forwards",
                fadeInDown: "fadeInDown 1s forwards",
                fadeInRight: "fadeInRight 1s forwards",
                fadeInLeft: "fadeInLeft 1s forwards",
                fadeInUpCustom1: "fadeInUpCustom1 1s forwards",
                fadeInDownCustom1: "fadeInDownCustom1 1s forwards",
                UpDown: "UpDown 1s ease-in infinite",
                scale: "scale 1s forwards",
            },
            keyframes: {
                fadeIn: {
                    "0%": {
                        opacity: 0
                    },
                    "100%": {
                        opacity: 1
                    }
                },
                fadeInUp: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(100px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0px)'
                    },
                },
                fadeInDown: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-100px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0px)',
                    },
                },
                fadeInRight: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateX(-100px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateX(0px)',
                    },
                },
                fadeInLeft: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateX(100px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateX(0px)',
                    },
                },
                UpDown: {
                    '0%': {
                        opacity: '1',
                        transform: '-translateY(100px)',
                    },
                    '50%': {
                        opacity: '1',
                        transform: 'translateY(0px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: '-translateY(100px)'
                    }
                },
                fadeInUpCustom1: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(100px)',
                    },
                    '100%': {
                        opacity: '1',
                        transform: '-translateY(50px)'
                    }
                },
                fadeInDownCustom1: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-100px)',
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(-44px)'
                    }
                },
                scale: {
                    "0%": {
                        opacity: '0',
                        transform: 'scale(0.5)'
                    },
                    "100%": {
                        opacity: '1',
                        transform: 'scale(1)'
                    }
                },
            },
            variants: {
                animation: ["motion-safe"]
            }
        },
    },
    plugins: [],
}
