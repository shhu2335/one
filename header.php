<?php
//echo  "header";

session_start();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-LPvXVVAlyPoBSGkX8UddpctDks+1P4HG8MhT7/YwqHtJ40bstjzCqjj+VVVDhsCo" crossorigin="anonymous">

</head>
<body>
<style>
    .cards:hover {
        box-shadow: 5px 6px 6px 2px #e9ecef;
        transform: scale(1.1)
    }
</style>
<!---->
<!--<div class="header">-->
<!---->
<!--    <a class=" m-1 p-1 btn btn-outline-warning " href="index.php">اشعار المستخدم</a>-->
<!--    <a class="m-1 p-1 btn btn-outline-light" href="index.php">إضافه إعلان</a>-->
<!--    <a class="m-1 p-1 btn btn-outline-light" href="index.php">الخريطه</a>-->
<!--</div>-->

<nav class="navbar navbar-expand-lg navbar-light bg-white  text-primary ">

    <div class=".container-sm	container-fluid ">
        <a class="navbar-brand text-primary" href="index.php">H & SH للعقارات
            <?php if (! empty($_SESSION['name']))
            {
            echo "مرحبا : ".$_SESSION['name'];
            }?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-primary" id="navbarScroll">
            <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active text-primary d-none" aria-current="page" href="index.php" >الرئيسيه</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link f8f9fa text-primary d-none" href="#">إشعار المستخدم </a>
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
                    <a class="nav-link d-none" href="#" tabindex="-1" aria-disabled="true">الخريطه </a>
                </li>
            </ul>

<!--            <form class="d-flex me-auto my-2 my-lg-0">-->
<!--                <input class="form-control " type="search" placeholder="بحث" aria-label="بحث">-->
<!--                <button class="btn btn-outline-primary mx-3" type="submit">بحث</button>-->
<!--            </form>-->
        </div>
<?php if (empty($_SESSION['name'])) {
    ?>
    <div class="cards row bg-white bg-gradient p-1  text-center col-1 bg-transparent mx-auto bg-gradient text-primary shadow  border-start border-end  border-primary border-5 rounded-pill">
        <a  href="Add_ad.php" class="text-decoration-none fs-md-2 fs-sm-2 p-sm-0 m-0 p-0">إضافه إعلان </a>
    </div>
        <a class="nav nav-item nav-link justify-content-end mx-0  d-flex " href="login.php">تسجيل دخول</a>
        <a class="nav nav-link mx-0" href="register.php">تسجيل </a>
        <?php
        }elseif(!empty($_SESSION['name'])){
    ?>
    <div class="mb-3 py-2 py-1 text-start">
        <a href="Add_ad.php" class=" text-decoration-none text-primary text-start  border-2 rounded-1 px-1  py-2 bg-transparent border-end border-start border-secondary my-1  p-1">إضافه إعلان </a>
    </div>
    <a class="nav nav-link" href="personal_page.php">الصفحه الشخصيه  </a>
        <a class="nav nav-link" href="logout.php">تسجيل خروج  </a>
    <?php } ?>
    </div>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<hr class="m-0">
</body>
</html>