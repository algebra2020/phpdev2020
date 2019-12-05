<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="1.5_php_upload.php" enctype="multipart/form-data">
            Datoteka:<br>
            <input type="file" name="datoteka" value=""><br>
            <input type="submit" name="submit_btn" value="prenesi"> 

        </form>
        <?php
        if (isset($_POST['submit_btn'])) {
            print_r($_FILES);


            $target_dir = "uploads/";
            $target_file = $target_dir .basename($_FILES["datoteka"]["name"]);
            
            if(move_uploaded_file($_FILES["datoteka"]["tmp_name"], $target_dir)){
                
            }

        }
        ?>
    </body>
</html>
