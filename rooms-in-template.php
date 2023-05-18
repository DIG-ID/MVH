<?php /*
Template Name: Rooms
Template Post Type: post, rooms
*/ ?>
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
	  cellAlign: 'left',
    pageDots: false,
		prevNextButtons: true,
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

		<div class="row mobile-version">
  <style>
	@media (max-width: 767px) {
  .single-rooms .header-title, .single-rooms .body-hometext{color:#000000;}
	.dig-hotel-block-tabs .nav-item{width: 100%;background: #f0f0f0;}
	.single-rooms .nav-item > .nav-link{text-transform: uppercase;color:#000000;}
	.single-rooms .nav-tabs .nav-link.active{border-color: #fff #fff #c5a47e;border-bottom:2px solid #c5a47e;}
	.tab-content{background:#f0f0f0;}
	.single-rooms .sb__form-field-label{margin-top: 10px;}
	.single-rooms .zimmerprice_table{width:75%;font-size: 14px;}
	.single-rooms th {background: #4089b7;color: #FFFF;padding: 5px 15px;}
	.single-rooms td {color: #2c2b39;padding: 5px 15px;}
	.single-rooms .icons_display {padding: 0 15px 15px;float:left;}
	.single-rooms .amenity-title{display: none;}
	.single-rooms [class^="icon-"],.hotels-page [class*=" icon-"] {float:left;background: #F7F7F8;border: 1px solid #F7F7F8;border-radius: 31px;padding: 3px;}
	.single-rooms [class^="icon-"]:before,.hotels-page [class*=" icon-"]:before {color: #B3BDC2;}
	.dig-hotel-block-tabs .tab-pane{background: #ffffff;}
	}
  </style>
  <div style="width:100%;background:#ffffff;padding-top:30px;padding-bottom:0px;">
  		<h3 class="header-title" style="text-align: left;top:0;margin-left:15px;"><?php the_field('room-title'); ?></h3>
  		<p class="header-subtitle" style="text-align: left;margin-bottom:30px!important;"><?php the_field('room-subtitle'); ?></p>
  		<div class="dig-slider-mob">
  				<?php $images4 = get_field('room-gallery'); ?>
  			  <?php foreach( $images4 as $image11 ): ?>
  			    <div class="dig-slider-mob-cell" style="width: 100%;"><img src="<?php echo $image11['url']; ?>" alt="<?php echo $image11['alt']; ?>" /></div>
  				<?php endforeach; ?>
  		</div>
  		<p class="body-hometext" style="text-align: left;padding-top:50px;padding-bottom:30px;"><?php the_field('room-text'); ?></p>
			<div id="amenities_icons_container">
				<?php
				while( have_rows('ameneties') ): the_row();
				 $icon = get_sub_field('amenity_icons');
				 $amenity_title = get_sub_field('amenity_title');
				 ?>
				 <div class="icons_display">
						 <span class="<?php echo $icon; ?>"></span>
						 <span class="amenity-title amenity-title-<?php echo $icon; ?>"><?php echo $amenity_title; ?></span>
				 </div>
				<?php endwhile;	?>
			</div>
<div style="clear:both;width:100%;height:60px;background:#4089b7;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed"></p></div>
  </div>
	<div class="dig-hotel-block-tabs" style="text-align: left;width:800px;padding: 0;">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item"><a class="nav-link active" id="rooms-tab" data-toggle="tab" href="#rooms" role="tab" aria-controls="rooms" aria-selected="false">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zusatzleistungen<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Additional services<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Services complémentaires<?php } ?>
			</a></li>
			<li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Bewertungen<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Reviews<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Critiques<?php } ?>
			</a></li>
			<li style="display:none;" class="nav-item"><a class="nav-link" id="rates-tab" data-toggle="tab" href="#rates" role="tab" aria-controls="rates" aria-selected="false">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zimmerpreise<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Room prices<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix ​​des chambres<?php } ?>
			</a></li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="rooms" role="tabpanel" aria-labelledby="rooms-tab"><?php the_field('rooms_section'); ?><?php the_field('zusazt'); ?></div>
			<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab"><?php the_field('bewertungen'); ?></div>
			<div class="tab-pane fade" id="rates" role="tabpanel" aria-labelledby="rates-tab">
				<p class="header-subtitle" style="margin:30px auto;width: 100%;text-align: left;text-transform:uppercase;"><?php the_field('zimmerpreise_title'); ?></p>
				<p style="font-size: 14px;"><?php the_field('zimmerpreise_subtitle'); ?></p>
				<?php
				$table = get_field( 'zimmerpreise_table' );
					if ( ! empty ( $table ) ) {
					    echo '<table border="1" bordercolor="#2c2b39" class="zimmerprice_table">';
					        if ( ! empty( $table['caption'] ) ) {
					            echo '<caption>' . $table['caption'] . '</caption>';
					        }
					        if ( ! empty( $table['header'] ) ) {
					            echo '<thead>';
					                echo '<tr>';
					                    foreach ( $table['header'] as $th ) {
					                        echo '<th>';
					                            echo $th['c'];
					                        echo '</th>';
					                    }
					                echo '</tr>';
					            echo '</thead>';
					        }
					        echo '<tbody>';
					            foreach ( $table['body'] as $tr ) {
					                echo '<tr>';
					                    foreach ( $tr as $td ) {
					                        echo '<td>';
					                            echo $td['c'];
					                        echo '</td>';
					                    }
					                echo '</tr>';
					            }
					        echo '</tbody>';
					    echo '</table>';
					}
					?><br>
				<p style="color: #9DA1A7;font-size: 14px;"><?php the_field('zimmerpreise_table_footer'); ?></p>
				<p class="header-subtitle" style="margin:30px auto;width: 100%;text-align: left;text-transform:uppercase;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Saisondaten<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Seasonal dates<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dates saisonnières<?php } ?>
				</p>
				<p style="font-size: 14px;"><?php the_field('zimmerpreise_saisondaten'); ?></p>
				<br>
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" href="/konditionen/<?php the_field('self_slug'); ?>/">Konditionen von A bis Z</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" href="/konditionen/<?php the_field('self_slug'); ?>/?lang=en">Conditions from A to Z</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" href="/konditionen/<?php the_field('self_slug'); ?>/?lang=fr">Conditions de A à Z</a><?php } ?>

			</div>
		</div>
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


</div><!-- .row -->
<?php include_once "desktop/rooms-in.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
