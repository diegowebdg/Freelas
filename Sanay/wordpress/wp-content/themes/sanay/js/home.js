jQuery(document).ready(function(e) {
    
    /*Main Menu hover*/
    jQuery(".content-menu .obra, .content-menu .lancamento, .content-menu .futuro-lancamento, .content-menu .entregues, .content-menu .bairro").hover(function(e){
        jQuery(this).css({backgroundColor:"#003C4E" }, 250);
    }, function(e){
        jQuery(this).css({backgroundColor:""}, 250);
    });
    /*jQuery(".content-menu li.corretor").hover(function(e){
        jQuery(this).css({backgroundColor:"#e7851a",  backgroundImage:"url('../images/content-menu-corretor-online.png')", backgroundRepeat: "no-repeat", backgroundPosition: "center 23px" });
    }, function(e){
        jQuery(this).css({background:""}, 250);
    });*/
    /*End of Main Menu hover*/
    
    /*Slider Hover*/
    jQuery(".camera_next, .camera_prev").hover(function(e){
        console.log("works");
        jQuery(this).animate({opacity:0.6});
    }, function(e){
        console.log("works2");
        jQuery(this).animate({opacity:1})
    });
    /*End of Slider Hover*/
    
    /*Camera Slider*/
    jQuery(".slider").camera({
		loader: 'none',
        height: '460px',
        pagination: false,
		hover: false,
		navigationHover: false,
		playPause: false,
		pauseOnClick: false,
		time: 3500,
		fx: 'curtainBottomLeft'
	});
    /*End of Camera Slider*/
    
    
	
});