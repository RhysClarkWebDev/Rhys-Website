//PRELOADER
const body = document.querySelector("body");

function counter(){
  var count = setInterval(function(){
    var c = parseInt($('.counter').text());
    $('.counter').text((++c).toString());
    if (c == 100){
      clearInterval(count);
      $('.counter').addClass('hide')
      $('.preloader').addClass('active')
      $('body').removeClass('noscroll')
    }
  },60)
}
counter()
