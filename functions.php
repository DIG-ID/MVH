<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

//disable gutenberg and enable classic editor
add_filter('use_block_editor_for_post', '__return_false', 10);


// DIGID FUNCTIONS

//add classes to page templates
add_filter( 'body_class','mvhmob_body_class' );
function mvhmob_body_class( $classes ) {
    if ( is_page_template( 'spa-template.php' ) ) {$classes[] = 'spa-page';}
		if ( is_page_template( 'rooms-template.php' ) ) {$classes[] = 'rooms-page';}
		if ( is_page_template( 'angebot-template.php' ) ) {$classes[] = 'angebot-page';}
		if ( is_page_template( 'gastronomie-template.php' ) ) {$classes[] = 'gastro-page';}
		if ( is_page_template( 'gastro-in-template.php' ) ) {$classes[] = 'gastro-detail-page';}
		if ( is_page_template( 'spa-in-template.php' ) ) {$classes[] = 'spa-infra-page';}
		if ( is_page_template( 'grachen-template.php' ) ) {$classes[] = 'grachen-page';}
		if ( is_page_template( 'sport-template.php' ) ) {$classes[] = 'sport-page';}
		if ( is_page_template( 'mvhplus-template.php' ) ) {$classes[] = 'mvhplus-page';}
		if ( is_page_template( 'uberuns-template.php' ) ) {$classes[] = 'uberuns-page';}
    return $classes;
}

//add css and scripts
function namespace_theme_stylesheets() {
    wp_register_style( 'mamies-wafers-bootstrap-min',  get_stylesheet_directory_uri() .'/assets/slider/flickity.min.css', array(), null, 'all' );
    wp_enqueue_style( 'mamies-wafers-bootstrap-min' );
}
add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets' );

function my_scripts_method() {
    wp_enqueue_script(
        'flickity-slider',
        get_stylesheet_directory_uri() . '/assets/slider/flickity.pkgd.min.js',
        array( 'jquery' )
    );
	wp_enqueue_script(
        'di-script',
        get_stylesheet_directory_uri() . '/js/di-script.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function debug_cf7_add_error( $items, $result ) 
{
      if ( 'mail_failed' == $result['status'] ) {
            // invoke global phpmailer object
            global $phpmailer;
            // append error info to ajax response.
            $items['errorInfo'] = $phpmailer->ErrorInfo;
        }
    return $items;
}
add_action( 'wpcf7_ajax_json_echo', 'debug_cf7_add_error', 10, 2 );
// c) There is another filter for the boolean used in the control statement. This successfully disabled the spam check of CF7 for me. 
if (is_page( 'Zermatt Marathon 2023' ) ):
    add_filter('wpcf7_skip_spam_check', '__return_true');
endif;


// ACF - Google Maps API key
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAFSkNErJXw0CEm9XWQ3LjdwOcBzswEwH0');
}
add_action('acf/init', 'my_acf_init');

function dig_homedesktop_desk_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
		$address = $atts['address'];
    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<?php if($terms == 'desktop-slider' || $terms == 'well-slider'){ ?>
<div class="dig-hoteldesk-block-slider regular" style="background:#2c2b39;">
<?php } ?>	<?php if($terms == 'rest-slider'){ ?>
<div class="dig-hoteldesk-block-slider inverted" style="background:#2c2b39;">
<?php } ?>
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
	<div class="dig-hoteldesk-block-slider-cell" style="width: 100%;">
	<?php if($terms == 'desktop-slider' || $terms == 'well-slider'){ ?>
	<div id="left-side" style="float:left;width:40%;padding:40px;">
		<h2 class="dig-hotel-block-name" style="margin-left:15px;">
		<?php if($terms == 'desktop-slider'){ ?><?php the_field('hotel_name'); ?><?php } ?>
		<?php if($terms == 'well-slider' ){ ?><?php the_field('header-title'); ?><?php } ?></h2>
		<p class="dig-hotel-block-subtitle" style="margin-left:15px;margin-bottom:25px;margin-top:25px;">From: <span style="font-size:1.75rem;font-family: 'merriweather', serif;"><?php the_field('price'); ?></span></p>
		<?php if($terms == 'desktop-slider' ){ ?>
			<p class="dig-hotel-block-subtitle" style="margin-left:15px;">
			<?php $about_section = get_field('about_section');$about_text = $about_section['about_text']; ?>
			<?php echo $about_text; ?></p>
		<?php } ?>
		<?php if($terms == 'well-slider'){ ?>
		<p class="dig-hotel-block-subtitle" style="margin-left:15px;"><?php the_field('description'); ?></p><?php } ?>
		<a href="#" class="button-zum"><button class="button_round_red">Zum Zimmer</button></a>
	</div>
	<?php } ?>
	<?php if($terms == 'rest-slider'){ ?>
		<div id="left-side" style="float:left;width:60%;background:#2c2b39;">
			<div id="slide1desk" class="carousel slide" data-ride="carousel" data-interval="false">
				<ol class="carousel-indicators">
			    <li data-target="#slide1desk" data-slide-to="0" class="active"></li>
			    <li data-target="#slide1desk" data-slide-to="1"></li>
			    <li data-target="#slide1desk" data-slide-to="2"></li>
	  		</ol>
				<div class="carousel-inner">
					<?php 	$images = get_field('hotels_page_slider_desktop');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="carousel-item"><img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php if($terms == 'desktop-slider' || $terms == 'well-slider'){ ?>
	<div id="right-side" style="float:left;width:60%;background:#2c2b39;">
		<div id="slide1desk" class="carousel slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">
		    <li data-target="#slide1desk" data-slide-to="0" class="active"></li>
		    <li data-target="#slide1desk" data-slide-to="1"></li>
		    <li data-target="#slide1desk" data-slide-to="2"></li>
  		</ol>
			<div class="carousel-inner">
				<?php 	$images = get_field('hotels_page_slider_desktop');
				if( $images ): ?>
				<?php foreach( $images as $image ): ?>
				<div class="carousel-item"><img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if($terms == 'rest-slider'){ ?>
	<div id="right-side" style="float:left;width:40%;background:#2c2b39;padding:60px;">
		<h2 class="dig-hotel-block-name" style="margin-left:15px;"><?php the_field('header-title'); ?></h2>
		<p class="dig-hotel-block-subtitle" style="margin-left:15px;margin-bottom:25px;margin-top:25px;">From: <span style="font-size:1.75rem;font-family: 'merriweather', serif;"><?php the_field('price'); ?></span></p>
		<p class="dig-hotel-block-subtitle" style="margin-left:15px;"><?php the_field('rest_description'); ?></p>
		<a href="#" class="button-zum-invert"><button class="button_round_red">Zum Zimmer</button></a>
	</div>
	<?php } ?>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_homedesktop_shortcode', 'dig_homedesktop_desk_shortcode');

// slider homepage
function dig_slider_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $header_bg = $atts['header-bg'];
    $header_title = $atts['header-title'];
		$button_title = $atts['button-title'];
    $button_link = $atts['button_hotel_link'];
		$sub_title = $atts['sub-title'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="dig-slider">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post();
$image = get_field($header_bg); ?>
<div class="dig-slider-cell" style="width: 100%;background:url(<?php echo $image['url']; ?>);">
<h2 class="header-title" style="text-align: center;"><?php the_field($header_title); ?></h2>
<?php if(!empty(get_field($button_title))){ ?>
<a href="#"><button class="button_round_red"><?php the_field($button_title); ?></button></a>
<?php } ?>
<?php if(!empty(get_field($sub_title))): ?>
<div class="slider-subtitle"><?php the_field($sub_title); ?></div>
<?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_slider_mob_overview_shortcode', 'dig_slider_mob_ov_shortcode');

// slider angebot mobile
function dig_angebot_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="ange-section">
	<?php if($terms == 'summer'){ ?>
		<img class="angebot-icon" src="/wp-content/themes/understrap-child/assets/imgs/basic/angebot-summer.png">
		<h3 class="angebot-title" style="text-align: center;color:#ffffff;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Sommerangebote<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our summer offers<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres d'été<?php } ?>
			</h3>
	<?php } ?>
	<?php if($terms == 'winter'){ ?>
		<img class="angebot-icon" src="/wp-content/themes/understrap-child/assets/imgs/basic/angebot-winter.png">
		<h3 class="angebot-title" style="text-align: center;color:#ffffff;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Winterangebote<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our winter offers<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres d'hiver<?php } ?>
			</h3>
	<?php } ?>
	<div class="dig-angebot">
		<?php if($hotels->have_posts()) : ?>
		<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
			<div class="dig-angebot-cell" style="width: 100%;">
				<?php $image_ange1 = get_field('top_image'); ?>
				<img class="ange-title-img" src="<?php echo $image_ange1['url']; ?>" alt="" style="margin-bottom:20px;" />
				<h5 class="angebot-title" style="text-align: center;font-weight:bold;"><?php the_field($angebot_title); ?></h5>
				<div class="body-hometext"><?php the_field($angebot_text); ?></div>
				<div class="slider-subtitle">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Price:<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix:<?php } ?>
					<?php the_field($preis); ?></div>
				<?php if( get_field('disclaimer_optional') ): ?>
					<p style="margin:0;color:#212529;padding:0px 20px 0 20px;font-size:14px;font-style:italic;text-align:center;opacity: 0.65;"><?php the_field('disclaimer_optional'); ?></p>
				<?php endif; ?>
				<?php if($terms == 'summer'){ ?>
					<div style="width:100%;height:60px;background:#d62630;color:#ffffff;margin:5px 0 0;text-align:center;"><a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF#" target="_blank" class="pfixed" style="display:block;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
						</a></div>
				<?php } ?>
				<?php if($terms == 'winter'){ ?>
					<div style="width:100%;height:60px;background:#06bebd;color:#ffffff;margin:5px 0 0;text-align:center;"><a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF#" target="_blank" class="pfixed" style="display:block;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
					</a></div>
				<?php } ?>
			</div>
		<?php endwhile; ?>
		<?php endif; wp_reset_query();?>
	</div>
</div>
<?php
}
add_shortcode( 'dig_angebot_mob_overview_shortcode', 'dig_angebot_mob_ov_shortcode');

// slider angebot mobile
function dig_angegeneral_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<style>
.flickity-page-dots{bottom: -50px!important;}
.dig-angebot .body-hometext{margin-bottom: 10px;}
.dig-angebot .slider-subtitle{text-align: center;font-weight: bold;}
</style>
<div class="ange-section" style="background: #2c2b39;">
<div class="dig-angebot">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
<div class="dig-angebot-cell" style="width: 100%;padding-top: 0px;padding-bottom: 0px;">
	<?php $image_ange1 = get_field('top_image'); ?>
<img class="ange-title-img" src="<?php echo $image_ange1['url']; ?>" alt="" style="margin-bottom:20px;" />
<h5 class="angebot-title" style="text-align: center;font-weight:bold;"><?php the_field($angebot_title); ?></h5>
<div class="body-hometext" style="padding-top:10px;"><?php the_field($angebot_text); ?></div>
<div class="slider-subtitle">
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Price:<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix:<?php } ?>
	<?php the_field($preis); ?></div>

<div class="button-jetzt" style="width:100%;height:60px;background:#4089b7;color:#ffffff;margin:5px 0 0;text-align:center;"><a href="mailto:info@hannigalp.ch?subject=<?php echo get_the_title(); ?>" class="pfixed" style="display:block;">
    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt anfragen<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Request now<?php } ?>
    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Demander maintenant<?php } ?>
</a></div>

</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
</div>
<?php
}
add_shortcode( 'dig_angegeneral_mob_overview_shortcode', 'dig_angegeneral_mob_ov_shortcode');

// slider angebot mobile
function dig_sport_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<style>
.flickity-page-dots{bottom: -50px!important;}
.dig-angebot .body-hometext{margin-bottom: 10px;}
.dig-angebot .slider-subtitle{text-align: center;font-weight: bold;}
</style>
<div class="ange-section" style="background: #2c2b39;">
<div class="dig-angebot">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
<div class="dig-angebot-cell" style="width: 100%;padding-top: 0px;padding-bottom: 0px;">
	<?php $image_ange1 = get_field('sport-infrastruktur-image-dsk'); ?>
<img class="ange-title-img" src="<?php echo $image_ange1['url']; ?>" alt="" style="margin-bottom:20px;" />
<h5 class="angebot-title" style="text-align: center;font-weight:bold;"><?php the_field('sport-infrastruktur-title'); ?></h5>
<div class="body-hometext" style="padding-top:10px;"><?php the_field('sport-infrastruktur-text'); ?></div>

</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
</div>
<?php
}
add_shortcode( 'dig_sport_mob_overview_shortcode', 'dig_sport_mob_ov_shortcode');

// slider angebot general pages
function dig_angebot_general_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="dig-angebot-dsk">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
<div class="dig-angebot-dsk-cell" style="width: 49%;min-height:960px;background:#f0f0f0;margin:10px;padding:0px;">
	<?php $image_ange1 = get_field('top_image'); ?>
  <img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
	<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 20px 20px;margin-bottom:0;font-size:28px;background:#f0f0f0;"><?php the_field($angebot_title); ?></h5>
	<div class="body-hometext" style="padding-left:20px;background:#f0f0f0;"><?php the_field($angebot_text); ?></div>
	<?php if( get_field('disclaimer_optional') ): ?>
		<div class="slider-subtitle" style="padding:0px 20px 0 20px;background: #f0f0f0;color:#06bebd;font-size:19px;position:absolute;bottom:103px;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Price:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix:<?php } ?>
			<?php the_field($preis); ?></div>
			<p style="margin:0;color:#212529;padding:0px 20px 0 20px;font-size:14px;font-style:italic;position:absolute;bottom:77px;"><?php the_field('disclaimer_optional'); ?></p>
	<?php else: ?>
		<div class="slider-subtitle" style="padding:15px 20px 0 20px;background: #f0f0f0;color:#06bebd;font-size:19px;position:absolute;bottom:103px;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Price:<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix:<?php } ?>
			<?php the_field($preis); ?></div>
	<?php endif; ?>
	<div class="button-jetzt" style="width:95%;height:60px;background:#f0f0f0;text-align:left;padding:25px 20px 0 20px;position:absolute;bottom:20px;">
		<a href="mailto:info@hannigalp.ch?subject=<?php echo get_the_title(); ?>" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt anfragen<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Request now<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Demander maintenant<?php } ?>
		</a>
	</div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_angebot_general_overview_shortcode', 'dig_angebot_general_ov_shortcode');

// slider angebot general pages
function dig_angebot_list_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
<div style="width: 48%;min-height:800px;background:#f0f0f0;margin:10px;padding:0px;float:left;position:relative;">
	<?php $image_ange1 = get_field('top_image'); ?>
  <img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 20px 20px;margin-bottom:0;font-size:28px;background:#f0f0f0;"><?php the_field($angebot_title); ?></h5>
<div class="body-hometext" style="padding-left:20px;background:#f0f0f0;"><?php the_field($angebot_text); ?></div>
<div class="slider-subtitle" style="padding:15px 20px 0 20px;background: #f0f0f0;color:#06bebd;font-size:19px;position:absolute;bottom:80px;">Preis: <?php the_field($preis); ?></div>
<div style="width:95%;height:60px;background:#f0f0f0;position:absolute;text-align:left;padding:15px 20px;bottom:20px;"><a href="#" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;">Jetzt buchen</a></div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>

<?php
}
add_shortcode( 'dig_angebot_list_overview_shortcode', 'dig_angebot_list_ov_shortcode');

// slider angebot general pages
function dig_sport_general_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="dig-angebot-dsk">
	<?php if($hotels->have_posts()) : ?>
	<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
	<div class="dig-angebot-dsk-cell" style="width: 49%;min-height:710px;background:#f0f0f0;margin:10px;padding:0px;">
		<?php $image_ange1 = get_field('sport-infrastruktur-image-dsk'); ?>
		<img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
		<h4 class="home-title" style="text-align: left;padding-left:30px;padding-bottom:0;margin-top:40px;width:90%;"><?php the_field('sport-infrastruktur-title'); ?></h4>
		<p class="body-hometext" style="text-align: left;padding-left:30px;width:90%;"><?php the_field('sport-infrastruktur-text'); ?></p>
		<div class="slider-subtitle" style="padding:15px 20px 0 30px;background: #f0f0f0;color:#06bebd;font-size:19px;position:absolute;bottom:80px;"><?php the_field('sport-infrastruktur-date'); ?> <?php the_field('sport-infrastruktur-end'); ?></div>
	</div>
	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_sport_general_overview_shortcode', 'dig_sport_general_ov_shortcode');

// slider angebot desktop
function dig_angebot_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $angebot_title = $atts['angebot_title'];
		$angebot_text = $atts['angebot_text'];
		$preis = $atts['preis'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="ange-section">
	<?php if($terms == 'summer'){ ?>
	<img class="angebot-icon" src="/wp-content/uploads/2019/10/summer_icon.png">
	<h3 class="angebot-title" style="text-align: center;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Sommerangebote<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our summer offers<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres d'été<?php } ?>
	</h3>
	<?php } ?>
	<?php if($terms == 'winter'){ ?>
	<img class="angebot-icon" src="/wp-content/uploads/2019/10/winter_icon.png">
	<h3 class="angebot-title" style="text-align: center;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Unsere Winterangebote<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Our winter offers<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Nos offres d'hiver<?php } ?>
	</h3>
	<?php } ?>
<div class="dig-angebot-dsk">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
	<?php if($terms == 'summer'){ ?>
		<div class="dig-angebot-dsk-cell" style="width: 49%;min-height:1020px;background:#f0f0f0;margin:10px;padding:0px;">
	<?php } ?>
	<?php if($terms == 'winter'){ ?>
		<div class="dig-angebot-dsk-cell" style="width: 49%;min-height:920px;background:#f0f0f0;margin:10px;padding:0px;">
	<?php } ?>
<?php $image_ange1 = get_field('top_image'); ?>
	<img class="" src="<?php echo $image_ange1['url']; ?>" alt="" />
<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 30px 20px 0 20px;font-size:28px;min-height:96px;"><?php the_field($angebot_title); ?></h5>
<div class="body-hometext"><?php the_field($angebot_text); ?></div>

<?php if( get_field('disclaimer_optional') ): ?>
	<div class="slider-subtitle" style="padding:0px 20px 0 20px;background: #f0f0f0;color:#06bebd;font-size:19px;position:absolute;bottom:103px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Price:<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix:<?php } ?>
		<?php the_field($preis); ?></div>
		<p style="margin:0;color:#212529;padding:0px 20px 0 20px;font-size:14px;font-style:italic;position:absolute;bottom:77px;"><?php the_field('disclaimer_optional'); ?></p>
<?php else: ?>
	<div class="slider-subtitle" style="padding:15px 20px 0 20px;background: #f0f0f0;color:#06bebd;font-size:19px;position:absolute;bottom:103px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Preis:<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Price:<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Prix:<?php } ?>
		<?php the_field($preis); ?></div>
<?php endif; ?>

<?php if($terms == 'summer'){ ?>
<div style="width:95%;height:30px;background:#f0f0f0;text-align:left;padding:0px 20px;position:absolute;bottom:20px;"><a href="<?php the_field('buchen_button_link'); ?>" class="pfixed" target="_blank" style="background:#d62630;color:#ffffff;padding: 5px 20px;width:130px;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
</a></div>
<?php } ?>
<?php if($terms == 'winter'){ ?>
<div style="width:95%;height:30px;background:#f0f0f0;text-align:left;padding:0px 20px;position:absolute;bottom:20px;"><a href="<?php the_field('buchen_button_link'); ?>" class="pfixed" target="_blank" style="background:#06bebe;color:#ffffff;padding: 5px 20px;width:130px;">
	  <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
	</a></div>
<?php } ?>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
</div>
<?php
}
add_shortcode( 'dig_angebot_dsk_overview_shortcode', 'dig_angebot_dsk_ov_shortcode');
// slider home rooms desktop
function dig_homerooms_single_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="ange-section">
<div class="dig-angebot-dsk">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
<div class="dig-angebot-dsk-cell" style="width: 100%;margin:0 2%;">
	<div style="width:70%;float:left;">
		<?php $image = get_field('room-preview-image'); ?>
		<img style="height:380px;" src="<?php echo $image['url']; ?>" />
	</div>
	<div style="width:30%;float:left;">
		<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 20px 50px 0 25px;font-size:28px;margin-bottom:1rem;"><?php the_field('room-title'); ?></h5>
		<div class="slider-subtitle" style="padding:0 20px;">
			<div id="amenities_icons_container">
			<?php $cnt=0;
					 while( have_rows('ameneties') && $cnt<5 ): the_row();
							 $icon = get_sub_field('amenity_icons');
							 $amenity_title = get_sub_field('amenity_title');
							 ?>
							 <div class="icons_display">
									 <span class="<?php echo $icon; ?>"></span>
									 <span class="amenity-title amenity-title-<?php echo $icon; ?>"><?php echo $amenity_title; ?></span>
							 </div>
							 <?php $cnt++;
					 endwhile;
			 ?>
			</div>
		</div>
		<div class="body-hometext more" style="padding:0px 20px 5px 25px;margin-top:0.8rem!important;"><?php the_field('room_text_preview'); ?></div>
		<div style="width:100%;height:40px;text-align:left;padding:10px 15px 0 25px;position:absolute;bottom:20px;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 25px;width:130px;">Zum Zimmer<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/?lang=en" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 25px;width:130px;">Enter the room<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/?lang=fr" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 25px;width:130px;">Plus d’informations<?php } ?>
				</a></div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
</div>
<?php
}
add_shortcode( 'dig_homerooms_single_dsk_overview_shortcode', 'dig_homerooms_single_dsk_ov_shortcode');
// slider home rooms desktop
function dig_homerooms_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="ange-section">
<div class="dig-angebot-dsk">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
<div class="dig-angebot-dsk-cell" style="width: 48%;margin:0 2%;">
	<div style="width:40%;float:left;">
		<?php $image = get_field('room_img_slider'); ?>
		<img src="<?php echo $image['url']; ?>" />
	</div>
	<div style="width:60%;float:left;">
		<h5 class="angebot-title" style="text-align: left;font-weight:bold;padding: 15px 15px 0 15px;font-size:28px;"><?php the_field('room-title'); ?></h5>
		<div class="slider-subtitle" style="padding:0 15px;"> <?php the_field('amenities'); ?></div>
		<div class="body-hometext"><?php the_field('room_text_preview'); ?></div>
		<div style="width:100%;height:65px;text-align:left;padding:10px 15px 0 15px;"><a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=3904" target="_blank" class="pfixed" style="background:#4089b7;color:#ffffff;padding: 5px 20px;width:130px;">Jetzt buchen</a></div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
</div>
<?php
}
add_shortcode( 'dig_homerooms_dsk_overview_shortcode', 'dig_homerooms_dsk_ov_shortcode');

// slider spa structures
function dig_spa_infra_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $spa = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="dig-infras">
<?php if($spa->have_posts()) : ?>
<?php while($spa->have_posts()) : $spa->the_post();
$image = get_field('preview-image'); ?>
<div class="infra-preview">
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/spa_infrastructure/<?php the_field('self_slug'); ?>/"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/spa_infrastructure/<?php the_field('self_slug'); ?>/?lang=en"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/spa_infrastructure/<?php the_field('self_slug'); ?>/?lang=fr"><?php } ?>
	<img src="<?php echo $image['url']; ?>" alt="" />
		<div class="plus-sign" style="background:url(/wp-content/uploads/2020/02/plus.png) no-repeat;"></div></a>
	<h6 class="infra-title"><?php the_field('title'); ?></h6>

</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_spa_infra_mob_overview_shortcode', 'dig_spa_infra_mob_ov_shortcode');

// slider spa structures
function dig_spa_infra_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $spa = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="dig-infras">
<?php if($spa->have_posts()) : ?>
<?php while($spa->have_posts()) : $spa->the_post();
$image = get_field('preview-image'); ?>
<div class="infra-preview">
	<img src="<?php echo $image['url']; ?>" alt="" />
	<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a data-fancybox data-type="iframe" data-src="/spa_infrastructure/<?php the_field('self_slug'); ?>/" href="javascript:;"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a data-fancybox data-type="iframe" data-src="/spa_infrastructure/<?php the_field('self_slug'); ?>/?lang=en" href="javascript:;"><?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a data-fancybox data-type="iframe" data-src="/spa_infrastructure/<?php the_field('self_slug'); ?>/?lang=fr" href="javascript:;"><?php } ?>
		<div class="plus-sign" style="background:url(/wp-content/uploads/2020/02/plus.png) no-repeat;"></div></a>
	<h6 class="infra-title"><?php the_field('title'); ?></h6>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_spa_infra_dsk_overview_shortcode', 'dig_spa_infra_dsk_ov_shortcode');

// slider gastronomie
function dig_gastro_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $header_bg = $atts['gastro_img'];
    $header_title = $atts['header-title'];
		$button_title = $atts['button-title'];
    $button_link = $atts['button_hotel_link'];
		$sub_title = $atts['sub-title'];
		$amenities = $atts['rest_amenities'];
		$description = $atts['rest_description'];

    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div class="dig-gastro">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post();
$image = get_field($header_bg); ?>
<div class="dig-gastro-cell">
<img class="" src="<?php echo $image['url']; ?>" alt="" />
<h2 class="header-title" style="text-align: center;"><?php the_field($header_title); ?></h2>
<?php if(!empty(get_field($button_title))){ ?>
<a href="#" class="button-link"><button class="button_round_red"><?php the_field($button_title); ?></button></a>
<?php } ?>
<?php if(!empty(get_field($sub_title))): ?>
<div class="slider-subtitle"><?php the_field($sub_title); ?></div>
<?php endif; ?>
<?php if(!empty(get_field($amenities))): ?>
<div class="slider-subtitle"><?php the_field($amenities); ?></div>
<?php endif; ?>
<?php if(!empty(get_field($description))): ?>
<div class="body-hometext" style="text-align: center;"><?php the_field($description); ?></div>
<?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_gastro_mob_overview_shortcode', 'dig_gastro_mob_ov_shortcode');

// hotels desktop slider
function dig_hotels_desk_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];$postvar = $atts['post-type'];$terms = $atts['terms'];$address = $atts['address'];$hotels = new WP_Query(
    array(
        'post_type' => $postvar,'orderby' => 'date','order'   => 'ASC','post_status' => 'publish','tax_query' => array(
    array(
        'taxonomy' => $tax_name,'field' => 'slug','terms' => $terms,
    ))));
?>
<div class="dig-hoteldesk-block-slider inverted">
<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post(); ?>
	<div class="dig-hoteldesk-block-slider-cell" style="width: 100%;">
		<div id="left-side" style="float:left;width:50%;background:transparent;">
			<div id="slide1desk" class="carousel slide" data-ride="carousel" data-interval="false" style="width:90%;margin:15px auto;">
				<ol class="carousel-indicators">
			    <li data-target="#slide1desk" data-slide-to="0" class="active"></li>
			    <li data-target="#slide1desk" data-slide-to="1"></li>
			    <li data-target="#slide1desk" data-slide-to="2"></li>
	  		</ol>
				<div class="carousel-inner">
					<?php 	$images = get_field('hotels_page_slider_desktop');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					<div class="carousel-item"><img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="right-side" style="float:left;width:50%;background:transparent;padding:15px;">
			<h2 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:75px;"><?php the_field('header-title'); ?></h2>
			<p class="dig-hotel-block-subtitle" style="margin-left:15px;max-width:700px;">
			<?php $about_section = get_field('about_section');$about_text = $about_section['about_text']; ?>
			<?php echo $about_text; ?></p>
			<a href="#" class="button-zum-invert"><button class="button_round_red">Zum Zimmer</button></a>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_hotels_shortcode', 'dig_hotels_desk_shortcode');

// mvhplus mobile
function dig_mvhplus_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];$postvar = $atts['post-type'];$terms = $atts['terms'];
		$ange_availability = $atts['ange-availability'];$ange_image = $atts['ange-image'];$ange_title = $atts['ange-title'];
		$ange_text = $atts['ange-text'];$ange_date = $atts['ange-date'];$ange_auf = $atts['ange_auf'];
    $mvhplus = new WP_Query(
    array(
        'post_type' => $postvar,'orderby' => 'date','order'   => 'ASC',
        'post_status' => 'publish','tax_query' => array(
    array(
        'taxonomy' => $tax_name,'field' => 'slug','terms' => $terms,
    ))));
?>
<?php if($mvhplus->have_posts()) : ?>
<?php while($mvhplus->have_posts()) : $mvhplus->the_post();?>
<div id="<?php echo $terms;?>" class="mvhplus-dine">
<?php if($terms == 'dinearound'){ ?>
	<img class="dine-elipse" src="/wp-content/themes/understrap-child/assets/imgs/basic/dine-elipse.png" alt="" />
	<h4 class="pretitle" style="text-align: left;">Dine Around+</h4>
	<span class="availability"><?php the_field($ange_availability); ?></span>
<?php } ?>
<?php if($terms == 'spaaround'){ ?>
	<img class="dine-elipse" src="/wp-content/themes/understrap-child/assets/imgs/basic/dine-elipse.png" alt="" /><h4 class="pretitle" style="text-align: left;">Spa Around+</h4>
	<div><span class="availability"><?php the_field($ange_availability); ?></span></div>
<?php } ?>
<?php if($terms == 'aktivitaten'){ ?>
	<img class="dine-elipse" src="/wp-content/themes/understrap-child/assets/imgs/basic/dine-elipse.png" alt="" /><h4 class="pretitle" style="text-align: left;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten+<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Activities+<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les activités+<?php } ?>
		</h4>
		<div><span class="availability"><?php the_field($ange_availability); ?></span></div>
<?php } ?>
<?php if( get_field('ange-image') ): ?>
<?php $image = get_field('ange-image'); ?>
	<img class="" src="<?php echo $image['url']; ?>" alt="" />
<?php endif; ?>
	<h4 class="" style="text-align: left;margin-left:15px;margin-top:15px;font-weight:bold;font-weight:bold;"><?php the_field($ange_title); ?></h4>
	<div><span class="mvhplus-text"><?php the_field($ange_text); ?></span></div>
	<?php if($terms == 'dinearound'){ ?>
		<?php if(!empty(get_field($ange_auf))){ ?>
		<div class="mvhplus-textdiv"><span class="mvhplus-text"><?php the_field($ange_auf); ?></span></div>
		<?php } ?>
<?php if(!empty(get_field($ange_date))){ ?>
	<div><span class="mvhplus-date" style="font-size:1.3rem;margin-top:10px;">--- <?php the_field('ange-date1'); ?></span>
		<span class="mvhplus-date" style="font-size:1.3rem;margin-top:10px;"><?php the_field($ange_date); ?></span></div>
<?php }} ?>
<?php if($terms == 'spaaround'){ ?>
	<a href="<?php the_field('button_link_hannigspa'); ?>" target="_blank" class="button-link"><button class="button_round_red"><?php the_field('button_hannigspa'); ?></button></a>
<?php } ?>
<?php if($terms == 'aktivitaten'){ ?>
	<div><span class="mvhplus-date" style="font-size:1.3rem;margin-top:10px;">--- <?php the_field('ange-date1'); ?></span>
			<span class="mvhplus-date" style="font-size:1.3rem;margin-top:10px;"><?php the_field($ange_date); ?></span></div>
<?php } ?>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
<?php
}
add_shortcode( 'dig_mvhplus_mob_overview_shortcode', 'dig_mvhplus_mob_ov_shortcode');
// mvhplus desktop
function dig_mvhplus_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];$postvar = $atts['post-type'];$terms = $atts['terms'];
		$ange_availability = $atts['ange-availability'];$ange_image = $atts['ange-image'];$ange_title = $atts['ange-title'];
		$ange_text = $atts['ange-text'];$ange_date = $atts['ange-date'];$ange_date1 = $atts['ange-date1'];$ange_auf = $atts['ange_auf'];
    $mvhplus = new WP_Query(
    array(
        'post_type' => $postvar,'orderby' => 'date','order'   => 'ASC',
        'post_status' => 'publish','tax_query' => array(
    array(
        'taxonomy' => $tax_name,'field' => 'slug','terms' => $terms,
    ))));
?>
<?php if($mvhplus->have_posts()) : ?>
<?php while($mvhplus->have_posts()) : $mvhplus->the_post();?>
	<div id="<?php echo $terms;?>dsk" class="mvhplus-dine">
<?php if($terms == 'dinearound'){ ?>
	<img class="dine-elipse" src="/wp-content/themes/understrap-child/assets/imgs/basic/dine-elipse.png" alt="" />
	<h4 class="pretitle" style="text-align: left;">Dine Around+</h4>
	<span class="availability"><?php the_field($ange_availability); ?></span>
<?php } ?>
<?php if($terms == 'spaaround'){ ?>
	<img class="dine-elipse" src="/wp-content/themes/understrap-child/assets/imgs/basic/dine-elipse.png" alt="" /><h4 class="pretitle" style="text-align: left;">Spa Around+</h4><div><span class="availability"><?php the_field($ange_availability); ?></span></div>
<?php } ?>
<?php if($terms == 'aktivitaten'){ ?>
	<img class="dine-elipse" src="/wp-content/themes/understrap-child/assets/imgs/basic/dine-elipse.png" alt="" /><h4 class="pretitle" style="text-align: left;">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten+<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Activities+<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les activités+<?php } ?>
		</h4><div><span class="availability"><?php the_field($ange_availability); ?></span></div>
<?php } ?>
<?php if( get_field('ange-image') ): ?>
<?php $image = get_field('ange-image'); ?>
	<img class="" src="<?php echo $image['url']; ?>" alt="" />
<?php endif; ?>
	<?php if($terms == 'aktivitaten'){ ?>
		<span class="mvhplus-date2" style="font-size:1rem;margin-top:10px;">--- <?php the_field('ange-date1'); ?></span>
		<span class="mvhplus-date2" style="font-size:1rem;margin-top:10px;"><?php the_field($ange_date); ?></span>

		<h4 class="" style="text-align: left;margin-left:15px;font-weight:bold;font-weight:bold;height:56px;"><?php the_field($ange_title); ?></h4>
	<?php }else if($terms == 'dinearound'){ ?>
		<span class="mvhplus-date2" style="font-size:1rem;margin-top:10px;">--- <?php the_field($ange_date); ?></span>
		<h4 class="" style="text-align: left;margin-left:15px;font-weight:bold;font-weight:bold;height:56px;"><?php the_field($ange_title); ?></h4>
	<?php }else{ ?>
	<h4 class="" style="text-align: left;margin-left:15px;margin-top:35px;font-weight:bold;font-weight:bold;height:56px;"><?php the_field($ange_title); ?></h4>
	<?php } ?>
	<div class="mvhplus-textdiv" style="padding-top:0px;"><span class="mvhplus-text"><?php the_field($ange_text); ?></span></div>
<?php if($terms == 'dinearound'){ ?>
	<?php if(!empty(get_field($ange_auf))){ ?>
	<div class="mvhplus-textdiv" style="position:absolute;top:595px;"><span class="mvhplus-text"><?php the_field($ange_auf); ?></span><br>
	<span class="mvhplus-text"><?php the_field('aufpreis_detail'); ?></span></div>
	<?php } ?>
<?php } ?>
<?php if($terms == 'spaaround'){ ?>
	<a href="<?php the_field('button_link_hannigspa'); ?>" class="button-link" style="position:absolute;top:560px;width:330px;"><button class="button_round_red"><?php the_field('button_hannigspa'); ?></button></a>
<?php } ?>

</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
<?php
}
add_shortcode( 'dig_mvhplus_dsk_overview_shortcode', 'dig_mvhplus_dsk_ov_shortcode');
// rooms desktop
function dig_rooms_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $rooms = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div id="rooms-wrapper">
	<?php if($rooms->have_posts()) : ?>
	<?php while($rooms->have_posts()) : $rooms->the_post();
		$image = get_field('room-gallery');
		$image_1 = $image[0];  ?>
		<div id="left-side" style="clear:both;float:left;width:50%;background:url(<?php echo $image_1['url']; ?>) no-repeat;background-position: bottom center;background-size:cover;min-height:450px;">
		</div>
		<div id="right-side" style="float:left;width:50%;background:transparent;min-height: 450px;position:relative;padding:45px 45px 0px 45px;">
			<h4 class="room-title-prev"><?php the_field('room-title'); ?></h4>
			<p class="room-subtitle-prev"><?php the_field('room-text'); ?></p>
			<div id="amenities_icons_container">
			<?php $cnt=0;
					 while( have_rows('ameneties') && $cnt<6 ): the_row();
							 $icon = get_sub_field('amenity_icons');
							 $amenity_title = get_sub_field('amenity_title');
							 ?>
							 <div class="icons_display">
									 <span class="<?php echo $icon; ?>"></span>
									 <span class="amenity-title amenity-title-<?php echo $icon; ?>"><?php echo $amenity_title; ?></span>
							 </div>
							 <?php $cnt++; endwhile; ?>
		 </div>

		 <div style="width:95%;height:60px;background:transparent;text-align:left;position:absolute;bottom:16px;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/hotelzimmer/<?php the_field('self-slug'); ?>/" style="width:180px;height:65px;color:#ffffff;text-align:left;padding:10px 15px 0 15px;"><?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/?lang=en" style="width:180px;height:65px;color:#ffffff;text-align:left;padding:10px 15px 0 15px;"><?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/chambres/<?php the_field('self-slug'); ?>/?lang=fr" style="width:180px;height:65px;color:#ffffff;text-align:left;padding:10px 15px 0 15px;"><?php } ?>
			 	<p class="pfixed" style="text-align:center;background:#4089b7;border:1px solid #4089b7;padding: 5px 20px;width:180px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zum Zimmer<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Enter the room<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Plus d’informations<?php } ?>
				</p>
		 	</a></div>
		</div>
	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_rooms_dsk_overview_shortcode', 'dig_rooms_dsk_ov_shortcode');
// rooms desktop inverted
function dig_rooms_dskin_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $rooms = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div id="rooms-wrapper">
	<?php if($rooms->have_posts()) : ?>
	<?php while($rooms->have_posts()) : $rooms->the_post();
		$image = get_field('room-gallery');
		$image_1 = $image[0];  ?>
		<div id="left-side" style="clear:both;float:left;width:50%;background:transparent;padding:45px 45px 0px 45px;position:relative;min-height:450px;">
			<h4 class="room-title-prev"><?php the_field('room-title'); ?></h4>
			<p class="room-subtitle-prev"><?php the_field('room-text'); ?></p>
			<div id="amenities_icons_container">
			<?php $cnt=0;
				 while( have_rows('ameneties') && $cnt<6 ): the_row();
						 $icon = get_sub_field('amenity_icons');
						 $amenity_title = get_sub_field('amenity_title');

						 ?>
						 <div class="icons_display">
								 <span class="<?php echo $icon; ?>"></span>
								 <span class="amenity-title amenity-title-<?php echo $icon; ?>"><?php echo $amenity_title; ?></span>
						 </div>
						 <?php $cnt++; endwhile; ?>
		  </div>

			<div style="width:95%;height:60px;background:transparent;text-align:left;position:absolute;bottom:16px;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/hotelzimmer/<?php the_field('self-slug'); ?>/" style="width:180px;height:65px;color:#ffffff;text-align:left;padding:10px 15px 0 15px;"><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/?lang=en" style="width:180px;height:65px;color:#ffffff;text-align:left;padding:10px 15px 0 15px;"><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/chambres/<?php the_field('self-slug'); ?>/?lang=fr" style="width:180px;height:65px;color:#ffffff;text-align:left;padding:10px 15px 0 15px;"><?php } ?>
					<p class="pfixed" style="text-align:center;background:#4089b7;border:1px solid #4089b7;padding: 5px 20px;width:180px;">
						<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zum Zimmer<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Enter the room<?php } ?>
						<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Plus d’informations<?php } ?>
					</p>
				</a></div>
	</div>
	<div id="right-side" style="float:left;width:50%;background:url(<?php echo $image_1['url']; ?>) no-repeat;background-position: bottom center;background-size:cover;min-height:450px;">
	</div>

	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_rooms_dskin_overview_shortcode', 'dig_rooms_dskin_ov_shortcode');

// rooms mobile
function dig_rooms_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];

    $rooms = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>
<div id="rooms-wrapper">
	<?php if($rooms->have_posts()) : ?>
	<?php while($rooms->have_posts()) : $rooms->the_post();
	$image = get_field('room-preview-image');
	$image_gal = get_field('room-gallery');
	$image_prev = $image_gal[0]; ?>
	<div class="room-prev">
		<div class="room-left" style="width: 42%;background:url(<?php echo $image_prev['url']; ?>) no-repeat;">
		</div>
		<div class="room-right" style="width:58%;">
			<h5 class="room-title-prev"><?php the_field('room-title'); ?></h5>
			<p class="room-subtitle-prev"><?php the_field('room-subtitle'); ?></p>
			<div id="amenities_icons_container" style="height:60px;">
				<?php $cnt=0;
	 			while( have_rows('ameneties') && $cnt<7 ): the_row();
				 $icon = get_sub_field('amenity_icons');
				 $amenity_title = get_sub_field('amenity_title');
				 ?>
				 <div class="icons_display">
						 <span class="<?php echo $icon; ?>"></span>
				 </div>
				<?php $cnt++; endwhile; ?>
			</div>
			<div style="width:96%;height:40px;background:#4089b7;color:#ffffff;margin:0 auto 20px auto;text-align:center;">
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/" class="pfixed" style="display:block;padding-top:5px;">Zum Zimmer</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/?lang=en" class="pfixed" style="display:block;padding-top:5px;">Enter the room</a><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="/rooms/<?php the_field('self-slug'); ?>/?lang=fr" class="pfixed" style="display:block;padding-top:5px;">Plus d’informations</a><?php } ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; wp_reset_query();?>
</div>
<?php
}
add_shortcode( 'dig_rooms_mob_overview_shortcode', 'dig_rooms_mob_ov_shortcode');
// Grachen Events Mobile
function dig_events_mob_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $event_image = $atts['event_image'];
    $event_title = $atts['event_title'];
		$event_text = $atts['event_text'];
    $event_date = $atts['event_date'];
		$event_date_end = $atts['event_date_end'];

    $events = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>

<?php if($events->have_posts()) : ?>
<?php while($events->have_posts()) : $events->the_post();?>
	<div id="<?php echo $terms;?>-m" class="events">
		<?php if( get_field('event_image') ): ?>
		<?php $image = get_field('event_image'); ?>
		<img class="wp-image-23" src="<?php echo $image['url']; ?>" alt="" />
		<?php endif; ?>
			<?php if(empty(get_field($event_date))){ ?>
				<p class="event-title-mob nodate">
				<span class="event-title-in"><?php the_field($event_title); ?></span>
			<?php } ?>
			<?php if(!empty(get_field($event_date))){ ?>
				<p class="event-title-mob hasdate">
				<span class="event-title-in"><?php the_field($event_title); ?></span>
				<span class="event-date">--- <?php the_field($event_date); ?></span>
			<?php } ?>
			<?php if(!empty(get_field($event_date_end))): ?>
				<span class="event-dateend"><?php the_field($event_date_end); ?></span>
			<?php endif; ?>
				</p>
		<?php if($terms == 'sommer'){ ?>
		<img class="season-icon" src="/wp-content/uploads/2019/10/summer_icon.png" alt="summer-icon" />
		<?php } ?>
		<?php if($terms == 'winter'){ ?>
		<img class="season-icon" src="/wp-content/uploads/2019/10/winter_icon.png" alt="winter-icon" />
		<?php } ?>

		<div><span class="event-text"><?php the_field($event_text); ?></span></div>
	</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
<?php
}
add_shortcode( 'dig_events_mob_overview_shortcode', 'dig_events_mob_ov_shortcode');
// Grachen Events Desktop
function dig_events_dsk_ov_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
    $event_image = $atts['events-image-dsk'];
    $event_title = $atts['event_title'];
		$event_text = $atts['event_text'];
    $event_date = $atts['event_date'];
		$event_date_end = $atts['event_date_end'];

    $events = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>

<?php if($events->have_posts()) : ?>
<?php while($events->have_posts()) : $events->the_post();?>
<div id="<?php echo $terms;?>" class="events">
	<?php if( get_field('event_image') ): ?>
	<?php $image = get_field('events-image-dsk'); ?>
	<img class="wp-image-23" src="<?php echo $image['url']; ?>" alt="" />
	<?php endif; ?>
	<?php if($terms == 'sommer'){ ?>
	<img class="season-icon" src="/wp-content/themes/understrap-child/assets/imgs/basic/summer-dsk.jpg" alt="summer-icon" />
	<span class="pretitle"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>-- Aktivitäten Sommer<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='en'){ ?>-- Summer activities<?php } ?>
	<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>-- Activités été<?php } ?>
	</span>
	<?php } ?>
	<?php if($terms == 'winter'){ ?>
	<img class="season-icon" src="/wp-content/themes/understrap-child/assets/imgs/basic/winter-dsk.jpg" alt="winter-icon" />
	<span class="pretitle">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>-- Aktivitäten Winter<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>-- Winter activities<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>-- Activités d'hiver<?php } ?>
		</span>
	<?php } ?>
	<?php if(empty(get_field($event_date))){ ?>
		<p class="event-title-mob nodate">
		<span class="event-title-in"><?php the_field($event_title); ?></span>
		<?php } ?>
		<?php if(!empty(get_field($event_date))){ ?>
		<p class="event-title-mob hasdate">
		<span class="event-title-in"><?php the_field($event_title); ?></span>
		<span class="event-date">--- <?php the_field($event_date); ?></span>
		<?php } ?>
		<?php if(!empty(get_field($event_date_end))): ?>
		<span class="event-dateend"><?php the_field($event_date_end); ?></span>
	<?php endif; ?>
	</p>


<div><span class="event-text"><?php the_field($event_text); ?></span></div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>
<?php
}
add_shortcode( 'dig_events_dsk_overview_shortcode', 'dig_events_dsk_ov_shortcode');

// Shortcode Hotel Block - Hotels Page
function dig_block_mob_hotels_shortcode( $atts ) {
    $tax_name = $atts['tax-name'];
    $postvar = $atts['post-type'];
    $terms = $atts['terms'];
		$address = $atts['address'];


    $hotels = new WP_Query(
    array(
        'post_type' => $postvar,
        'orderby' => 'date',
        'order'   => 'ASC',
        'post_status' => 'publish',
         'tax_query' => array(
    array(
        'taxonomy' => $tax_name,
        'field' => 'slug',
        'terms' => $terms,
    ))));
?>


<?php if($hotels->have_posts()) : ?>
<?php while($hotels->have_posts()) : $hotels->the_post();
?>
<?php if($terms == 'hannigalp'){ ?>
<div class="dig-hotel-block hannigalp">
<?php } ?>
<?php if($terms == 'family-hotel-spa-desiree'){ ?>
<div class="dig-hotel-block desiree">
<?php } ?>
<?php if($terms == 'hotel-gracherhof-gourmet-spa'){ ?>
<div class="dig-hotel-block gracherhof">
<?php } ?>
<div>
<div class="dig-hotel-block-slider" style="width: 100%;">
	<?php
    $images = get_field('hotels_page_slider');
    if( $images ): ?>
    <?php foreach( $images as $image ): ?>
    <div class="dig-hotel-block-slider-cell" style="width: 100%;"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
<?php endforeach; ?>
</div>
<h5 class="dig-hotel-block-name" style="margin-left:15px;"><?php the_field('hotel_name'); ?></h5>
<h6 class="dig-hotel-block-subtitle" style="margin-left:15px;"><?php the_field('subtitle'); ?></h6>
<!-- <a href="#" class="button-link"><button class="button_round_red">Zum Zimmer</button></a> -->
<div class="dig-hotel-block-tabs">
	<?php if($terms == 'hannigalp'){ ?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item"><a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a></li>
	  <li class="nav-item"><a class="nav-link" id="rooms-tab" data-toggle="tab" href="#rooms" role="tab" aria-controls="rooms" aria-selected="false">Rooms</a></li>
	  <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab"><?php the_field('about_section'); ?></div>
	  <div class="tab-pane fade" id="rooms" role="tabpanel" aria-labelledby="rooms-tab"><?php the_field('rooms_section'); ?>[placeholder - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.]</div>
	  <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab"><?php the_field('reviews_section'); ?>[placeholder - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.]</div>
	</div>
	<?php } ?>
	<?php if($terms == 'family-hotel-spa-desiree'){ ?>
	<ul class="nav nav-tabs" id="myTab2" role="tablist">
	  <li class="nav-item"><a class="nav-link active" id="about-tab2" data-toggle="tab" href="#about2" role="tab" aria-controls="about2" aria-selected="true">About</a></li>
	  <li class="nav-item"><a class="nav-link" id="rooms-tab2" data-toggle="tab" href="#rooms2" role="tab" aria-controls="rooms2" aria-selected="false">Rooms</a></li>
	  <li class="nav-item"><a class="nav-link" id="reviews-tab2" data-toggle="tab" href="#reviews2" role="tab" aria-controls="reviews2" aria-selected="false">Reviews</a></li>
	</ul>
	<div class="tab-content" id="myTabContent2">
	  <div class="tab-pane fade show active" id="about2" role="tabpanel" aria-labelledby="about-tab2"><?php the_field('about_section'); ?></div>
	  <div class="tab-pane fade" id="rooms2" role="tabpanel" aria-labelledby="rooms-tab2"><?php the_field('rooms_section'); ?>[placeholder - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.]</div>
	  <div class="tab-pane fade" id="reviews2" role="tabpanel" aria-labelledby="reviews-tab2"><?php the_field('reviews_section'); ?>[placeholder - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.]</div>
	</div>
	<?php } ?>
	<?php if($terms == 'hotel-gracherhof-gourmet-spa'){ ?>
	<ul class="nav nav-tabs" id="myTab3" role="tablist">
	  <li class="nav-item"><a class="nav-link active" id="about-tab3" data-toggle="tab" href="#about3" role="tab" aria-controls="about3" aria-selected="true">About</a></li>
	  <li class="nav-item"><a class="nav-link" id="rooms-tab3" data-toggle="tab" href="#rooms3" role="tab" aria-controls="rooms3" aria-selected="false">Rooms</a></li>
	  <li class="nav-item"><a class="nav-link" id="reviews-tab3" data-toggle="tab" href="#reviews3" role="tab" aria-controls="reviews3" aria-selected="false">Reviews</a></li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="about3" role="tabpanel" aria-labelledby="about-tab3"><?php the_field('about_section'); ?></div>
	  <div class="tab-pane fade" id="rooms3" role="tabpanel" aria-labelledby="rooms-tab3"><?php the_field('rooms_section'); ?>[placeholder - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.]</div>
	  <div class="tab-pane fade" id="reviews3" role="tabpanel" aria-labelledby="reviews-tab3"><?php the_field('reviews_section'); ?>[placeholder - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.]</div>
	</div>
	<?php } ?>
</div>
<div class="dig-hotel-block-address">

</div>
<div class="hotel-locationname">Location</div><span class="hotel-locationcenter"><img src="/wp-content/themes/understrap-child/assets/imgs/basic/location_icon.png" /><?php the_field('distance_center'); ?> km to center</span>
<div class="dig-hotel-block-map"><?php
$location = get_field('hotel_map');
if( $location ): ?>
  <div class="acf-map" data-zoom="16">
      <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
  </div>
<?php endif; ?></div>
</div>
<div style="font-size:20px;padding-left:15px;padding-bottom:15px;"><?php the_field('address'); ?></div>
<?php if($terms == 'hannigalp'){ ?>
<div style="width:100%;height:60px;background:#8eb740;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed">Zum Zimmer</p></div>
<?php } ?>
<?php if($terms == 'family-hotel-spa-desiree'){ ?>
<div style="width:100%;height:60px;background:#4089b7;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed">Zum Zimmer</p></div>
<?php } ?>
<?php if($terms == 'hotel-gracherhof-gourmet-spa'){ ?>
<div style="width:100%;height:60px;background:#9c40b7;color:#ffffff;margin:5px 0 0;text-align:center;"><p class="pfixed">Zum Zimmer</p></div>
<?php } ?>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; wp_reset_query();?>


<?php
}
add_shortcode( 'dig_block_mobile_hotels_shortcode', 'dig_block_mob_hotels_shortcode');
