<?php

/**
 * Bites4WP - Book+Main Bites Profile Link for WordPress
 *
 * @author            Memphis McKay
 * @since             1.0.0
 * @package           Bites4WP
 *
 * @wordpress-plugin
 * Plugin Name:       Bites4WP
 * Plugin URI:        http://bites4wp.memphismckay.com
 * Description:       Book+Main Bites Profile Link Plugin for WordPress
 * Version:           1.0.4
 * Author:            Memphis McKay
 * Author URI:        https://memphismckay.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bites4wp
 * Domain Path:       /languages
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *  
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

  define( 'BITES4WP_CURRENT_VERSION', '1.0.4' );
  define( 'BITES4WP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
  define( 'BITES4WP_PLUGIN_URL', plugin_dir_url(__FILE__) );
  define( 'BITES4WP_PLUGIN_BASENAME', plugin_basename(__FILE__) );

  //Check for updates
  require BITES4WP_PLUGIN_DIR . 'plugin-update-checker/plugin-update-checker.php';
  $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker( 
      'https://github.com/mostlymarvin/bites4wp/',
	     __FILE__,
	    'bites4wp'
    );

  //Load the Template Loader Classes
  require BITES4WP_PLUGIN_DIR . 'lib/template-loader/class-gamajo-template-loader.php';
  require BITES4WP_PLUGIN_DIR . 'lib/template-loader/class-bites4wp-template-loader.php';

  //Load the Customizer Options 
  require BITES4WP_PLUGIN_DIR . 'lib/customizer/bites4wp-customizer-sanitization.php';
  require BITES4WP_PLUGIN_DIR . 'lib/customizer/bites4wp-customizer-preview.php';
  require BITES4WP_PLUGIN_DIR . 'lib/customizer/bites4wp-options.php';
  require BITES4WP_PLUGIN_DIR . 'lib/customizer/bites4wp-color-options.php';
  require BITES4WP_PLUGIN_DIR . 'lib/customizer/bites4wp-mobile-options.php';

  //Load Custom CSS, Floating Icon Display, Shortcode
  require BITES4WP_PLUGIN_DIR . 'lib/bites4wp-setup.php';
  require BITES4WP_PLUGIN_DIR . 'lib/bites4wp-custom-css.php';
  require BITES4WP_PLUGIN_DIR . 'lib/shortcodes/bites4wp-shortcodes.php';
  require BITES4WP_PLUGIN_DIR . 'lib/bites4wp-display.php';
  