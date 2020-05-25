<?php
/* 
*   Plugin Name:    My Fancy Plugin
*   Plugin URI:     https://data-lord.se/myfirsplugin
*   Description:    This is my first plugin. It does not do much.
*   Version:        0.1
*   Author:         Fredrik Larsson
*   Author URI:     http://lmgtfy.com
*   License:        WTFPL
*   License URI:    https://www.wtfpl.net/
*   Text Domain:    myfirstplugin
*   Domain Path:    /languages
*/

function mfp_myfirstshortcode() {
    return "<p>HELLO WORLD</p>";
}

function mfp_init() {
    add_shortcode('myfirstshortcode', 'mfp_myfirstshortcode');

    add_shortcode('mysecondshortcode', function() {
        return "GOOD BYE WORLD";
    });

    add_shortcode('mythirdshortcode', function($atts = [], $content = null)    {
        return "<p>" . $content . "</p>";
    });
}

add_action('init', 'mfp_init');