<?php /* Template Name: MVH-Mvhplus */ ?>
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
<style>
@media(max-width:767px){
	.mvhplus-date{display: inline-block;vertical-align: top;}
}
</style>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">
			<!-- wp:heading {"align":"center","className":"home-title"} -->
			<a href="#aktivitaten" style="margin:0px 15px 15px 15px;" class="col-sm link-boxes-violet"><div class="col-sm box-red">
				<h2 class="box-title"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten+<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Activities+<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les activités+<?php } ?></h2>
				<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
				</div>
			</a>
			<a href="#spaaround" style="margin:0px 15px 15px 15px;" class="col-sm link-boxes-red"><div class="col-sm box-red">
				<h2 class="box-title">Spa Around+</h2>
				<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
				</div>
			</a>
			<a href="#dinearound" style="margin:0px 15px 15px 15px;" class="col-sm link-boxes-violet"><div class="col-sm box-red">
				<h2 class="box-title">
					Dine Around+
					</h2>
				<img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
				</div>
			</a>
<!-- /wp:heading -->

<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main">

	<h4 id="aktivitaten" class="event-title" style="text-align: center;margin:0px;padding: 50px 0;background:#f0f0f0;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;font-weight:bold;"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten+<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Activities+<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les activités+<?php } ?></h4>
	<?php echo do_shortcode("[dig_mvhplus_mob_overview_shortcode post-type=\"mvhplus\" tax-name=\"mvhplus_tax\" terms=\"aktivitaten\" ange-availability=\"ange-availability\" ange-image=\"ange-image\" ange-title=\"ange-title\" ange-text=\"ange-text\" ange-date=\"ange-date\" ange_auf=\"ange_auf\"]"); ?>


	<h4 id="spaaround" class="event-title" style="text-align: center;margin:0px;padding: 50px 0;background:#f0f0f0;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;font-weight:bold;">Spa Around+</h4>
	<?php echo do_shortcode("[dig_mvhplus_mob_overview_shortcode post-type=\"mvhplus\" tax-name=\"mvhplus_tax\" terms=\"spaaround\" ange-availability=\"ange-availability\" ange-image=\"ange-image\" ange-title=\"ange-title\" ange-text=\"ange-text\" ange-date=\"ange-date\" ange_auf=\"ange_auf\"]"); ?>

	<h4 id="dinearound" class="event-title" style="text-align: center;margin:0px;padding: 50px 0;background:#f0f0f0;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;font-weight:bold;">
		Dine Around+
		</h4>
	<?php echo do_shortcode("[dig_mvhplus_mob_overview_shortcode post-type=\"mvhplus\" tax-name=\"mvhplus_tax\" terms=\"dinearound\" ange-availability=\"ange-availability\" ange-image=\"ange-image\" ange-title=\"ange-title\" ange-text=\"ange-text\" ange-date=\"ange-date\" ange_auf=\"ange_auf\"]"); ?>

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
<?php include_once "desktop/mvhplus.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
