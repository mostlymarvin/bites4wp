<?php
 
/**
 * Template loader for Bites4WP Plugin
 *
 * Only need to specify class properties here.
 *
 */
class Bites4WP_Template_Loader extends Gamajo_Template_Loader {
 
  /**
   * Prefix for filter names.
   *
   * @since 1.0.0
   * @type string
   */
  protected $filter_prefix = 'bites4wp';
 
  /**
   * Directory name where custom templates for this plugin should be found in the theme.
   *
   * @since 1.0.0
   * @type string
   */
  protected $theme_template_directory = 'bites4wp';
 
  /**
   * Reference to the root directory path of this plugin.
   *
   * @since 1.0.0
   * @type string
   */
  protected $plugin_directory = BITES4WP_PLUGIN_DIR;
 
}
