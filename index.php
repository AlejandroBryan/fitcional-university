<?php 


get_header(); 

get_template_part( 'template-parts/header/inner-banner' ); 
?>
<div class="container container--narrow page-section">
 
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
   <div class="post-item">
     <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

      <div class="metabox">
      <p>Posted by <?php the_author_posts_link(); ?>
       on <?php the_time('n.j.y'); ?> in 
       <?php echo get_the_category_list(' > '); ?>
      </p>
      </div>

      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>

   </div>

 <?php 
 endwhile; else:

     
  _e( 'Sorry, no pages matched your criteria.', 'Fictional-university' ); 
endif; 

?>
  
  <div class="card-body">
    <?php get_template_part( 'template-parts/content', 'pagination' ); ?>
  </div>

</div>
<?php

 get_footer();

?>