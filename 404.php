<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">


	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row" style="background:#2c2b39;">
		<style>
		.title-logo {width: 260px;margin:50px auto;}
		.page-title{color:#ffffff;margin-bottom: 40px;}
		.page-header{text-align: center;margin:0 auto 60px auto;}
		.fourohfour{filter: drop-shadow(6px 8px 7px #000);max-width: 700px;margin-bottom: 40px;}
		.error-404.not-found{display: none;}
		@media (max-width:769px){
			.title-logo {width: 100%;margin:50px auto;}
			.page-title{color:#ffffff;margin-bottom: 40px;}
			.page-header{text-align: center;margin:0 auto 60px auto;}
			.fourohfour{filter: drop-shadow(6px 8px 7px #000);max-width: 90%;margin-bottom: 40px;}
		}
		</style>
			<header class="page-header" style="margin-top: 70px;">
				<h1 class="page-title">
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Hoppla, das war die falsche Abfahrt.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Oops, you took the wrong turn.<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Oups, vous avez pris le mauvais chemin.<?php } ?>
				</h1>
				<?php if(ICL_LANGUAGE_CODE=='de'){ ?><a href="https://hannigalp.ch/"><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?><a href="https://hannigalp.ch/?lang=en"><?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><a href="https://hannigalp.ch/?lang=fr"><?php } ?>
					<img class="fourohfour" src="/wp-content/uploads/2020/05/404-error.jpg" />
				<h1 class="page-title"><i class="fa fa-arrow-left"></i>
					<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Zurück zum Start<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Back to the start<?php } ?>
					<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Retour au début<?php } ?>
				</div></a>
			</header>


		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'understrap' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">

									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'understrap' ); ?></h2>

									<ul>
										<?php
										wp_list_categories(
											array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
											)
										);
										?>
									</ul>

								</div><!-- .widget -->

							<?php endif; ?>

							<?php

							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'understrap' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer();
