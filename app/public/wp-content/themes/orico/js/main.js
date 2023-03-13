
/* タブメニュー　hover 開閉 */

$('.l-header__navBottomItem').on('mouseover', function () {
  if ($('#headerTab').hasClass('open')) {
    $('#headerTab').removeClass('open');
  } else {
    $('#headerTab').addClass('open');
  }
});



/* タブ　内容　切り替え */



$(function () {
  $('.l-header__navBottom li').hover(function () {
    var index = $('.l-header__navBottom li').index(this);
    $('.l-header__navBottom li').removeClass('active');
    $(this).addClass('active');
    $('.headerInner .headerInner__wrap').removeClass('show').eq(index).addClass('show');

  });
});




/* hero swiper slider */


$(document).ready(function () {
  var swiper = new Swiper(".swiper-container", {
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    speed: 500,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      progress: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    on: {
      init: function () {
        $(".swiper-progress-bar").removeClass("animate");
        $(".swiper-progress-bar").removeClass("active");
        $(".swiper-progress-bar").eq(0).addClass("animate");
        $(".swiper-progress-bar").eq(0).addClass("active");
      },
      slideChangeTransitionStart: function () {
        $(".swiper-progress-bar").removeClass("animate");
        $(".swiper-progress-bar").removeClass("active");
        $(".swiper-progress-bar").eq(0).addClass("active");
      },
      slideChangeTransitionEnd: function () {
        $(".swiper-progress-bar").eq(0).addClass("animate");
      }
    }
  });
});



/* News Area 1 TabMenu */

$(function () {
  $(".tab a").click(function () {
    $(this).parent().addClass("active").siblings(".active").removeClass("active");
    var tabContents = $(this).attr("href");
    $(tabContents).addClass("active").siblings(".active").removeClass("active");
    return false;
  });
});




/* Caution Hide button */



$('.menu-btn').click(function () {
  $(this).toggleClass('is-open');
  $(this).siblings('.menu').toggleClass('is-open');
});