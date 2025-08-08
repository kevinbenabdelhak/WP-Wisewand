<?php 

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', function () {
    add_options_page(
        'WP Wisewand',
        'WP Wisewand',
        'manage_options',
        'wp-wisewand',
        'wisewand_options_page'
    );
});