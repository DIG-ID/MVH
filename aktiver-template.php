<?php /* Template Name: MVH-aktiver-bergenuss */ ?>
<?php

defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$detect = new Mobile_Detect;
?>
<script type="text/javascript">

</script>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mobile-version">

	<style>
	@import url("https://use.typekit.net/hly8kbl.css");
	@media (max-width: 767px) {
		html{background: #f7f7f7;}
		footer{display: none;}
		section{width: 100%;}
		#wrapper-footer-full,#wrapper-navbar, #covid-button, #f-button{display: none;}
		#page-wrapper{padding-top: 0;padding-bottom: 0px;}
		.header-subtitle{margin-bottom: 20px!important;padding-left: 0;}
		.logo-header{display: block;margin: 0 auto;width: 185px;margin-bottom: 36px;}
		.header-bg{width: 100%;}
		.header-bg-wrap{position: relative;}
		.header-container{position:absolute;top:0;left: 0;right:0;max-width: 420px;width: 100%;padding-top: 30px;height:100%;display: flex;flex-direction: column;}
		.header-bg-wrap::before{content:"";width: 100%;height:40%;position: absolute;top: 0;left:0;background: linear-gradient(180deg, rgba(99,132,172,1) 32%, rgba(99,132,172,0) 100%);}
		.header-bg-wrap::after{content:"";width: 100%;height:32%;position: absolute;bottom: 0;left:0;background: linear-gradient(0deg, rgba(0,0,0,0.783333401720063) 32%, rgba(0,0,0,0) 100%);}
		.land-title{font-family: "merriweather", serif;font-weight: 600;font-size: 32px;line-height: 34px;letter-spacing: 0;color:#FEFFEA;text-align: center;width:100%;}
		.button_round_red-land {border-radius: 65px;background-color: #E50019;position: relative;width: 300px;height: 60px;z-index: 522;color: #ffffff;border:0;cursor:pointer;font-family:"source-sans-pro";font-size: 16px;letter-spacing: 0;text-transform: uppercase;font-weight: bold;}
		.read-more-land{font-size:16px;line-height: 32px;letter-spacing: 0;color:#FEFFEA;width: 100%;text-align: center;margin-bottom: 0;}
		.text-bold{font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 600;color:#000000;width: 100%;}
		.text-land{font-family:"source-sans-pro";font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 300;color:#000000;width: 100%;}
		.price-land{font-family: "merriweather", serif;font-size: 26px;line-height: 41px;letter-spacing: 0;font-weight: 600;color:#E50019;width: 100%;margin-bottom: 0;}
		.title-content{font-family: "merriweather", serif;font-size: 23px;line-height: 29px;letter-spacing: 0;font-weight: 600;color:#FFFFFF;width: 100%;}
		.content-section{padding: 30px 10px;}
		#booking-sticky{display: none;position:fixed;bottom: 25px;left: 50%;transform: translateX(-50%);z-index: 999;}
		#section-4 ul{list-style: circle;}
		.buchen-title{font-family: "merriweather", serif;font-size: 33px;line-height: 34px;font-weight: bold;letter-spacing: 0;text-align: center;margin: 10px auto 30px auto;}
		.name-land{font-family:"source-sans-pro";font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 300;color:#000000;width: 100%;margin-bottom:4px;}
		ul.text-land{padding-left:25px;}
		.lang_mobile{z-index: 999;display: none;}
		.lang_mobile .wpml-ls-legacy-dropdown a{background: transparent!important;font-family: "source-sans-pro", sans-serif;}
		.wpml-ls-sub-menu{border:0!important;}
		.lang_mobile .wpml-ls-item-fr > a span::before{}
		.lang_mobile .wpml-ls-legacy-dropdown a.wpml-ls-item-toggle:after{display: none;}
		.wpml-ls-legacy-dropdown a.wpml-ls-item-toggle:after{color:#000000;}
		body:lang(fr) .wpml-ls-legacy-dropdown .wpml-ls-sub-menu a{padding-left: 11px;}
		body:lang(de) .wpml-ls-legacy-dropdown .wpml-ls-sub-menu a{padding-left: 13px;}
	}
	</style>

	<section id="section-about-content" style="width:100%;padding: 0;bottom:0;position:relative;">
		<div class="lang_mobile"><?php do_action('wpml_add_language_selector'); ?></div>
		<div class="header-bg-wrap">
			<img class="header-bg" src="/wp-content/uploads/2021/08/bg_header.jpg">
		</div>
		<div class="container header-container">
			<div class="row" style="height:30%;align-items: flex-start;">
				<img class="logo-header" src="/wp-content/uploads/2020/05/Han_2x_header.png">
				<p class="land-title" style="margin:0 auto;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktiver Walliser Berggenuss<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Plaisir actif<br>en valais<?php } ?></p>
			</div>
			<div class="row" style="justify-content:center;height:70%;align-items: flex-end;align-content: flex-end;">
				<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.80703198.872296194.1629120046-929501200.1581080273#packageNew&pkgId=50585&type=&q&guests=A,A&in=2021-9-10&out=2021-9-12&coupon=" class="button-zum-invert" style="margin-bottom:20px;display:none;"><button class="button_round_red-land" style="font-size:20px;">JETZT BUCHEN</button></a>
				<a href="#section-1" style="text-align:center;"><p class="read-more-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Mehr Erfahren<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Apprendre encore plus<?php } ?>
				</p>
				<img style="margin-bottom:25px;" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/arrow-down-land.svg"></a>
			</div>
		</div>
	</section>

	<section id="section-1" class="content-section" style="background-color:#EFEFEF;">
		<div class="container">
			<div class="row">
				<p class="text-bold" style="margin-bottom:35px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Mountainbike-Fun im Flow-Trail, Aktiv-Wandern mit Tipps vom Ernährungs-Profi, Kneipp-Spass unter freiem Himmel, kulinarische Höhenflüge & himmlische Wellness & Spa-Wohlfühlmomente.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>VTT sur les sentiers alpins, randonnée active avec les conseils d'un professionnel de la nutrition, plaisir du Kneipp en plein air, spécialités culinaires et moments de bien-être paradisiaques au spa !<?php } ?></p>
				<p class="text-bold">
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
	</section>

	<section id="section-2" class="content-section" style="background-color:#6384AC;">
		<div class="container">
			<div class="row">
				<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Termine:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dates :<?php } ?></p>
				<p class="title-content" style="margin-bottom:5px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Freitag 10.09.2021 bis<br>Sonntag 12.09.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vendredi 10.09.2021 jusqu'au<br>Dimanche 12.09.2021<?php } ?></p>
				<p class="text-land" style="margin-bottom:35px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Anmeldung bis 05.09.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Inscription jusqu'au 05.09.2021<?php } ?></p>
				<p class="title-content" style="margin-bottom:5px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Freitag 08.10.2021 bis<br>Sonntag 10.10.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vendredi 08.10.2021 jusqu'au<br>Dimanche 10.10.2021<?php } ?></p>
				<p class="text-land" style="margin-bottom:0px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Anmeldung bis 05.10.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Inscription jusqu'au 05.10.2021<?php } ?></p>
			</div>
		</div>
	</section>

	<section id="section-3" class="content-section" style="background-color:#EFEFEF;">
		<div class="container">
			<div class="row" style="justify-content: center;text-align: center;">
				<p class="buchen-title">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>JETZT BUCHEN<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVER MAINTENANT<?php } ?></p>
				<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.179620900.1824732861.1631005854-929501200.1581080273#packageNew&pkgId=50586&type=&q&guests=A,A&in=2021-10-8&out=2021-10-10&coupon=" class="button-zum-invert" style="margin:0 auto 30px auto;width:100%;"><button class="button_round_red-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Direktbuchung Doppelzimmer<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVATION DIRECTE CHAMBRE DOUBLE<?php } ?></button></a>
				<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.179620900.1824732861.1631005854-929501200.1581080273#packageNew&pkgId=50586&type=&q&guests=A&in=2021-10-8&out=2021-10-10&coupon=" class="button-zum-invert" style="margin:0 auto 26px auto;width:100%;"><button class="button_round_red-land" style="background-color:#6384AC;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Direktbuchung Einzelzimmer<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVATION DIRECTE CHAMBRE SIMPLE<?php } ?></button></a>
					<div style="width:100%;">
					<video id="flowtrail-video" playsinline="playsinline" controls style="margin:35px 0 50px 0;width:100%;">
			      <source src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/SISU_Flowtrial_Graechen_(Trio)_002C_low.mp4" type="video/webm">
			    </video>
				</div>
				<p class="text-land" style="margin-bottom:0;font-weight:400;text-align:center;max-width:400px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>unter <a href="mailto:info@hannigalp.ch">info@hannigalp.ch</a> oder <a href="mailto:info@nutritionforathletes.ch">info@nutritionforathletes.ch</a><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>à l'adresse <a href="mailto:info@hannigalp.ch">info@hannigalp.ch</a> ou <a href="mailto:info@nutritionforathletes.ch">info@nutritionforathletes.ch</a><?php } ?></p>
			</div>
		</div>
	</section>

	<section id="section-4" class="content-section" style="background-color:#FFFFFF;">
		<div class="container">
			<div class="row">
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
				<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Sonntag:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dimanche :<?php } ?></p>
				<p class="text-land">
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
				</p>
			</div>
		</div>
	</section>

	<section id="section-5">
		<img style="width:100%;" src="/wp-content/uploads/2021/08/img_bottom-2.jpg">
	</section>

	<section id="section-6" class="content-section" style="background-color:#FFFFFF;">
		<div class="container">
			<div class="row">
				<p class="name-land" style="margin-bottom:15px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Nadia Leuenberger<br>Dipl. Ernährungsberaterin SVDE<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nadia Leuenberger<br>Nutritionniste certifiée SVDE<?php } ?></p>
				<p class="text-land" style="margin-bottom:0;font-weight:600;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Ernährungsberatung inkl. BIA Messung auf Anfrage.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Conseils nutritionnels et mesures BIA sur demande.<?php } ?></p>
				<img style="margin-left:-20px;margin-top:10px;" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/Logo_Nurition.jpg">
			</div>
		</div>
	</section>

	<section id="section-7">
		<img style="width:100%;margin-bottom:10px;" src="/wp-content/uploads/2021/08/1-1.jpg">
		<img style="width:100%;margin-bottom:10px;" src="/wp-content/uploads/2021/08/2-1.jpg">
		<img style="width:100%;" src="/wp-content/uploads/2021/08/3-1.jpg">
	</section>

	<section id="section-footer" class="content-section" style="background-color:#EFEFEF;padding-bottom:85px;">
		<div class="container">
			<div class="row">
				<img class="logo-footer" style="width:192px;" src="/wp-content/uploads/2020/05/Han_2x_header.png">
				<p class="text-land" style="font-weight:600;line-height:27px;">
					Aktiv Hotel & Spa Hannigalp<br>
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Familie Andenmatten<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Famille Andenmatten<?php } ?><br>
					Heimine 468<br>
					CH-3925 Grächen<br>
					T. +41 27 955 10 00<br>
					<a href="mailto:info@hannigalp.ch">info@hannigalp.ch</a><br>
					<a href="https://hannigalp.ch/" target="_blank">hannigalp.ch</a><br>
					<a href="https://hannigspa.ch/" target="_blank">hannigspa.ch</a>
				</p>
			</div>
		</div>
	</section>

	<div id="booking-sticky">
		<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=2.80703198.872296194.1629120046-929501200.1581080273#packageNew&pkgId=50585&type=&q&guests=A,A&in=2021-9-10&out=2021-9-12&coupon=" class="button-zum-invert" style="margin-bottom:20px;"><button class="button_round_red-land">JETZT BUCHEN</button></a>
	</div>

	<script type="text/javascript">
	jQuery(document).on('scroll', function(){

		/*var hannibook = jQuery(window).scrollTop();
		if(hannibook > 950) {
			jQuery('#booking-sticky').fadeIn(400);
		} else {
			jQuery('#booking-sticky').fadeOut(200);
		};*/

	});
	</script>
<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<main class="site-main" id="main" style="height:0;">
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
<?php include_once "desktop/aktiver.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->
