<form id="mysticism" name="mysticism">

    <div class="col-sm-12 text-center top">
        <h2>Mysticism {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">

        <div class="zodiacfield zodiac_sign">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="zodiacSign_upload">Zodiac sign <label for="zodiacSign_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="zodiacSign_upload" name="zodiacSign_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter Date of Birth in Personal Details to view Zodiac Sign"><i class="fa fa-info-circle"></i></a></label>
                            
                        <input type="hidden" name="zodiacSign" id="zodiacSign" ng-model="zodiacSign" class="zodiacSign" />
                            
                        <div class="text-center zpdoac_sign_img">
                           
                        </div>
                        <div class="text-center">
                            <span>{{ zodiacSign }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">

                <div class="col-sm-12">
                    <label class="custom-display" for="numerology">Numerology <label for="numerology_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="numerology_upload" name="numerology_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="This field is for capturing numerologically significant information."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="numerology" name="numerology"></textarea>
                </div>
            </div>
        </div>
        
        <div class="zodiacfield zodiac_sign">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display">Chinese zodiac sign/Sheng Xiao <label for="zodiacSignChinese_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                            </label><input type="file" id="zodiacSignChinese_upload" name="zodiacSignChinese_upload"/> <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter Date of Birth in Personal Details to view Chinese Zodiac Sign"><i class="fa fa-info-circle"></i></a> </label>
                    
                        <input type="hidden" name="zodiacSignChinese" id="zodiacSignChinese" ng-model="zodiacSignChinese" class="zodiacSignChinese" />
                            
                        <div class="text-center zodiacSignChinese_img">
                            
                        </div>    
                        <div class="text-center">
                            <span>{{ zodiacSignChinese }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="arrayFields"> 

            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="fortunes" ng-model="fortunes"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="fortunes" class="fixPlace">Fortune</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="fortunes">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="fortunes">Fortune <label for="fortunes_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                </label><input type="file" id="fortunes_upload" name="fortunes_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any fortunes told by fortune tellers, with any other details which help to make the story rich.  Describe the impact of the experience."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="fortunes" name="fortunes"></textarea>

                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="fortuneDate">Date </label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <div class="input-group date">

                                <input type="text" class="form-control pull-left datepicker" id="fortuneDate" name="fortuneDate">
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
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-4">

        <div class="arrayFields">

            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="premonitions" ng-model="premonitions"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="premonitions" class="fixPlace">Premonition</span>
                </div>
            </div>
            <!-- Array Head -->
            <!-- Array Body -->
            <div class="arrayBody" ng-show="premonitions">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="premonitions">Premonition <label for="premonitions_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                </label><input type="file" id="premonitions_upload" name="premonitions_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any premonitions experienced, with any other details which help to make the story rich.  Describe the impact of the experience."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="premonitions" name="premonitions"></textarea>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="premonitionDate">Date </label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <div class="input-group date">

                                <input type="text" class="form-control pull-left datepicker" id="premonitionDate" name="premonitionDate">
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
                    <switch name="lifeChangingExperiences" ng-model="lifeChangingExperiences"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="lifeChangingExperiences" class="fixPlace">Life-changing experience</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="lifeChangingExperiences">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="lifeChangingExperiences">Life-changing experience <label for="lifeChangingExperiences_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                </label><input type="file" id="lifeChangingExperiences_upload" name="lifeChangingExperiences_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any life-changing experiences, with any other details which help to make the story rich.  Describe the impact of the experience."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="lifeChangingExperiences" name="lifeChangingExperiences"></textarea>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="LCEDate">Date </label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <div class="input-group date">

                                <input type="text" class="form-control pull-left datepicker" id="LCEDate" name="LCEDate">
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
                    <switch name="superstitions" ng-model="superstitions"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="superstitions" class="fixPlace">Superstitions </span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="superstitions">

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="superstitions">Superstitions <label for="superstitions_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                </label><input type="file" id="superstitions_upload" name="superstitions_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any superstitions."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control typehead" id="superstitions" name="superstitions" maxlength="256"/></textarea>  
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
                    <switch name="pastlives" ng-model="pastlives"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="pastlives" class="fixPlace">Past lives</span>
                </div>
            </div>
            <!-- Array Head -->
            <!-- Array Body -->
            <div class="arrayBody" ng-show="pastlives">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="pastlives">Past lives <label for="pastlives_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                </label><input type="file" id="pastlives_upload" name="pastlives_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter details on past lives."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="pastlives" name="pastlives"></textarea>
                            <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="form-group resultform sortable">
                </div>

            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="luckyCharms">Lucky charms <label for="luckyCharms_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="luckyCharms_upload" name="luckyCharms_upload"/>
                        <a class="additemText pull-right" href="" data-inputTarget="luckyCharms"><i class="fa fa-plus-circle"></i></a>
                        <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any lucky charms, amulets or other objects."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="typehead form-control" id="luckyCharms" name="luckyCharms" maxlength="256"/>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="luckyNumbers">Lucky number(s) <label for="luckyNumbers_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="luckyNumbers_upload" name="luckyNumbers_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any lucky numbers"><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input class="typehead form-control" id="luckyNumbers" name="luckyNumbers"  type="text" value="" />
                </div>
            </div>

        </div>

        <!-- Array Start -->
        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="routinesForLuck" ng-model="routinesForLuck"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="routinesForLuck" class="fixPlace">Lucky routines</span>
                </div>
            </div>
            <!-- Array Head -->
            <!-- Array Body -->
            <div class="arrayBody" ng-show="routinesForLuck">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="routinesForLuck">Lucky routines <label for="routinesForLuck_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                </label><input type="file" id="routinesForLuck_upload" name="routinesForLuck_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any lucky routines, traditions, or actions."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="routinesForLuck" name="routinesForLuck"></textarea>
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

<script type="text/javascript">

    jQuery(function ()
    {

        var luckyCharms = ["luckyCharm1", "luckyCharm2", "luckyCharm3", "luckyCharm4"];
        var luckyCharms = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: luckyCharms
        });
        $('#luckyCharms').tagsinput({
            typeaheadjs: {
                source: luckyCharms
            },
            freeInput: true
        });

        // Code to fetch values from tag
        //var a =$('#orphanage').tagsinput('items');



        $('#luckyNumbers').tagsinput({
            freeInput: true
        });
        // Code to fetch values from tag
        //var a =$('#middleName').tagsinput('items');

    });
</script>