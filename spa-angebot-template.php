<?php /* Template Name: MVH-Angebot-Spa */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.dig-angebot').flickity({
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

		<div class="row">



<?php if( $detect->isMobile() && !$detect->isTablet() ){ ?>
	<style>
	#angebot-content {width: 90%;margin: 25px auto;background: #ffffff;}
	#content > .row {background: #2c2b39 !important;}
	</style>
<div id="angebot-content">
<h4 class="home-title" style="text-align: center;padding-left:0;">3 - Generationen - Ferien</h4>
<?php $image = get_field('header-bg'); ?>
<img class="" src="https://mvh.yournewwebsite.ch/wp-content/uploads/2019/11/angebot-1.jpg" alt="" />
<p class="body-hometext" style="text-align: center;">Das Aktiv Hotel & Spa Hannigalp verwöhnt seine Gäste bereits in der vierten Generation und das mit Leidenschaft. Sehr viel Liebe zum Detail in allen leger-luxuriösen Zimmern und Bereichen, modernste Trends und charmante Traditionen gehen hier stilvoll Hand in Hand.</p>
<div style="width:100%;height:60px;background:#4089b7;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed">Jetzt buchen</p></div>
</div>

<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main">
<?php echo do_shortcode("[dig_angebot_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"summer\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
<?php echo do_shortcode("[dig_angebot_mob_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"winter\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
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

<?php } ?>
<?php include_once "desktop/spa-angebot.php"; ?>
</div><!-- .row -->
</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
