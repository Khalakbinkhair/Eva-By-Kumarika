 $(function() {
    
    // dislay or hide the menu if the user resize the window
    $(window).resize(function() {
        var wi = $(window).width();
        if (wi >= 992) {
            $('#topbar-menu').css({'display':'block'});
			$('#topbar-menu-icon').removeClass('fas fa-times');
            $('#topbar-menu-icon').addClass('fas fa-bars');
            /*$('.navbar').css({'background':'black'});*/
            console.log("black");

        }
        else {
            $('#topbar-menu').css({'display':'none'});
            $('#topbar-menu-icon').removeClass('fas fa-times');
            $('#topbar-menu-icon').addClass('fas fa-bars');
			/*$('.pull-right a').css({'text-decoration':'none'});*/
            console.log("black 2");
        }
    });
    
    // Change the menu icon, and show or hide the menu
    $('#topbar-menu-icon').click(function(){
        if ($('#topbar-menu').css('display') == 'none') {
            $('#topbar-menu').css({'display':'block'});
            $('#topbar-menu-icon').removeClass('fas fa-bars');
            $('#topbar-menu-icon').addClass('fas fa-times');
            $('.navbar').css({'background':'black'});
            $('#topbar-menu-icon').css({'background':'#000'});
            $('.nav-img').css({'display':'none'});
			/*$('.pull-right a').css({'text-decoration':'none'});*/
            console.log("black1");
        } 
        else {
            $('#topbar-menu').css({'display':'none'});
            $('#topbar-menu-icon').removeClass('fas fa-times');
            $('#topbar-menu-icon').addClass('fas fa-bars');
			/*$('.pull-right a').css({'text-decoration':'none'});*/
            $('.navbar').css({'background':'none'});
            $('#topbar-menu-icon').css({'background':'none'});
            $('.nav-img').css({'display':'block'});
        }
    });
});