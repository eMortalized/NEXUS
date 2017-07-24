<form id="hobbies" name="hobbies">

    <div class="col-sm-12 text-center top">
        <h2>Hobbies {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-md-12">
        <!-- Array Start -->
        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="hobby" ng-model="hobby"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="hobby" class="fixPlace">Hobby or interest</span>
                </div>
            </div>
            <!-- Array Head -->

            <!-- Array Body -->
            <div class="arrayBody" ng-show="hobby">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="hobby">Hobby or interest <label for="hobby_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="hobby_upload" name="hobby_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select or enter a hobby or interest.  Examples include, 'playing the guitar', 'gardening', or 'collecting stamps'."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <select class="form-control chosen-select" data-placeholder="Choose an option" id="hobby" name="hobby" >
                                        <option value=""> </option>
                                        <option>3D printing</option>
                                        <option>Acting</option>
                                        <option>Action figure</option>
                                        <option>Air sports</option>
                                        <option>Aircraft spotting</option>
                                        <option>Airsoft</option>
                                        <option>Amateur astronomy</option>
                                        <option>Amateur geology</option>
                                        <option>Amateur radio</option>
                                        <option>American football</option>
                                        <option>Animal fancy</option>
                                        <option>Antiquing</option>
                                        <option>Antiquities</option>
                                        <option>Aqua-lung</option>
                                        <option>Archery</option>
                                        <option>Art collecting</option>
                                        <option>Association football</option>
                                        <option>Astrology</option>
                                        <option>Astronomy</option>
                                        <option>Australian rules football</option>
                                        <option>Auto audiophilia</option>
                                        <option>Auto racing</option>
                                        <option>Backpacking</option>
                                        <option>Badminton</option>
                                        <option>Base jumping</option>
                                        <option>Baseball</option>
                                        <option>Basketball</option>
                                        <option>Baton twirling</option>
                                        <option>Beach volleyball</option>
                                        <option>Beekeeping</option>
                                        <option>Billiards</option>
                                        <option>Bird watching</option>
                                        <option>Blacksmithing</option>
                                        <option>Board games</option>
                                        <option>Board sports</option>
                                        <option>Bodybuilding</option>
                                        <option>Book collecting</option>
                                        <option>Book restoration</option>
                                        <option>Bowling</option>
                                        <option>Boxing</option>
                                        <option>Brazilian jiu-jitsu</option>
                                        <option>Breakdancing</option>
                                        <option>Bridge</option>
                                        <option>Bus spotting</option>
                                        <option>Cabaret</option>
                                        <option>Calligraphy</option>
                                        <option>Camping</option>
                                        <option>Candle making</option>
                                        <option>Card collecting</option>
                                        <option>Cheerleading</option>
                                        <option>Chess</option>
                                        <option>Climbing</option>
                                        <option>Coffee roasting</option>
                                        <option>Coin collecting</option>
                                        <option>Color guard</option>
                                        <option>Coloring</option>
                                        <option>Comic book collecting</option>
                                        <option>Community</option>
                                        <option>Computer programming</option>
                                        <option>Cooking</option>
                                        <option>Cosplaying</option>
                                        <option>Couponing</option>
                                        <option>Creative writing</option>
                                        <option>Cricket</option>
                                        <option>Crocheting</option>
                                        <option>Crossword puzzles</option>
                                        <option>Cryptography</option>
                                        <option>Curling</option>
                                        <option>Cycling</option>
                                        <option>Dance</option>
                                        <option>Dancing</option>
                                        <option>Darts</option>
                                        <option>Debate</option>
                                        <option>Deltiology (postcard collecting)</option>
                                        <option>Die-cast toy</option>
                                        <option>Digital arts</option>
                                        <option>Disc golf</option>
                                        <option>Do it yourself</option>
                                        <option>Dog sport</option>
                                        <option>Dowsing</option>
                                        <option>Drama</option>
                                        <option>Drawing</option>
                                        <option>Driving</option>
                                        <option>Electronics</option>
                                        <option>Element collecting</option>
                                        <option>Embroidery</option>
                                        <option>Equestrianism</option>
                                        <option>Exhibition drill</option>
                                        <option>Fantasy sports</option>
                                        <option>Fashion</option>
                                        <option>Fencing</option>
                                        <option>Field hockey</option>
                                        <option>Figure skating</option>
                                        <option>Fishing</option>
                                        <option>Fishkeeping</option>
                                        <option>Flag football</option>
                                        <option>Flower arranging</option>
                                        <option>Flower collecting and pressing</option>
                                        <option>Flying</option>
                                        <option>Flying disc</option>
                                        <option>Footbag</option>
                                        <option>Foraging</option>
                                        <option>Foreign language learning</option>
                                        <option>Fossil hunting</option>
                                        <option>Gambling</option>
                                        <option>Gaming (tabletop games and role-playing games)</option>
                                        <option>Gardening</option>
                                        <option>Genealogy</option>
                                        <option>Geocaching</option>
                                        <option>Ghost hunting</option>
                                        <option>Glassblowing</option>
                                        <option>Go</option>
                                        <option>Golfing</option>
                                        <option>Gongoozling</option>
                                        <option>Graffiti</option>
                                        <option>Gunsmithing</option>
                                        <option>Gymnastics</option>
                                        <option>Handball</option>
                                        <option>Herping</option>
                                        <option>Hiking</option>
                                        <option>Hiking/backpacking</option>
                                        <option>Homebrewing</option>
                                        <option>Hooping</option>
                                        <option>Horseback riding</option>
                                        <option>Hunting</option>
                                        <option>Ice hockey</option>
                                        <option>Ice skating</option>
                                        <option>Inline skating</option>
                                        <option>Insect collecting</option>
                                        <option>Jewelry making</option>
                                        <option>Jigsaw puzzles</option>
                                        <option>Jogging</option>
                                        <option>Judo</option>
                                        <option>Juggling</option>
                                        <option>Jukskei</option>
                                        <option>Kabaddi</option>
                                        <option>Kart racing</option>
                                        <option>Kayaking</option>
                                        <option>Kite flying</option>
                                        <option>Kitesurfing</option>
                                        <option>Knapping</option>
                                        <option>Knife making</option>
                                        <option>Knife throwing</option>
                                        <option>Knitting</option>
                                        <option>Kombucha brewing</option>
                                        <option>Lacemaking</option>
                                        <option>Lacrosse</option>
                                        <option>Lapidary</option>
                                        <option>Larping</option>
                                        <option>Laser tag</option>
                                        <option>Learning</option>
                                        <option>Lego building</option>
                                        <option>Letterboxing</option>
                                        <option>Listening to music</option>
                                        <option>Lockpicking</option>
                                        <option>Lucid dreaming</option>
                                        <option>Machining</option>
                                        <option>Macrame</option>
                                        <option>Magic</option>
                                        <option>Mahjong</option>
                                        <option>Marbles</option>
                                        <option>Martial arts</option>
                                        <option>Metal detecting</option>
                                        <option>Metalworking</option>
                                        <option>Meteorology</option>
                                        <option>Microscopy</option>
                                        <option>Mineral collecting</option>
                                        <option>Model aircraft</option>
                                        <option>Model building</option>
                                        <option>Motor sports</option>
                                        <option>Mountain biking</option>
                                        <option>Mountaineering</option>
                                        <option>Movie and movie memorabilia collecting</option>
                                        <option>Mushroom hunting/mycology</option>
                                        <option>Netball</option>
                                        <option>Nordic skating</option>
                                        <option>Orienteering</option>
                                        <option>Origami</option>
                                        <option>Paintball</option>
                                        <option>Painting</option>
                                        <option>Parkour</option>
                                        <option>People watching</option>
                                        <option>Pet</option>
                                        <option>Photography</option>
                                        <option>Pigeon racing</option>
                                        <option>Playing musical instruments</option>
                                        <option>Poi</option>
                                        <option>Poker</option>
                                        <option>Polo</option>
                                        <option>Pottery</option>
                                        <option>Puzzles</option>
                                        <option>Quilting</option>
                                        <option>Racquetball</option>
                                        <option>Radio-controlled car racing</option>
                                        <option>Rafting</option>
                                        <option>Rappelling</option>
                                        <option>Reading</option>
                                        <option>Record collecting</option>
                                        <option>Road biking</option>
                                        <option>Rock balancing</option>
                                        <option>Rock climbing</option>
                                        <option>Roller derby</option>
                                        <option>Roller skating</option>
                                        <option>Rugby</option>
                                        <option>Rugby league football</option>
                                        <option>Running</option>
                                        <option>Sailing</option>
                                        <option>Sand art</option>
                                        <option>Scouting</option>
                                        <option>Scrapbooking</option>
                                        <option>Scuba diving</option>
                                        <option>Sculling or rowing</option>
                                        <option>Sculpting</option>
                                        <option>Sea glass collecting</option>
                                        <option>Seashell collecting</option>
                                        <option>Sewing</option>
                                        <option>Shooting</option>
                                        <option>Shooting sport</option>
                                        <option>Shopping</option>
                                        <option>Shortwave listening</option>
                                        <option>Singing</option>
                                        <option>Skateboarding</option>
                                        <option>Sketching</option>
                                        <option>Skiing</option>
                                        <option>Skimboarding</option>
                                        <option>Skydiving</option>
                                        <option>Slacklining</option>
                                        <option>Slot car racing</option>
                                        <option>Snowboarding</option>
                                        <option>Soapmaking</option>
                                        <option>Speed skating</option>
                                        <option>Squash</option>
                                        <option>Stamp collecting</option>
                                        <option>Stand-up comedy</option>
                                        <option>Stone collecting</option>
                                        <option>Stone skipping</option>
                                        <option>Surfing</option>
                                        <option>Swimming</option>
                                        <option>Table football</option>
                                        <option>Table tennis</option>
                                        <option>Taekwondo</option>
                                        <option>Tai chi</option>
                                        <option>Taxidermy</option>
                                        <option>Tennis</option>
                                        <option>Topiary</option>
                                        <option>Tour skating</option>
                                        <option>Trainspotting</option>
                                        <option>Traveling</option>
                                        <option>Triathlon</option>
                                        <option>Ultimate disc</option>
                                        <option>Urban exploration</option>
                                        <option>Vacation</option>
                                        <option>Vehicle restoration</option>
                                        <option>Video game collecting</option>
                                        <option>Video games</option>
                                        <option>Video gaming</option>
                                        <option>Videophilia</option>
                                        <option>Vintage cars</option>
                                        <option>Volleyball</option>
                                        <option>Walking</option>
                                        <option>Watching movies</option>
                                        <option>Water sports</option>
                                        <option>Web surfing</option>
                                        <option>Weightlifting</option>
                                        <option>Whale watching</option>
                                        <option>Whittling</option>
                                        <option>Wood carving</option>
                                        <option>Woodworking</option>
                                        <option>Worldbuilding</option>
                                        <option>Writing</option>
                                        <option>Yoga</option>
                                        <option>Yo-yoing</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="collection">Collection <label for="collection_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="collection_upload" name="collection_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter details on any collection related to this hobby."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="form-control" id="collection" name="collection" maxlength="256"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="custom-display" for="dateFrom">Date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you started this hobby.  Approximate is fine."><i class="fa fa-info-circle"></i></a></label>
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
                                    <label class="custom-display" for="dateTo">Date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you ended this hobby.  Approximate is fine."><i class="fa fa-info-circle"></i></a></label>
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
                                        </label><input type="file" id="narrative_upload" name="narrative_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the story of the hobbying experience.  This includes introduction, training, fellow hobbyists, competition, injury, recovery, mindset, etc.  Stories of trial and tribulation are interesting."><i class="fa fa-info-circle"></i></a></label>
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
                                    <label class="custom-display" for="accomplishments">Accomplishments <label for="accomplishments_upload" class="custom-file-upload">
                                            <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                                        </label><input type="file" id="accomplishments_upload" name="accomplishments_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the accomplishments achieved through this hobby, which often include learnings that can be applied to other areas.  Describe advancement of ability, experiences, outputs, challenges, etc."><i class="fa fa-info-circle"></i></a></label>
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
                                        <a class="additemText pull-right" href="" data-inputTarget="awards"><i class="fa fa-plus-circle"></i></a>
                                        <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter awards that were earned."><i class="fa fa-info-circle"></i></a></label>
                                </div>
                                <div class="col-sm-12 noPadding">
                                    <input type="text" class="typehead form-control" id="awards" name="awards"/>
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

    <!-- Col 2 -->
    <div class="col-sm-12">
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

        var awards = ["award1", "award2", "award3", "award4"];
        var awards = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: awards
        });
        $('#awards').tagsinput({
            typeaheadjs: {
                source: awards
            },
            freeInput: true
        });

        // Code to fetch values from tag
        //var a =$('#orphanage').tagsinput('items');

    });
</script>