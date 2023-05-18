<div class="row desktop-version">
<style>
#footbar{display: none;}
@media (min-width: 768px) {
	html{overflow: hidden;background: #f7f7f7;}
	#wrapper-footer-full,#wrapper-navbar{display: none;}
	.zimmerprice_table{width:85%;font-size: 14px;}
	.zimmerprice_table > tbody > tr > td:nth-child(1) {background: #4089b7;color: #FFFF;padding: 5px 15px;}
	.zimmerprice_table td {color: #2c2b39;padding: 5px 15px;}
}
</style>
<?php $image = get_field('main_image'); ?>
<div id="section-about-content" style="width:100%;padding: 0px 155px 55px;position:absolute;bottom:0;">
	<div class="row">
		<div class="col-sm-12">
		<h1 class="section-title" style="margin: 20px auto 50px auto;width: 90%;max-width: 1100px;text-align: center;color:#2c2b39;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Genussbringer Massage & Beauty<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Massage & Beauty<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Massage & Beauté<?php } ?>
		</h1>
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
		 <div style="text-align: center;padding: 20px 20px 0;" class="col-sm-12">
		 <a class="button-zum-invert" style="background:#4089b7;padding: 5px 20px;width:146px;color:#ffffff;" target="_blank" href="<?php the_field('mb_button_link'); ?>"><?php the_field('mb_button_text'); ?></a>
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
