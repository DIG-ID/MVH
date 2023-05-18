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
  $('.dig-hoteldesk-block-slider').flickity({
    // options
    cellAlign: 'center',
    prevNextButtons: true,
    contain: true,
    imagesLoaded: true,
    adaptiveHeight: true,
    wrapAround: true,
    pageDots: false,
    draggable: false
  });
});
</script>
<style>
@media (min-width: 1921px){
#header-mvh .page-body-text{font-size:20px;}
}
@media (min-width: 768px) {
  .rooms-page #home-title-section #rooms-wrapper:nth-child(1) > #right-side{padding-top: 65px!important;}
  .dig-angebot-dsk .flickity-prev-next-button.next {right: -50px;background: none;}
  .dig-angebot-dsk .flickity-prev-next-button.previous {left: -50px;background: none;}
  .rooms-page #amenities_icons_container{overflow: hidden;max-width: 650px;}
  .rooms-page .icons_display {float:left;padding: 0;width: 200px;}
  .rooms-page .amenity-title{line-height: 38px;padding: 0 9px;color: #9DA1A7;font-size: 14px;}
  .rooms-page [class^="icon-"],.hotels-page [class*=" icon-"] {float:left;background: #F7F7F8;border: 1px solid #F7F7F8;border-radius: 31px;padding: 0px;}
  .rooms-page [class^="icon-"]:before,.hotels-page [class*=" icon-"]:before {color: #B3BDC2;}
  .rooms-page .amenity-title{display: inline;}
  .hotels-page .header-title {width: 100%;color: #ffffff;position: absolute !important;top: 40vh;left: 0;right: 0;margin-left: auto;margin-right: auto;font-weight: bold;font-size: 52px;}
  .hotels-page .header-subtitle {width: 600px;color: #ffffff;position: absolute !important;top: 47vh;left: 0;right: 0;margin-left: auto;margin-right: auto;font-size: 16px;}
  .rooms-page #booking-bar{z-index: 99;}
  .rooms-page .pfixed:hover{color: #4089b7!important;background: #ffffff!important;}
  .rooms-page .amenities-list li{display: inline;}
  .rooms-page .amenities-list{padding: 0;}
  .rooms-page .room-subtitle-prev{opacity:0.7;padding-right:12%;padding-top: 0px;max-width: 700px;}
  .rooms-page .dig-angebot-dsk .flickity-prev-next-button:hover{background:#2c2b39!important;}
  .rooms-page .dig-angebot-dsk .flickity-prev-next-button .flickity-button-icon{color:#2c2b39!important;}
  .rooms-page .dig-angebot-dsk .flickity-prev-next-button:hover .flickity-button-icon{color:#ffffff!important;}
  #booking-bar{z-index: 99;}
  .safe-label{width: 360px;position: relative;top: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;}
  .safe-label img{width: 100px;margin: 0 10px;}
}
@media(min-width:767px) and (max-width:1200px){
  .rooms-page .desktop-version .icons_display{width: auto!important;}
  .rooms-page .desktop-version #home-title-section #rooms-wrapper:nth-child(1) > #right-side{padding-top: 65px!important;}
  .pfixed{margin:0!important;}
  #right-side,#left-side{min-height: 350px!important;}
  .room-subtitle-prev{display:none;}
  .room-title-prev{font-size:1.2rem;}
  .rooms-page #home-title-section #rooms-wrapper:nth-child(1) > #right-side{padding-top: 65px!important;}
  #home-title-section > div > #rooms-wrapper:nth-child(odd) > #right-side{padding:15px 15px 0px 15px!important;}
  #home-title-section > div > #rooms-wrapper:nth-child(even) > #left-side{padding:15px 15px 0px 15px!important;}
  #rooms-wrapper a{padding: 8px 0 0 0!important;display: block;height: auto!important;}
}

</style>
<div id="header-mvh" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
  <h1 class="section-title" style="margin:60px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('home_title'); ?></h1>
  <h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('home_subtitle'); ?></h2>
  <p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 900px;text-align: center;color:#ffffff;"><?php the_field('header-subtitle'); ?></p>
  <div class="safe-label">
    <img src="/wp-content/uploads/2020/06/ST0065300.png">
    <a href="#boxzilla-4411"><img src="/wp-content/uploads/2022/11/swisstainable.png" style="margin:0;"></a>
    <img src="/wp-content/uploads/2022/11/fd.png"></div>
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
<div id="home-title-section" class="rooms-list" style="width:100%;padding-top:0px;padding-bottom:0px;margin-top:-50px;">
  <div class="col-12 content-area" style="padding:0;">
    <?php echo do_shortcode("[dig_rooms_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room6\"]"); ?>
    	<?php echo do_shortcode("[dig_rooms_dskin_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room1\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room2\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dskin_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room3\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room7\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dskin_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room8\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room4\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dskin_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room5\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room9\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dskin_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room10\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room11\"]"); ?>
      <?php echo do_shortcode("[dig_rooms_dskin_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room12\"]"); ?>
  </div>
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
<div id="header-mvh" style="padding: 50px 0;width:100%;background:#2c2b39;text-align:center;">
	<img src="/wp-content/themes/understrap-child/assets/imgs/basic/wifi.png" />
  <h4 class="section-title" style="margin:15px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('buchen-field'); ?></h4>
  <p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#898989;"><?php the_field('buchen-text'); ?></p>
</div>
<div id="section-about-header" style="width:100%;margin:100px auto 0 auto">
	<h2 class="section-title">Angebote</h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;">Traumhafte Familienferien</h6>
</div>
<div id="section-about-content" style="width: 90%;max-width:1115px;margin:50px auto 100px auto;background:#f7f7f7;">
  <?php echo do_shortcode("[dig_angebot_general_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"angebot\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\" ]"); ?>
</div>

</div><!-- .row -->
