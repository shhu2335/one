<?php
include "header.php";
include "fun.php";
include "conection.php";
if (! empty($_SESSION['logged_in']))
{

?>


<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="container">

    <div class="w-auto mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-4 py-2 text-center fs-3 bg-primary text-white rounded-3"> الصفحة الشخصية </p>

        <div class="row g-3  text-center">

    <div class="w-50 p-0 m-0 bg-white bg-gradient text-center ">
        <img src="img/person.jpg" class="w-100">
        <div class="px-3 pt-2 ">

            <ul class="list-group">
                <li class="list-group-item">   المعرف :<?php echo $_SESSION['id']; ?></li>
                <li class="list-group-item">   الاسم :<?php echo $_SESSION['name']; ?></li>
                <li class="list-group-item">الايميل:  <?php echo $_SESSION['email']; ?></li>
                <li class="list-group-item">رقم الجوال: <?php echo $_SESSION['phonenumber']; ?></li>
                <li class="list-group-item">  أسم المستخدم:<?php echo $_SESSION['usernmae']; ?></li>
                <li class="list-group-item"><button class="btn btn-outline-dark m-4 mx-auto">تعديل الملف</button></li>
            </ul>
<!--        <p class="fs-md-3 fs-sm-3"></p>-->
<!--        <p class="fs-md-3 fs-sm-3"></p>-->
<!--        <p class="fs-md-3 fs-sm-3"></p>-->
<!--        <p class="fs-md-3 fs-sm-3"></p>-->
<!--        <p class="fs-md-3 fs-sm-3"></p>-->
        </div>

    </div>
    <div class="w-50 p-0 m-0 bg-warning bg-gradient">

        <p class="h5">esrgdhgfgjkjlkj,hmgffdvsc</p>

    </div>


</div>


</div>

</body>
</html>
<?php
//session_start(); //to ensure you are using same session
//header("location:/index.php"); //to redirect back to "index.php" after logging out
//exit();
}else{
    header("location:login.php");
} ?>
