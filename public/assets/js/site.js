$(document).ready(function() {
    $("#listserang").hide();
    // DASHBOARD MENU
    $("#Cgalery").hide();
    $("#Cartikel").hide();
    $("#Ckegiatan").hide();
    $("#Cpertanian").hide();
    $("#Cpeternakan").hide();
    $("#Cpaketwisata").hide();
    // KEGIATAN MENU
    $("#Clomba").hide();
    $("#Cacara").hide();
    $("#Csosial").hide();

    // Fix Content
    $(".desc + p").hide();
    $(".desc").click(function(){
        $(this).find("+p").slideToggle("fast");
    });

    // MENU KEGIATAN
    $("#Bdaftarkeg").click(function(){
        $("#Cdaftarkeg").show();
        $("#Cacara").hide();
        $("#Clomba").hide();
        $("#Csosial").hide();
        $("#Bdaftarkeg").addClass("active");
        $("#Bacara").removeClass("active");
        $("#Blomba").removeClass("active");
        $("#Bsosial").removeClass("active");
    });
    $("#Bacara").click(function(){
        $("#Cacara").show();
        $("#Clomba").hide();
        $("#Csosial").hide();
        $("#Cdaftarkeg").hide();
        $("#Bacara").addClass("active");
        $("#Blomba").removeClass("active");
        $("#Bsosial").removeClass("active");
        $("#Bdaftarkeg").removeClass("active");
    });
    $("#Blomba").click(function(){
        $("#Clomba").show();
        $("#Cacara").hide();
        $("#Csosial").hide();
        $("#Cdaftarkeg").hide();
        $("#Blomba").addClass("active");
        $("#Bacara").removeClass("active");
        $("#Bsosial").removeClass("active");
        $("#Bdaftarkeg").removeClass("active");
    });
    $("#Bsosial").click(function(){
        $("#Csosial").show();
        $("#Clomba").hide();
        $("#Cacara").hide();
        $("#Cdaftarkeg").hide();
        $("#Bsosial").addClass("active");
        $("#Blomba").removeClass("active");
        $("#Bacara").removeClass("active");
        $("#Bdaftarkeg").removeClass("active");
    });
    // END MENU KEGIATAN

    // MENU DASHBOARD
    $("#Bpertanian").click(function(){
        $("#Cpertanian").show();
        $("#Cdaftar").hide();
        $("#Cgalery").hide();
        $("#Cartikel").hide();
        $("#Ckegiatan").hide();
        $("#Cpeternakan").hide();
        $("#Cpaketwisata").hide();
        $("#Bpertanian").addClass("active");
        $("#Bdaftar").removeClass("active");
        $("#Bgalery").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bkegiatan").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
    });
    $("#Bpeternakan").click(function(){
        $("#Cpeternakan").show();
        $("#Cdaftar").hide();
        $("#Cgalery").hide();
        $("#Cartikel").hide();
        $("#Ckegiatan").hide();
        $("#Cpertanian").hide();
        $("#Cpaketwisata").hide();
        $("#Bpeternakan").addClass("active");
        $("#Bdaftar").removeClass("active");
        $("#Bgalery").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bkegiatan").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
    });
    $("#Bpaketwisata").click(function(){
        $("#Cpaketwisata").show();
        $("#Cgalery").hide();
        $("#Cdaftar").hide();
        $("#Cartikel").hide();
        $("#Ckegiatan").hide();
        $("#Cpertanian").hide();
        $("#Cpeternakan").hide();
        $("#Bpaketwisata").addClass("active");
        $("#Bdaftar").removeClass("active");
        $("#Bgalery").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bkegiatan").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpeternakan").removeClass("active");
    });
    $("#Bartikel").click(function(){
        $("#Cartikel").show();
        $("#Cdaftar").hide();
        $("#Cgalery").hide();
        $("#Ckegiatan").hide();
        $("#Cpertanian").hide();
        $("#Cpeternakan").hide();
        $("#Cpaketwisata").hide();
        $("#Bartikel").addClass("active");
        $("#Bdaftar").removeClass("active");    
        $("#Bgalery").removeClass("active");
        $("#Bkegiatan").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
    });
    $("#Bkegiatan").click(function(){
        $("#Ckegiatan").show();
        $("#Cdaftar").hide();
        $("#Cgalery").hide();
        $("#Cartikel").hide();
        $("#Cpertanian").hide();
        $("#Cpeternakan").hide();
        $("#Cpaketwisata").hide();
        $("#Bkegiatan").addClass("active");
        $("#Bdaftar").removeClass("active");
        $("#Bgalery").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
    });
    $("#Bdaftar").click(function(){
        $("#Cdaftar").show();
        $("#Cgalery").hide();
        $("#Cartikel").hide();
        $("#Ckegiatan").hide();
        $("#Cpertanian").hide();
        $("#Cpeternakan").hide();
        $("#Cpaketwisata").hide();
        $("#Bdaftar").addClass("active");
        $("#Bgalery").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bkegiatan").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
    });
    $("#Bgalery").click(function(){
        $("#Cgalery").show();
        $("#Cdaftar").hide();
        $("#Cartikel").hide();
        $("#Ckegiatan").hide();
        $("#Cpertanian").hide();
        $("#Cpeternakan").hide();
        $("#Cpaketwisata").hide();
        $("#Bgalery").addClass("active");
        $("#Bdaftar").removeClass("active");
        $("#Bartikel").removeClass("active");
        $("#Bkegiatan").removeClass("active");
        $("#Bpertanian").removeClass("active");
        $("#Bpeternakan").removeClass("active");
        $("#Bpaketwisata").removeClass("active");
    });
    // END MENU DASHBOARD

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

    $("#menuwisata").click(function(){
        if($("#menuwisata").hasClass("active")==true){
            $("#menuwisata").removeClass("active");
        }else{
            $("#menuwisata").addClass("active");
            $("#menuserang").removeClass("active");
            $("#menukegiatan").removeClass("active");
            $("#menuartikel").removeClass("active");
        }
        $("#listwisata").slideToggle("fast");
        $("#listkegiatan").hide();
        $("#listserang").hide();
        $("#listartikel").hide();
    });

    // $(".content .container").click(function(){
    //     $("#listwisata").hide();
    //     $("#listkegiatan").hide();
    //     $("#listserang").hide();
    //     $("#listartikel").hide();
    //  });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function() {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });

    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-'+id).html());
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