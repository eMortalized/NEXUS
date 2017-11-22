<?php include '../inc/connect.php'; ?>

<!-- Mid Section -->
<div class="col-sm-12 nopadding" ng-controller="searchController"  >

    <div class="midsec scroll">
        <div class="container">

            <div class="row">
                <div class="col-sm-9">
                    <div class="mainsearch">
                        <div class="col-sm-12">
                            <h2 class="searchtxt">Search</h2><br>
                            <br>
                        </div>

                        <div class="row">

                            <div class="col-sm-7 col-sm-offset-2">

                                <input type="text" class="  search-query form-control" placeholder="Search" /></div>
                            <div class="col-sm-2">
                                <a href="" class="txt-send"><span>Search</span></a>

                            </div>
                            <div class="col-sm-12">



                            </div>
                        </div>
                        <br>




                        <div class="row"> 

                            <div class="col-sm-12">

                                <h4>&nbsp;&nbsp;&nbsp;Search Fields</h4><br>


                            </div>
                            <br>
                            <div class="col-sm-3 col-sm-offset-2 "><select class="form-control
                                                                           ">
                                    <option>First Name</option>
                                    <option>Date of Birth
                                    </option>

                                </select></div>

                            <div class="col-sm-3"><select class="form-control">
                                    <option>=</option>
                                    <option><=</option>
                                    <option>>=</option>

                                </select></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>true</option>
                                    <option>false</option>

                                </select></div>

                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-sm-2 text-right
                                 "><span class="andmove">and</span></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>ABOUT ME VARIABLE</option>
                                    <option></option>

                                </select></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>OPERATER</option>
                                    <option>Single</option>

                                </select></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>VALUE</option>
                                    <option></option>

                                </select></div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-2 text-right
                                 "><span class="andmove">and</span></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>ABOUT ME VARIABLE</option>
                                    <option></option>

                                </select></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>OPERATER</option>
                                    <option></option>

                                </select></div>
                            <div class="col-sm-3"><select class="form-control">
                                    <option>VALUE</option>
                                    <option></option>

                                </select></div>
                        </div>

                        <div  class="row">
                            <div class="col-sm-11">


                                <a class="add greenBtn pull-right" tabindex="-1"><i class="fa fa-2x fa-plus-circle"></i></a>


                            </div>
                        </div>
                        <div  class="row">
                            <div class="col-sm-11  text-right">
                                <button type="button" class="btn btn-secondary ">Search</button>&nbsp;
                                <button type="button" class="btn btn-secondary ">Clear</button>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-12">

                                <h3 class="searchtxt" >Search Result</h3><br>
                                <br>

                            </div>
                            <div class="col-sm-9">
                                <table class="ursTable">
                                    <tr>
                                        <td rowspan="2"><img class="mainimgshadow"  src="img/avatar1.jpg"></td>
                                        <td ><h4 class="movetext">John Doe</h4></td>
                                    </tr>
                                    <tr>
                                        <td >

                                            <h5 class="movetext">Ux Designer</h5>
                                            <h6 class="movetext">india</h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <i class="fa fa-add"></i>Connect</button></div>
                        </div>

                        <br>	
                        <div class="pad"></div>
                        <br>

                        <div class="row">

                            <div class="col-sm-9">
                                <table class="ursTable">
                                    <tr>
                                        <td rowspan="2"><img class="mainimgshadow"  src="img/avatar2.jpg"></td>
                                        <td ><h4 class="movetext">Lana</h4></td>
                                    </tr>
                                    <tr>
                                        <td >

                                            <h5 class="movetext">Web Designer</h5>
                                            <h6 class="movetext">Usa</h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-3">
                                <button type="button" class="btn btn-primary pull-right "><i class="fa fa-add"></i><i class="fa fa-plus-circle" aria-hidden="true"></i> Connect</button></div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End of Mid Section -->


    <span class="sm-media"></span>
