<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'full', ["class" => "hero-image"]); ?>

	</div>
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="entry-content">
				<div class="col-md-12">
					<?php
		the_content();
		?>

				</div><!-- .entry-content -->
			</div>
		</div>
		<div class="row">

			<div class="col-12 col-md-4">
				<div class="box">
					<h2>Mitgliederbereich</h2>
					<p>
						<a href="/intern">&gt;&gt; einloggen</a>
					</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="box">
					<h2>Mitglied werden</h2>
					<p>
						<a href="/verband/mitgliedschaft">&gt;&gt; mehr Infos</a>
					</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="box">
					<h2>Forum für Sport</h2>
					<p>
						<a href="/forum-fuer-sport">&gt;&gt; mehr Infos</a>
					</p>
				</div>
			</div>

		</div>
		<footer class="entry-footer">

			<?php understrap_edit_post_link(); ?>

		</footer><!-- .entry-footer -->

</article><!-- #post-## -->