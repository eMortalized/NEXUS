<form id="adventure" name="adventure">

    <div class="col-sm-12 text-center top">
        <h2>Adventure & Travel {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-12">

        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="placeVisited" ng-model="placeVisited"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="placeVisited" class="fixPlace">Place visited</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="placeVisited">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="placeVisited">Place visited <label for="placeVisited_upload" class="custom-file-upload">
                                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-data-title="Upload"></i>
                                    </label><input type="file" id="placeVisited_upload" name="placeVisited_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the place visited."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <input class="ff_elem form-control" type="text" name="placeVisited" value="" id="placeVisited" placeholder="Enter the city name to search"/>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="visitationDateStart">Start date <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the start date."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <div class="input-group date">

                                    <input type="text" class="form-control pull-left datepicker" id="visitationDateStart" name="visitationDateStart">
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
                                <label class="custom-display" for="visitationDateEnd">End date <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the end date."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <div class="input-group date">

                                    <input type="text" class="form-control pull-left datepicker" id="visitationDateEnd" name="visitationDateEnd">
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
                                <label class="custom-display" for="adventureNarrative">Adventure narrative <label for="adventureNarrative_upload_upload" class="custom-file-upload">
                                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                    </label><input type="file" id="adventureNarrative_upload_upload" name="adventureNarrative_upload_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Compose a narrative to describe the adventure.  Include details on itinerary, travel companions, experiences, sites, learnings, and other relevant details that could be shared."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <textarea class="form-control" id="adventureNarrative" name="adventureNarrative"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="adventureAchievements">Adventure achievements <label for="adventureAchievements_upload" class="custom-file-upload">
                                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                    </label><input type="file" id="adventureAchievements_upload" name="adventureAchievements_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe any achievements on the adventure.  This may include climbing a mountain, hiking a trail, volunteering, seeing a site, conquering a fear, learning something new, etc.
                                                                                                                                         "><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <textarea class="form-control" id="adventureAchievements" name="adventureAchievements"></textarea>
                                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    
                    <div class="form-group resultform sortable">


                    </div>
                    <br>
                </div>
            </div>
            </div>
        </div>

    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-12">

        <!-- array field start -->
        <div class="arrayFields">  
            
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="happening" ng-model="happening"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="happening" class="fixPlace">Happening, event or occurrence</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="happening">
                
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="happening">Happening, event or occurrence <label for="happening_upload" class="custom-file-upload">
                                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                    </label><input type="file" id="happening_upload" name="happening_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="This field is for life events that are momentous and meaningful yet unrelated to other categories.  Examples may include, hit by lightening, won the lottery, appeared on a TV show, sailed across the Atlantic Ocean, piloted a plane, etc.  In this field simply enter the name of the event, for example, 'Won the lottery' - the format is part participle verb followed by subject noun."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <textarea class="form-control" id="happening" name="happening"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="happeningDate">Happening date <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the earliest date of happening, event or occurrence."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <div class="input-group date">

                                    <input type="text" class="form-control pull-left datepicker" id="happeningDate" name="happeningDate">
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
                                <label class="custom-display" for="happeningNarrative">Happening narrative <label for="happeningNarrative_upload" class="custom-file-upload">
                                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                    </label><input type="file" id="happeningNarrative_upload" name="happeningNarrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the event in rich narrative detail."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <textarea class="form-control" id="happeningNarrative" name="happeningNarrative"></textarea>
                                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  col of result div -->
                <div class="col-sm-12">
                    <div class="form-group resultform sortable">


                    </div>
                </div>

                <!-- col of result div end -->
            </div>
            </div>
        </div>

        <!-- array field end -->

    </div>


    <!-- End of Col 2 -->

    <!-- Col 3 -->
    <div class="col-md-4">




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
        jQuery("#placeVisited").autocomplete({
            source: function (request, response) {
                jQuery.getJSON(
                        "http://gd.geobytes.com/AutoCompleteCity?callback=?&q=" + request.term,
                        function (data) {
                            response(data);
                        }
                );
            },
            minLength: 3,
            select: function (event, ui) {
                var selectedObj = ui.item;
                jQuery("#placeVisited").val(selectedObj.value);
                getcitydetails(selectedObj.value);
                return false;
            },
            open: function () {
                jQuery(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            close: function () {
                jQuery(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
        jQuery("#placeVisited").autocomplete("option", "delay", 100);

        $(".ff_elem").autocomplete({
            select: function (event, ui) {
                var origEvent = event;
                while (origEvent.originalEvent !== undefined)
                    origEvent = origEvent.originalEvent;
                if (origEvent.type == 'keydown')
                    $(".ff_elem").click();
            },
        });
    });
</script>