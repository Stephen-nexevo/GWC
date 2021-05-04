<?php
namespace Elementor;

class Slider_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'home-slider';
	}

	public function get_title() {
		return __( 'Home - Slider', 'elementor' );
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();


		$repeater->add_control(
			'image',
			[
				'label' => __( 'Image', 'elementor' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'title' , [
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		
		$repeater->add_control(
			'desc' , [
				'label' => __( 'Content', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
		
		$repeater->add_control(
			'link' , [
				'label' => __( 'Button Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'link-text' , [
				'label' => __( 'Button Text', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		
		
		$repeater->add_control(
			'milestone1' , [
				'label' => __( 'First No', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'milestone1-text' , [
				'label' => __( 'First Text', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
			
		$repeater->add_control(
			'milestone2' , [
				'label' => __( 'Second No', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'milestone2-text' , [
				'label' => __( 'Second Text', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		
	    $repeater->add_control(
			'milestone3' , [
				'label' => __( 'Third No', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'milestone3-text' , [
				'label' => __( 'Third Text', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		

		


		$this->add_control(
			'list',
			[
				'label' => __( 'Slider List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[   'title' => __( 'Slider 1', 'plugin-domain' ),

						
					],
					[
						'title' => __( 'Slider 2 ', 'plugin-domain' ),				  
					],
				],
				'title' => '{{{title}}}',
			]
		);

		$this->end_controls_section();
	}



	protected function render() {
		$settings = $this->get_settings_for_display();?>
		
		<div class="owl-carousel home-slider">
		<?php

		if ( $settings['list'] ) {
		    $list_count =  count($settings['list']);
		
		    	foreach ( $settings['list'] as $item ) {
		    		?>
		    		
		    		<div class="item" style="background-image:url(<?php echo $item['image']['url']; ?>);">
		    			<div class="desc">
			    			<h5><?php echo $item['title']; ?></h5><?php echo $item['desc']; ?>
			    			<a href="<?php echo $item['link']; ?>"><?php echo $item['link-text']; ?></a>
			    		</div>
			    		
			    		<div class="milestone row">
			    		    <div class="col-4">
			    		        <h1><?php echo $item['milestone1']; ?></h1>
			    		        <p><?php echo $item['milestone1-text']; ?></p>
			    		    </div>
			    		    
			    		    <div class="col-4">
			    		        <h1><?php echo $item['milestone2']; ?></h1>
			    		        <p><?php echo $item['milestone2-text']; ?></p>
			    		    </div>
			    		    
			    		    <div class="col-4">
			    		        <h1><?php echo $item['milestone3']; ?></h1>
			    		        <p><?php echo $item['milestone3-text']; ?></p>
			    		    </div>
			    		</div>
			    		
		    		</div>
		    		

				<?php } ?>
		  
		    <?php } ?>

		</div>

	<?php }



	protected function _content_template() {
		
	}
}
