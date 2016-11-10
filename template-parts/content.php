<?php /** * Template part for displaying posts. * * @link https://codex.wordpress.org/Template_Hierarchy * * @package WiroSableng */ ?>
 
 
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
 
<header class="entry-header">
        <?php
        the_title( '
 
<h1 class="entry-title">', '</h1>
 
 
' );
        if ( 'post' === get_post_type() ) : ?>
 
 
<div class="post-details">
    <i class="fa fa-user"></i> <?php the_author(); ?>
    <i class="fa fa-clock-o"></i> <?php the_date(); ?> | <time> <?php the_time(); ?></time>
    <i class="fa fa-folder"></i> <?php the_category(', '); ?>
    <i class="fa fa-tags"></i> <?php the_tags(); ?>
    <i class="fa fa-comments"></i> <a href="<?php comments_link(); ?>"><?php comments_number('0 comment','1 comment','% comments'); ?></a>
</div>

 
 
<!-- post-details -->
        <?php endif; ?>
    </header>
 
 
<!-- .entry-header -->
 
 
<div class="post-body">
        <?php the_content();?>
    </div>
 
 
<!-- post-body -->
 
</article>
 
 
<!-- #post-## -->