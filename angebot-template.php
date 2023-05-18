<?php /* Template Name: MVH-Angebot */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
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
	.angebot-icon {display: block;margin: 0 auto;padding: 30px 0;width: 50px;}
	.dig-angebot-cell{padding-top: 0;}
	}
	input.pfixed{background: #4089b7!important;color: #ffffff!important;padding: 5px 25px!important;border: 1px solid #4089b7!important;border-radius: 0!important;}
	</style>

<?php if(ICL_LANGUAGE_CODE=='de'){ ?><div id="openangebot" style="display:none;"><?php echo do_shortcode("[contact-form-7 id=\"1542\" title=\"Angebot\"]"); ?></div><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='en'){ ?><div id="openangebot" style="display:none;"><?php echo do_shortcode("[contact-form-7 id=\"2357\" title=\"AngebotEN\"]"); ?></div><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><div id="openangebot" style="display:none;"><?php echo do_shortcode("[contact-form-7 id=\"2358\" title=\"AngebotFR\"]"); ?></div><?php } ?>

<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main">
    <?php echo do_shortcode("[dig_angebot_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"summer\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
    <?php echo do_shortcode("[dig_angebot_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"winter\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
<div id="angebot-content" style="position:relative;">
	<img class="angebot-icon" src="/wp-content/uploads/2020/03/angebot-mountain-b.png" />
	<h4 class="home-title" style="text-align: center;padding-left:0;padding-top:0px!important;margin-top:0!important;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Ganzjahresangebote<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our year-round offers<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres toute l'année<?php } ?>
	</h4>
	<?php $image = get_field('header-bg'); ?>
	<?php $image1 = get_field('section_1_image'); ?>
	<img class="" src="<?php echo $image1['url']; ?>" alt="" />
	<p class="body-hometext" style="text-align: center;"><?php the_field('angebot_box_text'); ?></p>
	<a data-fancybox href="#openangebot" style="width:100%;height:60px;margin:5px 0 0;text-align:center;">
		<p class="pfixed" style="background:#4089b7;color:#ffffff;margin-bottom:0;padding:15px 0;"><?php the_field('angebot_box_button'); ?></p>
	</a>
</div>

	
</main><!-- #main -->
<!-- Do the right sidebar check -->
<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

</div><!-- .row -->
<?php include_once "desktop/angebot.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
