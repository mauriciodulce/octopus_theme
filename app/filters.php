<?php
/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'antialiased font-biotif leading-relaxed relative text-base text-octagray-900' ) );
} );
