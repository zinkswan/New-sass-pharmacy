const mix = require("laravel-mix");
const vite = require("laravel-vite");

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        //
    ])
    .vite();
