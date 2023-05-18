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
	$(window).on('resize', function(){
		if ( matchMedia('screen and (min-width: 767px) and (max-width:1200px)').matches ) {
	    $('.dig-angebot-dsk').flickity({
	      groupCells: true,
	      groupCells: 1,
				draggable: '>1',
	    });
  	}
		if ( matchMedia('screen and (min-width:1200px)').matches ) {
	    $('.dig-angebot-dsk').flickity({
	      groupCells: true,
	      groupCells: 2,
	    });
  	}
	});
	$(window).on('load', function(){
		if ( matchMedia('screen and (min-width: 767px) and (max-width:1200px)').matches ) {
	    $('.dig-angebot-dsk').flickity({
	      groupCells: true,
	      groupCells: 1,
				draggable: '>1',
	    });
  	}
	});

});
</script>
<style>
@media (min-width: 1921px){
	.wp-block-image{width: 100%;}
	.wp-block-image > img{width: 100%;}
}
@media (min-width: 768px) {
.angebot-page #content > .row {background: #ffffff !important;}
.angebot-page #angebot-content {width: 500px;margin:30px auto 100px auto;background: #f0f0f0;position:relative;}
.flickity-button:disabled{display: none;}
.angebot-page #angebot-content .home-title {margin-top: 25px !important;padding-bottom: 15px;width: 94%;}
.angebot-page #angebot-content .body-hometext{padding-left: 10px;padding-right: 10px;}
.angebot-page .body-hometext {padding-top: 25px; padding-bottom: 10px;line-height: 32px;padding-left: 20px;}
.ange-section .angebot-icon {display: block;margin: 0 auto;padding: 30px 0;width: 50px;}
.ange-section .angebot-title {margin-bottom: 30px;}
.angebot-page .dig-angebot-dsk-cell .angebot-title{margin-bottom: 0!important;padding-bottom: 30px;}
.dig-angebot-dsk {margin-bottom: 80px;background: #ffffff;}
.angebot-page .dig-angebot-dsk-cell .body-hometext,.angebot-page .dig-angebot-dsk-cell .angebot-title,.angebot-page .dig-angebot-dsk-cell .slider-subtitle{background:#f0f0f0;}
.angebot-page .ange-section{width:90%;max-width: 1120px;margin: 0 auto;}
.angebot-page .dig-angebot-dsk-cell{padding: 10px;background:#ffffff;}
.dig-angebot-dsk .flickity-prev-next-button.next{right:-50px;background: none;}
.dig-angebot-dsk .flickity-prev-next-button.previous{left:-50px;background: none;}
.dig-angebot-dsk .flickity-prev-next-button .flickity-button-icon{color:#aaaaaa;}
.angebot-shortcodes .ange-section:nth-child(2) .pfixed{border: 1px solid #d62630}
.angebot-shortcodes .ange-section:nth-child(2) .pfixed:hover{color: #d62630 !important;background: #ffffff !important;}
.angebot-shortcodes .ange-section:nth-child(1) .pfixed{border: 1px solid #06bebe}
.angebot-shortcodes .ange-section:nth-child(1) .pfixed:hover{color: #06bebe !important;background: #ffffff !important;}
.angebot-icon {display: block;margin: 0 auto;padding: 30px 0;width: 50px;}
#booking-bar{z-index: 99;}
}
@media(min-width:767px) and (max-width:1200px){
	.angebot-page .dig-angebot-dsk-cell{width: 100%!important;min-height: 1060px!important;}
	.angebot-page .ange-section{width:80%!important;}
	#header-mvh.top{height: 400px!important;}
}
input.pfixed{background: #4089b7!important;color: #ffffff!important;padding: 5px 25px!important;border: 1px solid #4089b7!important;border-radius: 0!important;}
</style>
<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:110px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('angebote_page_header_title'); ?></h1>
  <h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('angebote_page_header_subtitle'); ?></h2>
  <p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('angebote_page_header_text'); ?></p>
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
<?php $image = get_field('angebote_page_header_image'); ?>
<figure class="wp-block-image">
	<img class="wp-image-23 title-image" style="margin-top:-50px;" src="<?php echo $image['url']; ?>" alt="" />
</figure>

<?php if(ICL_LANGUAGE_CODE=='de'){ ?><div id="openangebot" style="display:none;"><?php echo do_shortcode("[contact-form-7 id=\"1542\" title=\"Angebot\"]"); ?></div><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='en'){ ?><div id="openangebot" style="display:none;"><?php echo do_shortcode("[contact-form-7 id=\"2357\" title=\"AngebotEN\"]"); ?></div><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><div id="openangebot" style="display:none;"><?php echo do_shortcode("[contact-form-7 id=\"2358\" title=\"AngebotFR\"]"); ?></div><?php } ?>
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
<main class="site-main angebot-shortcodes" id="main" style="margin-top:60px;">
    <?php echo do_shortcode("[dig_angebot_dsk_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"summer\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
	<?php echo do_shortcode("[dig_angebot_dsk_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"winter\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
    
	<section id="home-title-section" style="width:100%;margin-top:60px;">
		<img class="angebot-icon" src="/wp-content/uploads/2020/03/angebot-mountain-b.png">
		<h3 class="angebot-title" style="text-align: center;color:#000000;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Ganzjahresangebote<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our year-round offers<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres toute l'année<?php } ?>
		</h3>
	</section>
	<div id="angebot-content">
			<?php $image1 = get_field('section_1_image'); ?>
			<img class="" src="<?php echo $image1['url']; ?>" alt="" />
		<h4 class="home-title" style="text-align: left;padding-left:20px;padding-bottom:0;"><?php the_field('angebot_box_title'); ?></h4>
		<p class="body-hometext" style="text-align: left;padding-left:20px;"><?php the_field('angebot_box_text'); ?></p>
		<div style="width:100%;height:80px;background:#f0f0f0;text-align:left;padding:15px 20px;">
			<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.223372882.898250848.1629708625-929501200.1581080273#packageNew&pkgId=39111&type=&q&guests=A,A&in=2021-8-25&out=2021-8-26&coupon=" target="_blank" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;"><?php the_field('angebot_box_button'); ?></a>
			<!-- <a data-fancybox data-width="740" data-height="840" href="#openangebot" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;"><?php the_field('angebot_box_button'); ?></a> -->
		</div>
	</div>


</main>
</div>

</div><!-- .row -->
