<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package SKT Towing
 */

get_header(); ?>

<div class="container">
  <div class="page_content">
    <section class="site-main">
      <div class="blog-post">
        <?php if ( have_posts() ) : ?>
        <header>
          <h1 class="entry-title"><?php printf( esc_attr__( 'Search Results for: %s', 'skt-towing' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'search' ); ?>
        <?php endwhile; ?>
        <?php  
                    // Previous/next post navigation.
                    the_posts_pagination( array(
                                'mid_size' => 2,
                                'prev_text' => __( 'Back', 'skt-towing' ),
                                'next_text' => __( 'Onward', 'skt-towing' ),
								'screen_reader_text' => __( 'Posts navigation', 'skt-towing' )
                    ) );
                    ?>
        <?php else : ?>
        <?php get_template_part( 'no-results', 'search' ); ?>
        <?php endif; ?>
      </div>
      <!-- blog-post --> 
    </section>
    <?php get_sidebar();?>
    <div class="clear"></div>
  </div>
  <!-- site-aligner --> 
</div>
<!-- container -->

<?php get_footer(); ?>