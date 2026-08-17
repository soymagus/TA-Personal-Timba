<?php
if (!defined('ABSPATH')) exit;
class TAPT_Core { public static function init(){ new TAPT_Admin(); new TAPT_Public(); do_action('tapt_register_modules'); } }
