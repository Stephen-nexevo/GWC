<?php
namespace Elementor;

class Services_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'project-carousel';
	}

	public function get_title() {
		return __( 'Project - Carousel', 'elementor' );
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
			'project-image',
			[
				'label' => __( 'Image', 'elementor' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'project-title' , [
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		
		$repeater->add_control(
			'project-content' , [
				'label' => __( 'Content', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);
		
		$repeater->add_control(
			'project-link' , [
				'label' => __( 'Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		


		$this->add_control(
			'list',
			[
				'label' => __( 'Project List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[   'project-title' => __( 'Project 1', 'plugin-domain' ),

						
					],
					[
						'project-title' => __( 'Project 2 ', 'plugin-domain' ),				  
					],
				],
				'project-title' => '{{{project-title}}}',
			]
		);

		$this->end_controls_section();
	}



	protected function render() {
		$settings = $this->get_settings_for_display();?>
		
		<div class="owl-carousel project-carousel">
		<?php

		if ( $settings['list'] ) {
		    $list_count =  count($settings['list']);
		
		    	foreach ( $settings['list'] as $item ) {
		    		?>
		    		<a href="<?php echo $item['project-link']; ?>">
    		    		<div class="item">
    		    			<img class="project-image elementor-animation-bob" src="<?php echo $item['project-image']['url']; ?>">
    		    			<div class="content">
    			    			<h5><?php echo $item['project-title']; ?></h5><?php echo $item['project-content']; ?>
    			    			
    			    		</div>
    		    		</div>
		    		</a>

				<?php } ?>
		  
		    <?php } ?>

		</div>

	<?php }



	protected function _content_template() {
		
	}
}
