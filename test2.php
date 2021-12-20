<?php

include "conection.php";
include "header.php";
include "fun.php";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br /><br />
<div class="container" style="width:500px;">
    <br />
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image" />
        <br />
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
    </form>
    <br />
    <br />
    <table class="table table-bordered">
        <tr>
            <th>Image</th>
        </tr>
        <?php
        $query = $pdo->query('SELECT * FROM villa ORDER BY id DESC');
        $query->execute();
//        $result = mysqli_query($query);
        $getAllproductVs = $query->fetchAll(PDO::FETCH_ASSOC);

        {
            echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';
        }
        ?>
    </table>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>