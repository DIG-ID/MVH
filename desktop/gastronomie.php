<div class="row desktop-version">
<style>
@media (min-width: 1921px){
#header-mvh.realheader .page-body-text{font-size:20px;}
#header-mvh.middle{background-position: top center!important; background-size: 100%!important;height: calc(50vh - 110px)!important;}
#gastro-bottom-section{max-width: 1920px;margin: 0 auto;}
#gastro-bottom-section #left-side > div:first-child{max-width: 900px;}
}
@media (min-width: 768px) {
  .morelink{display: none;}
  .moreellipses{display: none;}
  .gastro-page #home-title-section {width: 100%;margin-top: -50px;}
  .gastro-page #home-title-section .home-title {margin-top: 160px;width: 90%;max-width: 840px;margin-left: auto;margin-right: auto;}
  .gastro-page #home-title-section .header-subtitle {width: 90%;max-width: 840px;margin: 40px auto 0 auto;text-align: left;}
  .gastro-page #home-title-section .body-hometext {width: 90%;max-width: 840px;margin: 15px auto 80px auto !important;text-align: left;margin: 15px auto;}
  .gastro-page .link-boxes .box-red {padding: 60px;margin: 16px 0;text-align: center;}
  .gastro-page .link-boxes .box-red h2.box-title {margin: 0;}
  .gastro-page .dig-hotel-block-name, .gastro-page .dig-hotel-block-subtitle{color:#ffffff;}
  .dig-slider-cell {filter:brightness(0.5);}
  .dig-slider-cell:hover {transition: 1s;filter:brightness(1);}
  #booking-bar{z-index: 99;}
  #header-mvh.realheader:after{content: "";position: absolute;top: 0;left: 0;width: 100%;height: 100%;opacity: .9;z-index: -1;background: #2c2b39;}
  .gastro-page #home-title-section .body-hometext{margin:15px!important;padding-right: 10px!important;}
  #home-title-section #right-side .header-subtitle,
  #home-title-section #right-side .body-hometext.more{margin-left: 15px!important;}
  .gastro-page .desktop-version #home-title-section .body-hometext{margin:15px!important;padding-right: 60px;}
  .safe-label{width: 240px;position: relative;top: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;}
  .safe-label img{width: 100px;margin: 0 10px;}
}
@media(min-width:767px) and (max-width:1200px){
  .morecontent span {display: none;}
  .moreellipses{display: inline;}
  .morelink {display: block;}
  #home-title-section{padding-left: 30px;padding-right: 30px;}
  .dig-hotel-block-name{font-size: 32px;}
  .gastro-page #home-title-section .header-subtitle{margin:15px 0 15px 0!important;}
  .gastro-page #home-title-section .body-hometext{margin:0 auto!important;padding-right: 10px!important;}
  .d-block.w-100{margin-right: 0!important;}
  #home-title-section{padding-bottom: 75px!important;}
  #gastro-bottom-section > #right-side {min-height: 400px!important;width: 100%!important;;}
  #gastro-bottom-section > #left-side{width: 100%!important;padding-top: 0!important;}
  #gastro-bottom-section > #left-side > div{height:300px!important;width:50%!important;margin-top:50px!important}
  #gastro-bottom-section > #left-side > div > .angebot-title, #gastro-bottom-section > #left-side > div > .body-hometext{padding-top: 15px!important;}
  #home-title-section.bottom .dig-hotel-block-name{font-size: 22px;}
  #home-title-section.bottom{padding-top:75px!important;}
  #gastro-bottom-section.right-pic #right-side{background-position: top center!important;}
  #header-mvh.middle{height: 500px!important;}
}

</style>
<div id="header-mvh" class="realheader" style="height:470px;z-index:1;position: relative;width:100%;background:url(/wp-content/uploads/2020/05/gastro_header.jpg) no-repeat;background-size:cover;">
  <h1 class="section-title" style="margin:60px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
  <h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field('page_subtitle'); ?></h2>
  <p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('intro-text'); ?></p>
  <div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065299.png;"><img src="/wp-content/uploads/2022/11/swisstainable.png"></div>
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
<div id="home-title-section" style="width:100%;padding-top:150px;padding-bottom:150px;">
	<div id="left-side" style="float:left;width:50%;background:transparent;">
		<?php $image2 = get_field('image-1'); ?>
		<img class="d-block w-100" style="float:right;max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image2['url']; ?>" />
	</div>
	<div id="right-side" style="float:left;width:50%;background:transparent;padding:0 30px;">
		<h2 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:15px;color:#000000;"><?php the_field('title-1'); ?></h2>
		<h5 class="header-subtitle" style="text-align: left;margin:40px 15px 0 15px;font-style:italic;"><?php the_field('subtitle-1'); ?></h5>
		<p class="body-hometext more" style="max-width:700px;margin:15px;padding-right:60px;"><?php the_field('text-1'); ?></p>
    <div style="width:100%;height:100px;padding:35px 20px;">
      <?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/gastronomie/restaurant-hannigalp/" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Speisen & Getränke<?php } ?>
      <?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/gastronomie/restaurant-hannigalp/?lang=en" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Drinks and Food<?php } ?>
      <?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/gastronomie/restaurant-hannigalp/?lang=fr" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Nourriture et boissons<?php } ?>
      </a>
    </div>
	</div>
</div>
<?php $hotelbarbg = get_field('mid_section_bg'); ?>
<div id="header-mvh" class="middle" style="height:calc(70vh - 110px);width:100%;background:url(<?php echo $hotelbarbg['url']; ?>) no-repeat;">
  <div style="width:100%;height: 100%;margin:0 auto;float:right;background:rgba(44,43,57,0);">
    <h2 class="section-title" style="margin:150px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('mid_section_title'); ?></h2>
    <p class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;font-size:20px;"><?php the_field('mid_section_subtitle'); ?></p>
    <p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('mid_section_text'); ?></p>
    <div style="display: none;width:100%;height:100px;color:#ffffff;padding:35px 20px;"><a href="<?php the_field('mid_section_button_link'); ?>" class="pfixed" style="background:#4089b7;padding: 5px 20px;width:130px;margin:0 auto;"><?php the_field('mid_section_button'); ?></a></div>
  </div>
</div>
<div id="gastro-bottom-section" class="right-pic" style="width:100%">
	<div id="left-side" style="float:left;width:50%;background:#f0f0f0;padding:50px 0 0 0;">
    <div style="position:absolute;width:50%;margin-left: 5%;background:#ffffff;height:400px;filter: drop-shadow(0px 0px 10px #222);">
  		<h4 class="angebot-title" style="text-align: left;font-weight:bold;padding: 35px 20px 0 35px;font-size:32px;"><?php the_field('title-2'); ?></h4>
  		<div class="body-hometext more" style="padding: 35px 20px 0 35px"><?php the_field('text-2'); ?>
      </div>
      <div style="width:100%;position:absolute;bottom:30px;text-align:left;padding:35px 20px 0 35px;"><a href="<?php the_field('mid_section_button_link'); ?>" target="_blank" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:160px;"><?php the_field('mid_section_button'); ?></a></div>
    </div>
  </div>
  <?php $image3 = get_field('image-2'); ?>
	<div id="right-side" style="float:left;width:50%;padding:0;min-height: 500px;background:url(<?php echo $image3['url']; ?>) no-repeat;background-position: top right;">
	</div>
</div>

<div id="home-title-section" class="bottom" style="width:100%;padding-top:150px;padding-bottom:50px;margin:0 auto;">
	<div id="section-about-header" style="width:100%;margin:0 0 70px 0;">
		<h2 class="section-title"><?php the_field('dishes_main_title'); ?></h2>
	</div>
	<div style="width:90%;max-width:1115px;margin:0 auto;">
		<div id="left-side" style="float:left;width:50%;background:transparent;padding:0 30px;text-align:center;">
			<?php $image1 = get_field('dishes_image_left'); ?>
			<img class="d-block w-100" style="max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image1['url']; ?>" />
			<h3 class="dig-hotel-block-name" style="margin:25px 0;color:#000000;"><?php the_field('dishes_title_left'); ?></h3>
			<p class="body-hometext" style="max-width:700px;text-align:center;"><?php the_field('dishes_text_left'); ?></p>
		</div>
		<div id="right-side" style="float:left;width:50%;background:transparent;padding:0 30px;text-align:center;">
			<?php $image2 = get_field('dishes_image_right'); ?>
			<img class="d-block w-100" style="max-width:500px;filter: drop-shadow(6px 8px 7px #aaa);margin-right:30px;" src="<?php echo $image2['url']; ?>" />
			<h3 class="dig-hotel-block-name" style="margin:25px 0;color:#000000;"><?php the_field('dishes_title_right'); ?></h3>
			<p class="body-hometext" style="max-width:700px;text-align:center;"><?php the_field('dishes_text_right'); ?></p>
		</div>
	</div>
</div>


<div style="width:100%;background:#f7f7f7;padding-top:10px;padding-bottom:0px;">
  <div class="dig-slider">
    <?php $images4 = get_field('desktop_gallery'); ?>
    <?php foreach( $images4 as $image11 ): ?>
      <div class="dig-slider-cell" style="width: 384px;"><img src="<?php echo $image11['url']; ?>" alt="<?php echo $image11['alt']; ?>" /></div>
    <?php endforeach; ?>
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
