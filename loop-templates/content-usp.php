<div class="col-md">
	<div class="usp">
		<?php 
		if($name= get_post_meta(get_the_ID(),'Name',true)){
		?>
		  <span class="fa<?php echo $name;?>fa-2x"></span>
		<?php	
		}
		?>
		
	  <h1><?php the_title();?></h1>
		<?php the_content();?>
		<?php
		$link = get_post_meta(get_the_ID(), 'Click here to get information', true); 
		//var_dump($link);
		if($link){
			?>
			<a href="<?php  echo $link; ?>" class="btn btn-secondary"><?php _e('Read more','understrap'); ?></a>
			<?php

		}
		?>
	</div>
</div>			