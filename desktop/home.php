<div class="row desktop-version">
<script type="text/javascript">
jQuery(document).ready(function($) {
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
	$('.dig-angebot-dsk').flickity({
		// options
		cellAlign: 'center',
		prevNextButtons: true,
		draggable: false,
		contain: true,
		imagesLoaded: true,
		adaptiveHeight: true,
		wrapAround: true,
		groupCells: 1
	});
	$('.dig-images').flickity({
		// options
		cellAlign: 'center',
		prevNextButtons: true,
		contain: true,
		imagesLoaded: true,
		wrapAround: true
	});
});
</script>
<style>
.home .voucher_div{/*display: none;*/}
.desktop-version .morelink{display: none;}
.desktop-version .moreellipses{display: none;}
@media (min-width: 1921px){
	.site-main{background-repeat: no-repeat!important;background-size: 100%!important;}
}
@media (min-width: 650px){
  .home .desktop-version .header-title{top:24vh;}
    .home .desktop-version .header-title.line2{top:31vh;width: 100%;}
}

.home .desktop-version .amenity-title{display: none;}
.home .desktop-version .amenities-list li{display: inline;}
.home .desktop-version .amenities-list{padding: 0;}
.home .desktop-version #amenities_icons_container{overflow: hidden;max-height: 45px;}
.home .desktop-version .icons_display {float:left;padding: 0px;margin-right: 20px;}
.home .desktop-version .amenity-title{line-height: 46px;padding:2px 19px 0 0;color: #9DA1A7;font-size: 14px;}
.home .desktop-version [class^="icon-"]:before,.hotels-page .desktop-version [class*=" icon-"]:before {color: #B3BDC2;}
.home .row{margin-left: 0;margin-right: 0;}
.home #page-wrapper > #content{padding-left: 0;padding-right: 0;}
.home .desktop-version .hannigalp-section{min-height: 470px;position: relative;margin:0 auto;width: 100%;max-width: 1115px;}
.home .desktop-version .dig-angebot-dsk {margin-bottom: 80px;background: #2c2b39;}
.home .desktop-version .dig-angebot-dsk .flickity-page-dots{bottom: -80px;}
.home .desktop-version .dig-angebot-dsk .flickity-prev-next-button.next{right:-38px;background: none;}
.home .desktop-version .dig-angebot-dsk .flickity-prev-next-button.previous{left:-38px;background: none;}
.home .desktop-version .dig-angebot-dsk .flickity-prev-next-button .flickity-button-icon{color:#f0f0f0;}
.home .desktop-version .dig-angebot-dsk-cell{background:#ffffff;height: 380px!important;}
.home .desktop-version .ange-section{width: 85%;max-width:1300px;margin: 80px auto 50px auto;}
.home .desktop-version .body-hometext{width: auto;padding: 0px 20px 15px 20px;margin-bottom: 0px!important;}
.home .desktop-version .hannigalp-section.section-top{z-index: 5;}
.home .desktop-version .hannigalp-section.section-mid{z-index: 6;top:-50px;}
.home .desktop-version .hannigalp-section.section-bot{z-index: 7;top:-100px;}
.desktop-version .home-dates{width: 33%;float: left;}
.desktop-version .home-dates h2, .desktop-version .home-dates p{color: #ffffff;}
.desktop-version .home-dates-left{float: left;width: 34%;text-align: center;border-right: 1px solid #aaa;}
.desktop-version .home-dates-right{float: left;width: 66%;}
.home .desktop-version #angebot-content {margin: 0 auto;}
.home .desktop-version .voucher_but:hover {background-position: 0 -74px!important;}
.desktop-version .intro-bg{transition: 0.4s linear;-moz-transition: 0.4s linear; /* Firefox 4 */-webkit-transition: 0.4s linear; /* Safari and Chrome */-o-transition: 0.4s linear; /* Opera */}
.home .desktop-version #amenities_icons_container{display: none;}
.safe-label{width: 100px;margin-left: auto;margin-right: auto;}
@media(min-width:767px) and (max-width:1200px){
	.safe-label{display: none;}
		.home .header-title{top:120px!important;font-size:36px;}
		.home .header-title.line2{top:170px!important;}
		.home .voucher_div{top:235px!important;}
		.home .welcome_sec{padding-top: 130px!important;width: 40%!important;}
		.home .family-main{background-position: center!important;padding: 0!important;}
		.home .section_text1{padding-top:130px!important;padding-right:20px;}
		.home .angebot-title{font-size:18px!important;padding:15px 15px 0 10px!important;}
		.home .dig-angebot-dsk-cell .slider-subtitle{padding: 0 10px!important;display: none;}
		.home .body-hometext{padding:0px 10px 0px 10px;margin-top:0!important;}
		.morecontent span {display: none;}
		.morelink {display: block;}
		.moreellipses{display: inline;}
		.dig-angebot-dsk-cell img,.flickity-viewport{height:260px!important;}
		.home .hannigalp-section{min-height: 400px;}
		.hannigalp-section #right-side{padding:20px 0px 15px 25px!important;}
		.hannigalp-section #right-side{padding:20px 15px 15px 0px!important;}
		.home .desktop-version .body-hometext{padding: 10px!important;}
}
@media(min-width:1201px) and (max-width:1520px){
		.safe-label{top: 42vh;}
		.home .desktop-version .header-title{top: 15vh;}
    	.home .desktop-version .header-title.line2{top: 22vh;}
    	.home .desktop-version .voucher_div{top:32vh!important;}
}
</style>
<?php $image = get_field('header-bg-dsk'); ?>
<figure class="wp-block-image" style="width:100%;position:relative;">
	<div class="container" style="position: absolute;left: 50%;z-index: 9;transform: translateX(-50%);height: 100%;">
		<div class="row" style="height: 100%;flex-direction: column;justify-content: center;">
			<h1 class="header-title" style="text-align: center;position: relative!important;top:auto!important;"><?php the_field('header-title'); ?></h1>
			<h1 class="header-title line2" style="text-align: center;position: relative!important;top:auto!important;"><?php the_field('header_title_line_2'); ?></h1>
			<div class="voucher_div" style="left: 0;right: 0;margin:20px auto 30px auto;width:208px;text-align: center;color:#ffffff;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a class="voucher-but" href="/gutscheine/"><div class="voucher_but" style="width: 208px; margin:0 auto; height: 70px;background:url(/wp-content/uploads/2020/01/1-2.png);"></div><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a class="voucher-but" href="/gutscheine/"><div class="voucher_but" style="width: 208px; margin:0 auto; height: 70px;background:url(/wp-content/uploads/2020/05/1.png);"></div><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a class="voucher-but" href="/gutscheine/"><div class="voucher_but" style="width: 208px; margin:0 auto; height: 70px;background:url(/wp-content/uploads/2020/05/1-1.png);"></div><?php } ?>
			  	</a>
			</div>
			<div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065300.png;"></div>
		</div>
	</div>
	<img class="wp-image-23 title-image" style="filter: brightness(0.7);width:100%;" src="<?php echo $image['url']; ?>" alt="" />
</figure>

<div id="booking-bar" style="z-index:9;">
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
<div class="home-title-section col-12 content-area" style="padding:0;z-index:1;margin-top:-50px;">
	<?php $section1bg = get_field('content-img-bg'); ?>
	<main class="site-main intro-bg" id="main" style="background:url(<?php echo $section1bg['url']; ?>) no-repeat;padding:0;height:700px;">
		<div style="width:100%;height: 100%;margin:0 auto;float:right;background:linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 36%, rgba(255,255,255,0.6012780112044818) 45%, rgba(255,255,255,0.8477766106442577) 54%, rgba(255,255,255,1) 63%, rgba(255,255,255,1) 100%);">
			<div class="welcome_sec" style="width:47%;margin:0 auto;float:right;padding-top:200px;">
				<h4 class="" style="margin-bottom:0;font-size:28px;font-weight:bold;"><?php the_field('home_title'); ?></h4>
				<h6 class="header-subtitle" style="text-align: left;margin:15px 15px 0 0px!important;font-style:italic;"><?php the_field('home_subtitle'); ?></h6>
				<p class="header-subtitle" style="margin:15px 0;max-width:520px;"><?php the_field('body_text'); ?></p>
			</div>
		</div>
	</main>

</div>
	<div id="sliders-home" class="site-main">
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
  <style>
.rooms1 .flickity-prev-next-button:hover .flickity-button-icon{color:#2c2b39!important;}
.rooms1 .flickity-prev-next-button:hover{background:#ffffff!important;}
.rooms2 .flickity-prev-next-button:hover{background:#2c2b39!important;}
.rooms2 .flickity-prev-next-button .flickity-button-icon{color:#2c2b39!important;}
.rooms2 .flickity-prev-next-button:hover .flickity-button-icon{color:#ffffff!important;}

</style>
<!-- Do the right sidebar check -->
<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
<div class="col-12 content-area rooms1" style="padding:0;">
	<main class="site-main" id="main" style="background:#2c2b39;padding:100px 0;">
		<h2 class="" style="text-align: center;color:#ffffff;"><?php the_field('zimmer_title'); ?></h2>
		<h6 class="header-subtitle" style="text-align:center;margin:0 auto;color:#ffffff;"><?php the_field('zimmer_subtitle'); ?></h6>
		<?php echo do_shortcode("[dig_homerooms_single_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"regular\"]"); ?>
	</main>
</div>

<div class="col-12 content-area rooms2" style="padding:0;">
	<main class="site-main" id="main" style="background:#f0f0f0;padding:100px 0;">
	<h2 class="" style="text-align: center;color:#000000;"><?php the_field('family_title'); ?></h2>
	<h6 class="header-subtitle" style="text-align:center;margin:0 auto;color:#000000;"><?php the_field('family_subtitle'); ?></h6>
	<?php echo do_shortcode("[dig_homerooms_single_dsk_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"family\"]"); ?>
	</main>
</div>

<div class="col-12 content-area" style="padding:0;">
	<?php $section2bg = get_field('grachen_bg'); ?>
	<main class="site-main" id="main" style="background:url(<?php echo $section2bg['url']; ?>);background-position-x:right;height:515px;margin-bottom:100px;">
		<div style="width:100%;height: 100%;margin:0 auto;float:right;padding:135px 0;background:linear-gradient(90deg, rgba(44,43,57,1) 0%, rgba(44,43,57,0) 81%, rgba(44,43,57,0) 100%);">
			<div style="width:85%;margin:0 auto;">
				<h2 class="" style="color:#ffffff;margin-bottom:0;"><?php the_field('grachen_title'); ?></h2>
				<p class="header-subtitle" style="margin:30px 0;max-width:500px;color:#ffffff;"><?php the_field('grachen_text'); ?></p>
				<div style="width:100%;height:65px;text-align:left;padding:0;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/graechen/" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;"><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/graechen-insidertipps/?lang=en" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;"><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/graechen-insidertipps/?lang=fr" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;"><?php } ?>
						<?php the_field('grachen_button'); ?></a>
				</div>
			</div>
	</div>
	</main>
</div>

<div class="container">
	<div class="row">
	<div class="hannigalp-section inverted section-top">
		<div id="left-side" style="float:left;width:60%;">
			<?php $image_disc1 = get_field('discover_image_1'); ?>
			<img class="d-block w-100" style="float:right;filter: drop-shadow(6px 8px 7px #aaa);" src="<?php echo $image_disc1['url']; ?>" alt="<?php echo $image_disc1['alt']; ?>" />
		</div>
		<div id="right-side" style="float:left;width:40%;padding:50px 0px 15px 25px;">
			<h3 class="dig-hotel-block-name" style="margin-left:15px;color:#000000;"><?php the_field('discover_title_1'); ?></h3>
			<p class="dig-hotel-block-subtitle more" style="margin-left:15px;color:#000000;"><?php the_field('discover_text_1'); ?></p>
			<div style="width:100%;height:65px;text-align:left;padding:10px 15px 0 15px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/spa/" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Jetzt entdecken</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/spa/?lang=en" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Discover now</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/spa/?lang=fr" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Découvrez</a><?php } ?>
			</div>
		</div>
	</div>
	<div class="hannigalp-section section-mid" style="clear:both;">
		<div id="left-side" style="float:left;width:40%;padding:80px 15px 15px 0px;">
			<h3 class="dig-hotel-block-name" style="color:#000000;"><?php the_field('discover_title_2'); ?></h3>
			<p class="dig-hotel-block-subtitle more" style="color:#000000;"><?php the_field('discover_text_2'); ?></p>
			<div style="width:100%;height:65px;text-align:left;padding:10px 15px 0 0px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/sport/" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Jetzt entdecken</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/sport/?lang=en" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Discover now</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/sport/?lang=fr" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Découvrez</a><?php } ?>
			</div>
		</div>
		<div id="right-side" style="float:left;width:60%;">
			<?php $image_disc2 = get_field('discover_image_2'); ?>
			<img class="d-block w-100" style="float:right;filter: drop-shadow(6px 8px 7px #aaa);" src="<?php echo $image_disc2['url']; ?>" alt="<?php echo $image_disc2['alt']; ?>" />
		</div>
	</div>
	<div class="hannigalp-section inverted section-bot">
		<div id="left-side" style="float:left;width:60%;">
			<?php $image_disc3 = get_field('discover_image_3'); ?>
			<img class="d-block w-100" style="float:right;filter: drop-shadow(6px 8px 7px #aaa);" src="<?php echo $image_disc3['url']; ?>" alt="<?php echo $image_disc3['alt']; ?>" />
		</div>
		<div id="right-side" style="float:left;width:40%;padding:80px 0px 15px 25px;">
			<h3 class="dig-hotel-block-name" style="margin-left:15px;color:#000000;"><?php the_field('discover_title_3'); ?></h3>
			<p class="dig-hotel-block-subtitle more" style="margin-left:15px;color:#000000;"><?php the_field('discover_text_3'); ?></p>
			<div style="width:100%;height:65px;text-align:left;padding:10px 15px 0 15px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/gastronomie/" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Jetzt entdecken</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/gastronomie/?lang=en" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Discover now</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/gastronomie/?lang=fr" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:150px;">Découvrez</a><?php } ?>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="col-12 content-area" style="padding:0;">
	<main class="site-main" id="main" style="background:url(/wp-content/uploads/2020/04/Hannigalp-grachen-summer.jpg);padding:80px 0;height:246px;margin-bottom:100px;">
		<div style="width:75%;margin:0 auto;">
			<div class="home-dates">
				<div class="home-dates-left"><h2>4<span style="display:inline-flex;vertical-align:sub;">.</span></h2><p style="font-size:16px;margin-top:-8px;"><?php the_field('trophy_bar_title_1'); ?></p></div>
				<div class="home-dates-right"><p style="padding:10px;"><?php the_field('trophy_bar_text_1'); ?></p></div>
			</div>
			<div class="home-dates">
				<div class="home-dates-left"><h2>36</h2><p style="font-size:16px;"><?php the_field('trophy_bar_title_2'); ?></p></div>
				<div class="home-dates-right"><p style="padding:10px;"><?php the_field('trophy_bar_text_2'); ?></p></div>
			</div>
			<div class="home-dates">
				<div class="home-dates-left"><h2>4</h2><p style="font-size:16px;"><?php the_field('trophy_bar_title_3'); ?></p></div>
				<div class="home-dates-right"><p style="padding:10px;"><?php the_field('trophy_bar_text_3'); ?></p></div>
			</div>
		</div>
	</main>
</div>
<div id="section-about-header" style="width:100%;margin:60px auto 0 auto">
	<h2 class="section-title"><?php the_field('angebot_title'); ?></h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;"><?php the_field('angebot_subtitle'); ?></h6>
</div>
<div id="section-about-content" style="width:90%;max-width: 1115px;margin:50px auto;">
	<div class="row">
		<div id="left-side" style="float:left;min-height:840px;width:48%;background:#f0f0f0;margin-right:2%;position:relative;">
			<div id="angebot-content">
        <?php $image_ange1 = get_field('angebot_image'); ?>
				<img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
				<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 0 20px;font-size:28px;"><?php the_field('angebot_title_left'); ?></h5>
				<p class="body-hometext" style="text-align: left;padding-left:20px;"><?php the_field('angebot_text_left'); ?></p>
				<div class="slider-subtitle" style="padding:10px 20px;font-weight:bold;font-size:19px;background: #f0f0f0;color: #06bebd;position:absolute;bottom:70px;"><?php the_field('angebot_price_left'); ?></div>
				<div style="width:90%;height:60px;background:#f0f0f0;text-align:left;padding:15px 20px;position:absolute;bottom:15px;"><a href="<?php the_field('angebot_link_left'); ?>" target="_blank" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
				</a></div>
			</div>
		</div>
		<div id="right-side" style="float:left;min-height:840px;width:48%;padding:0px 0px 15px 0px;background:#f0f0f0;margin-left:2%;position:relative;">
			<?php $image_ange1 = get_field('angebot_image_right'); ?>
			<img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
				<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 0 20px;font-size:28px;"><?php the_field('angebot_title_right'); ?></h5>
				<div class="body-hometext"><?php the_field('angebot_text_right'); ?></div>
				<div class="slider-subtitle" style="padding:10px 20px;font-weight:bold;font-size:19px;background: #f0f0f0;color: #06bebd;position:absolute;bottom:70px;"><?php the_field('angebot_price_right'); ?></div>
				<div style="width:90%;height:60px;background:#f0f0f0;text-align:left;padding:15px 20px;position:absolute;bottom:15px;"><a href="<?php the_field('angebot_link_right'); ?>" target="_blank" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
				</a></div>
  	</div>
	</div>
</div>

</div><!-- .row -->
