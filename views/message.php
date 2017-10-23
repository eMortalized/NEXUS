<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->

<div class="col-sm-11 nopadding" ng-controller="messageController"  >

    <div class="midsec scroll">
        <div class="container">

            <!--<section class="top-header-messaging">
                <div class="row">
                    
                    <div class="col-xs-6 col-xs-offset-6">
                        <div class="content-right text-right">
                            <ul>
                                <li><a href=""><i class="fa fa-inbox" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-share" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-archive" aria-hidden="true"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </section>-->

            <section class="main-body-message">
                
                <div class="row">
                    <div class="col-sm-5 box_people">
                        
                        <form class="navbar-form" role="search">
                             <div class="input-group add-on">
                                <input class="form-control srch_people" placeholder="Search" name="srch-term" id="srch-term" type="text">
                               <!-- <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </div> -->
                            </div>
                            <div class="content-right text-right">
                                <ul>
                                    <li><a href=""><i class="fa fa-inbox" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-share" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-archive" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                           
                        </form>
                        
                        <ul class="nav nav-tabs nav_people">
                            <li class="active">
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar1.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>John Doe</h4>
                                        <h5>Design for health project<span class="pull-right">08 Oct &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li class="unreadMsg">
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar2.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Trisha Williams</h4>
                                        <h5>Design for health project<span class="pull-right">04 Oct &nbsp;</span><span class="label label-warning pull-right unread">New</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar3.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Kane Richards</h4>
                                        <h5>Design for health project<span class="pull-right">4 Oct &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar4.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Eric</h4>
                                        <h5>Design for health project<span class="pull-right">30 Sep &nbsp;</span><span class="label label-warning pull-right unread">New</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li class="unreadMsg">
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar5.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Tim Simons</h4>
                                        <h5>Design for health project<span class="pull-right">29 Sep &nbsp;</span><span class="label label-warning pull-right unread">New</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li class="unreadMsg">
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar6.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Caroloine</h4>
                                        <h5>Design for health project<span class="pull-right">29 Sep &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar1.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>John Doe</h4>
                                        <h5>Design for health project<span class="pull-right">28 Sep &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar2.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Trisha Williams</h4>
                                        <h5>Design for health project<span class="pull-right">28 Sep &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar3.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Kane Richards</h4>
                                        <h5>Design for health project<span class="pull-right">25 Sep &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li><li>
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar4.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Eric</h4>
                                        <h5>Design for health project<span class="pull-right">25 Sep &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="col-sm-7 box_msgs">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="content-left">
                                            <div class="avatar">
                                                <img src="img/avatar1.jpg" class="img-responsive"/>
                                            </div>
                                            <h3 class="msg_subject">Design for health project</h3>
                                            <span class="msg_dateandtime"><i class="fa fa-clock-o"></i> 04-Oct 9:42AM</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <p class="text-right icons-mail">
                                            <a href=""><i class="fa fa-chevron-left"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href=""><i class="fa fa-chevron-right"></i></a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="chatHead_sep">
                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Hi Peter,<br><br>
                                            I am looking for a UI designer for an upcoming heath app. We already have an established web presence and now moving to the mobile space.<br><br>
                                            Have a nice day.<br>
                                            John.
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="row sndMsg_box">
                                    <div class="chatHead_sep">
                                            
                                        </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="" class="msg_helpers"><i class="fa fa-font add_file"></i></a>
                                                <a href="" class="msg_helpers"><i class="fa fa-paperclip add_file"></i></a>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="pull-right deleteBtn"><i class="fa fa-trash"></i> Delete</button>
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea class="form-control txt-msg" placeholder="Type your message"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-sm-12">
                                        
                                        <a href="" class="txt-send"><span>SEND</span></a>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <h3>Menu 1</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <h3>Menu 3</h3>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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