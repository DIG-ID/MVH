<?php /* Template Name: MVH-Gastronomie */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.dig-gastro').flickity({
	  // options
	  cellAlign: 'center',
		prevNextButtons: false,
	  contain: false,
		imagesLoaded: true,
		adaptiveHeight: false,
		wrapAround: true
	});
	$('.dig-slider').flickity({
	// options
	cellAlign: 'left',
	pageDots: false,
	prevNextButtons: true,
	contain: true,
	imagesLoaded: true,
	adaptiveHeight: false,
	wrapAround: true
	});
});
</script>
<style>
.safe-label{display: none;}
.mobile-version .safe-label{width: 200px;position: absolute;top: 40vh;left: 0;right: 0;margin-left: auto;margin-right: auto;}
.mobile-version .safe-label img{width: 90px;margin: 0 5px;}
</style>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">


	<div class="gastro" style="background:#2c2b39;">
		<?php $image = get_field('image-1'); ?>
		<div class="gastro-cell">
			<?php $image2 = get_field('image-1'); ?>
		<img class="" src="<?php echo $image2['url']; ?>" alt="" />
		<div class="safe-label"><img src="/wp-content/uploads/2020/06/ST0065299.png;"><img src="/wp-content/uploads/2022/11/swisstainable.png"></div>
		<h2 class="header-title" style="text-align: center;"><?php the_field('title-1'); ?></h2>
		<div class="slider-subtitle"><?php the_field('subtitle-1'); ?></div>
		<div class="body-hometext" style="text-align: center;"><?php the_field('text-1'); ?></div>
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/gastronomie/restaurant-hannigalp/" class="button-link"><button class="button_round_red" style="background:#4089b7;">Speisen & Getränke<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/gastronomie/restaurant-hannigalp/?lang=en" class="button-link"><button class="button_round_red" style="background:#4089b7;">Drinks and Food<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/gastronomie/restaurant-hannigalp/?lang=fr" class="button-link"><button class="button_round_red" style="background:#4089b7;">Nourriture et boissons<?php } ?>
		</button></a>
		</div>
	</div>
	<div class="gastro" style="background:#2c2b39;padding-bottom:50px;">
		<?php $hotelbarbg = get_field('mid_section_bg'); ?>
		<div class="gastro-cell">
		<img class="" src="<?php echo $hotelbarbg['url']; ?>" alt="" />
		<h2 class="header-title" style="text-align: center;"><?php the_field('mid_section_title'); ?></h2>
		<div class="slider-subtitle"><?php the_field('mid_section_subtitle'); ?></div>
		<div class="body-hometext" style="text-align: center;"><?php the_field('mid_section_text'); ?></div>
		</div>
	</div>
	<div class="gastro" style="background:#2c2b39;">
		<div class="gastro-cell">
			<?php $image3 = get_field('image-2'); ?>
		<img class="" src="<?php echo $image3['url']; ?>" alt="" />
		<h2 class="header-title" style="text-align: center;"><?php the_field('title-2'); ?></h2>
		<div class="body-hometext" style="text-align: center;"><?php the_field('text-2'); ?></div>
		<a href="/wp-content/uploads/2020/02/Wein_und_Getraenkekarte_Winter_2019.pdf" target="_blank" class="button-link"><button class="button_round_red" style="background:#4089b7;"><?php the_field('mid_section_button'); ?></button></a>
		</div>
	</div>


<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main" style="height:0;">
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
<?php include_once "desktop/gastronomie.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
