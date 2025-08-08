<?php 

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', function () {
    $webhook_slug = get_option('wisewand_webhook_slug');
if (!$webhook_slug || strlen($webhook_slug) < 10) {
    $webhook_slug = wisewand_generate_strong_slug(50);
    update_option('wisewand_webhook_slug', $webhook_slug);
}
    $req_path = rtrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

    if (
        $req_path === '/' . $webhook_slug &&
        $_SERVER['REQUEST_METHOD'] === 'POST'
    ) {
        $data = json_decode(file_get_contents('php://input'), true);

        $new_post = [
            'post_title'   => isset($data['title']) ? sanitize_text_field($data['title']) : 'Titre par défaut',
            'post_content' => isset($data['content']) ? wp_kses_post($data['content']) : '',
            'post_status'  => 'publish',
            'post_author'  => 1,
            'post_type'    => 'post',
        ];

        $post_id = wp_insert_post($new_post);

        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'post_id' => $post_id]);
        exit;
    }
});