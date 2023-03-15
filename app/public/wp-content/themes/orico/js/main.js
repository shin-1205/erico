

/* header toggle menu */


$(function () {
  $(".btn-trigger").on("click", function () {
    $("#main").slideToggle();
    $(this).toggleClass('active');
    if ($('.l-header').hasClass('pick')) {
      $('.l-header').removeClass('pick');
    } else {
      $('.l-header').addClass('pick');
    }
    if ($('.l-header__logo').hasClass('pick')) {
      $('.l-header__logo').removeClass('pick');
    } else {
      $('.l-header__logo').addClass('pick');
    }
    if ($('.l-header__Search').hasClass('pick')) {
      $('.l-header__Search').removeClass('pick');
    } else {
      $('.l-header__Search').addClass('pick');
    }
  });
});


/* s-header scroll */



$(function () {
  // 変数にクラスを入れる
  var section = $('.product-popup');

  //スクロールして、スクロール量が100を超えたら表示
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 150) {
      section.addClass('popup');
    } else {
      section.removeClass('popup');
    }
  });


});




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



/* タブメニュー　hover 開閉 */

$('.s-header__navBottomItem').on('mouseover', function () {
  if ($('#headerTab2').hasClass('open')) {
    $('#headerTab2').removeClass('open');
  } else {
    $('#headerTab2').addClass('open');
  }
});



/* タブ　内容　切り替え */



$(function () {
  $('.s-header__navBottom li').hover(function () {
    var index = $('.s-header__navBottom li').index(this);
    $('.s-header__navBottom li').removeClass('active');
    $(this).addClass('active');
    $('.headerInner2 .headerInner__wrap').removeClass('show').eq(index).addClass('show');

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





$(function () {
  $(".menu-btn").on("click", function () {
    $(".menu").slideToggle();
  });
});


/* footer acordion */

$(function () {
  //クリックで動く
  $('.nav-open').click(function () {
    $(this).toggleClass('footerOpen');
    $(this).next('.footerListSP').slideToggle();
  });

});



