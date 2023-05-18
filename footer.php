<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<!-- Back to top button -->
<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=&guests=&in=&out=&coupon=" id="btt-booknow" target="_blank">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/basic/appointment_128.png" width="" height="" alt="" />
    <span>
        <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Jetzt buchen<?php } ?>
        <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Book now<?php } ?>
        <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Réservez<?php } ?>
    </span>
</a>
<a id="btt-btn"></a>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
