<?php /* Template Name: MVH-Sport */ ?>
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
		.sport-page .home-title {color: #ffffff;width: 100%;font-size: 34px;background: #2c2b39;padding-top:55px!important;}
		.sport-page .header-subtitle {color: #ffffff;background: #2c2b39;opacity: 1;margin-top: 0;margin-bottom: 0 !important;padding-top: 0px;padding-bottom: 55px;width: 100%;}
		.spa-section-2{height: calc(100vh - 50px);margin-bottom: 0px;}
		.spa-section-2 .spa-section-cell {text-align: center;height: 100%;background-repeat: no-repeat !important;background-size: cover !important;}
		.event-title-mob{width: 100%;margin-left: 0!important;margin-top: -60px!important;margin-bottom: 0!important;}
		.event-title-in{height: 60px;padding-left: 15px;padding-top: 7px;background: rgba(0,0,0,0.5);}
		.season-icon {margin-bottom: 30px!important;margin-top: -55px!important;}
		.sport-page .dig-angebot{margin-bottom: 100px;}
		.sport-page .body-hometext{margin-bottom: 0;}
		.sport-page #angebot-content .body-hometext{padding: 20px 0;}
		.sport-page .spa-section-2 .spa-section-cell:after {position: absolute;content:"";height:102%;width:100%;left:0px;background: linear-gradient(to bottom, rgba(44,43,57,0) 0%,rgba(44,43,57,1) 100%);}
		.sport-page .content-area{padding-left: 0;padding-right: 0;}
		.sport-page .grachen-aktitle{width: 100%!important;padding-top: 5px;padding-bottom:10px;text-align: center;}
		.sport-page .down-events{margin-bottom:30px;}
	}
	</style>
	<div>
	<?php if( get_field('page_title') ): ?>
	<h2 class="home-title" style="text-align: center;padding:0;padding-bottom:25px;"><?php the_field('page_title'); ?></h2>
	<?php endif; ?>
	<?php if( get_field('page_subtitle') ): ?>
	<p class="header-subtitle" style="text-align: center;"><?php the_field('page_subtitle'); ?></p>
	<?php endif; ?>
	<img src="/wp-content/uploads/2022/11/sport_page_mobile_winter.jpg" alt="" />
	<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:20px;"><?php the_field('page_body_text'); ?>
</p>
</div>

<a href="#sommer-m" class="col-sm link-boxes-red"><div class="col-sm box-red">
	<h4 class="box-title"><img style="width:40px;margin-top:-40px;" src="/wp-content/themes/understrap-child/assets/imgs/basic/angebot-summer.png"><span class="grachen-aktitle">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Sommer<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Summer<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Été<?php } ?>
		</span></h4>
	<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
	</div>
</a>
<a href="#winter-m" class="col-sm link-boxes-blue"><div class="col-sm box-red">
	<h4 class="box-title"><img style="width:40px;margin-top:-40px;" src="/wp-content/themes/understrap-child/assets/imgs/basic/angebot-winter.png"><span class="grachen-aktitle">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Winter<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Winter<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Hiver<?php } ?>
		</span></h4>
	<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
	</div>
</a>
<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main">
    
	<?php echo do_shortcode("[dig_events_mob_overview_shortcode post-type=\"events\" tax-name=\"events_tax\" terms=\"sommer\" event_image=\"event_image\" event_title=\"event_title\" event_text=\"event_text\" event_date=\"event_date\" event_date_end=\"event_date_end\"]"); ?>
    <?php echo do_shortcode("[dig_events_mob_overview_shortcode post-type=\"events\" tax-name=\"events_tax\" terms=\"winter\" event_image=\"event_image\" event_title=\"event_title\" event_text=\"event_text\" event_date=\"event_date\" event_date_end=\"event_date_end\"]"); ?>
	
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

<div class="col-md content-area" id="primary" style="background:#2c2b39;padding-left:15px!important;padding-right:15px!important;">
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 15px 0;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Infrastruktur<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our infrastructure<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Notre infrastructure<?php } ?>
		</h3>
		<?php echo do_shortcode("[dig_sport_mob_overview_shortcode post-type=\"sport_infrastruktur\" tax-name=\"sport_infrascture_type\" terms=\"summer\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>
</div><!-- .row -->
<?php include_once "desktop/sport.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
