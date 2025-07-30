/* **** scrollIt ***** */
$(function () {
    $.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: "linear",
        scrollTime: 600,
        activeClass: "active",
        onPageChange: null,
        topOffset: -80,
    });
});
/* **** End scrollIt ***** */


/* **** Navigation Toggle Start **** */
$(".navbar-collapse a").click(function () {
    $(".navbar-collapse").collapse("hide");
});
/* **** Navigation Toggle End **** */


/* **** sticky **** */
// $(window).scroll(function () {
//     if ($(this).scrollTop() > 150) {
//         $("header").addClass("nav-new");
//     } else {
//         $("header").removeClass("nav-new");
//     }
// });
/* **** sticky **** */

$('.multiple-items-kids').slick({
    arrows: true,
    dots: false,
    autoplay: false,
    autoplaySpeed:1000,
    speed: 1000,
    infinite:true,
    slidesToShow:3,
    slidesToScroll:1,
    focusOnSelect:true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow:3,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow:3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '60px 0 0',
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '60px 0 0'
        }
      },
      {
        breakpoint: 359,
        settings: {
          slidesToShow:1,
        }
      }
    ]
});

$('.multiple-items').slick({
    arrows: true,
    dots: false,
    autoplay: false,
    autoplaySpeed:1000,
    speed: 1000,
    infinite:true,
    slidesToShow:2,
    slidesToScroll:1,
    focusOnSelect:true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow:2,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow:2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '60px 0 0',
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '60px 0 0'
        }
      },
      {
        breakpoint: 359,
        settings: {
          slidesToShow:1,
        }
      }
    ]
});