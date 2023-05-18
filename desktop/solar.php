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
<div class="row desktop-version">

	<div id="header-mvh" class="top" style="height:470px;z-index:1;position: relative;width:100%;background:#2c2b39;">
		<h1 class="section-title" style="margin:110px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field( 'intro_content_title' ); ?></h1>
		<h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;font-size:20px;color:#ffffff;"><?php the_field( 'intro_content_subtitle' ); ?></h2>
		<p class="page-body-text" style="margin:0 auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field( 'intro_content_description' ); ?></p>
	</div>

	<?php get_template_part( 'template-parts/booking-bar' ); ?>

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

	<section class="section-solar">
		<?php $image = get_field('header-image'); ?>
		<figure class="wp-block-image">
			<img class="wp-image-23 title-image" style="margin-top:-50px;" src="<?php echo $image['url']; ?>" alt="" />
		</figure>
		<div id="home-title-section2">
			<div id="left-side" style="float:left;width:50%;background:#2c2b39;padding:50px 0 0 0;height:500px;">
				<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 70px 80px 0 100px;font-size:36px;color:#ffffff;"><?php the_field('section_1_title'); ?></h5>
				<p class="header-subtitle" style="text-align:left;padding: 0px 80px 0 100px;font-size:28px;color:#4089b7;"><?php the_field('section_1_subtitle'); ?></p>
				<div class="body-hometext" style="padding: 15px 80px 20px 100px;color:#ffffff;"><?php the_field('section_1_text'); ?></div>
			</div>
			<?php $image1 = get_field('section_1_image'); ?>
			<div id="right-side" style="float:left;width:50%;padding:0;min-height: 500px;background:url(<?php echo $image1['url']; ?>) no-repeat;background-position: top center;background-size:cover;">
			</div>
		</div>
	</section>


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

	<!-- Do the left sidebar check -->
	<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

	<main class="site-main" id="main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'loop-templates/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // end of the loop.
		?>
	</main><!-- #main -->

	<!-- Do the right sidebar check -->
	<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

</div><!-- .row -->
