<!-- start of conection -->
<?php
//include "conection.php";
//include "header.php";
//if (! empty($_SESSION['logged_in']))

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//{
?>
<!-- start of header -->

<!DOCTYPE html>
<html lang="ar">

<head>


    <!--        <meta charset="utf-8">-->
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->
    <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom style to prevent carousel from being distorted
           if for some reason image doesn't load */
        .carousel-item{
            min-height: 280px;
        }
    </style>
</head>


<body>
<html>

<body>
<form method="POST" action="">
    <input type="checkbox" name="category[]" value="ثنائيه">
    <label class="form-check-label" for="inlineCheckbox1">ثنائيه</label>
    <input type="checkbox" name="category[]" value="ثلاثيه">
    <label class="form-check-label" for="inlineCheckbox1">ثلاثيه</label>
    <input type="checkbox" name="category[]" value="رباعيه">
    <label class="form-check-label" for="inlineCheckbox1">رباعيه </label>

    <input type="submit" value="Submit"/>
</form>
<?php
$category_values=$_POST["category"];
print_r($category_values); // for testing purpose, to know the selected checkboxes.?>
</body>

</html>
</body>
</html>
<!-- start of footer -->
<?php //include "footer.php";  //}else{
// header("location:login.php");
//}
?>