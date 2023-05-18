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
	$('.dig-spa').flickity({
		// options
		cellAlign: 'center',
		prevNextButtons: false,
		contain: true,
		imagesLoaded: true,
		wrapAround: true
	});
});
</script>
<style>
@media (min-width: 768px) {
	.spa-infra-page .dig-angebot-dsk-cell div:nth-child(3){bottom:40px!important;}
  .spa-infra-page .dig-angebot-dsk-cell div:nth-child(4){/*display: none;*/}
	.dig-angebot-dsk .flickity-prev-next-button.next {right: -50px;background: none;}
	.dig-angebot-dsk .flickity-prev-next-button.previous {left: -50px;background: none;}
	.infra-title{padding: 10px 0 0px 15px;position: absolute;top: 25px;left:20px;color:#ffffff;max-width: 250px;}
	.infra-preview{width: 33.333333%;float: left;position:relative;}
	.infra-preview img{filter:brightness(0.7);}
	.infra-preview:nth-child(odd) img{padding: 10px 5px 0px 5px;}
	.infra-preview:nth-child(even) img{padding: 10px 5px 0px 5px;}
	.infra-section{padding: 30px 0;border-top:1px solid #000000;}
	.spa-infra-page #angebot-content {width: 90%;margin: 25px auto;background: #ffffff;}
	.spa-infra-page #content > .row{background: #ffffff!important;}
	.spa-infra-page #angebot-content .home-title {margin-top: 25px !important;padding: 25px 0!important;width: 94%;}
	div.plus-sign{padding: 0!important;position: absolute;left: 35px;bottom:25px;width: 32px;height: 32px;background-size: contain!important;transition: 0.2s;}
	div.plus-sign:hover{background: url(/wp-content/uploads/2020/02/plus_hoover.png) no-repeat!important;background-size: contain!important;}
	.infra-preview > img{width: 100%;}
	.fancybox-slide--iframe .fancybox-content {width: 1050px!important;height:800px!important;max-width: 80%;max-height: 80%;margin:0;}
	#booking-bar{z-index: 99;}
	.angebot-cont .button-jetzt{display: none;}
	.angebot-cont .dig-angebot-dsk-cell{min-height: 890px!important;}
	.angebot-cont .dig-angebot-dsk-cell:lang(en){min-height: 890px!important;}
	.angebot-cont .slider-subtitle{bottom:20px!important;}
}
@media(min-width:767px) and (max-width:1200px){
	.infra-preview{width: 50%!important;}
	.infra-title{font-size: 18px!important;}
}
</style>
<div id="header-mvh" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:110px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
	<h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('page_subtitle'); ?></h2>
	<p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('intro-text'); ?></p>
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
<div class="container" style="max-width:1920px;padding-bottom:150px;">
<div class="col-12 content-area" style="padding:100px 10%;max-width:1600px;margin:0 auto;">
<main class="site-main" id="main">
	<?php echo do_shortcode("[dig_spa_infra_dsk_overview_shortcode post-type=\"spa_infrastructure\" tax-name=\"spa_infra_tax\" terms=\"infrastructures\"]"); ?>
</main>
</div>
</div>

<div id="section-about-header" style="width:100%;margin:100px auto 0 auto">
	<h2 class="section-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?>
	</h2>
</div>
<div id="section-about-content" class="angebot-cont" style="width:90%;max-width:1115px;margin:50px auto 100px auto;background:#ffffff;">
	<?php echo do_shortcode("[dig_angebot_general_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"spa\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>

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


</div><!-- .row -->
