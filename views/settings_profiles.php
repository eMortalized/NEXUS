<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->


<div class="midsec scroll" >
    <!-- Setting -->
    <!--Sidebar section---->
    <div class="maincontainer">
        <!--Account section---->
        <div class="col-sm-3 col-sm-offset-1">
            <div class="settings-profile">
                <div class="profileHead">

                </div>
                <div class="profileContent">
                    <img src="img/avatar3.jpg"/>
                    <h3 class="boldtext">Tanvir C. </h3>
                    <span>Software Engineer</span> <br/>
                </div>
            </div>

            <div class="settings-sidebar">
                <h3 class="boldtext">Settings</h3> <br/>

                <a href="#/settings/user" >User</a>
                <a href="#/settings/notifications" >Notifications</a>
                <a href="#/settings/profiles"class="active" >Profiles</a>
            </div>
            <br/>
        </div>
        <!--Sidebar section End---->

        <div class="col-sm-6 Account">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="settings_heading boldtext">Setting Profile</h2>
                </div>
            </div>


            <!-- pass--><!-----profiles--->

            <div class="settingsSubsec">
                <div class="col-sm-12">
                    <h3 class="boldtext ">All Profiles</h3>
                </div>
            </div>
            <br/>
            <div class="row pad">
                <div class="col-sm-12">
                    <table class="ursTable">
                        <tr>
                            <td rowspan="2"><img class="mainimg"  src="img/avatar1.jpg"></td>
                            <td ><h4 class="movetext">John Doe</h4></td>
                        </tr>
                        <tr>
                            <td >
                                <span class="profilename "><span class="movetext">Active Now</span></span>
                                <div class="gcrcl"></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mainprofile">

                <div class="row">
                    <div class="col-sm-8" >
                        <table class="ursTable">
                        <tr>
                            <td rowspan="2"><img class="mainimg"  src="img/avatar2.jpg"></td>
                            <td ><h4 class="movetext">Katie Montana</h4></td>
                        </tr>
                        <tr>
                            <td >
                                <span class="profilename "><span class="movetext">Inactive</span></span>
                            </td>
                        </tr>
                    </table>
                    </div>
                    <div class="col-sm-3  pull-right" > 
                        <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#userviews3">Initiate transfer</button>
                    </div>
                </div>

                <br>
                <div class="collapse" id="userviews3">  
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">First Name</h3>

                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="tanvir009"  disabled>
                        </div>
                        <div class="col-sm-4 pull-right">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <!-- pass-->

                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Last Name</h3>

                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="tnvr009@gmail.com" disabled>
                        </div>
                        <div class="col-sm-4 pull-right">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">DOB</h3>

                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" value="" >
                        </div>
                        <div class="col-sm-4 pull-right">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Email</h3>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" value="tnvr009@gmail.com" disabled>
                        </div>
                        <div class="col-sm-4 pull-right">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading"> Email2</h3>

                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" value="tanvirchahal009@gmail.com" disabled>
                        </div>
                        <div class="col-sm-4 pull-right">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>

                    <!-- End pass Section -->
                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Address</h3>

                        </div>
                        <div class="col-sm-5">

                            <p>
                                <input type="text" class="form-control"  disabled>
                            </p>
                        </div>
                        <div class="col-sm-4 pull-right">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>


                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Relationship</h3>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control">
                                <option>Married</option>
                                <option>Single</option>

                            </select>
                        </div></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <button class="pull-right btn">Save Settings</button> <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
            <br/>

            <!--Active Staus--><div class="settingsSubsec"></div>
            <div class="row pad border-0">
                <div class="col-sm-3"> <h3 class="settings_subheading">Profile Status</h3> </div> 
                <div class="col-sm-5"> <select class="form-control"> <option>active (shown)</option> <option>active (hidden) </option> <option>inactive</option> </select> </div> </div><br/></br/>
            <!-- Active Staus Section End -->

            <div class="settingsSubsec">
                <div class="col-sm-12">
                    <h3 class="boldtext">Groups</h3><br>
                </div></div>
            <div class="row">
                <div class="col-sm-12"> 

                    <div class="col-sm-4">
                        <div class="allGroup">
                            <span class="boldtext">Family Group</span><br>
                            <img  height="20px" src="img/avatar1.jpg">
                            <img  height="20px" src="img/avatar2.jpg">
                            <img  height="20px" src="img/avatar3.jpg"><br><br><br>
                            <button type="button" class="btn-secondary btng">leave Group</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="allGroup">
                            <span class="boldtext">Friend Group</span><br>
                            <img height="20px" src="img/avatar4.jpg">
                            <img  height="20px" src="img/avatar5.jpg">
                            <img  height="20px" src="img/avatar6.jpg">
                            <img  height="20px" src="img/avatar2.jpg"><br><br><br>
                            <button type="button" class="btn-secondary btng">leave Group</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="allGroup">
                            <span class="boldtext">Other Group</span><br>
                            <img  height="20px" src="img/person1.jpg">
                            <img  height="20px" src="img/person4.jpg"><br><br><br>
                            <button type="button" class="btn-secondary btng">leave Group</button>
                        </div>
                    </div>

                </div>


            </div>
            <br><br>

            <div class="col-sm-12 text-center">
                <h4 >Create Group</h4><br>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center"> 

                    <div class="add_new"  data-toggle="modal" data-target="#groupModal"><center><button class="btn custom-btn custom-black"><i class="fa fa-plus-circle"></i><span> Create Group</span></button></center></div>
                </div>
            </div>

            <br><br>
            <!-- Legacy Contacts Section -->

            <div class="settingsSubsec">
                <div class="col-sm-12">
                    <h3 class="boldtext">Legacy Contact</h3><br>
                </div></div>
            <div class="row">
                <div class="col-sm-12"> 


                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">First</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="text" class="form-control" >
                        </div>

                    </div>
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Middle</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Last</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Email</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Cellular</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">City of Birth</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="row pad">

                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Country of Birth</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <select class="form-control">
                                <option>United State</option>
                                <option>India</option>

                            </select>
                        </div>

                    </div>
                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">DOB</h3>

                        </div>
                        <div class="col-md-5 col-sm-9">
                            <input type="date" class="form-control" value="" >
                        </div>

                    </div>
                    <div class="row pad">
                        <div class="col-sm-3">
                            <h3 class="settings_subheading">Relationship</h3>
                        </div>
                        <div class="col-md-5 col-sm-9">
                            <select class="form-control">
                                <option>Married</option>
                                <option>Single</option>

                            </select>
                        </div></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="pull-right btn">Save Settings</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Legacy Contacts Section End -->
            <br><br><br>
            <div class="settingsSubsec">
                <div class="col-sm-12">
                    <h3 class="boldtext ">Connections</h3>
                </div>
            </div>
            <div class="col-sm-12 blkusr"> 
                <button type="button" class="btn btn-secondary " data-toggle="collapse" data-target="#userviews">View Connections</button>
            </div>

            <div class="collapse" id="userviews">  
                <div class="row pad border-0">
                    
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2"><img height="40px" src="img/avatar1.jpg"></div>
                            <div class="col-sm-8 name-txt">John Doe<br> 
                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="name-txt">&nbspPublic</span>

                                </label>

                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="checkmark">&nbspFriends</span>

                                </label>

                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="checkmark">&nbspFamily</span>

                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2"><img height="40px" src="img/avatar2.jpg"></div>
                            <div class="col-sm-8 name-txt">Trisha Williams<br> 
                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="name-txt">&nbspPublic</span>

                                </label>

                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="checkmark">&nbspFriends</span>

                                </label>

                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="checkmark">&nbspFamily</span>

                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2"><img height="40px" src="img/avatar4.jpg"></div>
                            <div class="col-sm-8 name-txt">Kane Richards<br> 
                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="name-txt">&nbspPublic</span>

                                </label>

                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="checkmark">&nbspFriends</span>

                                </label>

                                <label class="">
                                    <span class="checkmark">
                                        <input type="radio" icheck class=" minimal"><span class="checkmark">&nbspFamily</span>

                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>

               
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn pull-right">Save Settings</button>
                        <br/> <br/><br/> <br/>
                    </div>
                </div></div>
            <p class="clearfix"></p>
            <!---end profiles---->
            

            <div class="settingsSubsec">
                <div class="col-sm-12">
                    <h3 class="boldtext ">Blocked User</h3>
                </div></div>
            <div class="col-sm-12 blkusr"> <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#userview">View Blocked User</button></div>

            <div class="collapse" id="userview">  
                <div class="row pad border-0">
                    <div class="col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-md-3"><img height="40px" src="img/avatar1.jpg"></div>
                             <div class="col-md-9 name-txt">John Doe <button type="button" class="btn btn-secondary block-btn">Unblock  </button>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-md-3"><img height="40px" src="img/avatar2.jpg"></div>
                            <div class="col-md-9 name-txt">Trisha Williams <button type="button" class="btn btn-secondary block-btn">Unblock</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-md-3"><img height="40px" src="img/avatar3.jpg"></div>
                            <div class="col-md-9 name-txt">kane Richards <button type="button" class="btn btn-secondary block-btn">Unblock</button>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-md-3"><img height="40px" src="img/avatar4.jpg"></div>
                            <div class="col-md-9 name-txt">Eric <button type="button" class="btn btn-secondary block-btn">Unblock</button>
                            </div>
                        </div>
                    </div>
                 </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-12">
                        <center><button class="btn pull-right">Save Settings</button></center> <br/><br/>
                    </div>
                </div>



            </div>
            <br/>

            <br/>

        </div>

    </div>


</div>



</div>

<div id="groupModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span class="times">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Create Group</h4>

 <!--<br /><img src="../../Content/images/newsletter.png" class="center-block" width="80" />-->
            </div>
            <div class="modal-body">

                <div class="login-email signup-email newsletter">
                    <div class="row">
                        <div class="col-sm-12">


                                <!--<span>Choose a Message</span> <p class="clearfix"></p>-->

                            <input type="text" class="form-input form-control subject-input" placeholder="Group Name">
                            <br>
                            <textarea placeholder="Description" class="form-input form-control" rows="4" ng-model="visitMessage" ng-trim="false" maxlength="150"></textarea>
                            <span id="remainingChars">{{150 - visitMessage.length}}</span> 

                            <div class="col-sm-offset-2 col-sm-8">
                                <br>
                                <button type="button" class="btn custombtn" id="sendVisit">Create</button>
                                <!--<button class="btn button-large success" id="sendVisit">Send</button>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



<!-- End of Mid Section -->


<!-- Right Section 
<div class="col-sm-3 nopadding">
    <div class="rightsec">


        <div class="main-content">
            <div class="content-pad">
                <p class="about-text">Media Gallery Teaser...
                <p class="about-text">Timeline Teaser...
                </p>


            </div>
        </div>
        <p class="clearfix"></p>
    </div>
</div>
<!-- End of Right Section -->

<span class="sm-media"></span>
