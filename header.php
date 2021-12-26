<?php

include "connection";

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/js/src/util/index.js">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-utilities.rtl.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-reboot.rtl.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.css">
<!--    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.rtl.css">-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
<!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-LPvXVVAlyPoBSGkX8UddpctDks+1P4HG8MhT7/YwqHtJ40bstjzCqjj+VVVDhsCo" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/h-s.jpg">
    <title>مجموعة أكنه العقارية</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white  m-0 text-primary ">

    <div class="container pt-2">
        <a class="navbar-brand text-primary " href="index.php"> أكنه العقارية</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-primary " id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item"> <a class="nav-link active text-primary d-none " aria-current="page" href="index.php" >الرئيسيه</a>   </li>
                <li class="nav-item"> <a class="nav-link f8f9fa text-primary d-none" href="#">إشعار المستخدم </a>   </li>
                <li class="nav-item"> <a class="nav-link d-none" href="#" tabindex="-1" aria-disabled="true">الخريطه </a>   </li>
            </ul>
        </div>

<?php if (empty($_SESSION['name'])) {  ?>
        <a class="nav nav-item nav-link justify-content-end m-0 px-2 d-flex" href="login.php"><i class="bi bi-box-arrow-in-right"></i></a>
        <a class="nav nav-link m-0 p-0" href="register.php"><i class="bi bi-person-plus-fill"></i></a>
        <?php
        }elseif(!empty($_SESSION['name'])) { ?>
        <a class="nav nav-item nav-link justify-content-end mx-0  d-flex px-1 alert-link h5" href="Add_ad.php" ><i class="bi bi-plus-circle-fill"></i></a>
        <a class="nav nav-link px-1 alert-link " href="personal_page.php"><i class="bi bi-person-circle h5"></i></a>
        <a class="nav nav-link px-1 alert-link"  href="logout.php"><i class="bi bi-box-arrow-left h5"></i></a>
<?php } ?>
    </div>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<hr class="m-0 p-0 ">
</body>
</html>