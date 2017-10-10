
<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->
<div class="col-sm-11 nopadding" ng-controller="connectionsController"  >

    <div class="midsec scroll">
        <div class="container">

            <section class="head_1_connections">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <ul>
                            <li><a>all</a></li>
                            <li><a>family</a></li>
                            <li><a>friends</a></li>
                            <li><a>general</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8 text-right">
                        <select>
                            <option>Filter View</option>
                        </select>
                        <input type="search" class="connection_search" placeholder="Seach Connections"></input>
                    </div>
                </div>
            </section>

            <section class="a-z_connections">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <a href=""><li class="active">A</li></a>
                            <a href=""><li>B</li></a>
                            <a href=""><li>C</li></a>
                            <a href=""><li>D</li></a>
                            <a href=""><li>E</li></a>
                            <a href=""><li>F</li></a>
                            <a href=""><li>G</li></a>
                            <a href=""><li>H</li></a>
                            <a href=""><li>I</li></a>
                            <a href=""><li>J</li></a>
                            <a href=""><li>K</li></a>
                            <a href=""><li>L</li></a>
                            <a href=""><li>M</li></a>
                            <a href=""><li>N</li></a>
                            <a href=""><li>O</li></a>
                            <a href=""><li>P</li></a>
                            <a href=""><li>Q</li></a>
                            <a href=""><li>R</li></a>
                            <a href=""><li>S</li></a>
                            <a href=""><li>T</li></a>
                            <a href=""><li>U</li></a>
                            <a href=""><li>V</li></a>
                            <a href=""><li>W</li></a>
                            <a href=""><li>X</li></a>
                            <a href=""><li>Y</li></a>
                            <a href=""><li>Z</li></a>
                        </ul>
                    </div>
                </div>
            </section>
         <section class="compose-navbar main-body-message">
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="head-actions">
                            <button class="btn actionbtn1 bottom-adjust"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Compose</button>
                            <button class="btn actionbtn1 bottom-adjust"><i class="fa fa-inbox" aria-hidden="true"></i>&nbsp; Inbox</button>
                            <button class="btn actionbtn1 bottom-adjust"> <i class="fa fa-external-link" aria-hidden="true"></i> &nbsp; Outbox</button>
                            <button class="btn actionbtn1 bottom-adjust"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Sent Items</button>
                            <button class="btn actionbtn1 bottom-adjust"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp; Deleted Items</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="connection_cards">
                <div class="row">
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person1.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            
                           
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person2.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person3.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person4.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href="#"><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                
                
                <div class="row">
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person5.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person6.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person7.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3  cards-item">
                        <div class="box-card">
                            <div class="content">
                                <div class="thumbnail">
                                    <img src="img/person4.jpg" />
                                </div>
                                <div class="content2 text-center">
                                    <h4>Jon Doe</h4>
                                    <h5>Toronto, Canada</h5>
                                </div>

                               

                            </div>
                            <div class="card-foot">
                                <div class=" card-icons">
                                <div class="dropdown dislpay-line">
                                    <i class="fa fa fa-users  increase-size dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"><span class="caret"></span></i>
                                    
                                    <div class="dropdown-menu connection_menu_dropdown" aria-labelledby="dropdownMenuButton">
                                        <li><a href=""><i class="fa fa fa-users"  aria-hidden="true"></i> Family</a></li>
                                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Friend</a></li>
                                        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Public</a></li>
                                        <li class="border-bottom-none"><a href=""><i class="fa fa-user-times" aria-hidden="true"></i> Disconnect</a></li>
                                    </div>
                                </div>
                                
                                <a data-toggle="collapse" data-target="#card1"><i class="fa fa-envelope increase-size" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Review recipients"></i>
                                </a>
                                <i class="fa fa-eye increase-size" aria-hidden="true"></i>
                                </div>
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