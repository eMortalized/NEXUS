<form id="sports" name="sports">

    <div class="col-sm-12 text-center top">
        <h2>Sports {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-12">
        <!-- Array Start -->
        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="sport" ng-model="sport"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="sport" class="fixPlace">Sport</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="sport">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="sport">Sport <label for="sport_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="sport_upload" name="sport_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select or enter a sport."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <!--<input type="text" class="form-control" name="sport" id="sport">-->
                                    <select class="form-control chosen-select" data-placeholder="Choose an option" ng-model="sportName" id="sport" name="sport" >
                                        <option> </option>
                                    <?php
                                    $result = mysqli_query($con, "select * from data_sports");
                                    while ($record = mysqli_fetch_array($result)) {
                                        echo "<option>" . $record['sports_name'] . "</option>";
                                    }
                                    ?>
                                    </select>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="dateFrom">Date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you started this sport.  Aproximate is fine."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <div class="input-group date">

                                        <input type="text" class="form-control pull-left datepicker" id="dateFrom" name="dateFrom">
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
                                    <label class="custom-display" for="dateTo">Date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you ended this sport.  Approximate is fine."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <div class="input-group date">

                                        <input type="text" class="form-control pull-left datepicker" id="dateTo" name="dateTo">
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
                                    <label class="custom-display" for="narrative">Narrative <label for="narrative_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="narrative_upload" name="narrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the story of the sporting experience.  This includes introduction, training, coaches, fellow athletes, competition, injury, recovery, mindset, etc.  Stories of trial and tribulation are interesting."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="narrative" name="narrative"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="accomplishments">Accomplishments <label for="hobby_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="hobby_upload" name="hobby_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the accomplishments achieved through this sport, which often include learnings that can be applied to other areas.  Describe promotion through martial art belts, elevation to higher weight class, competing for a spot on an Olympic team, etc."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <textarea class="form-control" id="accomplishments" name="accomplishments"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="awards">Awards <label for="awards_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="awards_upload" name="awards_upload"/>
                                        <a class="additemText pull-right" href="" data-inputTarget="awards_sports"><i class="fa fa-plus-circle"></i></a>
                                        <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter awards that were earned."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="typehead form-control" id="awards_sports" name="awards_sports" />
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
    <!-- End of Col 1 -->
    <!-- End of Col 3 -->
    <div class="col-sm-12">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="memoir">Memoir <label for="memoir_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="memoir" name="memoir"></textarea>
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

        var awards_sports = ["award1", "award2", "award3", "award4"];
        var awards_sports = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: awards_sports
        });
        $('#awards_sports').tagsinput({
            typeaheadjs: {
                source: awards_sports
            },
            freeInput: true,
            confirmKeys: [13, 32]
        });

        // Code to fetch values from tag
        //var a =$('#orphanage').tagsinput('items');


    });
</script>

