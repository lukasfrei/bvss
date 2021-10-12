<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
	<h1>Aktuell</h1>

		<?php
		the_title(
			sprintf( '<h2 class="blog-vorschau"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>
	</header><!-- .entry-header -->
		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
			<?php
			the_date();
		?> | <?php
		the_author();
	?> 
			</div><!-- .entry-meta -->

		<?php endif; ?>



	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_excerpt();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
