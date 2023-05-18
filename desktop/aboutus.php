<div class="row desktop-version">
<style>
@media (min-width: 768px) {
.uberuns-page #home-title-section {width: 100%;margin-top: -50px;background: #2c2b39;}
.uberuns-page #home-title-section .home-title {margin-top: 130px;width: 840px;margin-left: auto;margin-right: auto;color: #ffffff;}
.uberuns-page #home-title-section .header-subtitle {width: 840px;margin: 40px auto 0 auto;text-align: left;color: #ffffff;}
.uberuns-page #home-title-section .body-hometext {width: 840px;margin: 15px auto 80px auto !important;text-align: left;margin: 15px auto;color: #ffffff;}
.thumbnail img {box-sizing: border-box;padding: 2px;margin: 0 1% 15px 0;float: right;width: 31%;display: inline-block;}
.thumbnail img:nth-of-type(3n+3) {margin-right: 0;}
#uberuns-section{max-width: 1115px;margin:0 auto;}
.infra-preview > img{width: 100%;}
.fancybox-slide--iframe .fancybox-content {width: 1050px!important;height:100%!important;max-width: 80%;max-height: 80%;margin:0;}
.pfixed.darkmvh {border: 1px solid #2c2b39;}
.pfixed.darkmvh:hover {color:#2c2b39!important;}
#uberuns-section .body-hometext{padding-right: 60px!important;margin:15px!important;}
#booking-bar{z-index: 99;}
}
@media(min-width:767px) and (max-width:1200px){
	#uberuns-section #right-side{width:47%!important;}
  #uberuns-section #left-side{padding: 0 10px!important;}
  #uberuns-section #left-side .dig-hotel-block-name{font-size: 28px!important;}
  #uberuns-section .body-hometext{padding-right: 0!important;margin:15px!important;}
  #uberuns-section{padding-bottom: 0!important;padding-top: 50px!important;}
  .thumbnail img{margin: 0 2% 15px 0;}
	#header-mvh.top{height: 400px!important;}
	#uberuns-section #left-side, #uberuns-section #right-side{width: 100%!important;}
  #uberuns-section #right-side img{max-width: none!important;}
  #uberuns-section #left-side{padding-bottom:50px!important;}
  iframe{width: 90%!important;margin:0 auto!important;}
}
</style>
<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:110px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('intro_title'); ?></h1>
	<h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('intro_subtitle'); ?></h2>
	<p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('intro_body_text'); ?></p>
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
<div id="uberuns-section" style="width:100%;padding-bottom:75px;padding-top:150px;">
	<div id="left-side" style="float:left;width:50%;background:transparent;padding:0 30px;">
		<h2 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:15px;color:#000000;"><?php the_field('section_1_title'); ?></h2>
		<p class="body-hometext" style="max-width:700px;margin:15px;padding-right:60px;"><?php the_field('section_1_text'); ?></p>
	</div>
	<div id="right-side" style="float:left;width:50%;background:transparent;">
    <?php $image2 = get_field('section_1_image'); ?>
		<img class="d-block w-100" style="float:left;max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
	</div>
</div>
</div>
<div id="uberuns-section" style="width:100%;padding-bottom:75px;padding-top:75px;display:none;">
	<div id="left-side" style="float:left;width:50%;background:transparent;padding:0 30px;">
    <h2 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:15px;color:#000000;"><?php the_field('section_2_title'); ?></h2>
		<p class="body-hometext" style="max-width:700px;margin:15px;padding-right:60px;"><?php the_field('section_2_text'); ?></p>
    <div style="width:100%;height:100px;padding:35px 20px;">
			<a href="<?php the_field('section_2_button_link'); ?>" target="_blank" class="pfixed" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;"><?php the_field('section_2_button_text'); ?></a>
		</div>
	</div>
	<div id="right-side" style="float:left;width:50%;background:transparent;">
    <?php $image2 = get_field('section_2_image'); ?>
    <img class="d-block w-100" style="float:left;max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
	</div>
</div>


<div id="section-about-header" style="width:100%;margin:100px auto 100px auto">
	<h2 class="section-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Bewertungen<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Reviews<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les avis<?php } ?>
	</h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wir stehen für Qualität<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>We stand for quality<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nous défendons la qualité<?php } ?>
	</h6>
</div>
<!-- TrustYou Widget --> <script type="text/javascript" src="https://api.trustyou.com/static/3rdparty/iframe-resizer/js/iframeResizer.min.js"> </script> <iframe src="https://api.trustyou.com/hotels/179088c6-17ce-4ff2-801c-6407b6672c0d/tops_flops.html?key=89ea6469-f8cf-49b9-a0e4-785aea636af6&iframe_resizer=true" allowtransparency="true" frameborder="0"width="100%"> </iframe> <script type="text/javascript"> iFrameResize({});</script> <!-- /TrustYou Widget -->
<div id="section-about-header" style="width:100%;margin:100px auto 50px auto"></div>
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
