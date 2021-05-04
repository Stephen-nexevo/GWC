<?php

class My_Elementor_Widgets_Slider {

	protected static $instance = null;
	

	
	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('home-slider.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Slider_Widget() );
	}

}

add_action( 'init', 'my_elementor_init_slider' );
function my_elementor_init_slider() {
	My_Elementor_Widgets_Slider::get_instance();
}