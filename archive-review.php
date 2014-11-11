<?php
/**
 * The main index file for the Reviews post type. 
 * Powered by isotope
 */

get_header(); ?>

	<div id="primary" >
           
		<main id="main" class="review-index" role="main">
           
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            // Do we have a featured image? If so, display it
                            if (has_post_thumbnail()){
                            ?>
                            <article class="review-item">
                                <figure class="index-poster">
                                    <a href="<?php echo get_the_permalink(); ?>" title="Read the review of <?php echo esc_attr(get_the_title()); ?>">
                                        <?php the_post_thumbnail('poster-single'); ?>
                                    </a>
                                </figure>
                            </article>
                            <?php
                            }
                            ?>

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
