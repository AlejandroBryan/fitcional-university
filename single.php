<?php 

get_header(); 

  get_template_part( 'template-parts/header/inner-banner' );

if(have_posts()) : 
 while ( have_posts() ) : the_post(); ?>

  

 <div class="container container--narrow page-section">

   <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></span></p>
   </div>
    <p><?php the_content(); ?></p>
 </div> 
  
    <?php
  endwhile; else: ?> 
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php
    endif; 
  
  

 get_footer(); 
 ?>