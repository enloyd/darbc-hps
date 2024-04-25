<style type="text/css">
/* Set a fixed width for the table */
.grave {
    font-size: 25px;
    width: 0%;
    margin: 0;
    padding: 0;
    text-align: center;
    border-collapse: collapse;
    table-layout: fixed; /* Ensure equal width for all cells */
}

/* Set a fixed width for each cell */
.grave tr td {
    width: 50px; /* Adjust this value as needed */
    height: 50px; /* Adjust this value as needed */
    border-width: 2px;
    border-style: solid;
    border-color: #ddd;
    border-radius: 3px;
    padding: 5px; /* Add padding to the cells */
    box-sizing: border-box; /* Include padding in the width calculation */
}

/* Style for the background color */
.gravebg {
    background-color: #fff;
    color: #000;
}

/* Style for the highlighted cells */
.fill {
    background-color: #f66c7c;
    color: #fff;
}

</style>

<?php 
function retrieveData_ASC_Horizontal_A($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 1
function retrieveData_ASC_block1($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='1' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 2
function retrieveData_ASC_block2($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='2' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 3
function retrieveData_ASC_block3($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='3' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 4
function retrieveData_ASC_block4($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='4' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 5
function retrieveData_ASC_block5($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='5' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 6
function retrieveData_ASC_block6($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='6' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
//BLOCK 7
function retrieveData_ASC_block7($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='7' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO ASC";
	loadDatas_A_Buenavista($sql);
}
function retrieveData_DESC_Horizontal_A($gravenofrom=0,$gravenoto=0){
	$sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='VILLAGE 8'   AND GRAVENO >= {$gravenofrom} AND GRAVENO <= {$gravenoto} GROUP BY GRAVENO ORDER BY GRAVENO DESC";
	loadDatas_A_Buenavista($sql);
}
  
// section A second row
function sectionA_firstrow(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=1,$gravenoto=4);

		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 97 , 4";
	 // 	loadDatas_A_Buenavista($sql);
}

function sectionA_firstrow_secondcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=5,$gravenoto=9);
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 94 , 3";
	 // 	loadDatas_A_Buenavista($sql);
}

function sectionA_firstrow_thirdcolumn(){
	//retrieveData_DESC_Horizontal_A($gravenofrom=10,$gravenoto=15); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 88 , 6";
	 // 	loadDatas_A_Buenavista($sql);
}

// end section A first row

// section A second row
function sectionA_secondrow_firstcolumn(){ 
		//retrieveData_DESC_Horizontal_A($gravenofrom=16,$gravenoto=21); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 82, 6";
	 // 	loadDatas_A_Buenavista($sql);
}


function sectionA_secondrow_secondcolumn(){ 
		//retrieveData_DESC_Horizontal_A($gravenofrom=22,$gravenoto=23); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 80, 2";
	 // 	loadDatas_A_Buenavista($sql);
}

function sectionA_secondrow_thirdcolumn(){ 
		//retrieveData_DESC_Horizontal_A($gravenofrom=24,$gravenoto=31); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 72, 8";
	 // 	loadDatas_A_Buenavista($sql);
}

// end section A Second row

// section A third row
function sectionA_thirdrow_firstcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=32,$gravenoto=32); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 71, 1";
	 // 	loadDatas_A_Buenavista($sql);
}
// end section A third row

// section A forth row
function sectionA_forthrow_firstcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=33,$gravenoto=35); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 68, 3";
	 // 	loadDatas_A_Buenavista($sql);
}
function sectionA_forthrow_secondcolumn(){ 
//retrieveData_DESC_Horizontal_A($gravenofrom=101,$gravenoto=101); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO ASC LIMIT 68,1";
	 // 	loadDatas_A_Buenavista($sql);
}
// end forth row
function sectionA_fifthrow_firstcolumn(){ 
	//retrieveData_ASC_Horizontal_A($gravenofrom=1,$gravenoto=1);
	//retrieveData_ASC_Horizontal_A($gravenofrom=2,$gravenoto=2);
	//retrieveData_ASC_Horizontal_A($gravenofrom=3,$gravenoto=3); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 60, 8";
		// loadDatas_A_Buenavista($sql);
} 

function sectionA_fifthrow_thirdcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=44,$gravenoto=47); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 56, 4";
	 // 	loadDatas_A_Buenavista($sql);
} 

// end section a fifth
// section a six row
function sectionA_sixthrow_secondcolumn(){
	retrieveData_ASC_Horizontal_A($gravenofrom=1,$gravenoto=1);
	retrieveData_ASC_Horizontal_A($gravenofrom=2,$gravenoto=2);
	retrieveData_ASC_Horizontal_A($gravenofrom=3,$gravenoto=3);
}
function sectionA_sixthrow_firstcolumn(){ 
	retrieveData_ASC_block7($gravenofrom=1,$gravenoto=1);
	retrieveData_ASC_block7($gravenofrom=2,$gravenoto=2);
	retrieveData_ASC_block7($gravenofrom=3,$gravenoto=3);
	//retrieveData_DESC_Horizontal_A($gravenofrom=48,$gravenoto=58); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 41, 15";
	 // 	loadDatas_A_Buenavista($sql);
} 
// end section a six row
// section a seven row 
function sectionA_seventhrow_fifthcolumn(){
	//retrieveData_ASC_Horizontal_A($gravenofrom=1,$gravenoto=1);
	//retrieveData_ASC_Horizontal_A($gravenofrom=2,$gravenoto=2);
	//retrieveData_ASC_Horizontal_A($gravenofrom=3,$gravenoto=3);
 }
function sectionA_seventhrow_fourthcolumn(){
	//BLOCK 6
	retrieveData_ASC_block6($gravenofrom=1,$gravenoto=3);
	retrieveData_ASC_block6($gravenofrom=4,$gravenoto=5);
	//echo '<i class="fas fa-home"></i> BLOCK 6';
	
 }

function sectionA_seventhrow_thirdcolumn(){
	//BLOCK 5
	retrieveData_ASC_block5($gravenofrom=1,$gravenoto=5);
	retrieveData_ASC_block5($gravenofrom=6,$gravenoto=10);
 }

function sectionA_seventhrow_secondcolumn(){ 
	//BLOCK 4
	retrieveData_ASC_block4($gravenofrom=1,$gravenoto=2);
	retrieveData_ASC_block4($gravenofrom=3,$gravenoto=4);
	retrieveData_ASC_block4($gravenofrom=5,$gravenoto=6);
	retrieveData_ASC_block4($gravenofrom=7,$gravenoto=8); 
	retrieveData_ASC_block4($gravenofrom=9,$gravenoto=10);
	retrieveData_ASC_block4($gravenofrom=11,$gravenoto=12); 
}
function sectionA_seventhrow_firstcolumn(){ 
	//BLOCK 3
	retrieveData_ASC_block3($gravenofrom=1,$gravenoto=2);
	retrieveData_ASC_block3($gravenofrom=3,$gravenoto=4);
	retrieveData_ASC_block3($gravenofrom=5,$gravenoto=6);
	retrieveData_ASC_block3($gravenofrom=7,$gravenoto=8); 
	retrieveData_ASC_block3($gravenofrom=9,$gravenoto=10);
	retrieveData_ASC_block3($gravenofrom=11,$gravenoto=12); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 36, 15";
	 // 	loadDatas_A_Buenavista($sql);
}
// end section a seven row
// section a eight row 
function sectionA_eightrow_firstcolumn(){
	//BLOCK 2
	retrieveData_ASC_block2($gravenofrom=1,$gravenoto=20); 
	retrieveData_ASC_block2($gravenofrom=21,$gravenoto=40); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 21, 15"; 
	 // 	loadDatas_A_Buenavista($sql);
}
// end section a eight row
// section a nine row 
function sectionA_ninerow_firstcolumn(){ 
	//retrieveData_ASC_Horizontal_A($gravenofrom=1,$gravenoto=20); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 10, 11"; 
	 // 	loadDatas_A_Buenavista($sql);
} 
// end section a nine row
// section a ten row 
function sectionA_tenrow_firstcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=92,$gravenoto=95); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 6, 4"; 
	 // 	loadDatas_A_Buenavista($sql); 
}
function sectionA_tenrow_secondcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=96,$gravenoto=96); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 5, 1"; 
	 // 	loadDatas_A_Buenavista($sql);
}
// end section a ten row
// section a eleven row 
function sectionA_elevenrow_firstcolumn(){ 
	//retrieveData_DESC_Horizontal_A($gravenofrom=95,$gravenoto=100); 
		// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO DESC LIMIT 3, 4"; 
	 // 	loadDatas_A_Buenavista($sql);
}
function sectionA_elevenrow_secondcolumn(){
	//BLOCK 1
	retrieveData_ASC_block1($gravenofrom=1,$gravenoto=19); 
	 	// $sql = "SELECT * FROM tblpeople WHERE CATEGORIES='A' AND LOCATION='BUENAVISTA LOOC CEMETERY' GROUP BY GRAVENO ORDER BY GRAVENO ASC LIMIT 101, 1";
	 	// loadDatas_A_Buenavista($sql);
}

 function loadDatas_A_Buenavista($sql=""){
 		global $mydb;
			echo '<table class="grave">';
			 	$mydb->setQuery($sql);
				$cur = $mydb->executeQuery();
				$numrows = $mydb->num_rows($cur);//get the number of count


			if ($numrows > 0) {
					# code... 
			 			$cur = $mydb->loadResultList();

						echo '<tr class="gravebg">'; 
					foreach ($cur as $result) { 


						if (@$_GET['graveno']   ==$result->GRAVENO) {
							# code...
							if ($_GET['section']==$result->CATEGORIES) {
								# code...
									$graveno = '<td class="fill"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';
							}else{
									$graveno = '<td class="gravebg"><a href="#" data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'"> '.$result->GRAVENO.'</a> </td>';

							} 
						}else{
							$graveno = '<td clas="gravebg" ><a href="#"  data-toggle="tooltip" data-placement="bottom" title="'.$result->FNAME.'">'.$result->GRAVENO.'</a></td>';
						}  
				 
							echo  $graveno;
					}
						echo '</tr>';
			}
			echo '</table>';
 }
 
?>