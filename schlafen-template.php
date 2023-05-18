<?php /* Template Name: MVH-Dogs */ ?>
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
		html{background: #ffffff;}
	}
	</style>
	<div id="section-about-content" style="width:100%;background:#2c2b39;padding-bottom:35px;">
		<h5 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:5px;color:#dc2326;"><?php the_field('title'); ?></h5>
    <h5 class="dig-hotel-block-name" style="margin-left:55px;margin-bottom:10px;"><?php the_field('subtitle'); ?></h5>
		<h5 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:10px;"><?php the_field('subtitle2'); ?></h5>
		<p class="page-body-text" style="margin:0 auto!important;width: 100%;padding-left: 15px;color:#4089b7;"><?php the_field('text'); ?></p>
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
<?php include_once "desktop/schlafen.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
