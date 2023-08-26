const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();


mix.js(__dirname + '/Resources/assets/js/app.js', 'js/frontend.js')
.sass(__dirname + '/Resources/assets/app.scss', 'css/frontend.css')

mix.babel([
    __dirname + '/Resources/views/components/carousel/scripts/splideDefault.js',
    __dirname + '/Resources/views/layouts/**/footer.js',
    // __dirname + '/Resources/views/components/.../....js',
],'../../public/modules/frontend/js/main.min.js');

mix.babel([
    __dirname + '/Resources/views/layouts/**/home.js',
    __dirname + '/Resources/views/layouts/**/bannerSlide.js',

],'../../public/modules/frontend/js/index.min.js');

mix.webpackConfig({
    stats: {
        children: true,
    },});