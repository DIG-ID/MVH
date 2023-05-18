<div class="row desktop-version">
<script type="text/javascript">
jQuery(document).ready(function($) {
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
@media (min-width: 768px) {
/* ---- previous/next buttons ---- */
.flickity-prev-next-button {position: absolute;top: 50%;width: 60px;height: 60px;border: none;border-radius: 50%;background: white;/* vertically center */
  -webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);transform: translateY(-50%);}
.flickity-prev-next-button.previous { left: 10px; }
.flickity-prev-next-button.next { right: 10px; }
.flickity-prev-next-button svg {position: absolute;left: 20%;top: 20%;width: 60%;height: 60%;}
.flickity-prev-next-button .arrow {fill: #333;}
/* IE8 and Android 2.3 */
.flickity-prev-next-button.no-svg {color: #333;font-size: 30px;}
.dig-angebot-dsk .flickity-prev-next-button.next {right: -50px;background: none;}
.dig-angebot-dsk .flickity-prev-next-button.previous {left: -50px;background: none;}
#header-mvh.realheader:after{content: "";position: absolute;top: 0;left: 0;width: 100%;height: 100%;opacity: .95;z-index: -1;background: #2c2b39;}
.single-rooms .nav-tabs .nav-link.active{border-color: #fff #fff #c5a47e;border-bottom:2px solid #c5a47e;}
.single-rooms .header-title, .single-rooms .body-hometext{color:#000000;}
.single-rooms .sb__footer-actions{display: none;}
.single-rooms #sb-container .sb input,.single-rooms #sb-container-bar-en .sb input,.single-rooms #sb-container-bar-fr .sb input{height: auto;margin:15px auto!important;width: 180px;font-size: 16px!important;}
.single-rooms #amenities_icons_container{overflow: hidden;}
.single-rooms .icons_display {padding: 0 0 10px;width: 33%;float:left;}
.single-rooms .amenity-title{line-height: 22px;padding: 12px 0px 0 55px;color: #9DA1A7;font-size: 14px;display: block;}
.single-rooms [class^="icon-"],.hotels-page [class*=" icon-"] {float:left;background: #F7F7F8;border: 1px solid #F7F7F8;border-radius: 31px;padding: 3px;}
.single-rooms [class^="icon-"]:before,.hotels-page [class*=" icon-"]:before {color: #B3BDC2;}
.single-rooms .tab-content > .tab-pane{margin-top: 40px;margin-bottom: 50px;}
.single-rooms .nav-item > .nav-link{text-transform: uppercase;}
.single-rooms .sb__form-field-label{margin-top: 10px;}
.single-rooms .zimmerprice_table{width:75%;font-size: 14px;}
.single-rooms th {background: #4089b7;color: #FFFF;padding: 5px 15px;}
.single-rooms td {color: #2c2b39;padding: 5px 15px;}
#sb-container,#sb-container-bar-en,#sb-container-bar-fr{background: #ffffff;}
#sb-container_sb__form-field--checkin, #sb-container_sb__form-field--checkout,
#sb-container-bar-en_sb__form-field--checkin, #sb-container-bar-en_sb__form-field--checkout,
#sb-container-bar-fr_sb__form-field--checkin, #sb-container-bar-fr_sb__form-field--checkout{width: 100%!important;}
.sb__form-field-label, .sb__form-field-icon, .sb__footer{display: block!important;}
#sb-container .sb-custom-field-bg-color,#sb-container-bar-en .sb-custom-field-bg-color,#sb-container-bar-fr .sb-custom-field-bg-color{padding: 15px!important;height: 50px!important;}
.sb__form-field-label, .sb__form-field-icon, .sb__footer{padding: 5px 15px;color:#000;font-weight: bold;}
}
@media(min-width:767px) and (max-width:1200px){
	.single-rooms .desktop-version .icons_display{width: auto!important;}
	.dig-angebot-dsk .flickity-prev-next-button.previous{left:20px;}
	.dig-angebot-dsk .flickity-prev-next-button.next{right:20px;}
	#home-title-section{margin-left: 0;margin-right: 0;}
	.dig-angebot-dsk-cell{width: 45%!important;}
	.dig-hotel-block-tabs{width: 100%!important;}
	.buchen-box{width: 50%!important;margin-top:60px;}
  .section1{display: block!important;}
}
</style>
<div id="header-mvh" class="realheader" style="height:470px;z-index:1;position: relative;width:100%;background:url(/wp-content/uploads/2020/05/rooms_header.jpg) no-repeat;background-size:cover;">
  <h1 class="section-title" style="margin:150px auto 0px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('room-title'); ?></h1>
  <h2 class="header-subtitle" style="margin:5px auto 15px auto;width: 90%;max-width: 1100px;text-align: center;color:#ffffff;font-size:20px;"><?php the_field('room-subtitle'); ?></h2>
</div>
<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">

<div style="width:100%;background:#ffffff;padding-top:10px;padding-bottom:0px;">
	<div class="dig-slider">
		<?php $images4 = get_field('room-gallery'); ?>
		<?php foreach( $images4 as $image11 ): ?>
			<div class="dig-slider-cell" style="width: 660px;margin-right:10px;"><img src="<?php echo $image11['url']; ?>" alt="<?php echo $image11['alt']; ?>" /></div>
		<?php endforeach; ?>
	</div>
</div>
<div class="section1" style="width:100%;background:#ffffff;padding-top:50px;padding-bottom:0px;text-align:center;display: flex;justify-content: center;">
	<div class="dig-hotel-block-tabs" style="text-align: left;width:800px;padding: 0px 30px 0 0;">
		<ul class="nav nav-tabs" id="myTabdsk" role="tablist">
		  <li class="nav-item"><a class="nav-link active" id="about-tab" data-toggle="tab" href="#aboutdsk" role="tab" aria-controls="about" aria-selected="true">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Beschreibung<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Description<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Description<?php } ?>
				</a></li>
		  <li class="nav-item"><a class="nav-link" id="rooms-tab" data-toggle="tab" href="#roomsdsk" role="tab" aria-controls="rooms" aria-selected="false">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zusatzleistungen<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Additional services<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Services complémentaires<?php } ?>
			</a></li>
		  <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviewsdsk" role="tab" aria-controls="reviews" aria-selected="false">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Bewertungen<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Reviews<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Critiques<?php } ?>
				</a></li>
			<li style="display:none;" class="nav-item"><a class="nav-link" id="rates-tab" data-toggle="tab" href="#ratesdsk" role="tab" aria-controls="rates" aria-selected="false">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zimmerpreise<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Room prices<?php } ?>
		    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix ​​des chambres<?php } ?>
			</a></li>
		</ul>
		<div class="tab-content" id="myTabContentdsk">
		  <div class="tab-pane fade show active" id="aboutdsk" role="tabpanel" aria-labelledby="about-tab" style="padding-right:20%;"><?php the_field('room-text'); ?>
				<br>
				<p class="header-subtitle" style="margin:30px auto;width: 100%;text-align: left;text-transform:uppercase;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Ausstattung<?php } ?>
			    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Amenities<?php } ?>
			    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Agréments<?php } ?>
				</p>
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
			</div>
		  <div class="tab-pane fade" id="roomsdsk" role="tabpanel" aria-labelledby="rooms-tab"><?php the_field('rooms_section'); ?><?php the_field('zusazt'); ?></div>
		  <div class="tab-pane fade" id="reviewsdsk" role="tabpanel" aria-labelledby="reviews-tab">
			<?php the_field('bewertungen'); ?>
			</div>
			<div class="tab-pane fade" id="ratesdsk" role="tabpanel" aria-labelledby="rates-tab">
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
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" data-fancybox data-type="iframe" data-src="/konditionen/<?php the_field('self_slug'); ?>/" href="javascript:;">Konditionen von A bis Z</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" data-fancybox data-type="iframe" data-src="/konditionen/<?php the_field('self_slug'); ?>/?lang=en" href="javascript:;">Conditions from A to Z</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" data-fancybox data-type="iframe" data-src="/konditionen/<?php the_field('self_slug'); ?>/?lang=fr" href="javascript:;">Conditions de A à Z</a><?php } ?>

			</div>
		</div>
		<div class="left-side" style="float:left;width:100%;">

		</div>
	</div>
	<div class="buchen-box" style="display: inline-block;text-align: left;width:300px;max-height: 490px;padding:20px;background:#2c2b39;margin-top:43px;">
		<div><h4 style="color:#ffffff;margin:15px 0 25px 0;text-align:center;"><?php the_field('price'); ?></h4></div>
		<div style="width:100%;height:40px;background:#4089b7;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed" style="padding:8px 0;margin-bottom:0;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Buchung<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Booking<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservation<?php } ?>
		</p></div>
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?><div id="sb-container"></div><?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='en'){ ?><div id="sb-container-bar-en"></div><?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?><div id="sb-container-bar-fr"></div><?php } ?>
	</div>
</div>
<div style="clear:both;width:100%;background:#ffffff;padding-top:30px;padding-bottom:0px;text-align:center;">
</div>
</section>
<div id="header-mvh" style="padding: 50px 0;width:100%;background:#2c2b39;text-align:center;">
	<img src="/wp-content/themes/understrap-child/assets/imgs/basic/wifi.png" />
  <h4 class="section-title" style="margin:15px auto 15px auto;max-width: 1100px;width: 90%;text-align: center;color:#ffffff;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Direkt buchen & sparen<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book directly & save money<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez directement et économisez<?php } ?></h4>
  <p class="page-body-text" style="margin:0 auto;max-width: 1100px;width: 90%;text-align: center;color:#898989;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Upgrade nach Verfügbarkeit<br>5 % Direktbucherrabatt<br>Exklusive Angebote<br>Exklusive Zimmerkategorien<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Upgrade according to availability<br>5 % direct booking discount<br>Exclusive offers<br>Exclusive room categories<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Upgrade en fonction de la disponibilité<br>5 % de réduction sur les réservations directes<br>Offres exclusives<br>Catégories de chambres exclusives<?php } ?>
	</p>
</div>
<div id="section-about-header" style="width:100%;margin:100px auto 0 auto">
	<h2 class="section-title">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Angebote<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Offers<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Offres<?php } ?></h2>
	<h6 class="header-subtitle" style="text-align:center;margin-top:20px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Traumhafte Familienferien<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Fantastic family vacation<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vacances en famille fantastiques<?php } ?>
	</h6>
</div>
<div id="section-about-content" style="width:1115px;margin:50px auto 100px auto;background:#f7f7f7;">
	<?php echo do_shortcode("[dig_angebot_general_overview_shortcode post-type=\"angebot\" tax-name=\"ange_tax\" terms=\"angebot\" angebot_title=\"angebot_title\" angebot_text=\"angebot_text\" preis=\"preis\"]"); ?>
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
