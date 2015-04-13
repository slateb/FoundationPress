<?php
/*
Template Name: Blank Page
*/
get_header(); ?>

    <?php do_action( 'starterslab_before_content' ); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <?php do_action( 'starterslab_page_before_entry_content' ); ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            
        </article>
    <?php endwhile;?>

    <?php do_action( 'starterslab_after_content' ); ?>

<?php get_footer(); ?>