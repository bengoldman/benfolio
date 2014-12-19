<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
    
		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <article <?php post_class('post'); ?>><!--Adds 'post' as a class on which to return data.-->
                <!--Permalink function automatically determines post type and where it links.-->
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2><!--Displays shortened version of "the_content".-->
                <!--Retrives post excerpt, then strips markup to remove inherited text sizing.-->
                <ul class="post-meta no-bullet">
                  <li class="author">
                      <span class="wpt-avatar small">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                        <!--Uses get function to call in other get function. (Unlike "the_", "get_" does not 
                            echo automatically, so 'echo' must be used.) Retrives author meta ID and sets size
                            at 24. -->
                      </span>
                      by <?php the_author_posts_link(); ?><!-- Links to special author page. -->                    
                  </li>
                  <!--Separator ' , ' prevents function from echoing out an entire unordered list.-->
                  <li class="cat">in <?php the_category( ', ' ); ?></li>
                  <li class="date">on <?php the_time('F j, Y'); ?></li>
                  <!--Date function doesn't print out date for multiple same-date posts.  Instead,
                      "the_time" returns time on every post, and 'F j, Y' sets parameter for 
                      month, day, and year. -->
                </ul>    
                <?php if( get_the_post_thumbnail() ) : ?>
                <!--Must use "get_" to retrieve markup around image.-->
                <div class="img-container">
                  <?php the_post_thumbnail('large'); ?>
                </div>  
                <?php endif; ?>          	
              </article>
          <!--Pagination for blog. Only shows if you change 'show at most' to 1 in settings/reading. -->
			     <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
          <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

			<?php endwhile; else : ?>
			
			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
			
			<?php endif; ?>
    
		</div>
	  </div>
	
	  <?php get_sidebar(); ?>

  </div>
  
</section>





<?php get_footer(); ?>