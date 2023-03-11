
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