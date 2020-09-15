const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath('./dist')
   .browserSync('octopusdigitalgroup.test');

mix.sass('resources/assets/styles/app.scss', 'styles')
   .sass('resources/assets/styles/editor.scss', 'styles')
   .purgeCss({
     whitelist: [
      require('purgecss-with-wordpress').whitelist,
      "font-medium",
      "text-3xl",
      "menu-nuestras-soluciones",
      "img",
      "text-lg",
      "tracking-tight",
      "text-5xl",
      "md:text-5xl",
      "sm:font-medium",
      "text-xl",
      "sm:text-xl",
      "sm:w-2/3",
      "w-2/3",
      "mx-auto",
      "md:mx-auto",
      "md:text-4xl",
      "text-4xl",
      "swiper-button-disabled",
     ],
     whitelistPatterns: require('purgecss-with-wordpress').whitelistPatterns,
   });

mix.js('resources/assets/scripts/app.js', 'scripts')
   .js('resources/assets/scripts/customizer.js', 'scripts')
   .blocks('resources/assets/scripts/editor.js', 'scripts')
   .extract();

mix.copyWatched('resources/assets/images/**', 'dist/images')
   .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix.autoload({
  jquery: ['$', 'global.jQuery',"jQuery","global.$","jquery","global.jquery"]
});

mix.options({
  processCssUrls: false,
  postCss: [
    require('tailwindcss')(),
    tailwindcss('./tailwind.config.js'),
    require('postcss-nested'),
    require('postcss-preset-env')({stage: 0})
  ],
});

mix.sourceMaps(false, 'source-map')
   .version();
