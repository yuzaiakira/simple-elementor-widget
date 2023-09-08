<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor simple-elementor-widget Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_Widget_1 extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve simple-elementor-widget widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'simple-elementor-widget';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve simple-elementor-widget widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'simple elementor widget', 'simple-elementor-widget' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve simple-elementor-widget widget icon.
	 * for more icon see below links
	 * https://elementor.github.io/elementor-icons/
	 * https://fontawesome.com/
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-code';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the simple-elementor-widget widget belongs to.
	 * For more information see elementor documentations:
	 * https://developers.elementor.com/docs/widgets/widget-categories/
	 * 
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the simple-elementor-widget widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'simple-elementor-widget', 'simple', 'link' ];
	}

	/**
	 * Register simple-elementor-widget widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 * 
	 * https://developers.elementor.com/docs/widgets/widget-controls/
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

	}

	/**
	 * Render simple-elementor-widget widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 * 
	 * https://developers.elementor.com/docs/widgets/widget-rendering/
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

	}

	/**
	 * Also see this part of elementor documentations for add css and js dependencies to your widget:
	 * 
	 * https://developers.elementor.com/docs/widgets/widget-dependencies/
	 * 
	 */
}
