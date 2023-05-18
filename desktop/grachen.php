<div class="row desktop-version">
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('.dig-angebot-dsk').flickity({
		// options
		cellAlign: 'center',
		prevNextButtons: true,
		draggable: false,
		pageDots: false,
		contain: true,
		imagesLoaded: true,
		adaptiveHeight: true,
		wrapAround: true,
		groupCells: 2
	});
});
</script>
<style>
@media (min-width: 1921px){
	.wp-block-image{width: 100%;}
	.wp-block-image > img{width: 100%;}
	#home-title-section2{width: 100%;}
}
@media (min-width: 768px) {
	.morelink{display: none;}
	.moreellipses{display: none;}
	.dig-angebot-dsk .flickity-prev-next-button.next {right: -50px;background: none;}
	.dig-angebot-dsk .flickity-prev-next-button.previous {left: -50px;background: none;}
	.link-boxes-blue{min-height: 230px;background:#06bebd;}
	.grachen-page .box-title {font-size: 36px;padding: 50px 45px;}
	.grachen-page .down-events{clear: both;display: block;margin:0 auto;}
	.grachen-page .box-title > img{float: left;width: 40px;margin:10px;margin-top:5px;}
	.grachen-page .grachen-aktitle{text-align: left;float: left;width: 230px;display: inline-block;}
	.event-title-mob{font-size: 30px;text-align: left;float: left;}
	.event-text{display: inline-block;@include std-margins-mob;margin-bottom: 40px;@include opacity-text;}
	.event-date{@include std-margins-mob;}
	.event-date,.event-dateend{color:#9da1a7;font-size: 14px;display: inline-block;top: -15px;position: relative;display: none;}
	.event-title-in{display: inline-block;width: 100%;}
	.grachen-page .page-body-text{margin-bottom: 40px;}
	.grachen-page .down-events{margin-top: 8px;}
	.season-icon{float: left;position: relative;margin-right: 15px;margin-bottom: 15px;}
	.grachen-page .box-title{margin-top: 10px;}
	.grachen-aktitle{display: inline-block;text-align: left;width: 205px!important;padding-top: 21px;font-size: 34px;}
	.grachen-page .link-boxes-violet > .box-red{padding-top: 25px;}
	.grachen-page .events{background: #f7f7f7;width: 50%;float: left;height: 600px;padding:15px;}
	.grachen-page #main{width:90%;max-width: 1120px;margin: 0 auto;}
	.grachen-page .pretitle{float:left;width: 70%;margin-top: 10px;}
	.grachen-page #home-title-section .home-title {margin-top: 160px;width: 90%;max-width: 840px;margin-left: auto;margin-right: auto;}
	.grachen-page #home-title-section .header-subtitle {width: 90%;max-width: 840px;margin: 20px auto 30px auto;}
	.grachen-page #home-title-section .body-hometext {width: 90%;max-width: 840px;margin: 15px auto 80px auto !important;text-align: left;}
	.grachen-page .events .wp-image-23{margin-bottom: 15px;}
	#booking-bar{z-index: 99;}
	.videoWrapper {    position: relative;    padding-bottom: 56.25%;    height: 0;}
	.videoWrapper iframe {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;}
}
@media(min-width:767px) and (max-width:1200px){
	#home-title-section2 .angebot-title{padding: 0px 30px 0 30px!important;font-size: 28px!important;}
	#home-title-section2 .header-subtitle{padding:0px 30px 0 30px!important;}
	#gastro-bottom-section .angebot_title{padding: 50px 30px 0 30px!important;font-size: 28px!important;}
	#home-title-section2 .body-hometext{padding:0px 30px 0px 30px!important;}
	#gastro-bottom-section .body-hometext{padding:0px 30px 0px 35px!important;}
	#home-title-section2 .pfixed{margin-left: 30px!important;}
	#home-title-section2 #right-side,#home-title-section2 #right-side img{background-position:top center!important;height:300px!important;}
	#home-title-section2 #left-side{/*height:300px!important;*/}
	.morecontent span {display: none;}
	.morelink {display: block;}
	.moreellipses{display: inline;}
	#header-mvh.top{height: 400px!important;}
	#home-title-section2 #left-side{height: auto!important;padding:50px 0!important;}
	#home-title-section2 #right-side, #home-title-section2 #left-side{width: 100%!important;float: none!important;}
	.grachen-page .events{height: auto!important;width: 100%!important;}
}
</style>
<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:110px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
	<h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('page_subtitle'); ?></h2>
	<p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_body_text'); ?></p>
</div>
<div id="booking-bar">
    <a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=&guests=&in=&out=&coupon=" target="_blank">
        <div class="booking_banner">
            <div class="container">
                <div class="row">
                    <div class="col-2 p-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/basic/appointment_128.png" width="" height="" alt="" /></div>
                    <div class="col-10 p-2"><span class="booking_text">
                        <?php if(ICL_LANGUAGE_CODE=='de'){ ?>JETZT ONLINE BUCHEN<?php } ?>
                        <?php if(ICL_LANGUAGE_CODE=='en'){ ?>BOOK ONLINE NOW<?php } ?>
                        <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVEZ MAINTENANT<?php } ?>
                    </span><br><span class="booking_text_sub">
                        <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wir garantieren den besten Preis!<?php } ?>
                        <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Guaranteed the best price!<?php } ?>
                        <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Meilleur prix garanti!<?php } ?>
                    </span></div>
                </div>
            </div>
        </div>
    </a>
	<div id="buchenfixed">
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><div id="sb-container"></div><?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?><div id="sb-container-bar-en"></div><?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?><div id="sb-container-bar-fr"></div><?php } ?>
	</div>
</div>
<?php $image = get_field('header-image'); ?>
<figure class="wp-block-image">
	<img class="wp-image-23 title-image" style="margin-top:-50px;" src="<?php echo $image['url']; ?>" alt="" />
</figure>
<div id="home-title-section2">
	<div id="left-side" style="float:left;width:50%;background:#2c2b39;padding:50px 0 0 0;height:500px;">
		<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 70px 80px 0 100px;font-size:36px;color:#ffffff;"><?php the_field('section_1_title'); ?></h5>
		<p class="header-subtitle" style="text-align:left;padding: 0px 80px 0 100px;font-size:28px;color:#4089b7;"><?php the_field('section_1_subtitle'); ?></p>
		<div class="body-hometext" style="padding: 15px 80px 20px 100px;color:#ffffff;"><?php the_field('section_1_text'); ?></div>
	</div>
	<?php $image1 = get_field('section_1_image'); ?>
	<div id="right-side" style="float:left;width:50%;padding:0;min-height: 500px;background:url(<?php echo $image1['url']; ?>) no-repeat;background-position: top center;background-size:cover;">
	</div>
</div>

<div id="section-about-header" style="width:100%;margin:80px auto 0 auto">
	<h2 class="section-title" style="font-weight:normal;margin:0 auto 30px auto;max-width:700px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Videos<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our videos<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>﻿﻿Nos vidéos<?php } ?>
	</h2>
	<p class="header-subtitle" style="text-align:center;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wir zeigen Ihnen Grächen durch unsere Augen<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>We show you Grächen through our eyes<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nous vous montrons les Grächen à travers nos yeux<?php } ?>
	</p>
</div>
<div id="home-title-section" style="width:100%;max-width:1400px;margin:0 auto 100px auto;">
	<div id="left-side" class="col-md-6" style="padding:50px 20px 0 20px;text-align:center;float:left;">
		<div class="videoWrapper">
			<iframe src="https://player.vimeo.com/video/595814820?badge=0&autopause=0&player_id=0&app_id=58479&h=0c420d0869" width="960" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Hannig_E-Bike_Loop_Graechen_003A_low.mp4"></iframe>
		</div>
	</div>
	<div id="left-side" class="col-md-6" style="padding:50px 20px 0 20px;text-align:center;float:left;">
		<div class="videoWrapper">
			<iframe src="https://player.vimeo.com/video/595816097?badge=0&autopause=0&player_id=0&app_id=58479&h=fc8a06b7ec" width="960" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Hannig_E-Bike_Loop_Graechen_003B_short_high.mp4"></iframe>
		</div>
	</div>
	<div id="left-side" class="col-md-6" style="padding:50px 20px 0 20px;text-align:center;float:left;">
		<div class="videoWrapper">
			<iframe src="https://player.vimeo.com/video/605603420?badge=0&autopause=0&player_id=0&app_id=58479&h=83e559ddca" width="960" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="E-Bike_Kneipp_001A_high.mp4"></iframe>
		</div>
	</div>
	<div id="left-side" class="col-md-6" style="padding:50px 20px 0 20px;text-align:center;float:left;">
		<div class="videoWrapper">
			<iframe src="https://player.vimeo.com/video/649572553?=6397be52e2&badge=0&autopause=0&player_id=0&app_id=58479" width="960" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="SISU_Flowtrial_Graechen_(Trio)_002C_high.mp4"></iframe>
		</div>
	</div>
	<div id="left-side" class="col-md-6" style="padding:50px 20px 0 20px;text-align:center;float:left;">
		<div class="videoWrapper">
			<iframe src="https://player.vimeo.com/video/643492659?badge=0&autopause=0&player_id=0&app_id=58479&h=50d22a1f13" width="960" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Snowbike_05.mp4"></iframe>
		</div>
	</div>
	<div id="left-side" class="col-md-6" style="padding:50px 20px 0 20px;text-align:center;float:left;">
		<div class="videoWrapper">
			<iframe src="https://player.vimeo.com/video/643491993?badge=0&autopause=0&player_id=0&app_id=58479&h=8f42a44b8c" width="960" height="540" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="Private_Spa04.mp4"></iframe>
		</div>
	</div>
</div>

<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
	<h2 class="home-title" style="text-align: center;margin-top:90px;"><?php the_field('section_2_title'); ?></h2>
	<p class="header-subtitle" style="text-align:center;"><?php the_field('section_2_subtitle'); ?></p>
</section>
<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main">
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

<div class="col-12 content-area" style="padding:0;">
<main class="site-main" id="main">
	<?php echo do_shortcode("[dig_events_dsk_overview_shortcode post-type=\"events\" tax-name=\"events_tax\" terms=\"events\" event_image=\"event_image\" event_title=\"event_title\" event_text=\"event_text\" event_date=\"event_date\" event_date_end=\"event_date_end\"]"); ?>
</div>
<div id="section-about-header" style="width:100%;margin:100px auto 0 auto;display:none;">
	<h2 class="section-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?>
	</h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Traumhafte Familienferien<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Fantastic family vacation<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vacances en famille fantastiques<?php } ?>
	</h6>
</div>
<div id="section-about-content" style="width:90%;max-width:1115px;margin:50px auto 100px auto;background:#f7f7f7;display:none;">
	<?php echo do_shortcode("[dig_angebot_general_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"angebot\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>





</div><!-- .row -->
