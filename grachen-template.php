<?php /* Template Name: MVH-Grachen */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.dig-slider').flickity({
	  // options
	  cellAlign: 'center',
		prevNextButtons: false,
	  contain: true,
		imagesLoaded: true,
		adaptiveHeight: true
	});
	$('.dig-angebot').flickity({
	// options
	cellAlign: 'center',
	prevNextButtons: false,
	contain: true,
	imagesLoaded: true,
	adaptiveHeight: true,
	wrapAround: true
});
});
</script>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">
	<style>
	@media (max-width: 767px) {
		.grachen-page .home-title {color: #ffffff;width: 100%;font-size: 34px;background: #2c2b39;padding: 50px 0 3px 0!important;}
		.grachen-page .header-subtitle {color: #ffffff;background: #2c2b39;opacity: 1;margin-top: 0;margin-bottom: 0 !important;padding:0 0 55px 0!important;width: 100%;}
		.event-date,.event-dateend{display: none;}
		.event-title-mob{width: 100%;margin-left: 0!important;margin-top: -45px!important;margin-bottom: 0!important;}
		.event-title-in{padding-left: 15px;background: rgba(0,0,0,0.5);}
		.dig-angebot-cell{padding-top: 0px;padding-bottom: 0px;}
		.dig-angebot{margin-bottom: 80px;background: #ffffff;}
		.dig-angebot .body-hometext{margin-bottom: 10px;}
		.dig-angebot .slider-subtitle{text-align: center;font-weight: bold;}
		.videoWrapper {    position: relative;    padding-bottom: 56.25%;    height: 0;}
		.videoWrapper iframe {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;}
	}
	</style>
	<?php if( get_field('page_title') ): ?>
	<h2 class="home-title" style="text-align: center;"><?php the_field('page_title'); ?></h2>
	<?php endif; ?>
	<?php if( get_field('page_subtitle') ): ?>
	<p class="header-subtitle" style="text-align: center;"><?php the_field('page_subtitle'); ?></p>
	<?php endif; ?>

	<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:20px;"><?php the_field('page_body_text'); ?></p>
	<div>
	<?php if( get_field('section_1_image') ): ?>
	<?php $image = get_field('section_1_image'); ?>
	<img class="" src="<?php echo $image['url']; ?>" alt="" />
	<?php endif; ?>
	<div class="col-md content-area" id="primary" style="background:#2c2b39;">
		<h2 class="home-title" style="text-align: center;top:50px;color:#ffffff;width:100%;"><?php the_field('section_1_title'); ?></h2>
		<p class="home-subtitle" style="text-align: center;color:#ffffff;"><?php the_field('section_1_subtitle'); ?></p>
		<p class="body-hometext" style="text-align: center;background: #2c2b39;color:#ffffff;padding:10px 30px 30px 30px;"><?php the_field('section_1_text'); ?></p>
	</div>
</div>
<div class="col-md content-area" id="primary" style="background:#2c2b39;padding:0 15px 20px 15px;">
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 0 0;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Videos<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our videos<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>﻿﻿Nos vidéos<?php } ?>
	</h3>
	<p class="header-subtitle" style="text-align:center;padding-bottom:0!important;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wir zeigen Ihnen Grächen durch unsere Augen<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>We show you Grächen through our eyes<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nous vous montrons les Grächen à travers nos yeux<?php } ?>
	</p>
	<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 40px auto;">
		<div id="left-side" style="width:100%;padding:50px 0 0 0;text-align:center;">
			<div class="videoWrapper">
				<iframe src="https://player.vimeo.com/video/595814820?badge=0&autopause=0&player_id=0&app_id=58479&h=0c420d0869" width="960" height="540" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="Hannig_E-Bike_Loop_Graechen_003A_low.mp4"></iframe>
			</div>
		</div>
	</div>
	<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 40px auto;">
		<div id="left-side" style="width:100%;padding:20px 0 0 0;text-align:center;">
			<div class="videoWrapper">
				<iframe src="https://player.vimeo.com/video/595816097?badge=0&autopause=0&player_id=0&app_id=58479&h=fc8a06b7ec" width="960" height="540" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="Hannig_E-Bike_Loop_Graechen_003B_short_high.mp4"></iframe>
			</div>
		</div>
	</div>
	<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 40px auto;">
		<div id="left-side" style="width:100%;padding:20px 0 0 0;text-align:center;">
			<div class="videoWrapper">
				<iframe src="https://player.vimeo.com/video/605603420?badge=0&autopause=0&player_id=0&app_id=58479&h=83e559ddca" width="960" height="540" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="E-Bike_Kneipp_001A_high.mp4"></iframe>
			</div>
		</div>
	</div>
	<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 40px auto;">
		<div id="left-side" style="width:100%;padding:20px 0 0 0;text-align:center;">
			<div class="videoWrapper">
				<iframe src="https://player.vimeo.com/video/643491993?badge=0&autopause=0&player_id=0&app_id=58479&h=8f42a44b8c" width="960" height="540" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="Private_Spa04.mp4"></iframe>
			</div>
		</div>
	</div>
	<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 40px auto;">
		<div id="left-side" style="width:100%;padding:20px 0 0 0;text-align:center;">
			<div class="videoWrapper">
				<iframe src="https://player.vimeo.com/video/643492659?badge=0&autopause=0&player_id=0&app_id=58479&h=50d22a1f13" width="960" height="540" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="Snowbike_05.mp4"></iframe>
			</div>
		</div>
	</div>
	<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 40px auto;">
		<div id="left-side" style="width:100%;padding:20px 0 0 0;text-align:center;">
			<div class="videoWrapper">
				<iframe src="https://player.vimeo.com/video/649572553?=6397be52e2&badge=0&autopause=0&player_id=0&app_id=58479" width="960" height="540" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="SISU_Flowtrial_Graechen_(Trio)_002C_high.mp4"></iframe>
			</div>
		</div>
	</div>
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 0 0;">
		<?php the_field('section_2_title'); ?>
	</h3>
	<p class="header-subtitle" style="text-align:center;padding-bottom:0!important;">
		<?php the_field('section_2_subtitle'); ?>
	</p>
</div>

<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main">
	<?php echo do_shortcode("[dig_events_mob_overview_shortcode post-type=\"events\" tax-name=\"events_tax\" terms=\"events\" event_image=\"event_image\" event_title=\"event_title\" event_text=\"event_text\" event_date=\"event_date\" event_date_end=\"event_date_end\"]"); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'loop-templates/content', 'page' ); ?>
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
	<?php endwhile; // end of the loop. ?>
</main><!-- #main -->
<!-- Do the right sidebar check -->
<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<div class="col-md content-area" id="primary" style="background:#2c2b39;padding:0 15px 20px 15px;display:none;">
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 15px 0;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?>
	</h3>
		<?php echo do_shortcode("[dig_angegeneral_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"angebot\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>



</div><!-- .row -->
<?php include_once "desktop/grachen.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
