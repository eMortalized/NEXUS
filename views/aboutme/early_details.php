<!-- Start of Forms -->

<form id="earlydetails" name="early_details">

    <div class="col-sm-12 text-center top">
        <h2>Early Details {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-4">

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <div class="labelBox">
                    <label class="custom-display" for="birthWeight">Birth weight & unit<label for="birthWeight_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="birthWeight_upload" name="birthWeight_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select unit of measure for the weight measurement."><i class="fa fa-info-circle"></i></a></label>
                </div>
                
                <div class="inputBox1" style="">
                    
                <input type="number" min="1" max="1000" value="" class="form-control" ng-model="birthWeight" id="birthWeight" name="birthWeight" />
                </div>
                <div class="inputBox2" style="">
                    
                <select class="chosen-select" id="weightUOM" name="weightUOM">
                    <option> </option>
                    <option>kilograms</option>
                    <option>grams</option>
                    <option>pounds</option>
                    <option>ounces</option>
                </select>
                </div>
            </div>    
            </div>
        </div>
        
        

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <div class="labelBox">
                    <label class="custom-display" for="birthLength">Birth Length & Unit
                        <label for="birthLength_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="birthLength_upload" name="birthLength_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select unit of measure for the length measurement."><i class="fa fa-info-circle"></i></a>
                    </label>
                </div>
                <div class="inputBox1" style="">
                    
                    <input type="number" min="1" max="100" value="" class="form-control" id="birthLength" name="birthLength"/>
                </div>
                <div class="inputBox2" style="">
                    <select class="form-control chosen-select" id="lengthUOM" name="lengthUOM">
                    <option> </option>
                    <option>centimeters</option>
                    <option>inches</option>
                </select>
                </div>
            </div>
            </div>
        </div>
        
        

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="gender">Birth Gender <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select a gender at the time of birth."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <!--<label class="inputlabel"><input class="minimal align-radio" checked type="radio" name="gender"> Male</label>
                <label class="inputlabel align-label-radio"><input class="minimal align-radio" type="radio" name="gender"> Female</label>-->
                
                <select class="form-control chosen-select" id="gender" name="gender">
                    <option> </option>
                    <option>Female</option>
                    <option>Male</option>
                    <option>Agender</option>
                    <option>Androgyne</option>
                    <option>Androgynous</option>
                    <option>Bigender</option>
                    <option>Cis</option>
                    <option>Cisgender</option>
                    <option>Cis Female</option>
                    <option>Cis Male</option>
                    <option>Cis Man</option>
                    <option>Cis Woman</option>
                    <option>Cisgender Female</option>
                    <option>Cisgender Male</option>
                    <option>Cisgender Man</option>
                    <option>Cisgender Woman</option>
                    <option>Female to Male</option>
                    <option>Gender Fluid</option>
                    <option>Gender Nonconforming</option>
                    <option>Gender Questioning</option>
                    <option>Gender Variant</option>
                    <option>Genderqueer</option>
                    <option>Intersex</option>
                    <option>Male to Female</option>
                    <option>Neither</option>
                    <option>Neutrois</option>
                    <option>Non-binary</option>
                    <option>Other</option>
                    <option>Pangender</option>
                    <option>Trans</option>
                    <option>Trans*</option>
                    <option>Trans Female</option>
                    <option>Trans* Female</option>
                    <option>Trans Male</option>
                    <option>Trans* Male</option>
                    <option>Trans Man</option>
                    <option>Trans* Man</option>
                    <option>Trans Person</option>
                    <option>Trans* Person</option>
                    <option>Trans Woman</option>
                    <option>Trans* Woman</option>
                    <option>Transfeminine</option>
                    <option>Transgender</option>
                    <option>Transgender Female</option>
                    <option>Transgender Male</option>
                    <option>Transgender Man</option>
                    <option>Transgender Person</option>
                    <option>Transgender Woman</option>
                    <option>Transmasculine</option>
                    <option>Transsexual</option>
                    <option>Transsexual Female</option>
                    <option>Transsexual Male</option>
                    <option>Transsexual Man</option>
                    <option>Transsexual Person</option>
                    <option>Transsexual Woman</option>
                    <option>Two-Spirit</option>
                </select>  
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="hospital">Hospital name <label for="hospital_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="hospital_upload" name="hospital_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter hospital or place of birth."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="hospital" name="hospital" maxlength="50"/>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="timeOfArrival">Time of arrival </label>

            </div>
            <div class="col-sm-12 noPadding bootstrap-timepicker">
                <div class="input-group">
                    <input type="text" class="form-control tympicker" id="timeOfArrival" name="timeOfArrival">

                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>




        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">

                <label class="custom-display" for="birthingNarrative">Labour narrative <label for="birthingNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="birthingNarrative_upload" name="birthingNarrative_upload"/><a class="tooltip-help_custom pull-right" href=""  data-placement="top" data-title="Describe labour and the experience leading up to it."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="birthingNarrative" name="birthingNarrative"></textarea>
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
                <label class="custom-display" for="namesake">Namesake <label for="namesake_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="namesake_upload" name="namesake_upload"/><a class="tooltip-help_custom pull-right" href=""  data-placement="top" data-title="Enter the person after whom the name was chosen, starting with last name.  If eMortalized, ensure that the connection is found and linked."><i class="fa fa-info-circle"></i></a></label>

            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Start typing last name" id="namesake" name="namesake" maxlength="256">

                    <div class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="otherNamesConsidered">Other names considered 
                    <a class="additemText pull-right" href="" data-inputTarget="otherNamesConsidered"><i class="fa fa-plus-circle"></i></a>
                    
                    <a class="tooltip-help_custom pull-right" href=""  data-placement="top" data-title="Enter other names that were being considered."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="typehead form-control" id="otherNamesConsidered" name="otherNamesConsidered" type="text" value="" />
            </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-display" for="favouriteToy">Favourite toy <label for="favouriteToy_upload" class="custom-file-upload">
                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="favouriteToy_upload" name="favouriteToy_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the favourite toy.  Upload a picture if possible."><i class="fa fa-info-circle"></i></a></label>
                </div>
                <div class="col-sm-12 noPadding">
                    <input type="text" class="form-control" id="favouriteToy" name="favouriteToy" maxlength="50"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="infantNarrative">Infant narrative <label for="infantNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="infantNarrative_upload" name="infantNarrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the infant months, which are ages 0-1.  Include such things as fussiness, sleep, temperament, interests, likes, dislikes, etc."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="infantNarrative" name="infantNarrative"></textarea>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="toddlerNarrative">Toddler narrative <label for="toddlerNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="toddlerNarrative_upload" name="toddlerNarrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the toddler years, which are ages 1-3.  Include details on personality, likes, dislikes, relationships, passions, abilities, etc.  Also include noteworthy experiences that are defining to the character."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" rows="6" id="toddlerNarrative" name="toddlerNarrative"></textarea>
            </div>
            </div>
        </div>
        
    </div>
    <!-- End of Col 2 -->

    <!-- Col 3 -->
    <div class="col-md-4">
        

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="childhoodNarrative">Childhood narrative <label for="childhoodNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="childhoodNarrative_upload" name="childhoodNarrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the childhood years, which are ages 4-12.  Include details on personality, likes, dislikes, relationships, passions, abilities, etc.  Also include noteworthy experiences that are defining to the character."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea rows="6" class="form-control" id="childhoodNarrative" name="childhoodNarrative"></textarea>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="teenageNarrative">Teenage narrative <label for="teenageNarrative_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label>
                        <input type="file" id="teenageNarrative_upload" name="teenageNarrative_upload"/>
                        <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Describe the teenaged years, which are ages 13-18.  Include details on personality, likes, dislikes, relationships, passions, abilities, etc.  Also include noteworthy experiences that are defining to the character, milestones, and other details not entered elsewhere."><i class="fa fa-info-circle"></i>
                        </a>
                </label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="teenageNarrative" name="teenageNarrative"></textarea>
            </div>
            </div>
        </div>
        <div class="arrayFields">  
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="ceremonies" ng-model="ceremonies"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="ceremonies" class="fixPlace">Experiences & ceremonies </span>
                </div>
            </div>
            <div ng-show="ceremonies" class="arrayBody">
                <div class="form-group">
                    <div class="row">
                    <div class="col-sm-12">
                        <label class="custom-display" for="ceremony">Experiences & ceremonies <label for="ceremony_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="ceremony_upload" name="ceremony_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any non-religious experiences, ceremony or ritual performed like Quinceanera, sweet sixteen, etc."><i class="fa fa-info-circle"></i></a></label>
                    </div>
                    <div class="col-sm-12 noPadding">
                        <input type="text" class="form-control" id="ceremony" name="ceremony" required>
                    </div>
                    </div>
                </div>

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
            
            
                <div class="form-group resultform sortable">


                </div>
            </div>
        </div>


    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="memoir">Memoir <label for="memoir_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i></label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="memoir" name="memoir" rows="5"></textarea>
            </div>
            </div>
        </div>
    </div>    
    <!-- End of Col 3 -->
    <div class="col-md-12 text-center">
        
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>

<!-- End of Forms -->
<script>
    var otherNamesConsidered = [];
        var otherNamesConsidered = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // `states` is an array of state names defined in "The Basics"
        local: otherNamesConsidered
      });
	$('#otherNamesConsidered').tagsinput({
	  typeaheadjs: {
                source: otherNamesConsidered
              },
            freeInput: true,
            addOnBlur: true,
            confirmKeys: [13, 44,32]
	});
</script>