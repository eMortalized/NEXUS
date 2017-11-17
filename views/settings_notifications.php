<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->


<div class="midsec scroll">
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
                <a href="#/settings/notifications" class="active">Notifications</a>
                <a href="#/settings/profiles" >Profiles</a>
            </div>
            <br/>
        </div>
        <!--Sidebar section End---->
        
        <div class="col-sm-6 Account">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="settings_heading boldtext">Notifications Settings</h2>
                </div>
            </div>

            
            <!-- pass-->
            <p class="pad"><br/>Show Notifications for</p>
            <div class="row pad" style="border-top:0px;">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Groups</h3>
                </div>
                <div class="col-sm-5">
                    <div class="material-switch pull-left sw-itch">
                        <input id="switch1" name="someSwitchOption001" type="checkbox"/>
                        <label for="switch1" class="label-default"></label>
                    </div>
                    <br/>
                </div>
            </div>
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Activity</h3>
                </div>
                <div class="col-sm-5">
                    <div class="material-switch pull-left sw-itch">
                        <input id="switch2" name="someSwitchOption001" type="checkbox" checked/>
                        <label for="switch2" class="label-default"></label>
                    </div>
                    <br/>
                </div>
            </div>
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Direct Messages</h3>
                </div>
                <div class="col-sm-5">
                    <div class="material-switch pull-left sw-itch">
                        <input id="switch3" name="someSwitchOption001" type="checkbox"/>
                        <label for="switch3" class="label-default"></label>
                    </div>
                    <br/>
                </div>
            </div>
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">CC Expiration</h3>
                </div>
                <div class="col-sm-5">
                    <div class="material-switch pull-left sw-itch">
                        <input id="switch4" name="someSwitchOption001" type="checkbox"/>
                        <label for="switch4" class="label-default"></label>
                    </div>
                    <br/>
                </div>
            </div>
            <div class="row pad">

                <div class="col-sm-3">
                    <h3 class="settings_subheading">Frequency </h3>
                </div>
                <div class="col-sm-5">
                    <select class="form-control">
                        <option>Daily</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Off</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn pull-right ">Save Settings</button>
                </div>
            </div>
            <br/>
            
                <br/>
                
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
