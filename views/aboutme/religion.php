<form id="religion" name="religion">

    <div class="col-sm-12 text-center top">
        <h2>Religion & Spirituality {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="religion">Religion <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the religion most relevant, or none if none applies."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="religion" name="religion" >
                        <option></option>
                        <?php
                        $result = mysqli_query($con, "select * from data_religion");
                        while ($record = mysqli_fetch_array($result)) {
                            echo "<option>" . $record['religion'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="devoutness">Devoutness <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the degree of devoutness toward the religion."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="devoutness" name="devoutness">
                        <option></option>
                        <option>Ultra-Orthodox</option>
                        <option>Orthodox</option>
                        <option>Conservative</option>
                        <option>Liberal</option>
                        <option>Reform</option>
                        <option>Cultural</option>
                        <option>Ceremonial</option>
                        <option>Social</option>
                        <option>For family</option>
                        <option>For some rare occassions</option>
                        <option>Not at all</option>


                    </select>
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="congregation">Congregation <label for="congregation_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="congregation_upload" name="congregation_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the religious institution for congregation."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="congregation" name="congregation" />
                </div>
            </div>
        </div>



    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-8">

        <div class="arrayFields"> 
            
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="religiousCeremony" ng-model="religiousCeremony"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="religiousCeremony" class="fixPlace">Experiences & ceremonies</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="religiousCeremony">
            <div class="row">
                <div class="col-sm-6">  
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="religiousCeremony">Experiences & ceremonies <label for="religiousCeremony_upload" class="custom-file-upload">
                                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                    </label><input type="file" id="religiousCeremony_upload" name="religiousCeremony_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any religious experiences, ceremony or ritual performed like Baptism, Bar Mitzvah, Hajj, Muran, etc."><i class="fa fa-info-circle"></i></a></label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <input type="text" class="form-control" id="religiousCeremony" name="religiousCeremony"/>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="ceremonyDate">Date </label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <div class="input-group date">

                                    <input type="text" class="form-control pull-left datepicker" id="ceremonyDate" name="ceremonyDate">
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
    <!-- End of Col 2 -->

    <!-- Col 3 -->

    <!-- End of Col 3 -->
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="ceremonyDate">Memoir <label for="memoir_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                        </label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="ceremonyDate" name="ceremonyDate"></textarea>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-md-12 text-center">
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>