<?php 
$related_posts=get_field('related_posts');
if($related_posts){ ?>
<h1><?php _e('Related Posts','understrap');?></h1>
<?php
  
   //loop for all related posts
   foreach($related_posts as $post){
       //for each related posts  set it as a post object
     setup_postdata($post);
     //the_title();
     get_template_part('loop/templates/content');

   }
   wp_reset_postdata();

}



?>