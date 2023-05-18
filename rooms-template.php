<?php /* Template Name: MVH-ROOMS */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.dig-hotel-block-slider').flickity({
	  // options
	  cellAlign: 'center',
		prevNextButtons: false,
	  contain: true,
		imagesLoaded: true,
		adaptiveHeight: true,
		wrapAround: true
	});
});
</script>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">
<style>
#f-button{display: none;}
@media (max-width: 767px) {
    .safe-label{max-width: 360px;position: relative;margin-bottom: 20px;margin-left: auto;margin-right: auto;}
    .safe-label img{max-width: 100px;margin: 0 10px;}
	body > .site > .wrapper > #content > .row{background:#2c2b39;}
	.site-main{height: 100%;}
	#rooms-wrapper{background: #2c2b39;/*height:100%;*/}
	.room-prev{clear: both;border-bottom: 1px solid #f0f0f0;}
	.room-left{float:left;padding: 0px;width: 100%!important;position: relative;min-height: 240px;background-size: cover!important;background-position:center!important;}
	.room-right{float: right;color: #ffffff;padding: 20px 0 0px 0;width: 100%!important;}
	.room-title-prev{padding: 0;margin:0;padding-left: 15px;padding-bottom:0px;}
	#amenities_icons_container{padding-left: 12px;padding-top: 10px;}
	[class^="icon-"], [class*=" icon-"]{font-size: 30px!important;}
	.room-subtitle-prev{opacity:0.8;display: none;}
	.amenities-list{padding-left: 0px;margin: 0;opacity:0.6;font-size: 14px;}
	.buchen-title{text-align: center;text-transform: uppercase;width: 80%;margin:0 auto;display: block;padding-bottom: 15px;}
	.buchen-text{text-align: center;width: 80%;margin:0 auto;display: block;}
	.rooms-page #angebot-content {width: 90%;margin: 25px auto;background: #ffffff;}
	.rooms-page #angebot-content .home-title {margin-top: 25px !important;padding: 25px 0!important;width: 94%;}
	.rooms-page .swiper-button-next{display: none;}
	.rooms-page .icons_display{width: 40px;float: left;}
	.swiper-button-next:before{
	content: "\003E "!important;
	font-size: 30px;height: 30px;width: 15px;
	color: #4089b7;float: right;margin-top: -25%;margin-right: 10px;
	display: block;z-index: 2;text-align: right;position: static;
	}
}
</style>
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
<div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065300.png"><img src="/wp-content/uploads/2022/11/swisstainable.png"><img src="/wp-content/uploads/2022/11/fd.png"></div>
<main class="site-main" id="main">
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room6\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room1\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room2\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room3\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room7\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room8\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room4\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room5\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room9\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room10\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room11\"]"); ?>
	<?php echo do_shortcode("[dig_rooms_mob_overview_shortcode post-type=\"rooms\" tax-name=\"rooms_tax\" terms=\"room12\"]"); ?>
</main>
</div>
<div class="col-12 content-area" style="padding:35px 0 25px 0;background:#f0f0f0;">
	<h5 class="buchen-title"><?php the_field('buchen-field'); ?></h5>
	<p class="buchen-text"><?php the_field('buchen-text'); ?></p>
</div>
<div id="angebot-wrapper" style="background:#2c2b39;">
	<div id="angebot-content">
	<h4 class="home-title" style="text-align: center;"><?php the_field('angebot_title'); ?></h4>
	<?php $image = get_field('header-bg'); ?>
	<?php $image_ange1 = get_field('angebot_image'); ?>
	<img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
	<p class="body-hometext" style="text-align: center;padding-top:20px;"><?php the_field('angebot_text'); ?></p>
	<a href="/angebote/" style="width:100%;height:60px;margin:5px 0 0;text-align:center;"><p class="pfixed" style="background:#4089b7;color:#ffffff;padding-bottom:15px;"><?php the_field('angebot_button'); ?></p></a>
	</div>
</div>
<!-- wp:heading {"align":"center","className":"home-title"} -->
<!-- /wp:heading -->
</div><!-- .row -->
<?php include_once "desktop/rooms.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
