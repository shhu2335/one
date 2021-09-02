<?php
//echo  "header";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/js/src/util/index.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!---->
<!--<div class="header">-->
<!---->
<!--    <a class=" m-1 p-1 btn btn-outline-warning " href="index.php">اشعار المستخدم</a>-->
<!--    <a class="m-1 p-1 btn btn-outline-light" href="index.php">إضافه إعلان</a>-->
<!--    <a class="m-1 p-1 btn btn-outline-light" href="index.php">الخريطه</a>-->
<!--</div>-->

<nav class="navbar navbar-expand-lg navbar-light bg-white text-dark text-center">

    <div class=".container-sm	container-fluid">
        <a class="navbar-brand" href="index.php">H & S للعقارات</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">الرئيسيه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">إشعار المستخدم </a>
                </li>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                       -->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><hr class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">الخريطه </a>
                </li>
            </ul>



<!--            <form class="d-flex me-auto my-2 my-lg-0">-->
<!--                <input class="form-control " type="search" placeholder="بحث" aria-label="بحث">-->
<!--                <button class="btn btn-outline-primary mx-3" type="submit">بحث</button>-->
<!--            </form>-->
        </div>
        <a class="nav nav-item nav-link justify-content-end me-lg-5 d-flex " href="login.php">تسجيل دخول</a>
        <a class="nav nav-link" href="register.php">تسجيل </a>
    </div>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>