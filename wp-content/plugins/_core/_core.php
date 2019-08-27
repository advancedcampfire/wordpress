<?php
/**
 * Plugin Name: (custom) Core Plugin
 * Description: Plugin for custom WordPress development
 * Author: Michael Mizner
 * Author URI: https://mizner.io
 * License: GPLv3+
 */

namespace _core;

defined('WPINC') || die;


define(__NAMESPACE__ . '\PATH', plugin_dir_path(__FILE__));
define(__NAMESPACE__ . '\URI', plugin_dir_url(__FILE__));