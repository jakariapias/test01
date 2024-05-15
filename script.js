$(document).ready(function(){


    // home page banner slider
    $('.slider-img').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        autoplaySpeed: 1000,
      });


      // schedule page banner slider
      $('.banner-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        autoplaySpeed: 1000,
      });



})


new VenoBox({
  selector: '.my-video-links',
  maxWidth: '800px',
  border: '10px',
  bgcolor: '#87CEEB',
});


