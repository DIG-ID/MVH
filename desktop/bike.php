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
	.page-template-bike-template .box-title {font-size: 36px;padding: 0;margin-top: 0px;}
	.page-template-bike-template .down-events{clear: both;display: block;margin:0 auto;}
	.page-template-bike-template .box-title > img{float: left;width: 40px;margin:10px;margin-top:5px;}
	.page-template-bike-template .grachen-aktitle{text-align: center;float: left;width: 100%;display: inline-block;font-size: 34px;margin-bottom: 10px;}
	.link-boxes-red, .link-boxes-blue, .link-boxes-violet{width:30%;}
	.event-title-mob{font-size: 30px;text-align: left;float: left;}
	.event-text{display: inline-block;@include std-margins-mob;margin-bottom: 40px;@include opacity-text;}
	.event-date,.event-dateend{color:#9da1a7;font-size: 14px;display: inline-block;top: -15px;position: relative;}
	.event-title-in{display: inline-block;width: 100%;}
	.page-template-bike-template .page-body-text{margin-bottom: 40px;}
	.page-template-bike-template .down-events{margin-top: 8px;}
	.season-icon{float: left;position: relative;margin-right: 15px;margin-bottom: 15px;}
	.page-template-bike-template .link-boxes-violet > .box-red{padding-top: 25px;}
	.page-template-bike-template .events{background: #f7f7f7;width: 50%;float: left;height: 600px;padding:15px;}
	.page-template-bike-template .site-main{width:90%;max-width: 1120px;margin: 0 auto;}
	.page-template-bike-template .pretitle{float:left;width: 70%;margin-top: 10px;}
	.page-template-bike-template #home-title-section .home-title {margin-top: 160px;max-width: 840px;width:90%;margin-left: auto;margin-right: auto;}
	.page-template-bike-template #home-title-section .header-subtitle {width: 840px;margin: 40px auto 0 auto;}
	.page-template-bike-template #home-title-section .body-hometext {width: 840px;margin: 15px auto 80px auto !important;text-align: left;}
	.page-template-bike-template .events img{margin-bottom: 15px;}
	.page-template-bike-template #section-about-content .dig-angebot-dsk-cell{min-height: 580px!important;}
	.page-template-bike-template #section-about-content .slider-subtitle{bottom: 40px!important;}
	#booking-bar{z-index: 99;}
    .page-template-bike-template #home-title-section video{width: 100%;}
    .bike_inside_title{font-family: "merriweather", serif;font-size: 22px;font-weight: 600;color: #222222;}
    .bike_inside_subtitle{font-family: "source-sans-pro", sans-serif;font-size: 13px;font-weight: normal;color: #222222;}
    .row__bike{flex-direction: column;align-items: center;justify-content: center;}
    .bike_label_img{display:block;margin: 60px auto 0 auto;width: 114px;}
}
@media(min-width:767px) and (max-width:1200px){
	.page-template-bike-template .events{width:100%!important; height: auto!important;}
	.link-boxes-red, .link-boxes-blue{width: 50%;}
	.link-boxes-violet{width: 100%;}
	.link-boxes-blue {margin:15px 0px 15px 15px!important}
    .link-boxes-red {margin:15px 0px 15px 0px!important}
	#home-title-section{margin-left: 0!important;margin-right: 0!important;}
	.page-template-bike-template .grachen-aktitle{width:100%!important;text-align: center!important;}
	.page-template-bike-template .link-boxes-red .box-title,.page-template-bike-template .link-boxes-blue .box-title{padding:0px;}
	.page-template-bike-template .box-title > img{float: none!important;}
  #header-mvh.top{height: 400px!important;}
}
</style>
<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:110px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
	<h2 class="header-subtitle" style="margin:5px auto 40px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('page_subtitle'); ?></h2>
	<p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_description'); ?></p>
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
<section id="home-title-section" style="width:100%;margin-top:-50px;">
    <div class="row" style="width:100%;margin:0;">
        <?php if( get_field('video_file') == 'Summer Video' ) { ?>
            <video autoplay muted loop>
                <source src="<?php echo get_stylesheet_directory_uri().'/assets/bike_sommervideo.mp4'; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php } ?>
        <?php if( get_field('video_file') == 'Winter Video' ) { ?>
            <video autoplay muted loop>
                <source src="<?php echo get_stylesheet_directory_uri().'/assets/bike_wintervideo.mp4'; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php } ?>
    </div>
    <div class="row" style="width:100%;max-width:872px;margin:0 auto;">
        <a href="#sommer" style="margin:15px 0px;display:flex;align-items:center;" class="col-sm link-boxes-red"><div class="col-sm box-red">
            <h4 class="box-title"><span class="grachen-aktitle">
                <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Sommer<?php } ?>
                <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Summer<?php } ?>
                <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Été<?php } ?>
                </span></h4>
            <img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
            </div>
        </a>
        <a href="#winter" style="margin:15px 0px 15px 15px;display:flex;align-items:center;" class="col-sm link-boxes-blue"><div class="col-sm box-red">
            <h4 class="box-title"><span class="grachen-aktitle">
                <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Winter<?php } ?>
                <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Winter<?php } ?>
                <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>L'hiver<?php } ?>
            </span></h4>
            <img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
            </div>
        </a>
    </div>
</section>

<section id="sommer" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
    <img class="bike_label_img" src="<?php echo get_stylesheet_directory_uri().'/assets/bike_label@2x.png'; ?>" title="Swiss Bike Hotel" alt="Swiss Bike Hotel">
    <h2 class="home-title" style="text-align: center;margin-top:60px;margin-bottom:15px;"><?php the_field('summer_title'); ?></h2>
    <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;margin-bottom:30px;"><?php the_field('summer_subtitle'); ?></p>
    <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;margin-bottom:80px;"><?php the_field('summer_intro_text'); ?></p>
    <main class="site-main">
        <div class="row row__bike">
            <p class="bike_inside_title"><?php the_field('infrastruktur_title'); ?></p>
            <p class="event-text"><?php the_field('infrastruktur_subtitle'); ?></p>
        </div>
        <?php
        if( have_rows('infrastruktur_infrastruktur_list') ):
        while( have_rows('infrastruktur_infrastruktur_list') ) : the_row(); ?>
            <div class="events">
                <?php if( get_sub_field('image') ): ?>
                <?php $image = get_sub_field('image');
                echo wp_get_attachment_image( $image, 'full' ); ?>
                <?php endif; ?>
                <p class="event-title-mob nodate"><span class="event-title-in"><?php the_sub_field('title'); ?></span></p>
                <div><span class="event-text"><?php the_sub_field('description'); ?></span></div>
            </div>
        <?php endwhile;endif; ?>

        <div class="row row__bike">
            <p class="bike_inside_title"><?php the_field('summer_trails_title'); ?></p>
            <p class="event-text"><?php the_field('summer_trails_subtitle'); ?></p>
        </div>
        <?php
        if( have_rows('summer_trails_trails_list') ):
        while( have_rows('summer_trails_trails_list') ) : the_row(); ?>
            <div class="events">
                <?php if( get_sub_field('image') ): ?>
                <?php $image = get_sub_field('image');
                echo wp_get_attachment_image( $image, 'full' ); ?>
                <?php endif; ?>
                <p class="event-title-mob nodate"><span class="event-title-in"><?php the_sub_field('title'); ?></span></p>
                <div><span class="event-text"><?php the_sub_field('description'); ?></span></div>
            </div>
        <?php endwhile;endif; ?>
    </main>
</section>

<section id="winter" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
    <h2 class="home-title" style="text-align: center;margin-top:0px;margin-bottom:15px;"><?php the_field('winter_title'); ?></h2>
    <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;margin-bottom:30px;"><?php the_field('winter_subtitle'); ?></p>
    <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 860px;text-align: center;margin-bottom:80px;"><?php the_field('winter_intro_text'); ?></p>
    <main class="site-main">
        <div class="row row__bike">
            <p class="bike_inside_title"><?php the_field('winter_trails_title'); ?></p>
            <p class="event-text"><?php the_field('winter_trails_subtitle'); ?></p>
        </div>
        <?php
        if( have_rows('winter_trails_trails_list') ):
        while( have_rows('winter_trails_trails_list') ) : the_row(); ?>
            <div class="events">
                <?php if( get_sub_field('image') ): ?>
                <?php $image = get_sub_field('image');
                echo wp_get_attachment_image( $image, 'full' ); ?>
                <?php endif; ?>
                <p class="event-title-mob nodate"><span class="event-title-in"><?php the_sub_field('title'); ?></span></p>
                <div><span class="event-text"><?php the_sub_field('description'); ?></span></div>
            </div>
        <?php endwhile;endif; ?>
    </main>
</section>

</div><!-- .row -->
