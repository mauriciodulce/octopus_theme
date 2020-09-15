<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function primarymenu() {
        $args = array(
            'theme_location'    => 'primary_navigation',
            'walker'            => new \App\wp_bootstrap4_navwalker()
        );
        return $args;
    }

}
