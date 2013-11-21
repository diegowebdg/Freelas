jQuery(document).ready(function(e) {
    
    /*Main Menu hover*/
    jQuery(".content-menu li").hover(function(e){
        jQuery(this).css({backgroundColor:"#003C4E" }, 250);
    }, function(e){
        jQuery(this).css({backgroundColor:""}, 250);
    });
    /*End of Main Menu hover*/
    
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