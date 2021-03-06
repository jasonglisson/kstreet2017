/*
Joints Scripts File

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/


// as the page loads, call these scripts
jQuery(document).ready(function($) {
	// load Foundation
	jQuery(document).foundation();
	
    // load gravatars
    $('.comment img[data-gravatar]').each(function(){
        $(this).attr('src',$(this).attr('data-gravatar'));
    });
    

// add all your scripts here
	
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

$(function() {

	$('.mobile-menu-icon').click(function(){
		$('.mobile-menu-icon').toggleClass('stuck');
		$('body').toggleClass('overflow');
		$('.mobile-menu').toggleClass('active');	
	});
	
	$('.home #inner-content').css('opacity', '1');

	$('.press-inner').click(function(){
		$(this).find('.press-link-box').attr('href');
	});	

  $('#press-slider').slick({
		dots: false,
		arrows: true,
    slidesToShow: 3,
    infinite: true,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false
      }
    }
   ]    	
	});

  $('.next').click(function(){
    $('.slick-next')[0].click();  
  });
  
  $('.prev').click(function(){
    $('.slick-prev')[0].click();  
  });  

	//store the element
	var $cache = $('.post-second-menu');
	var $top = $('.back-to-top');
	
	//store the initial position of the element
	$(window).scroll(function(){
		parallaxScroll();
	    if($(document).scrollTop() > 200) {
		  // if so, ad the fixed class
		  $cache.addClass('fixed');
		  $top.addClass('show');		  
		} else {
		  // otherwise remove it
		  $cache.removeClass('fixed');
		  $top.removeClass('show');			   	  
		}		
	});

	$('.arrow').click(function() {
	    $('html, body').animate({
	        scrollTop: $("#founded").offset().top-100
	    }, 1000);
	});
	
	var down = $('.arrow');
	function downFlick() {
		down.animate({opacity: '+=1'}, 1100).delay(100);
		down.animate({opacity: '-=0.5'}, 1100, downFlick);
	}
	downFlick();
	
	function parallaxScroll(){
		var scrolled = $(window).scrollTop();	
		$('body.home').css('background-position-y', ((scrolled*'-.50'))+'px');				
	}
	
	$('#application-form input[value=Other]').change(
    function(){
        if ($(this).is(':checked')) {
            $('.min-viable-other input').css('opacity', '1');
        }      
    });
	$('#application-form input[value=No]').change(
    function(){
        if ($(this).is(':checked')) {
            $('.min-viable-other input').css('opacity', '0');
        }      
    });
	$('#application-form input[value=Yes]').change(
    function(){
        if ($(this).is(':checked')) {
            $('.min-viable-other input').css('opacity', '0');
        }      
    });    
    
	function viewport_height() {
		var window_height = $(window).height();
		$('.home #content').height(window_height);
	}

	$('#menu-footer li a:contains("Login")').attr('target', '_blank');
	
	viewport_height();
	
	$(window).resize(function() {
		viewport_height();
	});    
	
	$('.port-menu a').click(function() {
  	var portLink = $(this).attr('href');
  	//alert(portLink);
    $('html, body').animate({
      scrollTop: $(portLink).offset().top-100
    }, 900);
	});

  var hashLink = window.location.hash;
  
  // to top right away
  if ( hashLink ) scroll(0,0);
  // void some browsers issue
  setTimeout( function() { scroll(0,0); }, 1);
    
  // *only* if we have anchor on the url
  if(hashLink) {
  
    // smooth scroll to the anchor id
    $('html, body').animate({
        scrollTop: $(hashLink).offset().top - 100 + 'px'
    }, 600, 'swing');
    
    setTimeout(function() {
      $(hashLink).addClass('active');
      setTimeout(function() {
        $(window).scroll(function(){
          $(hashLink).removeClass('active');
        });  
      }, 900);
    }, 900);
    
  }
	
  $('.process-1').on('click', function(e){
    $(this).find('.spin').mouseenter().mouseleave();
    //$(this).find('.spin').trigger('hover');
  });
	
});