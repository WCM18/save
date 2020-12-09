<?php
/**
 * The template for displaying all single posts
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

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) 
					the_post();?>
					<?php get_template_part( 'loop-templates/content', 'single' );?>
					
					<?php understrap_post_nav();?>

					<hr class="my-4">
					<?php get_template_part( 'loop-templates/related-posts' );
                    ?>
                 <?php endwhile;?>		
			

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->
		<h1>my name ia</h1>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
