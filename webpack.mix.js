const mix = require('laravel-mix')

mix.copyDirectory('resources/theme/images', 'public/images')

mix.copyDirectory('resources/assets/images', 'public/assets/images')

mix.copyDirectory('public/web/plugins/global/fonts', 'public/assets/css/fonts')

mix.copyDirectory('resources/theme/webfonts', 'public/assets/webfonts')

mix.copyDirectory('resources/theme/fonts', 'public/assets/fonts')

mix.copyDirectory('resources/fonts', 'public/assets/fonts')

mix.sass('resources/assets/scss/main.scss', 'public/assets/css/public.css')
    .version()

mix.styles([
    'resources/assets/css/style.css',
    'resources/assets/css/third-party.css',
], 'public/assets/css/main.css').version()

mix.scripts([
    'resources/assets/js/style/fancybox.min.js',
    'resources/assets/js/style/isotope.js',
    'resources/assets/js/style/smooth-scroll.js',
    'resources/assets/js/style/sticky.js',
    'resources/assets/js/style/swiper.min.js',
    'resources/assets/js/style/swup.min.js',
    'resources/assets/js/style/owl.carousel.min.js',
], 'public/assets/js/style-plugins.js').version()

mix.js([
    'resources/assets/js/style/typer.js',
    'resources/assets/js/style/chat.js',
    'resources/assets/js/style/graph.js',
    'resources/assets/js/style/style-common.js',
    'resources/assets/js/style/style-loader.js',
    'resources/assets/js/style/style-menu.js',
    'resources/assets/js/style/style-swipe.js',
    'resources/assets/js/style/style-third.js',
    'resources/assets/js/style/style-plan.js',
    'resources/assets/js/style/style-initialize.js',
    'resources/assets/js/style/style-owl.js',
    //end added
], 'public/assets/js/style.js').version()

mix.styles([
    'resources/theme/css/third-party.css',
    'node_modules/intl-tel-input/build/css/intlTelInput.css',
    'node_modules/quill/dist/quill.snow.css',
    'node_modules/quill/dist/quill.bubble.css',
], 'public/assets/css/third-party.css')

// // third-party js
mix.scripts([
    'resources/theme/js/vendor.js',
    'resources/theme/js/plugins.js',
    'node_modules/chart.js/dist/chart.js',
    'node_modules/intl-tel-input/build/js/intlTelInput.js',
    'node_modules/intl-tel-input/build/js/utils.js',
    'node_modules/quill/dist/quill.js',
], 'public/assets/js/third-party.js').version();

// mix.scripts('node_modules/intl-tel-input/build/js/utils.js', 'public/assets/js/inttel/js/utils.min.js')

// pages js
mix.js([
    'resources/assets/js/email_sub/email-sub.js',
    'resources/assets/js/enquiry/enquiry.js',
    'resources/assets/js/languages/languages.js',
    'resources/assets/js/home_page/home_page.js',
    'resources/assets/js/home/contact.js'
], 'public/assets/js/pages.js').version();



// light theme css
mix.styles('resources/theme/css/style.css', 'public/assets/css/style.css');
mix.styles('resources/theme/css/plugins.css', 'public/css/plugins.css');

// dark theme css
mix.styles('resources/theme/css/style.dark.css', 'public/assets/css/style.dark.css');
mix.styles('resources/theme/css/plugins.dark.css', 'public/css/plugins.dark.css');


// front-third-party js
mix.scripts([
    'resources/theme/js/vendor.js',
    'resources/theme/js/plugins.js',
], 'public/assets/js/front-third-party.js').version()



mix.copy('node_modules/slick-slider/slick/slick-theme.css',
    'public/assets/css/slider/css/slick-theme.min.css')
mix.copy('node_modules/slick-slider/slick/ajax-loader.gif',
    'public/assets/css/slider/css/ajax-loader.gif')
mix.copy('node_modules/slick-slider/slick/slick.css',
    'public/assets/css/slider/css/slick.css')
mix.copy('node_modules/slick-slider/slick/slick.min.js',
    'public/assets/js/slider/js/slick.min.js')




mix.styles('node_modules/lightbox2/dist/css/lightbox.min.css', 'public/assets/css/lightbox.css')
mix.js('node_modules/lightbox2/dist/js/lightbox.min.js', 'public/assets/js/lightbox.js')
mix.copyDirectory('node_modules/lightbox2/dist/images', 'public/assets/images')
