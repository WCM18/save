<?php
/**
 * The template for displaying single story
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

				<main class="site-main col-md-9" id="main">

				<?php
				while ( have_posts()) :	the_post();?>
				
					<?php get_template_part( 'loop-templates/content', 'us_sstory-single');?>
								
					<?php endwhile;?>

			</main><!-- #main -->
			<aside class="col-md-3">
			<?php 
		if($name= get_post_meta(get_the_ID(),'Name',true)){
			printf(__('<div class="custom">name: %s</div>','understrap'),$name);
		}?>
		<br>
		<?php
			if($age= get_post_meta(get_the_ID(),'age',true)){				
				printf(__('<div class="custom">age: %s</div>','understrap'),$age);
		}
		?>
		<div class="texonomy">	
			<?php the_terms(
				get_the_ID(),
				'success_story',__('Story:','understrap')
				);
				?>
		</div>
				<aside>

			
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
