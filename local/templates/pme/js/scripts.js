$(document).ready(function(){

	$('.btn__mob__menu').click(function(){
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.mob__menu__wrap').removeClass('active');
		} else {
			$(this).addClass('active');
			$('.mob__menu__wrap').addClass('active');
		}
	});

	$('.mob__menu__link, .mob__menu__wrap .btn__leave__request').click(function(){
		$('.btn__mob__menu').removeClass('active');
		$('.mob__menu__wrap').removeClass('active');
	});

	$(window).bind('scroll.once', function () {
      if (($(window).scrollTop() > 60) && ($(window).width() > 991)) {
  		  $('.header__bottom').addClass('fixed');
          $('.header__top').addClass('big');
      } else {
  		  $('.header__bottom').removeClass('fixed');
          $('.header__top').removeClass('big');
      }
  	});

  	// $(window).bind('scroll', function () {
   //    var fixedTop = $('.second').offset().top
   //    var endTop = $('.ninth').offset().top

   //    if (fixedTop >= endTop - 400) {
   //      $('.second').removeClass('fixed');
   //      $('.first').removeClass('big');

   //    } else {

   //      if ($(window).scrollTop() < 60) {
   //        $('.second').removeClass('fixed');
   //        $('.first').removeClass('big');
   //      } else {
   //        $('.second').addClass('fixed');
   //        $('.first').addClass('big');
   //      }
   //    }
  	// });

  	var certificationDates = {};

	$(".certification__datepicker").datepicker({
		prevText: "Пред",
		nextText: "След",
		beforeShowDay: function(date) {
            var search = date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate();
            var popupData = $(this).parents('.popup').data('certification');

            switch (popupData) {
			  case 'standart':
			    var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  case 'full-time':
			    var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  case 'distance':
			    var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  case 'student':
			    var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  case 'retake':
			    var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  case 'closest':
				var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  case 'extension':
			    var selection = document.getElementById("kk_calendar").innerHTML.split('///');
				var certificationDates = new Object();
				for(var i = 0; i < selection.length; i++){
					certificationDates[selection[i]] = '13 мая';
				}
			    break;
			  default: ;
			}

            if (search in certificationDates) {
                return [true, "highlighted", (certificationDates[search] || '')];
            }
            else {
                return [true, '', ''];
            }
        }
	});

	$('.btn__copy__dates').click(function(){
		$(this).find('.tooltip').text('Список скопирован');

		var select = $(this).parents('.custom__select__wrap').find('.custom__select option:not(:first-of-type)');
		var optionsArr = [];
		for(var i = select.length; i--; optionsArr.unshift(select[i].text));
		var optionsStr = optionsArr.join(", \n");
		var value = `<input value="${optionsStr}" id="selVal" />`;
		$(value).insertAfter($(this).parents('.custom__select__wrap').children('.custom__select'));
		$("#selVal").select();
		document.execCommand("Copy");
		$('body').find("#selVal").remove();
	});

	$(".btn__copy__dates").mouseleave(function() {
		var _this = $(this);

		setTimeout(function() { 
			_this.find('.tooltip').text('Скопировать весь список');
		}, 500);
	});

	$(window).scroll(function(){
      if ($(this).scrollTop() > 550) {
        $('.scrolltop').addClass('active');
      } else {
        $('.scrolltop').removeClass('active');
      }
    });

    $('.scrolltop').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });

    /*SLIDERS*/

    var clientsSlider = new Swiper('.clients__block__slider__wrap', {
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: {
            enabled: true,
            // delay: 5000,
            disableOnInteraction: false,
        },
        loop: true,
        watchSlidesVisibility: true,
        // roundLengths : true,
        // observer: true,
        // observeParents: true,
        // observeChildren: true,
        breakpoints: {
            1199: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            575: {
                slidesPerView: 1,
                spaceBetween: 20
            },
        },
        navigation: {
            nextEl: '.clients__block__slider__next',
            prevEl: '.clients__block__slider__prev',
        }
    });

    var reviewsSlider = new Swiper('.reviews__block__slider__wrap', {
        slidesPerView: 1,
        autoHeight: true,
        loop: false,
        roundLengths : true,
        observer: true,
        observeParents: true,
        draggable: false,
        pagination: {
            el: '.reviews__block__slider__pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '.reviews__block__slider__next',
            prevEl: '.reviews__block__slider__prev',
        }
    });

    var questionsSlider = new Swiper('.questions__block__slider__wrap', {
        slidesPerView: 1,
        autoHeight: true,
        loop: true,
        // watchSlidesVisibility: true,
        roundLengths : true,
        observer: true,
        observeParents: true,
        // observeChildren: true,
        pagination: {
            el: '.questions__block__slider__pagination',
            type: 'bullets',
            clickable: true
        },
        navigation: {
            nextEl: '.questions__block__slider__next',
            prevEl: '.questions__block__slider__prev',
        }
    });

    /*SLIDERS-END*/

	$('.contacts__block__item').each(function () {
		if ($(this).find('input[type="radio"]').is(':checked')) {
			$(this).addClass('active');
			$(this).find('.custom__radio__inner__content').slideDown();
		}
	});

	$('.contacts__block__item input[type="radio"]').change(function () {
		if ($(this).parents('.contacts__block__item').find('input[type="radio"]').is(':checked')) {
			$('.contacts__block__item').find('.custom__radio__inner__content').slideUp();
			$(this).parents('.contacts__block__item').addClass('active');
			$(this).parents('.contacts__block__item').find('.custom__radio__inner__content').slideDown();
		}
	});

	$('.mob__menu__link, .header__menu__link').not('.advantages, .contacts').click(function(){
		if ($(window).width() < 992) {
			$('html, body').animate({
			      scrollTop: $($.attr(this, 'href')).offset().top + 40 
			}, 500);
		} else {
			$('html, body').animate({
		      scrollTop: $($.attr(this, 'href')).offset().top + 10 
		  	}, 500);
		}
	});

	$('.mob__menu__link.advantages, .header__menu__link.advantages').click(function(){
		$('html, body').animate({
		      scrollTop: $($.attr(this, 'href')).offset().top + 130
		}, 500);
	});

	$('.mob__menu__link.contacts, .header__menu__link.contacts').click(function(){
		if ($(window).width() < 992) {
			$('html, body').animate({
			      scrollTop: $($.attr(this, 'href')).offset().top + 20
			}, 500);
		} else {
			$('html, body').animate({
			      scrollTop: $($.attr(this, 'href')).offset().top - 10
			}, 500);
		}	
	});

	$('.scroll-to-request').click(function(){

		if ($(window).width() < 992) {
			$('html, body').animate({
			      scrollTop: $($.attr(this, 'href')).offset().top + 150
			}, 500);
		} else {
			$('html, body').animate({
			      scrollTop: $($.attr(this, 'href')).offset().top + 100
			}, 500);
		}	
	});

	$('.reviews__block__slider__item__content').each(function () {

		if ($(this).height() > 150) {
			$(this).parents('.reviews__block__slider__item').addClass('cut');
			$(this).after('<div class="read__more">Читать далее</div>');
		};	
	});

    $(".reviews__block__slider__item .read__more").click(function(){
        $(this).parents('.reviews__block__slider__item').removeClass('cut');
        $(this).remove();
        reviewsSlider.update();
    });

    $('.price__block__item').click(function(){
    	var dataCertification = $(this).data('certification');

    	$('.certification__popup').data('certification', dataCertification);
    });

	$('.smooth-scroll').click(function () {
	  $('html, body').animate({
	      scrollTop: $($.attr(this, 'href')).offset().top - 10 
	  }, 500);
	  return false;
	});

	$('.input__phone').inputmask({
      "mask": "8 (999) 999-99-99",
      "clearIncomplete": true,
      "onincomplete": function(){$(this).parents('form').find('button').attr("disabled", true), $(this).addClass('input-error')},
      "oncomplete": function(){$(this).parents('form').find('button').attr("disabled", false), $(this).removeClass('input-error')}
  	});

  	$('.custom__select').selectmenu();


  	/*ACCORDION*/

 	$('.accordion__item').each(function () {

    	if($(this).hasClass('active')) {
    		$(this).find('.accordion__item__content').show();
    	}
    });

	$('.accordion__item__heading').click(function(){

		if ($(this).parent('.accordion__item').hasClass('active')) {

			$(this).parent('.accordion__item').removeClass('active');
			$(this).siblings('.accordion__item__content').slideUp();

		} else {

			$(this).parent('.accordion__item').addClass('active');
			$(this).siblings('.accordion__item__content').slideDown();
			$(this).parent('.accordion__item').siblings('.accordion__item').removeClass('active');
			$(this).parent('.accordion__item').siblings('.accordion__item').find('.accordion__item__content').slideUp();
		}
	});

	/*ACCORDION-END*/

	$('.certification__accordion__heading').click(function(){
		var _this = $(this);
		if ($(window).width() < 992) {
			$('.popup').animate({
		      scrollTop: $(_this.siblings('.certification__accordion__content')).offset().top + 10 
		  	}, 500);
		}
	});


	// $(".ui-selectmenu-menu").overlayScrollbars({});

	/*POPUPS*/

	$('.overlay, .popup__close').click(function(){
    	$('.popup, .popup__reminder').fadeOut();
    	$('.overlay').fadeOut();
    	$('html').removeClass('overflow-hidden');
    });

    $('.get__certification__popup').click(function(){
    	var data = $(this).data('certification');
    	$('.overlay').fadeIn();
    	$('html').addClass('overflow-hidden');
    	$('.certification__popup[data-certification="'+data+'"]').fadeIn();
    });

	/*POPUPS-END*/


    /*CLICK - CALENDAR-START*/
    $('#ui-id-1-menu').click(function(){
        setValueOfSelect($('#ui-id-1').val());
    });
    $('#ui-id-2-menu').click(function(){
        setValueOfSelect($('#ui-id-2').val());
    });
    $('#ui-id-3-menu').click(function(){
        setValueOfSelect($('#ui-id-3').val());
    });
    $('#ui-id-4-menu').click(function(){
        setValueOfSelect($('#ui-id-4').val());
    });
    $('#ui-id-5-menu').click(function(){
        setValueOfSelect($('#ui-id-5').val());
    });
    $('#ui-id-6-menu').click(function(){
        setValueOfSelect($('#ui-id-6').val());
    });
    $(document).on('change', '.certification__datepicker', function(e) { // Change event for datepicker
		var this_date = e.target.value;
		var year_string = +this_date.substr(6, 4);
        var month_string = +this_date.substr(3, 2)-1;
        var day_string = +this_date.substr(0, 2);

        var setDate = false;

        $(this).children().children(".ui-datepicker-calendar").children("tbody").each(function(){
            $(this).children().each(function(){
				$(this).children().each(function(){
					tdInCalendar = $(this);
					dateInCalendar = +$(this).children().html();
					if(dateInCalendar==day_string && tdInCalendar.hasClass("highlighted")){
						setDate = true;
					}
                });
            });
        });

        if(setDate){
            var date = new Date(year_string,month_string,day_string);

            var time_date = "11:00";
            if(date.getDay()==3){
                time_date = "18:30";
            }
            $('.certification__accordion__date').html(date.getDate() + " " + getCirillMonth(date.getMonth()) + " 2019, " + time_date);
            isPiter($('.certification__accordion__date').html());
		}
    });

    /*CLICK - CALENDAR-END*/
});
function getCirillMonth(m){
	rM = "";
	switch (m){
		case 0:
            rM = "января";
            break;
		case 1:
            rM = "февраля";
            break;
        case 2:
            rM = "марта";
            break;
        case 3:
            rM = "апреля";
            break;
        case 4:
            rM = "мая";
            break;
        case 5:
            rM = "июня";
            break;
        case 6:
            rM = "июля";
            break;
        case 7:
            rM = "августа";
            break;
        case 8:
            rM = "сентября";
            break;
        case 9:
            rM = "октября";
            break;
        case 10:
        	rM = "ноября";
        	break;
        case 11:
            rM = "декабря";
            break;
    }
    return rM;
}
function setValueOfSelect(ob){
    var posYear = ob.indexOf("г.");
    if( posYear>-1 ){
        var posDay = ob.indexOf("(")+1;
        var dayWeek = ob.substr(posDay,2);
        var time_date = "11:00";
        if(dayWeek=="ср"){
            time_date = "18:30";
        }
        $('.certification__accordion__date').html(ob.substr(0,posYear) + ", " + time_date);
        isPiter($('.certification__accordion__date').html());
		//set Date in datepicker
		posFirstSpace = ob.indexOf(" ");
		otherOb = ob.substr(posFirstSpace+1);
		posSecondSpace = otherOb.indexOf(" ");

        var dayDate = +ob.substr(0,posFirstSpace);
        var monthDate = getIntMonth(otherOb.substr(0,posSecondSpace));
        var yearDate = +otherOb.substr(posSecondSpace+1,4);

        var selectDate = new Date(yearDate,monthDate,dayDate);
        $(".certification__datepicker").datepicker().datepicker("setDate", selectDate);
    }
}
function getIntMonth(stringMonth){
    rM = 0;
    switch (stringMonth){
        case "января":
            rM = 0;
            break;
        case "февраля":
            rM = 1;
            break;
        case "марта":
            rM = 2;
            break;
        case "апреля":
            rM = 3;
            break;
        case "мая":
            rM = 4;
            break;
        case "июня":
            rM = 5;
            break;
        case "июля":
            rM = 6;
            break;
        case "августа":
            rM = 7;
            break;
        case "сентября":
            rM = 8;
            break;
        case "октября":
            rM = 9;
            break;
        case "ноября":
            rM = 10;
            break;
        case "декабря":
            rM = 11;
            break;
    }
    return rM;
}
function isPiter(dateS){
	if(dateS=='28 июня 2019, 11:00' || dateS=='28 июня 2019 , 11:00'){
		if($(window).width()<=575){
            $('.certification__accordion__date').html(dateS + '<div style="display:block;">( г. Санкт-Петербург)</div>');
		}else{
            $('.certification__accordion__date').html(dateS + '( г. Санкт-Петербург)');
		}

	}
}