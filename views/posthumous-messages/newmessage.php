<div class="container-fluid container-posthomous-links">
    <div class="row">
        <div class="col-md-5 nopadding">

            <div class="col-sm-12">
                <div class="form-group">
                    <label class="custom-display">Name</label>
                    <input type="text" class="form-control" placeholder="Name of message"/>
                </div>
            </div>
            <div class="col-sm-12">
                <br>
                <label class="custom-display">Message</label>

            </div>
            <div class="col-sm-3 text-center links-boxes">
                <a class="links-msgs icon-upload">
                    <!--<label for="memoir_upload" class="custom-file-upload-posthomous">
                            <i class="fa fa-arrow-up"  data-placement="top" title="Upload"></i>
                        </label><input type="file" id="memoir_upload" name="memoir_upload"/>-->
                    <span class="lnr lnr-upload"></span>
                    
                </a>
                <p class="links-msgs-p">Upload</p>
            </div>

            <div class="col-sm-3 text-center links-boxes">
                <a class="links-msgs icon-video">
                    <span class="lnr lnr-camera-video"></span>
                    
                </a>
                <p class="links-msgs-p">Record video</p>
            </div>
            <div class="col-sm-3 text-center links-boxes">
                <a class="links-msgs icon-audio">
                    <span class="lnr lnr-mic"></span>
                    
                </a>
                <p class="links-msgs-p">Record audio</p>
            </div>
            <div class="col-sm-3 text-center links-boxes">
                <a class="links-msgs icon-txt">
                    <span class="lnr lnr-spell-check"></span>
                    
                </a>
                <p class="links-msgs-p">Type message</p>
            </div>

        </div>
        <div class="col-md-7">
            <div class="form-group">
                <label class="custom-display">WordPad</label>
               <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 nopadding">
            <div class="col-sm-12">

                <label class="custom-display"><strong>Recipients</strong></label>
                <br>
            </div>
            <div class="col-sm-3 col-pad">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name"/>
                </div>
            </div>
            <div class="col-sm-3 col-pad">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email"/>
                </div>
            </div>
            <div class="col-sm-3 col-pad">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="EM People"/>
                </div>
            </div>
            <div class="col-sm-3 col-pad">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="EM Groups"/>
                </div>
            </div>
            
            <div class="col-sm-3 col-pad">
                <br>
                <label class="custom-display">Date</label>
                <div class="input-group date">


                    <input type="text" class="form-control pull-left datepicker">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>

            </div>
            
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="custom-display">&nbsp</label>
                    <input type="checkbox" class="minimal" checked> Inform recipients of this message


                </div>
            </div>


        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn custombtn">Save</button>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(function() {
      $('.summernote').summernote({
        height: 150
      });

      $('form').on('submit', function (e) {
        e.preventDefault();
        alert($('.summernote').summernote('code'));
        alert($('.summernote').val());
      });
      
      $("#myNote").summernote({
            toolbar: [
                ['para', ['ul']]
            ],
            focus: true
        });
$('.note-editor [data-event="insertUnorderedList"]').tooltip('disable'); 
    });
  </script>



