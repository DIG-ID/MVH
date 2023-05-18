<?php /* Template Name: MVH-Uberuns */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.dig-slider').flickity({
	  // options
	  cellAlign: 'center',
		prevNextButtons: false,
	  contain: true,
		imagesLoaded: true,
		adaptiveHeight: true
	});
});
</script>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">

<style>
@media (max-width: 767px) {
	.home-title {color: #ffffff;width: 100%;font-size: 34px;background: #2c2b39;padding: 50px 0 50px 0!important;}
	.wpcf7 input[type=submit] {margin: 0 auto;border: 1px solid #4089b7;background: #4089b7;text-align: center;padding: 5px 20px;width: 96%;margin-left: 2%!important;}
	.wpcf7-form > div:nth-child(2) > span,.wpcf7 textarea{width: 96%!important;margin-bottom:20px!important;margin-left: 2%!important;margin-right: 0!important;}
	.wpcf7-form > div:nth-child(2),.wpcf7-form > p:nth-child(3){float: left;}
	.uber-img{margin-bottom: 15px;}
}
</style>

<h2 class="home-title" style="text-align: center;">
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Anreise<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Arrival<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Arivée<?php } ?>
	</h2>

<h4 class="event-title" style="padding:30px 0 3px 15px;"><?php the_field('intro_title'); ?></h4>
<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field('intro_body_text'); ?></p>
<div>
<?php $image = get_field('section_1_image'); ?>
<img class="uber-img" src="<?php echo $image['url']; ?>" alt="" />
<h7 class="event-title" style="margin-left:15px;max-width:90%;"><?php the_field('section_1_pretitle'); ?></h7>
<h4 class="event-title" style="margin-left:15px;max-width:90%;"><?php the_field('section_1_title'); ?></h4>
<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field('section_1_text'); ?></p>
</div>
<div>
<?php $image = get_field('section_2_image'); ?>
<img class="uber-img" src="<?php echo $image['url']; ?>" alt="" />
<h7 class="event-title" style="margin-left:15px;max-width:90%;"><?php the_field('section_2_pretitle'); ?></h7>
<h4 class="event-title" style="margin-left:15px;max-width:90%;"><?php the_field('section_2_title'); ?></h4>
<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field('section_2_text'); ?></p>
</div>
<div>
<?php $image = get_field('section_3_image'); ?>
<img class="uber-img" src="<?php echo $image['url']; ?>" alt="" />
<h7 class="event-title" style="margin-left:15px;max-width:90%;"><?php the_field('section_3_pretitle'); ?></h7>
<h4 class="event-title" style="margin-left:15px;max-width:90%;"><?php the_field('section_3_title'); ?></h4>
<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field('section_3_text'); ?></p>
</div>
<div class="dig-hotel-block-map" style="width:100%;"><?php
$location = get_field('map');
if( $location ): ?>
  <div class="acf-map" data-zoom="16">
      <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
  </div>
<?php endif; ?>
</div>

<div style="background:#ffffff;padding-top:40px;">
	<h4 class="event-title" style="padding-left:15px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Kontakt<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Contact<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Contactez-nous<?php } ?>
	</h4>
	<h7 class="event-title" style="padding-left:15px;display: inline-block;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Gerne stehen wir Ihnen jederzeit zur Verfügung<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>We are at your disposal at any time<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nous sommes à votre disposition à tout moment<?php } ?>
	</h7>
	<p class="page-body-text">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?><?php echo do_shortcode("[contact-form-7 id=\"1157\" title=\"Feedback\"]"); ?><?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?><?php echo do_shortcode("[contact-form-7 id=\"1605\" title=\"Feedback EN\"]"); ?><?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?><?php echo do_shortcode("[contact-form-7 id=\"1606\" title=\"Feedback FR\"]"); ?><?php } ?>
	</p>
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
<?php include_once "desktop/uberuns.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer();?>
