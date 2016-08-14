<?php
/**
 * The template used for displaying single post.
 *
 * @package Graphy
 */
?>

<div class="post-full post-full-summary">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php graphy_entry_meta(); ?>
			<?php if ( has_post_thumbnail() ): ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>			
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div><!-- .post-full -->


<?php if ( class_exists( 'Jetpack_RelatedPosts' ) ) : ?>
	<?php echo do_shortcode( '[jetpack-related-posts]' ); ?>
<?php endif; ?>
