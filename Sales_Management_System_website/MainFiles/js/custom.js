$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade"
  });
 
});

//plus mines button
 $(".incr-btn").on("click", function (e) {
        var $button = $(this);
		var minVendorQty= $button.parent().find('.minVendorQty').val();
		 var oldValue = $button.parent().find('.quantity').val();
        $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below 1
            if (oldValue > minVendorQty) {
				 var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = minVendorQty;
                $button.addClass('inactive');
            }
        }
        $button.parent().find('.quantity').val(newVal);
        e.preventDefault();
    });	
	

	

 

//toggle function

$(document).ready(function(){
	$('.toggle').click(function(){
		$('.nav').toggleClass('active');
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
		//



   
});

