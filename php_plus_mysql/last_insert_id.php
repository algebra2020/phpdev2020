<?php
include './mysqli_conn.php';

//$query = "INSERT INTO student(ime,prezime,mjesto_stanovanja)";
//$query .= " VALUES ('Zara','Larsson','Sweden')";

//$mysqli->select_db('proba');


echo "zadnji unseseni autonumber u proba.student je:" . $mysqli->insert_id;

$query = "SELECT * FROM stud LIMIT 20";
$result = $mysqli->query($query);
echo "<br>ukupno kolumni profesora je:" . $mysqli->field_count;
echo "<br>ukupno redova profesora je:" . $result->num_rows;
$naslovi_stupaca=$result->fetch_fields();
//print_r($naslovi_stupaca);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet"
              type = "text/css"
              href = "table.css" />
    </head>
    <body>
        <div>

            <table class="redTable">
                <thead>
                    <tr>
                        <?php
                        for ($i = 0; $i < $mysqli->field_count; $i++) {
                            echo " <th>".$naslovi_stupaca[$i]->name."</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <?php
                        echo " <td>".$naslovi_stupaca[0]->db.".".$naslovi_stupaca[0]->table."</td>";
                       // <td colspan=mysqli->field_count>result->num_rows</td>
                        printf("<td colspan=%d>Ukupno:%d</td>"
                                ,$mysqli->field_count-1
                                ,$result->num_rows);
                        ?>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    //for ($i = 0; $i < $result->num_rows; $i++) {
                    while ($row = $result->fetch_row()) {
                        echo " <tr>";
                        for ($j = 0; $j < $mysqli->field_count; $j++) {
                            echo " <td>".$row[$j]."</td>";
                        }
                        echo " </tr>";
                    }
                    ?>

                   
                </tbody>
            </table>

        </div>
    </body>
</html>