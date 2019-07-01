<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <div class="one-half column posts">
            <h3 class="center-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="img-center"><?php the_post_thumbnail('medium'); ?></div>
            <p><?php echo "Published: " . get_the_date(); ?></p>
            <p><?php echo "Written by " . get_the_author(); ?></p>
            <p><?php the_excerpt(); ?></p>
          </div>
      <?php }
      }
    ?>
  </div>
</div>

<?php get_footer(); ?>
