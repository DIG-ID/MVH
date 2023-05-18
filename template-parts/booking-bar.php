<div id="booking-bar">
	<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=&guests=&in=&out=&coupon=" target="_blank">
		<div class="booking_banner">
			<div class="container">
				<div class="row">
					<div class="col-2 p-0">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/basic/appointment_128.png" width="" height="" alt="" />
					</div>
					<div class="col-10 p-2">
						<span class="booking_text">
							<?php esc_html_e( 'JETZT ONLINE BUCHEN', 'mvh-child' ); ?>
						</span>
						<br>
						<span class="booking_text_sub">
							<?php esc_html_e( 'Wir garantieren den besten Preis!', 'mvh-child' ); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</a>
	<div id="buchenfixed">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?><div id="sb-container"></div><?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?><div id="sb-container-bar-en"></div><?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><div id="sb-container-bar-fr"></div><?php } ?>
	</div>
</div>
