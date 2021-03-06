<?php get_header();?>

  <div id="blog">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <h2><?php the_title(); ?></h2>
    <div class="post">
    <div id="meta" >Posted: <?php the_date(); ?></div>
      
      <?php the_content(); ?>  
      <!--<?php trackback_rdf(); ?>-->
      Written By Simon Bennett (find me on <a rel="author" href="https://plus.google.com/111717449957870928603/?rel=author" >Google+</a>)
    </div>
    <div id="commentblock">
    <?php DisplayPingTrackbacks(); ?>
        <?php comments_template(); ?>
        
    </div>
      <?php endwhile; endif; ?>  
    
  </div>
<?php get_footer();?>