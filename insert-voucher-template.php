<?php /* Template Name: MVH-Voucher-Template */ ?>
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
	#myIncertIframe{width: 100%;}
@media (max-width: 767px) {
	.uberuns-page .page-info{font-size: 20px!important;}
	.uber-img{margin-bottom: 15px;}
}
</style><!--
<a href="#" class="col-sm link-boxes"><div class="col-sm box-red"><h2 class="box-title"> 
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Insert<br>Voucher<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Insert<br>Voucher<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Insert<br>Voucher<?php } ?>
</h2><p class="box-subtitle"></p></div></a> -->


<script type="text/javascript">
<?php if(ICL_LANGUAGE_CODE=='de'){ ?>var iframe_src = "https://matterhornvalleyhotels.traumgutscheine.com/start.php?gotocat=5&incertframe=new";<?php } ?>
<?php if(ICL_LANGUAGE_CODE=='en'){ ?>var iframe_src = "https://matterhornvalleyhotels.traumgutscheine.com/start.php?gotocat=5&language=en&?incertframe=new";<?php } ?>
<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>var iframe_src = "https://matterhornvalleyhotels.traumgutscheine.com/start.php?gotocat=5&language=fr&?incertframe=new";<?php } ?>

</script>
<script type="text/javascript">
(function(){
var frameContainerID = 'myIncertIframe',
landingPageURL = iframe_src,
trackingCode = 'UA-123456789';
incertIframe(frameContainerID, landingPageURL, trackingCode);
})();
</script>


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

<?php include_once "desktop/insert-voucher.php"; ?>

</div><!-- #content -->
<div id="myIncertIframe2"></div>
</div><!-- #page-wrapper -->

<?php get_footer();?>
