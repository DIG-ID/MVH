<div class="row desktop-version">
<style>
@media (min-width: 768px) {
	.link-boxes-blue{min-height: 230px;background:#06bebd;}
	.grachen-page .box-title {font-size: 36px;padding: 50px 45px;}
	.grachen-page .down-events{clear: both;display: block;margin:0 auto;}
	.grachen-page .box-title > img{float: left;width: 40px;margin:10px;margin-top:5px;}
	.grachen-page .grachen-aktitle{text-align: left;float: left;width: 230px;display: inline-block;}
	.event-title-mob{font-size: 30px;text-align: left;float: left;}
	.event-text{display: inline-block;@include std-margins-mob;margin-bottom: 40px;@include opacity-text;}
	.event-date{@include std-margins-mob;}
	.event-date,.event-dateend{color:#9da1a7;font-size: 14px;display: inline-block;top: -15px;position: relative;}
	.event-title-in{display: inline-block;width: 100%;}
	.grachen-page .page-body-text{margin-bottom: 40px;}
	.grachen-page .down-events{margin-top: 8px;}
	.header-title{top:160px!important;font-size:36px;width: 100%;color: #ffffff;position: absolute !important;left: 0;right: 0;margin-left: auto;margin-right: auto;font-weight: bold;font-size: 52px;}
	.season-icon{float: left;position: relative;margin-right: 15px;margin-bottom: 15px;}
	.grachen-page .box-title{margin-top: 10px;}
	.grachen-aktitle{display: inline-block;text-align: left;width: 205px!important;font-size: 34px;}
	.grachen-page .link-boxes-violet > .box-red{padding-top: 25px;}
	.grachen-page .events{background: #f7f7f7;width: 50%;float: left;height: 600px;padding:15px;}
	.grachen-page #main{max-width: 1120px;margin: 0 auto;}
	.grachen-page .pretitle{float:left;width: 70%;margin-top: 10px;}
	.grachen-page #home-title-section .home-title {margin-top: 160px;max-width: 840px;margin-left: auto;margin-right: auto;}
	.grachen-page #home-title-section .header-subtitle {max-width: 840px;margin: 0px auto 25px auto;}
	.grachen-page #home-title-section .body-hometext {max-width: 840px;margin: 15px auto 80px auto !important;text-align: left;}
	#myIncertIframe2{width: 100%;}
	.grachen-page .events .wp-image-23{margin-bottom: 15px;}
}
@media(min-width:767px) and (max-width:1200px){

}
</style>
<div id="header-mvh" class="realheader" style="z-index:1;position: relative;width:100%;background-size:cover;">
	<img class="wp-image-23 title-image" style="filter: brightness(0.7);width:100%;" src="/wp-content/uploads/2020/04/aktiv-hotel-spa-hannigalp-graechen-min.png" alt="">
		<h1 class="header-title" style="text-align: center;top:32vh;"><?php if(ICL_LANGUAGE_CODE=='de'){ ?>Herzlich Willkommen in<br>unserem Gutscheinshop<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>Welcome to our voucher shop<?php } ?>
				<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>Bienvenue dans notre<br>shop de bons d'achat<?php } ?></h1>
</div>
<div id="booking-bar" style="z-index:9;">
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

<section id="home-title-section" style="width:100%;margin-top:5px;margin-left:15px;margin-right:15px;">
	<div class="row" style="/*max-width:1320px*/;margin:0 auto;">
		<script type="text/javascript">
		<?php if(ICL_LANGUAGE_CODE=='de'){ ?>var iframe_src = "https://matterhornvalleyhotels.traumgutscheine.com/start.php?gotocat=5&incertframe=new";<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='en'){ ?>var iframe_src = "https://matterhornvalleyhotels.traumgutscheine.com/start.php?gotocat=5&language=en&?incertframe=new";<?php } ?>
		<?php if(ICL_LANGUAGE_CODE=='fr'){ ?>var iframe_src = "https://matterhornvalleyhotels.traumgutscheine.com/start.php?gotocat=5&language=fr&?incertframe=new";<?php } ?>
		</script>
		<script type="text/javascript">
		(function(){
		var frameContainerID = 'myIncertIframe2',
		landingPageURL = iframe_src,
		trackingCode = 'UA-123456789';
		incertIframe(frameContainerID, landingPageURL, trackingCode);
		})();
		</script>

	</div>
</section>
<!-- Do the left sidebar check -->
<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
<!-- Do the right sidebar check -->
<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>


<!-- .row -->
