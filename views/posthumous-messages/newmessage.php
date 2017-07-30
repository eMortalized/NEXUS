<div class="container-fluid container-posthomous-links" ng-controller="newmessage">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            
            <h3>
                <img src="img/newmessage.png" width="50px"/> New Message
            </h3>
            <hr>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="custom-display" for="name">Name <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Provide a unique name for this communication.  Others will be able to see this name."><i class="fa fa-info-circle"></i></a></label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="50" required/>
                    </div>
                    
                    <div class="col-sm-4">
                        <label class="custom-display" for="description">Description <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Provide a detailed description for this communication.  Keep in mind it may be stored for decades so be as detailed as possible now."><i class="fa fa-info-circle"></i></a></label>
                        <input type="text" class="form-control" id="description" name="description" maxlength="256" />
                    </div>
                </div>
                    
                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label class="custom-display" for="recipientName">Recipient name <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input the legal name of the recipient.  If this person has an eMortalized account, ensure it is selected."><i class="fa fa-info-circle"></i></a></label>
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Start typing last name" id="recipientName" name="recipientName" maxlength="100">

                        <div class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="custom-display" for="recepientEmail">Recipient email <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Input the email address of the recipient.  If they do not have one, you can leave this blank, but to ensure the right person receives your message, strongly encourage them to get an email address for this purpose."><i class="fa fa-info-circle"></i></a></label>
                             <input type="email" class="form-control" id="recepientEmail" name="recepientEmail" maxlength="50" required/>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="custom-display" for="recipientDetail">Recipient identification <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Because email addresses are generally insufficient to confirm someone's identity, input details to help identify the recipient, like, 'My niece', or 'My best friend from ABC High School'.  The more detail the better to ensure the recipient receives the communication."><i class="fa fa-info-circle"></i></a></label>
                             <input type="text" class="form-control" id="recipientDetail" name="recipientDetail" maxlength="512" required/>
                        </div>
                    </div>
                    
                </div>
           
            
                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="custom-display" for="availableDate">Date of message availability <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the date upon which this communication will be available to the recipient(s)."><i class="fa fa-info-circle"></i></a></label>
                             <div class="input-group date">


                                 <input type="text" class="form-control pull-left datepicker" id="availableDate" name="availableDate">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    
                    <div class="col-sm-6">
                            <label class="custom-display" for="posthumousMessContext">About the message <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="This field to provide any additional context to the message.  You can describe your motivation, circumstances, thoughts & feelings, etc."><i class="fa fa-info-circle"></i></a></label>
                             <input type="text" class="form-control" id="posthumousMessContext" name="posthumousMessContext" maxlength="512"/>
                        
                    </div>
                    
                    <div class="col-sm-6">
                       
                            <label class="custom-display" for="posthumousMessage">Enter/upload your message <label for="memoir_upload" class="custom-file-upload">
                                <i class="fa fa-arrow-circle-up"  data-placement="top" title="Upload"></i>
                            </label><input type="file" id="posthumousMessage_upload" name="posthumousMessage_upload"/></label>
                            <input type="text" class="form-control" id="posthumousMessage" name="posthumousMessage" maxlength="512" required/>
                        
                    </div>
                    
                   
                    
                </div>
            
                <div class="form-group">
                    <div class="col-md-12">
                            <label class="custom-display">Message for posterity</label>
                           <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
                    </div>
                </div>
            
                <div class="col-sm-6">
                        
                    <label class="custom-display"><input type="checkbox" icheck id="informOfCreation" name="informOfCreation" ng-model="informOfCreation">&nbsp; Inform recipients of message creation &nbsp;&nbsp; <a href="" class="tooltip-help_custom"  data-placement="top" data-title="Selecting yes will notify the recipients immediately that a message has been created and will be available for them to view on the 'date of availability'."><i class="fa fa-info-circle"></i></a></label> 
                        
                    </div>
                    <div class="col-md-6">
                    <button class="btn custombtn pull-right">Save </button>
                </div>
                
           
            
                
            
                
            
            
            
            
            
            <!---
            
            
            
            
            
            
            
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="custom-display" for="informOfCreation"><input type="checkbox" icheck id="informOfCreation" name="informOfCreation"> Inform recipients of message creation <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Selecting yes will notify the recipients immediately that a message has been created and will be available for them to view on the 'date of availability'."><i class="fa fa-info-circle"></i></a></label> 
                </div>
            </div>
            
            
            

        </div>
        
            
            ----->
    </div>
    
    
</div>




