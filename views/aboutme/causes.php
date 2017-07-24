<form id="causes" name="causes">

    <div class="col-sm-12 text-center top">
        <h2>Passions & Causes {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">
        
        <div class="arrayFields">  
            
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="cause" ng-model="cause"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="cause" class="fixPlace">Cause</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="cause">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="cause">Cause <label for="cause_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="cause_upload" name="cause_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a cause that is important and meaningful.  Causes are the issues, and not the charities or solutions that attempt to manage them."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="cause" name="cause" maxlength="100"/>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="causeURL">Cause URL <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the URL of an organization associated with or describing the cause."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="causeURL" name="causeURL"/>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="causeNarrative">Cause Narrative <label for="causeNarrative_upload_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="causeNarrative_upload_upload" name="causeNarrative_upload_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the importance and meaning of the cause.  Also describe activities related to this cause."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="causeNarrative" name="causeNarrative"></textarea>
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
                    <switch name="charity" ng-model="charity"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="charity" class="fixPlace">Charity</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="charity">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="charity">Charity <label for="charity_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="charity_upload" name="charity_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a charity that is doing good work and to which donations would be advised."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <select class="form-control chosen-select" id="charity" name="charity">
                    <option> </option>
                    <?php 
                    $result = mysqli_query($con,"select * from data_charities");
                    while($record=mysqli_fetch_array($result)){
                        echo "<option>".$record['charity']."</option>";
                    }
                    ?>
                </select>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="charityURL">Charity URL <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the URL of the charity in the home country."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="charityURL" name="charityURL"/>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="charityNarrative">Charity narrative <label for="charityNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="charityNarrative_upload" name="charityNarrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the work of the charity and how it deserves donations over other charities.  Also describe the relationship with the charity."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="charityNarrative" name="charityNarrative"></textarea>
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
                    <switch name="passion" ng-model="passion"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="passion" class="fixPlace">Passion</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="passion">
                <div class="form-group">
                    <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="passion">Passion <label for="passion_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="passion_upload" name="passion_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a passion or love.  A passion is a driver that intrinsically motivates an individual to pursue it."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" maxlength="100" id="passion" name="passion"/>
            </div>
                    </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="passionURL">Passion URL <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the URL of an organization associated with or describing the passion."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="passionURL" name="passionURL"/>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="contribution">Contribution <label for="contribution_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="contribution_upload" name="contribution_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a contribution made to this passion, such as a painting, sketch, sculpture, volunteer time, or other contribution.  Images or other media can be uploaded at will."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="contribution" name="contribution" maxlength="100"/>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="passionNarrative">Passion narrative <label for="passionNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="passionNarrative_upload" name="passionNarrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the passion and the role it has played."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="passionNarrative" name="passionNarrative"></textarea>
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
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="memoir">Memoir <label for="memoir_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="memoir" name="memoir" rows="5"></textarea>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>