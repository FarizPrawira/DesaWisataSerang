/* click events */
function down() {
  $('#splash').animate({
    height: 0
  }, 500);
}
function up() {
  $('#splash').animate({
    height: '100%'
  }, 500);
}
// $("#button-down").on("click", function () {
  
// });
// $("#button-up").on("click", function () {
  
// });

$container = $('#content');

$container.perfectScrollbar();

$container.scroll(function(e) {
  if($container.scrollTop()/100 < 1) {
    $('.navbar').css('opacity', $container.scrollTop()/100);
  } else {
    $('.navbar').css('opacity', 1);
  }

  if($container.scrollTop() == 0) {
    $('.navbar').removeClass('navbar-front');
  } else {
    $('.navbar').addClass('navbar-front');
  }
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

(function makeDiv(){
  var divsize = 1;
  $newdiv = $('<div/>').css({
    'width':divsize+'px',
    'height':divsize+'px'
  });

  var posx = (Math.random() * ($('#post').width() - divsize)).toFixed();
  var posy = (Math.random() * ($('#post').height() - divsize)).toFixed();


  $newdiv
    .attr("id", "halo")
    .attr("title", "Nulla aute laborum consectetur sunt aliquip. Tempor aute ut dolore irure sit. Ex id veniam consectetur ullamco nisi officia minim id. Irure magna exercitation in nulla sunt velit incididunt quis. Veniam dolor in excepteur do excepteur est aliqua sint mollit irure incididunt excepteur.");

  $newdiv.css({
    'position':'absolute',
    'left':posx+'px',
    'top':posy+'px',
    'display':'none'
  })
    .appendTo('#post');

  $newdiv
    .fadeIn(100);

  $('#halo')
    .tooltipster({
      animation: 'grow',
      autoClose: false,
      maxWidth: 300,
      positionTracker: 'true'
    })
    .tooltipster('show');

  $newdiv
    .delay(10000)
    .fadeOut(100, function() {
        $('#halo').tooltipster('destroy');
        $(this).remove();
        makeDiv();
    });
})();
