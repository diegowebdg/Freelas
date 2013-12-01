jQuery(document).ready(function(e) {
    //PreventDefault
	jQuery("a").click(function(e) {
        if(jQuery(this).attr("href")=="#"){
			e.preventDefault()
		}
    });
    
    /* Submenu produtos */
 
 var inner = false;
    
 jQuery( ".empreendimentos-menu" ).on( {mouseenter: function(e){
   
     jQuery( ".submenu-empreendimentos, .hover" ).stop( true, true ).fadeIn();
     jQuery( ".empreendimentos-menu" ).addClass("active");
    
  },
  mouseleave: function(e){
   
   var time = setInterval( function(){
    
    if( !inner ){
     jQuery( ".submenu-empreendimentos, .hover" ).stop( true, true ).fadeOut();
        jQuery( ".empreendimentos-menu" ).removeClass("active");
     clearInterval( time );
    }
    
   }, 200 );
   
  }
  
 } );
 
 jQuery( ".submenu-empreendimentos" ).on( {
  
  mouseenter: function(e){
   
   inner = true;
   
  },
  mouseleave: function(e){
   
   jQuery( ".submenu-empreendimentos, .hover" ).stop( true, true ).delay( 5000 ).fadeOut();
      jQuery( ".empreendimentos-menu" ).removeClass("active");
   inner = false;
   
  }
  
 } );
 
 /* Fim submenu produtos */
    
    /*Content Menu Click*/
    jQuery(".content-menu li").click(function(e){
        var linkSrc = jQuery(this).children("a").attr("href");
        window.location = linkSrc;
    });
    /*End of Content Menu Click*/
	
	/*Destaque hover*/
    jQuery(".detalhes-hover").hover(function(e) {
        jQuery(this).css({opacity:1});
    }, function(e){
		jQuery(this).css({opacity:""});
	});
    jQuery(".destaque-info h3").hover(function(e) {
        jQuery(this).css({color:"#e9821b"});
    }, function(e){
		jQuery(this).css({color:""});
	});
    jQuery(".destaques #destaques-list li").children("a[title*='Mais detalhes']").hover(function(e) {
        jQuery(this).css({background:"#e9821b"});
    }, function(e){
		jQuery(this).css({background:""});
	});
	/*End of Destaque hover*/
    
    /*Mobile menu click | Scroll*/
    jQuery("#header .mobile-view #menu-mobile .menu-expand").click(function(e){
        jQuery("#header .mobile-view #menu-mobile .menu-list").toggleClass("active");
    });
    jQuery(window).scroll(function(e){
        if(jQuery("#header .mobile-view #menu-mobile .menu-list").hasClass("active")){
            jQuery("#header .mobile-view #menu-mobile .menu-list").removeClass("active");
        }
    });
    /*End of Mobile menu click | Scroll*/
    
    /*Filter Duplicates in bairros-list*/
    var seen = {};
    jQuery('#bairros-list-content option').each(function() {
        var txt = jQuery(this).text();
        if (seen[txt])
            jQuery(this).remove();
        else
            seen[txt] = true;
    });
    /*End of Filter Duplicates in bairros-list*/
    
    /*Encontre Imóveis Hover*/
    jQuery(".encontre-imoveis a").hover(function(e){
        jQuery(this).animate({opacity:0.6}, 200);
    }, function(e){
        jQuery(this).animate({opacity:1}, 200);
    });
    /*End of Encontre Imóveis Hover*/
    
});

/*Open pop-up Corretores*/
function corretorDefault(url, title, w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
/*End of Open pop-up Corretores*/


