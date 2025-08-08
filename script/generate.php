<?php 

if (!defined('ABSPATH')) {
    exit;
}

function wisewand_on_activate() {
    if (get_option('wisewand_webhook_slug') === false) {
        $slug = wisewand_generate_strong_slug(50);
        update_option('wisewand_webhook_slug', $slug);
    }
}
register_activation_hook(__FILE__, 'wisewand_on_activate');