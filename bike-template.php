<?php /* Template Name: MVH-BikePage */ ?>
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
		.page-template-bike-template .home-header-title {color: #ffffff;width: 100%;font-size: 34px;background-color:#2c2b39;margin-bottom:0;padding-top: 55px!important;}
		.page-template-bike-template .home-title {color: #2c2b39;width: 100%;font-size: 34px;}
		.page-template-bike-template .header-subtitle {color: #ffffff;background: #2c2b39;opacity: 1;margin-top: 0;margin-bottom: 0 !important;padding-top: 0px;padding-bottom: 55px;width: 100%;}
		.spa-section-2{height: calc(100vh - 50px);margin-bottom: 0px;}
		.spa-section-2 .spa-section-cell {text-align: center;height: 100%;background-repeat: no-repeat !important;background-size: cover !important;}
		.event-title-mob{width: 100%;margin-left: 0!important;margin-top: -60px!important;margin-bottom: 0!important;}
		.event-title-in{height: 60px;padding-left: 15px;padding-top: 7px;background: rgba(0,0,0,0.5);}
		.season-icon {margin-bottom: 30px!important;margin-top: -55px!important;}
		.page-template-bike-template .dig-angebot{margin-bottom: 100px;}
		.page-template-bike-template .body-hometext{margin-bottom: 0;}
		.page-template-bike-template #angebot-content .body-hometext{padding: 20px 0;}
		.page-template-bike-template .spa-section-2 .spa-section-cell:after {position: absolute;content:"";height:102%;width:100%;left:0px;background: linear-gradient(to bottom, rgba(44,43,57,0) 0%,rgba(44,43,57,1) 100%);}
		.page-template-bike-template .content-area{padding-left: 0;padding-right: 0;}
		.page-template-bike-template .grachen-aktitle{width: 100%!important;padding-top: 5px;padding-bottom:10px;text-align: center;}
		.page-template-bike-template .down-events{margin-bottom:30px;}
		.page-template-bike-template video{width: 100%;}
		.bike_inside_title{font-family: "merriweather", serif;font-size: 22px;font-weight: 600;color: #222222;margin-bottom: 0;}
		.bike_inside_subtitle{font-family: "source-sans-pro", sans-serif;font-size: 13px;font-weight: normal;color: #222222;}
		.row__bike{flex-direction: column;align-items: center;justify-content: center;}
        .bike_label_img{display:block;margin: 60px auto 0 auto;width: 114px;}
	}
	</style>
	<div>
	<?php if( get_field('page_title') ): ?>
	<h2 class="home-header-title" style="text-align: center;padding:0;padding-bottom:25px;"><?php the_field('page_title'); ?></h2>
	<?php endif; ?>
	<?php if( get_field('page_subtitle') ): ?>
	<p class="header-subtitle" style="text-align: center;"><?php the_field('page_subtitle'); ?></p>
	<?php endif; ?>
	<div class="row" style="width:100%;margin:0;">
        <?php if( get_field('video_file') == 'Summer Video' ) { ?>
            <video controls muted loop>
                <source src="<?php echo get_stylesheet_directory_uri().'/assets/bike_sommervideo.mp4'; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php } ?>
        <?php if( get_field('video_file') == 'Winter Video' ) { ?>
            <video controls muted loop>
                <source src="<?php echo get_stylesheet_directory_uri().'/assets/bike_wintervideo.mp4'; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php } ?>
    </div>
</div>

<a href="#sommer-m" class="col-sm link-boxes-red"><div class="col-sm box-red">
	<h4 class="box-title"><span class="grachen-aktitle">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Sommer<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Summer<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Été<?php } ?>
		</span></h4>
	<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
	</div>
</a>
<a href="#winter-m" class="col-sm link-boxes-blue"><div class="col-sm box-red">
	<h4 class="box-title"><span class="grachen-aktitle">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Winter<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Winter<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Hiver<?php } ?>
		</span></h4>
	<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
	</div>
</a>

<section id="sommer-m" style="width:100%;margin:0;">
    <img class="bike_label_img" src="<?php echo get_stylesheet_directory_uri().'/assets/bike_label@2x.png'; ?>" title="Swiss Bike Hotel" alt="Swiss Bike Hotel">
    <h2 class="home-title" style="text-align: center;margin-bottom:0;padding-bottom:0;"><?php the_field('summer_title'); ?></h2>
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
<section id="winter-m" style="width:100%;margin:0;">
    <h2 class="home-title" style="text-align: center;margin-bottom:0;padding-bottom:0;"><?php the_field('winter_title'); ?></h2>
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
<?php include_once "desktop/bike.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
