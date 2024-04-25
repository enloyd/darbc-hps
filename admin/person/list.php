<?php
    check_message(); 
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List of Beneficiary  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a>  </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<form action="controller.php?action=delete" method="POST">  
    <div class="table-responsive">				
        <table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0" >

            <thead>
                <tr>
                    <th>Lot no.</th> 
                    <th>Name of the Beneficiary</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Contact Number</th>
					<th>Joined</th>  
                    <th>Block</th>   
                    <th>Location</th>  
                    
                </tr>	
            </thead> 

            <tbody>
                <?php  
                    $query = "SELECT * FROM `tblpeople`";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) { 
                        $borndate = $result->BORNDATE;
                        $dieddate = $result->DIEDDATE;

                        echo '<tr>';
                        echo '<td width="1%" align="center"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->PEOPLEID. '"/>'. $result->GRAVENO.'</td>'; 
                        echo '<td><a title="edit" href="'.web_root.'admin/person/index.php?view=edit&id='.$result->PEOPLEID.'"><i class="fa fa-pencil "></i>'.$result->FNAME.'</a></td>';
                        echo '<td>'. $borndate.'</td>'; 
                        echo '<td>'. $result->AGE.'</td>';
                        echo '<td>'. $result->ADDRESS.'</td>';
                        echo '<td>'. $result->CONTACT_NUMBER.'</td>';
						echo '<td>'. $dieddate.'</td>';
                        echo '<td>'. $result->CATEGORIES.'</td>'; 
                        echo '<td>'. $result->LOCATION.'</td>';
                        
                        echo '</tr>';
                    } 
                ?>
            </tbody>
        </table>

        <div class="btn-group">
            <button type="submit" class="btn btn-default" name="delete"><i class="fa fa-trash fw-fa"></i> Delete Selected</button>
        </div>
    </div>
</form>

<div class="modal fade" id="productmodal" tabindex="-1">
    <!-- ... existing modal code ... -->
</div>


