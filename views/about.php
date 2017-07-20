    <?php include '../inc/connect.php'; ?>

    <!-- Mid Section -->
    <div class="col-sm-8 nopadding" ng-controller="aboutController"  >

        <div class="midsec">
            <div class="container-fluid">
                <div class="grid-wrap">
                    <div class="gridsm">   
                        <label class="label_grid1 active"><img src="img/aboutme/personal_details.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="personal"  class="hidden_radio"><span>Personal Details</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1 "><img src="img/aboutme/early_details.jpg" class="img_grid" ><input type="radio" name="activeGrid"  ng-model="activeGrid" value="early_details" class="hidden_radio pull-center"><span>Early Details</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/firsts.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="firsts"  class="hidden_radio"><span>Firsts</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/body_mind.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="bodyandmind"  class="hidden_radio"><span>Body & Mind</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/religion.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="religion"  class="hidden_radio"><span>Religion & Spirituality</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/mysticism.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="mysticism"  class="hidden_radio"><span>Mysticism</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/favourites.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="favourites"  class="hidden_radio"><span>Favourites</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/hobbies.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="hobbies"  class="hidden_radio"><span>Hobbies</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/sport.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="sports"  class="hidden_radio"><span>Sports</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/adventure.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="adventure"  class="hidden_radio"><span>Adventure & Travel </span> </label>
                    </div>

                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/education.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="education"  class="hidden_radio"><span>Education</span> </label>
                    </div>

                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/love_romance.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="love"  class="hidden_radio"><span>Love & Romance</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/professional.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="professional"  class="hidden_radio"><span>Professional</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/passions_causes.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="causes"  class="hidden_radio"><span>Passions & Causes </span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/wisdom.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="wisdom"  class="hidden_radio"><span>Wisdom & Memoirs</span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/parenting.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="parenting"  class="hidden_radio"><span> Parenting </span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/residences.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="residences"  class="hidden_radio"><span> Residences </span> </label>
                    </div>
                    <div class="gridsm">   
                        <label class="label_grid1"><img src="img/aboutme/style.jpg" class="img_grid" ><input type="radio" name="activeGrid" ng-model="activeGrid" value="style"  class="hidden_radio"><span> Style </span> </label>
                    </div>

                    <p class="clearfix"></p>
                </div>
            </div>
            
            <div class="formsection early_details scroll" style="position:relative;top:0;left:0;">
                <a href=".top" id="link_top" class="page-scroll" data-target=".scroll"><span class="fa fa-chevron-circle-up"></span></a>
                
                <div class="container-fluid" id="top">
                    <div class="row">
                        
                        <!-- Default -->
                        <div ng-hide="!(activeGrid == 'personal')"><?php include 'aboutme/personal.php'; ?> </div>
                        <div ng-show="activeGrid == 'early_details'"><?php include 'aboutme/early_details.php'; ?> </div>
                        <div ng-show="activeGrid == 'firsts'"><?php include 'aboutme/firsts.php'; ?> </div>
                        <div ng-show="activeGrid == 'bodyandmind'"><?php include 'aboutme/bodyandmind.php'; ?> </div>
                        <div ng-show="activeGrid == 'religion'"><?php include 'aboutme/religion.php'; ?> </div>
                        <div ng-show="activeGrid == 'mysticism'"><?php include 'aboutme/mysticism.php'; ?> </div>
                        <div ng-show="activeGrid == 'favourites'"><?php include 'aboutme/favourites.php'; ?> </div>
                        <div ng-show="activeGrid == 'adventure'"><?php include 'aboutme/adventure.php'; ?> </div>
                        <div ng-show="activeGrid == 'education'"><?php include 'aboutme/education.php'; ?> </div>
                        <div ng-show="activeGrid == 'love'"><?php include 'aboutme/love.php'; ?> </div>
                         <div ng-show="activeGrid == 'professional'"><?php include 'aboutme/professional.php'; ?> </div>
                         <div ng-show="activeGrid == 'causes'"><?php include 'aboutme/causes.php'; ?> </div>
                        <div ng-show="activeGrid == 'hobbies'"><?php include 'aboutme/hobbies.php'; ?> </div>
                        <div ng-show="activeGrid == 'sports'"><?php include 'aboutme/sports.php'; ?> </div>
                        <div ng-show="activeGrid == 'wisdom'"><?php include 'aboutme/wisdom.php'; ?> </div>
                        <div ng-show="activeGrid == 'parenting'"><?php include 'aboutme/parenting.php'; ?> </div>
                        <div ng-show="activeGrid == 'residences'"><?php include 'aboutme/residences.php'; ?> </div>
                        <div ng-show="activeGrid == 'style'"><?php include 'aboutme/style.php'; ?> </div>
                        <div ng-show="activeGrid == 'stories'"><?php include 'aboutme/stories.php'; ?> </div>
                        
                        
                        
                        <!-- Inner Views -->
                       

                        <!-- End of Innver Views -->


                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End of Mid Section -->


    <!-- Right Section -->
    <div class="col-sm-3 nopadding">
        <div class="rightsec">


            <div class="main-content">
                <div class="content-pad">
                    <p class="about-text">Family Tree Teaser...
                    </p>


                </div>
            </div>



            <button class="aboutmeBtn">Family Tree ></button>
            <p class="clearfix"></p>
        </div>
    </div>
    <!-- End of Right Section -->

    <span class="sm-media"></span>


