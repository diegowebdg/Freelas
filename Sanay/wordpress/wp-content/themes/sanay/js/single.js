$(document).ready(function(e) {
	lightboxMargin();
    
	/*Destaque hover*/
	$(".gallery .large-image, .planta-gallery .large-image").hover(function(e) {
        $(this).children(".detalhes-hover").css({opacity:1});
    }, function(e){
		$(this).children(".detalhes-hover").css({opacity:""});
	});
	/*End of Destaque hover*/
    
    
    /*Galery Thumbs - Link*/
    var imageList    = new Array();
    var currentImage = 0;
    $(".gallery .thumbs a").each(function(index, element) {
        imageList[ index ]         = new Object();
        imageList[ index ].id      = index;
        imageList[ index ].element = $(element);
        imageList[ index ].image   = $(element).attr("href");
        imageList[ index ].title   = $(element).attr("title");
    });
    
    
    /*Get the width of each <li>*/
    var galleryViewportMargin = 0;
    
    var liWidth    = $( ".gallery .viewport li").width();
    var liMargin   = $( ".gallery .viewport li").css("margin-right");
    var widthTotal = parseFloat(liWidth);
    if(isNaN(widthTotal)){
        var widthTotal = 0;
    }
    var marginTotal = parseFloat(liMargin);
    var liDistance  = widthTotal += marginTotal;
    /*End of Get the width of each <li>*/
    
    
    $( ".gallery .selectors .prev" ).click( function(e){
        e.preventDefault();
        currentImage--;
        changeImage();
        var viewportMargin    = $(".gallery .viewport").css("margin-left");
        galleryViewportMargin = parseFloat(viewportMargin) + parseFloat(liDistance) + "px";
        $(".gallery .viewport").css("margin-left", galleryViewportMargin);
        
        if($(".gallery .viewport").css("margin-left", "0px")){
            $( ".gallery .selectors .prev" ).addClass("selected");
        }
        
    } );
    $( ".gallery .selectors .next" ).click( function(e){
        e.preventDefault();
        currentImage++;
        changeImage();
        var viewportMargin    = $(".gallery .viewport").css("margin-left");
        galleryViewportMargin = parseFloat(viewportMargin) - parseFloat(liDistance) + "px";
        $(".gallery .viewport").css("margin-left", galleryViewportMargin);
    } );
    imageList[ currentImage ].element.addClass("selected");
    
    $(".gallery .selectors a").click(function(e) {
        event.preventDefault();
        for( key in imageList ) if( $(this).attr("href") == imageList[key].image ) currentImage = imageList[key].id;
        changeImage();
    });
    
    function changeImage(){
        $(".gallery .large-image img").attr("src", imageList[ currentImage ].image);
        $(".gallery .large-image img").attr("title", imageList[ currentImage ].title);
        $(".gallery .large-image img").hide().fadeIn(300);
        $(".gallery .selectors a").removeClass("selected");
        imageList[ currentImage ].element.addClass("selected");
        $(".gallery .large-image a").attr("href", imageList[ currentImage ].image);
        
        
        if( currentImage == 0 ) $( ".gallery .selectors .prev" ).addClass("selected");
        else $( ".gallery .selectors .prev" ).removeClass("selected");
        if( currentImage == (imageList.length - 1) ) $( ".gallery .selectors .next" ).addClass("selected");
        else $( ".gallery .selectors .next" ).removeClass("selected");
        
        /*Tittle of large image*/
        var largeTitle = imageList[ currentImage ].element.children("img").attr("title");
        if(largeTitle !== 'undefined' && largeTitle !== '' ){
            $(".gallery .large-image span").remove();
            $(".gallery .large-image").append("<span>" + largeTitle + "</span>");
        } else{
            $(".gallery .large-image span").remove();
        }
        /*End of Tittle of large image*/
    }
    
    /*End of Galery Thumbs - Link*/
    
    
    /*Planta Galery Thumbs - Link*/
    var plantaimageList    = new Array();
    var plantacurrentImage = -1;
    $(".planta-gallery .thumbs a").each(function(index, element) {
        if (plantacurrentImage == -1)plantacurrentImage = 0;
        plantaimageList[ index ]         = new Object();
        plantaimageList[ index ].id      = index;
        plantaimageList[ index ].element = $(element);
        plantaimageList[ index ].image   = $(element).attr("href");
        plantaimageList[ index ].title   = $(element).attr("title");
    });
    
    
    /*Get the width of each <li>*/
    var plantagalleryViewportMargin = 0;
    
    var plantaliWidth    = $( ".planta-gallery .viewport li").width();
    var plantaliMargin   = $( ".planta-gallery .viewport li").css("margin-right");
    var plantawidthTotal = parseFloat(plantaliWidth);
    if(isNaN(plantawidthTotal)){
        var plantawidthTotal = 0;
    }
    var plantamarginTotal = parseFloat(plantaliMargin);
    var plantaliDistance  = plantawidthTotal += plantamarginTotal;
    /*End of Get the width of each <li>*/
    
    
    $( ".planta-gallery .selectors .prev" ).click( function(e){
        e.preventDefault();
        plantacurrentImage--;
        plantachangeImage();
        var plantaviewportMargin    = $(".planta-gallery .viewport").css("margin-left");
        plantagalleryViewportMargin = parseFloat(plantaviewportMargin) + parseFloat(plantaliDistance) + "px";
        $(".planta-gallery .viewport").css("margin-left", plantagalleryViewportMargin);
        
        if($(".planta-gallery .viewport").css("margin-left", "0px")){
            $( ".planta-gallery .selectors .prev" ).addClass("selected");
        }
        
    } );
    $( ".planta-gallery .selectors .next" ).click( function(e){
        e.preventDefault();
        plantacurrentImage++;
        plantachangeImage();
        var plantaviewportMargin    = $(".planta-gallery .viewport").css("margin-left");
        plantagalleryViewportMargin = parseFloat(plantaviewportMargin) - parseFloat(plantaliDistance) + "px";
        $(".planta-gallery .viewport").css("margin-left", plantagalleryViewportMargin);
    } );
    if(plantacurrentImage != -1)plantaimageList[ plantacurrentImage ].element.addClass("selected");
    
    $(".planta-gallery .selectors a").click(function(e) {
        event.preventDefault();
        for( key in plantaimageList ) if( $(this).attr("href") == plantaimageList[key].image ) plantacurrentImage = plantaimageList[key].id;
        plantachangeImage();
    });
    
    function plantachangeImage(){
        $(".planta-gallery .large-image img").attr("src", plantaimageList[ plantacurrentImage ].image);
        $(".planta-gallery .large-image img").attr("title", plantaimageList[ plantacurrentImage ].title);
        $(".planta-gallery .large-image img").hide().fadeIn(300);
        $(".planta-gallery .selectors a").removeClass("selected");
        plantaimageList[ plantacurrentImage ].element.addClass("selected");
        $(".planta-gallery .large-image a").attr("href", plantaimageList[ plantacurrentImage ].image);
        
        
        if( plantacurrentImage == 0 ) $( ".planta-gallery .selectors .prev" ).addClass("selected");
        else $( ".planta-gallery .selectors .prev" ).removeClass("selected");
        if( plantacurrentImage == (plantaimageList.length - 1) ) $( ".planta-gallery .selectors .next" ).addClass("selected");
        else $( ".planta-gallery .selectors .next" ).removeClass("selected");
        
        /*Tittle of large image*/
        var plantalargeTitle = plantaimageList[ plantacurrentImage ].element.children("img").attr("title");
        if(plantalargeTitle !== 'undefined' && plantalargeTitle !== '' ){
            $(".planta-gallery .large-image span").remove();
            $(".planta-gallery .large-image").append("<span>" + plantalargeTitle + "</span>");
        } else{
            $(".planta-gallery .large-image span").remove();
        }
        /*End of Tittle of large image*/
    }
    
    /*End of Planta Galery Thumbs - Link*/
    
    
    /*Lightbox*/
    
    function lightboxMargin() {
        var lightboxWidth  = $(".lightbox .lightbox-content img").width() / 2;
        var lightboxHeight = $(".lightbox .lightbox-content img").height() / 2;
        
        var lightboxMarginTop  = "-" + parseFloat(lightboxHeight) + "px";
        var lightboxMarginLeft = "-" + parseFloat(lightboxWidth) + "px";
        $(".lightbox .lightbox-content").css("margin-top", lightboxMarginTop);
        $(".lightbox .lightbox-content").css("margin-left", lightboxMarginLeft);
    }
    lightboxMargin();
    $(".lightbox .lightbox-content").css("width", $(".lightbox .lightbox-content img").width());
    $(".lightbox .lightbox-content").css("height", $(".lightbox .lightbox-content img").height());
    
    $(window).resize(function(e){
        lightboxMargin();
    });
    
    $(".fechar").click(function(e){
        e.preventDefault;
        $(this).parent().parent().fadeOut(300);
    });
    $(".lightbox").click(function(e){
        e.preventDefault;
        $(this).fadeOut(300);
    });
    
    $(".detalhes-hover").click(function(e){
        setTimeout(lightboxMargin, 200);
        event.preventDefault();
        
        var detalhesLink = $(this).attr("href");
        $(".lightbox .lightbox-content img").attr("src", detalhesLink);
        $(".lightbox").fadeIn(300);
    });
    /*End of Lightbox*/
    
    /*Hide Gallery if this don't have any images*/
    if($(".gallery .viewport ul li").size() > 0){
        $(".gallery").show();
    } else{
        $(".gallery").hide();
    }
    /*End of Hide Gallery if this don't have any images*/
    
    /*Hide Planta Gallery if this don't have any images*/
    if($(".planta-gallery .viewport ul li").size() > 0){
        $(".planta-gallery").show();
    } else{
        $(".planta-gallery").hide();
    }
    /*End of Hide Planta Gallery if this don't have any images*/
    
    /*Mobile Expand*/
    $(".ficha-tecnica .mobile-expand").click(function(e){
        $(".ficha-tecnica ul").toggleClass("active");
    });
    /*Mobile Expand*/
    
    /*Hide empty Ficha Técnica <li>*/
    $(".ficha-tecnica li span:empty").parent().remove();
    $(".ficha-tecnica li span a[href*='http://']").parent().parent().remove();
    /*End of Hide empty Ficha Técnica <li>*/
    
    /*Remove Image if don't have text*/
    if($(".main-img-txt").find("p").length == 0){
        $(".main-img-txt").remove();
    }
    /*END OF Remove Image if don't have text*/
    
	
});