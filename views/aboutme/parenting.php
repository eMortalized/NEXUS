<form id="parenting" name="parenting">

    <div class="col-sm-12 text-center top">
        <h2>Parenting {{test}}</h2>
    </div>

    <div class="col-sm-12">
        <h4 class="grouping-txt text-center" style="">Parenting</h4>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="desireNarrative">Desire to have children <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the desire to have children in terms of strength of desire, gender of children, etc.  If this has changed over time, describe these changes and why they changed."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="desireNarrative" name="desireNarrative"></textarea>
                </div>
            </div>
        </div>



    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="desireNumber">How many children in total <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input the quantity of children desired."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="desireNumber" name="desireNumber">
                        <option></option>
                        <option value="1">1</option>
                        <option value="1">2</option>

                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="children"><input type="checkbox" icheck id="children" name="children" ng-model="child"> Children </label> 
                </div>
                <!--<div class="col-sm-12 noPadding">
                    <label class="custom-display">
                        <input type="checkbox" class="minimal" checked id="children" name="children">
                    </label>
                </div>-->
            </div>
        </div> 
        <div class="arrayFields field-child" ng-show="child">


            <!-- Array Body -->
            <div class="arrayBody" >
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="child">Child <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input the proper name for the child."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="form-control" id="child" name="child"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="parentingDOB">Date of birth <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the date of birth."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <div class="input-group date">

                                        <input type="text" class="form-control pull-left datepicker" id="parentingDOB" name="parentingDOB" required>
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
                                    <label class="custom-display" for="parentingBond">Bond <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the type of bond with the child."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <select class="form-control chosen-select" id="parentingBond" name="parentingBond" required>
                                        <option></option>
                                        <option>Natural</option>
                                        <option>Adoption</option>
                                        <option>Stepchild</option>
                                        <option>Relative</option>
                                        <option>Guardian</option>
                                        <option>Foster</option>
                                        <option>Other</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="journey">Journey to child <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe in rich detail the journey to create and deliver this child."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="journey" name="journey"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="pregnancyNarrativeMom">Mom's pregnancy narrative <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the experience of pregnancy from Mom's perspective through the trimesters."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="pregnancyNarrativeMom" name="pregnancyNarrativeMom"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="weightGainMom">Weight gained by Mom <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input in pounds or kilograms the weight gained."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="form-control" id="weightGainMom" name="weightGainMom"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="dietaryMom">Foods eaten by Mom <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="What were Mom's cravings?  What did she eat?"><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="dietaryMom" name="dietaryMom"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="pregnancyNarrativeDad">Dad's pregnancy narrative <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the experience supporting pregnancy from Dad's perspective through the trimesters."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="pregnancyNarrativeDad" name="pregnancyNarrativeDad"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="weightGainDad">Weight gained by Dad <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input in pounds or kilograms the weight gained."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="form-control" id="weightGainDad" name="weightGainDad"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="arrivalNarrative">Arrival narrative <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the day of arrival.  Include details of transportation, location, people present, duration of labour, and the experience of delivery."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="arrivalNarrative" name="arrivalNarrative"></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="parentingDOD">Date of death <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the date of death."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <div class="input-group date">

                                        <input type="text" class="form-control pull-left datepicker" id="parentingDOD" name="parentingDOD">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group resultform sortable">
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="arrayFields margin-fix" ng-show="child">  
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="parentingFavMemories" ng-model="parentingFavMemories"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="parentingFavMemories" class="fixPlace">Favourite parenting memories</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="parentingFavMemories">

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="parentingFavMemories">Favourite parenting memories <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe in rich detail all the favourite and memorable parenting memories."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="parentingFavMemories" name="parentingFavMemories"></textarea>
                            <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group resultform sortable">


                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">

        <div class="form-group" ng-show="child">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="parenting">Parenting is...  <label for="parenting_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="parenting_upload" name="parenting_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="parenting" name="parenting" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group" ng-show="child">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="parentingGood">A good parent...  <label for="parentingGood_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="parentingGood_upload" name="parentingGood_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="parentingGood" name="parentingGood" maxlength="256"/>
                </div>
            </div>
        </div>

    </div>   
    <div class="col-md-4">

        <div class="form-group" ng-show="child">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="parentingWish">I wish I... <label for="parentingWish_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="parentingWish_upload" name="parentingWish_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="parentingWish" name="parentingWish" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group" ng-show="child">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="parentingImportant">The most important lesson for<br/> my children is... <label for="parentingImportant_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="parentingImportant_upload" name="parentingImportant_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="parentingImportant" name="parentingImportant" maxlength="256"/>
                </div>
            </div>
        </div>    
    </div>

    <!-- End of Col 2 -->
    <div class="col-md-12">
        <div class="form-group" ng-show="child">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="parentingMemoir">Parenting memoir: <label for="parentingMemoir_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="parentingMemoir_upload" name="parentingMemoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="parentingMemoir" rows="5"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <h4 class="grouping-txt text-center" style="">Grandparenting</h4>
    </div>

    <!-- Col 3 -->
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="grandchildren"><input type="checkbox" icheck id="grandchildren" name="grandchildren" ng-model="grandchild"> Grandchildren</label>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-12">


        <div class="arrayFields field-grandchild" ng-show="grandchild">  


            <!-- Array Body -->
            <div class="arrayBody" >
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="grandchild">Grandchild <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input the proper name for the grandchild."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="form-control" placeholder="Type name of grand child" id="grandchild" name="grandchild" maxlength="256"/>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="grandparentingDOB">Date of birth <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the date of birth."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <div class="input-group date">

                                        <input type="text" class="form-control pull-left datepicker" id="grandparentingDOB" name="grandparentingDOB" required maxlength="50">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="grandparentingBond">Bond <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the type of bond with the child."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <select class="form-control chosen-select" id="grandparentingBond" name="grandparentingBond" required>
                                        <option></option>
                                        <option>Natural</option>
                                        <option>Adoption</option>
                                        <option>Stepchild</option>
                                        <option>Relative</option>
                                        <option>Guardian</option>
                                        <option>Foster</option>
                                        <option>Other</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-sm-4">
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="relationship">Relationship narrative <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the relationship with this particular grandchild in a descriptive way."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="relationship" name="relationship"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="grandparentingDOD">Date of death <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the date of death."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <div class="input-group date">

                                        <input type="text" class="form-control pull-left datepicker" id="grandparentingDOD" name="grandparentingDOD" maxlength="50">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                    <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                      
                    <div class="col-sm-12">
                        <div class="form-group resultform sortable">


                        </div>
                    </div>

                </div>
            </div>
            </div> 
        </div>






    

    <div class="col-md-4">

        <div class="arrayFields margin-fix" ng-show="grandchild"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="grandparentingFavMemories" ng-model="grandparentingFavMemories"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="grandparentingFavMemories" class="fixPlace">Favourite grandparenting memories</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="grandparentingFavMemories">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="grandparentingFavMemories">Favourite grandparenting memories <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe in rich detail all the favourite and memorable grandparenting memories."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="grandparentingFavMemories" name="grandparentingFavMemories"></textarea>
                            <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group resultform sortable">


                </div>
            </div>
        </div>

    </div>

    <div class="col-md-4">

        <div class="form-group " ng-show="grandchild">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="grandparenting">Grandparenting is... <label for="grandparenting_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="grandparenting_upload" name="grandparenting_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="grandparenting" name="grandparenting" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group" ng-show="grandchild">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="grandparentingGood">A good grandparent... <label for="grandparentingGood_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="grandparentingGood_upload" name="grandparentingGood_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="grandparentingGood" name="grandparentingGood" maxlength="256"/>
                </div>
            </div>
        </div>

        


    </div>
    
    <div class="col-md-4">
        <div class="form-group" ng-show="grandchild">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="grandparentingWish">I wish I... <label for="grandparentingWish_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="grandparentingWish_upload" name="grandparentingWish_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="grandparentingWish" name="grandparentingWish" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group" ng-show="grandchild">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="grandparentingImportant">The most important lesson for my grandchildren is... <label for="grandparentingImportant_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="grandparentingImportant_upload" name="grandparentingImportant_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a brief answer that completes the sentence, as would be said in the voice of the individual."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="grandparentingImportant" name="grandparentingImportant" maxlength="256"/>
                </div>
            </div>
        </div>
    </div>    
    

    <div class="col-md-12">
        <div class="form-group" ng-show="grandchild">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="grandparentingMemoir">Grandparenting memoir <label for="grandparentingMemoir_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="grandparentingMemoir_upload" name="grandparentingMemoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="grandparentingMemoir" rows="5"></textarea>
                </div>
            </div>
        </div>
    </div>    
    <!-- End of Col 3 -->
    <div class="col-md-12 text-center">
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>