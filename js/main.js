
$(document).ready(function(){

  /* $('.team-slider').slick({
    infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }
  ]
  }); */

  $('.social-slide').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      centerMode: true,
  focusOnSelect: true,
      responsive: [
       {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
  });

  $('#show_blog').on('click', function(){
     $('.blog_wrapper .row').removeClass('blog-hidden');
     $(this).addClass('hidden');
  })
});
	