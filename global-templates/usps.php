<?php
/**
 * usps setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$usps = new WP_Query([
	'post_type'=>'us_usp',
	'posts_per_page'=> 3,		
	]);
	if($usps->have_posts()){
		
	//var_dump($usps);
?>


	<div class="wrapper" id="wrapper-usps">
		
	<div class="container">
	<div style="background-color:pink"><h1>ups</h1></div>
	      <div class="row">	 
	 <?php 
	    while($usps->have_posts()){
			$usps->the_post();
			?>
			<?php get_template_part('loop-templates/content','usp');?>
			<?php		
				}
		wp_reset_postdata();			 
	       ?>
	


		  	</div>		   
		</div>	   
	</div>
	<?php } ?>
	



