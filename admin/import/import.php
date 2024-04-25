<?php
require_once("../../include/initialize.php");
if (!isset($_SESSION['USERID'])){
    redirect(web_root."admin/login.php");
}

if(isset($_POST["Import"])){
    global $mydb;

    $filename = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        if ($file !== FALSE) {
            // Skip the header row
            fgetcsv($file);
            
            while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
                if(count($emapData) == 6) {
                    $sql = "INSERT into tblpeople (GRAVENO, FNAME, BORNDATE, DIEDATE, CATEGORIES, LOCATION) 
                            values (?, ?, ?, ?, ?, ?)";
                    $stmt = $mydb->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("isssss", $emapData[0], $emapData[1], $emapData[2], $emapData[3], $emapData[4], $emapData[5]);
                        $stmt->execute();
                        $stmt->close();
                    } else {
                        echo "Error preparing statement.";
                    }
                } else {
                    echo "Invalid number of columns in CSV file. CSV row: " . implode(', ', $emapData);
                }
            }
            fclose($file);
            echo "<script type=\"text/javascript\">
                    alert(\"CSV File has been successfully Imported.\");
                    window.location = \"index.php\";
                </script>";
        } else {
            echo "Error opening file.";
        }
    } else {
        echo "File size is 0.";
    }
}
?>
