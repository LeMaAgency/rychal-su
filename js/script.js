// $(window).scroll(function() {
//   $('.mov').each(function(){
//     var imagePos = $(this).offset().top;
//     var topOfWindow = $(window).scrollTop();
//     if (imagePos < topOfWindow+500) {
//       $(this).addClass('bounceInLeft');
//     }
//   });
// });

// $(window).scroll(function() {
//   $('.moving').each(function(){
//     var imagePos = $(this).offset().top;
//     var topOfWindow = $(window).scrollTop();
//     if (imagePos < topOfWindow+500) {
//       $(this).addClass('bounceInRight');
//     }
//   });
// });

$(document).ready(function() {
    $("[data-maarv='animated']").maarvAnimated();
});