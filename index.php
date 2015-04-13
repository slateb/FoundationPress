<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php if ( have_posts() ) : 
	 	do_action( 'starterslab_before_content' ); 
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'starterslab_before_pagination' ); ?>

	<?php endif;?>

	<?php if ( function_exists( 'starterslab_pagination' ) ) { starterslab_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'starterslab' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'starterslab' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'starterslab_after_content' ); ?>

	</div>
</div>
<?php get_footer(); ?>
