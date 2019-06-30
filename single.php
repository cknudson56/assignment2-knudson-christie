<?php get_header(); ?>


<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <?php the_post_thumbnail(); ?>
      <h2 class="post-title"><?php the_title(); ?></h2>
      <p><?php echo "Published: " . get_the_date(); ?></p>
      <p><?php echo "This post is written by : " . get_the_author(); ?></p>
      <?php the_content(); ?>
      <?php
    }
  }
?>


<?php get_footer(); ?>
