<?php /* Template Name: MVH-Massage and Beauty */ ?>
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
		.zimmerprice_table{width:85%;font-size: 14px;}
		.zimmerprice_table > tbody > tr > td:nth-child(1) {background: #4089b7;color: #FFFF;padding: 5px 15px;}
		.zimmerprice_table td {color: #2c2b39;padding: 5px 15px;}
		#page-wrapper{padding-top: 0;padding-bottom: 150px;}
		.header-subtitle{margin-bottom: 20px!important;padding-left: 0;}
		.body-hometext{padding: 0!important;}
	}
	</style>
	<?php $image = get_field('main_image'); ?>
	<div id="section-about-content" style="width:100%;padding: 0;bottom:0;">
		<div class="row">
			<div class="col-sm-12">
			<h2 class="section-title" style="margin: 20px auto 50px auto;width: 90%;max-width: 1100px;text-align: center;color:#2c2b39;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Genussbringer Massage & Beauty<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Massage & Beauty<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Massage & Beauté<?php } ?>
			</h2>
						 </div>
	</div>
		<div class="row">
				 <div class="col-sm-6">
					 <div class="dig-angebot-dsk-cell" style="min-height:650px;background:#f0f0f0;margin:10px;padding:0px;">
						 <?php $image_mb1 = get_field('mb_image_left'); ?>
						 <img class="" src="<?php echo $image_mb1['url']; ?>" alt="" />
					 	<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 20px 20px;margin-bottom:0;font-size:28px;background:#f0f0f0;"><?php the_field('mb_title_left'); ?></h5>
					 	<div class="body-hometext" style="padding-left:20px;background:#f0f0f0;">
						<?php	$table = get_field( 'mb_table_left' );
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
								?>
								<br/>
								<p style="color: #9DA1A7;font-size: 14px;width:90%;"><?php the_field('mb_table_left_footer'); ?></p>
						</div>
					 </div></div>
				 <div class="col-sm-6">
					 <div class="dig-angebot-dsk-cell" style="min-height:650px;background:#f0f0f0;margin:10px;padding:0px;">
						 <?php $image_mb2 = get_field('mb_image_right'); ?>
						 <img class="" src="<?php echo $image_mb2['url']; ?>" alt="" />
						<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 20px 20px;margin-bottom:0;font-size:28px;background:#f0f0f0;"><?php the_field('mb_title_right'); ?></h5>
						<div class="body-hometext" style="padding-left:20px;background:#f0f0f0;">
							<?php	$table = get_field( 'mb_table_right' );
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
									?>
									<br/>
									<p style="color: #9DA1A7;font-size: 14px;width:90%;"><?php the_field('mb_table_right_footer'); ?></p>
						</div>
					 </div>
				 </div>
		 </div>
		 <div class="row">
			 <div style="background:#4089b7;text-align: center;padding: 0;" class="col-sm-12">
			 <a class="button-zum-invert" style="padding: 5px 20px;width:146px;color:#ffffff;" target="_blank" href="<?php the_field('mb_button_link'); ?>"><?php the_field('mb_button_text'); ?></a>
							</div>
		</div>
	</div>

<!-- Do the left sidebar check -->



</div><!-- .row -->
<?php include_once "desktop/massagebeauty.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>
