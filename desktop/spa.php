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
@media (min-width: 1921px){
	#home-title-section2{max-width: 1920px;margin: 0 auto;}
	#gastro-bottom-section{max-width: 1895px;margin: 0 auto;}
	#gastro-bottom-section #left-side > div:first-child{max-width: 900px;}
}
@media (min-width: 768px) {
	.row.desktop-version{margin:0!important;}
	.spa-page .dig-angebot-dsk-cell div:nth-child(3){bottom:40px!important;}
	.spa-page .dig-angebot-dsk-cell div:nth-child(4){}
	.moreellipses{display: none;}
	.morelink{display: none;}
	.fancybox-iframe{position: fixed;display: block;overflow: scroll;}
	.spa-page #home-title-section2 {width: 100%;margin-top: -50px;background: #ffffff;}
	.dig-angebot-dsk .flickity-prev-next-button.next {right: -50px;background: none;}
	.dig-angebot-dsk .flickity-prev-next-button.previous {left: -50px;background: none;}
	.spa-page > .site > .wrapper > #content > .row{background: #ffffff;}
	.pfixed:hover{color: #4089b7!important;background: #ffffff!important;}
	.pfixed{border:1px solid #4089b7;}
	#booking-bar{z-index: 99;}
	.angebot-cont .button-jetzt{/*display: none;*/}
	.angebot-cont .dig-angebot-dsk-cell{min-height: 960px!important;}
	.angebot-cont .dig-angebot-dsk-cell:lang(en){min-height: 1005px!important;}
    #section-about-content .flickity-viewport:lang(en){height: 1016px!important;}
	.angebot-cont .slider-subtitle{bottom:85px!important;}
	.safe-label{width: 240px;position: relative;top: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;}
    .safe-label img{width: 100px;margin: 0 10px;}
}
@media(min-width:767px) and (max-width:1200px){
	#home-title-section2 .angebot-title{padding: 50px 80px 0 30px!important;font-size: 28px!important;}
	#gastro-bottom-section .angebot_title{padding: 50px 80px 0 30px!important;font-size: 28px!important;}
	#home-title-section2 .body-hometext{padding:0px 80px 0px 30px!important;}
	#gastro-bottom-section .body-hometext{padding:0px 80px 0px 35px!important;}
	#home-title-section2 .pfixed{margin-left: 30px!important;width: 250px!important;}
	#home-title-section2 #right-side{background-position:top center!important;}
	.morecontent span {display: none;}
	.moreellipses{display: inline;}
	.morelink {display: block;}
	#header-mvh.top{height: 400px!important;}
	#gastro-bottom-section #right-side, #gastro-bottom-section #left-side,
	#home-title-section2 #right-side, #home-title-section2 #left-side{width: 100%!important;float: none!important;height: auto!important;}
	#gastro-bottom-section #left-side{padding-top: 0!important;}
	#gastro-bottom-section #left-side > div{margin-top: 80px;width: 70%!important;height: 300px!important;}
	#gastro-bottom-section #left-side > div .pfixed{width:300px!important;}
}
</style>
<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:60px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
	<h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('page_subtitle'); ?></h2>
	<p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('intro-text'); ?></p>
	<div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065310.png;"><img src="/wp-content/uploads/2022/11/swisstainable.png"></div>
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
<div id="home-title-section2">
	<div id="left-side" style="float:left;width:50%;background:#f7f7f7;padding:50px 0 0 0;height:500px;">
		<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 70px 80px 0 100px;font-size:36px;"><?php the_field('spa-title-1'); ?></h5>
		<div class="body-hometext" style="padding: 30px 80px 20px 100px;"><?php the_field('spa-text-1'); ?></div>

        <?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/spa-infrastruktur/" style="width:100%;height:100px;color:#ffffff;text-align:left;padding:35px 100px;"><?php } ?>
        <?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/spa-infrastruktur/?lang=en" style="width:100%;height:100px;color:#ffffff;text-align:left;padding:35px 100px;"><?php } ?>
        <?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/spa-infrastruktur/?lang=fr" style="width:100%;height:100px;color:#ffffff;text-align:left;padding:35px 100px;"><?php } ?>
			<p class="pfixed" style="margin-left:100px;background:#4089b7;text-align:center;padding: 5px 20px;width:200px;margin-bottom:0;"><?php the_field('spa-button-text-1'); ?></p>
		</a>
        <a href="/wp-content/uploads/2022/12/hannigspa_Preisliste_web.pdf" target="_blank" style="width:100%;color:#ffffff;">
			<p class="pfixed" style="margin-left:100px;background:#4089b7;text-align:center;padding: 5px 20px;width:200px;"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>Hannigspa Flyer<?php } ?><?php if(ICL_LANGUAGE_CODE=='en'){ ?>Hannigspa flyer<?php } ?><?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Hannigspa flyer<?php } ?></p>
		</a>
	</div>
	<?php $image1 = get_field('spa-image-1-dsk'); ?>
	<div id="right-side" style="float:left;width:50%;padding:0;background:url(<?php echo $image1['url']; ?>) no-repeat;background-position: top right;min-height:500px;">
	</div>
</div>
<div id="section-about-header" style="width:100%;margin:100px auto 0 auto">
	<h2 class="section-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?>
	</h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wellness vom Feinsten<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>The finest wellness<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Le meilleur du bien-être<?php } ?>
	</h6>
</div>
<div id="section-about-content" class="angebot-cont" style="width:90%;max-width:1155px;margin:50px auto 100px auto;background:#ffffff;">
	<?php echo do_shortcode("[dig_angebot_general_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"spa\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
</div>

<div id="gastro-bottom-section" style="width:100%">
	<div id="left-side" style="float:left;width:50%;background:#2c2b39;padding:50px 0 0 0;height:500px;">
    <div style="position:absolute;width:50%;margin-left: 5%;background:#ffffff;height:400px;filter: drop-shadow(0px 0px 10px #222);">
  		<h4 class="angebot-title" style="text-align: left;font-weight:bold;padding: 35px 20px 0 35px;font-size:32px;"><?php the_field('spa_bottom_title'); ?></h4>
  		<div class="body-hometext more" style="padding: 35px 20px 0 35px"><?php the_field('spa_bottom_text'); ?></div>
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a data-fancybox data-type="iframe" data-src="massagebeauty/<?php the_field('self_slug'); ?>/" href="javascript:;" style="width:100%;position:absolute;bottom:30px;color:#ffffff;text-align:left;padding:35px 20px 0 35px;"><?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a data-fancybox data-type="iframe" data-src="massagebeauty/<?php the_field('self_slug'); ?>/?lang=en" href="javascript:;" style="width:100%;position:absolute;bottom:30px;color:#ffffff;text-align:left;padding:35px 20px 0 35px;"><?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a data-fancybox data-type="iframe" data-src="massagebeauty/<?php the_field('self_slug'); ?>/?lang=fr" href="javascript:;" style="width:100%;position:absolute;bottom:30px;color:#ffffff;text-align:left;padding:35px 20px 0 35px;"><?php } ?>
				<p class="pfixed" style="background:#4089b7;padding: 5px 20px;width:220px;text-align: center;margin:0;"><?php the_field('spa_bottom_button'); ?></p>
			</a>
    </div>
  </div>
		<?php $spabottombg = get_field('spa_bottom_bg'); ?>
	<div id="right-side" style="float:left;width:50%;padding:0;background:url(<?php echo $spabottombg['url']; ?>) no-repeat;background-position:top right;min-height:500px;">
	</div>
</div>
<div id="header-mvh" style="padding: 50px 0;width:100%;text-align:center;">
	<svg id="Layer_1" style="width:90px;" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>Artboard 13</title><path d="M27.52,18.48a16.21,16.21,0,0,0-3.68-.33,11.93,11.93,0,0,0,.43-6.45.39.39,0,0,0-.17-.26.42.42,0,0,0-.31-.06A14,14,0,0,0,20,13.08,12.29,12.29,0,0,0,16.27,7.8a.38.38,0,0,0-.52,0,13.78,13.78,0,0,0-3.49,5.44,14.13,14.13,0,0,0-4-1.89.38.38,0,0,0-.48.32,12,12,0,0,0,.42,6.45,16.18,16.18,0,0,0-3.67.33.36.36,0,0,0-.26.2.38.38,0,0,0,0,.33A7.83,7.83,0,0,0,12,24.29a13.15,13.15,0,0,0,4-.67,13.15,13.15,0,0,0,4,.67A7.83,7.83,0,0,0,27.8,19a.38.38,0,0,0,0-.33.36.36,0,0,0-.26-.2ZM23,18.19a10.39,10.39,0,0,0-4.14,1.15.32.32,0,0,0-.18.1,6.71,6.71,0,0,0-2,1.82,9.85,9.85,0,0,0-.2-2.17A8.53,8.53,0,0,1,20,14a13.75,13.75,0,0,1,3.54-1.75,10.63,10.63,0,0,1-.6,5.92ZM16.06,8.64a11.54,11.54,0,0,1,3.29,4.91A9.49,9.49,0,0,0,16,17.76a9.38,9.38,0,0,0-3.07-4,12.55,12.55,0,0,1,3.13-5.12ZM8.43,12.27a13.4,13.4,0,0,1,3.82,2,8.5,8.5,0,0,1,3.35,4.87,9.29,9.29,0,0,0-.21,2.17A8.48,8.48,0,0,0,9,18.19a10.63,10.63,0,0,1-.6-5.92Zm3,11.23a6.9,6.9,0,0,1-6.3-4.34c1.79-.31,8.23-1,10.36,3.8a11.86,11.86,0,0,1-4.06.54Zm9.16,0A12.11,12.11,0,0,1,16.52,23c2.13-4.83,8.57-4.11,10.36-3.8a6.9,6.9,0,0,1-6.3,4.34Zm0,0"/></svg>
  <h4 class="section-title" style="margin:15px auto 15px auto;width:90%;max-width: 1100px;text-align: center;color:#212529;"><?php the_field('buchen_title'); ?></h4>
  <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 1100px;text-align: center;color:#898989;"><?php the_field('buchen_text'); ?></p>
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
