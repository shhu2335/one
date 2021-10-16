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
    <title>مجموعة الأبتكارات العقارية</title>

</head>
<body>
<div class="container">

    <div class="w-auto mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-5 py-2 text-center fs-3 bg-primary text-white rounded-3">
            <?php if (! empty($_SESSION['name']))
            {
                echo "مرحبا, ".$_SESSION['name'];
            }?>
        </p>

        <div class="row g-3 p-2 text-center ">

    <div class="w-50 d-block p-0 m-0 bg-white bg-gradient text-center">
        <img src="img/14-22.jpg" class="rounded-circle">
        <div class="px-3 pt-2 ">

            <ul class="list-group w-75 mx-auto d-block list-group-flush">
                <li class="list-group-item">   المعرف :<?php echo $_SESSION['id']; ?></li>
                <li class="list-group-item"><?php echo $_SESSION['name']; ?></li>
                <li class="list-group-item">  <?php echo $_SESSION['email']; ?></li>
                <li class="list-group-item"><?php echo $_SESSION['phonenumber']; ?></li>
                <li class="list-group-item">  المستخدم:<?php echo $_SESSION['usernmae']; ?></li>
                <li class="list-group-item"><button class="btn btn-outline-dark  mx-auto">تعديل الملف</button></li>
            </ul>


</div>

    </div>
    <div class="w-50 p-0 m-0 p-3 mb-5 bg-white   border border-1  bg-gradient  rounded-3 text-secondary">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
               عقاراتك
            </a>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                عدد الشقق
                <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                عدد المحلات
                <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                            عدد العمائر
                <span class="badge bg-primary rounded-pill">1</span>
            </li>
        </ul>

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
