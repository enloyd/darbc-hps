<?php
require_once("../../include/initialize.php");
  if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Print Report</title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

  
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
 
  

<body onload="window.print()">
 
<div id="wrapper">

<span id="printout">
  <div class="col-md-12">
  <div style="text-align: center;font-size: 16px;">Dolefil Agrarian Reform Beneficiaries Cooperative</div>
  <div style="text-align: center;font-size: 14px;">Complex Bldg, Bgy.Cannery Site, Polomolok South Cotabato 9504, Philippines.</div>
  <div style="text-align: center;font-size: 20px">List of Beneficiaries</div>
  <div style="text-align: center;font-size: 12px;"><?php echo isset($_POST['TYPES']) ? $_POST['TYPES']:"";  ?></div> 
  <div style="text-align: center;font-size: 12px;"><?php echo isset($_POST['LOCATION']) ? "Lot of: ".$_POST['LOCATION']  :"";  ?>  </div> 
  <div style="text-align: center;font-size: 12px;"><?php echo isset($_POST['SECTION']) ? "Block: ".$_POST['SECTION']  :"";  ?>  </div> 
     
<form class="" method="POST" action="printreport.php" target="_blank">
   
 <table id="dash-table"  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0" >
          
          <thead>
            <tr>
              <th>Lot #</th> 
              <th>Name of Beneficiaries</td>
              <th>Date of Birth</th>
              <th>Age</th>
              <th>Address</th>
              <th>Contact number</th>
              <th>Joined</th>  
              <th>Section</th>   
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
  </div> 
  </span>
   
</div>
    <!-- /#wrapper -->
 
      
 


  <!-- jQuery -->
  <script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

    
 
</body>
<footer><div style="text-align: left;margin-left: 1%;">Copyrignt &copy; Dolefil Agrarian Reform Beneficiaries Cooperative</div></footer>
</html>