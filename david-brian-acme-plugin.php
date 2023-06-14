<?php
/*
Plugin Name: DAVID BRIAN ACME PLUGIN
Description: This plugin is developed as a project to hand in to the KRITEK team. It sinserts the meta tags in the code therein into all front end pages
Version: 1.0.0
Author: DAVID BRIAN from KRITEK
Author URI: https://david-brian.com
*/

function frontend_insert_the_meta_tags() {
    echo '<meta name="application-name" content="ACME SOFTWARE ™">';
    echo '<meta name="author" content="KRITEK, s.r.o. - https://kritek.eu - info@kritek.eu">';
}
add_action('wp_head', 'frontend_insert_the_meta_tags');