<?php /*
Template Name: MVH-Spa Infrastructure Detail
Template Post Type: post, spa_infrastructure */ ?>
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
		html{background: #2c2b39;}
	}
	</style>
	<?php $image = get_field('main_image'); ?>
	<figure class="wp-block-image" style="width:100%;margin:0!important;max-height: 400px;"><img class="wp-image-23" style="width:100%;" src="<?php echo $image['url']; ?>" alt="" /></figure>
	<div id="section-about-content" style="width:100%;background:#2c2b39;padding-bottom:35px;">
		<h3 class="section-title" style="margin:25px auto 15px auto;width: 100%;text-align: center;color:#ffffff;"><?php the_field('title'); ?></h3>
		<p class="page-body-text" style="margin:0;color:#ffffff;"><?php the_field('description'); ?></p>
		<?php if( get_field('temperature') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;margin:5px 15px !important;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Temperatur:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Temperature:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>La température:<?php } ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('temperature'); ?></p>
		<?php endif; ?>
		<?php if( get_field('grosse') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;margin:5px 15px !important;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Grösse:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Size:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>La taille:<?php } ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('grosse'); ?></p>
		<?php endif; ?>
		<?php if( get_field('size') ): ?>
		<p class="page-body-text" style="margin:15px auto;width: 90%;color:#4089b7;margin:5px 15px !important;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Luftfeuchtigkeit:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Humidity:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Humidité:<?php } ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('size'); ?></p>
		<?php endif; ?>
		<?php if( get_field('depth') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;margin:5px 15px !important;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Dauer:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Duration:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>La durée:<?php } ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('depth'); ?></p>
		<?php endif; ?>
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
<?php include_once "desktop/spa-inside-detail-dsk.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
