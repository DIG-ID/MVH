<?php /* Template Name: MVH-Konditionen Zimmer */ ?>
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
		html{background: #f7f7f7;}
		#wrapper-footer-full,#wrapper-navbar{display: none;}
		#page-wrapper{padding-top: 0;padding-bottom: 50px;}
		.header-subtitle{margin-bottom: 20px!important;padding-left: 0;}
	}
	</style>
	<?php $image = get_field('main_image'); ?>
	<div id="section-about-content" style="width:100%;padding: 0;bottom:0;">
		<div class="row">
			<div class="col-sm-12">
			<h2 class="section-title" style="margin: 20px auto 20px auto;width: 90%;max-width: 1100px;text-align: center;color:#2c2b39;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Konditionen<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Conditions<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les conditions<?php } ?></h2>
				 <h3 style="background: #4089b7;color: #FFFFFF;padding: 15px;	margin-bottom: 20px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Und so gehts...<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>How it works...<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Comment ça fonctionne...<?php } ?>
				</h3></div>
	</div>
		<div class="row">
				 <div class="col-sm-6">
					 <?php if( have_rows('left_column') ):
			 			while ( have_rows('left_column') ) : the_row(); ?>
			 				<h6 class="header-subtitle"><?php the_sub_field('title'); ?></h6 class="header-subtitle">
			 				<p class="bodytext"><?php the_sub_field('text'); ?></p>
			 		<?php endwhile; endif; ?>
				</div>
				 <div class="col-sm-6">
					 <?php if( have_rows('right_column') ):
			 			while ( have_rows('right_column') ) : the_row(); ?>
			 				<h6 class="header-subtitle"><?php the_sub_field('title'); ?></h6 class="header-subtitle">
			 				<p class="bodytext"><?php the_sub_field('text'); ?></p>
			 		<?php endwhile; endif; ?>
					<ul>
						<li><a href="https://www.jetair.be/nl/hotel/zwitserland/wallis/hotel-hannigalp-80261" target="_blank" class="external-link-new-window">Jet Air</a></li>
						<li><a href="https://www.eurotours.at/" target="_blank" class="external-link-new-window">Eurotours</a></li>
						<li><a href="https://www.alltours.de/" target="_blank" class="external-link-new-window">Alltours</a></li>
					</ul>
				</div>
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
<?php include_once "desktop/konditionen.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
