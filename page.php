<?php 
get_header(); 

 get_template_part( 'template-parts/header/inner-banner' ); 
 
 if ( have_posts() ) : while ( have_posts() ) : the_post();

?>
<div class="container container--narrow page-section">


      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { 
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>
      }
    
    
      $testArray = get_pages(array(

         'child_of' => get_the_ID()

       ));

    if ( $theParent or $testArray ) {
       <div class="page-links">
         <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
          <ul class="min-list">
            <?php 
              if($theParent){
                  $findChildrenOf = $theParent;
                }
                 else {
                  $findChildrenOf = get_the_ID();
                }

               wp_list_pages(array(

                 'title_li' => NULL,
                 'child_of' => $findChildrenOf,
                 'sort_column' => 'menu_order'

               ));
            ?>
         </ul>
      </div> 
      } 

      <div class="generic-content">
        <p><?php the_content();?> </p>  
      </div>
    </div>
 <?php
   endwhile; else: 
   
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 

 get_footer();
 
 ?>