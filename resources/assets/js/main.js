$(document).ready(function() {
  var $header = $('.header'),
        headerTop = $header.offset().top;
        headerHeight = $header.height();

  $(window).scroll(function() {
    var windowScroll = $(window).scrollTop() + headerHeight;
    if (windowScroll > headerHeight) {
      $header.addClass('header--sticky');
    } else {
      $header.removeClass('header--sticky');
    }
  });
});

$(document).ready(function() {
	var $navLink = $('.nav__link'),
				$header = $('.header'),
				headerHeight = $header.height();
	function onScroll(event) {
	  var scrollPos = $(document).scrollTop();
	  $navLink.each(function() {
	    var $currLink = $(this),
		        $refElement = $($currLink.attr('href'));
	    
	    if($refElement.position().top <= scrollPos + headerHeight) {
	      $navLink.removeClass('nav__link--current');
	      $currLink.addClass('nav__link--current');
	    }
	    else {
	      $currLink.removeClass('nav__link--current');
	    }
	  });
	}

	$(document).on('scroll', onScroll);
  
  $('.nav a[href^="#"]').on('click', function(event) {
    event.preventDefault();
    $(document).off('scroll');
    
    $navLink.each(function() {
      $(this).removeClass('nav__link--current');
    });
    
    $(this).addClass('nav__link--current');
    
    var target = this.hash,
        menu = target;
    
    $target = $(target);
    
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top+2
    }, 500, 'swing', function() {
      window.location.hash = target;
      
      $(document).on('scroll', onScroll);
    });
  });

		$('.footer__nav a[href^="#"]').click(function() {
      var hash = $(this).attr('href');
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1500);
        return false;
    });
});



$(document).ready(function() {
  
});

$(document).ready(function() {
	var $navBar = $('.nav__bar');
	var $navTrigger = $('.nav__trigger');

	$navTrigger.click(function() {
		if ($navBar.hasClass('nav--show')) {
			
			$navBar.removeClass('nav--show');
		} else {
			$navBar.addClass('nav--show');
		}
	});
});



$(document).ready(function() {
	var $langToggle = $('.language__toggle');
	var $langList = $('.language__list');

	$langToggle.click(function(e) {
		e.preventDefault();
		$langList.slideToggle();
	})
});

$(document).ready(function() {
var $reviewsSlider = $('.reviews__slider');

	if ($reviewsSlider.length > 0) {
		$reviewsSlider.slick({
			infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 2,
		  dots: true,
		  centerMode: true,
		  focusOnSelect: true,
		  responsive: [
			  {
			  	breakpoint: 1024,
			  	settings: {
			  		slidesToShow: 2,
					  slidesToScroll: 1
			  	}
			  },
			  {
			  	breakpoint: 767,
			  	settings: {
			  		slidesToShow: 1,
					  slidesToScroll: 1,
					  dots: false
			  	}
			  }
		  ]
		});
	}
});

$(document).ready(function() {
	AOS.init({
	  duration: 600,
	  // easing: "ease-in-quad",
	  delay: 100,
	  once: 'false',
	  disable: function () {
	    var maxWidth = 1024;
	    return window.innerWidth < maxWidth;
	  }
	});
});

$(document).ready(function() {
	var $directions = $('.directions'),
				$directionsDesc = $('.directions-desc'),
				$directionsDescContainer = $('.directions-desc__container');

	$directions.on('click', '.directions__link', function(e) {
	    e.preventDefault();
	    var block = $(this).parents('.directions__col');
	    block.addClass('directions-desc--show');
	    block.siblings().removeClass('directions-desc--show');
	});

  $(document).mouseup(function (e){
		if (!$directionsDescContainer.is(e.target)
		    && $directionsDescContainer.has(e.target).length === 0) { 
			$('.directions__col').siblings().removeClass('directions-desc--show');
		}
	});

	$directions.on('click', '.directions-desc__close', function() {
	    var block = $(this).parents('.directions__col');
	    block.removeClass('directions-desc--show');
	});
});

$(document).ready(function() {
	var $popupToggle	= $('.popup__toggle'),
				$popup = $('.popup'),
				$popupClose = $('.popup__close'),
				$popupContainer = $('.popup__container');

	$popupToggle.click(function(evt) {
		evt.preventDefault();
		if (!$popup.hasClass('popup--show')) {
			$popup.addClass('popup--show');
		}
	});

	$(document).mouseup(function (e){
		if (!$popupContainer.is(e.target)
		    && $popupContainer.has(e.target).length === 0) { 
			$popup.removeClass('popup--show');
		}
	});

	$popupClose.click(function() {
			$popup.removeClass('popup--show');
	});
});



