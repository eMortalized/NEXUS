<div ng-controller="homeController">
<!-- Mid Section -->
        <div class="col-sm-8 nopadding">
            <div class="midsec back-img">
            </div>
        </div>
        <!-- End of Mid Section -->
        
        
        <!-- Right Section -->
        <div class="col-sm-3 nopadding">
            <div class="rightsec">
                
                
                <div class="user-name">
                    <h1>MARCO FINKELSTEIN</h1>
                </div>
                
                <div class="main-content">
                    <div class="user-country">
                        <h3>Toronto, Canada</h3>
                    </div>

                    <p class="clearfix"></p>

                    <div class="content-pad">
                        <p class="about-text">I was born 1947 in Toronto,
                        Canada and died in 2014 in
                        London, England. </p>

                        <img class="pull-right" src="img/flag-canada.jpg" alt="Canadian Flag"  width="55"/>
                        <p class="clearfix"></p>
                        <p class="about-text"><i>"Everything is exactly as it's
                                supposed to be." - unknown</i></p>
                    </div>
                </div>
                
                
                <div class="bottom-links">
                    <a href="#">
                        <div class="links">
                            <i class="fa fa-link"></i>
                            <span>Connect</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="links">
                            <i class="fa fa-envelope-o"></i>
                            <span>Message</span>
                        </div>
                    </a>
                    <a href="" data-toggle="modal" data-target="#visitModal">
                        <div class="links">
                            <i class="fa fa-coffee"></i>
                            <span>Visit</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="links">
                            <i class="fa fa-gift"></i>
                            <span>Gift</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="links">
                            <i class="fa fa-usd"></i>
                            <span>Donate</span>
                        </div>
                    </a>
                </div>
                <a href="#/about"> <button class="aboutmeBtn">About Me ></button> </a>
                <p class="clearfix"></p>
            </div>
        </div>
        <!-- End of Right Section -->
        
        <div id="visitModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span class="times">&times;</span> </button>
                <h4 class="modal-title">Pay a Visit</h4>
               
                <!--<br /><img src="../../Content/images/newsletter.png" class="center-block" width="80" />-->
            </div>
            <div class="modal-body">

                <div class="login-email signup-email newsletter">
                    <div class="row">
                        <div class="col-sm-12">
                            

                                <!--<span>Choose a Message</span> <p class="clearfix"></p>-->
                                <select class="form-input chosen-select-home" data-placeholder="Choose a emotions">
                                    <option> </option>
                                    <option>Always In My Heart</option>
                                    <option>Cherishing You Always</option
                                    <option>Conveying Love</option>
                                    <option>Drawing Inspiration From You</option>
                                    <option>Eternally Together</option>
                                    <option>Extending My Best Wishes</option>
                                    <option>Missing You Deeply </option>
                                    <option> Offering My condolences</option>
                                    <option>Remembring The Good Times </option>
                                    <option>Sending Greetings </option>
                                    <option>Thinking Of You </option>
                                    <option>Your Legacy Thrives </option>
                                </select>
                                <span class="middle-margin">or</span> <p class="clearfix"></p>
                                
                                <textarea placeholder="Type in the message.." class="form-input form-control" rows="4" ng-model="visitMessage" ng-trim="false" maxlength="150"></textarea>
                                <span id="remainingChars">{{150-visitMessage.length }}</span> 

                                <div class="col-sm-offset-2 col-sm-8">
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
</div>
<script>

         $('.chosen-select-home').chosen({
            placeholder_text_single: "Choose a message"
          });  

    </script>
        
        