<?php /* Template Name: MVH-marathon-bergenuss */ ?>
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
    #btt-booknow, #btt-btn{display: none}
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
        .button_round_red-land2 {border-radius: 65px;background-color: #6384AC;position: relative;width: 300px;height: 60px;z-index: 522;color: #ffffff;border:0;cursor:pointer;font-family:"source-sans-pro";font-size: 16px;letter-spacing: 0;text-transform: uppercase;font-weight: bold;}
		.read-more-land{font-size:16px;line-height: 32px;letter-spacing: 0;color:#FEFFEA;width: 100%;text-align: center;margin-bottom: 0;}
		.text-bold{font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 600;color:#000000;width: 100%;}
		.text-land{font-family:"source-sans-pro";font-size: 18px;line-height: 21px;letter-spacing: 0;font-weight: 400;color:#000000;width: 100%;}
		.price-land{font-family: "merriweather", serif;font-size: 26px;line-height: 41px;letter-spacing: 0;font-weight: 600;color:#E50019;width: 100%;margin-bottom: 0;}
		.title-content{font-family: "merriweather", serif;font-size: 23px;line-height: 29px;letter-spacing: 0;font-weight: 600;color:#FFFFFF;width: 100%;}
		.content-section{padding: 30px 10px;}
		#booking-sticky{display: none;position:fixed;bottom: 25px;left: 50%;transform: translateX(-50%);z-index: 999;}
		#section-4 ul,#section-6 ul{list-style: none;padding-left: 0;}
		#section-6-2 .col-md-2,#section-6-2 .col-md-10{padding:0;word-break: break-word;}
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
		.marathon-form{text-align: left;width:100%;margin-top:40px;margin-bottom:35px;}
		.marathon-form input[type="submit"]{background: #4089b7!important;color: #ffffff!important;border: 1px solid #4089b7!important;border-radius: 0!important;}
	}
	</style>

	<section id="section-about-content" style="width:100%;padding: 0;bottom:0;position:relative;">
		<div class="lang_mobile"><?php do_action('wpml_add_language_selector'); ?></div>
		<div class="header-bg-wrap">
			<img class="header-bg" src="/wp-content/uploads/2021/11/marathon_header_mb.jpg">
		</div>
		<div class="container header-container">
			<div class="row" style="height:30%;align-items: flex-start;">
				<img class="logo-header" src="/wp-content/uploads/2022/11/Logo-header-hannigalp.png">
				<p class="land-title" style="margin:0 auto;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zermatt<br>Marathon 2023<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Zermatt<br>Marathon 2023<?php } ?></p>
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
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Es erwartet Sie eine aktive Woche mit täglichem Programm und natürlich vielen Gesprächen rund um das Laufabenteuer „Am schönsten Berg der Welt“ sowie die Möglichkeit, Ihre sportliche Woche mit einem echten Wettkampf zu krönen: dem Gornergrat Zermatt Marathon.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Es erwartet Sie eine aktive Woche mit täglichem Programm und natürlich vielen Gesprächen rund um das Laufabenteuer „Am schönsten Berg der Welt“ sowie die Möglichkeit, Ihre sportliche Woche mit einem echten Wettkampf zu krönen: dem Gornergrat Zermatt Marathon.<?php } ?></p>
				<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix :<?php } ?></p>
				<p class="price-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>ab 1'299 p.P.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>A partir de 1'299 p.p.<?php } ?></p>
				<p class="text-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>im Doppelzimmer<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>im Doppelzimmer<?php } ?></p>
				<p class="text-land">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>(Inklusive reichhaltigem Frühstücksbuffet, Nutzung des hannigspa.ch mit einzigem Hallenschwimmbad in Grächen, Whirlpool, Dampfbad und verschiedenen Saunen. Exklusive Nachtessen, Kur- & Erlebnistaxen.)<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>(Comprend un riche petit-déjeuner buffet, l'utilisation de la hannigspa.ch avec la seule piscine couverte de Grächen, un bain à remous, un bain de vapeur et divers saunas. Hors dîner, spa et taxes d'aventure).<?php } ?></p>
                <a href="mailto:info@hannigalp.ch" class="button-zum-invert" style="margin-bottom:20px;"><button class="button_round_red-land2" style="font-size:20px;">Jetzt anfragen</button></a>
			</div>
		</div>
	</section>

	<section id="section-2" class="content-section" style="background-color:#6384AC;">
		<div class="container">
			<div class="row">
				<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Termin:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dates :<?php } ?></p>
				<p class="title-content" style="margin-bottom:5px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Sonntag, 25.06.2023 bis<br>Montag 03.07.2023<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Sonntag, 25.06.2023 bis<br>Montag 03.07.2023<?php } ?></p>
                <a href="/wp-content/uploads/2023/02/Plan_GZM_23.pdf" class="button-inv" target="_blank" style="margin-bottom:5px;">
                <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wochenprogramm<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Weekly Program<?php } ?></a>

				<p class="title-content" style="margin-bottom:5px;display:none;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Freitag 08.10.2021 bis<br>Sonntag 10.10.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vendredi 08.10.2021 jusqu'au<br>Dimanche 10.10.2021<?php } ?></p>
				<p class="text-land" style="margin-bottom:0px;display:none;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Anmeldung bis 05.10.2021<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Inscription jusqu'au 05.10.2021<?php } ?></p>
			</div>
		</div>
	</section>

	<section id="section-3" class="content-section" style="background-color:#EFEFEF;display: none">
		<div class="container">
			<div class="row" style="justify-content: center;text-align: center;">
				<p class="buchen-title">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt Anfragen<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Jetzt Anfragen<?php } ?></p>
					<div class="marathon-form">
					<?php echo do_shortcode( '[contact-form-7 id="3527" title="Zermatt Marathon Form"]' ); ?>
					</div>

					<div style="width:100%;">

				</div>

			</div>
		</div>
	</section>

	<section id="section-4" class="content-section" style="background-color:#FFFFFF;">
		<div class="container">
			<p class="buchen-title" style="margin-bottom:80px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Packetpreise<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Unsere Packetpreise<?php } ?></p>
			<div class="row">
				<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Doppelzimmer im Hotel oder Nebenhaus<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Doppelzimmer im Hotel oder Nebenhaus<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio, <br>
						Flat-TV, W-LAN, Safe und Balkon <br>
						<span style="color:#dc2326;">CHF 1299</span> / EUR 1299 *
						</li>
						<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio, <br>
						Flat-TV, W-LAN, Safe und Balkon<br>
						CHF 1299 / EUR 1299 *</li>
						<?php } ?>
					</ul>
					<p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Einzelzimmer im Hotel oder Nebenhaus<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Einzelzimmer im Hotel oder Nebenhaus<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio,
						Flat-TV, W-LAN, Safe und Balkon<br>
						<span style="color:#dc2326;">CHF 1599</span> / EUR 1599 *
						</li>
						<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio, <br>
						Flat-TV, W-LAN, Safe und Balkon <br>
						CHF 1599 / EUR 1599 *<br>
						</li><?php } ?>
					</ul>
                    <p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Dreibettzimmer im Hotel oder Nebenhaus<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Dreibettzimmer im Hotel oder Nebenhaus<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio,
						Flat-TV, W-LAN, Safe und Balkon<br>
						<span style="color:#dc2326;">CHF 1099</span> / EUR 1099 *
						</li>
						<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio, <br>
						Flat-TV, W-LAN, Safe und Balkon <br>
						CHF 1099 / EUR 1099 *<br>
						</li><?php } ?>
					</ul>
                    <p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Vierbettzimmer im Hotel oder Nebenhaus<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Vierbettzimmer im Hotel oder Nebenhaus<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio,
						Flat-TV, W-LAN, Safe und Balkon<br>
						<span style="color:#dc2326;">CHF 999</span> / EUR 999 *
						</li>
						<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>mit Bad oder Dusche, WC, Fön, Radio, <br>
						Flat-TV, W-LAN, Safe und Balkon <br>
						CHF 999 / EUR 999 *<br>
						</li><?php } ?>
					</ul>
					<p class="text-bold">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Halbpensions-Paket 8 Abende: <?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Halbpensions-Paket 8 Abende: <?php } ?></p>

					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>Spezialpreis, 3-Gang-Menü<br>
								<span style="color:#dc2326;">CHF 280</span> / EURO 280*
						</li>
						<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
							<li>Spezialpreis, 3-Gang-Menü<br>
									CHF 280 / EURO 280*
							</li><?php } ?>
					</ul>
					<p class="text-land">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?><strong>Frühbuchergeschenke</strong><br>Bei Buchung der 8-Tages-Pauschale Gornergrat Zermatt Marathon bis zum 31.10.2022 gewähren wir einen Gutschein im Wert von <span style="color:#dc2326;">CHF 100 / EUR 100</span> pro Person Für eine Übernachtung inkl. Frühstück<br><br>
                        Bei Buchung der 8-Tages-Pauschale Gornergrat Zermatt Marathon bis zum 31.12.2022 gewähren wir eine Getränke-Gutschein im Wert von <span style="color:#dc2326;">CHF 5O/ EUR 5O</span> pro Person.<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><strong>Frühbuchergeschenke</strong><br>Bei Buchung der 8-Tages-Pauschale Gornergrat Zermatt Marathon bis zum 31.10.2022 gewähren wir einen Gutschein im Wert von <span style="color:#dc2326;">CHF 100 / EUR 100</span> pro Person Für eine Übernachtung inkl. Frühstück<br><br>
                        Bei Buchung der 8-Tages-Pauschale Gornergrat Zermatt Marathon bis zum 31.12.2022 gewähren wir eine Getränke-Gutschein im Wert von <span style="color:#dc2326;">CHF 5O/ EUR 5O</span> pro Person.<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>* zzgl. Kur & Erlebnistaxen CHF 8.80 pro Person pro Nacht<br>
							* Euros werden immer nach Tageskurs berechnet.
						</li>
						<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
							<<li>* zzgl. Kur & Erlebnistaxen CHF 8.80 pro Person pro Nacht<br>
								* Euros werden immer nach Tageskurs berechnet.
							</li><?php } ?>
					</ul>
					<p class="text-bold">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>WICHTIG: In diesen Paketen ist keine Startgebühr für den Zermatt-Marathon enthalten!<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>WICHTIG: In diesen Paketen ist keine Startgebühr für den Zermatt-Marathon enthalten!<?php } ?></p>

			</div>
		</div>
	</section>

	<section id="section-5">
		<img style="width:100%;" src="/wp-content/uploads/2022/09/Paketpreise.jpg">
	</section>

	<section id="section-6" class="content-section" style="background-color:#FFFFFF;">
		<div class="container">
			<div class="row">
				<p class="text-bold">
                <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Für die Partner und Begleiter haben wir folgende Preise: <?php } ?>
                <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Für die Partner und Begleiter haben wir folgende Preise: <?php } ?></p>
                <p class="text-bold">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>8 Übernachtungen mit Frühstücksbuffet im Doppelzimmer<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>8 Übernachtungen mit Frühstücksbuffet im Doppelzimmer<?php } ?></p>
                    <ul class="text-land" style="">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>
                    <li>mit Bad oder Dusche, WC, Fön, Radio,
                        Flat-TV, W-LAN, Safe und Balkon<br>
                                <span style="color:#dc2326;">CHF 880</span> / EUR 880 pro Person
                            </li>
                    <?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
                        <li>mit Bad oder Dusche, WC, Fön, Radio,
                        Flat-TV, W-LAN, Safe und Balkon<br>
                                <span style="color:#dc2326;">CHF 880</span> / EUR 880 pro Person
                            </li><?php } ?>
                </ul>
                <p class="text-bold">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Halbpensions-Paket 8 Abende: <?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Halbpensions-Paket 8 Abende: <?php } ?></p>
                    <ul class="text-land" style="">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>
                    <li><span style="color:#dc2326;">CHF 280</span> / EUR 280 pro pro Person</li>
                    <?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
                        <li>mit Bad oder Dusche, WC, Fön, Radio,
                        Flat-TV, W-LAN, Safe und Balkon<br>
                                <span style="color:#dc2326;">CHF 280</span> / EUR 280 pro Person
                            </li><?php } ?>
                </ul>
				<ul class="text-land" style="">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
					<li>* zzgl. Kur & Erlebnistaxen CHF 8.80 pro Person pro Nacht</li>
					<li>* ohne Trainingsleistungen</li><?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
					<li>* zzgl. Kur & Erlebnistaxen CHF 8.80 pro Person pro Nacht</li>
					<li>* ohne Trainingsleistungen</li><?php } ?>
				</ul>
				<p class="text-bold" style="margin-top:10px;">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Inkludierte Leistungen<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Inkludierte Leistungen<?php } ?></p>
					<ul class="text-land" style="margin-bottom:35px;margin-left:20px;list-style:disc;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
						<li>8 Übernachtungen mit Frühstücksbuffet </li>
						<li>8 Tage Training & Coaching</li>
						<li>Diverse Transporte während der Woche von So.-So.</li>
						<li>Leistungen der Sommererlebniskarte</li><?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
						<li>8 Übernachtungen mit Frühstücksbuffet </li>
						<li>8 Tage Training & Coaching</li>
						<li>Diverse Transporte während der Woche von So.-So.</li>
						<li>Leistungen der Sommererlebniskarte</li><?php } ?>
					</ul>
			</div>
		</div>
		</section>
		<section id="section-6-2" class="content-section" style="background-color:#FFFFFF;padding-top:0;">
			<div class="container">
			<div class="row">
				<div class="col-md-2">
					<p class="text-land" style="">PARKING</p>
				</div>
				<div class="col-md-10">
					<p class="text-land" style="max-width:none;">CHF 14 pro Tag<br>(hoteleigene Garagenplätze stehen zur Verfügung)</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p class="text-land" style="">HANNIGSPA</p>
				</div>
				<div class="col-md-10">
					<p class="text-land" style="max-width:none;">Dazu freie Benützung folgender hoteleigener Anlagen<br>
                        Hallenbad, Sprudelbad, Bio-Kräutersauna, Finnische_Sauna, Dampfbad, <br>
                        Erlebnisduschen, Eisbrunnen, Kneippsprudelbecken, Ruhelounge, <br>
                        Fitnessraum & Plus Aktivitäten der Matterhornvalley Hotels
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p class="text-land" style="">ABHOLTAXI</p>
				</div>
				<div class="col-md-10">
					<p class="text-land" style="max-width:none;">Das Hotel Hannigalp befindet sich im ruhigen, autofreien Dorfteil von Grächen. (300m zur Kirche)<br>
						Taxiservice inklusive! Unser Elektrotaxi wird Sie nach Ihrer Anreise auf<br>
						den Dorfplatz abholen. Rufen Sie uns einfach an!
					</p>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12 py-5 d-flex justify-content-center">
                    <?php the_field('video_link'); ?>
                </div>
            </div>
		</div>
	</section>

	<section id="section-7">
		<img style="width:100%;" src="/wp-content/uploads/2022/09/P1.jpg">
		<img style="width:100%;" src="/wp-content/uploads/2022/09/P2.jpg">
		<img style="width:100%;" src="/wp-content/uploads/2022/09/P3.jpg">
	</section>

	<section id="section-footer" class="content-section" style="background-color:#EFEFEF;padding-bottom:85px;">
		<div class="container">
			<div class="row">
				<img class="logo-footer" style="width:192px;" src="/wp-content/uploads/2022/11/Logo-header-hannigalp.png">
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
	
</main><!-- #main -->
<!-- Do the right sidebar check -->
<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>


</div><!-- .row -->
<?php include_once "desktop/marathon.php"; ?>

</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>