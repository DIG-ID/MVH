<?php
/*
 * Template Name: Post Rooms
 * Template Post Type: post, page, product, rooms
 */

 get_header();  ?>
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
		adaptiveHeight: true,
		wrapAround: true
		});
		$('.dig-slider-mob').flickity({
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
<?php if( $detect->isMobile() || $detect->isTablet() ){ ?>
  <style>
  .single-rooms .header-title, .single-rooms .body-hometext{color:#000000;}
  </style>
  <div style="width:100%;background:#ffffff;padding-top:30px;padding-bottom:0px;">
  		<h3 class="header-title" style="text-align: left;top:0;margin-left:15px;"><?php the_field('room-title'); ?></h3>
  		<p class="header-subtitle" style="text-align: left;margin-bottom:10px!important;"><?php the_field('room-subtitle'); ?></p>
  		<div class="dig-slider-mob">
  				<?php $images4 = get_field('room-gallery'); ?>
  			  <?php foreach( $images4 as $image11 ): ?>
  			    <div class="dig-slider-mob-cell" style="width: 100%;"><img src="<?php echo $image11['url']; ?>" alt="<?php echo $image11['alt']; ?>" /></div>
  				<?php endforeach; ?>
  		</div>
  		<p class="body-hometext" style="text-align: left;padding-top:25px;"><?php the_field('room-text'); ?></p>
      <?php
				$amenities = get_field('amenities');
				if( $amenities ): ?>
				<ul class="amenities-list">
			    <?php foreach( $amenities as $amenity ): ?>
			        <li><?php echo $amenity; ?></li>
			    <?php endforeach; ?>
				</ul>
			<?php endif; ?>
<div style="width:100%;height:60px;background:#4089b7;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed">Jetzt Zimmer</p></div>
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
<?php include_once "desktop/mvhplus.php"; ?>
</div><!-- .row -->
</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
