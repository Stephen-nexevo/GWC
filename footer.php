<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GWC
 */

?>

    <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php dynamic_sidebar('footer-1'); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-3">
					<?php dynamic_sidebar('footer-2'); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-3">
					<?php dynamic_sidebar('footer-3'); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-3">
					<?php dynamic_sidebar('footer-4'); ?>
				</div><!--  .col-md-4 -->
			</div><!--  .row -->

			<div class="row copyrights">
				<div class="col-lg-6 site-info"><p>Copyright &copy; <?php echo date("Y"); ?> GWC | All rights reserved</p></div>
			    <div class="col-lg-6 site-info" style="text-align:right;"><p>Designed & Developed by <a href="https://www.nexevo.in/" target="_blank"> Nexevo Technologies</a></p></div>
			</div>

		</div><!--  .container -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>


<script>
    
/*Services carousel*/
$('.project-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    navigation:true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})


/*Home slider*/
$('.home-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navigation:true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})



$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".navbar").addClass("darkLight");
        
    }else{
        $(".navbar").removeClass("darkLight");
    }
});




/*jQuery(document).ready(function($) {
  $('a[href^="#"]').bind('click.smoothscroll',function (e) {
    e.preventDefault();
    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate( {
      'scrollTop': $target.offset().top-180
    }, 900, 'swing', function () {
      window.location.hash = target;
    } );
  } );
} );
*/


</script>

</body>
</html>
