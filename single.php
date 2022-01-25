<?php 

get_header(); 

  get_template_part( 'template-parts/header/inner-banner' );

if(have_posts()) : 
 while ( have_posts() ) : the_post(); ?>

 <div class="container container--narrow page-section">
    <p><?php the_content(); ?></p>
 </div> 
  
    <?php
  endwhile; else: ?> 
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php
    endif; 
  
  

 get_footer(); 
 ?>