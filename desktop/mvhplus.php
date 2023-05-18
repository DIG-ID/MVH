<div class="row desktop-version">
<style>
@media (min-width: 1921px){
	.title-image{width: 100%;}
}
@media (min-width: 768px) {
.mvhplus-page #home-title-section .home-title {margin-top: 160px;max-width: 840px;width:90%;margin-left: auto;margin-right: auto;}
.mvhplus-page #home-title-section .header-subtitle {max-width: 840px;width:90%;margin: 40px auto 0 auto;}
.mvhplus-page #home-title-section .body-hometext {max-width: 840px;width:90%;margin: 15px auto 80px auto !important;text-align: left;}
.mvhplus-page #main {max-width: 1200px;margin: 0 auto;}
.mvhplus-page .mvhplus-dine{background: #f7f7f7;width: 30%;float:left;height: 680px;padding: 15px;margin:60px 1.5% 20px 1.5%;filter: drop-shadow(6px 8px 7px #ddd);}
.mvhplus-page .middle .mvhplus-dine{float: none;display: inline-block;text-align: left;}
.mvhplus-page .dine-elipse{float: left;margin:0 10px 0px 10px;width: 35px;}
.mvhplus-page .pretitle{font-size:1.2rem;opacity: 0.8;float: left;margin-top: 5px;}
.mvhplus-page .availability{float: right;margin-right: 15px;margin-top: 5px;opacity:0.5;width: 95%;text-align: right;}
.mvhplus-page .mvhplus-textdiv{padding: 15px;}
.mvhplus-page .button-link {margin: 0 auto;margin-top: 15px;margin-bottom: 30px;display: block;text-align: center;}
.mvhplus-page .mvhplus-date{position: absolute;top: 218px;background: #f7f7f7;width: calc(74% - 30px);text-align: center;margin-left: 13%;color:#06bebd;filter: drop-shadow(6px 8px 7px #ddd);}
.mvhplus-page .mvhplus-date2{color:#06bebd;padding-left: 15px;display: inline-block;margin: 15px 0 10px 0!important;vertical-align: top;}
}
@media(min-width:767px) and (max-width:1200px){
.mvhplus-page .mvhplus-date{margin-left: 7%;width: calc(82% - 23px);}
#aktivitaten h4{margin-left:0!important;font-size:18px!important;margin-bottom:0!important;}
.mvhplus-textdiv{padding: 15px 0!important;}
.mvhplus-textdiv:nth-child(7){position: static!important;}
.mvhplus-page .box-title{font-size:32px;}
.mvhplus-page .mvhplus-dine{width: 46%!important;height: auto!important;min-height: 600px!important;}
.mvhplus-page .button-link{top:auto!important;}
}
</style>
<div id="header-mvh" style="height: 550px;width:100%;background:#2c2b39;">
<h1 class="section-title" style="margin:150px auto 10px auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_title'); ?></h1>
<h2 class="header-subtitle" style="margin:0px auto 30px auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;font-size:20px;"><?php the_field('page_subtitle'); ?></h2>
<p class="page-body-text" style="margin:0 auto;width:90%;max-width: 1100px;text-align: center;color:#ffffff;"><?php the_field('page_body_text'); ?></p>
</div>
<div id="booking-bar">
<a href="https://www.simplebooking.it/ibe/search?hid=3904&lang=DE&cur=CHF&_ga=&guests=&in=&out=&coupon=" target="_blank">
    <div class="booking_banner">
        <div class="container">
            <div class="row">
                <div class="col-2 p-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/basic/appointment_128.png" width="" height="" alt="" /></div>
                <div class="col-10 p-2"><span class="booking_text">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>JETZT ONLINE BUCHEN<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>BOOK ONLINE NOW<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>RÉSERVEZ MAINTENANT<?php } ?>
                </span><br><span class="booking_text_sub">
                    <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Wir garantieren den besten Preis!<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Guaranteed the best price!<?php } ?>
                    <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Meilleur prix garanti!<?php } ?>
                </span></div>
            </div>
        </div>
    </div>
</a>
<div id="buchenfixed"><?php if(ICL_LANGUAGE_CODE=='de'){ ?><div id="sb-container"></div><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='en'){ ?><div id="sb-container-bar-en"></div><?php } ?>
<?php if(ICL_LANGUAGE_CODE=='fr'){ ?><div id="sb-container-bar-fr"></div><?php } ?></div>
</div>
<?php $image = get_field('header_image'); ?>
<img class="wp-image-23 title-image" style="margin-top:-50px;" src="<?php echo $image['url']; ?>" alt="" />
<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
<div class="row" style="max-width:1320px;margin:0 auto;">
<a href="#aktivitatendsk" style="margin:15px 0px 15px 15px;" class="col-sm link-boxes-violet"><div class="col-sm box-red">
  <h2 class="box-title"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten+<?php } ?>
  <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Activities+<?php } ?>
  <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les activités+<?php } ?></h2>
  <img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
  </div>
</a>
<a href="#spaarounddsk" style="margin:15px 0px 15px 15px;" class="col-sm link-boxes-red"><div class="col-sm box-red">
  <h2 class="box-title">Spa Around+</h2>
  <img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
  </div>
</a>
<a href="#dinearounddsk" style="margin:15px 15px 15px 15px;" class="col-sm link-boxes-violet"><div class="col-sm box-red">
  <h2 class="box-title">
    Dine Around+
    </h2>
  <img class="down-events" src="/wp-content/themes/understrap-child/assets/imgs/basic/down-arrow.png">
  </div>
</a>
</div>
<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
<h2 id="aktivitaten" class="home-title" style="text-align: center;margin-top:50px;">
  <?php if(ICL_LANGUAGE_CODE=='de'){ ?>Aktivitäten+<?php } ?>
  <?php if(ICL_LANGUAGE_CODE=='en'){ ?>Activities+<?php } ?>
  <?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Les activités+<?php } ?>
  </h2>
<p class="header-subtitle" style="text-align:center;"><?php the_field('aktivitaten_text'); ?></p>
</section>
<div class="col-12 content-area" style="padding:0;margin-bottom:50px;">
<main class="site-main" id="main">
  <?php echo do_shortcode("[dig_mvhplus_dsk_overview_shortcode post-type=\"mvhplus\" tax-name=\"mvhplus_tax\" terms=\"aktivitaten\" ange-availability=\"ange-availability\" ange-image=\"ange-image\" ange-title=\"ange-title\" ange-text=\"ange-text\" ange-date=\"ange-date\" ange_auf=\"ange_auf\"]"); ?>
</main>
<div style="clear: both;"></div>
<div></div>
</div>

<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
<h2 id="spaaround" class="home-title" style="text-align: center;margin-top:50px;">Spa Around+</h2>
<p class="header-subtitle" style="text-align:center;"><?php the_field('spa_around_text'); ?></p>
</section>
<div class="col-12 content-area middle" style="padding:0;text-align:center;">
<main class="site-main" id="main" style="display: flex;flex-wrap: wrap;justify-content: center;">
  <?php echo do_shortcode("[dig_mvhplus_dsk_overview_shortcode post-type=\"mvhplus\" tax-name=\"mvhplus_tax\" terms=\"spaaround\" ange-availability=\"ange-availability\" ange-image=\"ange-image\" ange-title=\"ange-title\" ange-text=\"ange-text\" ange-date=\"ange-date\" ange_auf=\"ange_auf\"]"); ?>
</main>
</div>

<h2 id="dinearound" class="home-title" style="text-align: center;margin-top:50px;">Dine Around+</h2>
<p class="header-subtitle" style="text-align:center;"><?php the_field('dine_around_text'); ?></p>
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
<div class="col-12 content-area" style="padding:0 0 150px 0;">
<main class="site-main" id="main">
<?php echo do_shortcode("[dig_mvhplus_dsk_overview_shortcode post-type=\"mvhplus\" tax-name=\"mvhplus_tax\" terms=\"dinearound\" ange-availability=\"ange-availability\" ange-image=\"ange-image\" ange-title=\"ange-title\" ange-text=\"ange-text\" ange-date=\"ange-date\" ange_auf=\"ange_auf\"]"); ?>
</main>
</div>



</div><!-- .row -->
