/* click events */
$("#button-down").on("click", function () {
    $('#splash').animate({
        height: 0
    }, 500);
});
$("#button-up").on("click", function () {
    $('#splash').animate({
        height: '100%'
    }, 500);
});
