<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->
<div class="col-sm-11 nopadding" ng-controller="messageController"  >

    <div class="midsec scroll">
        <div class="container">
                
            <section class="top-header-messaging">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="content-left ">
                            <ul class="text-left">
                                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="content-right text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
                                <button class="btn percentage" disabled >80%</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="title-message">
                <div class="row">
                    <div class="col-xs-12">
                        <h4>Contrary to popular belief</h4>
                    </div>
                </div>
            </section>
            
            <section class="main-body-message">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head-actions">
                            <button class="btn actionbtn1 bottom-adjust">Compose</button>
                            <button class="btn actionbtn1 bottom-adjust">Inbox</button>
                            <button class="btn actionbtn1 bottom-adjust">Outbox</button>
                            <button class="btn actionbtn1 bottom-adjust">Sent Items</button>
                            <button class="btn actionbtn1 bottom-adjust">Deleted Items</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="content-left">
                            <div class="avatar">
                                <img src="img/avatar2.jpg" class="img-responsive"/>
                            </div>
                            <h4>Jon Doe</h4>
                            <h5>Toronto, Canada</h5>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="content-right text-right">
                            <ul>
                                <li><a href="#" ><i class="fa fa-folder-open left-align" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="badge">1</span></a></li>
                                <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content">
                            <p>Dear Rob</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="files">
                        
                    <div class="col-sm-3"> 
                            <div class="file1 bottom-adjust">
                                <div class="header">
                                    <div class="headings">
                                        <h5>imagename.jpg</h5>
                                        <h5>350kb</h5>
                                    </div>
                                    
                                    <a href="#" class="btn"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                    
                                </div>
                                <img src="img/mediagallery/image4.jpg" class="img-responsive" />
                            </div>
                    </div>
                        
                    <div class="col-sm-3">
                            <div class="file1 bottom-adjust">
                                <div class="header">
                                    <div class="headings">
                                        <h5>imagename.jpg</h5>
                                        <h5>350kb</h5>
                                    </div>
                                    
                                    <a href="#" class="btn"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                    
                                </div>
                                <img src="img/mediagallery/image5.jpg" class="img-responsive" />
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="file1">
                                <div class="header">
                                    <div class="headings">
                                        <h5>imagename.jpg</h5>
                                        <h5>350kb</h5>
                                    </div>
                                    
                                    <a href="#" class="btn"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                    
                                </div>
                                <img src="img/mediagallery/image6.jpg" class="img-responsive" />
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    
                    
                </div>
            </section>
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
                </p>


            </div>
        </div>



        <button class="aboutmeBtn">Media Gallery ></button>
        <p class="clearfix"></p>
    </div>
</div> -->
<!-- End of Right Section -->

<span class="sm-media"></span>