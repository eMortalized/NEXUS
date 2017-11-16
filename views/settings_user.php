<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->


<div class="midsec scroll">
    <!-- Setting -->
    <!--Sidebar section---->
    <div class="maincontainer">
        <!--Account section---->

        <div class="col-sm-6 col-sm-offset-1 Account">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="settings_heading boldtext">User Settings</h2>
                </div>
            </div>

            <div class="row pad">

                <div class="col-sm-3">
                    <h3 class="settings_subheading">User Name</h3>

                </div>
                <div class="col-sm-5">

                    <p>
                        <input type="text" class="form-control" value="tanvir009"  disabled>
                    </p>
                    <div class="material-switch pull-left">
                        <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                        <label for="someSwitchOptionDefault" class="label-default"></label>
                    </div>
                    <p>Let people find your blogs through this address
                    </p>
                </div>
                <div class="col-sm-4 pull-right">
                    <span class="glyphicon">&#x270f;</span>
                </div>
            </div>
            <!-- pass-->
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Email</h3>

                </div>
                <div class="col-sm-5">

                    <p>
                        <input type="text" class="form-control" value="tnvr009@gmail.com" disabled>
                    </p>
                </div>
                <div class="col-sm-4 pull-right">
                    <span class="glyphicon">&#x270f;</span>
                </div>
            </div>
            <!-- End pass Section -->
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Password</h3>

                </div>
                <div class="col-sm-5">

                    <p>
                        <input type="text" class="form-control"  disabled>
                    </p>
                </div>
                <div class="col-sm-4 pull-right">
                    <span class="glyphicon">&#x270f;</span>
                </div>
            </div>
            <!-- Availabilitys-->
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Date of birth</h3>
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="bday">
                </div>
            </div>
            <!-- Availability End -->
            <!-- Dial-a-post-->
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">City of birth</h3>

                </div>
                <div class="col-sm-5">
                    <select class="selectpicker form-control" data-width="fit">
                        <option>City of birth</option>
                        <option>Español</option>
                    </select>



                </div>

            </div>

            <!-- Dial-a-post End -->
            <!-- Language section-->
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">	Country of birth</h3>

                </div>
                <div class="col-sm-5">
                    <select class="selectpicker form-control" data-width="fit">
                        <option>united state</option>
                        <option>india 
                    </select>

                </div>

            </div>

            <!-- Language End -->

            <!--Filtering-->
            <div class="row pad">
                <div class="col-sm-3">
                    <h3 class="settings_subheading">Relationship</h3>

                </div>
                <div class="col-sm-5">
                    <select class="selectpicker form-control" data-width="fit">
                        <option>Single</option>
                        <option>Married </option>
                    </select>



                </div>
                <div class="col-sm-4 pull-right">
                </div>
            </div>
            <!-- Filtering End -->
            <!-- Active Sessions -->
            <div class="row pad">
                <div class="col-sm-3">
                    <h4>Active Sessions
                        Past 30 days</h4>

                </div>
                <div class="col-sm-3">
                    <h4>Browser</h4>
                    <p>Chrome 62 
                        Windows 10
                    </p>

                </div>
                <div class="col-sm-3">
                    <h4>Location</h4>
                    <p>CH-Chandigarh, IN 
                        169.149.138.178
                    </p>
                </div>
                <div class="col-sm-3">
                    <h4>Last seen
                    </h4><p>Current session
                    </p>

                </div>

            </div>
            <!--Active Sessions End -->
            

        </div>
        
        
        <div class="col-sm-3">
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
                
                <a href="#/settings/user" class="active">User</a>
                <a href="#/settings/notifications" >Notifications</a>
                <a href="#/settings/profiles" >Profiles</a>
            </div>
        </div>
        <!--Sidebar section End---->
        
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
