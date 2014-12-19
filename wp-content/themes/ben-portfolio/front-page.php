<?php get_header(); ?>
<!--Carried over from index.php.-->
<!--To instead use home.php, or other file, as main landing page, then
	remove or rename front-page.php file. -->
<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>        

	  <?php endwhile; endif; ?>
    
    </div>
  </div>
</section>

<?php get_template_part('content', 'portfolio'); ?><!--Include statement. Uses slugs as parameters.-->

<?php get_footer(); ?>
