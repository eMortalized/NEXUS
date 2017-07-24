<form id="bodyandmind" name="bodyandmind">

    <div class="col-sm-12 text-center top">
        <h2>Body & Mind {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="height">Height <label for="height_upload" class="custom-file-upload">
                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="height_upload" name="height_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter height, rounded up to the nearest whole number.  The height you enter should be the peak height."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <label class="inputlabel"><input icheck type="radio" id="measurementUnit" ng-model="measurementUnit" ng-change="switchMeasurementUnit()" value="imperial" name="measurementUnit"> Imperial</label>
                    <label class="inputlabel align-label-radio"><input icheck id="measurementUnit" ng-model="measurementUnit" ng-change="switchMeasurementUnit()" ng-checked="true"  type="radio" value="metric" name="measurementUnit"> Metric</label>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                        <div class="sideTxtBox">
                            <input type="number" min="1" max="1000" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="" placeholder="feet" class="form-control" ng-model="heightUnit_main" id="heightUnit_main" name="heightUnit_main" />
                        </div>
                        <div class="sideTxtBox">
                            <input type="number" min="1" max="1000" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="" placeholder="inches" class="form-control" ng-model="heightUnit_sub" id="heightUnit_sub" name="heightUnit_sub" />
                        </div>
                </div>
            </div>
        </div>
         
       
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="weight">Weight <label for="weight_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="weight_upload" name="weight_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="The weight you enter should be the average weight and not any diet weight or sick weight."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <div class="range-slider graterthanRange">
                        <input class="range-slider__range" type="range" value="145" min="89" max="401" id="weight" name="weight">
                        <span class="range-slider__value pull-right">145</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="weightUOM">Weight unit of measure <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select unit of measure for the weight measurement."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="weightUOM" name="weightUOM">
                        <option> </option>
                        <option value="kilograms">kilograms</option>
                        <option value="pounds">pounds</option>
                        <option value="stones">stones</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="build">Build <label for="build_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="build_upload" name="build_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the type of build maintained in healthy life."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="build" name="build">
                        <option> </option>
                        <option>Androgynous/Tomboy</option>
                        <option>Athletic (mesomorphic)</option>
                        <option>Average</option>
                        <option>Chubby (endomorphic)</option>
                        <option>Curvaceous</option>
                        <option>Doughy</option>
                        <option>Emaciated</option>
                        <option>Femmefatale</option>
                        <option>Gaunt</option>
                        <option>Lanky</option>
                        <option>Morbidly obese</option>
                        <option>Obese</option>
                        <option>Overweight</option>
                        <option>Ripped</option>
                        <option>Sinewy</option>
                        <option>Skinny</option>
                        <option>Skinnyfat</option>
                        <option>Stocky</option>
                        <option>Strongman</option>
                        <option>Thin (ectomorphic)</option>
                        <option>Toned</option>
                        
                        
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="eyeColour">Eye colour <label for="eyeColour_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="eyeColour_upload" name="eyeColour_upload"/></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="eyeColour" name="eyeColour">
                        <option> </option>
                        <option value="amber">Amber</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                        <option value="darkblue">Dark Blue</option>
                        <option value="darkbrown">Dark Brown</option>
                        <option value="darkgreen">Dark Green</option>
                        <option value="green">Green</option>
                        <option value="grey">Grey</option>
                        <option value="hazel">Hazel</option>
                        <option value="lightblue">Light Blue</option>
                        <option value="lightbrown">Light Brown</option>
                        <option value="lightgreen">Light Green</option>
                        <option value="purple">Purple</option>
                        <option value="red">Red</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="hairColour">Natural hair colour <label for="hairColour_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="hairColour_upload" name="hairColour_upload"/></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="hairColour" name="hairColour">
                        <option> </option>
                        <option>Auburn</option>
                        <option>Bald</option>
                        <option>Black</option>
                        <option>Black and white ("salt & pepper")</option>
                        <option>Blond, dark</option>
                        <option>Blond, golden</option>
                        <option>Blond, light</option>
                        <option>Blond, medium</option>
                        <option>Blond, platinum</option>
                        <option>Blond, strawberry</option>
                        <option>Brown, chestnut</option>
                        <option>Brown, dark</option>
                        <option>Brown, deepest</option>
                        <option>Brown, light</option>
                        <option>Brown, light chestnut</option>
                        <option>Brown, medium</option>
                        <option>Copper</option>
                        <option>Gold</option>
                        <option>Grey</option>
                        <option>Hairless</option>
                        <option>Other</option>
                        <option>Red</option>
                        <option>Silver</option>
                        <option>Titian</option>
                        <option>White</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="skinColour">Skin colour <label for="skinColour_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="skinColour_upload" name="skinColour_upload"/></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="skinColour" name="skinColour">
                        <option> </option>
                        <option value="albino">Albino</option>
                        <option value="palewhite">Pale White</option>
                        <option value="white">White</option>
                        <option value="olive">Olive</option>
                        <option value="wheatish">Wheatish</option>
                        <option value="lightbrown">Light Brown</option>
                        <option value="brown">Brown</option>
                        <option value="darkbrown">Dark Brown</option>
                        <option value="black">Black</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="birthmarks">Birthmarks <label for="birthmarks_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="birthmarks_upload" name="birthmarks_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter all details of birthmarks including appearance and location."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="birthmarks" name="birthmarks" rows="6"></textarea>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="tattoos">Tattoos <label for="tattoos_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="tattoos_upload" name="tattoos_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter all tattoos, including impression description, location on body and date of inking."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="tattoos" name="tattoos" maxlength="256"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-4">

        

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="bloodType">Blood type </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="bloodType" name="bloodType">
                        <option> </option>
                        <option value="o+">O+</option>
                        <option value="o-">O-</option>
                        <option value="a-">A+</option>
                        <option value="a-">A-</option>
                        <option value="b+">B+</option>
                        <option value="b-">B-</option>
                        <option value="ab+">AB+</option>
                        <option value="ab-">AB-</option>


                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="geneticDisorders">Genetic disorders

                        <a class="additemText pull-right" href="" data-inputTarget="geneticDisorders"><i class="fa fa-plus-circle"></i></a>
                    </label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input class="typehead form-control" id="geneticDisorders" name="geneticDisorders"  type="text" value="" maxlength="100"/>
                    <!--<select class="form-control chosen-select" multiple id="geneticDisorders" data-placeholder="Choose one" name="geneticDisorders">

                        <?php
                        $getDisorder = mysqli_query($con, "select * from data_geneticdisorders");
                        while ($record = mysqli_fetch_array($getDisorder)) {
                            echo "<option>" . $record['disorder_name'] . "</option>";
                        }
                        ?>
                    </select>-->
                </div>
            </div>
        </div>

        <!-- Array Start -->
        <div class="arrayFields"> 

            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="healthConditions" ng-model="healthConditions"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="healthConditions" class="fixPlace">Health conditions</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="healthConditions">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="conditions">Health conditions <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter other non-genetic health conditions.  This does not include injuries or medical procedures.  Be as thorough as desired for posterity."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="conditions" name="conditions"></textarea>
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
                    <label class="custom-display" for="description">Description of appearance & health <label for="description_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="description_upload" name="description_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter details about how the person looked or acted.  Did they have very erect posture?  A funny way of speaking?  Pirate smile?  Were they powerful or meek?  Take this opportunity to really describe these details, however minute, so future generations can really understand their outward appearance and way of doing things."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="physicalRemarkability">Remarkable physical traits & abilities <label for="physicalRemarkability_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="physicalRemarkability_upload" name="physicalRemarkability_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter details of any unique physical traits or abilities possessed.  This is where you'd note flexibility, double-jointedness, strength, balance, speed, ability to eat hot foods, or anything else physically remarkable."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <textarea class="form-control" id="physicalRemarkability" name="physicalRemarkability"></textarea>
                </div>
            </div>
        </div>


        <!-- Array Start -->
        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="healthMilestone" ng-model="healthMilestone"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="healthMilestone" class="fixPlace">Health milestone</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="healthMilestone">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="milestones">Health milestone <label for="milestones_upload" class="custom-file-upload">
                                    <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="milestones_upload" name="milestones_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter a health milestone that is significant.  Examples including getting braces, having wisdom teeth removed, undergoing surgery, being diagnosed with a disease, etc."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <input type="text" class="form-control" id="milestones" name="milestones" maxlength="256" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="milestoneDate">Date <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date of the milestone."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <div class="input-group date">
                                <input type="text" class="form-control pull-left datepicker" id="milestoneDate" name="milestoneDate">
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
            <!-- End of Array Body -->

        </div>
        <!-- Array End -->




    </div>
    <!-- End of Col 2 -->

    <!-- Col 3 -->
    <div class="col-md-4">

        

        <!-- Array Start -->
        <div class="arrayFields">

            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="iqScore" ng-model="iqScore"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="iqScore" class="fixPlace">IQ score (or similar test)</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="iqScore">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="IQScore">IQ score (or similar test) <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <div class="range-slider graterthanRange">
                                <input class="range-slider__range" type="range" value="100" min="49" max="201" id="IQScore" name="IQScore">
                                <span class="range-slider__value pull-right">100</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="dateTaken">Date taken <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date the test was written."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <div class="input-group date">

                                <input type="text" class="form-control pull-left datepicker" id="dateTaken" name="dateTaken">
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
                            <label class="custom-display" for="narrative">Narrative <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter details relating to the test, and specify the test taken (e.g. Stanford-Binet, MSCA, DAS, FTII, Weschler).  Indicate scores of subcomponents, describe the test details, etc."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="narrative" name="narrative"></textarea>
                            <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="form-group resultform sortable">
                </div>

            </div>
        </div>
        <!-- End of Array -->


        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="MMPIresults">MMPI results <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="The question refers to results of the Minnesota Multiphasic Personality Inventory (MMPI).  Only answer this question if the results are available and there is desire to share them."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="MMPIresults" name="MMPIresults" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="MMPI2results">MMPI-2 results <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="The question refers to results of the Minnesota Multiphasic Personality Inventory (MMPI).  Only answer this question if the results are available and there is desire to share them."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="MMPI2results" name="MMPI2results" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="MMPIAresults">MMPI-A results <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="The question refers to results of the Minnesota Multiphasic Personality Inventory (MMPI).  Only answer this question if the results are available and there is desire to share them."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="MMPIAresults" name="MMPIAresults" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="MBOutcome">Myers-Briggs type <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select your Myers-Briggs Type Indicator."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <select class="form-control chosen-select" id="MBOutcome" ng-model="MBOutcome" ng-change="calculateMB()" name="MBOutcome">
                        <option> </option>
                        <option>ENFJ</option>
                        <option>ENFP</option>
                        <option>ENTJ</option>
                        <option>ENTP</option>
                        <option>ESFJ</option>
                        <option>ESFP</option>
                        <option>ESTJ</option>
                        <option>ESTP</option>
                        <option>INFJ</option>
                        <option>INFP</option>
                        <option>INTJ</option>
                        <option>INTP</option>
                        <option>ISFJ</option>
                        <option>ISFP</option>
                        <option>ISTJ</option>
                        <option>ISTP</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">

                    <label class="custom-display" for="NEOOutcome">NEO results <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="This question refers to the results of the Neuroticism-Extraversion-Openness (NEO) Personality Inventory and covers all varieties of the test like NEO PI-R, NEO-FFI.  Only answer this question if the results are available and there is desire to share them."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="NEOOutcome" name="NEOOutcome" maxlength="256"/>
                </div>
            </div>
        </div>

        <div class="arrayFields">

            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="otherTests" ng-model="otherTests"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="otherTests" class="fixPlace">Other test(s)</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="otherTests">

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-display" for="otherTests">Other test(s) <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter details relating to the test, and specify the test taken (e.g. Stanford-Binet, MSCA, DAS, FTII, Weschler).  Indicate scores of subcomponents, describe the test details, etc."><i class="fa fa-info-circle"></i></a></label>
                        </div>
                        <div class="col-sm-12 noPadding">
                            <textarea class="form-control" id="otherTests" name="otherTests"></textarea>
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
                    <label class="custom-display" for="memoir">Memoir: <label for="memoir_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
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







    });


    var geneticDisorders = ["18p deletion syndrome","1p36 deletion syndrome","21-hydroxylase deficiency","47,XXX","Metatropic dysplasia type II"];
        var geneticDisorders = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // `states` is an array of state names defined in "The Basics"
        local: geneticDisorders
      });
	$('#geneticDisorders').tagsinput({
	  typeaheadjs: {
                source: geneticDisorders
              },
            freeInput: true
           
	});
        
        // Code to fetch values from tag
        //var a =$('#orphanage').tagsinput('items');




</script>