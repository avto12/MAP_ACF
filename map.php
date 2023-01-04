<?php
// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBBas2d42keDa3dsaOz-ya9xOOjxwqbtKU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyBBas2d42keDa3dsaOz-ya9xOOjxwqbtKU');
}
add_action('acf/init', 'my_acf_init');