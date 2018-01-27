// Fadein Load effect
// $(window).on('load', function() {
//     $('article').css('display', 'none');
//     $('article').fadeIn(500);
//     $(".spinner").removeClass("loading");
// });
$(window).on('load', function() {
  $(".spinner").removeClass("loading");
  $("article").removeClass("fade");
});

// pop menu out on hover
$(".popout").click(function() {
  $(".popout").toggleClass("open");
  $("#nav-icon").toggleClass("open");
});
$(".mobile-trigger").click(function() {
  $(".mobile-popout, .mobile-bg").toggleClass("open");
});
$(".mobile-bg").click(function() {
  $(".modal, .mobile-bg, .mobile-popout").removeClass("open");
});

// Change document title on tabout
var original = document.title;
$(window).blur(function() {
  document.title = '♥ Come Back Soon';
}).focus(function() {
  setTimeout(function() {
    document.title = original;
  }, 5000);
  document.title = 'Welcome Back!'
});

new WOW().init();
