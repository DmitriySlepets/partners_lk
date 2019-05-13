$(document).ready(function(){

	$('.leave__request__form .btn__submit').click(function(){
		event.preventDefault();
		//$('.leave__request__block__content').hide();
		//$('.leave__request__block__reminder').fadeIn();
	});

	$('.certification__popup .btn__submit, .certification__extension__popup .btn__submit, .closest__certification__popup .btn__submit').click(function(){
		//event.preventDefault();
		//$(this).parents('.popup').fadeOut();
		//$('.certification__reminder__popup').fadeIn();
	});

});