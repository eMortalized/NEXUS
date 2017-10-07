var app = angular.module('em', ['ngRoute', 'ngAnimate','uiSwitch','uicheck','ChineseZodiac']);

app.config(['$routeProvider', function ($routeProvider) {
        $routeProvider.when('/', {
            templateUrl: 'views/home.php',
            controller: 'homeController'
        }).when('/about', {
            templateUrl: 'views/about.php',
            controller: 'aboutController'
        }).when('/family-tree', {
            templateUrl: 'views/family-tree.php',
            controller: 'familytreeController'
        }).when('/message', {
            templateUrl: 'views/message.php',
            controller: 'messageController'
        }).when('/timeline', {
            templateUrl: 'views/timeline.php',
            controller: 'timelineController'
        }).when('/connections', {
            templateUrl: 'views/connections.php',
			controller: 'connectionsController'
        }).when('/posthumous-messages', {
            templateUrl: 'views/posthumous-messages.php',
            controller: 'posthumousController'
        }).when('/posthumous-messages/new-message/:viewType', {
            templateUrl: 'views/posthumous-messages-newmessage.php',
            controller: 'newmessage'
        }).when('/media-gallery', {
            templateUrl: 'views/media-gallery.php',
            controller: 'mediagalleryController'
        }).when('/Story/:id', {
            templateUrl: 'viewBlog.html'
        }).otherwise({
            redirectTo:'/'
        });

    }]);

app.controller('connectionsController', ['$scope','$location', function ($scope,$location) {
    $scope.getTheClass = function (){
        return "slide";
    }
    
    $scope.init = function () {
    }
    
    angular.element(function () {
        
    });
    $scope.init();
}]);

app.controller('messageController', ['$scope','$location', function ($scope,$location) {
    $scope.getTheClass = function (){
        return "slide";
    }
    
    $scope.init = function () {
    }
    
    angular.element(function () {
        
    });
    $scope.init();
}]);

app.controller('familytreeController', ['$scope','$location', function ($scope,$location) {
    $scope.getTheClass = function (){
        return "slide";
    }
    
    $scope.init = function () {
    }
    
    angular.element(function () {
        
    });
    $scope.init();
}]);

app.controller('timelineController', ['$scope','$location', function ($scope,$location) {
    $scope.getTheClass = function (){
        return "slide";
    }
    
    $scope.init = function () {
    }
    
    angular.element(function () {
        
    });
    $scope.init();
}]);

app.controller('homeController', ['$scope','$location', function ($scope,$location) {
    $scope.getTheClass = function (){
        return "slide";
    }
    $scope.test = "";
    
    $scope.isActive = function (viewLocation) {
        var active = (viewLocation === $location.path());
        return active;
   };
   
    $('#sendVisit').click(function(){
        $('#visitModal').modal('hide');
        swal({
            title: "Visit confirmed",
            text: "",
            type: "success",
            confirmButtonText: "OK",
            animation: "pop"
            });
    });
    
    $scope.init = function () {
    }
    $scope.init();
}]);

app.controller('newmessage', ['$scope','$location','$routeParams', function ($scope,$location,$routeParams) {
    $scope.getTheClass = function (){
        return "none";
    }
    tooltips();
    $scope.msgTitle = "";
    $scope.msgTitleImg = "";
    $scope.msgPage = "";
    
    viewType = $routeParams.viewType;
    //Toggle with type of page
    if(viewType == "typemessage"){
        $scope.msgTitle = 'New Message';
        $scope.msgTitleImg = "newmessage.png";
        $scope.msgPage = "typemessage";
         $(function() {
        $('.summernote').summernote({
          height: 150,
              toolbar: [
                      ['style', ['bold', 'italic','underline']],
                  ],
                  focus: true
        });

        $('form').on('submit', function (e) {
          e.preventDefault();
          alert($('.summernote').summernote('code'));
          alert($('.summernote').val());
        });

          $('.note-editor [data-event="insertUnorderedList"]').tooltip('disable'); 

      });
    } else if(viewType=="uploadfile"){
        $scope.msgTitle = 'Create Your Upload Message';
        $scope.msgTitleImg = "cloud-upload.png";
        $scope.msgPage = "uploadfile";
    } else {
        $location.path('/posthumous-messages');
    }
    $scope.load = function() {
        renderElements();
        
       
    };
    
    $scope.load();
    
    $scope.init = function(){
        
    };
    
    $scope.init();
}]);

app.controller('posthumousController', ['$scope','$location', function ($scope,$location) {
    $scope.getTheClass = function (){
        return "slide";
    }
    $scope.templates =
        [ { name: 'Template1', url: 'views/posthumous-messages/newmessage_text.php'},
        { name: 'Template2', url: 'views/posthumous-messages/others-view.php'},
        { name: 'Template3', url: 'views/posthumous-messages/own-view.php'},
        { name: 'Template4', url: 'views/posthumous-messages/newmessage_upload.php'},
    ];
    $scope.messageType = "";
    
    $scope.template = $scope.templates[2];
    $scope.changeTemplate = function(template){
        $scope.template = $scope.templates[template];
    };

    $scope.addNewMessage = function(){
        var inputTarget = $(this).attr("data-inputTarget");
            var jc = $.confirm({
                title: 'Select message to compose',
                content: 'url:views/posthumous-messages/_newmessage.html',
                animation: 'opacity',
                backgroundDismiss: true,
                columnClass: 'col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center',
                
                buttons: {
                    close: {
                        btnClass: 'hidden'
                    },

                }
            });
            
        $("body").on('click','.modal_block1',function(){
//            var input = $(this).attr("data-target");
//            $scope.messageType = input;
//            $scope.$digest();
                jc.close();
//            $scope.changeTemplate(3);
//            $location.search('page', 'newmsg');
//            $scope.$digest();
        });
    };
    
    angular.element(function () {
        resizeProcessPosthumous();
        setTimeout(function(){
            resizeProcessPosthumous();
        },100);
    });
    
    

    $scope.changeCallback = function() {
      console.log('This is the state of my model ' + $scope.enabled);
    };
  
    $scope.init = function () {
        //Date picker
        $('.datepicker').datepicker({
            autoclose: true
        });
		
    }
    $scope.init();
}]);


app.controller('mediagalleryController', ['$scope','$location', function ($scope,$location) {
     $scope.getTheClass = function (){
        return "slide";
    }
    
     $scope.init = function () {
    }
    
    angular.element(function () {
        resizeProcessPosthumous();
        setTimeout(function(){
            resizeProcessPosthumous();
        },100);
        
        resizeRecentAdditions();
        setTimeout(function(){
            resizeRecentAdditions();
        },100);
        
    });
    $scope.init();
}]);

app.controller('aboutController', ['$scope', '$http','chineseZodiac', function ($scope, $http,ChineseZodiac) {
        $scope.getTheClass = function (){
            return "slide";
        }
        $scope.test = "";
        
         $('.chosen-select').chosen({
            placeholder_text_single: "Select an option"
          });  
        //Load Early Details by default
        $scope.activeGrid = "personal";
        angular.element(function () {
            resizeProcess();
            setTimeout(function(){
                resizeProcess();
            },100);
        });
        
        //Switch Scopes
        $scope.ceremonies = true;
        $scope.healthMilestone = true;
        $scope.healthConditions = true;
        $scope.iqScore = true;
        $scope.otherTests = true;
        $scope.religiousCeremony = true;
        $scope.fortunes = true;
        $scope.lifeChangingExperiences = true;
        $scope.luckyNumbers = true;
        $scope.pet = true;
        $scope.foods = true;
        $scope.books = true;
        $scope.expressions = true;
        $scope.sportsTeams = true;
        $scope.musician = true;
        $scope.songs = true;
        $scope.movies = true;
        $scope.tvShows = true;
        $scope.things = true;
        $scope.placeVisited = true;
        $scope.happening = true;
        $scope.elementarySchool = true;
        $scope.middleSchool = true;
        $scope.highSchool = true;
        $scope.college = true;
        $scope.university = true;
        $scope.otherScores = true;
        $scope.americanCollege = true;
        $scope.scholasticAptitude = true;
        $scope.lawSchool = true;
        $scope.graduateManagement = true;
        $scope.medicalCollege = true;
        $scope.partner = true;
        $scope.profession = true;
        $scope.training = true;
        $scope.designation = true;
        $scope.license = true;
        $scope.certification = true;
        $scope.membership = true;
        $scope.aptitudeTesting = true;
        $scope.cause = true;
        $scope.charity = true;
        $scope.passion = true;
        $scope.msgPublic = true;
        $scope.msgFriends = true;
        $scope.msgFamily = true;
        $scope.thingToDo = true;
        
        $scope.parentingFavMemories = true;
        $scope.parentingDOD = true;
        
        $scope.grandparentingFavMemories = true;
        $scope.grandparentingDOD = true;
        $scope.address = true;
        $scope.style = true;
        $scope.funnyStory = true;
        $scope.interestingStory = true;
        $scope.embarrassingStory = true;
        $scope.emotionalStory = true;
        $scope.definingStory = true;
        $scope.otherStory = true;
        $scope.superstitions = true;
        $scope.premonitions = true;
        $scope.pastlives = true;
        $scope.routinesForLuck = true;
        $scope.orphanages = true;
        $scope.hobby = true;
        $scope.sport = true;
        $scope.restaurant = true;
        $scope.measurementUnit = "metric";
      
          
        //checkboxes
        $scope.deceased = "no";
        $scope.adopted = "no";
        $scope.child = true;
        $scope.grandchild = true;
        
        $scope.status = "Friends";
        $scope.MBOutcome = '';
        
        $scope.clearStatusDetails = function(){
            $scope.dateEngagement = "";
            $scope.dateEngagement = "";
            $scope.dateSeparation = "";
            $scope.dateDivorce = "";
        }
        $scope.clearDiseased = function(){
            $scope.dateOfDeath = "";
            $scope.placeOfDeath = "";
            $scope.finalRestingPlace = "";
            $scope.placeOfResidence = "";
            $scope.citizenship = "";
            $('#citizenship').val('').trigger("chosen:updated");
        }
        $scope.clearAdopted = function(){
            $scope.orphanage = "";
            $('.orphanageResults').html("");
        }
        
        $scope.switchMeasurementUnit = function(){
            $scope.heightUnit_main = "";
            $scope.heightUnit_sub = "";
            
            if($scope.measurementUnit == "imperial"){
                $("#heightUnit_main").attr("placeholder","meters");
                $("#heightUnit_sub").attr("placeholder","centimeters");
            } else {
                $("#heightUnit_main").attr("placeholder","feet");
                $("#heightUnit_sub").attr("placeholder","inches");
            }
        }

        //Calculating Zodiacs
        $scope.calcZodiac = function(){
            var dateOfBirth = $scope.dateOfBirth;
            var month = dateOfBirth.substring(0, 2);
            var day = dateOfBirth.substring(3, 5);
            var year = dateOfBirth.substring(6,10)
            month = month.replace(/^0+/, '');
            day = day.replace(/^0+/, '');
            
            //Zodiac
            var z_sign = zodiac(day, month);
            $scope.zodiacSign = z_sign[0].sign;
            $('.zpdoac_sign_img').html("<img class='zodiacimg' src='img/zodiac_signs/zodiac/"+z_sign[0].sign+".jpg' data-title='"+z_sign[0].sign+"' data-prop='"+z_sign[0].property+"'/>");
            
            //Storing Astromatch 
            var astroM=astromatch(z_sign[0].sign,"Capricorn");
            $scope.astroMatch = astroM;
            
            //Chinese Zodiac
            var cz_sign = ChineseZodiac.dozodiacsearch(day, month,year);
            $scope.zodiacSignChinese = cz_sign.name;
            $('.zodiacSignChinese_img').html("<img class='zodiacimg' src='img/zodiac_signs/chinese-zodiac/"+cz_sign.name+".jpg' data-title='"+cz_sign.name+"' data-prop='"+cz_sign.property+"' />");
            
            //Storing Chinese Zodiac Match
            var chineseM=chinese_astromatch(cz_sign.name,"Rooster"); 
            $scope.chineseAstroMatch = chineseM;
            
        }
        
       $(".zodiacfield").unbind("click");
       $(".zodiacfield").on('click',".zodiacimg",function(){
            var zodiac_sign_img_title = $(this).attr("data-title");
            var zodiac_sign_img_prop = $(this).attr("data-prop");
               // var labeltext = $(this).closest(".form-group").find("label").text();
                $.alert({
                    title: zodiac_sign_img_title,
                    content: zodiac_sign_img_prop,
                    icon: 'fa fa-asterisk',
                    animation: 'opacity',
                    closeAnimation: 'opacity',
                    columnClass: 'col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1',
                    backgroundDismiss: true,
                    buttons: {
                        okay: {
                            text: 'Close',
                            btnClass: 'btn-yellow'
                        }
                    }
                });
       });
       
       $scope.calculateMB = function(){
            var mbResult=myersbriggs($scope.MBOutcome,"ISFJ"); 
            $scope.MBMatch = mbResult;
       }
       
       
               
        $scope.init = function () {
            

            /* Drag and Drop */
            $( ".sortable" ).sortable({
                axis: 'y',
                containment: "parent" 
             }).disableSelection();
            
           
            
            //Range symbols with grater and less than
            $('.range-slider__range').on('mousemove change',function() { 
                //your code
                var sliderval = $(this).parents('.graterthanRange').find('.range-slider__value');
                
                var rangeMax = $(this).attr("max");
                var rangeMin = $(this).attr("min");
                value = $(this).val();
                if(value===rangeMin){
                    val = parseInt(value)+1;
                    sliderval.html("<"+val);
                } else if(value===rangeMax){
                    val = parseInt(value)-1;
                    sliderval.html(">"+val);
                } else {
                }
                
            });
            
            tooltips();
            
            
            
            //Prompt For Multivalue Text
            $(".additemText").unbind('click');
            $('.additemText').on('click', function () {
                var inputTarget = $(this).attr("data-inputTarget");
                $.confirm({
                    title: 'Add new value',
                    content: 'url:views/aboutme/_multiselect.html',
                    animation: 'opacity',
                    buttons: {
                        close: {
                            btnClass: 'btn-closeCustom',
                            action: function () {
                                btnClass: 'btn-closeCustom'
                                // do nothing.
                            }
                        },
                        sayMyName: {
                            text: 'Add',
                            btnClass: 'btn-addCustom',
                            action: function () {
                                var input = this.$content.find('input#input-name');
                                var errorText = this.$content.find('.text-danger');
                                if (input.val() == '') {
                                    errorText.html('Please don\'t keep the name field empty!').slideDown(200);
                                    return false;
                                } else {
                                    $('#'+inputTarget).tagsinput('add', input.val());
                                }
                            }
                        }
                    }
                });
                
            });
			
			
            
            
            
            
            //Prompt For Multivalue Dropdown
            $(".additemDropdown").unbind('click');
            $('.additemDropdown').on('click', function () {
                var inputTarget = $(this).attr("data-inputTarget");
                $.confirm({
                    title: 'Add new value',
                    content: 'url:views/aboutme/_multiselect.html',
                    animation: 'opacity',
                    buttons: {
                        close: {
                            btnClass: 'btn-closeCustom',
                            action: function () {
                                btnClass: 'btn-closeCustom'
                                // do nothing.
                            }
                        },
                        sayMyName: {
                            text: 'Add',
                            btnClass: 'btn-addCustom',
                            action: function () {
                                var input = this.$content.find('input#input-name');
                                var errorText = this.$content.find('.text-danger');
                                if (input.val() == '') {
                                    errorText.html('Please don\'t keep the name field empty!').slideDown(200);
                                    return false;
                                } else {
                                    $('#'+inputTarget).append("<option selected value='"+ input.val()+"'>"+ input.val()+"</option>");
                                    $('#'+inputTarget).trigger("chosen:updated");
                                }
                            }
                        }
                    }
                });
            });
            

            $(".scroll").scroll(function () {
                $(".datepicker.dropdown-menu").css("display", "none");
                $(".bootstrap-timepicker-widget").removeClass("open");
                $(".ui-autocomplete").hide();
                $(".scroll").blur();
            });

            //Loading name prefixes
            var request = {
                method: 'POST',
                url: 'inc/functions.php',
                data: {getPrefixes: true},
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            };
            $http(request).success(function (data) {
                $scope.preFixes = data;

            });


            //Loading name suffixes
            var request = {
                method: 'POST',
                url: 'inc/functions.php',
                data: {getSuffixes: true},
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            };
            $http(request).success(function (data) {
                $scope.suffixes = data;

            });

            //Loading geneticDisorders
            var request = {
                method: 'POST',
                url: 'inc/functions.php',
                data: {getDisorders: true},
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            };
            $http(request).success(function (data) {
                $scope.disorders = data;
            });

            //Loading sports
            var request = {
                method: 'POST',
                url: 'inc/functions.php',
                data: {getSports: true},
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}

            };
            $http(request).success(function (data) {
                $scope.sportsName = data;

            });

            $('.chosen-select').chosen();
            $('.chosen-select-normal').chosen();
            $('.chosen-select-deselect').chosen({allow_single_deselect: true});
             $('.chosen-select-limited').chosen({max_selected_options: 2});
        

            // smooth scroll link
            $("#link_top").hide();
            $('.scroll').scroll(function () {
                if ($('.scroll').scrollTop() > 10) {
                    $("#link_top").fadeIn();
                }
                else
                {
                    $("#link_top").fadeOut();
                }
            });

            $('a.page-scroll').bind('click', function (event) {
                var $anchor = $(this);
                var target= $(this).attr("data-target");
                $(target).stop().animate({
                    scrollTop: ($($anchor.attr('href')).offset().top - 50)
                }, 1250, 'easeOutQuad');
                event.preventDefault();
            });
            
            // smooth scroll link on mobile
            $("#link_top_mob").hide();
            var mq = window.matchMedia("(max-width: 768px)");

            if (mq.matches) {
                
                $(window).scroll(function () {
                    if ($(document).scrollTop() > 50) {
                        $("#link_top_mob").fadeIn();
                    }
                    else
                    {
                        $("#link_top_mob").fadeOut();
                    }

                });

            } else {
                $("#link_top_mob").hide();
            }



        };

        $scope.init();

        $scope.load = function () {
            

            resizeProcess();
            $(window).resize(function () {
                resizeProcess();
            });

            /* Date and Time Inputs */
            // do your $() stuff here
            renderElements();
        };

        //don't forget to call the load function
        $scope.load();

        var rangeSlider = function () {
            var slider = $('.range-slider'),
                    range = $('.range-slider__range'),
                    value = $('.range-slider__value');

            slider.each(function () {

                value.each(function () {
                    var value = $(this).prev().attr('value');
                    $(this).html(value);
                });

                range.on('input', function () {
                    $(this).next(value).html(this.value);
                });
            });
        };

        rangeSlider();
    }]);

function fetchBooks() {
    var books = [];
    $.ajax({
        type: "GET",
        url: "db/data_books.xml",
        dataType: "xml",
        success: function fetchBooks(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                books[cnt] = $(this).find("column[name='litraryworks']").text();
                $('#books').append("<option>"+books[cnt]+"</option>");
                cnt++;
            });
            $("#books").chosen();
        }
    });
    
}


function fetchLanguages() {
    html = "<option value='''>Choose one</option>";
    $.ajax({
        type: "GET",
        url: "db/data_languages.xml",
        dataType: "xml",
        success: function fetchLang(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                html += "<option>" + $(this).find("column[name='name']").text() + "</option>";
                cnt++;
            });
            $("#language").html(html);
        }
    });
}


function fetchSportsTeamFav() {
    var result = [];
    $.ajax({
        type: "GET",
        url: "db/data_sportsteam.xml",
        dataType: "xml",
        success: function fetchTeam(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                var sport = $(this).find("column[name='Sport']").text();
                var team = $(this).find("column[name='Team']").text()
                result[cnt] = team + "-" + sport;
                $('#sportsTeams').append("<option>"+result[cnt]+"</option>");
                cnt++;
            });
            $("#sportsTeams").chosen();
        }
    });
    
}


function fetchAnimal() {
    var result = [];
    $.ajax({
        type: "GET",
        url: "db/data_animals.xml",
        dataType: "xml",
        success: function getAnimal(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                result[cnt] = $(this).find("column[name='Animals']").text();
                $("#animal").append("<option>"+result[cnt]+"</option>");
                cnt++;
            });
            $('#animal').chosen();
        }
    });
    
}


function fetchMusicians() {
    var result = [];
    $.ajax({
        type: "GET",
        url: "db/data_musicians.xml",
        dataType: "xml",
        success: function getMusician(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                result[cnt] = $(this).find("column[name='musician_name']").text();
                $('#musician').append("<option>"+result[cnt]+"</option>");
                cnt++;
            });
            $('#musician').chosen();
        }
    });
//    $('#musician').keyup(function () {
//        var input = $(this).val();
//        var search_term = input; // your search term as string
//        var search = search_term.toUpperCase();
//        var array = jQuery.grep(result, function (value) {
//            return value.toUpperCase().indexOf(search) >= 0;
//        });
//        $("#musician").autocomplete({
//            source: function (request, response) {
//                var results = $.ui.autocomplete.filter(array, request.term);
//
//                response(results.slice(0, 10));
//            }
//        });
//    });
}


function fetchMovies() {
    var result = [];
    $.ajax({
        type: "GET",
        url: "db/data_movies.xml",
        dataType: "xml",
        success: function getMovies(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                result[cnt] = $(this).find("column[name='movie_name']").text();
                $("#movies").append("<option>"+result[cnt]+"</option>");
                cnt++;
            });
            $("#movies").chosen();
        }
    });
    
}


function fetchTvShow() {
    var result = [];
    $.ajax({
        type: "GET",
        url: "db/data_tvshows.xml",
        dataType: "xml",
        success: function getTvShow(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                result[cnt] = $(this).find("column[name='tvshow_name']").text();
                $("#tvShows").append("<option>"+result[cnt]+"</option>");
                cnt++;
            });
            $("#tvShows").chosen();
        }
    });
    
}

function fetchPersons() {
    var result = [];
    $.ajax({
        type: "GET",
        url: "db/data_people.xml",
        dataType: "xml",
        success: function getperson(xml)
        {
            cnt = 0;
            //Fetching Records from XML File
            $(xml).find("table").each(function ()
            {
                //Fetching Child Nodes of each contact
                result[cnt] = $(this).find("column[name='fullname']").text();
                cnt++;
            });
        }
    });
    $('#favperson').keyup(function () {
        var input = $(this).val();
        var search_term = input; // your search term as string
        var search = search_term.toUpperCase();
        var array = jQuery.grep(result, function (value) {
            return value.toUpperCase().indexOf(search) >= 0;
        });
        $("#favperson").autocomplete({
            source: function (request, response) {
                var results = $.ui.autocomplete.filter(array, request.term);

                response(results.slice(0, 10));
            }
        });
    });
}


//Making Forms scroll without grid to move
var resizeProcess = function () {
    var smMedia = $('.sm-media').width();
    if (smMedia == "0") {
        var gridWrap = $('.grid-wrap').outerHeight();
        var windowHeight = $(window).outerHeight();
        $('.formsection').css("height", windowHeight - gridWrap + "px");
    }
}

var resizeProcessPosthumous = function () {
    var smMedia = $('.sm-media').width();
    if (smMedia == "0") {
        var gridWrap = $('.Posthumousgrid-wrap').outerHeight();
        var windowHeight = $(window).outerHeight();
        $('.Posthumousgrid-form').css("height", windowHeight - gridWrap + "px");
    }
}

var resizeRecentAdditions = function(){
    var galleryOuterContainer = $('#mediagallery-height').outerHeight();
   $(".recentAdditions").css("height",galleryOuterContainer+"px");
}

//Calculating Zodiac
function zodiac(day, month) {
    // returns the zodiac sign according to day and month ( http://coursesweb.net/ )
     var zodiac = ['', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn'];
     var last_day = ['', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19];
     var zResult = (day > last_day[month]) ? zodiac[month*1 + 1] : zodiac[month];

     var meaning = [{
         "Sign":'Aries',
         "Property":"Ruled by aesthetics of Mars, Aries, the first sign in the zodiac is one of the most active and optimistic character. They love being adventurous and quiet a remarkable leader in almost everything. Aries falls under a category of fire sign and elements of fire offers them freedom and ability to search answers regarding metaphysical questions. Aries are action oriented and courageous beside that their actions speak louder than words."
     },{
         "Sign":'Gemini',
         "Property":"Talkative, communicative, sociable; loves to interact with others (at least on a superficial level); unemotional, impersonal, ruled by �rationality�; requires great mental stimulation, curious to a fault; playful, the Trickster, the Devil�s Advocate; changable, inconstant, attention easily drifts to something new, seeks novelty. <br/><br/> General behavior: Gemini (the twins) is a very complex and confusing sign. To some people you can seem like a wonderful friend, while to others you will seem two-faced and sneaky. You will act like a child for most of your life. That includes both the good and bad characteristics of children. You are happy and energetic when things go right for you. However, when things go wrong, you can be passive-aggressive and very mean. You find decisions hard to make, since you can never stay with the one that you originally choose. You tend to fight loosing battles for something that you call a �moral� cause (even though you know it isn�t). One quality (you decide whether it�s good or bad) you have is the ability to lie and appear that you are telling the complete truth. You prefer to use someone else�s solution to a problem than thinking of your own. Many of Gemini�s poorer traits are due to your lack of self-esteem. It is very tough to get your attention. You will be thinking about many things at a time and you can�t concentrate on any particular thing at one time. You may be praising somebody but at the same time you will be thinking against him(her). But the most intelligent people on the earth are Geminians."
     },{
         "Sign":'Leo',
         "Property":"Ego, self-centered, arrogant; fixed, stubborn, persistant; artistic or creative expression as a vehicle for revealing �who I am�; needs to be a center of attention, requires acknowledgment and approval, likes to be noticed and appreciated (�ego-strokes�); personal integrity, true to self, honorable, trustworthy; kingly, self-assured, confident. General character: King planet Sun governs your zodiac sign. You want to live like a king. You are a very ambitious person and want to rise to the top in the profession of your choice. You have been blessed with a strong personality, which can take you places if you so desire. You are logical in your approach to most things but sometimes you get so confused over the small issues. An extrovert, you have many friends and you are a good host. You learn to branch out on your own even if it turns out to be an expensive idea since you are ready to sacrifice much if it benefits in the long run. You are very much a materialistic person; you will find it difficult to do without worldly things. The picture you portray, however, is of the strong silent type. Your plus point is keeping a good relationship with those persons who could be of use to you in some way. You are self-opinionated person though you may behave otherwise. Sometimes you act very superficially and you yourself will not know why. You are quite power-hungry and given to vices any of which could cause you destruction both mentally and physically. You are an out-going person basically and have a wide circle of friends. You are a well-loved person since you speak attractively and have good manners. You can�t tolerate your failures because you want to rule and you are impatient to reach that level. You don�t let anyone come in the way of achieving power. You are brave and don�t spend sleepless nights on major or minor worries provided you have been sincere and just. Basically an extrovert, you reach out to people in all walks of life. You are helpful to those in trouble and don�t expect anything in return. To win your favor, it is wise to flatter you and this happens to you all the time but you won�t notice it."
     },{
         "Sign":'Libra',
         "Property":"Partners, marriage; learning how to get along peacably with others, treating others as equals; �I vs. You�, conflict, enemies; art, beauty, harmonious surroundings; distressed by stressful, inharmonious interactions; intimacy; people in counseling professions. General character: Libra (the balance) is said to be the most desired Zodiac Sign. You are charming, good looking, gentle and kind. You are a good judge of character and have many good friends. You do not like it when your decisions are challenged, and are impatient with people who criticize you. You hate people who are cruel to others. Libras enjoy the arts more than science, so a career in the arts would be a good choice. You will understand other people�s views and sympathize with them. A negative Libraian (there aren�t many) flirts and seems shallow. They also are impatient with a daily routine."
     },{
         "Sign":'Sagittarius',
         "Property":"Sagittarius look fairly large, well shaped skull, broad forehead as they are born under one of the luckiest zodiac signs. A Sagittarius person is rich in many ways. They are very true friends. They love to take chances and go to extreme. Like the zodiac symbol, a Sagittarius always aims high. A Sagittarius can be quite matchless when he gets down to doing what he loves. Sagittarius always likes freedom. He likes to attempt transcending the limits that most people accept. Sagittarian is quite spiritual. Sagittarians are always straight forward in all manners. They possess great love for nature. Sagittarius always loved to inviting friendship and the exchange of ideas. Sagittarius is normally restless. They hate to sit or stand still. Ordinarily people born under the Jupiter�s influence fear nothing. The typical Sagittarius is attached to danger in sports and in his job or his hobby. They love speed. As the time passes Sagittarian develops somewhat philological qualities with which he inspires others. Sagittarian enjoys publishing and is happy in the field of higher education. He is very happy to work in abroad. Sagittarius is always like to have meaningful relationship with people. He has a great sense of humor and is very enthusiastic."
     },{
         "Sign":'Aquarius',
         "Property":"Even though ideas are often far-sighted, they can be held and expressed in rigid, dogmatic fashion (this is a fixed sign, afterall!); �everyone should be free to be just like me!�; idealistic, utopian; derives sense of identity from groups and their goals, tends to dominate them; impersonal thinking, detached from emotional considerations; produces �humanitarian without compassion�; friendships based on common goal. General behavior: Aquarians in general come in two different types: shy, and lively. Both are strong-willed and honest. Your thoughts are orderly and you plan your life in a systematic manner. Sometimes you are aggressive and loud. You are unprejudiced and can see other�s points of views. You are serious, but you can also be funny with a dry sense of humor. You are also logical and intelligent. There are times when you feel the need to withdraw from people and be alone for a while, which causes some people to think that you are a loner. But, while you are alone, you enjoy meditating and prayer. Aquarians are usually gifted in drama. You are very independent and rarely go along with the crowd. Some Aquarians are extremely egotistical, as a result will drive friends away."
     },{
         "Sign":'Taurus',
         "Property":"TAURUS SUN : Clever, reflective, attracted by perfumes and dealer in them, hated by women, slow to action, musician, self-confident, delicious drinks, happy meals, tactful, original, sociable, intelligent, prominent nose. Earthy, grounded, in touch with the body; sensual, pleasure seeking; stubborn, fixed, stands their ground; focuses and concentrates energy, gives it concrete expression, practical, provides stamina and persistance; slow, steady, methodical; fertile, productive; unreflective, content to simply be; spirit becoming involved with the material world. General character: Taurus is determined and peaceful. Although you are not a leader, you will recognize someone with great leadership qualities and follow them. You try to remain the same as everyone else, and are resistant to change. People will enjoy you because you have a good sense of humor and are intelligent. You are a dependable friend who is not scared off by a challenge. You may believe so strongly in your values that you will sacrifice relationships to uphold them. Some Taureans need to be told that they did a good job after accomplishing a task before they feel that they have really accomplished anything. Your friends are people in the same social standing as you, and you rarely go outside of that standing. Although you are calm and generally against fighting, you will fight if someone is provoking you. Your temper tends to explode in violent bursts that are not always directed at the person they should be."
     },{
         "Sign":'Cancer',
         "Property":"Mothering, emotional and physical nurturance; experiences and imprinting during infancy and childhood; family, ancestors, heritage, relationships to the past; belonging, feeling �at home�; maternal love, caring; feeling supported by the world, that your needs are provided for; insecurities and fears if your needs haven�t been fulfilled; possessiveness, �twisted love�, inability to nurture others are negative expressions. General behavior: Cancer (the crab) is one of the most difficult zodiac signs to understand. Cancerians can have many different personalities. Most Cancerians like to be at their home, and enjoy large families. You seem unsociable to some people, but you enjoy chatting and gossiping as much as anyone else. You tend to day-dream very often and can be found in a state of fantasy. You enjoy art, writing, and drama, but acting may not be a good career for you because of your tendency to Overact. Cancer is the sign most likely to believe in the zodiac, as well as other psychic happenings. You make a loyal friend and also very patriotic."
     },{
         "Sign":'Virgo',
         "Property":"VIRGO SUN : Linguist, poet, mathematician, taste for literature, well read, scholarly, artistic, good memory, reasoning faculty, effeminate body, frank, lucid comprehension, learned in religious lore, reserved, wanting adulation. Service, helping, self-effacing; perfectionist, always seeking to improve, efficiency; practical, functional, interested in crafts and projects; true to self in a simple, unassuming manner; reacts to defeats and setbacks by pulling back and altering approach, lacks confidence in the face of opposition; lives up to duties and responsiblities; interested in maintaining the body as a fit vehicle; diet, exercise, herbs, etc.; aware of conflicts with others, of the give and take required by life. General character: Virgos are creative, delicate, and intelligent. You love to have everything in order, but are also patient. You are very observant, which can lead you to be judgmental. Some people may think that you are a cold person, because you rarely show your emotions. You also have a lot of charm and dignity, although you may not have many friends, due to your troubles with showing your feelings. Virgos are more followers than leaders. You are always logical."
     },{
         "Sign":'Scorpio',
         "Property":"SCORPIO SUN : bold , secretive, argumentative, adventurous, bold, fearing thieves and robbers, reckless, cruel, stubborn, unprincipled, impulsive, idiotic, indolent, surgical skill, dexterous, military ability. Intense, passionate, brooding, magnetic; stubborn, unyielding, driven by emotions; stands up for self, usually covertly, manipulates power; understands deeper layers of the psyche beyond the ego, unable to communicate this well leading to misunderstandings; intrigued by the �dark side� of life; the underground, people whose job involves going beneath surface appearances; sexuality, especially the transformative power of the orgasm; self-mastery, breaking free of illusory limitations, the Hero. General character: Scorpio is intense and powerful. Although you appear controlled and calm, you are emotional and energetic. Scorpios often have strong and penetrating eyes. They seem fun to be with socially, but some seem self-involved and withdrawn. You can recognize your special qualities and it requires self-control to prevent you from using them for bad reasons. In relationships, you can be passionate and overwhelming. You are also very sensitive and take almost every comment to heart. You discard friends when they start to bore you."
     },{
         "Sign":'Capricorn',
         "Property":"CAPRICORN SUN : Active, obliging, humorous, witty, affable, prudent, firm, mean-minded, stubborn, ignorant, miserly, pushful, unhappy, boring, meddlesome. Serious, determined, disciplined, focused; needs to play more; fathering, disciplining love; authority figures; seeks certainties in life, wants things �cast in concrete�; the Businessman, concerned with the practical relationships to support yourself within society; not interested in �blue sky� ideas, needs to bring theory into concrete reality; �knowing the rules and playing the game�; making a niche in the world. General behavior: Capricorn (the goat) is the most serious of all the zodiac signs. You are independent and (usually) confident. You have a tendency to criticize yourself too much, which can lead to low self-esteem. Capricorns are dependable, but also extremely cautious. You make a fair, but stubborn leader, and this is a job that you can do well. You are very well organized, so you can handle many projects at once. You may go through horrible mood swings, being friendly one moment and mean the next."
     },{
         "Sign":'Pisces ',
         "Property":"PISCES SUN : honest, unselfish, trustworthy, pearl merchant, peaceful, wealthy, uneventful, religious, prodigal, gullible, loved by women. Mysticism, escape into the One; sees the unity, fails to make �normal� distinctions, often weak ego; victim, martyr, servant; tends to escapism, fantasy, drugs (especially alcohol), religion; very receptive, sensitive, even psychic; co-dependency, care-taking; withdrawn from the world; release from the world. General character: Two fish are associated with your Zodiac Sign. You are generous, caring, and kind. However, you tend to be more concerned about other people�s problems than your own. You are not a decisive person and may change your mind many times. Because of your good qualities, you are popular with many types of people, but when you are secretive you drive these friends away. Weak concentration skills can get you into trouble at school."
     }];

     //Searching Json
     $.each(meaning, function(i, v) {
            if (v.Sign == zResult) {
                zProperty = v.Property; // stops the loop
            }
    });

     var result = [];
     result.push({
            sign:zResult,
            property:zProperty
        });
     return result;
}

//Astro match
function astromatch(a,b)
{
    //alert();
    cross="Favourable";
    dash="Less Favourable";
    bigo="Critical";
    
    var astromatcharray=new Array();
    astromatcharray[0]=["","Aries","Taurus","Gemini","Cancer","Leo","Virgo","Libra","Scorpio","Sagittarius","Capricorn","Aquarius","Pisces"];
    astromatcharray[1]=["Aries",cross,dash,cross,bigo,cross,dash,cross,dash,cross,bigo,cross,dash];
    astromatcharray[2]=["Taurus",dash,cross,dash,cross,bigo,cross,dash,cross,dash,cross,bigo,cross];
    astromatcharray[3]=["Gemini",cross,dash,cross,dash,cross,bigo,cross,dash,cross,dash,cross,bigo];
    astromatcharray[4]=["Cancer",bigo,cross,dash,cross,dash,cross,bigo,cross,dash,cross,dash,cross];
    astromatcharray[5]=["Leo",cross,bigo,cross,dash,cross,dash,cross,bigo,cross,dash,cross,bigo];
    astromatcharray[6]=["Virgo",dash,cross,bigo,cross,dash,cross,dash,cross,bigo,cross,dash,cross];
    astromatcharray[7]=["Libra",cross,dash,cross,bigo,cross,dash,cross,dash,cross,bigo,cross,dash];
    astromatcharray[8]=["Scorpio",dash,cross,dash,cross,bigo,cross,dash,cross,dash,cross,bigo,cross];
    astromatcharray[9]=["Sagittarius",cross,dash,cross,dash,cross,bigo,cross,dash,cross,dash,cross,bigo];
    astromatcharray[10]=["Capricorn",bigo,cross,bigo,cross,bigo,cross,bigo,cross,bigo,cross,bigo,cross];
    astromatcharray[11]=["Aquarius",cross,bigo,cross,dash,cross,dash,cross,bigo,cross,dash,cross,dash];
    astromatcharray[12]=["Pisces",dash,cross,bigo,cross,dash,cross,dash,cross,bigo,cross,dash,cross];
    

          
    for(i=1;i<=12;i++)
    {
        
        if(astromatcharray[0][i]==a)
        {
            break;
        }
    }
    
    for(j=1;j<=12;j++)
    {
            if(astromatcharray[j][0]==b)
            {
                
               return astromatcharray[j][i];
               break;
            }
            
    }
} 


//Chinese Atromatch
function chinese_astromatch(a,b)
{
    heart="Perfect Match";
    pie="Complementary";
    skull="Good Match or Enemy";
    smile="Good Friend";
    sad="Average";
    cross="Worst Match";
    
    var astromatcharray=new Array();
    astromatcharray[0]=["","Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Sheep","Monkey","Rooster","Dog","Pig"];
    astromatcharray[1]=["Rat",sad,heart,sad,heart,heart,smile,cross,skull,pie,cross,pie,pie];
    astromatcharray[2]=["Ox",heart,sad,cross,pie,cross,pie,cross,cross,heart,heart,sad,skull];
    astromatcharray[3]=["Tiger",sad,cross,cross,sad,heart,cross,heart,smile,cross,pie,pie,heart];
    astromatcharray[4]=["Rabbit",heart,pie,sad,sad,sad,cross,sad,heart,heart,cross,heart,heart];
    astromatcharray[5]=["Dragon",heart,cross,heart,sad,smile,heart,sad,cross,pie,pie,cross,smile];
    astromatcharray[6]=["Snake",smile,pie,cross,cross,heart,cross,smile,cross,smile,heart,sad,cross];
    astromatcharray[7]=["Horse",cross,cross,heart,sad,sad,smile,cross,heart,sad,cross,sad,pie];
    astromatcharray[8]=["Sheep",skull,cross,smile,heart,cross,cross,heart,pie,pie,sad,cross,heart];
    astromatcharray[9]=["Monkey",pie,heart,cross,heart,pie,smile,sad,pie,smile,sad,pie,cross];
    astromatcharray[10]=["Rooster",cross,heart,pie,cross,pie,heart,cross,sad,sad,cross,cross,sad];
    astromatcharray[11]=["Dog",pie,sad,pie,heart,cross,sad,sad,cross,pie,cross,sad,pie];
    astromatcharray[12]=["Pig",pie,skull,heart,smile,cross,pie,heart,cross,sad,pie,smile];
    

          
    for(i=1;i<=12;i++)
    {
        
        if(astromatcharray[0][i]==a)
        {
            break;
        }
    }
    
    for(j=1;j<=12;j++)
    {
            if(astromatcharray[j][0]==b)
            {
                
               return astromatcharray[j][i];
               break;
            }
            
    }
}


//MB Chart
function myersbriggs(a,b)
{
    red="Uh-Oh, Think This One Through";
    yellow="It could Work, But Not Ideal";
    lightgreen="One Sided Match";
    darkgreen="It's Got a Good Chance";
    blue="Often Listed as an Ideal Match";
    
    var astromatcharray=new Array();
    astromatcharray[0]=["","INFP","ENFP","INFJ","ENFJ","INTJ","ENTJ","INTP","ENTP","ISFP","ESFP","ISTP","ESTP","ISFJ","ESFJ","ISTJ","ESTJ"];
    astromatcharray[1]=["INFP",darkgreen,darkgreen,darkgreen,blue,darkgreen,blue,darkgreen,darkgreen,red,red,red,red,red,red,red,red];
    astromatcharray[2]=["ENFP",darkgreen,darkgreen,blue,darkgreen,blue,darkgreen,darkgreen,darkgreen,red,red,red,red,red,red,red,red];
    astromatcharray[3]=["INFJ",darkgreen,blue,darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,blue,red,red,red,red,red,red,red,red];
    astromatcharray[4]=["ENFJ",blue,darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,blue,red,red,red,red,red,red,red];
    astromatcharray[5]=["INTJ",darkgreen,blue,darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,blue,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,yellow];
    astromatcharray[6]=["ENTJ",blue,darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,blue,darkgreen,lightgreen,lightgreen,lightgreen,lightgreen,lightgreen,lightgreen,lightgreen,lightgreen];
    astromatcharray[7]=["INTP",darkgreen,darkgreen,darkgreen,darkgreen,darkgreen,blue,darkgreen,darkgreen,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,blue];
    astromatcharray[8]=["ENTP",darkgreen,darkgreen,blue,darkgreen,blue,darkgreen,darkgreen,darkgreen,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,yellow];
    astromatcharray[9]=["ISFP",red,red,red,blue,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,yellow,lightgreen,blue,lightgreen,blue];
    astromatcharray[10]=["ESFP",red,red,red,red,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,yellow,blue,lightgreen,blue,lightgreen];
    astromatcharray[11]=["ISTP",red,red,red,red,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,yellow,lightgreen,blue,lightgreen,blue];
    astromatcharray[12]=["ESTP",red,red,red,red,lightgreen,lightgreen,lightgreen,lightgreen,yellow,yellow,yellow,yellow,blue,lightgreen,blue,lightgreen];
    astromatcharray[13]=["ISFJ",red,red,red,red,yellow,lightgreen,yellow,yellow,lightgreen,blue,lightgreen,blue,darkgreen,darkgreen,darkgreen,darkgreen];
    astromatcharray[14]=["ESFJ",red,red,red,red,yellow,lightgreen,yellow,yellow,blue,lightgreen,blue,lightgreen,darkgreen,darkgreen,darkgreen,darkgreen];
    astromatcharray[15]=["ISTJ",red,red,red,red,yellow,lightgreen,yellow,yellow,lightgreen,blue,lightgreen,blue,darkgreen,darkgreen,darkgreen,darkgreen];
    astromatcharray[16]=["ESTJ",red,red,red,red,yellow,lightgreen,blue,yellow,blue,lightgreen,blue,lightgreen,darkgreen,darkgreen,darkgreen,darkgreen];
    

          
    for(i=1;i<=16;i++)
    {
        
        if(astromatcharray[0][i]==a)
        {
            break;
        }
    }
    
    for(j=1;j<=16;j++)
    {
            if(astromatcharray[j][0]==b)
            {
                
               return astromatcharray[j][i];
               break;
            }
            
    }
}

function tooltips(){
     $('.tooltip-help_custom').attr('tabindex', '-1');
    $('body, a').attr('tabindex','-1');
    $('form input').attr('tabindex','1');
    $('form select').attr('tabindex','1');
    $('form textarea').attr('tabindex','1');
    $('form button').attr('tabindex','1');

    //Help popups
    $(".tooltip-help_custom").unbind('click');
    $('.tooltip-help_custom').on('click', function () {
        var helpcontent = $(this).attr("data-title");
        var labeltext = $(this).closest(".form-group").find("label").text();
        $.alert({
            title: labeltext,
            content: helpcontent,
            icon: 'fa fa-info',
            animation: 'opacity',
            closeAnimation: 'opacity',
            backgroundDismiss: true,
            buttons: {
                okay: {
                    text: 'Close',
                    btnClass: 'btn-yellow'
                }
            }
        });
    });
}

function renderElements(){
    //Initializing Tooltip
            $('[data-toggle="tooltip"]').tooltip();
            $('.titleHidden').removeAttr('title');

            $(function () {
                //Initialize Select2 Elements
                $(".select2").select2();

                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 1, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate: moment()
                        },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //Date picker
                $('.datepicker').datepicker({
                    autoclose: true
                });
                $('.yearpicker').datepicker({
                    autoclose: true,
                     format: " yyyy", // Notice the Extra space at the beginning
                    viewMode: "years", 
                    minViewMode: "years"
                });

                $(".input-group-addon").on("click", function () {
                    $(this).parents('.form-group').find('input').focus();
                });

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });

                 $("#timeOfArrival").focus(function(){
                     $(this).timepicker({
                        showInputs: false,
                        defaultTime: curtime
                    });
                 });
                 
                var curtime = new Date(new Date().getTime()).toLocaleTimeString();
                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false,
                    defaultTime: curtime
                });
               
            });

} 