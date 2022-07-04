  $(document).ready(function(){
  var owl = $('.owl-carousel').owlCarousel({
    /*autoplay: true,*/
    /*loop:true,
    margin:5,*/
    items:4,
    nav: true,
    dots: false,
    navText: ["<img src=frontend/image/team/arrow-prev.svg>","<img src=frontend/image/team/arrow-next.svg>"]
    });
    owl.on('changed.owl.carousel', function(event) {
    setTimeout(function(){
      var activeEls = $('.owl-item.active').eq(2); // .eq(1) to get the "middle image out of 3 actives"
      setCarouselCaption( activeEls ); 
    },2);
  });
  function setCarouselCaption(el){
    $(".owl-item").removeClass("target");
    el.addClass("target");
  }
  $('.owl-carousel').find('.owl-nav').removeClass('disabled');
$('.owl-carousel').on('changed.owl.carousel', function(event) {
  $(this).find('.owl-nav').removeClass('disabled');
});
});