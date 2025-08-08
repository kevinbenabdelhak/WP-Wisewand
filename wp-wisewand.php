<?php
/*
Plugin Name: WP Wisewand
Plugin URI: https://kevin-benabdelhak.fr/plugins/wp-wisewand/
Description: WP Wisewand est un plugin qui permet de créer des articles WordPress directement depuis Wisewand sur une URL secrète et unique générée automatiquement à l’activation du plugin. L’URL du webhook, modifiable dans l’administration, sert de passerelle sécurisée pour publier des contenus à distance.
Version: 1.0
Author: Kevin BENABDELHAK
Author URI: https://kevin-benabdelhak.fr/
Contributors: kevinbenabdelhak
*/

if (!defined('ABSPATH')) {
    exit;
}

if ( !class_exists( 'YahnisElsts\\PluginUpdateChecker\\v5\\PucFactory' ) ) {
    require_once __DIR__ . '/plugin-update-checker/plugin-update-checker.php';
}
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$monUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/kevinbenabdelhak/WP-Wisewand/', 
    __FILE__,
    'wp-wisewand' 
);
$monUpdateChecker->setBranch('main');



require_once plugin_dir_path(__FILE__) . 'script/requete.php';
require_once plugin_dir_path(__FILE__) . 'options/add-options.php';
require_once plugin_dir_path(__FILE__) . 'options/options.php';
require_once plugin_dir_path(__FILE__) . 'script/passwd.php';
require_once plugin_dir_path(__FILE__) . 'script/generate.php';












