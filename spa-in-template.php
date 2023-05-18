<?php /* Template Name: MVH-Spa Infrastructure */ ?>
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
	.spa-page .link-boxes .box-red{padding: 30px 0;}
	.spa-page > .site > .wrapper > #content > .row{background:#2c2b39;}
	.spa-section-2{height: calc(100vh - 50px);margin-bottom: 0px;}
	.spa-section-2 .spa-section-cell {text-align: center;height: 100%;background-repeat: no-repeat !important;background-size: cover !important;}
	.spa-page .dig-angebot{margin-bottom: 0;}
	.spa-page .body-hometext{margin-bottom: 0;}
	.spa-page .spa-section-2 .spa-section-cell:after {position: absolute;content:"";height:102%;width:100%;left:0px;background: linear-gradient(to bottom, rgba(44,43,57,0) 0%,rgba(44,43,57,1) 100%);}
	.infra-title{padding: 10px 0 0px 15px;}
	.infra-preview{width: 50%;float: left;position:relative;}
	.infra-preview:nth-child(odd){clear:both;}
	.infra-preview:nth-child(odd) img{padding: 10px 5px 0px 10px;}
	.infra-preview:nth-child(even) img{padding: 10px 10px 0px 5px;}
	.infra-section{padding: 30px 0;border-top:1px solid #000000;}
	.infra-section ul{padding: 0px 0 0px 15px!important;}
	.spa-infra-page #angebot-content {width: 90%;margin: 25px auto;background: #ffffff;}
	.spa-infra-page #angebot-content .home-title {margin-top: 25px !important;padding: 25px 0!important;width: 94%;}
	img.plus-sign{padding: 0!important;position: absolute;right: 20px;top:20px;}
	div.plus-sign{padding: 0!important;position: absolute;right: 20px;top:20px;width: 32px;height: 32px;background-size: contain!important;transition: 0.2s;}
	.fancybox-slide--iframe .fancybox-content {width: 100%!important;height:100vh!important;max-width: 100%;max-height: 100%;margin:0;}
	.angebot-cont .button-jetzt{display: none;}
}
</style>
<div>
<img class="" src="/wp-content/uploads/2019/11/spa-infra-header.jpg" alt="" />
<h3 class="home-title" style="text-align: left;padding:30px 0 5px 15px!important;margin:0!important;"><?php the_field('page_title'); ?></h3>
<p class="header-subtitle" style="text-align: left;padding:0 0 20px 15px;margin:0!important;"><?php the_field('page_subtitle'); ?></p>
<p class="body-hometext" style="text-align: left;margin:0!important;padding:0 0 20px 15px;"><?php the_field('intro-text'); ?>
</p>
</div>
<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main" style="height:0;">
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
<div class="col-12 content-area" style="padding:30px 0;">
<main class="site-main" id="main">
	<?php echo do_shortcode("[dig_spa_infra_mob_overview_shortcode post-type=\"spa_infrastructure\" tax-name=\"spa_infra_tax\" terms=\"infrastructures\"]"); ?>
</main>
</div>

<div class="col-md content-area angebot-cont" id="primary" style="background:#2c2b39;">
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 15px 0;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?>
	</h3>
		<?php echo do_shortcode("[dig_angegeneral_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"spa\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>

</div><!-- .row -->
<?php include_once "desktop/spa-inside.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
