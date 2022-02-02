<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">
       <?php 
        the_archive_title(); 
        /*
        it's up to you to decide what do add.
         if (is_category()) single_cat_title();
         if (is_author()) echo "Post by "; the_author(); 
       */
       ?>
      </h1>
    <div class="page-banner__intro">
    <p><?php the_archive_description(); ?></p>
  </div>
 </div>
</div>