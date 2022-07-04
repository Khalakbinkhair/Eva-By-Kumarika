/*Start 3 slider with text*/

$('.slider-background').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   fade: true,
   arrows: false,
   asNavFor: '.slider-for, .slider-nav',
 });

$('.slider-for').slick({
   autoplay: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav, .slider-text, .slider-background',
 });
  $('.slider-text').slick({
   slidesToShow: 50,
   infinite: true,
   slidesToScroll: 1,
   vertical: true,
   arrows: false,
   fade: true,
   asNavFor: '.slider-for, .slider-nav',
 });

 $('.slider-nav').slick({
   autoplay: true,
   arrows: false,
   slidesToShow: 4,
   slidesToScroll: 1,
   asNavFor: '.slider-for, .slider-text, .slider-background',

   dots: false,
   focusOnSelect: true,
 });
////END////

/*Start 2 slider with custom next button*/
  $('.slider-big').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   fade: true,
   asNavFor: '.slider-short'
 });
 $('.slider-short').slick({
   autoplay: false,
   arrows: false,
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-big',
   dots: false,
   focusOnSelect: true
 });
////END////