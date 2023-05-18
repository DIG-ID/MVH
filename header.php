<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="facebook-domain-verification" content="irlgf7odwnbdvofg408gvdn69slvbl" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php require_once "Mobile_Detect.php"; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/understrap-child/assets/fancybox/jquery.fancybox.min.css">
	<script type="text/javascript" src="https://myincert.com/public/api/incertClient.js"></script>
	<script>   !function(f,b,e,v,n,t,s)   {if(f.fbq) return;n=f.fbq=function() {n.callMethod?   n.callMethod.apply(n,arguments) :n.queue.push(arguments) };  if(!f._fbq) f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';  n.queue=[];t=b.createElement(e) ;t.async=!0;  t.src=v;s=b.getElementsByTagName(e) [0];  s.parentNode.insertBefore(t,s) }(window, document,'script',  'https://connect.facebook.net/en_US/fbevents.js') ;  fbq('init', '355949318443645') ;  fbq('track', 'PageView') ;</script> <noscript> <img height="1" width="1" style="display:none"  src="https://www.facebook.com/tr? id=355949318443645&ev=PageView&noscript=1"/> </noscript>

</head>

<body <?php body_class(); ?>>
<script src="/wp-content/themes/understrap-child/assets/fancybox/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js"></script>
<?php do_action( 'wp_body_open' ); ?>
<?php
$detecthead = new Mobile_Detect; ?>
<div id="footbar" class="fixed_foot tabletlow-version">
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-6 icons_mob">
            <a href="#boxzilla-4411"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/sidebar/hannigalp-icon-solar.svg"></a>
            <a href="https://hannigalp.web.victory-app.ch/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/sidebar/hannigalp-icon-app.svg"></a>
            <a href="https://www.instagram.com/hannigalp/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/sidebar/instagram.svg"></a>
            <a href="https://www.facebook.com/hannigalp/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/sidebar/facebook.svg"></a>
        </div>
        <div class="col-6 book_mob">
            <a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF#" target="_blank">
                <p class="pfixed">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
                </p>
            </a>
        </div>
    </div>
</div>
</div>
<div id="footbar" class="fixed_foot tabletlow-version" style="display:none;">
	<div id="buchenfixed" class="itemfixed"><?php echo do_shortcode('[wpc-weather id="266"]'); ?>
	</div>
	<div id="iconsfixed">
		<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF#" target="_blank">
			<p class="pfixed">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
			</p>
		</a>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFSkNErJXw0CEm9XWQ3LjdwOcBzswEwH0"></script>
<script type="text/javascript">
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

    // Find marker elements within map.
    var $markers = $el.find('.marker');

		var styles = [
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "color": "#4089b7"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#4089b7"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#4089b7"
      }
    ]
  },
	{
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#4089b7"
            }
        ]
    },
		{
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
		{
        "featureType": "landscape.man_made",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#4089b7"
            },
            {
                "weight": "0.3"
            }
        ]
    },
		{
		    "featureType": "road",
		    "elementType": "all",
		    "stylers": [
		        {
		            "visibility": "on"
		        }
		    ]
		},
]

    // Create gerenic map.
    var mapArgs = {
        zoom        : $el.data('zoom') || 16,
				styles: styles,
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map( $el[0], mapArgs );

    // Add markers.
    map.markers = [];
    $markers.each(function(){
        initMarker( $(this), map );
    });

    // Center map based on markers.
    centerMap( map );

    // Return map instance.
    return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
        lat: parseFloat( lat ),
        lng: parseFloat( lng )
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
        position : latLng,
        map: map,
				icon: {
		      url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
		      labelOrigin: new google.maps.Point(0, 40),
		      size: new google.maps.Size(32,32),
		      anchor: new google.maps.Point(16,32)
		    },
				label: {
		      text: "Aktiv Hotel & Spa Hannigalp",
		      color: "#4089b7",
					fontWeight: "bold",
		    }
    });

    // Append to reference for later use.
    map.markers.push( marker );

    // If marker contains HTML, add it to an infoWindow.
    if( $marker.html() ){

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend({
            lat: marker.position.lat(),
            lng: marker.position.lng()
        });
    });

    // Case: Single marker.
    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );

    // Case: Multiple markers.
    } else{
        map.fitBounds( bounds );
    }
}

// Render maps on page load.
$(document).ready(function(){
    $('.acf-map').each(function(){
        var map = initMap( $(this) );
    });
});

})(jQuery);
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168666969-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168666969-1');
</script>


<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>


					<div class="navtopbar tablethigh-version">
						<div class="navtopbar-inner-container">
							<div class="navtopbar-left-text">
								<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="https://www.matterhornvalleyhotels.ch/" target="_blank">Zu den Matterhorn Valley Hotels</a><?php } ?>
								<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="https://www.matterhornvalleyhotels.ch/?lang=en" target="_blank">To the Matterhorn Valley Hotels</a><?php } ?>
								<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="https://www.matterhornvalleyhotels.ch/?lang=fr" target="_blank">Au Matterhorn Valley Hotels</a><?php } ?>
							</div>
							<div class="navtopbar-right-text">
									<div class="navtopbar-contact-info"><a href="tel:+41279551000" style="color:#ffffff;font-family: 'source-sans-pro', sans-serif!important;font-size: 16.5px!important;">+41 27 955 10 00</a> &nbsp;&nbsp;&nbsp; <a href="mailto:info@hannigalp.ch" style="color:#ffffff;">info@hannigalp.ch</a></div>
								<div class="navtopbar-language-selector" style="width: 170px;"><?php do_action('wpml_add_language_selector'); ?></div>
								<div class="navtopbar-socials" style="display: none;"><a href="https://www.facebook.com/hannigalp/" target="_blank" class="fa fa-facebook"></a></div>
							</div>
						</div>
					</div>



		<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

		<div class="navbar-inner-container">
			<style>
                @media (min-width: 768px) {
                .boxzilla{background:#323141!important;color:#ffffff!important;padding:0!important;-ms-overflow-style: none;scrollbar-width: none;}
                .boxzilla h4, .boxzilla .header-box-subtitle{font-size:16px!important;font-family: "source-sans-pro", sans-serif;padding-left: 20px;padding-right: 20px;}
                .boxzilla ul.header-box-subtitle{padding-left: 35px!important;}
                .boxzilla-close-icon {display: none;}
                .boxzilla::-webkit-scrollbar {
                width: 0px;  /* Remove scrollbar space */
                background: transparent;  /* Optional: just make scrollbar invisible */
                }
                .header-box-subtitle {
                    width: 90%;
                    max-width: 840px;
                    margin: 40px auto 0 auto;
                    text-align: left;
                }
            }
            @media (max-width: 768px) {
            .boxzilla{margin-top: 0!important;background:#323141!important;color:#ffffff!important;padding:0!important;}
            .boxzilla h4, .boxzilla .header-box-subtitle{font-size:16px!important;font-family: "source-sans-pro", sans-serif;padding-left: 20px;padding-right: 20px;}
            .boxzilla ul.header-box-subtitle{padding-left: 35px!important;}
            .boxzilla-close-icon {color:#ffffff!important;opacity: 1!important;}
            }
			.navbar-dark .navbar-nav .nav-link{margin-left: 0.9rem;margin-right: 0.9rem;}
            .grecaptcha-badge {opacity:0;}
			.lang_mobile{position: absolute;top:25px;right:10px;width: 50px;}
			.lang_mobile .wpml-ls-flag{display: none;}
			.lang_mobile .wpml-ls-item a span {color:transparent;font-size:0;}
			.lang_mobile .wpml-ls-item > a > span::before {color:#000;font-size:14px;position: relative;left: 5px;}
			.lang_mobile .wpml-ls-legacy-dropdown a.wpml-ls-item-toggle:after{left: 0;right:auto;}
			.lang_mobile .wpml-ls-item.wpml-ls-current-language > a > span::before {font-size:20px;border-bottom: 1px solid #000;}
			.lang_mobile .wpml-ls-item-de > a span::before{content:'DE';font-size:16px;}
			.lang_mobile .wpml-ls-item-fr > a span::before{content:'FR';font-size:16px;}
			.lang_mobile .wpml-ls-item-en > a span::before{content:'EN';font-size:16px;}
			.lang_mobile .wpml-ls-legacy-dropdown a{background:#f0f0f0;border: 0;padding-right: 5px;padding-bottom:3px!important;}
            .boxzilla{width:100%;}
            #wpc-weather{padding: 0;margin:0;}
            #wpc-weather.small .now .time_symbol svg{width: 50px;height: 50px;fill:#dc2326;margin-bottom:0;}
            #wpc-weather .now .time_symbol{float: left;margin-left: 10px; margin-top: -3px;}
            #wpc-weather.small .now .time_temperature{font-size: 20px;margin-top: 5px;float: left;font-family: "merriweather", serif;}
            #wpc-weather .climacon_component-fill{fill:#f0f0f0!important;}
            .booking_banner{
                background: #4089b7;
                max-width: 445px;
                border-radius: 10px;
                padding: 20px;
            }
            .booking_text,  .booking_text_sub{
                color: #ffffff;
                font-family: "source-sans-pro", sans-serif;
            }
            .booking_text{
                font-size: 1.5rem;
                line-height: 1.5rem;
                letter-spacing: 2px;
                font-weight: 600;
            }
            .booking_text_sub{
                font-size: 1rem;
                letter-spacing: 2.2px;
            }
            .sidebar_icons{
                display: flex;
                flex-direction: column;
                position: fixed;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                z-index: 99;
                background: white;
                padding: 15px 10px 15px 15px;
                border-radius: 15px 0 0 15px;
                box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
            }
            .sidebar_icons svg{
                width: 45px;
                height: auto;
            }
            .sidebar_icons svg:hover{
                fill: #4089b7;
            }
            .sidebar_icons svg > path{
                -webkit-transition: all 200ms ease;
                -moz-transition: all 200ms ease;
                -ms-transition: all 200ms ease;
                -o-transition: all 200ms ease;
                transition: all 200ms ease;
            }
            .sidebar_icons a{
                text-align: center;
            }
            .sidebar_icons a:not(:last-child){
                margin-bottom:30px;
            }
            a.instagram_link{margin-bottom: 25px!important;}
            a.discount_link > svg{width: 40px;}
            a.app_link > svg{width: 40px;}
            a.instagram_link > svg{width: 36px;}
            a.facebook_link > svg{width: 36px;}
			@media (min-width: 1200px){
				.lang_mobile{display: none;}
				#wpc-weather-id-1901{display: none;}
                #booking-bar{
                    width: 445px;
                    margin: -70px auto 0px auto;
                    background: transparent;
                    filter: none;
                    z-index: 999;
                }
                #buchenfixed{display: none;}
                #btt-booknow img{
                    width: 30px;
                    height: auto;
                    margin-right: 10px;
                }
                #btt-booknow span{
                    font-family: "source-sans-pro", sans-serif;
                    font-size: 16px;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    color: #ffffff;
                    font-weight: 600;
                }
                #btt-booknow{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #e30613;
                    width: auto;
                    height: 50px;
                    padding: 10px 20px;
                    text-align: center;
                    border-radius: 4px;
                    position: fixed;
                    bottom: 30px;
                    right: 90px;
                    transition: background-color 0.3s, opacity 0.5s, visibility 0.5s;
                    opacity: 0;
                    visibility: hidden;
                    z-index: 1000;
                }
                #btt-booknow.show{
                    opacity: 1;
                    visibility: visible;
                }
                #btt-booknow:hover {
                    background-color: #333;
                }
			}
			@media (max-width: 1200px){
				#booking-bar,
				#btt-btn{display: none;}
                .sidebar_icons{display: none!important;}
                #footbar .icons_mob img{width: 35px;height: auto;margin: 0 5px;}
                #footbar .icons_mob{
                    background: #ffffff;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                }
			}
			</style>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="lang_mobile"><?php do_action('wpml_add_language_selector'); ?></div>
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php endif; ?>


				<?php } else {
					the_custom_logo();
				} ?><!-- end custom logo -->
</div>
				<!-- The WordPress Menu goes here -->

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<div class="navbar-inner-container tablethigh-version">
				<?php echo do_shortcode("[wpc-weather id=\"1901\" /]"); ?>
			</div>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
		<a href="#boxzilla-3366"><button id="covid-button" class="toggle" style="border:none;background:#4089b7;height: 115px;width: 40px;position:fixed;left:0px;top:320px;z-index: 1001;font: normal normal 600 14px/22px merriweather;text-align: center;padding:14px 0;color:#FFFFFF;text-transform:uppercase;">
	  	<span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-bottom: 35px;">Covid-19</span>
	  </button></a>
	<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
		<a href="#boxzilla-3367"><button id="covid-button" class="toggle" style="border:none;background:#4089b7;height: 115px;width: 40px;position:fixed;left:0px;top:320px;z-index: 1001;font: normal normal 600 14px/22px merriweather;text-align: center;padding:14px 0;color:#FFFFFF;text-transform:uppercase;">
	  	<span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-bottom: 35px;">Covid-19</span>
	  </button></a>
	<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
		<a href="#boxzilla-3368"><button id="covid-button" class="toggle" style="border:none;background:#4089b7;height: 115px;width: 40px;position:fixed;left:0px;top:320px;z-index: 1001;font: normal normal 600 14px/22px merriweather;text-align: center;padding:14px 0;color:#FFFFFF;text-transform:uppercase;">
	  	<span style="transform: rotate(270deg);display: inline-block;white-space: nowrap;padding-bottom: 35px;">Covid-19</span>
	  </button></a>
	<?php } ?>

    <div class="sidebar_icons">
    <a href="#boxzilla-4411" class="discount_link">
      <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 70 70"><path d="M4.4 38.1c2.2 0 4.3-.5 6.1-1.4 1.8-.9 3.3-2.1 4.4-3.7 1.1-1.6 1.6-3.3 1.6-5.2 0-2.4-.6-4.2-1.8-5.3-1.2-1.1-2.9-1.6-5.1-1.6-1.1 0-2.2.1-3.5.4-1.3.3-2.3.6-3.2 1l-1.6-1.1L3.7 3.4h15l.5-.9h3.4l-1 6.1H8.2l-2 10.1c.9-.5 2.1-.9 3.4-1.3 1.3-.4 2.7-.6 4.2-.6 3.3 0 5.8.9 7.6 2.6 1.8 1.7 2.7 4.2 2.7 7.3 0 2.8-.8 5.3-2.5 7.6-1.6 2.3-3.9 4-6.8 5.3-2.9 1.3-6.2 1.9-9.8 1.9-1.2 0-2.4-.1-3.4-.3V38c1.2.1 2.2.1 2.8.1zM33 26.5c-1.3-.9-2.3-2-2.9-3.5-.7-1.5-1-3.1-1-4.9 0-2 .4-3.8 1.2-5.3.8-1.5 1.9-2.7 3.4-3.5 1.4-.8 3-1.2 4.7-1.2 3 0 5.1.9 6.5 2.7 1.4 1.8 2.1 4.1 2.1 7.1 0 2-.4 3.8-1.3 5.3-.8 1.5-2 2.6-3.4 3.4-1.4.8-3 1.2-4.7 1.2-1.7-.1-3.3-.5-4.6-1.3zm7.8-3.4c.6-1.2.9-2.9.9-5.1 0-2.1-.3-3.8-.8-5.1-.6-1.3-1.5-2-2.7-2-1.3 0-2.2.6-2.8 1.8-.6 1.2-.9 2.9-.9 5.1 0 2 .3 3.6.9 5 .6 1.4 1.5 2.1 2.7 2.1 1.2.1 2.2-.5 2.7-1.8zM54 7.8h4.3L43.6 42.2h-4.2L54 7.8zm.7 32.4c-1.3-.9-2.3-2-3-3.5-.7-1.5-1-3.1-1-4.8 0-2 .4-3.8 1.2-5.3.8-1.5 2-2.7 3.4-3.5 1.4-.8 3-1.2 4.8-1.2 2.9 0 5.1.9 6.5 2.7 1.4 1.8 2.1 4.1 2.1 7.1 0 2-.4 3.8-1.3 5.3-.8 1.5-2 2.6-3.4 3.4-1.4.8-3 1.2-4.7 1.2-1.8-.1-3.3-.5-4.6-1.4zm7.7-3.3c.6-1.2.9-2.9.9-5.1 0-2-.3-3.7-.8-5.1-.6-1.3-1.5-2-2.7-2-1.3 0-2.2.6-2.8 1.8-.6 1.2-.9 2.9-.9 5.1 0 2 .3 3.6.9 5 .6 1.4 1.5 2.1 2.7 2.1 1.2 0 2.1-.6 2.7-1.8zM2.1 56.3l.8-1.9c.9.7 2.3 1.1 3.5 1.1 1.5 0 2.1-.5 2.1-1.2 0-2-6.3-.6-6.3-4.6 0-1.8 1.5-3.3 4.5-3.3 1.4 0 2.7.3 3.7 1l-.8 1.9c-1-.6-2-.8-3-.8-1.5 0-2 .6-2 1.2 0 2 6.3.6 6.3 4.6 0 1.8-1.5 3.3-4.6 3.3-1.5-.1-3.3-.6-4.2-1.3zm11.3-4.4c0-3.2 2.5-5.6 5.9-5.6 3.4 0 5.9 2.4 5.9 5.6 0 3.2-2.5 5.6-5.9 5.6-3.5 0-5.9-2.4-5.9-5.6zm9.2 0c0-2-1.4-3.4-3.4-3.4s-3.4 1.4-3.4 3.4 1.4 3.4 3.4 3.4 3.4-1.3 3.4-3.4zm5.7-5.3h2.5v8.7h5.4v2h-7.9V46.6zM46.1 55h-5l-1 2.3h-2.6l4.8-10.8h2.5l4.8 10.8H47l-.9-2.3zm-.8-1.9L43.6 49l-1.7 4.1h3.4zm13.6 4.2-2.1-3h-2.3v3H52V46.6h4.7c2.9 0 4.7 1.5 4.7 3.9 0 1.6-.8 2.8-2.2 3.4l2.4 3.5h-2.7zm-2.3-8.7h-2v3.8h2c1.5 0 2.3-.7 2.3-1.9-.1-1.2-.8-1.9-2.3-1.9zm7.7 2.3h4.3v1.9h-4.3v-1.9zM6.8 67.5l-1.3-1.9H4.1v1.9H2.5v-6.8h2.9c1.8 0 2.9.9 2.9 2.5 0 1-.5 1.8-1.4 2.1l1.5 2.2H6.8zm-1.5-5.6H4.1v2.4h1.3c1 0 1.4-.4 1.4-1.2 0-.7-.5-1.2-1.5-1.2zm10.4 4.3v1.3h-5.3v-6.8h5.1V62H12v1.5h3.2v1.2H12v1.6h3.7zm2.1-5.5h3.1c2.2 0 3.7 1.3 3.7 3.4 0 2.1-1.5 3.4-3.7 3.4h-3.1v-6.8zm3 5.5c1.3 0 2.2-.8 2.2-2.1s-.9-2.1-2.2-2.1h-1.4v4.2h1.4zm5.7-1.7v-3.8h1.6v3.7c0 1.3.6 1.8 1.5 1.8 1 0 1.5-.5 1.5-1.8v-3.7h1.6v3.8c0 2-1.1 3.1-3.1 3.1s-3.1-1.1-3.1-3.1zm11 .3-.9 1v1.7H35v-6.8h1.6v3.2l3-3.2h1.7l-2.8 3 3 3.8h-1.8l-2.2-2.7zm6.5-2.9h-2.2v-1.3h5.9v1.3h-2.2v5.5H44v-5.5zm5.4-1.2H51v6.8h-1.6v-6.8zm3.6 3.4c0-2 1.6-3.5 3.7-3.5s3.7 1.5 3.7 3.5-1.6 3.5-3.7 3.5-3.7-1.5-3.7-3.5zm5.8 0c0-1.3-.9-2.2-2.1-2.2-1.2 0-2.1.9-2.1 2.2 0 1.3.9 2.2 2.1 2.2 1.2-.1 2.1-.9 2.1-2.2zm9.9-3.4v6.8h-1.3L64 63.3v4.1h-1.6v-6.8h1.3l3.4 4.1v-4.1h1.6z"/></svg>
    </a>
    <a href="https://hannigalp.web.victory-app.ch/" target="_blank" class="app_link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M276.5 481.1H93.4c-26.2 0-47.4-21.2-47.4-47.4V233c0-7.1-5.7-12-12-12-6.4 0-12 5.7-12 12v200.7c0 39.6 32.5 71.4 71.4 71.4h183.1c7.1 0 12-5.7 12-12s-5.6-12-12-12zM486.4 99.4c-1.4-6.4-8.5-10.6-14.8-9.2-6.4 1.4-10.6 8.5-9.2 14.8 1.4 7.1 2.8 14.8 2.8 22.6 0 29.7-13.4 56.5-36.8 74.9-17 12.7-36.8 19.8-58 19.8-52.3 0-94.7-42.4-94.7-94.7 0-5.7.7-10.6 1.4-16.3 1.4-8.5 4.2-17 7.8-25.4 15.5-32.5 49.5-53.7 85.5-53.7 24 0 46.6 9.2 64.3 24.7 4.9 4.9 12.7 4.2 17.7-.7 4.9-4.9 4.2-12.7-.7-17.7C429.8 18 400.8 6.7 371.1 6.7 328 6.7 288.4 30 267.2 66.8H93.4C53.9 66.9 22 99.4 22 138.3v35.3c0 7.1 5.7 12 12 12 6.4 0 12-5.7 12-12v-35.3c0-26.2 21.2-47.4 47.4-47.4h163.3v.7c-.7 2.8-1.4 4.9-2.1 7.8v1.4c-.7 2.1-.7 4.2-1.4 6.4v2.8c0 2.1-.7 3.5-.7 5.7v9.9c0 65.7 53.7 119.5 119.5 119.5 2.8 0 5.7 0 9.2-.7h2.1c2.1 0 4.9-.7 7.1-.7h1.4c2.8-.7 5.7-1.4 8.5-1.4.7 0 1.4-.7 2.1-.7l6.4-2.1c.7 0 1.4-.7 2.1-.7 2.8-.7 5.7-2.1 7.8-2.8.7 0 .7-.7 1.4-.7l4.2-2.1v200.7c0 26.2-21.2 47.4-47.4 47.4h-47.4c-7.1 0-12 5.7-12 12 0 7.1 5.7 12 12 12h47.4c39.6 0 71.4-32.5 71.4-71.4V218.2c26.9-22.6 41.7-55.8 41.7-90.5 0-9.2-1.5-19.1-3.6-28.3z"/><path d="M316.1 367.3c-1.4-2.8-2.8-5.7-5.7-7.8-2.1-2.1-5.7-3.5-8.5-4.9-3.5-.7-8.5-1.4-14.1-1.4h-21.2c-3.5 0-6.4.7-7.8 2.1-1.4 1.4-2.8 4.2-2.8 7.8v63.6c0 3.5.7 5.7 2.1 7.8 1.4 1.4 3.5 2.8 5.7 2.8 2.1 0 4.2-.7 5.7-2.8 1.4-1.4 2.1-4.2 2.1-7.8v-23.3h14.8c9.9 0 17.7-2.1 22.6-6.4 4.9-4.2 7.8-10.6 7.8-19.1 1.4-3.5.7-7-.7-10.6zm-17 18.4c-1.4 2.1-3.5 3.5-5.7 4.2-2.8.7-5.7 1.4-9.9 1.4h-11.3v-24.7h11.3c7.1 0 12 1.4 14.8 3.5 2.1 2.1 2.8 4.9 2.8 8.5.1 2.9-.6 5-2 7.1zM371.9 183.6c4.2 0 7.1-3.5 7.1-7.1V81.8c0-2.8-2.1-5.7-4.2-7.1-2.8-1.4-5.7-.7-7.8 1.4l-16.3 16.3c-2.8 2.8-2.8 7.8 0 10.6s7.8 2.8 10.6 0l3.5-3.5v76.3c-.7 4.2 2.9 7.8 7.1 7.8zM194.5 433.8c1.4-1.4 2.1-4.2 2.1-7.8v-23.3h14.8c9.9 0 17.7-2.1 22.6-6.4 4.9-4.2 7.8-10.6 7.8-19.1 0-4.2-.7-7.1-2.1-10.6-1.4-2.8-2.8-5.7-5.7-7.8-2.1-2.1-5.7-3.5-8.5-4.9-3.5-.7-8.5-1.4-14.1-1.4h-21.2c-3.5 0-6.4.7-7.8 2.1-1.4 1.4-2.8 4.2-2.8 7.8v64.3c0 3.5.7 5.7 2.1 7.8 1.4 1.4 3.5 2.8 5.7 2.8 3.6-.7 5-1.4 7.1-3.5zm2.1-67.9h11.3c7.1 0 12 1.4 14.8 3.5 2.1 2.1 2.8 4.9 2.8 8.5 0 2.8-.7 5.7-2.1 7.1-1.4 2.1-3.5 3.5-5.7 4.2-2.8.7-5.7 1.4-9.9 1.4h-11.3v-24.7zM105.4 434.5c1.4-1.4 2.1-4.2 4.2-8.5l4.2-10.6H147l4.2 9.9 2.1 4.2c.7 1.4 1.4 2.8 2.1 3.5l2.1 2.1c.7.7 2.1.7 3.5.7 2.1 0 4.2-.7 5.7-2.1 1.4-1.4 2.1-3.5 2.1-4.9 0-2.1-.7-4.9-2.8-8.5L145 368c-.7-2.8-2.1-4.9-2.8-6.4l-2.1-4.2c-.7-1.4-2.1-2.8-3.5-3.5-1.4-.7-3.5-1.4-5.7-1.4-2.1 0-4.2.7-5.7 1.4-1.4.7-2.8 2.1-3.5 3.5-.7 1.4-2.1 2.8-2.8 5.7-.7 2.8-1.4 4.2-2.1 5.7l-20.5 53c-.7 2.1-1.4 3.5-2.1 4.9-.7 1.4-.7 2.1-.7 3.5 0 2.1.7 3.5 2.1 4.9.7.7 2.8 1.4 4.9 1.4s4.2-.6 4.9-2zm24.1-65.1 12 33.9h-24l12-33.9z"/></svg>
    </a>
    <a href="https://www.instagram.com/hannigalp/" target="_blank" class="instagram_link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
    </a>
    <a href="https://www.facebook.com/hannigalp/" target="_blank" class="facebook_link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
    </a>
    </div>

	<button id="f-button" class="toggle" style="display: none;border:none;background:#FFFFFF;height: 85px;width: 75px;position:fixed;right:0px;top:350px;z-index: 1001;font: normal normal 600 14px/22px merriweather;text-align: center;padding:0;color:#FFFFFF;text-transform:uppercase;">
		<span style="display: inline-block;white-space: nowrap;"><img src="/wp-content/uploads/2021/07/Family_Destination@2x.png" style="width:56px;"></span>
  </button>
		        <?php if(ICL_LANGUAGE_CODE=='de'){ ?>
		        <div id="covid-text" style="font: normal normal 400 14px/22px source-sans-pro;position:fixed;top:230px;width: 600px;padding:20px 20px 0px 85px;background:#2c2b39;color:#FFFFFF;z-index: 990;font-size: 14px;line-height: 18px;left:-705px;max-width: 100%;z-index:1000;">
		        <p style="line-height: 18px!important;">Wir halten uns an die Vorgaben von Hotellerie Suisse</p>
						<ul>
							<li>Die Service- und Küchenmitarbeitenden arbeiten, wo jeweils vorgeschrieben, mit Schutzmaske und Handschuhen.</li>
							<li>Unsere Reception wurde mit einer Glasschutzwand ausgestattet.</li>
							<li>Wir haben im Restaurant und der Reception spezielle Ständer mit Desinfektionsmittel platziert.</li>
							<li>Unser Personal wurde im Detail auf die Einhaltung von Social Distancing geschult.</li>
							<li>Fürs Frühstücksbuffett kommt ein geprüftes Schutzkonzept zur Anwendung.</li>
							<li>Die Tischanordnung in den Restaurants wurde angepasst, so dass der Mindestabstand von 1.5m zwischen den Tischen gewährleistet ist.</li>
							<li>Für unser Restaurant werden Reservationen empfohlen, da wir die Kapazitäten stark reduzieren mussten.</li>
							<li>Wir danken Ihnen für Ihr Verständnis und Ihre Unterstützung!</li>
						</ul>
		        <?php } ?>
		        <?php if(ICL_LANGUAGE_CODE=='en'){ ?>
	          <div id="covid-text" style="font: normal normal 400 14px/22px source-sans-pro;position:fixed;top:230px;width: 600px;padding:20px 20px 0px 85px;background:#2c2b39;color:#FFFFFF;z-index: 990;font-size: 14px;line-height: 18px;left:-705px;max-width: 100%;z-index:1000;">
							<p style="line-height: 18px!important;">We adhere to the guidelines of Hotellerie Suisse</p>
							<ul>
								<li>The service and kitchen staff work with protective masks and gloves where prescribed.</li>
								<li>Our reception has been equipped with a protective glass wall.</li>
								<li>We have placed special stands with disinfectant in the restaurant and reception.</li>
								<li>Our staff has been trained in detail on social distancing guidelines.</li>
								<li>A tested protection concept is used for the breakfast buffet.</li>
								<li>The table arrangement in the restaurants has been adapted so that the minimum distance of - 1.5m between tables is guaranteed.</li>
								<li>Reservations are recommended for our restaurant, as we have had to reduce capacities considerably.</li>
								<li>We thank you for your understanding and support!</li>
							</ul>
		        <?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
		        <div id="covid-text" style="font: normal normal 400 14px/22px source-sans-pro;position:fixed;top:230px;width: 600px;padding:20px 20px 0px 85px;background:#2c2b39;color:#FFFFFF;z-index: 990;font-size: 14px;line-height: 18px;left:-705px;max-width: 100%;z-index:1000;">
							<p style="line-height: 18px!important;">Nous adhérons aux spécifications d'Hotellerie Suisse.</p>
							<ul>
								<li>Le personnel de service et de cuisine travaille avec des masques et des gants de protection lorsque cela est prescrit.</li>
								<li>Notre réception a été équipée d'un mur de verre protecteur.</li>
								<li>Nous avons placé des stands spéciaux avec du désinfectant dans le restaurant et la réception.</li>
								<li>Notre personnel a reçu une formation détaillée sur la conformité de la distanciation sociale.</li>
								<li>Un concept de protection éprouvé est utilisé pour le buffet du petit-déjeuner.</li>
								<li>La disposition des tables dans les restaurants a été adaptée de manière à garantir la distance minimale de 1,5 m entre les tables.</li>
								<li>Les réservations sont recommandées pour notre restaurant, car nous avons dû réduire considérablement notre capacité.</li>
								<li>Nous vous remercions de votre compréhension et de votre soutien !</li>
							</ul>
		        <?php } ?>
		    </div>

				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>
			        <div id="f-text" style="font: normal normal 400 14px/22px source-sans-pro;position:fixed;top:185px;width: 600px;padding:20px 85px 0px 20px;background:#2c2b39;color:#FFFFFF;z-index: 990;font-size: 14px;line-height: 18px;right:-705px;max-width: 100%;z-index:1000;">
				        <p style="line-height: 18px!important;">GÜTESIEGEL FAMILY DESTINATION</p>
								<p style="line-height: 18px!important;">WER WIR SIND</p>
								<p style="line-height: 18px!important;">Wir sind ein Schweizer Ferienort, der sich besonders gut für Familienferien eignet. Die touristischen Leistungsträger richten ihr Angebot gezielt auf die Bedürfnisse der Gästegruppe «Familie» aus. Wir setzen uns kontinuierlich mit dem Thema Qualität auseinander und richten ein besonderes Augenmerk auf die Nachhaltigkeit unserer Dienstleistungen.</p>
								<p style="line-height: 18px!important;">WAS WIR WOLLEN</p>
								<p style="line-height: 18px!important;">Unser Ziel ist es, den Kindern zusammen mit den Eltern oder Begleitpersonen einen Aufenthalt zu bieten, der ihren Wünschen und Bedürfnissen vollumfänglich entspricht. Die Familienfreundlichkeit steht im Zentrum unserer Anstrengungen und wird von allen unterzeichnenden Leistungserbringern wie auch von der einheimischen Bevölkerung unterstützt.</p>
								<p style="line-height: 18px!important;">WIE WIR UNSER ZIEL ERREICHEN WOLLEN</p>
								<p style="line-height: 18px!important;">Wir anerkennen die Qualitätskriterien des Gütesiegels FAMILY DESTINATION, die für alle ausgezeichneten Orte verbindlich sind und durch unabhängige Experten periodisch überprüft werden.</p>
			        <?php } ?>
			        <?php if(ICL_LANGUAGE_CODE=='en'){ ?>
		          <div id="f-text" style="font: normal normal 400 14px/22px source-sans-pro;position:fixed;top:205px;width: 600px;padding:20px 85px 0px 20px;background:#2c2b39;color:#FFFFFF;z-index: 990;font-size: 14px;line-height: 18px;right:-705px;max-width: 100%;z-index:1000;">
								<p style="line-height: 18px!important;">FAMILY DESTINATION SEAL OF APPROVAL</p>
								<p style="line-height: 18px!important;">WHO WE ARE</p>
								<p style="line-height: 18px!important;">We are a Swiss holiday resort that is particularly well suited for family holidays. The tourism service providers gear their offers specifically to the needs of the "family" guest group. We continuously seek to improve the quality of, and pay special attention to the sustainability of our services.</p>
								<p style="line-height: 18px!important;">WHAT WE WANT</p>
								<p style="line-height: 18px!important;">Our aim is to offer children, together with their parents or accompanying adults, a stay that fully meets their wishes and needs. Family-friendliness is at the heart of our efforts and is supported by all signatory service providers as well as the local population.</p>
								<p style="line-height: 18px!important;">HOW WE WANT TO ACHIEVE OUR GOAL</p>
								<p style="line-height: 18px!important;">We recognise the quality criteria of the FAMILY DESTINATION label, which are binding for all awarded locations and are periodically reviewed by independent experts.</p>
			        <?php } ?>
							<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>
			        <div id="f-text" style="font: normal normal 400 14px/22px source-sans-pro;position:fixed;top:200px;width: 600px;padding:20px 85px 0px 20px;background:#2c2b39;color:#FFFFFF;z-index: 990;font-size: 14px;line-height: 18px;right:-705px;max-width: 100%;z-index:1000;">
								<p style="line-height: 18px!important;">LE SCEAU D'APPROBATION DE LA DESTINATION FAMILIALE</p>
								<p style="line-height: 18px!important;">QUI SOMMES-NOUS</p>
								<p style="line-height: 18px!important;">We are a Swiss holiday resort that is particularly well suited for family holidays. The tourism service providers gear their offers specifically to the needs of the "family" guest group. We continuously seek to improve the quality of, and pay special attention to the sustainability of our services.</p>
								<p style="line-height: 18px!important;">CE QUE NOUS VOULONS</p>
								<p style="line-height: 18px!important;">Notre objectif est d'offrir aux enfants, ainsi qu'à leurs parents ou aux adultes qui les accompagnent, un séjour qui réponde pleinement à leurs souhaits et à leurs besoins. La convivialité familiale est au cœur de nos efforts et est soutenue par tous les prestataires de services signataires ainsi que par la population locale.</p>
								<p style="line-height: 18px!important;">COMMENT NOUS VOULONS ATTEINDRE NOTRE OBJECTIF</p>
								<p style="line-height: 18px!important;">Nous reconnaissons les critères de qualité du label FAMILY DESTINATION, qui sont contraignants pour tous les lieux récompensés et sont périodiquement contrôlés par des experts indépendants.</p>
			        <?php } ?>
			    		</div>
		<style>
		@media (max-width:550px){
		#covid-text,#f-text{top:80px!important;}}
		.covid-pdf{font: normal normal 400 14px/22px Montserrat;color:#E4DBCE!important;text-decoration: underline;}
		.covid-pdf:hover{color:#D85820!important;}
		#covid-button:hover,#f-button:hover{cursor: pointer;}
		#covid-button:focus,#f-button:focus{border:none;outline:0;}
		#covid-text,#f-text{display: none;}
		#covid-text ul,#f-text ul{list-style-type: square;padding-left: 17px;margin-left:0;}
		</style>
		<script>
		/*jQuery(document).ready(function($) {
		    // COVID Warnings
				$(document).click(function() {
			      $('#covid-text').animate({left: '-705px'});
			      $('#covid-text').fadeOut(600);
			    });
			    $('#covid-button').click(function(){
			      $('#covid-text').fadeIn();
			      $('#covid-text').animate({left: '0px'});
						$('#f-text').animate({right: '-705px'});
						$('#f-text').fadeOut(600);
			      return false;
			    });

					$(document).click(function() {
			      $('#f-text').animate({right: '-705px'});
			      $('#f-text').fadeOut(600);
			    });
			    $('#f-button').click(function(){
			      $('#f-text').fadeIn();
			      $('#f-text').animate({right: '0px'});
						$('#covid-text').animate({left: '-705px'});
						$('#covid-text').fadeOut(600);
			      return false;
			    });
		});*/
		</script>
