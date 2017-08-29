$(window).on('load',function(){
    resizeLoginSects();
});

function resizeLoginSects(){
    var mdCheck = $(".md-check").width();
    if(mdCheck==1){
        loginWrapper = $(".login-content-wrapper").outerHeight();
        windowHeight = $(window).height();
        if ( loginWrapper > windowHeight) {
            // scrollbar
            $(".login-content").css("height","auto");
            var loginContent = $(".login-content").outerHeight();
            $(".login-img").css("height",loginContent);
        } else {
            //alert(a +"-"+ b);
        }
    }
    
}