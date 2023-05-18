<?php /* Template Name: MVH-Gastronomie-detail */ ?>
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
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">

<div class="gastro" style="background:#2c2b39;">
	<?php $image = get_field('image-1'); ?>
	<div class="gastro-cell">
		<?php $image2 = get_field('image-1'); ?>
	<img class="" src="/wp-content/uploads/2023/05/resthan_new2.jpg" alt="" />
	<h2 class="header-title" style="text-align: center;top:20px;color:#ffffff;"><?php the_field('page_title'); ?></h2>
	<div class="slider-subtitle" style="color:#ffffff;text-align:center;padding:20px 0;"><?php the_field('page_subtitle'); ?></div>
	<div class="body-hometext" style="text-align: center;color:#ffffff;padding-bottom:40px;"><?php the_field('intro-text'); ?></div>
	</div>
</div>

<div class="gastro" style="background:#f0f0f0;">
	<h3 class="header-title" style="text-align: center;top:20px;padding:20px 0 40px 0;color:#000000;"><?php the_field('section_1_title'); ?></h3>
	<div class="body-hometext" style="text-align: center;padding-bottom:40px;"><?php the_field('section_1_text'); ?></div>
<a href="<?php the_field('button_1_link'); ?>" target="_blank" class="button-link" style="display:block;text-align:center;margin:0px auto 15px auto!important;"><button class="button_round_red" style="background:#4089b7;"><?php the_field('button_1_text'); ?></button></a>
<a href="<?php the_field('button_2_link'); ?>" target="_blank" class="button-link" style="display:block;text-align:center;margin:15px auto!important;"><button class="button_round_red" style="background:#4089b7;"><?php the_field('button_2_text'); ?></button></a>
<a href="<?php the_field('button_3_link'); ?>" target="_blank" class="button-link" style="display:block;text-align:center;margin:15px auto 50px auto!important;"><button class="button_round_red" style="background:#4089b7;"><?php the_field('button_3_text'); ?></button></a>
<a href="<?php the_field('button_4_link'); ?>" target="_blank" class="button-link" style="display:none;text-align:center;margin:15px auto!important;"><button class="button_round_red" style="background:#4089b7;"><?php the_field('button_4_text'); ?></button></a>
<a href="<?php the_field('button_5_link'); ?>" target="_blank" class="button-link" style="display:none;text-align:center;margin:15px auto!important;"><button class="button_round_red" style="background:#4089b7;"><?php the_field('button_5_text'); ?></button></a>
<a href="<?php the_field('button_6_link'); ?>" target="_blank" class="button-link" style="display:none;text-align:center;margin:15px auto 50px auto!important;"><button class="button_round_red" style="background:#4089b7;"><?php the_field('button_6_text'); ?></button></a>

</div>
<div class="gastro" style="background:#2c2b39;">
	<?php $hotelbarbg = get_field('mid_section_bg'); ?>
	<div class="gastro-cell">
	<img class="" src="<?php echo $hotelbarbg['url']; ?>" alt="" />
	<h3 class="header-title" style="text-align: center;top:20px;"><?php the_field('section_2_title'); ?></h3>
	<div class="slider-subtitle" style="text-align:center;color:#ffffff;padding:20px 0;"><?php the_field('section_2_subtitle'); ?></div>
	<div class="body-hometext" style="text-align: center;color:#ffffff;padding-bottom:40px;"><?php the_field('section_2_text'); ?></div>
	</div>
</div>
<div class="gastro" style="background:#2c2b39;">
	<?php $image5 = get_field('terrace_image'); ?>
	<div class="gastro-cell">
	<img class="" src="<?php echo $image5['url']; ?>" alt="" />
	<h3 class="header-title" style="text-align: center;top:20px;"><?php the_field('terrace_title'); ?></h3>
	<div class="slider-subtitle" style="text-align:center;color:#ffffff;padding:20px 0;"><?php the_field('terrace_subtitle'); ?></div>
	<div class="body-hometext" style="text-align: center;color:#ffffff;padding-bottom:40px;"><?php the_field('terrace_text'); ?></div>
	</div>
</div>
<div class="gastro" style="background:#2c2b39;">
	<?php $image3 = get_field('section_3_image'); ?>
	<div class="gastro-cell">
	<img class="" src="<?php echo $image3['url']; ?>" alt="" />
	<h3 class="header-title" style="text-align: center;top:20px;"><?php the_field('section_3_title'); ?></h3>
	<div class="slider-subtitle" style="text-align:center;color:#ffffff;padding:20px 0;"><?php the_field('section_3_subtitle'); ?></div>
	<div class="body-hometext" style="text-align: center;color:#ffffff;padding-bottom:40px;"><?php the_field('section_3_text'); ?></div>
	</div>
</div>
<div class="gastro" style="background:#2c2b39;">
	<?php $image4 = get_field('section_4_image'); ?>
	<div class="gastro-cell">
	<img class="" src="<?php echo $image4['url']; ?>" alt="" />
	<h3 class="header-title" style="text-align: center;top:20px;"><?php the_field('section_4_title'); ?></h3>
	<div class="slider-subtitle" style="text-align:center;color:#ffffff;padding:20px 0;"><?php the_field('section_4_subtitle'); ?></div>
	<div class="body-hometext" style="text-align: center;color:#ffffff;padding-bottom:40px;"><?php the_field('section_4_text'); ?></div>
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
<?php include_once "desktop/gastro-inside.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
