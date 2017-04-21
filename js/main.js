function initialize() {
  var myLatlng = new google.maps.LatLng(50.4242519,30.4280564);
  var mapOptions = {
	zoom: 15,
	center: myLatlng
  }
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var image = 'img/map-icon.png';
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: image,
		title: ''
  });
}	

jQuery(document).ready(function($) {
		if ($("#map").length)
		{
			initialize();
		}	
		var delay = 1000;
    $('.to-top').click(function () {

      $('body, html').animate({
        scrollTop: 0
      }, delay);
    }); 

	$('.jqui-select > select').selectmenu();
	$('.jqui-lang > select').selectmenu();



  $('.overlayElementTrigger').on('click', function () {
    if ($('.overlay-forms').is(':visible')) {
        $('.of-form').stop().fadeOut();
    } else {
        $('.overlay-forms').stop().fadeIn();
    }

    $('.' + $(this).data('selector')).stop().fadeIn();
  });
	
	$('.form-overlay').on('click', function() {
		$('.of-form').stop().fadeOut();
		$('.overlay-forms').stop().fadeOut();
		if($('.popup.youtube').length)	{
			$('.youtube .video-container').find('iframe').attr('src', '');	
			$('.popup.youtube').hide();
		}
	});	
	
	$('.of-close').on('click', function() {
		$('.of-form').stop().fadeOut();
		$('.overlay-forms').stop().fadeOut();
		if($('.popup.youtube').length)	{
			$('.youtube .video-container').find('iframe').attr('src', '');	
			$('.popup.youtube').hide();
		}
	});	
	

  var slide = $("#slider");
 	slide.owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		items : 1,
		singleItem : true,
		responsive: true,
		responsiveRefreshRate: 1,
		pagination: true,
		navigationText: false,
		navigation: true,
		autoPlay: 5000,
		transitionStyle : "fade"
	});
  $("#transitionType").change(function(){
	var newValue = $(this).val();

	//TransitionTypes is owlCarousel inner method.
	slide.data("owlCarousel").transitionTypes(newValue);
	slide.trigger("owl.play");
  });

	var footerHeight =$("footer").outerHeight();

	$("footer").css({'margin-top': -footerHeight});
	$(".clearfix-footer").css({'height': footerHeight});	

	$(".of-submit-form").click(function() {
		console.log(1);
		var name = $(this).parents().children('.need').children(".of-input_name");
		if($.trim(name.val()) == "") {
			name.addClass("form_error");
			return false;
		}
		else{
			name.removeClass("form_error");
		}
		
		var phone = $(this).parents().children('.need').children(".of-input_phone");
		if($.trim(phone.val()) == "") {
			phone.addClass("form_error");
			return false;
		}
		else{
			phone.removeClass("form_error");
		}
		/*
		var email = $(this).parents().children(".of-input_email");
		if($.trim(email.val()) == "") {
			email.addClass("form_error");
			return false;
		}
		else{
			email.removeClass("form_error");
		}*/

		if ($('.overlay-forms').is(':visible')) {		
			$('.form-order').hide();
			phone.val("");
			name.val("");
	//		email.val("");
			$('.form-thanks').show();
		}
		else{
			$('.overlay-forms').show();
			phone.val("");
			name.val("");
		//	email.val("");
			$('.form-thanks').show();
		}

	});

	$(".of-submit__contacts").click(function() {
		console.log(1);
		var name = $(this).parents().children('.need').children(".of-input_name");
		if($.trim(name.val()) == "") {
			name.addClass("form_error");
			return false;
		}
		else{
			name.removeClass("form_error");
		}
		
		var phone = $(this).parents().children('.need').children(".of-input_phone");
		if($.trim(phone.val()) == "") {
			phone.addClass("form_error");
			return false;
		}
		else{
			phone.removeClass("form_error");
		}
		
		var mess = $(this).parents().children('.need').children(".of-form__textarea");
		if($.trim(mess.val()) == "") {
			mess.addClass("form_error");
			return false;
		}
		else{
			mess.removeClass("form_error");
		}

		if ($('.overlay-forms').is(':visible')) {		
			$('.form-order').hide();
			phone.val("");
			name.val("");
			mess.val("");
			$('.form-thanks').show();
		}
		else{
			$('.overlay-forms').show();
			phone.val("");
			name.val("");
			mess.val("");
			$('.form-thanks').show();
		}

	});


	$(".phone_mask").mask("(999) 999-99-99");

	$('a[href^="#"]').click(function(){
		var el = $(this).attr('href');
		$('body').animate({
		scrollTop: $(el).offset().top}, 2000);
		return false;	
	});		


	if ($(".slider").length){

		$('.slider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: false,
		  infinite: true,
		  cssEase: 'linear',
		  variableWidth: true,
		  variableHeight: true,
		  centerMode:true,
			asNavFor: '.slider-nav',
			prevArrow: $('.prev'),
			nextArrow: $('.next')			
		});

	}

	if ($(".slider").length){

		$('.slider-nav').slick({
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  asNavFor: '.slider',
		  dots: false,
		  focusOnSelect: true,
		  loop:false,
		  arrows:false,
		  dots:false
		});

	}

});	
	