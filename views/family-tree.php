<?php include '../inc/connect.php'; ?>

    <!-- Mid Section -->
    <div class="col-sm-8 nopadding" ng-controller="timelineController"  >

        <div class="midsec scroll">

            <!-- <input type="button" id="sendData" value="send data" onclick="$.send_Family({url: 'save_family.php'})"/> -->
            <div id="pk-family-tree">
            </div>


        </div>
    </div>
    <!-- End of Mid Section -->


    <!-- Right Section -->
    <div class="col-sm-3 nopadding">
        <div class="rightsec">


            <div class="main-content">
                <div class="content-pad">
                    <p class="about-text">Timeline Teaser...
                    </p>


                </div>
            </div>



            <button class="aboutmeBtn">Timline ></button>
            <p class="clearfix"></p>
        </div>
    </div>
    <!-- End of Right Section -->

    <span class="sm-media"></span>

    <script>
         /*$('#pk-family-tree').pk_family();*/
         $('#pk-family-tree').pk_family_create(
            {
            data: '{"li0":{"a0":{"name":"1","age":"wewe","gender":"Male","pic":"img/avatar1.jpg"},"a1":{"name":"2","age":"23","gender":"Female","relation":"Spouse","pic":"img/sample_img.jpg"},"ul":{"li0":{"a0":{"name":"3","age":"34","gender":"Male","relation":"Child","pic":"images/profile.png"}},"li1":{"a0":{"name":"4","age":"34","gender":"Female","relation":"Child","pic":"images/profile-f.png"}}}}}'
            }
            );
        
    </script>