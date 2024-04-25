<?php  

    if (!isset($_SESSION['USERID'])){
      redirect(web_root."index.php");
     }


  $peopleid = $_GET['id'];
  $person = New Person();
  $p = $person->single_people($peopleid);

?>
  
        
        <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Update Person</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>
       <form class="form-horizontal span6" action="controller.php?action=edit" method="POST"  />
 
                <div class="row"> 

               
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "GRAVENO">Lot number:</label>

                      <div class="col-md-8">
                            <input type="hidden" name="PEOPLEID" value="<?php echo $p->PEOPLEID;?>">
                            <input class="form-control input-sm" id="GRAVENO" name="GRAVENO" placeholder=
                            "Grave Number" type="text" value="<?php echo $p->GRAVENO ?>">
                      </div>
                    </div>
                  </div> 

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">Full Name:</label>

                      <div class="col-md-8">
                            <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "Full Name" type="text" value="<?php echo $p->FNAME ?>">
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="BORNDATE">Date of Birth:</label>
                        <div class="col-md-8">
                            <div class="input-group" id="">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id="datemask2" name="BORNDATE" value="<?php echo $p->BORNDATE ?>" type="text" class="form-control input-sm datemask2" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask onchange="calculateAge(this.value)">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="AGE">Age:</label>
                        <div class="col-md-8">
                            <input class="form-control input-sm" id="AGE" name="AGE" placeholder="Age" type="text" value="<?php echo $p->AGE ?>">
                        </div>
                    </div>
                </div>


              <div class="form-group">
                  <div class="col-md-8">
                      <label class="col-md-4 control-label" for="ADDRESS">Address:</label>
                      <div class="col-md-8">
                          <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder="Address" type="text" value="<?php echo $p->ADDRESS ?>">
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-8">
                      <label class="col-md-4 control-label" for="CONTACT_NUMBER">Contact Number:</label>
                      <div class="col-md-8">
                          <input class="form-control input-sm" id="CONTACT_NUMBER" name="CONTACT_NUMBER" placeholder="Contact Number" type="text" value="<?php echo $p->CONTACT_NUMBER ?>">
                      </div>
                  </div>
              </div>

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DIEDDATE">Joined:</label>

                      <div class="col-md-8">
                       <div class="input-group" id=""> 
                          <div class="input-group-addon"> 
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input id="datemask2" name="DIEDDATE"  value="<?php echo $p->DIEDDATE ?>" type="text" class="form-control input-sm datemask2"   data-inputmask="'alias': 'mm/dd/yyyy'" data-mask >
                        </div>
                      </div>
                    </div>
                  </div>

               <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Middle Name:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Middle Name" type="text" value="<?php echo $p->MNAME ?>">
                      </div>
                    </div>
                  </div>

               <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                             <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value="<?php echo $p->LNAME ?>">
                      </div>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORIES">Block:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="CATEGORIES" id="CATEGORIES">
                          <option value="None">Select Block</option>

                            <?php
                            //Statement
 

                           $mydb->setQuery("SELECT * FROM `tblcategory` where CATEGORIES = '".$p->CATEGORIES."'");
                          $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          echo  '<option SELECTED  value='.$result->CATEGORIES.' >'.$result->CATEGORIES.'</option>';
                          }


                          $mydb->setQuery("SELECT * FROM `tblcategory` where CATEGORIES != '".$p->CATEGORIES."'");
                          $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          echo  '<option  value='.$result->CATEGORIES.' >'.$result->CATEGORIES.'</option>';
                          }
                          ?>
                         
          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LOCATION">Location:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="LOCATION" id="LOCATION">
                          <option value="None">Select Location</option>

                            <?php
                            //Statement
 

                           $mydb->setQuery("SELECT * FROM `tbllocation` where LOCATION = '".$p->LOCATION."'");
                          $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          echo  '<option SELECTED  value='.$result->LOCATION.' >'.$result->LOCATION.'</option>';
                          }


                          $mydb->setQuery("SELECT * FROM `tbllocation` where LOCATION != '".$p->LOCATION."'");
                          $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          echo  '<option  value='.$result->LOCATION.' >'.$result->LOCATION.'</option>';
                          }
                          ?>
                         
          
                        </select> 
                      </div>
                    </div>
                  </div>
             
                   
                  
             <div class="form-group">
                    <div class="col-md-8"> 
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                               <button class="btn  btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span> Save</button>
                  </div>
                    </div>
                  </div> 
            
 
            </div>
 
  
      
<!--/.fluid-container--> 
 </form>

 <script>
    function calculateAge(birthdate) {
        var dob = new Date(birthdate);
        var today = new Date();

        var age = today.getFullYear() - dob.getFullYear();

        if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today.getDate() < dob.getDate())) {
            age--;
        }

        document.getElementById("AGE").value = age;
    }
</script>
