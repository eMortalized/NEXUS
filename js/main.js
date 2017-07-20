$(document).ready(function(){
    
    $("#link_top").hide();
    $('#link_top_mob').hide();
            
    $('[data-toggle="tooltip"]').tooltip(); 
    /* Top Navbar State */
    var navbarState = 0;
    $("body").on( "click",'.pulldown', function() {
        slideNav();
    });
    
  
    function slideNav(){
        if(navbarState==0){
            $(".topnavbar").animate({
               marginTop:"0" 
            },350, function(){});
            AnimateRotate(180,"pulldownarrow");
            navbarState =1;
        } else {
             $(".topnavbar").animate({
               marginTop:"-60px" 
            },350, function(){});
            AnimateRotate(0,"pulldownarrow")
            navbarState =0;
        }
    }
    
    function AnimateRotate(d,element){
        var elem = $("."+element);
        $({deg: 0}).animate({deg: d}, {
            duration: 100,
            step: function(now){
                elem.css({
                     transform: "rotate(" + now + "deg)"
                });
            }
        });
    }
    
    /* Left Menu Bar */
    var menuState = 1;
    $(".togmenu").click(function(){
        slideMenu();
    });
    $("body").on('click','.leftsec a',function(){
        if($('.togmenu').css('display') == 'block')
        {
            slideMenu();
        }
    });
    function slideMenu(){
        if(menuState==1){
             $(".leftsec").animate({
                 left:"0"
             },350,function(){

             });
             menuState=0;
         } else{
             $(".leftsec").animate({
                 left:"-50%"
             },350,function(){

             });
             menuState=1;
         }
   }
   
  
   
   
   /* About Menu */
   $("body").on('click','.label_grid1',function () {
        $(".label_grid1").removeClass("active");
        $(".label_grid1").css("background-color", "#fff");
        $(".label_grid1").css("color", "#000");
        $(this).addClass("active");
        $(this).css("background-color", "#48b897");
        $(this).css("color", "#fff");
    });
    
    
    //Posthumous menu
    $("body").on('click','.links-posthomous',function () {
        $(".links-posthomous").removeClass("active");
        $(this).addClass("active");
    });
    
    
    
    //Making Forms scroll without grid to move
    var resizeProcess = function () {
        var smMedia = $('.sm-media').width();
        if (smMedia == "0") {
            var gridWrap = $('.grid-wrap').outerHeight();
            var windowHeight = $(window).outerHeight();
            $('.formsection').css("height", windowHeight - gridWrap + "px");
        }
    }

    resizeProcess();
    
    
    
    $(window).resize(function () {
        resizeProcess();
    });
    
  
    //Add Dynamic values with array
    $(".add").unbind('click');
    $('body').on('click','.add',function(){
        var parent = $(this).parents('.arrayFields');
        console.log(parent.attr("class"));
        
        container = parent.find(".resultform");
        var html = "<div class='arrayValuesContainer'>";
        var emptyFlag = false;
        var emptyArray = true;
        var totalFields = 0;
        //Fetching Total Fields
        parent.find(".form-control,.range-slider__range").each(function(i,e){
            totalFields=totalFields+1;
        });
        parent.find(".form-control,.range-slider__range").each(function(i,e){
            id = $(e).attr("id");
            //If chosen select then pick its value with chosen
            if($(e).attr("class")=="chosen-select"){
                val = $(e).chosen().val();
            } else {
                val = $(e).val();
            }
            
            //For Required Fields
            required = $(e).attr("required");
            if(required && val.length<1){
                emptyFlag = true;
                $(e).focus();
                return false;
            }
            
            if(val.length<1){
                //classname="hidden";
                classname="visible";
            } else{
                emptyArray = false;
                classname="visible";
            }
            
            //Showing labels for arrays that have fields more than 3
            if(totalFields<=3){
                html += "<p class='"+classname+"'><span>"+val+"</span></p>";
            } else {
                html += "<p class='"+classname+"'> <b style='text-transform:capitalize;'>"+id+"</b>: <span>"+val+"</span></p>";
            }
            
        });
        html += "<a class='remove'> <i class='fa fa-times-circle danger'></i> </a>";
        html += "</div>";
        //If Fileds are not empty
        if(emptyFlag==false && emptyArray ==false){
            container.append(html);
            
            //Clearing Element
            parent.find(".form-control,.range-slider__range").each(function(i,e){
                if(($(e).attr("class")!=="range-slider__range") && ($(e).attr("class")!=="chosen-select")){
                    $(e).val("");
                }
            });
        } else {
            parent.find(".form-control,.range-slider__range").each(function(i,e){
                required = $(e).attr("required");
                if(required && val.length<1){
                    $(e).focus();
                    return false;
                }
            });
            $.alert({
                title: 'Oops!',
                type: 'orange',
                animation: 'fade',
                content: 'One or more mandatory fields are missing',
            });
        }
    });
	
    
    $('body').on('click','.remove',function(){
        $(this).closest('.arrayValuesContainer').remove();
    });
    
    //Bootstrap tags focus
    $('body').on('focusin','.bootstrap-tagsinput',function() {
        $(this).addClass('focus');
    });
    $('body').on('focusout','.bootstrap-tagsinput',function() {
        $(this).removeClass('focus');
    });
    
    
    
    $(window).resize(function(){
        $(".chosen-container").css("width", "100%");
    });
    
        
    //have inputs scale automatically (Multivalue)
    $(".tt-input").on('keypress','.tt-input',function(){
        if (e.which !== 0 && e.charCode !== 0) { // only characters
            var c = String.fromCharCode(e.keyCode|e.charCode);
            $span = $(this).siblings('span').first();
            $span.text($(this).val() + c) ; // the hidden span takes 
                                            // the value of the input
            $inputSize = $span.width() ; 
            $(this).css("width", $inputSize) ; // apply width of the span to the input
         }
    });
    
    $('body').on('click','.closeTimePicker',function(){
        $('.timepicker').timepicker('hideWidget');
    });
    
    
    
});
