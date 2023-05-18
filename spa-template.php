<?php /* Template Name: MVH-Spa */ ?>
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
.safe-label{display: none;}
@media (max-width: 767px) {
.spa-page .link-boxes .box-red{padding: 30px 0;}
.spa-page > .site > .wrapper > #content > .row{background:#2c2b39;}
.spa-section-2{height: calc(100vh - 50px);margin-bottom: 0px;}
.spa-section-2 .spa-section-cell {text-align: center;height: 100%;background-repeat: no-repeat !important;background-size: cover !important;}
.spa-page .body-hometext{margin-bottom: 0;}
.spa-page .spa-section-2 .spa-section-cell:after {position: absolute;content:"";height:102%;width:100%;left:0px;background: linear-gradient(to bottom, rgba(44,43,57,0) 0%,rgba(44,43,57,1) 100%);}
.dig-angebot-cell{padding-top: 0px;padding-bottom: 0px;}
.dig-angebot{margin-bottom: 80px;background: #ffffff;}
.dig-angebot .body-hometext{margin-bottom: 10px;}
.dig-angebot .slider-subtitle{text-align: center;font-weight: bold;}
.ange-section{background: #2c2b39;}
.ange-section .angebot-icon{display: block;margin: 0 auto;padding: 30px 0;width: 50px;}
.ange-section h3.angebot-title{margin-bottom: 30px;}
.angebot-cont .button-jetzt{/*display: none;*/}
.ange-section .flickity-viewport{height: 892px!important;}
}
</style>
<style>
.mobile-version .safe-label{width: 200px;position: absolute;top: 45vh;left: 0;right: 0;margin-left: auto;margin-right: auto;}
.mobile-version .safe-label img{width: 90px;margin: 0 5px;}
</style>
<h2 class="home-title" style="text-align: center;padding:60px 0 3px 0!important;"><?php the_field('page_title'); ?></h2>
<p class="header-subtitle" style="text-align: center;padding:0 0 50px 0;"><?php the_field('page_subtitle'); ?></p>

<div>
<?php if( get_field('spa-image-1-dsk') ): ?>
<?php $image = get_field('spa-image-1-dsk'); ?>
<img class="" src="<?php echo $image['url']; ?>" alt="" />
<?php endif; ?>
	<div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065310.png;"><img src="/wp-content/uploads/2022/11/swisstainable.png"></div>
	<h2 class="header-title" style="text-align: center;top:50px;color:#ffffff;width:100%;"><?php the_field('spa-title-1'); ?></h2>
	<p class="body-hometext" style="text-align: center;background: #2c2b39;color:#ffffff;padding:70px 30px 30px 30px;"><?php the_field('spa-text-1'); ?></p>
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/spa-infrastruktur/" style="display: block;position: relative !important;margin:0 auto 20px auto;text-align:center;"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/spa-infrastruktur/?lang=en" style="display: block;position: relative !important;margin:0 auto 20px auto;text-align:center;"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/spa-infrastruktur/?lang=fr" style="display: block;position: relative !important;margin:0 auto 20px auto;text-align:center;"><?php } ?>
		<button class="button_round_red"><?php the_field('spa-button-text-1'); ?></button>
	</a>
    <a href="/wp-content/uploads/2022/12/hannigspa_Preisliste_web.pdf" target="_blank" style="display: block;position: relative !important;margin:0 auto 40px auto;text-align:center;">
        <button class="button_round_red"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>Hannigspa Flyer<?php } ?><?php if(ICL_LANGUAGE_CODE=='en'){ ?>Hannigspa flyer<?php } ?><?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Hannigspa flyer<?php } ?></button>
	</a>
</div>


<div class="spa-section-2">
	<?php $spabottombg = get_field('spa_bottom_bg'); ?>
	<div class="spa-section-cell" style="filter:brightness(0.7);width: 100%;background:url(<?php echo $spabottombg['url']; ?>) no-repeat;background-position:center;">
	</div>
	<h2 class="header-title" style="text-align: center;top:-85vh;"><?php the_field('spa_bottom_title'); ?></h2>
	<div class="slider-subtitle" style="color:#ffffff;text-align: center;padding:20px 30px 20px 30px;top:-84vh;position: relative !important;"><?php the_field('spa_bottom_text'); ?></div>
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/massagebeauty/" style="display: block;top:-84vh;position: relative !important;margin:0 auto 40px auto;text-align:center;"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/massagebeauty/?lang=en" style="display: block;top:-84vh;position: relative !important;margin:0 auto 40px auto;text-align:center;"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/massagebeauty/?lang=fr" style="display: block;top:-84vh;position: relative !important;margin:0 auto 40px auto;text-align:center;"><?php } ?>
		<button class="button_round_red"><?php the_field('spa_bottom_button'); ?></button>
	</a>
</div>

<div class="col-md content-area angebot-cont" id="primary" style="background:#2c2b39;">
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 15px 0;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?></h3>
		<?php echo do_shortcode("[dig_angegeneral_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"spa\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>
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

</div></a>

</div><!-- .row -->
<?php include_once "desktop/spa.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
