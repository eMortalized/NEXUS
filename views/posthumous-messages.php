    <!-- Mid Section -->
    <div class="col-sm-8 nopadding scroll" ng-controller="posthumousController"  >
        
        <div class="midsec">
<!--            <div class="container-fluid Posthumousgrid-wrap">
                <div class="row container-posthomous">
                    <div class="col-sm-4 boxes-posthomous">
                        <div class="links-posthomous active" ng-click="changeTemplate(0)"><p>New</p></div>
                    </div>
                    <div class="col-sm-4 boxes-posthomous">
                        <div class="links-posthomous" ng-click="changeTemplate(1)"><p>Others View</p></div>
                    </div>
                    <div class="col-sm-4 boxes-posthomous">
                        <div class="links-posthomous" ng-click="changeTemplate(2)"><p>Own View</p></div>
                    </div>
                </div>
            </div>-->
            
            <div class="Posthumousgrid-form" style="position:relative;top:0;left:0;">
                <div ng-include src="template.url"></div>
            </div>
        </div>
    </div>
    <!-- End of Mid Section -->


    <!-- Right Section -->
    <div class="col-sm-3 nopadding">
        <div class="rightsec">


            <div class="main-content">
                <div class="content-pad">
                    <p class="about-text">Teaser...
                    </p>


                </div>
            </div>



            <button class="aboutmeBtn">Home ></button>
            <p class="clearfix"></p>
        </div>
    </div>
    <!-- End of Right Section -->

    <span class="sm-media"></span>

