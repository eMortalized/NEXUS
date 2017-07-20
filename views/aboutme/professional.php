<form id="professional" name="professional">

    <div class="col-sm-12 text-center top">
        <h2>Professional {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">

        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="profession" ng-model="profession"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="profession" class="fixPlace">Profession</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="profession">

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="jobdata-title">Job data-title <label for="jobdata-title_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="jobdata-title_upload" name="jobdata-title_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the job data-title you were given by the organization.  If multiple data-titles were held concurrently, enter them as separate entries.  If multple sequential data-titles were held within the same organization, enter them as separate entries.  The job data-title can be for self employed data-titles, such as author, entrepreneur, etc.  Military service, voluntary or draft, should be entered here.  Individuals who have been incarcerated or take a sabbatical should enter that here.  Retirement should be entered as a profession."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <input type="text" class="form-control" name='jobdata-title' id='jobdata-title' maxlength="70"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="profession">Profession  <label for="profession_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="profession_upload" name="profession_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="The profession is the field of practice.  Examples include civil engineer, lawyer, social worker, etc.  Separately indicating the profession is necessary when the job data-title is unclear about the field of practice."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <input type="text" class="form-control" name='profession' id='profession' maxlength="70"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="dateFrom">Date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the start date.  An approximation is fine."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <div class="input-group date">

                            <input type="text" class="form-control pull-left datepicker" name='dateFrom' id='dateFrom'>
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="dateTo">Date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the end date.  An approximation is fine."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <div class="input-group date">

                            <input type="text" class="form-control pull-left datepicker" name='dateTo' id='dateTo'>
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="workType">Work type <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the type of work arrangement."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <select class="form-control chosen-select" name='workType' id='workType' required>
                            <option> </option>
                            <option>Full-time</option>
                            <option>Volunteer</option>
                            <option>Part-time</option>
                            <option>Field placement/Work practicum</option>
                            <option>Summer position</option>
                            <option>Contract</option>
                            <option>Internship</option>
                            <option>Casual</option>
                            <option>Court ordered</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="organization">Organization <label for="organization_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="organization_upload" name="organization_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the organization legal name."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <input type="text" class="form-control" name='organization' id='organization' maxlength="70"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="URL">URL  <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the URL of the organization."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <input type="text" class="form-control" name='URL' id='URL' maxlength="70"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="narrative">Narrative <label for="narrative_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="narrative_upload" name="narrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a narrative for the work experience.  How was the job found?  What was the qualification required?  What was the interview process?  How was candidate selection made?   How competitive was the job?  What were the pros and cons?  What happened during this term?  If applicable, why did it end?"><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <textarea class="form-control" name='narrative' id='narrative'></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="accomplishments">Accomplishments <label for="accomplishments_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="accomplishments_upload" name="accomplishments_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="What was accomplished during the term?  Indicate promotions, awards, performance ratings, bonuses, kudos, special events, learnings, and anything else of note."><i class="fa fa-info-circle"></i></a> </label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <textarea class="form-control" name='accomplishments' id='accomplishments'></textarea>
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
                    <switch name="training" ng-model="training"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="training" class="fixPlace">Training</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="training">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="training">Training <label for="training_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="training_upload" name="training_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the name of the training program completed."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='training' id='training' maxlength="70"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="dateFrom">Date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the start date."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='dateFrom' id='dateFrom'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="dateTo">Date ended  <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the end date."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='dateTo' id='dateTo'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
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
                    <switch name="designation" ng-model="designation"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="designation" class="fixPlace">Credential or designation</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="designation">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="credential">Credential or designation <label for="credential_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="credential_upload" name="credential_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the credential or designation earned.  Enter the complete name, and include the acronym in brackets at the end if appropriate."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='credential' id='credential' maxlength="70"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="creden_date">Date attained </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='creden_date' id='creden_date'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
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
                    <switch name="license" ng-model="license"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="license" class="fixPlace">License</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="license">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="license">License  <label for="license_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="license_upload" name="license_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the license earned.  Enter the complete name, and include the acronym in brackets at the end if appropriate."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='license' id='license' maxlength="70"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="licence_date">Date attained </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='licence_date' id='licence_date'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    
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
                    <switch name="certification" ng-model="certification"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="certification" class="fixPlace">Certification</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="certification">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="certification">Certification   <label for="certification_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="certification_upload" name="certification_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the certification earned.  Enter the complete name, and include the acronym in brackets at the end if appropriate."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='certification' id='certification' maxlength="70"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="certification_date">Date attained </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='certification_date' id='certification_date'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
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
                    <switch name="membership" ng-model="membership"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="membership" class="fixPlace">Membership, association or affiliation</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="membership">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="membership">Membership, association or affiliation   <label for="membership_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="membership_upload" name="membership_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the name of the organization to which there is professional membership, association or affiliation.  Enter the complete name, and include the acronym in brackets at the end if appropriate."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='membership' id='membership' maxlength="70"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="membership_dateFrom">Date joined  <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the start date."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='membership_dateFrom' id='membership_dateFrom'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="membership_dateTo">Date ended  <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the end date."><i class="fa fa-info-circle"></i></a> </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='membership_dateTo' id='membership_dateTo'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
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
                    <switch name="aptitudeTesting" ng-model="aptitudeTesting"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="aptitudeTesting" class="fixPlace">Aptitude or professional test</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="aptitudeTesting">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="aptitudeTesting">Aptitude or professional test  <label for="aptitudeTesting_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="aptitudeTesting_upload" name="aptitudeTesting_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the name of the test taken."><i class="fa fa-info-circle"></i></a>  </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='aptitudeTesting' id='aptitudeTesting' maxlength="70"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="apptitude_date">Date taken </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="input-group date">

                        <input type="text" class="form-control pull-left datepicker" name='apptitude_date' id='apptitude_date'>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="results">Results  <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the results as provided on the score sheet."><i class="fa fa-info-circle"></i></a>  </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" name='results' id='results' maxlength="256"/>
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
                    <label class="custom-display" for="memoir">Memoir  <label for="memoir_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a>   </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" name='memoir' id='memoir'></textarea>
                </div>
            </div>
        </div>
    </div>   
    <div class="col-md-12 text-center">
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>