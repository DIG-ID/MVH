<div class="row desktop-version">

<style>
#footbar,#covid-button, #f-button{display: none;}
@media (min-width: 768px) {
	html{background: #f7f7f7;}
	#wrapper-footer-full,#wrapper-navbar{display: none;}
	footer{display: none;}
	section{width: 100%;}
	.logo-header{width: 195px;}
	.header-container{position:absolute;top:0;left: 0;right:0;max-width: 100%;width: 100%;height:100%;display: flex;flex-direction: row;}
	.land-title{font-family: "merriweather", serif;font-weight: 600;font-size: 42px;line-height: 45px;letter-spacing: -0.4px;color:#FEFFEA;text-align: left;}
	.button_round_red-land {border-radius: 65px;background-color: #E50019;position: relative;width: 440px;height: 60px;z-index: 522;color: #ffffff;border:1px solid #E50019;cursor:pointer;font-family:"source-sans-pro";font-size: 16px;letter-spacing: 0;text-transform: uppercase;font-weight: bold;}
	.button_round_red-land2 {border-radius: 65px;background-color: #6384AC;position: relative;width: 440px;height: 60px;z-index: 522;color: #ffffff;border:1px solid #6384AC;cursor:pointer;font-family:"source-sans-pro";font-size: 16px;letter-spacing: 0;text-transform: uppercase;font-weight: bold;}
	.button_round_red-land:focus,.button_round_red-land:active{outline: 0!important;}
	.button_round_red-land2:focus,.button_round_red-land2:active{outline: 0!important;}
	.button-zum-invert:hover .button_round_red-land{background-color: #ffffff;color: #E50019;}
	.button-zum-invert:hover .button_round_red-land2{background-color: #ffffff;color: #6384AC;}
	.read-more-land{font-size:16px;line-height: 32px;letter-spacing: 0;color:#FEFFEA;width: 100%;text-align: center;margin-bottom: 0;}
	.text-bold{font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 600;color:#000000;width: 100%;}
	.text-land{font-family:"source-sans-pro";font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 300;color:#000000;width: 100%;}
	.price-land{font-family: "merriweather", serif;font-size: 32px;line-height: 41px;letter-spacing: 0;font-weight: 600;color:#E50019;width: 100%;margin-bottom: 0;}
	.title-content{font-family: "merriweather", serif;font-size: 23px;line-height: 29px;letter-spacing: 0;font-weight: 600;color:#FFFFFF;width: 100%;}
	.land-title-wrapper{display: flex;align-items: center;padding-left:25px;margin: 40px 0;width: 422px;height: 192px;background: url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/land-bg-dsk.svg');}
	.content-section .container{max-width: 860px;}
	.content-section{padding: 60px 0;}
	#section-4 .text-land{max-width: 310px;}
	#section-4 ul{list-style: circle;}
	.buchen-title{font-family: "merriweather", serif;font-size: 33px;line-height: 34px;font-weight: bold;letter-spacing: 0;text-align: center;margin: 10px auto 30px auto;}
	.name-land{font-family:"source-sans-pro";font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 300;color:#000000;width: 100%;margin-bottom:4px;}
	ul.text-land{padding-left:25px;}
	.img-bottom{width:100%;}
	.lang_mobile{z-index: 999;display: none;}
	.lang_mobile .wpml-ls-legacy-dropdown a{background: transparent!important;font-family: "source-sans-pro", sans-serif;}
	.wpml-ls-sub-menu{border:0!important;}
	.lang_mobile .wpml-ls-item > a > span::before{font-weight: 600;color:#212529;}
	.wpml-ls-legacy-dropdown a.wpml-ls-item-toggle:after{color:#000000;}
	.wpml-ls-legacy-dropdown .wpml-ls-sub-menu a{font-size: 18px!important;}
	.lang_mobile .wpml-ls-legacy-dropdown a.wpml-ls-item-toggle:after{display: none;}
	body:lang(fr) .wpml-ls-legacy-dropdown .wpml-ls-sub-menu a{padding-left: 12px;}
	body:lang(de) .wpml-ls-legacy-dropdown .wpml-ls-sub-menu a{padding-left: 14px;}
}
@media (min-width: 867px) and (max-width:1120px) {
.land-title-wrapper{height: 100px;background-repeat: no-repeat;background-size: contain;margin:30px 0}
.land-title{font-size: 20px;line-height: 24px;}
}
@media (min-width: 768px) and (max-width:865px) {
	.land-title-wrapper{height: 100px;background-repeat: no-repeat;background-size: contain;margin:10px 0}
	.land-title{font-size: 20px;line-height: 24px;}
	.logo-header{width: 140px;}
}
@media (max-width: 880px){
	.content-section .container {max-width: 715px!important;}
}
</style>

<section id="section-about-content" style="width:100%;padding: 0;bottom:0;position:relative;">
	<div class="lang_mobile"><?php do_action('wpml_add_language_selector'); ?></div>
	<div class="header-bg-wrap">
		<img class="header-bg" src="/wp-content/uploads/2021/08/bg_header_Desktop.jpg" style="width:100%;">
	</div>
	<div class="container header-container">
		<div class="row" style="width:50%;align-items: flex-start;">
		</div>
		<div class="row" style="width:50%;flex-direction:column;justify-content: center;align-items: flex-start;padding-left:58px;">
				<img class="logo-header" src="/wp-content/uploads/2020/05/Han_2x_header.png">
				<div class="land-title-wrapper">
					<p class="land-title">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktiver<br>Walliser<br>Berggenuss<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Plaisir<br>actif<br>en valais<?php } ?></p>
				</div>
				<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.80703198.872296194.1629120046-929501200.1581080273#packageNew&pkgId=50585&type=&q&guests=A,A&in=2021-9-10&out=2021-9-12&coupon=" target="_blank" class="button-zum-invert" style="margin-bottom:20px;display:none;"><button class="button_round_red-land" style="width:300px;font-size:20px;">JETZT BUCHEN</button></a>
		</div>
	</div>
</section>

<section id="section-1" class="content-section" style="background-color:#EFEFEF;padding-bottom:0;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="text-bold" style="font-size: 22px;line-height: 33px;max-width:340px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Mountainbike-Fun im Flow-Trail, Aktiv-Wandern mit Tipps vom Ernährungs-Profi, Kneipp-Spass unter freiem Himmel, kulinarische Höhenflüge & himmlische Wellness & Spa-Wohlfühlmomente.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>VTT sur les sentiers alpins, randonnée active avec les conseils d'un professionnel de la nutrition, plaisir du Kneipp en plein air, spécialités culinaires et moments de bien-être paradisiaques au spa !<?php } ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-bold" style="margin-bottom:5px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix :<?php } ?></p>
				<p class="price-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>ab CHF 395 p.P.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>A partir de CHF 395 p.p.<?php } ?></p>
				<p class="text-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>im Doppelzimmer, CHF 50 Aufschlag für Einzelzimmer<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>en chambre double, supplément de 50 CHF pour une chambre individuelle<?php } ?></p>
				<p class="text-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>(Inklusive reichhaltigem Frühstücksbuffet, Nutzung des hannigspa.ch mit einzigem Hallenschwimmbad in Grächen, Whirlpool, Dampfbad und verschiedenen Saunen. Exklusive Nachtessen, Kur- & Erlebnistaxen.)<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>(Comprend un riche petit-déjeuner buffet, l'utilisation de la hannigspa.ch avec la seule piscine couverte de Grächen, un bain à remous, un bain de vapeur et divers saunas. Hors dîner, spa et taxes d'aventure).<?php } ?></p>
			</div>
		</div>
		<div class="row" style="justify-content:center;">
			<img style="margin-bottom:25px;margin-top:15px;" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/arrow-down-black-land.svg"></a>
		</div>
	</div>
</section>

<section id="section-2" class="content-section" style="background-color:#6384AC;padding:50px 0 40px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Termine:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dates :<?php } ?></p>
				<p class="title-content" style="margin-bottom:5px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Freitag 10.09.2021 bis<br>Sonntag 12.09.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vendredi 10.09.2021 jusqu'au<br>Dimanche 12.09.2021<?php } ?></p>
				<p class="text-land" style="margin-bottom:20px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Anmeldung bis 05.09.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Inscription jusqu'au 05.09.2021<?php } ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-bold" style="visibility:hidden;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Termine:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dates :<?php } ?></p>
				<p class="title-content" style="margin-bottom:5px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Freitag 08.10.2021 bis<br>Sonntag 10.10.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vendredi 08.10.2021 jusqu'au<br>Dimanche 10.10.2021<?php } ?></p>
				<p class="text-land" style="margin-bottom:20px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Anmeldung bis 05.10.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Inscription jusqu'au 05.10.2021<?php } ?></p>
			</div>
		</div>
	</div>
</section>

<section id="section-3" class="content-section" style="background-color:#EFEFEF;">
	<div class="container">
		<div class="row" style="justify-content: center;text-align: center;max-width: 460px;margin: 0 auto;">
			<p class="buchen-title">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>JETZT BUCHEN<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVER MAINTENANT<?php } ?></p>
			<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.179620900.1824732861.1631005854-929501200.1581080273#packageNew&pkgId=50586&type=&q&guests=A,A&in=2021-10-8&out=2021-10-10&coupon=" class="button-zum-invert" style="margin:0 auto 30px auto;width:100%;"><button class="button_round_red-land">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Direktbuchung Doppelzimmer<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVATION DIRECTE CHAMBRE DOUBLE<?php } ?></button></a>
			<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.179620900.1824732861.1631005854-929501200.1581080273#packageNew&pkgId=50586&type=&q&guests=A&in=2021-10-8&out=2021-10-10&coupon=" class="button-zum-invert" style="margin:0 auto 26px auto;width:100%;"><button class="button_round_red-land2">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Direktbuchung Einzelzimmer<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVATION DIRECTE CHAMBRE SIMPLE<?php } ?></button></a>

				<video id="flowtrail-video" playsinline="playsinline" width="860" controls style="margin:35px 0 50px 0;">
		      <source src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/SISU_Flowtrial_Graechen_(Trio)_002C_low.mp4" type="video/webm">
		    </video>

			<p class="text-land" style="margin-bottom:0;font-weight:400;text-align:center;max-width:400px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>unter <a href="mailto:info@hannigalp.ch">info@hannigalp.ch</a> oder <a href="mailto:info@nutritionforathletes.ch">info@nutritionforathletes.ch</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>à l'adresse <a href="mailto:info@hannigalp.ch">info@hannigalp.ch</a> ou <a href="mailto:info@nutritionforathletes.ch">info@nutritionforathletes.ch</a><?php } ?></p>
		</div>
	</div>
</section>



<section id="section-4" class="content-section" style="background-color:#FFFFFF;padding-top:80px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row" style="margin-bottom: 60px;min-height:160px;">
					<p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Freitag:<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vendredi :<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>Get together beim Walliser Welcome Wine</li>
						<li>Anschliessend Abend zur individuellen Gestaltung</li>
						<li>(Spa, Dorfrundgang, Nachtessen, etc.)</li><?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>Se retrouver au Vin d'Accueil du Valais</li>
						<li>Soirée libre</li>
						<li>(spa, visite du village, dîner, etc.)</li><?php } ?>
					</ul>
				</div>
				<div class="row">
					<p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Samstag:<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Samedi :<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>Morgendehnen & Streching mit Blick ins Matterhorn Valley</li>
						<li>Wandertour mit Ernährungsinputs von Nadia Leuenberger
						(Dipl. Ernährungsberaterin SVDE)</li>
						<li>Frischluft-Picknick</li>
						<li>Bikefun im neuen Flowtrail von Grächen oder Hannigloop mit dem E-Bike
						(von Anfänger bis Profis)</li>
						<li>Gemüter und Füsse abkühlen beim Kneipp-Spass «Zum See» in Grächen</li>
						<li>Nachtessen à la Carte</li><?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>Étirement matinal avec vue sur la vallée du Cervin.</li>
						<li>Randonnée avec apport nutritionnel de Nadia Leuenberger
						(nutritionniste certifiée SVDE)</li>
						<li>Pique-nique au grand air</li>
						<li>Amusez-vous à vélo sur le nouveau sentier „flow” à Grächen, ou Hannigloop avec l'e-bike
						(des débutants aux pros)</li>
						<li>Rafraîchissez votre esprit et vos pieds à l'espace Kneipp "Zum See" à Grächen.</li>
						<li>Dîner à la carte</li><?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row" style="margin-bottom: 60px;min-height:160px;">
					<p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Sonntag:<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dimanche :<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>Morgendehnen & Streching mit Blick ins Matterhorn Valley</li>
						<li>Individuelle Wanderung oder Biketour/Trottinette-Tour
						(falls gewünscht, gerne auch begleitet)</li><?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>Étirement matinal avec une vue sur la vallée du Cervin.</li>
						<li>Randonnée individuelle ou tour à vélo/scooter
						(accompagné si désiré)</li><?php } ?>
					</ul>
				</div>
				<div class="row">
					<img style="width:100%;" src="/wp-content/uploads/2021/08/img_bottom-2.jpg">
					<p class="name-land" style="margin-top:10px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Nadia Leuenberger - Dipl. Ernährungsberaterin SVDE<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nadia Leuenberger - Nutritionniste certifiée SVDE<?php } ?></p>
					<p class="text-land" style="margin-bottom:0;font-weight:600;max-width:none;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Ernährungsberatung inkl. BIA Messung auf Anfrage.<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Conseils nutritionnels et mesures BIA sur demande.<?php } ?></p>
					<img style="margin-left:-20px;margin-top:10px;" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/Logo_Nurition.jpg">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="section-5" class="content-section" style="background-color:#FFFFFF;padding-bottom:0;padding-top:20px;">
	<div class="container-fluid" style="padding:0;">
		<div class="row" style="justify-content: center;text-align: center;margin: 0 auto;">
			<div class="col-md-4" style="padding:0;">
				<img class="img-bottom" src="/wp-content/uploads/2021/08/b2.jpg">
			</div>
			<div class="col-md-4" style="padding:0;">
				<img class="img-bottom" src="/wp-content/uploads/2021/08/b1.jpg">
			</div>
			<div class="col-md-4" style="padding:0;">
				<img class="img-bottom" src="/wp-content/uploads/2021/08/b3.jpg">
			</div>
		</div>
	</div>
</section>

<section id="section-footer" class="content-section" style="background-color:#EFEFEF;padding-bottom:40px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="logo-footer" style="max-width:200px;" src="/wp-content/uploads/2020/05/Han_2x_header.png">
			</div>
			<div class="col-md-6">
				<div class="col-md-6" style="float: left;">
					<p class="text-land" style="font-weight:600;line-height:27px;">
						Aktiv Hotel & Spa Hannigalp<br>
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Familie Andenmatten<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Famille Andenmatten<?php } ?><br>
						Heimine 468<br>
						CH-3925 Grächen
					</p>
				</div>
				<div class="col-md-6" style="float: left;">
					<p class="text-land" style="font-weight:600;line-height:27px;">
						T. +41 27 955 10 00<br>
						<a href="mailto:info@hannigalp.ch">info@hannigalp.ch</a><br>
						<a href="https://hannigalp.ch/" target="_blank">hannigalp.ch</a><br>
						<a href="https://hannigspa.ch/" target="_blank">hannigspa.ch</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
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
