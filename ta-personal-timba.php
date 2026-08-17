<?php
/**
 * Plugin Name: TA Personal Timba
 * Description: Almacén acumulativo multi-lotería de resultados, con importación CSV y Vista Matriz responsive.
 * Version: 0.1.0
 * Author: TA
 * Text Domain: ta-personal-timba
 */
if (!defined('ABSPATH')) exit;
define('TAPT_VERSION','0.1.0');
define('TAPT_DB_VERSION','1');
define('TAPT_FILE',__FILE__);
define('TAPT_DIR',plugin_dir_path(__FILE__));
define('TAPT_URL',plugin_dir_url(__FILE__));
require_once TAPT_DIR.'includes/class-tapt-db.php';
require_once TAPT_DIR.'includes/class-tapt-core.php';
require_once TAPT_DIR.'includes/class-tapt-admin.php';
require_once TAPT_DIR.'includes/class-tapt-public.php';
register_activation_hook(__FILE__, ['TAPT_DB','activate']);
add_action('plugins_loaded', function(){ TAPT_Core::init(); });
