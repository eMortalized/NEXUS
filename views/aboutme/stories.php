<form id="stories" name="stories">

    <div class="col-sm-12 text-center top">
        <h2>Stories {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">
        
         <div class="arrayFields">  
             <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="funnyStory" ng-model="funnyStory"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="funnyStory" class="fixPlace">Funny story to share…</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="funnyStory">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="funny">Funny story to share… <label for="funny_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="funny_upload" name="funny_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Write a story to share.  Ensure to include dates, times, places and people who are relevant."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="funny" name="funny"></textarea>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
             <div class="form-group resultform sortable">
                
                
            </div>
            </div>
         </div>

        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="interestingStory" ng-model="interestingStory"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="interestingStory" class="fixPlace">Interesting story to share…</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="interestingStory">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="interesting">Interesting story to share… <label for="interesting_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up" data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="interesting_upload" name="interesting_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Write a story to share.  Ensure to include dates, times, places and people who are relevant."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="interesting" name="interesting"></textarea>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                
            </div>
        </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>

        





    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-4">
        
         <div class="arrayFields"> 
             <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="embarrassingStory" ng-model="embarrassingStory"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="embarrassingStory" class="fixPlace">Embarrassing story to share…</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="embarrassingStory">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="embarrassing">Embarrassing story to share… <label for="embarrassing_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="embarrassing_upload" name="embarrassing_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Write a story to share.  Ensure to include dates, times, places and people who are relevant."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="embarrassing" name="embarrassing"></textarea>
                 <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
             <div class="form-group resultform sortable">
                
                
            </div>
            </div>
         </div>


 <div class="arrayFields"> 
     <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="emotionalStory" ng-model="emotionalStory"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="emotionalStory" class="fixPlace">Emotional story to share…</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="emotionalStory">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="emotional">Emotional story to share… <label for="emotional_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="emotional_upload" name="emotional_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Write a story to share.  Ensure to include dates, times, places and people who are relevant."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="emotional" name="emotional"></textarea>
                   <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                
            </div>
        </div>
        </div>
       <div class="form-group resultform sortable">
                
                
            </div>
            </div>
 </div>

        


    </div>
    <!-- End of Col 2 -->

    <!-- Col 3 -->
    <div class="col-md-4">
        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="definingStory" ng-model="definingStory"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="definingStory" class="fixPlace">Defining story to share…</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="definingStory">
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="defining">Defining story to share… <label for="defining_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="defining_upload" name="defining_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Write a story to share.  Ensure to include dates, times, places and people who are relevant."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="defining" name="defining"></textarea>
                 <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
        </div>
        </div>
            
             <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>
        
          <div class="arrayFields">
              <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="otherStory" ng-model="otherStory"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="otherStory" class="fixPlace">Other story to share…</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="otherStory">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="other">Other story to share… <label for="other_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="other_upload" name="other_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Write a story to share.  Ensure to include dates, times, places and people who are relevant."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="other" name="other"></textarea>
                  <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
        </div>
        </div>
              <div class="form-group resultform sortable">
                
                
            </div>
            </div>
          </div>
        
        
        </div>


    <!-- End of Col 3 -->
    <div class="col-md-12 text-center">
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>