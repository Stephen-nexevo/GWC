<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GWC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel='stylesheet' href='https://demo-nexevo.in/stephen/tatapower/wp-content/themes/tata-power/assets/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="hero-anime">



    <div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-expand-lg navbar-expand-xl navbar-light">
					
					<div class="site-branding">
                		<?php
                		if ( has_custom_logo() ) {
                			the_custom_logo();
                		} elseif ( $site_name ) {
                			?>
                			<h1 class="site-title">
                				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'hello-elementor' ); ?>" rel="home">
                					<?php echo esc_html( $site_name ); ?>
                				</a>
                			</h1>
                			<p class="site-description">
                				<?php
                				if ( $tagline ) {
                					echo esc_html( $tagline );
                				}
                				?>
                			</p>
                		<?php } ?>
                	</div>
	
		
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
                        

								<ul class="navbar-nav ml-auto py-4 py-md-0 <?php if(get_theme_mod('mega_menu_enable')=="block"){ echo "mm_enabled"; }else{} ?>">
							    	    
        						<?php   
                                    if ( has_nav_menu( 'menu-1' )){
                                    ?>
                                        <?php
                                			if ( has_nav_menu( 'menu-1' ) ) {
                                			    
                                				echo preg_replace( '#<li[^>]+>#', '<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">',
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location' => 'menu-1', 
                                                            'container'  => true,
                                                            'container_class'   => true,
                                                            'menu_class'        => true,
                                                            'menu_id' => true,
                                                            'items_wrap'        => '%3$s',
                                                            'echo'              => true,
                                                            'walker'  => new Child_Wrap() ,
                                                           

                                                        )
                                                    )
                                                );
                                				
                                			} 
                                                            			
                                	
             
                                    }
                                ?>
                      							
								
							</ul>

							


						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>

