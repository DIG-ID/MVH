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
}
@media (min-width: 768px) {
	.dig-angebot-dsk .flickity-prev-next-button.next {right: -50px;background: none;}
	.dig-angebot-dsk .flickity-prev-next-button.previous {left: -50px;background: none;}
	.link-boxes-blue{min-height: 230px;background:#06bebd;}
	.sport-page .box-title {font-size: 36px;padding: 50px 45px;}
	.sport-page .down-events{clear: both;display: block;margin:0 auto;}
	.sport-page .box-title > img{float: left;width: 40px;margin:10px;margin-top:5px;}
	.sport-page .grachen-aktitle{text-align: left;float: left;width: 230px;display: inline-block;}
	.link-boxes-red, .link-boxes-blue, .link-boxes-violet{width:30%;}
	.event-title-mob{font-size: 30px;text-align: left;float: left;}
	.event-text{display: inline-block;@include std-margins-mob;margin-bottom: 40px;@include opacity-text;}
	.event-date,.event-dateend{color:#9da1a7;font-size: 14px;display: inline-block;top: -15px;position: relative;}
	.event-title-in{display: inline-block;width: 100%;}
	.sport-page .page-body-text{margin-bottom: 40px;}
	.sport-page .down-events{margin-top: 8px;}
	.season-icon{float: left;position: relative;margin-right: 15px;margin-bottom: 15px;}
	.sport-page .box-title{margin-top: 10px;}
	.grachen-aktitle{display: inline-block;text-align: left;width: 205px!important;font-size: 34px;}
	.sport-page .link-boxes-violet > .box-red{padding-top: 25px;}
	.sport-page .events{background: #f7f7f7;width: 50%;float: left;height: 600px;padding:15px;}
	.sport-page #main{width:90%;max-width: 1120px;margin: 0 auto;}
	.sport-page .pretitle{float:left;width: 70%;margin-top: 10px;}
	.sport-page #home-title-section .home-title {margin-top: 160px;max-width: 840px;width:90%;margin-left: auto;margin-right: auto;}
	.sport-page #home-title-section .header-subtitle {width: 840px;margin: 40px auto 0 auto;}
	.sport-page #home-title-section .body-hometext {width: 840px;margin: 15px auto 80px auto !important;text-align: left;}
	.sport-page .events .wp-image-23{margin-bottom: 15px;}
	.sport-page #section-about-content .dig-angebot-dsk-cell{min-height: 580px!important;}
	.sport-page #section-about-content .slider-subtitle{bottom: 40px!important;}
	#booking-bar{z-index: 99;}
}
@media(min-width:767px) and (max-width:1200px){
	.sport-page .events{width:100%!important; height: auto!important;}
	.link-boxes-red, .link-boxes-blue, .link-boxes-violet{}
	.link-boxes-red, .link-boxes-blue{width: 50%;}
	.link-boxes-violet{width: 100%;}
	.link-boxes-blue {margin:15px 15px 15px 0px!important;}
	#home-title-section{margin-left: 0!important;margin-right: 0!important;}
	.sport-page .grachen-aktitle{width:100%!important;text-align: center!important;}
	.sport-page .link-boxes-red .box-title,.sport-page .link-boxes-blue .box-title{padding:0px 45px 50px 45px!important;}
	.sport-page .box-title > img{float: none!important;}
  #header-mvh.top{height: 400px!important;}
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
<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
<div class="row" style="width:100%;max-width:1320px;margin:0 auto;">
	<a href="#sommer" style="margin:15px 0px 15px 15px;" class="col-sm link-boxes-red"><div class="col-sm box-red">
		<h4 class="box-title"><img src="/wp-content/themes/understrap-child/assets/imgs/basic/angebot-summer.png"><span class="grachen-aktitle">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten Sommer<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Summer activities<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Activités été<?php } ?>
			</span></h4>
		<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
		</div>
	</a>
    <a href="#winter" style="margin:15px 0px 15px 15px;" class="col-sm link-boxes-blue"><div class="col-sm box-red">
		<h4 class="box-title"><img src="/wp-content/themes/understrap-child/assets/imgs/basic/angebot-winter.png"><span class="grachen-aktitle">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten Winter<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Winter activities<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Activités d'hiver<?php } ?>
		</span></h4>
		<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
		</div>
	</a>
	<a href="#angebote-sectiondsk" style="margin:15px 15px 15px 15px;" class="col-sm link-boxes-violet"><div class="col-sm box-red">
		<h4 class="box-title" style="padding: 40px 45px 27px 45px;"><span style="font-size:36px;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Infrastruktur<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Infrastructure<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Infrastructure<?php } ?>
			</span></h4>
		<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
		</div>
	</a>
</div>
<h2 id="summer" class="home-title" style="text-align: center;margin-top:90px;margin-bottom:15px;"><?php the_field('summer_title'); ?></h2>

<p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;margin-bottom:80px;"><?php the_field('summer_text'); ?></p>
</section>
<div class="col-12 content-area" style="padding:0;">
	<main class="site-main" id="main">
        <?php echo do_shortcode("[dig_events_dsk_overview_shortcode post-type=\"events\" tax-name=\"events_tax\" terms=\"sommer\" event_image=\"event_image\" event_title=\"event_title\" event_text=\"event_text\" event_date=\"event_date\" event_date_end=\"event_date_end\"]"); ?>
		<div id="section-about-header" style="clear:both;width:100%;padding-top:60px;">
            <h2 id="winter" class="home-title" style="text-align: center;margin-top:0px;margin-bottom:15px;"><?php the_field('winter_title'); ?></h2>
            <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;margin-bottom:80px;"><?php the_field('winter_text'); ?></p>
		</div>
        <?php echo do_shortcode("[dig_events_dsk_overview_shortcode post-type=\"events\" tax-name=\"events_tax\" terms=\"winter\" event_image=\"event_image\" event_title=\"event_title\" event_text=\"event_text\" event_date=\"event_date\" event_date_end=\"event_date_end\"]"); ?>
        
		<?php /* echo do_shortcode("[dig_events_dsk_overview_shortcode post-type=\"sport_infrastruktur\" tax-name=\"sport_infrascture_type\" terms=\"summer\" event_image=\"sport-infrastruktur-image-dsk\" event_title=\"sport-infrastruktur-title\" event_text=\"sport-infrastruktur-text\" event_date=\"sport-infrastruktur-date\" event_date_end=\"sport-infrastruktur-end\"]"); */ ?>
	</main>
</div>
<div id="section-about-header" style="width:100%;margin:100px auto 0 auto">
	<h2 class="section-title"><?php the_field('infrastructure_title'); ?></h2>
	<p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;"><?php the_field('infrastructure_text'); ?></p>
</div>
<div id="section-about-content" style="width:90%;max-width:1115px;margin:50px auto 100px auto;background:#fff;"><div id="angebote-sectiondsk">
	<?php echo do_shortcode("[dig_sport_general_overview_shortcode post-type=\"sport_infrastruktur\" tax-name=\"sport_infrascture_type\" terms=\"summer\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div></div>
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
</div><!-- .row -->
