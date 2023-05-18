<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<?php
		$detecthead = new Mobile_Detect; ?>

		<div class="<?php echo esc_attr( $container ); ?> mobile-version" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left desktop-version">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto"  style="flex:0 0 29%;max-width:30%;">

        <!-- Content -->
        <img style="padding-left: 3px;" class="logo-footer" src="/wp-content/uploads/2022/11/Logo-footers-hannigalp.png">
				<p style="float:left;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/datenschutz/" style="color:#c8c8c8;">Datenschutzhinweis<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/datenschutz/?lang=en" style="color:#c8c8c8;">Data protection notice<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/datenschutz/?lang=fr" style="color:#c8c8c8;">Avis de protection des données<?php } ?>
					</a><br/>
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/impressum/" style="color:#c8c8c8;">Impressum<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/impressum/?lang=en" style="color:#c8c8c8;">Imprint<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/impressum/?lang=fr" style="color:#c8c8c8;">Mentions légales<?php } ?>
					</a><br/>
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/agb/" style="color:#c8c8c8;">AGB's</a><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/agb/?lang=en" style="color:#c8c8c8;">Terms & Conditions</a><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/agb/?lang=fr" style="color:#c8c8c8;">Conditions générales</a><?php } ?>
        </p>
				<div id="buchenfixed" class="itemfixed weather-footer"><?php echo do_shortcode('[wpc-weather id="2937"]'); ?></div>
				<style>
				@media (max-width:1200px) {
						.weather-footer{display: none;}
				}
				.weather-footer{float: left;max-width: 120px;}
				.weather-footer #wpc-weather.small .now .time_temperature{font-size: 20px;margin-top: 5px;float: left;font-family: "merriweather", serif;color:#ffffff;}
				</style>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto" style="flex:0 0 20%;">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Adresse<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Address<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Adresse<?php } ?>
				</h5>

      <p>Aktiv Hotel & Spa Hannigalp<br/>
				 Heimine 468<br/>
				 3925 Grächen<br/>
				 Switzerland</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Kontakt<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Contact<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Contact<?php } ?>
				</h5>

        <p>Tel: <a href="tel:+41279551000" style="color:#ffffff;">+41 27 955 10 00</a><br/>
			  <a href="mailto:info@hannigalp.ch" style="color:#ffffff;">info@hannigalp.ch</a></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Newsletter </h5>

        <?php echo do_shortcode( '[mc4wp_form id="51"]' ); ?>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

		<hr>

  </div>
  <!-- Footer Links -->


  <!-- Copyright -->
  <div class="footer-copyright text-left py-3 desktop-version">Design & Development by <a href="https://dig.id" target="_blank">dig.id</a>
		<!-- Social buttons -->
		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a href="https://www.facebook.com/hannigalp/" target="_blank" class="btn-floating btn-fb mx-1">
					<i class="fa fa-facebook-f"> </i>
				</a>
			</li>
		</ul>
		<!-- Social buttons -->

  </div>
  <!-- Copyright -->
	</div><!-- #wrapper-footer-full -->

<?php endif;
