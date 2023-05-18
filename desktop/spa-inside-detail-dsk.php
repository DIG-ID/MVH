<div class="row desktop-version">

<style>
#footbar{display: none;}
html{overflow: hidden;background: #2c2b39;}
@media(min-width: 768px){
	#footbar{display: none;}
	html{overflow: hidden;background: #2c2b39;}
}
@media (min-width: 768px) {
	#wrapper-footer-full,#wrapper-navbar{display: none;}
}
</style>
<?php $image = get_field('main_image'); ?>
<figure class="wp-block-image" style="width:100%;margin:0!important;max-height: 400px;"><img class="wp-image-23" style="width:100%;" src="<?php echo $image['url']; ?>" alt="" /></figure>
<div id="section-about-content" style="width:100%;background:#2c2b39;padding-bottom:35px;position:absolute;bottom:0;">
	<h3 class="section-title" style="margin:25px 0 15px 0;width: 90%;text-align: left;padding-left: 50px;max-width: 1100px;color:#ffffff;"><?php the_field('title'); ?></h3>
	<div id="left-side" style="float:left;width:70%;background:transparent;">
		<p class="page-body-text" style="margin:0;padding-left: 50px;color:#ffffff;"><?php the_field('description'); ?></p>
	</div>
	<div id="right-side" style="float:left;width:30%;background:transparent;padding:0 30px;">
		<?php if( get_field('temperature') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Temperatur:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Temperature:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>La température:<?php } ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('temperature'); ?></p>
		<?php endif; ?>
		<?php if( get_field('grosse') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Grösse:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Size:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>La taille:<?php } ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('grosse'); ?></p>
		<?php endif; ?>
		<?php if( get_field('size') ): ?>
		<p class="page-body-text" style="margin:15px auto;width: 90%;color:#4089b7;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Luftfeuchtigkeit:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Humidity:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Humidité:<?php } ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('size'); ?></p>
		<?php endif; ?>
		<?php if( get_field('depth') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Dauer:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Duration:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>La durée:<?php } ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('depth'); ?></p>
		<?php endif; ?>
		<?php if( get_field('tiefe') ): ?>
		<p class="page-body-text" style="margin:0 auto;width: 90%;color:#4089b7;">
			<?php if(ICL_LANGUAGE_CODE=='de'){ ?>Tiefe:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Depth:<?php } ?>
	    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Profond:<?php } ?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_field('tiefe'); ?></p>
		<?php endif; ?>
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
