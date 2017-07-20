<form id="style" name="style">

    <div class="col-sm-12 text-center top">
        <h2>Style {{test}}</h2>
    </div>
    <!-- Col 1 -->

    <div class="col-md-12">

        <!-- array field start -->
        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="style" ng-model="style"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="style" class="fixPlace">Style</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="style">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <!--<label class="custom-display" for="styleName">Style name <a class="additemText pull-right" href="" data-inputTarget="styleName"><i class="fa fa-plus-circle"></i></a>
                                </label>-->
                                <label class="custom-display" for="styleName">Style name</label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <input type="text" class="form-control" id="styleName" name="styleName" />
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="styleCelebs">Celebrities sharing style </label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <select class="form-control chosen-select" multiple id="styleCelebs" name="styleCelebs">
                                    <option value="" disabled>select</option>
                                    <option value="style1">Style1</option>
                                    <option value="style2">Style2</option>
                                    <option value="style3">Style3</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="styleChars">Style characteristics </label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <textarea class="form-control" id="styleChars" name="styleChars"></textarea>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-display" for="yearStart">Year style adopted</label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <div class="input-group date">

                                    <input type="text" class="form-control pull-left yearpicker" id="yearStart" name="yearStart">
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
                                <label class="custom-display" for="yearEnd">Year style abandoned </label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <div class="input-group date">

                                    <input type="text" class="form-control pull-left yearpicker" id="yearEnd" name="yearEnd">
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
                                <label class="custom-display" for="narrative">Provide a narrative on the style </label>
                            </div>
                            <div class="col-sm-12 noPadding">
                                <textarea class="form-control" id="narrative" name="narrative"></textarea>
                                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- col of result div -->
                <div class="col-sm-12">

                    <div class="form-group resultform sortable">


                    </div>
                </div>

                <!-- col of result div end -->



            </div>
            </div>
        </div>

        <!--  array field end  -->
    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-4">








    </div>
    <!-- End of Col 2 -->

    <!-- Col 3 -->
    <div class="col-md-4">



    </div>
    <!-- End of Col 3 -->
    <div class="col-md-12 text-center">
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>


<script type="text/javascript">

    jQuery(function ()
    {

       /* var styleName = ["Athletic","B-Boy","Beatnik","Bhangra","Caribbean","Casuals","Cowboy","Cyberpunk","Disco","Electric","Eco","Ethinic","Fetish","Flapper","Funk","Glam rock","Glamour Gal","Goth","Greaser","Grunge","Head-Bangers","Hepcat","Hippy","Hipster","Indie","Icy League","Jungle","Madchester","Metal Head","Military","Minimalist","Mod","Native","New Age","Northern","Soul","Old Skool","Paramilitary","Preppy","Professor","Psychedelic","Psychobilly","Punk","Ragga","Rasta","Rave","Rocker","Rude Boy","Skater","Skinhead","Soulies","Streestyle","Surfer","Techno","Teddy Boys (Teds)","Travellers","Tropical","Two Tones","Victorian","Workwear Rockabilly","Yardies","Young British Radicals","Yuppie","Zoots"];
        var styleName = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // `states` is an array of state names defined in "The Basics"
        local: styleName
      });
	$('#styleName').tagsinput({
	  typeaheadjs: {
                source: styleName
              },
            freeInput: true
	});
        */
        // Code to fetch values from tag
        //var a =$('#orphanage').tagsinput('items');
        
    });
</script>