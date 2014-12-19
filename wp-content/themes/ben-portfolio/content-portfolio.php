<?php 
//Include made from page-portfolio.php
  $num_posts = ( is_front_page() ) ? 4 : -1;
/*  Number of posts allowed is equal to 4 if display is set for front page;
 *  else, if display is not front page, set to -1 (defaults to all posts on
 *  portfolio page).
 */
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts //call in previous function to page.
  );
  $query = new WP_Query( $args );

?>


<section class="row no-max pad">
  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns grid-item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
