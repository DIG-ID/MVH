<div class="row desktop-version">

<style>
#footbar{display: none;}
@media (min-width: 768px) {
	html{overflow: hidden;background: #f7f7f7;}
	#wrapper-footer-full,#wrapper-navbar{display: none;}
}
</style>
<?php $image = get_field('main_image'); ?>
<div id="section-about-content" style="width:100%;padding: 0px 155px 95px;position:absolute;bottom:0;">
	<div class="row">
		<div class="col-sm-12">
		<h1 class="section-title" style="margin: 20px auto 90px auto;width: 90%;max-width: 1100px;text-align: center;color:#2c2b39;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Konditionen<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Conditions<?php } ?>
			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les conditions<?php } ?>
			</h1>
					 <h3 style="background: #4089b7;color: #FFFFFF;padding: 15px;	margin-bottom: 20px;">
						 <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Und so gehts...<?php } ?>
			 			<?php if(ICL_LANGUAGE_CODE=='en'){ ?>How it works...<?php } ?>
			 			<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Comment ça fonctionne...<?php } ?>
					</h3></div>
</div>
	<div class="row">
		<div class="col-sm-6">
			<?php if( have_rows('left_column') ):
				while ( have_rows('left_column') ) : the_row(); ?>
					<h6 class="header-subtitle"><?php the_sub_field('title'); ?></h6 class="header-subtitle">
					<p class="bodytext"><?php the_sub_field('text'); ?></p>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-sm-6">
			<?php if( have_rows('right_column') ):
				while ( have_rows('right_column') ) : the_row(); ?>
					<h6 class="header-subtitle"><?php the_sub_field('title'); ?></h6 class="header-subtitle">
					<p class="bodytext"><?php the_sub_field('text'); ?></p>
			<?php endwhile; endif; ?>

			<ul>
				<li><a href="https://www.jetair.be/nl/hotel/zwitserland/wallis/hotel-hannigalp-80261" target="_blank" class="external-link-new-window">Jet Air</a></li>
				<li><a href="https://www.eurotours.at/" target="_blank" class="external-link-new-window">Eurotours</a></li>
				<li><a href="https://www.alltours.de/" target="_blank" class="external-link-new-window">Alltours</a></li>
			</ul>
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
