module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                adctBold: "'adineue PRO Cyr Bold Web', 'serif'",
                adctLight: "'adineue PRO Cyr Light Web', 'serif'",
            },
            colors:{
                'gray-color': '#F9F9F9',
                'blue-color': '#003AAD',
                'blue-color-2': '#0048B3',
                'orange-color': '#FF6C0E',
                'black-color': '#202124',
                'beige-color': '#F8F7F7',
                'green-color': '#82B085',
            },
            fontSize: {
                xxs: ['0.625rem', {lineHeight: '1rem'}]
            },
            spacing:{
                22: '5.5rem',
                44: '11rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                128: '32rem',
                964: '62.93rem',
                1134: '70.87rem',
            },
            maxWidth: {
                custom: '71.87rem',
            },
            boxShadow: {
                card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                dialog: '3px 4px 15px 0 rgba(36, 37, 38, 0.22)',
            },
        },
    },
    plugins: [],
}
