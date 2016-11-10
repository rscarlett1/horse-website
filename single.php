<?php /** * The template for displaying all single posts. * * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post * * @package WiroSableng */ get_header(); ?>
 
 
<div class="container">
 
 
<div class="row" id="primary">
        <main id="content" class="col-sm-8" role="main">
        <?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'page' ); the_post_navigation(); // If comments are open or we have at least one comment, load up the comment template. if ( comments_open() || get_comments_number() ) : comments_template(); endif; endwhile; // End of the loop. ?>
        </main><!-- ./#content -->
 
 
<aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
 
 
<!-- ./col-sm-4 -->
    </div>
 
 
<!-- ./#primary -->
</div>
 
 
<!-- ./container -->
<?php
 
get_footer();