<?php

/*
Template Name: port
*/?>
<?php get_header();?>

  <div id="blog">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <h2><?php the_title(); ?></h2>
    <div class="post">
   
      
      <?php the_content(); ?>  
      <!--<?php trackback_rdf(); ?>-->
      
    </div>
    
      <?php endwhile; endif; ?>  
    
  </div>
<?php get_footer();?>