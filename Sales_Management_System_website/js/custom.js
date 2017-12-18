$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade"
  });
 
});
 
 //toggle function

$(document).ready(function(){
	$('.toggle').click(function(){
		$('.categ').toggleClass('active');
	});
	
	$('.smoothscroll').smoothScroll();
});

//fadein
var btn = document.querySelector('.js-btn');
var el = document.querySelector('.js-fade');

btn.addEventListener('click', function(e){
  el.classList.remove('is-paused');
});


//scroll up

$(document).ready(function(){
	jQuery(window).scroll(function() {
	
   if (jQuery(this).scrollTop()) {
       jQuery('a.scrollup').fadeIn();
   } else {
      jQuery('a.scrollup').fadeOut();
   }
});


	jQuery('.toggle').click(function(e) {

       e.preventDefault();

       jQuery('.bottom ul').slideToggle();
	   
	   jQuery('.bottom ul ul').css("display", "none"); 

   });
   
   
   jQuery('.bottom li').each(function(){

       jQuery(this).children('ul').before('<span class="submenu"></span>');
       
   });
   
   jQuery('.bottom li .submenu').click(function(e) {

       jQuery(this).next('ul').slideToggle();
       
       jQuery(this).toggleClass('submenu-hide');
   
   });
   
   $('.header-block .nav a.mobile').click(function(e){
		e.preventDefault();
		$('.header-block .nav ul').slideToggle();
	});
	
		$('.selectyze1').Selectyze({
			theme : 'skype'
		});
		



   
});


