jQuery(function($) {


  var doAnimationsSliderBlack = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animTxtSlide = $('.text-slider-black');
    if ($animTxtSlide.length == 0) {
      $(window).off('scroll', doAnimationsSliderBlack);
    }
     $animTxtSlide.each(function(i) {
      var $animTxtSlider = $(this);
      if (($animTxtSlider.offset().top + $animTxtSlider.height() - 200) < offset) {
        $animTxtSlider.removeClass('text-slider-black').addClass('text-black-hits');
      }
    });
  };
  var doAnimationsSliderRed = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animTxtSlide = $('.text-slider-white');
    if ($animTxtSlide.length == 0) {
      $(window).off('scroll', doAnimationsSliderRed);
    }
     $animTxtSlide.each(function(i) {
      var $animTxtSlider = $(this);
      if (($animTxtSlider.offset().top + $animTxtSlider.height() - 200) < offset) {
        $animTxtSlider.removeClass('text-slider-white').addClass('text-white-hits');
      }
    });
  };
  var doAnimationsLeft = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animTxtLeft = $('.textbox-left');
    if ($animTxtLeft.length == 0) {
      $(window).off('scroll', doAnimationsLeft);
    }
    $animTxtLeft.each(function(i) {
      var $animatableLeft = $(this);
      if (($animatableLeft.offset().top + $animatableLeft.height() - 20) < offset) {
        $animatableLeft.removeClass('textbox-left').addClass('overlay-anim-textbox-l');
      }
    });
  };

    var doAnimationsRight = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animTxtRight = $('.textbox-right');
    if ($animTxtRight.length == 0) {
      $(window).off('scroll', doAnimationsRight);
    }
     $animTxtRight.each(function(i) {
      var $animatableRight = $(this);
      if (($animatableRight.offset().top + $animatableRight.height() - 20) < offset) {
        $animatableRight.removeClass('textbox-right').addClass('overlay-anim-textbox-r');
      }
    });
  };

    var doAnimationsLeftImg = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animImgLeft = $('.imgbox-left');
    if ($animImgLeft.length == 0) {
      $(window).off('scroll', doAnimationsLeftImg);
    }
    $animImgLeft.each(function(i) {
      var $animatableLeft = $(this);
      if (($animatableLeft.offset().top + $animatableLeft.height() - 20) < offset) {
        $animatableLeft.removeClass('imgbox-left').addClass('overlay-anim-img-l');
      }
    });
  };

    var doAnimationsRightImg = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animImgRight = $('.imgbox-right');
    if ($animImgRight.length == 0) {
      $(window).off('scroll', doAnimationsRightImg);
    }
     $animImgRight.each(function(i) {
      var $animatableRight = $(this);
      if (($animatableRight.offset().top + $animatableRight.height() - 20) < offset) {
        $animatableRight.removeClass('imgbox-right').addClass('overlay-anim-img-r');
      }
    });
  };

  var doAnimationsTop = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animTxtTop = $('.textbox-top');
    if ($animTxtTop.length == 0) {
      $(window).off('scroll', doAnimationsTop);
    }
     $animTxtTop.each(function(i) {
      var $animTxtTop = $(this);
      if (($animTxtTop.offset().top + $animTxtTop.height() - 200) < offset) {
        $animTxtTop.removeClass('textbox-top').addClass('overlay-anim-top');
      }
    });
  };

  var doAnimationsBottom = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animTxtBottom = $('.textbox-bottom');
    if ($animTxtBottom.length == 0) {
      $(window).off('scroll', doAnimationsBottom);
    }
     $animTxtBottom.each(function(i) {
      var $animTxtBottom = $(this);
      if (($animTxtBottom.offset().top + $animTxtBottom.height() - 200) < offset) {
        $animTxtBottom.removeClass('textbox-bottom').addClass('overlay-anim-bottom');
      }
    });
  };

  var doAnimationsBoxRight = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animBoxRight = $('.box-right');
    if ($animBoxRight.length == 0) {
      $(window).off('scroll', doAnimationsBoxRight);
    }
     $animBoxRight.each(function(i) {
      var $animBoxRight = $(this);
      if (($animBoxRight.offset().top + $animBoxRight.height() - 200) < offset) {
        $animBoxRight.removeClass('box-right').addClass('slide-in');
      }
    });
  };


  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimationsSliderBlack);
  $(window).on('scroll', doAnimationsSliderRed);
  $(window).on('scroll', doAnimationsLeft);
  $(window).on('scroll', doAnimationsRight);
  $(window).on('scroll', doAnimationsLeftImg);
  $(window).on('scroll', doAnimationsRightImg);
  $(window).on('scroll', doAnimationsBottom);
  $(window).on('scroll', doAnimationsTop);
  $(window).on('scroll', doAnimationsBoxRight);
  $(window).trigger('scroll');


});
