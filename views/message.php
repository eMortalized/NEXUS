<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->

<div class="col-sm-11 nopadding" ng-controller="messageController"  >

    <div class="midsec scroll messagepg">
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
                
                <div class="row posRel">
                    <div class="col-sm-5 box_people">
                        
                        <form class="navbar-form" role="search">
                            <div class="row">
                                <div class="col-md-9 searchsec">
                                    <div class="input-group add-on">
                                        <input class="form-control srch_people" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                    </div>
                                </div>
                                <div class="col-md-3 composesec ">
                                    <button class="btn compose-btn" data-toggle="modal" data-target="#visitModal"><i class="fa fa-envelope" aria-hidden="true"></i> Compose</button>
                                    <button class="btn btn-default btn-sm pull-right" id="back-msgScreen"><i class="fa fa-arrow-left"></i> </button>
                                </div>
                            </div>
                            <!----
                            <div class="content-right text-right">
                                <ul>
                                    <li><a href=""><i class="fa fa-inbox" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-share" aria-hidden="true"></i></a></li>
                                    <li><a href=""><i class="fa fa-archive" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            ---->
                            
                           <ul class="nav nav-tabs border-bottom-none" id="customtabs">
                                <li class="nav-item" ng-class="{ active: showInbox==true }" ng-click="showMessageTab('inbox')">
                                    <a class="nav-link "><i class="fa fa-inbox" aria-hidden="true"></i> <span>Inbox</span></a>
                                </li>
                                <li class="nav-item " ng-class="{ active: showArchived==true }" ng-click="showMessageTab('archived')">
                                  <a class="nav-link"><i class="fa fa-archive" aria-hidden="true"></i> <span>Archived</span></a>
                                </li>
                                <li class="nav-item" ng-class="{ active: showSent==true }" ng-click="showMessageTab('sent')">
                                  <a class="nav-link"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Sent </span></a>
                                </li>
                                <li class="nav-item" ng-class="{ active: showDeleted==true }" ng-click="showMessageTab('deleted')">
                                  <a class="nav-link"><i class="fa fa-trash" aria-hidden="true"></i> <span>Deleted </span></a>
                                </li>
                              </ul>
                        </form>
                        
                        <ul class="nav nav-tabs nav_people" ng-show="showInbox">
                            <li class="active">
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar1.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>John Doe</h4>
                                        <h5 class="minimize">Lorem ipsum dolor sit adipiscing elit dolor sit adipiscing elit<span class="pull-right">08 Oct &nbsp;</span></h5>
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
                                        <h5 class="minimize">Suspendisse nulla ligula, sagittis eu eros id, porta interdum elit. Curabitur sit amet metus eu mauris feugiat pretium quis a mi. 
                                        <span class="pull-right">04 Oct &nbsp;</span><span class="label label-warning pull-right unread">New</span></h5>
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
                            <li class="unreadMsg">
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
                            <li>
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
                        
                        <!-- Archieved Messages -->
                        <ul class="nav nav-tabs nav_people" ng-show="showArchived">
                            <li >
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar2.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>Trisha Williams</h4>
                                        <h5>Design for health project<span class="pull-right">04 Oct &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#/message">
                                    <div class="content-left">
                                        <div class="avatar">
                                            <img src="img/avatar3.jpg" class="img-responsive"/>
                                        </div>
                                        <h4>John Doe</h4>
                                        <h5>Design for health project<span class="pull-right">08 Oct &nbsp;</span></h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        
                         <!-- sent Messages -->
                        <ul class="nav nav-tabs nav_people" ng-show="showSent">
                            <p class="text-center">Oops! No Messages Found</p>
                        </ul>
                         
                          <!-- deleted Messages -->
                        <ul class="nav nav-tabs nav_people" ng-show="showDeleted">
                            <p class="text-center">Oops! No Messages Found</p>
                        </ul>
                    </div>

                    <div class="col-sm-7 box_msgs">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">

                            <div class="msgHead">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="content-left">
                                            <table>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="avatar">
                                                            <img src="img/avatar1.jpg" class="img-responsive"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3 class="msg_subject">Design for health project</h3>
                                                        <span class="msg_dateandtime"><i class="fa fa-clock-o"></i> 04-Oct 9:42AM</span>
                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-2 hidden-xs hidden-sm">
                                        <p class="text-right icons-mail">
                                            <a href=""><i class="fa fa-chevron-left"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href=""><i class="fa fa-chevron-right"></i></a>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            
                            <div class="msgText-Area scroll">
                                <div class="row">
                                    <div class="col-sm-12">
                                            <p>Hi Peter,<br><br>
                                                I am looking for a UI designer for an upcoming heath app. We already have an established web presence and now moving to the mobile space.<br><br>
                                                Have a nice day.<br>

                                                <br/> 
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel rutrum justo, dictum malesuada lectus. Mauris vulputate leo sed quam pharetra fermentum. Duis commodo tincidunt sem in efficitur. Cras eu tellus sagittis, gravida velit sed, finibus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis viverra massa et dui viverra volutpat. Nunc nisl velit, bibendum sit amet ex et, efficitur finibus felis. Suspendisse nulla ligula, sagittis eu eros id, porta interdum elit. Curabitur sit amet metus eu mauris feugiat pretium quis a mi. Aenean mattis lacus at diam iaculis porta. Praesent nec dapibus arcu. Donec diam tellus, vestibulum quis vestibulum accumsan, dignissim et ex. Aenean porta, nisi vel imperdiet tristique, ligula mauris accumsan mi, non congue diam est id massa.
    <br/> <br/>
    Praesent feugiat porta dolor quis dictum. Etiam lobortis maximus ipsum ut pharetra. Integer congue, tortor ac volutpat consectetur, felis turpis blandit lorem, sed auctor arcu nisi ut est. Vestibulum ullamcorper maximus est, et aliquet lorem vulputate et. Sed tempor maximus ligula, pharetra auctor purus placerat id. Curabitur consectetur egestas ultricies. Curabitur efficitur eu ex lobortis semper. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In accumsan suscipit porta. Vestibulum sit amet quam sed urna fermentum finibus. Donec semper est vel vehicula mollis. Quisque vel scelerisque nulla. Quisque pellentesque massa euismod fringilla pellentesque. Pellentesque at neque tortor.

                                                John.
                                            </p>

                                        <!-- Attachments -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="attachmentBox">
                                                    <h3><img src="img/thumb_pic.png" width=30/> Jessica's Birthday picture <i class="fa fa-download pull-right"></i></h3>
                                                </div>
                                                <div class="attachmentBox">
                                                    <h3><img src="img/thumb_doc.png" width=30/> Birthday Notes <i class="fa fa-download pull-right"></i></h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                             </div>
                                
                             <div class="row sndMsg_box">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a href="" class="msg_helpers"><i class="fa fa-paperclip  pull-right add_file"></i></a>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                <textarea class="form-control txt-msg" placeholder="Type your message"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-sm-12">
                                        
                                        <a href="" class="txt-send"><span>SEND</span></a>
                                        
                                        <button class="pull-right deleteBtn"><i class="fa fa-trash"></i> CANCEL</button>
                                         
                                    </div>
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
<div id="visitModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span class="times">&times;</span> </button>
                <h4 class="modal-title"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Compose</h4>
               
                <!--<br /><img src="../../Content/images/newsletter.png" class="center-block" width="80" />-->
            </div>
            <div class="modal-body">

                <div class="login-email signup-email newsletter">
                    <div class="row">
                        <div class="col-sm-12">
                            

                                <!--<span>Choose a Message</span> <p class="clearfix"></p>-->
                                
                            <input type="text" class="form-input form-control subject-input" placeholder="Subject">
                            <br>
                                <textarea placeholder="Type in the message.." class="form-input form-control" rows="4" ng-model="visitMessage" ng-trim="false" maxlength="150"></textarea>
                                <span id="remainingChars">{{150-visitMessage.length }}</span> 

                                <div class="col-sm-offset-2 col-sm-8">
                                    <br>
                                    <button type="button" class="btn custombtn" id="sendVisit">Send</button>
                                    <!--<button class="btn button-large success" id="sendVisit">Send</button>-->
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

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
<script>
        var minimized_elements = $('.minimize');
        minimized_elements.each(function(){    
            var t = $(this).text();        
            if(t.length < 50) return;

            $(this).html(
                t.slice(0,50)+'<span>... </span><a href="#" class="more"></a>'+
                '<span style="display:none;">'+ t.slice(100,t.length)+' <a href="#" class="less">Less</a></span>'
            );

        }); 

</script>