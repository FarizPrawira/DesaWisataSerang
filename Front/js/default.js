$(document).ready(function() {
  $("#menu").hide(); 
  $("#menu1").click(function(){
      if($("#menu1").hasClass("active")==true){
        $("#menu1").removeClass("active");
      }else{
        $("#menu1").addClass("active");
            
      }
// $("#menu1").animate({top: '20px'});
$("#menu").toggle(function(){
    })
  });

  $("#owl-example").owlCarousel();
  $("#owl-example").owlCarousel({
    // Most important owl features
    items : 1,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,

    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,

    //Autoplay
    autoPlay : true,
    stopOnHover : true,

    // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,

    //Pagination
    pagination : true,
    paginationNumbers: false,

    // Responsive
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
  });



});