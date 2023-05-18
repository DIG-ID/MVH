jQuery(document).ready(function($) {
  // Simple Booking System
  (function (i, s, o, g, r, a, m) {
      i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=3904','SBSyncroBox');

  SBSyncroBox({
       CodLang: 'DE',
       Currency: 'CHF',
  	 Labels: {
  	 	NumAdults: {'DE':'Pers.'},
      CheckAvailability: { 'DE' : 'Verfügbarkeit prüfen' }
  	 },
     Styles: {
          FontFamily: '"merriweather, serif"',
  		Theme: 'light-pink',
          CustomColor: "#000",
  		CustomLabelColor:"#4089b7",
  		CustomBGColor: "transparent",
  		CustomButtonColor: "#FFF",
  		CustomButtonBGColor: "#4089b7",
  		CustomIntentSelectionDaysBGColor: "#4089b7",
  		CustomIntentSelectionColor: "#4089b7",
  		CustomButtonHoverBGColor:"#4089b7",
  		CustomLabelHoverColor:"#4089b7",
  		CustomLinkColor:"#4089b7",
  		CustomBoxShadowColorFocus:"#ffffff",
  		CustomAddRoomBoxShadowColor:"#ffffff",
  		CustomAccentColor:"#4089b7",
  		CustomFieldBackgroundColor:"#ffffff",
  		CustomSelectedDaysColor:"#000",
  		CustomCalendarBackgroundColor:"#ffffff",
  		CustomWidgetColor:"#000",
  		CustomWidgetBGColor:"#ffffff",
  		CustomWidgetElementHoverColor:"#4089b7",
  		CustomWidgetElementHoverBGColor:"#4089b7",
  		CustomBoxShadowColor:"#ffffff",
  		CustomBoxShadowColorHover:"#ffffff",
  		CustomColorHover:"#4089b7",
  		CustomIconColor:"#4089b7",
  		CustomAccentColorHover:"#4089b7"
      }
  });
  SBSyncroBox({
       CodLang: 'EN',
       Currency: 'CHF',
  	 MainContainerId: 'sb-container-bar-en',
  	 Labels: {
  	 	NumAdults: {'EN':'Pers.'},
      CheckAvailability: { 'EN' : 'Check availability' }
  	 },
     Styles: {
          FontFamily: '"merriweather, serif"',
  		Theme: 'light-pink',
          CustomColor: "#000",
  		CustomLabelColor:"#4089b7",
  		CustomBGColor: "transparent",
  		CustomButtonColor: "#FFF",
  		CustomButtonBGColor: "#4089b7",
  		CustomIntentSelectionDaysBGColor: "#4089b7",
  		CustomIntentSelectionColor: "#4089b7",
  		CustomButtonHoverBGColor:"#4089b7",
  		CustomLabelHoverColor:"#4089b7",
  		CustomLinkColor:"#4089b7",
  		CustomBoxShadowColorFocus:"#ffffff",
  		CustomAddRoomBoxShadowColor:"#ffffff",
  		CustomAccentColor:"#4089b7",
  		CustomFieldBackgroundColor:"#ffffff",
  		CustomSelectedDaysColor:"#000",
  		CustomCalendarBackgroundColor:"#ffffff",
  		CustomWidgetColor:"#000",
  		CustomWidgetBGColor:"#ffffff",
  		CustomWidgetElementHoverColor:"#4089b7",
  		CustomWidgetElementHoverBGColor:"#4089b7",
  		CustomBoxShadowColor:"#ffffff",
  		CustomBoxShadowColorHover:"#ffffff",
  		CustomColorHover:"#4089b7",
  		CustomIconColor:"#4089b7",
  		CustomAccentColorHover:"#4089b7"
      }
  });
  SBSyncroBox({
       CodLang: 'FR',
       Currency: 'CHF',
  	 MainContainerId: 'sb-container-bar-fr',
  	 Labels: {
  	 	NumAdults: {'FR':'Pers.'},
      CheckAvailability: { 'FR' : 'Vérifier la disponibilité' }
  	 },
     Styles: {
          FontFamily: '"merriweather, serif"',
  		Theme: 'light-pink',
          CustomColor: "#000",
  		CustomLabelColor:"#4089b7",
  		CustomBGColor: "transparent",
  		CustomButtonColor: "#FFF",
  		CustomButtonBGColor: "#4089b7",
  		CustomIntentSelectionDaysBGColor: "#4089b7",
  		CustomIntentSelectionColor: "#4089b7",
  		CustomButtonHoverBGColor:"#4089b7",
  		CustomLabelHoverColor:"#4089b7",
  		CustomLinkColor:"#4089b7",
  		CustomBoxShadowColorFocus:"#ffffff",
  		CustomAddRoomBoxShadowColor:"#ffffff",
  		CustomAccentColor:"#4089b7",
  		CustomFieldBackgroundColor:"#ffffff",
  		CustomSelectedDaysColor:"#000",
  		CustomCalendarBackgroundColor:"#ffffff",
  		CustomWidgetColor:"#000",
  		CustomWidgetBGColor:"#ffffff",
  		CustomWidgetElementHoverColor:"#4089b7",
  		CustomWidgetElementHoverBGColor:"#4089b7",
  		CustomBoxShadowColor:"#ffffff",
  		CustomBoxShadowColorHover:"#ffffff",
  		CustomColorHover:"#4089b7",
  		CustomIconColor:"#4089b7",
  		CustomAccentColorHover:"#4089b7"
      }
  });

  // external js:
  //cdn.rawgit.com/desandro/get-style-property/v1.0.4/get-style-property.js
  //cdn.rawgit.com/desandro/get-size/v1.2.2/get-size.js
  //cdn.rawgit.com/desandro/matches-selector/v1.0.2/matches-selector.js
  //cdn.rawgit.com/Wolfy87/EventEmitter/v4.2.11/EventEmitter.js
  //cdn.rawgit.com/desandro/eventie/v1.0.5/eventie.js
  //cdn.rawgit.com/metafizzy/flickity/4b78052599c/js/utils.js
  //cdn.rawgit.com/metafizzy/flickity/4b78052599c/js/unipointer.js
  //cdn.rawgit.com/metafizzy/flickity/4b78052599c/js/cell.js
  //cdn.rawgit.com/metafizzy/flickity/4b78052599c/js/flickity.js

  // -------------------------- prev/next button -------------------------- //

  ( function( window ) {

  'use strict';

  // -------------------------- inline SVG support -------------------------- //

  // only check on demand, not on script load
  var supportsInlineSVG = ( function() {
  var supports;
  function checkSupport() {
    if ( supports !== undefined ) {
      return supports;
    }
    var div = document.createElement('div');
    div.innerHTML = '<svg/>';
    supports = ( div.firstChild && div.firstChild.namespaceURI ) == 'http://www.w3.org/2000/svg';
    return supports;
  }
  return checkSupport;
  })();

  function PrevNextButton( direction, parent ) {
  this.direction = direction;
  this.parent = parent;
  this._create();
  }

  PrevNextButton.prototype._create = function() {
  this.element = document.createElement('button');
  this.element.className = 'flickity-prev-next-button';
  this.element.className += this.direction === -1 ? ' previous' : ' next';
  // create arrow
  if ( supportsInlineSVG() ) {
    var svg = this.createSVG();
    this.element.appendChild( svg );
  } else {
    var arrowText = this.direction === -1 ? '←' : '→';
    utils.setText( this.element, arrowText );
    this.element.className += ' no-svg';
  }

  // listen to click event
  var _this = this;
  this.element.onclick = function() {
    _this.onclick();
  };

  this.parent.element.appendChild( this.element );
  };

  PrevNextButton.prototype.createSVG = function() {
  var svgURI = 'http://www.w3.org/2000/svg';
  var svg = document.createElementNS( svgURI, 'svg');
  svg.setAttribute( 'viewBox', '0 0 100 100' );
  var path = document.createElementNS( svgURI, 'path');
  path.setAttribute( 'd', 'M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z' );
  path.setAttribute( 'class', 'arrow' );
  // adjust arrow
  var arrowTransform = this.direction === -1 ? 'translate(15,0)' :
    'translate(85,100) rotate(180)';
  path.setAttribute( 'transform', arrowTransform );
  svg.appendChild( path );
  return svg;
  };

  PrevNextButton.prototype.onclick = function() {
  var method = this.direction === -1 ? 'previous' : 'next';
  this.parent[ method ]();
  };

  window.PrevNextButton = PrevNextButton;

  })( window );



 // Back to top btn

 var btn = $('#btt-btn');
 var btnbook = $('#btt-booknow');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
    btnbook.addClass('show');
  } else {
    btn.removeClass('show');
    btnbook.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


  // add active to sliders
  $('#slide1desk .carousel-inner > .carousel-item:nth-child(1)').addClass('active');

// DESKTOP //
$('.hotels-page .flickity-prev-next-button').click(function(){
  $('.hotels-page .flickity-prev-next-button').fadeOut(1000);
});
$('.single-rooms #menu-item-77').addClass('active');
$('.spa-infra-page #menu-item-79').addClass('active');
$('.parent-pageid-62 #menu-item-79').addClass('active');
$('.gastro-detail-page #menu-item-74').addClass('active');


// Configure/customize these variables.
var showChar = 100;  // How many characters are shown by default
var ellipsestext = "...";
var moretext = "Show more >";
var lesstext = "Show less";
$('.more').each(function() {
    var content = $(this).html();
    if(content.length > showChar) {
        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);
        var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
        $(this).html(html);
    }
});
$(".morelink").click(function(){
    if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
});

// RESPONSIVE //
var mq1 = window.matchMedia( "(max-width: 767px)" );
if (mq1.matches) {
  $('nav #main-menu > li:last-child').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="close-menu" class="menu-item menu-item-type-post_type menu-item-object-page nav-item mobile-version"><a data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" title="Close" href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></a></li>');

  /*FIXED HEADER MENU*/
  	var didScroll;
  	var lastScrollTop = 0;
  	var delta = 5;
  	var navbarHeight = $('.navbar').outerHeight();
  	$(window).scroll(function(event){didScroll = true;});
  	setInterval(function() {
  		if (didScroll) {
  			hasScrolled();
  			didScroll = false;
  		}
  	}, 250);
  	function hasScrolled() {
  		var st = $(this).scrollTop();
  		if(Math.abs(lastScrollTop - st) <= delta)
  			return;
  		if (st > lastScrollTop && st > navbarHeight){
  			// Scroll Down
  			$('.navbar').removeClass('nav-down').addClass('nav-up');
  		} else {
  			// Scroll Up
  			if(st + $(window).height() < $(document).height()) {
  				$('.navbar').removeClass('nav-up').addClass('nav-down');
  			}
  		}
  		lastScrollTop = st;
  	}

}
/*jQuery("html body").prepend("<div id=\"footbar\" class=\"fixed_foot\"><div id=\"buchenfixed\" class=\"itemfixed\"></div><div id=\"iconsfixed\"><a href=\"https://www.simplebooking.it/ibe/search?hid=????&lang=DE&cur=CHF\" target=\"_blank\"><p class=\"pfixed\">Jetzt Buchen</p></a></div></div>");*/



});
