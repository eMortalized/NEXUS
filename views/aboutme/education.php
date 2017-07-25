<form id="education" name="education">

    <div class="col-sm-12 text-center top">
        <h2>Education {{test}}</h2>
    </div>
    <!-- Col 1 -->
    <div class="col-sm-12">
        <h4 class="grouping-txt text-center" style="">Formal Education Details</h4>
    </div>
    <div class="col-md-4">
        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="elementarySchool" ng-model="elementarySchool"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="elementarySchool" class="fixPlace">Schools</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="elementarySchool">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="elementarySchool">Elementary school <label for="elementarySchool_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="elementarySchool_upload" name="elementarySchool_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the complete name of your elementary school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="elementarySchool" name="elementarySchool" maxlength="70"/>
            </div>
        </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="elDateFrom">Elementary school date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you started at this school.  Aproximate is fine."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="elDateFrom" name="elDateFrom">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="elDateTo">Elementary school date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you ended at this school.  Approximate is fine."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="elDateTo" name="elDateTo">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
        </div>
        </div>
             <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>
        <div class="arrayFields">  
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="middleSchool" ng-model="middleSchool"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="middleSchool" class="fixPlace">Schools</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="middleSchool">
                
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="middleSchool">Middle school <label for="middleSchool_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="middleSchool_upload" name="middleSchool_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the complete name of your middle school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="middleSchool" name="middleSchool" maxlength="70"/>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="miDateFrom">Middle school date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you started at this school.  Aproximate is fine."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="miDateFrom" name="miDateFrom">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>
                

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="miDateTo">Middle school date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you ended at this school.  Approximate is fine."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="miDateTo" name="miDateTo">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>

        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="highSchool" ng-model="highSchool"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="highSchool" class="fixPlace">Schools</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="highSchool">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="highSchool">High school <label for="highSchool_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="highSchool_upload" name="highSchool_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the complete name of your high school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="highSchool" name="highSchool" maxlength="70"/>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="hiDateFrom">Hight school date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you started at this school.  Aproximate is fine."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="hiDateFrom" name="hiDateFrom" maxlength="70">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="hiDateTo">High school date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date you ended at this school.  Approximate is fine."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="hiDateTo" name="hiDateTo">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="hiAccomplishment">Accomplishment(s) <label for="hiAccomplishment_upload_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="hiAccomplishment_upload_upload" name="hiAccomplishment_upload_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="GPA, valedictorian, awards, etc"><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="hiAccomplishment" name="hiAccomplishment"></textarea>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
            
        </div>

        

        

        

        



    </div>
    <!-- End of Col 1 -->

    <!-- Col 2 -->
    <div class="col-md-4">
        <div class="arrayFields">  
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="college" ng-model="college"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="college" class="fixPlace">Higher Education</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="college">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="college">College, institution or program<label for="college_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="college_upload" name="college_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the school from the list or start entering the name.  For schools, not in the list, enter the name."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <select class="form-control chosen-select" id="college" name="college">
                    <option> </option>

                </select>
            </div>
        </div>
        </div>
        
        

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="coCity">College location<a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the city in which the school was located"><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input class="ff_elem form-control" type="text" name="coCity" value="" id="coCity" placeholder="Type the city name to locate"/>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="coScholarship">Scholarship, bursary, award <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any detail on scholarships, bursarys and awards, including value.  If applicable, indicate why it was granted."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="coScholarship" name="coScholarship" maxlength="50"/>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="coDateFrom">College date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Start date of the attendance at the school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="coDateFrom" name="coDateFrom">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="coDateTo">College date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="End date of the attendance at the school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="coDateTo" name="coDateTo">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="coAccomplishment">Certificate, diploma or degree <label for="coAccomplishment_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="coAccomplishment_upload" name="coAccomplishment_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Make a selection if appropriate."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <select class="form-control chosen-select" id="coAccomplishment" name="coAccomplishment">
                    <option> </option>
                    <option>Certificate</option>
                    <option>Diploma</option>
                    <option>Associate degree</option>
                    <option>Bachelor degree</option>
                    <option>Master degree</option>
                    <option>Professional degree</option>
                    <option>Doctorate degree</option>
                </select>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="coAccDetail">College acceptance detail<label for="coAccDetail_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="coAccDetail_upload" name="coAccDetail_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Provide detail on the credential, such as the study area and specialty."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="coAccDetail" name="coAccDetail" maxlength="256"/>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
                
            </div>
            
            
        </div>
        
         
        
    </div>
    <!-- End of Col 2 -->

   
<div class="col-md-4">
    
    <div class="arrayFields"> 
        <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="university" ng-model="university"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="university" class="fixPlace">Higher Education</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="university">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="university">University <label for="university_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="university_upload" name="university_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the school from the list or start entering the name.  For schools, not in the list, enter the name."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <select class="form-control chosen-select" id="university" name="university">
                    <option> </option>

                </select>
            </div>
            </div>
        </div>

        <!--<div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unCountry">University country <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the country in which the school was located"><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <select id="unCountry" data-placeholder="Choose a Country" class="chosen-select form-control"  tabindex="4" name="unCountry" >
                        <option value=""></option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="American Samoa">American Samoa</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antarctica">Antarctica</option>
              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaijan">Azerbaijan</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belarus">Belarus</option>
              <option value="Belgium">Belgium</option>
              <option value="Belize">Belize</option>
              <option value="Benin">Benin</option>
              <option value="Bermuda">Bermuda</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
              <option value="Botswana">Botswana</option>
              <option value="Bouvet Island">Bouvet Island</option>
              <option value="Brazil">Brazil</option>
              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
              <option value="Brunei Darussalam">Brunei Darussalam</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cambodia">Cambodia</option>
              <option value="Cameroon">Cameroon</option>
              <option value="Canada">Canada</option>
              <option value="Cape Verde">Cape Verde</option>
              <option value="Cayman Islands">Cayman Islands</option>
              <option value="Central African Republic">Central African Republic</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Christmas Island">Christmas Island</option>
              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
              <option value="Colombia">Colombia</option>
              <option value="Comoros">Comoros</option>
              <option value="Congo">Congo</option>
              <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
              <option value="Cook Islands">Cook Islands</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Cote D'ivoire">Cote D'ivoire</option>
              <option value="Croatia">Croatia</option>
              <option value="Cuba">Cuba</option>
              <option value="Cyprus">Cyprus</option>
              <option value="Czech Republic">Czech Republic</option>
              <option value="Denmark">Denmark</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Dominican Republic">Dominican Republic</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egypt">Egypt</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Equatorial Guinea">Equatorial Guinea</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Estonia">Estonia</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
              <option value="Faroe Islands">Faroe Islands</option>
              <option value="Fiji">Fiji</option>
              <option value="Finland">Finland</option>
              <option value="France">France</option>
              <option value="French Guiana">French Guiana</option>
              <option value="French Polynesia">French Polynesia</option>
              <option value="French Southern Territories">French Southern Territories</option>
              <option value="Gabon">Gabon</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Germany">Germany</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Greece">Greece</option>
              <option value="Greenland">Greenland</option>
              <option value="Grenada">Grenada</option>
              <option value="Guadeloupe">Guadeloupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea-bissau">Guinea-bissau</option>
              <option value="Guyana">Guyana</option>
              <option value="Haiti">Haiti</option>
              <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
              <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungary">Hungary</option>
              <option value="Iceland">Iceland</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
              <option value="Iraq">Iraq</option>
              <option value="Ireland">Ireland</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japan">Japan</option>
              <option value="Jordan">Jordan</option>
              <option value="Kazakhstan">Kazakhstan</option>
              <option value="Kenya">Kenya</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
              <option value="Korea, Republic of">Korea, Republic of</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Kyrgyzstan">Kyrgyzstan</option>
              <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
              <option value="Latvia">Latvia</option>
              <option value="Lebanon">Lebanon</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Liberia">Liberia</option>
              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lithuania">Lithuania</option>
              <option value="Luxembourg">Luxembourg</option>
              <option value="Macao">Macao</option>
              <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malawi">Malawi</option>
              <option value="Malaysia">Malaysia</option>
              <option value="Maldives">Maldives</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marshall Islands">Marshall Islands</option>
              <option value="Martinique">Martinique</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Mayotte">Mayotte</option>
              <option value="Mexico">Mexico</option>
              <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
              <option value="Moldova, Republic of">Moldova, Republic of</option>
              <option value="Monaco">Monaco</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Morocco">Morocco</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Myanmar">Myanmar</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Netherlands">Netherlands</option>
              <option value="Netherlands Antilles">Netherlands Antilles</option>
              <option value="New Caledonia">New Caledonia</option>
              <option value="New Zealand">New Zealand</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Niger">Niger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Niue">Niue</option>
              <option value="Norfolk Island">Norfolk Island</option>
              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
              <option value="Norway">Norway</option>
              <option value="Oman">Oman</option>
              <option value="Pakistan">Pakistan</option>
              <option value="Palau">Palau</option>
              <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
              <option value="Panama">Panama</option>
              <option value="Papua New Guinea">Papua New Guinea</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Peru</option>
              <option value="Philippines">Philippines</option>
              <option value="Pitcairn">Pitcairn</option>
              <option value="Poland">Poland</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Reunion">Reunion</option>
              <option value="Romania">Romania</option>
              <option value="Russian Federation">Russian Federation</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Saint Helena">Saint Helena</option>
              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
              <option value="Saint Lucia">Saint Lucia</option>
              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
              <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
              <option value="Samoa">Samoa</option>
              <option value="San Marino">San Marino</option>
              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
              <option value="Saudi Arabia">Saudi Arabia</option>
              <option value="Senegal">Senegal</option>
              <option value="Serbia">Serbia</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leone">Sierra Leone</option>
              <option value="Singapore">Singapore</option>
              <option value="Slovakia">Slovakia</option>
              <option value="Slovenia">Slovenia</option>
              <option value="Solomon Islands">Solomon Islands</option>
              <option value="Somalia">Somalia</option>
              <option value="South Africa">South Africa</option>
              <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
              <option value="South Sudan">South Sudan</option>
              <option value="Spain">Spain</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Sudan">Sudan</option>
              <option value="Suriname">Suriname</option>
              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
              <option value="Swaziland">Swaziland</option>
              <option value="Sweden">Sweden</option>
              <option value="Switzerland">Switzerland</option>
              <option value="Syrian Arab Republic">Syrian Arab Republic</option>
              <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
              <option value="Tajikistan">Tajikistan</option>
              <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
              <option value="Thailand">Thailand</option>
              <option value="Timor-leste">Timor-leste</option>
              <option value="Togo">Togo</option>
              <option value="Tokelau">Tokelau</option>
              <option value="Tonga">Tonga</option>
              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
              <option value="Tunisia">Tunisia</option>
              <option value="Turkey">Turkey</option>
              <option value="Turkmenistan">Turkmenistan</option>
              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Uganda">Uganda</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Uzbekistan">Uzbekistan</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Viet Nam">Viet Nam</option>
              <option value="Virgin Islands, British">Virgin Islands, British</option>
              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
              <option value="Wallis and Futuna">Wallis and Futuna</option>
              <option value="Western Sahara">Western Sahara</option>
              <option value="Yemen">Yemen</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
        </div>
        </div>-->

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unCity">University location<a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Select the city in which the school was located"><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input class="ff_elem form-control" type="text" name="unCity" value="" id="unCity" placeholder="Type the city name to locate"/>
            </div>
        </div>
        </div>
             
             <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unScholarship">Scholarship, bursary, award <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter any detail on scholarships, bursarys and awards, including value.  If applicable, indicate why it was granted."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="unScholarship" name="unScholarship" maxlength="50"/>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unDateFrom">University date started <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Start date of the attendance at the school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="unDateFrom" name="unDateFrom">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unDateTo">University date ended <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="End date of the attendance at the school."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="unDateTo" name="unDateTo">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unAccomplishment">Accomplishment(s), diploma, degree or credential <label for="unAccomplishment_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="unAccomplishment_upload" name="unAccomplishment_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Make a selection if appropriate."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <select class="form-control chosen-select" id="unAccomplishment" name="unAccomplishment">
                    <option> </option>
                    <option>Certificate</option>
                    <option>Diploma</option>
                    <option>Associate degree</option>
                    <option>Bachelor degree</option>
                    <option>Master degree</option>
                    <option>Professional degree</option>
                    <option>Doctorate degree</option>
                </select>
            </div>
        </div>
            
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="unAccDetail">University acceptance detail<label for="unAccDetail_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="unAccDetail_upload" name="unAccDetail_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Provide detail on the credential, such as the study area and specialty."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="unAccDetail" name="unAccDetail" maxlength="256"/>
                
                 <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
        </div>
        </div>
             <div class="form-group resultform sortable">
                
                
            </div>
            </div>

        
         </div>
    
         <div class="arrayFields"> 
             <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="otherScores" ng-model="otherScores"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="otherScores" class="fixPlace">Other Scores</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="otherScores">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="test">Other scores test <label for="test_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="test_upload" name="test_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the official name of the test or exam."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="test" name="test" maxlength="256"/>
            </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="testDate">Test date <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date of the test."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="testDate" name="testDate">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="score">Score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the final score."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="number" class="form-control" value="" id="score" name="score"> 
            </div>
        </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="percentile">Percentile <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the percentile associated with the score."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="75" min="0" max="100" id="percentile" name="percentile">
                    <span class="range-slider__value pull-right">75</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="credentialEarned">Credential earned <label for="credentialEarned_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="credentialEarned_upload" name="credentialEarned_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the credential earned, right gained, designation, or other outcome.  For example, 'Ability to practice law in California', 'Project Management Professional', 'Chartered Accountant designation'."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="text" class="form-control" id="credentialEarned" name="credentialEarned" maxlength="256"/>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
             <div class="form-group resultform sortable">
                
                
            </div>
            </div>
             
         </div>
        
        

    </div>

    <div class="col-sm-12">
        <h4 class="grouping-txt text-center" style="">Formal Education Standardized Testing</h4>
    </div>

    <div class="col-md-4">
        <div class="arrayFields">  
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="americanCollege" ng-model="americanCollege"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="americanCollege" class="fixPlace">American College Scores</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="americanCollege">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="englishScore">American college english score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="18" min="1" max="36" id="englishScore" name="englishScore">
                    <span class="range-slider__value pull-right">18</span>
                </div>
                
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="mathScore">American college math score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="18" min="1" max="36" id="mathScore" name="mathScore">
                    <span class="range-slider__value pull-right">18</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="readingScore">American college reading score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="18" min="1" max="36" id="readingScore" name="readingScore">
                    <span class="range-slider__value pull-right">18</span>
                </div>
               
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="scienceScore">American college science score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="18" min="1" max="36" id="scienceScore" name="scienceScore">
                    <span class="range-slider__value pull-right">18</span>
                </div>
               
               
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="writingTestScore">American College writing test score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="18" min="0" max="36" id="writingTestScore" name="writingTestScore">
                    <span class="range-slider__value pull-right">18</span>
                </div>
               
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="compositeScore">American College Composite Score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="18" min="1" max="36" id="compositeScore" name="compositeScore">
                    <span class="range-slider__value pull-right">18</span>
                </div>
               
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="americanTestDateTaken">Test date taken <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the date the test was written."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="americanTestDateTaken" name="americanTestDateTaken">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>
        
        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="scholasticAptitude" ng-model="scholasticAptitude"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="scholasticAptitude" class="fixPlace">SAT Scores</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="scholasticAptitude">
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="SATCRScore">Scholastic aptitude critical reading score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="500" min="200" max="800" step="10" id="SATCRScore" name="SATCRScore">
                    <span class="range-slider__value pull-right">500</span>
                </div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="SATMathScore">Scholastic aptitude math score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="500" min="200" max="800" step="10" id="SATMathScore" name="SATMathScore">
                    <span class="range-slider__value pull-right">500</span>
                </div>
               
            </div>
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="SATWritingScore">Scholastic aptitude writing test score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="16" min="0" max="24" id="SATWritingScore" name="SATWritingScore">
                    <span class="range-slider__value pull-right">500</span>
                </div>
               
                
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="SATtotalScore">Scholastic aptitude total score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="This number is calculated based on the values you entered."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="number" class="form-control" id="SATtotalScore" name="SATtotalScore">
            </div>
            </div>
        </div>
            
            <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="SATpercentile">Scholastic aptitude overall percentile <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="75" min="0" max="100" id="SATpercentile" name="SATpercentile">
                    <span class="range-slider__value pull-right">75</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="SATdateTaken">Test date taken <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="SATdateTaken" name="SATdateTaken">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>
        
        
        
        
    </div>

    <div class="col-md-4">
              
        <div class="arrayFields"> 
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="lawSchool" ng-model="lawSchool"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="lawSchool" class="fixPlace">LSAT Scores</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="lawSchool">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="LSATScore">Law school admission score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="150" min="120" max="180" id="LSATScore" name="LSATScore">
                    <span class="range-slider__value pull-right">150</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="LSATPercentile">Law school admission percentile <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="75" min="0" max="100" id="LSATPercentile" name="LSATPercentile">
                    <span class="range-slider__value pull-right">75</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="LSATdateTaken">Test date taken <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="LSATdateTaken" name="LSATdateTaken">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        </div>
        
        <div class="arrayFields">
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="graduateManagement" ng-model="graduateManagement"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="graduateManagement" class="fixPlace">GMAT Scores</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="graduateManagement">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATQuantScore">Graduate management quantitative score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="45" min="0" max="60" id="GMATQuantScore" name="GMATQuantScore">
                    <span class="range-slider__value pull-right">45</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATVerbalScore">Graduate management verbal score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="45" min="0" max="60" id="GMATVerbalScore" name="GMATVerbalScore">
                    <span class="range-slider__value pull-right">45</span>
                </div>
                
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATReasoningScore">Graduate management integrated reasoning score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="6" min="1" max="8" id="GMATReasoningScore" name="GMATReasoningScore">
                    <span class="range-slider__value pull-right">6</span>
                </div>
                
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATAWA">Graduate management analytical writing assessment <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="5.0" min="0.0" max="6.0" step="0.5" id="GMATAWA" name="GMATAWA">
                    <span class="range-slider__value pull-right">5.0</span>
                </div>
                
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATtotalScore">Graduate management total score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="540" min="200" max="800" step="10" id="GMATtotalScore" name="GMATtotalScore">
                    <span class="range-slider__value pull-right">540</span>
                </div>
            </div>
        </div>
        </div>
            
            
        
        <div class="form-group">
            
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATpercentile">Graduate management overall percentile <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="75" min="0" max="100" id="GMATpercentile" name="percentile">
                    <span class="range-slider__value pull-right">75</span>
                </div>
            </div>
        </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="GMATdateTaken">Test date taken <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="GMATdateTaken">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
        
        
    </div>
    </div>

    <div class="col-md-4">
        
        
        <div class="arrayFields">  
            <!-- Array Head -->
            <div class="row arrayHead">
                <div class="col-xs-2">
                    <switch name="medicalCollege" ng-model="medicalCollege"></switch>
                </div>
                <div class="col-xs-10 text-right">
                    <span ng-hide="medicalCollege" class="fixPlace">MCAT Scores</span>
                </div>
            </div>
            <!-- Array Head -->
            
            <!-- Array Body -->
            <div class="arrayBody" ng-show="medicalCollege">
            <div class="form-group">
                <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="chemPhyScore">Medical college chemistry and physics score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="80" min="18" max="132" step="10" id="chemPhyScore" name="chemPhyScore">
                    <span class="range-slider__value pull-right">80</span>
                </div>
            </div>
                </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="bioScore">Medical college biology/biochemistry score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="80" min="18" max="132" step="10" id="bioScore" name="bioScore">
                    <span class="range-slider__value pull-right">80</span>
                </div>
              
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="critScore">Medical college critical analysis and reasoning score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="80" min="18" max="132" step="10" id="critScore" name="critScore">
                    <span class="range-slider__value pull-right">80</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="psychScore">Medical college social sciences score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="80" min="18" max="132" step="10" id="psychScore" name="psychScore">
                    <span class="range-slider__value pull-right">80</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="totalScore">Medical College Total Score <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="This number is calculated based on the values you entered."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <input type="number" class="form-control" id="totalScore" name="MCtotalScore">
            </div>
            </div>
        </div>
        
        
        
        
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="MCpercentile">Medical college overall percentile <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="75" min="0" max="100" id="MCpercentile" name="MCpercentile">
                    <span class="range-slider__value pull-right">75</span>
                </div>
            </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">
                <label class="custom-display" for="MCdateTaken">Test date taken <a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the number exactly as shown on test result."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <div class="input-group date">

                    <input type="text" class="form-control pull-left datepicker" id="MCdateTaken" name="MCdateTaken">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                 <a class="add greenBtn pull-right"><i class="fa fa-2x fa-plus-circle"></i></a>
            </div>
            </div>
        </div>
            <div class="form-group resultform sortable">
                
                
            </div>
            </div>
            
        </div>
        
        
    </div>

    <!-- End of Col 3 -->
    
    <div class="col-md-12">
        <div class="form-group">
            <div class="row">
            <div class="col-sm-12">

                <label class="custom-display" for="memoir">Memoir <label for="memoir_upload" class="custom-file-upload">
                        <i class="fa fa-arrow-circle-up"  data-placement="top" data-title="Upload"></i>
                    </label><input type="file" id="memoir_upload" name="memoir_upload"/><a href="" class="tooltip-help_custom pull-right"  data-placement="top" data-title="Enter the wisdom obtained in this area that is legacy to others."><i class="fa fa-info-circle"></i></a></label>
            </div>
            <div class="col-sm-12 noPadding">
                <textarea class="form-control" id="memoir" name="memoir" rows="5"></textarea>
            </div>
        </div>
            </div>
    </div>    
    <div class="col-md-12 text-center">
         
        <button type="button" class="btn custombtn pull-right" ng-disabled="early_details.$invalid">Save</button>
    </div>
</form>


<script type="text/javascript">
 
jQuery(function () 
 {
	
          jQuery("#coCity").autocomplete({
		source: function (request, response) {
		 jQuery.getJSON(
			"http://gd.geobytes.com/AutoCompleteCity?callback=?&q="+request.term,
			function (data) {
			 response(data);
			}
		 );
		},
		minLength: 3,
		select: function (event, ui) {
		 var selectedObj = ui.item;
		 jQuery("#coCity").val(selectedObj.value);
		getcitydetails(selectedObj.value);
		 return false;
		},
		open: function () {
		 jQuery(this).removeClass("ui-corner-all").addClass("ui-corner-top");
		},
		close: function () {
		 jQuery(this).removeClass("ui-corner-top").addClass("ui-corner-all");
		}
	 });
	 jQuery("#coCity").autocomplete("option", "delay", 100);
        
        
          jQuery("#unCity").autocomplete({
		source: function (request, response) {
		 jQuery.getJSON(
			"http://gd.geobytes.com/AutoCompleteCity?callback=?&q="+request.term,
			function (data) {
			 response(data);
			}
		 );
		},
		minLength: 3,
		select: function (event, ui) {
		 var selectedObj = ui.item;
		 jQuery("#unCity").val(selectedObj.value);
		getcitydetails(selectedObj.value);
		 return false;
		},
		open: function () {
		 jQuery(this).removeClass("ui-corner-all").addClass("ui-corner-top");
		},
		close: function () {
		 jQuery(this).removeClass("ui-corner-top").addClass("ui-corner-all");
		}
	 });
	 jQuery("#unCity").autocomplete("option", "delay", 100);
         
         $(".ff_elem").autocomplete({
    select: function(event, ui) {
        var origEvent = event;
        while (origEvent.originalEvent !== undefined)
            origEvent = origEvent.originalEvent;
        if (origEvent.type == 'keydown')
            $(".ff_elem").click();
    },
   
});
         
	});
</script>