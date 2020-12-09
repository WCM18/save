<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if(have_rows('related_posts')):
	while(have_posts('related_posts')):
		the_row();
		get_field('adopted');
	endwhile;
endif;

$related_post = get_field('related_posts');
//var_dump($related_post);


?>

<hr>

<article <?php post_class(); ?> id="post-<?php $related_post->ID; ?>">

	<header class="entry-header">

		<?php printf( '<h2 class="entry-title"><a href="%s" rel="bookmark">%s</a></h2>',

			esc_url(get_permalink()),$related_post->post_title); ?>
			
			<?php
			   if('post'==get_post_type()):
			
			?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>
			<?php endif ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		<?php 
		  the_excerpt();
		  ?>
		  <?php get_field('some_field'); ?>

		<?php the_content(); ?>

		

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
