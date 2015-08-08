$(document).ready(function() {
    $("#listserang").hide();
    $("#Cpertanian").hide();
    $("#Cpeternakan").hide();
    $("#Cpaketwisata").hide();
    $("#Ckegiatan").hide();
    $("#Cartikel").hide();

    $("#Bpertanian").click(function(){
        $("#Cartikel").hide();
        $("#Cpeternakan").hide();
        $("#Cpaketwisata").hide();
        $("#Cpertanian").show();
        $("#Bpertanian").addClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Ckegiatan").hide();
        $("#Bkegiatan").removeClass("active");
        $("#Cdaftar").hide();
        $("#Bdaftar").removeClass("active");
    });

    $("#Bpeternakan").click(function(){
        $("#Cartikel").hide();
        $("#Cpertanian").hide();
        $("#Cpaketwisata").hide();
        $("#Cpeternakan").show();
        $("#Bpeternakan").addClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Ckegiatan").hide();
        $("#Bkegiatan").removeClass("active");
        $("#Cdaftar").hide();
        $("#Bdaftar").removeClass("active");
    });

    $("#Bpaketwisata").click(function(){
        $("#Cartikel").hide();
        $("#Cpertanian").hide();
        $("#Cpaketwisata").show();
        $("#Cpeternakan").hide();
        $("#Bpaketwisata").addClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Ckegiatan").hide();
        $("#Bkegiatan").removeClass("active");
        $("#Cdaftar").hide();
        $("#Bdaftar").removeClass("active");
    });

    $("#Bartikel").click(function(){
        $("#Cartikel").show();
        $("#Cpertanian").hide();
        $("#Cpaketwisata").hide();
        $("#Cpeternakan").hide();
        $("#Ckegiatan").hide();
        $("#Bkegiatan").removeClass("active");
        $("#Bartikel").addClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Cdaftar").hide();
        $("#Bdaftar").removeClass("active");    
    });

    $("#Bkegiatan").click(function(){
        $("#Cartikel").hide();
        $("#Cpertanian").hide();
        $("#Cpaketwisata").hide();
        $("#Cpeternakan").hide();
        $("#Ckegiatan").show();
        $("#Bkegiatan").addClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Cdaftar").hide();
        $("#Bdaftar").removeClass("active");
    });

    $("#Bdaftar").click(function(){
        $("#Cartikel").hide();
        $("#Cpertanian").hide();
        $("#Cpaketwisata").hide();
        $("#Cpeternakan").hide();
        $("#Ckegiatan").hide();
        $("#Bdaftar").addClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Cdaftar").show();
        $("#Bkegiatan").removeClass("active");
    });

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
