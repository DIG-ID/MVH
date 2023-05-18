<?php 
/**
 *  Template Name: MVH-Solar
 */

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect    = new Mobile_Detect;
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
					.fancybox-slide--iframe .fancybox-content {width: 100%!important;height:100vh!important;max-width: 100%;max-height: 100%;margin:0;}
					.home-title {color: #ffffff;width: 100%;font-size: 34px;background: #2c2b39;padding: 50px 0 50px 0!important;}
					.uber-img{margin-bottom: 15px;}
				}
			</style>

			<h2 class="home-title" style="text-align: center;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Über Uns<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>About Us<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>À propos de nous<?php } ?>
			</h2>
			<h4 class="event-title" style="padding:30px 0 3px 15px;"><?php the_field( 'intro_title' ); ?></h4>
			<p class="page-body-text" style="text-align: left;margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field( 'intro_body_text' ); ?></p>

			<div>
				<?php $image = get_field( 'section_1_image' ); ?>
				<img class="uber-img" src="<?php echo $image['url']; ?>" alt="" />
				<h4 class="event-title" style="margin-left:15px;width:90%;"><?php the_field( 'section_1_title' ); ?></h4>
				<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field( 'section_1_text' ); ?></p>
			</div>

			<div style="display:none;">
				<?php $image = get_field( 'section_2_image' ); ?>
				<img class="uber-img" src="<?php echo $image['url']; ?>" alt="" />
				<h4 class="event-title" style="margin-left:15px;"><?php the_field( 'section_2_title' ); ?></h4>
				<p class="page-body-text" style="margin-left:15px;margin-right:15px;margin-top:15px!important;"><?php the_field( 'section_2_text' ); ?></p>
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

		<?php include_once "desktop/solar.php"; ?>

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
