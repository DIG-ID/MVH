<?php /* Template Name: MVH-AGB */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">

	<style>
	@media (max-width: 767px) {
		body > .site > .wrapper > #content > .row{background: #ffffff;}
		.dig-hotel-block-name, .dig-hotel-block-subtitle{background: #ffffff;}
	}
	</style>

	<div id="section-about-header" style="width:100%;margin:80px auto 0 auto">
		<h2 class="section-title"><?php single_post_title(); ?></h2>
	</div>
	<div id="section-about-content" style="width:100%;background:#ffffff;padding:80px 0 100px 0;max-width:1115px;margin:0 auto;">
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
			<h5 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:5px;color:#4089b7;"><?php the_sub_field('title'); ?></h5>
			<p class="page-body-text" style="margin:0 auto!important;width: 100%;padding-left: 15px;padding-bottom:30px;"><?php the_sub_field('text'); ?></p>
		<?php	endwhile;	endif; ?>
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
<?php include_once "desktop/agb.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
