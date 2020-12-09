<?php
/**
 * The template for displaying front page
 *
 * 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php get_template_part( 'global-templates/hero-dogs' ); ?>
<?php //get_template_part( 'global-templates/hero' ); ?>
<?php //get_template_part( 'global-templates/usps' ); ?>
<?php //get_template_part( 'global-templates/dog' ); ?>
<?php //get_template_part( 'global-templates/sstory' ); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			
			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					//get_template_part( 'loop-templates/content', 'frontpage' );

					}
				?>

			</main><!---#main -->	
			
					</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
