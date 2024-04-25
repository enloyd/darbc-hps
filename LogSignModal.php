 <!-- sign up modal -->
 <div class="modal fade" id="smyModal" tabindex="-1">
 
 <div class="modal-dialog"  style="width:55%">
  <div class="modal-content">
    <div class="modal-header">
      <button class="close" data-dismiss="modal" type=
      "button">×</button> 
      <div class="modal-body">
         
              <!-- Nav tabs -->

              <ul class="nav nav-pills">
                  <li class="active"><a href="#home" data-toggle="tab">Login</a>
                  </li>
                  <li><a href="#profile" data-toggle="tab">Sign Up</a>
                  </li>
                  
              </ul>

              <!-- Tab panes  login panel-->
              <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                      <!-- <h4>Login Tab</h4>  -->
                       <div class="panel panel-primary">
                        <div class="panel-heading">
                            Login Details
                        </div>
                        <div class="panel-body">

                           <form class="form-horizontal span6" name=""  action="login.php" method="POST">
                              <input class="proid" type="hidden" name="proid" id="proid" value="">
                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_USERNAME">Username:</label>
                                    
                                    <div class="col-md-8">
                                       <input   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input-sm" > 
                             
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_PASS">Password:</label>
                                    
                                    <div class="col-md-8">
                                     <input name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input-sm">
                            
                                    </div>
                                  </div>
                                </div>

                                  <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "FIRSTNAME"> </label>
                                    
                                    <div class="col-md-8">
                                    <button type="submit" id="modalLogin" name="modalLogin" class="btn btn-primary"><span class="glyphicon glyphicon-log-in "></span>   Login</button> 
                                     <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
                                    </div>
                                  </div>
                                </div>

 
                            </form>

                       </div>
                        <div class="panel-footer">
                            <p align="left">&copy; Dolefil Agrarian Reform Beneficiaries Cooperative</p>
                        </div> 
                    </div> 
                  </div>
                  <!-- end login panel -->

                  <!-- sign in panel -->
                  <div class="tab-pane fade" id="profile">
                      <!-- <h4>Customer Details</h4>  --> 

                           <form  class="form-horizontal span6" action="customer/controller.php?action=add" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                       Customer Details
                                    </div>
                                     <div class="panel-body">
                                      <input class="proid" type="hidden" name="proid" id="proid" value="">
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "FULLNAME">Name:</label>
                                          <!-- <input  id="CUSTOMERID" name="CUSTOMERID"  type="HIDDEN" value="<?php echo $res->AUTO; ?>">  -->
                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="FULLNAME" name="FULLNAME" placeholder=
                                                "Full Name" type="text" value="">
                                          </div>
                                        </div>
                                      </div>

                                       <div class="form-group">
                                            <div class="col-md-10">
                                              <label class="col-md-4 control-label" for=
                                              "ADDRESS">Address:</label>

                                              <div class="col-md-8">
                                                <textarea  class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                                                    "Address" ></textarea> 
                                              </div>
                                            </div>
                                          </div>

                                     <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "CONTACTNO">Contact Number:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="CONTACTNO" name="CONTACTNO" placeholder=
                                                "Contact Number" type="text" value="">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "EMAILADDRESS">Email:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder=
                                                "Email Address Number" type="text" value="">
                                          </div>
                                        </div>
                                      </div>


                                       <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "CUSUNAME">Username:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="CUSUNAME" name="CUSUNAME" placeholder=
                                                "Username" type="text" value="">
                                          </div>
                                        </div>
                                      </div> 
                                      
                                       <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "CUSPASS">Password:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="CUSPASS" name="CUSPASS" placeholder=
                                                "Password" type="password" value=""><span></span>
                                          </div>
                                        </div>
                                      </div>

                                     <!--  <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "PASS"></label>

                                          <div class="col-md-8">
                                          <p>Note</p>
                                            Password must be atleast 8 to 15 characters. Only letter, numeric digits, underscore and first character must be a letter.
                                         </div> 
                                        </div>
                                      </div>  -->
 
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4" align = "right"for=
                                          "image">Upload Image:</label>

                                          <div class="col-md-8">
                                          <input type="file" name="image" value="" id="image"/>
                                          </div>
                                        </div>
                                      </div>
                                      
                                       <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8">
                                        <p>  I <input type="checkbox" id="conditionterms" name="conditionterms" value="checkbox" />
                                           <small>Agree with the <a class="toggle-modal"  onclick=" OpenPopupCenter('terms.php','Terms And Codition','600','600')"  ><b>TERMS AND CONDITION</b></a> of GC Appliance Centrum.</small>
                                           
                                          </div>
                                        </div>
                                      </div> 

                                      <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8">
                                            <input type="submit"  name="submit"  value="Sign Up"  class="submit btn btn-primary"  />
                                             <button class="btn btn-default" data-dismiss="modal" type=
                                                "button">Close</button> 
                                          </div>
                                        </div>
                                      </div> 

                                        

                                     </div>
                                    <div class="panel-footer">
                                        <p align="left">&copy; Southern Negros Printhaus</p>
                                    </div> 
                            </div> 
                            <!-- end panel sign up -->
                        </form>  
                   </div> 
              </div>
         
              
          </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div>
  </div>
<!-- end sign up modal -->





<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>