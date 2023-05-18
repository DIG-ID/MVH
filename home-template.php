<?php /* Template Name: MVH-Home */ ?>
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
		adaptiveHeight: true,
		wrapAround: true
		});
		$('.dig-slider-mob').flickity({
	  // options
	  cellAlign: 'center',
		prevNextButtons: false,
	  contain: true,
		imagesLoaded: true,
		adaptiveHeight: true,
		wrapAround: true
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
.mobile-version .overlay-home{
	position: absolute;width: 100%;height: 100%;background: #000000;margin-left: -15px;opacity: 0.5;
}
.home .mobile-version .header-title{top:180px;width:350px;position: absolute!important;}
.home .mobile-version .header-title.line2{top:230px;position: absolute!important;}
.home .mobile-version .box-red{padding: 0;}
.home .mobile-version .dig-slider{margin-bottom: 0;}
.home .mobile-version .button_round_red{display: block;margin:15px auto;}
.home .mobile-version .dig-slider-mob .flickity-page-dots{bottom:15px!important;}
.home .mobile-version #angebot-content {width: 90%;margin: 25px auto;background: #ffffff;}
.home .mobile-version #angebot-content .home-title {margin-top: 25px !important;padding: 25px 0!important;width: 94%;}
.home .mobile-version .content-area{padding-left: 15px;padding-right: 15px;}
.home .mobile-version .safe-label{width: 90px;position: absolute;top: 62vh;left: 0;right: 0;margin-left: auto;margin-right: auto;}
.home .link-boxes.bg1{background: url(/wp-content/uploads/2022/11/Aktiv_mobile_winter.jpg) no-repeat;background-size: cover;}
.home .link-boxes.bg2{background: url(/wp-content/uploads/2019/11/gastro-hm.jpg) no-repeat;background-size: cover;}
.home .link-boxes.bg3{background: url(/wp-content/uploads/2022/11/Wellness_mobile_winter.jpg) no-repeat;background-size: cover;}
</style>

<?php $image = get_field('header-bg'); ?>
<figure class="wp-block-image"><img class="wp-image-23" style="filter: brightness(0.6);" src="<?php echo $image['url']; ?>" alt="" /></figure>
<h2 class="header-title" style="text-align: center;"><?php the_field('header-title'); ?></h2>
<h2 class="header-title line2" style="text-align: center;"><?php the_field('header_title_line_2'); ?></h2>
<div class="voucher_div" style="position: absolute !important;top: 335px;left: 0;right: 0;margin-left: auto;margin-right: auto;width:208px;text-align: center;color:#ffffff;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a class="voucher-but" href="/gutscheine/"><div class="voucher_but" style="width: 208px; background-size: 208px 140px!important;margin:0 auto; height: 70px;background:url(/wp-content/uploads/2020/05/1-2.png);"></div><?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a class="voucher-but" href="/gutscheine/"><div class="voucher_but" style="width: 208px; background-size: 208px 140px!important;margin:0 auto; height: 70px;background:url(/wp-content/uploads/2020/05/1-3.png);"></div><?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a class="voucher-but" href="/gutscheine/"><div class="voucher_but" style="width: 208px; background-size: 208px 140px!important;margin:0 auto; height: 70px;background:url(/wp-content/uploads/2020/05/1-4.png);"></div><?php } ?>
  </a>
</div>
<div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065300.png;"></div>
<p class="header-subtitle" style="text-align: left;margin-top: 30px;margin-bottom:0!important;"><?php the_field('home_subtitle'); ?></p>
<h2 class="home-title" style="text-align: left;margin-top: 20px!important;"><?php the_field('home_title'); ?></h2>
<p class="body-hometext" style="text-align: left;margin-bottom:50px;"><?php the_field('body_text'); ?></p>

<?php if( get_field('content-img-bg') ): ?>
<?php $contentimgbg = get_field('content-img-bg'); ?>
<figure class="wp-block-image"><img class="wp-image-25" src="<?php echo $contentimgbg['url']; ?>" alt="" /></figure>
<?php endif; ?>


<div style="width:100%;background:#2c2b39;padding-top:30px;padding-bottom:50px;">
		<h3 class="header-titlesub" style="text-align: left;margin-left:15px;color:#ffffff;top:0;"><?php the_field('zimmer_title'); ?></h3>
		<p class="header-subtitle" style="text-align: left;color:#ffffff;margin-bottom:10px!important;"><?php the_field('zimmer_subtitle'); ?></p>
		<div class="dig-slider-mob">
				<?php $images4 = get_field('zimmer-slider'); ?>
			  <?php foreach( $images4 as $image11 ): ?>
			    <div class="dig-slider-mob-cell" style="width: 100%;"><img src="<?php echo $image11['url']; ?>" alt="<?php echo $image11['alt']; ?>" /></div>
				<?php endforeach; ?>
		</div>
		<p class="body-hometext" style="text-align: left;color:#ffffff;padding-top:25px;"><?php the_field('zimmer_text'); ?></p>
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/hotelzimmer/"><?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/hotelzimmer/?lang=en"><?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/hotelzimmer/?lang=fr"><?php } ?>
			<button class="button_round_red"><?php the_field('zimmer_button'); ?></button>
		</a>
</div>

<?php $section2bg = get_field('grachen_bg'); ?>
<div class="wp-block-image">
<img class="wp-image-23" src="/wp-content/uploads/2021/10/graechen-erleben-win-mob_2.jpg" alt="" />
<div style="width:100%;background:#2c2b39;padding:30px 0 40px 0;">
	<h3 class="" style="text-align: left;margin-left:15px;color:#ffffff;"><?php the_field('grachen_title'); ?></h3>
	<p class="body-hometext" style="text-align: left;color:#ffffff;"><?php the_field('grachen_text'); ?></p>
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/graechen/"><button class="button_round_red" style="background:#4089b7;">Jetzt entdecken<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/graechen-insidertipps/?lang=en"><button class="button_round_red" style="background:#4089b7;">Discover now<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/graechen-insidertipps/?lang=fr"><button class="button_round_red" style="background:#4089b7;">Découvrir maintenant<?php } ?>
	</button></a>
</div>
</div>

<!-- wp:heading {"align":"center","className":"home-title"} -->
<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/sport/" class="col-sm link-boxes bg1"><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/sport/?lang=en" class="col-sm link-boxes bg1"><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/sport/?lang=fr" class="col-sm link-boxes bg1"><?php } ?>
	<div class="overlay-home"></div><div class="col-sm box-red"><h2 class="box-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktiv<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Sport<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Sport<?php } ?>
	</h2><p class="box-subtitle"><?php the_field('sport_subtitle'); ?></p></div></a>

	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/gastronomie/" class="col-sm link-boxes bg2"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/gastronomie/?lang=en" class="col-sm link-boxes bg2"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/gastronomie/?lang=fr" class="col-sm link-boxes bg2"><?php } ?>
	<div class="overlay-home"></div><div class="col-sm box-red"><h2 class="box-title">
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Gastronomie<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Gastronomy<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Gastronomie<?php } ?>
	</h2><p class="box-subtitle"><?php the_field('gastronomie_subtitle'); ?></p></div></a>

	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/spa/" class="col-sm link-boxes bg3"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/spa/?lang=en" class="col-sm link-boxes bg3"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/spa/?lang=fr" class="col-sm link-boxes bg3"><?php } ?>
	<div class="overlay-home"></div><div class="col-sm box-red"><h2 class="box-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wellness<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Wellness<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Bien-être<?php } ?>
		</h2><p class="box-subtitle"><?php the_field('grachen_subtitle'); ?></p></div></a>
<!-- /wp:heading -->



<div class="col-md content-area" id="primary" style="background:#2c2b39;">
	<h3 class="angebot-title" style="text-align: center;color:#ffffff;padding: 50px 0 15px 0;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Angebote<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our offers<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres<?php } ?>
	</h3>
		<?php echo do_shortcode("[dig_angegeneral_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"angebot\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>

</div><!-- .row -->
<?php include_once "desktop/home.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
