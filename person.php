<?php
$search = isset($_POST['search']) ? $_POST['search'] : "";
$location = isset($_GET['location']) ? $_GET['location'] : '';
?>
<style type="text/css">
    .scrollxy {
        width: 540px;
        height: 493px;
        overflow: auto;
    }
</style>
<div class="scrollxy">
    <table id="" class="table">
        <thead>
            <tr>
                <th>Lot No</th>
                <th>Name of Beneficiaries</th>
                <th>Joined</th>
                <th>Block</th>
                <th>Location</th>
                <!--<th>Years Buried</th>-->
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_GET['location'])) {
                if (isset($_GET['name'])) {
                    $sql = "SELECT * FROM tblpeople WHERE LOCATION='" . $location . "' AND GRAVENO = '" . $_GET['graveno'] . "' AND FNAME ='" . $_GET['name'] . "'";
                } else {
                    $sql = "SELECT * FROM tblpeople WHERE LOCATION='" . $location . "'";
                }
            } elseif (isset($_POST['search'])) {
                $sql = "SELECT * FROM tblpeople WHERE FNAME LIKE '%" . $search . "%'";
            } else {
                $sql = "SELECT * FROM tblpeople";
            }

            $mydb->setQuery($sql);
            $cur = $mydb->executeQuery();
            $numrows = $mydb->num_rows($cur);

            if ($numrows > 0) {
                $cur = $mydb->loadResultList();

                foreach ($cur as $res) {
                    $dateTime = date_create($res->DIEDDATE);

                    if ($dateTime !== false) {
                        $formatdate = date_format($dateTime, 'm/d/Y');
                        $birthDate = $formatdate;
                        $birthDate = explode("/", $birthDate);
                        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md"))
                            ? ((date("Y") - $birthDate[2]) - 1)
                            : (date("Y") - $birthDate[2]);
                        // echo "Age is:" . $age;
                    } else {
                        // Handle the error, e.g., log it or set a default value for $age
                        $formatdate = $age = "Invalid Date";
                    }

                    echo '<tr>';
                    echo '<td>' . $res->GRAVENO . '</td>';
                    echo '<td><a href="index.php?q=person&graveno=' . $res->GRAVENO . '&name=' . $res->FNAME . '&location=' . $res->LOCATION . '&section=' . $res->CATEGORIES . '">' . $res->FNAME . '</a></td>';
                    echo '<td style="text-align:center">' . $res->BORNDATE . '</td>';
                    echo '<td style="text-align:center">' . $res->CATEGORIES . '</td>';
                    echo '<td style="text-align:center">' . $res->LOCATION . '</td>';
                    //echo '<td>' . $age . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr>';
                echo '<td colspan="5" style="text-align:center">No Record Found!</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
