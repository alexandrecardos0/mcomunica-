const mix = require("laravel-mix");
const tailwindcss = require('tailwindcss'); /* Add this line at the top */
const sassGlobImporter = require("node-sass-glob-importer");

const themename = "mcomunica";
const themePath = "wp-content/themes/" + themename;
const resources = themePath + "/src";

mix.setPublicPath(`${themePath}/assets`)

.sass(`${resources}/scss/app.scss`, `${themePath}/assets/css`, {
    sassOptions: {
        importer: sassGlobImporter(),
    },
})
    //.js(`${resources}/js/vendors.js`, `${themePath}/assets/js`)
    .js(`${resources}/js/app.js`, `${themePath}/assets/js`)

    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .sourceMaps();