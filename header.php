<?php
//echo  "header";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/js/src/util/index.js">



</head>
<body>
<!---->
<!--<div class="header">-->
<!---->
<!--    <a class=" m-1 p-1 btn btn-outline-warning " href="index.php">اشعار المستخدم</a>-->
<!--    <a class="m-1 p-1 btn btn-outline-light" href="index.php">إضافه إعلان</a>-->
<!--    <a class="m-1 p-1 btn btn-outline-light" href="index.php">الخريطه</a>-->
<!--</div>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">Your Home </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">الرئيسيه</a>
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
            <form class="d-flex me-auto my-2 my-lg-0">
                <input class="form-control " type="search" placeholder="بحث" aria-label="بحث">
                <button class="btn btn-outline-success" type="submit">بحث</button>
            </form>
        </div>
    </div>
</nav>
</body>
</html>