<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://simonbarnett.co.za
 * @since      1.0.0
 *
 * @package    Header_Tools
 * @subpackage Header_Tools/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Header_Tools
 * @subpackage Header_Tools/public
 * @author     Simon Barnett <simon@simonbarnett.co.za>
 */
class Header_Tools_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Header_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Header_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/header-tools-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Header_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Header_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 wp_enqueue_script( 'headroom', plugin_dir_url( __FILE__ ) .
 		'js/headroom.js', array('jquery'), '0.9.3', true );
		wp_enqueue_script( 'headroomjq', plugin_dir_url( __FILE__ ) .
	 'js/jQuery.headroom.js', array('jquery'), '0.9.3', true );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/header-tools-public.js', array( 'jquery' ), $this->version, true );


	}

}
