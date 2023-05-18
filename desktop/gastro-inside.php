<div class="row desktop-version">
<style>
@media (min-width: 1921px){
#header-mvh.middle{background-position: top center!important; background-size: 100%!important;height: calc(50vh - 110px)!important;}
#gastro-bottom-section{max-width: 1920px;margin: 0 auto;}
}
@media (min-width: 768px) {
  .gastro-page #home-title-section {width: 100%;margin-top: -50px;}
  .gastro-page #home-title-section .home-title {margin-top: 160px;width:90%;max-width: 840px;margin-left: auto;margin-right: auto;}
  .gastro-page #home-title-section .header-subtitle {width:90%;max-width: 840px;margin: 40px auto 0 auto;text-align: left;}
  .gastro-page #home-title-section .body-hometext {width:90%;max-width: 840px;margin: 15px auto 80px auto !important;text-align: left;margin: 15px auto;}
  .gastro-page .link-boxes .box-red {padding: 60px;margin: 16px 0;text-align: center;}
  .gastro-page .link-boxes .box-red h2.box-title {margin: 0;}
  .gastro-page .dig-hotel-block-name, .gastro-page .dig-hotel-block-subtitle{color:#ffffff;}
  .dig-slider-cell {filter:brightness(0.5);}
  .dig-slider-cell:hover {transition: 1s;filter:brightness(1);}
  #booking-bar{z-index: 99;}
}
@media(min-width:767px) and (max-width:1200px){
  #home-title-section > #left-side a{width: 100%!important;margin-right: 0!important;margin-bottom: 15px;}
  #home-title-section.top{padding-top: 85px!important;}
  #home-title-section.top #left-side, #home-title-section.top #right-side{width: 100%!important;}
  #home-title-section.top #left-side > img{max-width: none!important;margin:0!important;}
  #home-title-section.top #right-side{padding: 50px 0 0 0!important;}
  #header-mvh.middle{height: 500px!important;}
  #header-mvh.top{height: 400px!important;}
  #gastro-bottom-section{display: table!important;}
  #gastro-bottom-section.middle #right-side{display: table-header-group;}
  #gastro-bottom-section.top #left-side,#gastro-bottom-section.bottom #left-side{padding-top: 0!important;}
  #gastro-bottom-section.top #left-side,#gastro-bottom-section.middle #right-side,#gastro-bottom-section.bottom #left-side{padding-bottom:50px!important}
  #gastro-bottom-section.middle #left-side{margin-top: 50px!important;}
  #gastro-bottom-section #right-side, #gastro-bottom-section #left-side{width: 100%!important;float: none!important;}
  #gastro-bottom-section #right-side img, #gastro-bottom-section #left-side img{height: auto!important;}
}
</style>
<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
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
<div id="home-title-section" class="top" style="width:90%;max-width:1115px;margin:0 auto;padding-top:150px;padding-bottom:150px;">
	<div id="left-side" style="float:left;width:58%;background:transparent;padding:0 30px;">
        <h2 class="dig-hotel-block-name" style="margin-right:15px;margin-bottom:15px;color:#000000;"><?php the_field('section_1_title'); ?></h2>
		<p class="body-hometext" style="max-width:700px;margin-top:15px!important;padding-right:60px!important;"><?php the_field('section_1_text'); ?></p>
        <div style="width:100%;height:69px;color:#ffffff;padding:20px 0px;">
        <a target="_blank" href="<?php the_field('button_1_link'); ?>" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 0px;width:190px;float:left;margin-right:30px;text-align:center;"><?php the_field('button_1_text'); ?></a>
        <a target="_blank" href="<?php the_field('button_3_link'); ?>" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 0px;width:190px;float:left;margin-right:30px;text-align:center;"><?php the_field('button_3_text'); ?></a>
        </div>
        <div style="width:100%;height:50px;color:#ffffff;padding:0px;">
        <a target="_blank" href="<?php the_field('button_2_link'); ?>" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 0px;width:190px;float:left;text-align:center;margin-right:30px;"><?php the_field('button_2_text'); ?></a>
        <a target="_blank" href="<?php the_field('button_4_link'); ?>" class="pfixed" style="display: none;background:#4089b7;color:#ffffff;padding: 5px 0px;width:190px;float:left;text-align:center;"><?php the_field('button_4_text'); ?></a>
        </div>
        <div style="width:100%;height:50px;color:#ffffff;padding:0px;">
        <a target="_blank" href="<?php the_field('button_5_link'); ?>" class="pfixed" style="display: none;background:#4089b7;color:#ffffff;padding: 5px 0px;width:190px;float:left;text-align:center;margin-right:30px;"><?php the_field('button_5_text'); ?></a>
        <a target="_blank" href="<?php the_field('button_6_link'); ?>" class="pfixed" style="display: none;background:#4089b7;color:#ffffff;padding: 5px 0px;width:190px;float:left;text-align:center;"><?php the_field('button_6_text'); ?></a>
        </div>
	</div>
	<div id="right-side" style="float:left;width:42%;background:transparent;">
    <?php $imageLeft = get_field('section_1_left_image'); ?>
		<img class="d-block w-100" style="float:right;max-width:500px;width: 48%!important;filter: drop-shadow(6px 8px 7px #aaa);" src="<?php echo $imageLeft['url']; ?>" />
    <?php $imageRight = get_field('section_1_right_image'); ?>
		<img class="d-block w-100" style="float:right;max-width:500px;width: 48%!important;filter: drop-shadow(6px 8px 7px #aaa);margin-right:2%;" src="<?php echo $imageRight['url']; ?>" />
	</div>
</div>
</div>
<?php $hotelbarbg = get_field('mid_section_bg'); ?>
<div id="header-mvh" class="middle" style="height:calc(70vh - 110px);width:100%;background:url(<?php echo $hotelbarbg['url']; ?>) no-repeat;">
  <div style="width:100%;height: 100%;margin:0 auto;float:right;background:rgba(44,43,57,0.5);">
    <h2 class="section-title" style="margin:150px auto 0px auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('section_2_title'); ?></h2>
    <p class="header-subtitle" style="margin:5px auto 30px auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;font-size:20px;"><?php the_field('section_2_subtitle'); ?></p>
    <p class="page-body-text" style="margin:0 auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('section_2_text'); ?></p>
  </div>
</div>

<div id="gastro-bottom-section" class="top" style="width:100%">
  <div id="left-side" style="float:left;width:50%;background:#f7f7f7;padding:50px 0 0 0;">
    <h4 class="angebot-title" style="text-align: left;font-weight:bold;padding: 35px 20px 0 35px;font-size:32px;"><?php the_field('terrace_title'); ?></h4>
    <div class="body-hometext" style="padding: 35px 20px 0 35px"><?php the_field('terrace_text'); ?></div>
  </div>
  <?php $image5 = get_field('terrace_image'); ?>
  <div id="right-side" style="float:left;width:50%;padding:0;background:url(<?php echo $image5['url']; ?>) no-repeat;background-position: top center;min-height:500px;">
  </div>
</div>
  <div id="gastro-bottom-section" class="middle" style="width:100%">
    <?php $image3 = get_field('section_3_image'); ?>
	<div id="left-side" style="float:left;width:50%;padding:0;background:url(<?php echo $image3['url']; ?>) no-repeat;background-position: top left;min-height:500px;">
  </div>
	<div id="right-side" style="float:left;width:50%;background:#f7f7f7;padding:50px 0 0 0;">
    <h4 class="angebot-title" style="text-align: left;font-weight:bold;padding: 35px 20px 0 35px;font-size:32px;"><?php the_field('section_3_title'); ?></h4>
    <div class="body-hometext" style="padding: 35px 20px 0 35px"><?php the_field('section_3_text'); ?></div>
	</div>
  </div>
<div id="gastro-bottom-section" class="bottom" style="width:100%">
	<div id="left-side" style="float:left;width:50%;background:#f7f7f7;padding:50px 0 0 0;">
		<h4 class="angebot-title" style="text-align: left;font-weight:bold;padding: 35px 20px 0 35px;font-size:32px;"><?php the_field('section_4_title'); ?></h4>
		<div class="body-hometext" style="padding: 35px 20px 0 35px"><?php the_field('section_4_text'); ?></div>
  </div>
  <?php $image4 = get_field('section_4_image'); ?>
	<div id="right-side" style="float:left;width:50%;padding:0;background:url(<?php echo $image4['url']; ?>) no-repeat;background-position: top center;min-height:500px;">
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


</div><!-- .row -->
