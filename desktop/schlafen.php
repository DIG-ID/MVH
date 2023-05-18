<div class="row desktop-version">

<style>
#footbar{display: none;}
@media (min-width: 768px) {
	html{overflow: hidden;background: #ffffff;margin: 50px 25% 50px 2%;}
	#wrapper-footer-full,#wrapper-navbar{display: none;}
	body > .site > .wrapper > #content > .row{background: #ffffff;}
}
</style>
<div id="section-about-content" style="width:100%;background:#ffffff;padding-bottom:35px;max-width:1115px;margin:0 auto;">
		<h5 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:5px;color:#dc2326;"><?php the_field('title'); ?></h5>
		<h5 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:10px;"><?php the_field('subtitle'); ?></h5>
		<h5 class="dig-hotel-block-name" style="margin-left:15px;margin-bottom:10px;"><?php the_field('subtitle2'); ?></h5>
		<p class="page-body-text" style="margin:0 auto!important;width: 100%;padding-left: 15px;"><?php the_field('text'); ?></p>
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
