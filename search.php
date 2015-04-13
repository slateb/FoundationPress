<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

		<?php do_action( 'starterslab_before_content' ); ?>

		<h2><?php _e( 'Search Results for', 'starterslab' ); ?> "<?php echo get_search_query(); ?>"</h2>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'parts/content', 'none' ); ?>

	<?php endif;?>

	<?php do_action( 'starterslab_before_pagination' ); ?>

	<?php if ( function_exists( 'starterslab_pagination' ) ) { starterslab_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'starterslab' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'starterslab' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'starterslab_after_content' ); ?>

	</div>

<?php get_footer(); ?>
