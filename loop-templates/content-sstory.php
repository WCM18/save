<div class="wrapper-story col-md-6 col-lg-4">
	<article class="sstory">
		
		<header>
		<?php if(has_post_thumbnail()): ?>
			<a href="<?php the_permalink();?>">
		   <?php the_post_thumbnail('sstory-thumbnail', ['class'=>'img-fluid']) ?>

		<?php endif;?>
		</header>
	  <h1><?php the_title();?></h1>
	    <main>
		<?php the_excerpt();?>
		</main>
		<footer>
		<?php 
		if($name= get_post_meta(get_the_ID(),'Name',true)){
			printf(__('<div class="custom">name: %s</div>','understrap'),$name);
		}?>
		
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
		</footer>
		
		
	
		</article>
</div>