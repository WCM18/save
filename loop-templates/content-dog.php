<?php
$logo=get_field('logo');

?>

<div class="wrapper-story col-md-6 col-lg-4">
	<article class="sstory">
		
		<header>
			<?php if($logo):?>
		
			<a href="<?php the_permalink();?>">
		   <img src="<?php echo $logo['url']; ?>" class="img-fluid" >
			</a>		

		<?php endif;?>
		</header>
	  <h1><?php the_title();?></h1>
	    <main>
		<?php the_excerpt();?>
		</main>
		<footer>
		
		<?php
			if($gender= get_post_meta(get_the_ID(),'gender',true)){				
				printf(__('<div class="custom">age: %s</div>','understrap'),$gender);
		}
		?>
		<div class="texonomy">	
			<?php the_terms(
				get_the_ID(),
				'us_cartegory',__('Categoty:','understrap')
				);
				?>
		</div>
		</footer>
		
		
	
		</article>
</div>