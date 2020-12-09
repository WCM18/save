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
				
					<?php get_template_part( 'loop-templates/content', 'us_dog-single');?>
								
					<?php endwhile;?>

			</main><!-- #main -->
			<aside class="col-md-3">
			<?php 
		if($name= get_field('Name')){
			printf(__('<div class="custom">name: %s</div>','understrap'),$name);
		}?>
		<br>
		<?php 
		if($picture= get_field('picture')){
			printf(__('<div class="custom">picture: %s</div>','understrap'),$picture);
		}?>
		<br>
		<?php 
		if($description= get_field('description')){
			printf(__('<div class="custom">Description: %s</div>','understrap'),$description);
		}?>
		<br>
		<?php 
		if($size= get_field('size')){
			printf(__('<div class="custom">Size: %s</div>','understrap'),$size);
		}?>
		<br>
		<?php 
		if($country= get_field('country')){
			printf(__('<div class="custom">Country: %s</div>','understrap'),$country);
		}?>
		<br>
		<?php		 
		 //date in mm/dd/yyyy format; or it can be in other formats as well
		 $birthDate = get_field('date_of_birth');
		 //explode the date to get month, day and year
		 $birthDate = explode("/", $birthDate);
		 //var_dump($birthDate);
		 //get age from date or birthdate
		 $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
		 ? ((date("Y") - $birthDate[2]) - 1)
		 : (date("Y") - $birthDate[2]));
		 //echo "Age:" . $age;		

			printf(__('<div class="custom">age: %s</div>','understrap'),$age.'years');
		
		?>
		<?php 
		if($hieght= get_field('Height')){
			printf(__('<div class="custom">Height: %s</div>','understrap'),$height);
		}?>
		<br>
			
		<div class="texonomy">	
			<?php the_terms(
				get_the_ID(),
				'us_cartegory',__('categories:','understrap')
				);
				?>
				<?php 
		if($weight= get_field('weight')){
			printf(__('<div class="custom">Weight: %s</div>','understrap'),$weight);
		}?>
		<br>
		<?php 
		$adopted= get_field('adopted_date');
		if($adopted){
			printf(__('<div class="custom">Adopted: %s</div>','understrap'),$adopted);
		}else {
			printf(__('<div class="custom">Adopted: %s</div>','understrap'),$adopted.'is empty');
		}?>
		
		<br>
		</div>
				<aside>

			
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
