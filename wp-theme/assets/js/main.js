$(document).ready(function () {
  $(".advantages-section").slick({
    //dots: true,
    infinite: true,
    slidesToShow: 1,
    arrows: false,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 768,
        settings: "unslick",
      },
    ],
  });

  $(window).resize(function () {
    var $window_width = $(window).width();
    if ($window_width < 768) {
      $(".advantages-section").slick("resize");
    }
  });


});
