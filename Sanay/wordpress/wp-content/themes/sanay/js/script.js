jQuery(document).ready(function(e) {
    //PreventDefault
	jQuery("a").click(function(e) {
        if(jQuery(this).attr("href")=="#"){
			e.preventDefault()
		}
    });
    
    /*Expand the submenu*/
    jQuery(".empreendimentos-menu").hover(function(e){
        jQuery(this).addClass("active");
        jQuery(".submenu-empreendimentos").addClass("active");
    });
    /*End of Expand the submenu*/
    
    /*Content Menu Click*/
    jQuery(".content-menu li").click(function(e){
        var linkSrc = jQuery(this).children("a").attr("href");
        window.location = linkSrc;
    });
    /*End of Content Menu Click*/
	
	/*Destaque hover*/
	jQuery(".destaques #destaques-list li").hover(function(e) {
        jQuery(this).children(".detalhes-hover").css({opacity:1});
        jQuery(this).children("h3").css({color:"#e9821b"});
        jQuery(this).children("a:contains('Mais detalhes')").css({transform:"scale(1.1)"});
        
    }, function(e){
		jQuery(this).children(".detalhes-hover").css({opacity:""});
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
        if(jQuery(".submenu-empreendimentos").hasClass("active") && jQuery(".empreendimentos-menu").hasClass("active")){
            jQuery(".submenu-empreendimentos").removeClass("active");
            jQuery(".empreendimentos-menu").removeClass("active");
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
    
});

/*Open pop-up Corretores*/
function corretorDefault(url, title, w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 
/*End of Open pop-up Corretores*/


