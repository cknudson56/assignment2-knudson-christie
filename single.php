<?php get_header(); ?>


<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <?php the_post_thumbnail(); ?>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <p><?php echo "Published: " . get_the_date(); ?></p>
      <?php the_content(); ?>
      <?php
    }
  }
?>


<?php get_footer(); ?>
