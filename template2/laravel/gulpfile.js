var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        // LESS Styles
        .less('app.less')
        .less('pages/common.less')
        .less('bootstrap/bootstrap.less')
        .less('themes/beadmin-theme-a.less')
        .less('themes/beadmin-theme-c.less')
        .less('themes/beadmin-theme-d.less')
        .less('themes/beadmin-theme-e.less')
        // Scripts
        .scripts([
            'app.init.js',
            'modules/**/*.js'
        ], 'public/js/app.js')
        //  Edit here the modules scripts
        //  that will be used in the pages
        .scripts([
            'pages.init.js',
            'modules/utils.js',
            'modules/play-animations.js'
        ], 'public/js/pages.js');
});
