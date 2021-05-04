<?php

class My_Elementor_Widgets_Services {

	protected static $instance = null;
	

	
	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('project-carousel.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Services_Widget() );
	}

}

add_action( 'init', 'my_elementor_init_testimonial' );
function my_elementor_init_testimonial() {
	My_Elementor_Widgets_Services::get_instance();
}