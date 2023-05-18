<div class="row desktop-version">
<style>
@media (min-width: 1921px){
	#home-title-section2{margin: 0 auto;}
}
@media (min-width: 768px) {
	.uberuns-page #home-title-section {width: 100%;margin-top: -50px;background: #2c2b39;}
	.uberuns-page #home-title-section .home-title {margin-top: 130px;width: 840px;margin-left: auto;margin-right: auto;color: #ffffff;}
	.uberuns-page #home-title-section .header-subtitle {width: 840px;margin: 40px auto 0 auto;text-align: left;color: #ffffff;}
	.uberuns-page #home-title-section .body-hometext {width: 840px;margin: 15px auto 80px auto !important;text-align: left;margin: 15px auto;color: #ffffff;}
	.acf-map {width: 100%;height: 400px;border: #ccc solid 1px;margin: 0px 0;}
	.acf-map img {max-width: inherit !important;}
	.wpcf7{max-width: 900px;}
	textarea, input{border-radius: 0!important;}
	.wpcf7-form-control-wrap{position: inherit;}
	.wpcf7-form > p:nth-child(4){text-align: center;}
	.wpcf7 input[type=submit]{margin: 0 auto;border:1px solid #4089b7;background: #4089b7;text-align: center;padding: 5px 20px;width: 200px;}
	.wpcf7 input[type=submit]:hover{color: #4089b7!important;background: #ffffff!important;border:1px solid #4089b7;}
	#uberuns-section .body-hometext{padding-right: 60px!important;margin:15px!important;}
	#booking-bar{z-index: 99;}
}
@media(min-width:767px) and (max-width:1200px){
	.d-block.w-100{margin-right: 0!important;}
  #uberuns-section #right-side{padding: 0 10px!important;}
  #uberuns-section #right-side .dig-hotel-block-name{font-size: 28px!important;}
  #uberuns-section .body-hometext{padding-right: 0!important;margin:15px!important;}
  #uberuns-section{padding-bottom: 0!important;padding-left: 15px!important;padding-right: 15px!important;padding-top: 15px!important;}
	.form-mvh{padding-left: 15px!important;padding-right: 15px!important;}
  .thumbnail img{margin: 0 2% 15px 0;}
	#header-mvh.top{height: 400px!important;}
	#uberuns-section #left-side, #uberuns-section #right-side{width: 100%!important;}
  #uberuns-section #left-side img{max-width: none!important;}
  #uberuns-section #right-side{padding-top:50px!important;padding-bottom: 20px!important;}
  iframe{width: 90%!important;margin:0 auto!important;}
	#home-title-section2 .angebot-title{padding: 0px 30px 0 30px!important;font-size: 28px!important;}
	#home-title-section2 .header-subtitle{padding:0px 30px 0 30px!important;}
	#home-title-section2 .body-hometext{padding:0px 30px 0px 30px!important;}
	#home-title-section2 #right-side,#home-title-section2 #right-side img{background-position:top center!important;height:300px!important;}
	#home-title-section2 #left-side{height: auto!important;padding:50px 0!important;}
	#home-title-section2 #right-side, #home-title-section2 #left-side{width: 100%!important;float: none!important;}

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
<div id="uberuns-section" style="width:100%;padding-bottom:75px;padding-top:150px;">
	<div id="left-side" style="float:left;width:50%;background:transparent;">
		<?php $image2 = get_field('section_1_image'); ?>
		<img class="d-block w-100" style="float:right;max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
	</div>
	<div id="right-side" style="float:left;width:50%;background:transparent;padding:0 30px;">
		<h5 class="header-subtitle" style="text-align: left;margin:0px 15px 0 15px!important;font-style:italic;"><?php the_field('section_1_pretitle'); ?></h5>
		<h2 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:15px;color:#000000;"><?php the_field('section_1_title'); ?></h2>
		<h5 class="header-subtitle" style="text-align: left;margin:20px 15px 0 15px!important;font-style:italic;"><?php the_field('section_1_info'); ?></h5>
		<p class="body-hometext" style="max-width:700px;margin:15px!important;padding-right:60px;"><?php the_field('section_1_text'); ?></p>
	</div>
</div>
<div id="uberuns-section" style="width:100%;padding-bottom:150px;padding-top:75px;">
	<div id="left-side" style="float:left;width:50%;background:transparent;">
		<?php $image2 = get_field('section_2_image'); ?>
		<img class="d-block w-100" style="float:right;max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
	</div>
	<div id="right-side" style="float:left;width:50%;background:transparent;padding:0 30px;">
		<h5 class="header-subtitle" style="text-align: left;margin:0px 15px 0 15px!important;font-style:italic;"><?php the_field('section_2_pretitle'); ?></h5>
		<h2 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:15px;color:#000000;"><?php the_field('section_2_title'); ?></h2>
		<h5 class="header-subtitle" style="text-align: left;margin:20px 15px 0 15px!important;font-style:italic;"><?php the_field('section_2_info'); ?></h5>
		<p class="body-hometext" style="max-width:700px;margin:15px!important;padding-right:60px;"><?php the_field('section_2_text'); ?></p>
	</div>
</div>
<div id="home-title-section2">
	<div id="left-side" style="float:left;width:50%;background:#2c2b39;padding:50px 0 0 0;height:500px;">
		<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 70px 80px 0 100px;font-size:36px;color:#ffffff;"><?php the_field('section_3_title'); ?></h5>
		<div class="body-hometext" style="padding: 15px 250px 20px 100px;color:#ffffff;"><?php the_field('section_3_text'); ?></div>
	</div>
	<?php $image1 = get_field('section_3_image'); ?>
	<div id="right-side" style="float:left;width:50%;padding:0;min-height: 500px;background:url(<?php echo $image1['url']; ?>) no-repeat;background-position: top center;background-size:cover;">
	</div>
</div>


<div class="col-12 content-area form-mvh" style="padding:100px 0 100px 0;">
	<div id="section-about-header" style="width:100%;margin:0 auto 50px auto">
		<h2 class="section-title">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Kontakt<?php } ?>
      <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Contact<?php } ?>
      <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Contactez-nous<?php } ?>
		</h2>
		<h6 class="header-subtitle" style="text-align:center;margin-top:20px;text-transform:uppercase;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Gerne stehen wir Ihnen jederzeit zur Verfügung<?php } ?>
      <?php if(ICL_LANGUAGE_CODE=='en'){ ?>We are at your disposal at any time<?php } ?>
      <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nous sommes à votre disposition à tout moment<?php } ?>
		</h6>
	</div>
	<main class="site-main" id="main">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?><?php echo do_shortcode("[contact-form-7 id=\"1157\" title=\"Feedback\"]"); ?><?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?><?php echo do_shortcode("[contact-form-7 id=\"1605\" title=\"Feedback EN\"]"); ?><?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?><?php echo do_shortcode("[contact-form-7 id=\"1606\" title=\"Feedback FR\"]"); ?><?php } ?>
	</main>
</div>

<?php if( have_rows('google_map_repeater') ): ?>
<div class="acf-map">
<?php while ( have_rows('google_map_repeater') ) : the_row(); ?>
<?php $location = get_sub_field('location'); ?>
<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
  <h4><?php the_sub_field('title'); ?></h4>
  <p class="address"><?php echo $location['address']; ?></p>
  <p><?php the_sub_field('description'); ?></p>
</div>
<?php endwhile; ?>
</div>
<?php endif; ?>

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
