$(document).ready(function() {
    $("#listserang").hide();
    $("#menuserang").click(function(){
    if($("#menuserang").hasClass("active")==true){
        $("#menuserang").removeClass("active");
    }else{
        $("#menuserang").addClass("active");
        $("#menuwisata").removeClass("active");
        $("#menukegiatan").removeClass("active");
        $("#menuartikel").removeClass("active");
    }
    $("#listserang").slideToggle("fast");
    $("#listkegiatan").hide();
    $("#listwisata").hide();
    $("#listartikel").hide();
    });

    $("#listwisata").hide();
    $("#menuwisata").click(function(){
    if($("#menuwisata").hasClass("active")==true){
        $("#menuwisata").removeClass("active");
    }else{
        $("#menuwisata").addClass("active");
        $("#menuserang").removeClass("active");
        $("#menukegiatan").removeClass("active");
        $("#menuartikel").removeClass("active");
    }

    $("#img1").hover()
    $("#listwisata").slideToggle("fast");
    $("#listkegiatan").hide();
    $("#listserang").hide();
    $("#listartikel").hide();
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
