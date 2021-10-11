<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="container">
<hr>
            <div class="row mitglied">
                <div class="col-12 col-md-6">
                    <p class="text-left">Eine Fachkommission von:</p>
                    <a href="https://www.bildungbern.ch" target="_blank"><img
                                src="//wp-content/themes/bvss-child-theme/img/logo_berufsverband_bildung_bern.svg" id="bildungbern"
                                class="img-responsive"></a>
                </div>
                <div class="col-12 col-md-6">
                    <p class="text-left">Mitglied im:</p>
                    <a href="https://www.svss.ch/" target="_blank"><img src="/wp-content/themes/bvss-child-theme/img/svss.png"
                                                                        id="svss" class="img-responsive"></a>
                </div>
            </div>
            <hr>
            <div class="row">
                <br>
                <div class="col-md-12">
                    <p>Unsere Partner:</p>
                    <br>
                </div>
            </div>


            <div class="row logos1">
                <div class="col-6 col-md-3">
                    <a href="https://campusperspektiven.ch/" target="_blank">
                        <img src="/wp-content/themes/bvss-child-theme/img/perspektiven.jpg" id="perspektiven"
                             class="partner img-responsive">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="https://www.vistawell.ch/de_DE/" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/vistavell.png" id="vistawell" class="partner img-responsive">
                </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="https://schumacher-sport.ch/content/news/index_ger.html" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/schumacher.jpg" id="schumacher"
                         class="partner img-responsive">
                </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="https://www.radys.swiss/" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/radys.png" id="radys" class="partner img-responsive">
                </a>
                </div>

            </div>

            <div class="row logos2">
                <div class="col-6 col-md-3">
                <a href="https://friedrich-sport.ch/" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/friedrich.jpeg" id="friedrich" class="partner img-responsive">
                 </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="https://www.tls.ch/" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/thometluescher.png" id="thometluescher"
                         class="partner img-responsive">
                 </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="https://thoemus.ch/" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/thoemus.png" id="thoemus" class="partner img-responsive">
                 </a>
                </div>
                <div class="col-6 col-md-3">
                <a href="https://www.ski-velo-center.ch/" target="_blank">
                    <img src="/wp-content/themes/bvss-child-theme/img/skivelo.jpg" id="skivelo" class="partner img-responsive">
                 </a>
                </div>
            </div>
                        
                </div>
            </div>
            
        </div>
    </div>


<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

