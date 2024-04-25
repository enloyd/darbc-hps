<?php 
	if (!isset($_SESSION['USERID'])){
    	redirect(web_root."admin/index.php");
    } 
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Lot Mapping  <a href="index.php?view=location" class="btn btn-primary btn-xs  ">  <!--<i class="fa fa-plus-circle fw-fa"></i>--> Location</a>
        <span style="margin-left: -6px;"></span> <!-- Small space -->
        <a href="index.php?view=block" class="btn btn-primary btn-xs  ">  <!--<i class="fa fa-plus-circle fw-fa"></i>--> Block</a>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<form action="index.php" method="post">
    <div class="row">
        <div class="col-lg-8" style="margin:-10px 100px 10px 0px;padding: 0px;float:right;">
            <div class="col-sm-4">
                <label>Location:</label>
                <select class="form-control " name="LOCATION" id="LOCATION" style="width: 100%;">
                    <option value="">All Locations</option>
                    <?php
                    $query = "SELECT * FROM   `tbllocation` ORDER BY LOCATION ASC";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                        echo '<option value="' . $result->LOCATION . '">' . $result->LOCATION . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-2">
                <label>Block:</label>
                <select class="form-control " name="SECTION" id="SECTION" style="width: 100%;">
                    <option value="">All Blocks</option>
                    <?php
                    $query = "SELECT * FROM   `tblcategory` ORDER BY CATEGORIES ASC";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $result) {
                        echo '<option value="' . $result->CATEGORIES . '">' . $result->CATEGORIES . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-2">
                <div class="  input-group" style="margin-top:25px;">  
                    <button class="btn btn-primary btn-sm" name="submit" type="submit" >Search <i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</form>  
<div class="row">
    <div class="col-lg-12">
        <!-- Add this above the table -->
        <h4>Location: <?php echo isset($_POST['LOCATION']) ? $_POST['LOCATION'] : 'All Locations'; ?></h4>
        <h4>Block: <?php echo isset($_POST['SECTION']) ? $_POST['SECTION'] : 'All Blocks'; ?></h4>
    </div>
</div>
<form>
    <table id=""  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0" >
        <thead>
            <tr>
                <th>Lot No.</th> 
                <th>Name of Beneficiary</th> 
                <th>Block</th>   
                <th>Location</th>  
            </tr>   
        </thead> 
        <tbody>
            <?php  
            $location = isset($_POST['LOCATION']) ? $_POST['LOCATION']  :""; 
            $section = isset($_POST['SECTION']) ? $_POST['SECTION']  :"";

            $query = "SELECT * FROM `tblpeople` WHERE LOCATION ='{$location}'  AND CATEGORIES='{$section}'";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {  

                $borndate =   $result->BORNDATE;
                $dieddate =   $result->DIEDDATE; 

                echo '<tr>';
                echo '<td width="8%" align="center">'. $result->GRAVENO.'</td>';  
                echo '<td> '.$result->FNAME.'</td>';
                echo '<td>'. $result->CATEGORIES.'</td>'; 
                echo '<td>'. $result->LOCATION.'</td>'; 
                echo '</tr>';
            } 
            ?>
        </tbody>
    </table>
</div>
</div>	 
</form>
