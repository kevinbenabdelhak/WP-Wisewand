<?php

if (!defined('ABSPATH')) {
    exit;
}

function wisewand_options_page() {
    if (isset($_POST['wisewand_regenerate_webhook']) && check_admin_referer('wisewand_options_regen')) {
        $slug = wisewand_generate_strong_slug(50);
        update_option('wisewand_webhook_slug', $slug);
        $regen_message = '<div class="updated"><p>Nouveau webhook généré : <strong>/' . esc_html($slug) . '</strong></p></div>';
    }

    $current_slug = get_option('wisewand_webhook_slug');
    if (!$current_slug || strlen($current_slug) < 10) {
        $current_slug = wisewand_generate_strong_slug(50);
        update_option('wisewand_webhook_slug', $current_slug);
    }
    $webhook_url = esc_url(site_url('/' . $current_slug));
    ?>
    <div class="wrap">
        <h1>Réglages WP Wisewand</h1>
        <?php if (!empty($regen_message)) echo $regen_message; ?>
        <table class="form-table" style="width:max-content">
            <tr>
                <th scope="row"><label for="wisewand_webhook_url">Webhook</label></th>
                <td>
                    <div style="display:flex;align-items:center;gap:6px;">
                        <input type="text" id="wisewand_webhook_url" readonly value="<?php echo $webhook_url; ?>" style="font-family:monospace;width:350px;background:#f9f9f9;cursor:pointer;" />
                        <button type="button" id="wisewand-copy-url" class="button" title="Copier l’URL">
                            <span class="dashicons dashicons-clipboard"></span>
                        </button>
                    </div>
                    <p class="description">
                        Utilisez cette URL pour envoyer vos requêtes POST et publier des contenus. <strong>Gardez-la secrète !</strong>
                    </p>
                </td>
            </tr>
        </table>

        <form method="post" style="margin-top:24px;">
            <?php wp_nonce_field('wisewand_options_regen'); ?>
            <button type="submit" name="wisewand_regenerate_webhook" class="button button-warning">
                <span class="dashicons dashicons-update"></span> Régénérer le webhook
            </button>
        </form>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const copyBtn = document.getElementById('wisewand-copy-url');
            const urlInput = document.getElementById('wisewand_webhook_url');
            if(copyBtn && urlInput) {
                copyBtn.addEventListener('click', function() {
                    urlInput.select();
                    urlInput.setSelectionRange(0, 99999); // mobile support
                    document.execCommand('copy');
                    copyBtn.classList.add("button-primary");
                    copyBtn.title = 'Copié !';
                    setTimeout(function(){
                        copyBtn.classList.remove("button-primary");
                        copyBtn.title = 'Copier l’URL';
                    }, 1000);
                });

                urlInput.addEventListener('click', function() {
                    urlInput.select();
                    document.execCommand('copy');
                });
            }
        });
        </script>
    </div>
    <?php
}

add_action('admin_head', function() {
    $screen = function_exists('get_current_screen') ? get_current_screen() : null;
    if ($screen && $screen->id === 'settings_page_wp-wisewand') {
        echo '<style>
            .form-table { width: max-content; min-width: 0; }
            #wisewand_webhook_url { cursor: pointer; }
            #wisewand-copy-url .dashicons { font-size:20px; vertical-align:middle; }
            .button-warning { background-color: #ba3f2f; color: #fff; border-color: #a00; }
            .button-warning:hover { background-color: #a00; color:#fff; border-color: #900; }
            .dashicons-update{position:relative;top:4px;}
        </style>';
    }
});