<?php if( !$detect->isMobile() || $detect->isTablet() ){ ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('.dig-spa').flickity({
		// options
		cellAlign: 'center',
		prevNextButtons: false,
		contain: true,
		imagesLoaded: true,
		wrapAround: true
	});
	$('.dig-angebot-dsk').flickity({
		// options
		cellAlign: 'center',
		prevNextButtons: true,
		draggable: false,
		pageDots: false,
		contain: true,
		imagesLoaded: true,
		adaptiveHeight: true,
		wrapAround: true,
		groupCells: 2
	});
});
</script>
<style>
#section-about-content div:nth-child(3){bottom:40px!important;}
#section-about-content div:nth-child(4){display: none;}
.infra-title{padding: 10px 0 0px 15px;position: absolute;top: 25px;left:20px;color:#ffffff;}
.infra-preview{width: 25%;float: left;position:relative;}
.infra-preview:nth-child(odd) img{padding: 10px 5px 0px 10px;}
.infra-preview:nth-child(even) img{padding: 10px 10px 0px 5px;}
.infra-section{padding: 30px 0;border-top:1px solid #000000;}
.spa-infra-page #angebot-content {width: 90%;margin: 25px auto;background: #ffffff;}
.spa-infra-page #angebot-content .home-title {margin-top: 25px !important;padding: 25px 0!important;width: 94%;}
img.plus-sign{padding: 0!important;position: absolute;left: 35px;bottom:25px;width: 32px;height: 32px;}
#booking-bar{z-index: 99;}
.infra-preview > img{width: 100%;}
</style>
<div id="header-mvh" style="height:calc(70vh - 200px);z-index:1;position: relative;width:100%;background:#2c2b39;">
	<h1 class="section-title" style="margin:110px auto auto auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
	<p class="header-subtitle" style="margin:5px auto 15px auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_subtitle'); ?></p>
	<p class="page-body-text" style="margin:0 auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_body_text'); ?></p>
</div>
<div id="booking-bar">
	<div id="buchenfixed"><div id="sb-container"></div></div>
</div>
<div id="section-about-header" style="width:100%;margin:100px auto 0 auto">
	<h2 class="section-title"><?php the_field('section_1_title'); ?></h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;"><?php the_field('section_1_subtitle'); ?></h6>
</div>
<div id="section-about-content" style="width:90%;max-width:1115px;margin:50px auto 100px auto;background:#f7f7f7;">
	<?php echo do_shortcode("[dig_angebot_list_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"spa\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
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


<?php } ?>
