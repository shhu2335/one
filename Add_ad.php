<?php
include "header.php";
include "conection.php";
include "fun.php";

?>
<html>
<header>
<!--    <link rel="stylesheet" href="css/style.css">-->
</header>

<body>

<style>
    .container {
        margin-top: 100px
    }

    .counter-box {
        display: block;
        /*background: #0d6efd;*/
        background: #5f82a8;
        padding: 40px 20px 37px;
        text-align: center
    }

    .counter-box p {
        margin: 5px 0 0;
        padding: 0;
        color: #2a1e17;
        font-size: 18px;
        font-weight: 500
    }

    .counter-box i {
        font-size: 60px;
        margin: 0 0 15px;
        /*color: #d2d2d2*/
    }

    .counter {
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #0c0806;
        line-height: 28px

    }


</style>

<div class="container">
    <div class="row gx-4">
        <div class="four col-md-3">
            <a href="Add_Hotal.php"  class="text-decoration-none text-center counter-box  p-5 m-0   " > <i class="fa fa-thumbs-o-up"></i> <span class="counter"> </span>
                <p>  إضافه فندق </p>
            </a>
        </div>
        <div class="four col-md-3 ">
            <a href="Add_Building.php" class="text-decoration-none text-center counter-box bg-gradient p-5 m-0 "  > <i class="fa fa-group"></i> <span class="counter"> </span>
                <p> إضافه عماره </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Apartment.php" class="text-decoration-none text-center counter-box bg-gradient p-5 m-0 text-center"  > <i class="fa fa-shopping-cart"></i> <span class="counter"> </span>
                <p>  إضافه شقه </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Castle.php" class="text-decoration-none text-center counter-box bg-gradient p-5 m-0 text-center"  > <i class="fa fa-user"></i> <span class="counter"> </span>
                <p> إضافه قصر </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="A" class="text-decoration-none text-center counter-box bg-gradient p-5 mt-2 text-center"  > <i class="fa fa-thumbs-o-up"></i> <span class="counter"> </span>
                <p> إضافه شاليه </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Farm.php" class="text-decoration-none text-center counter-box bg-gradient p-5 mt-2   text-center"  > <i class="fa fa-group"></i> <span class="counter"> </span>
                <p> إضافه مزرعه </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Land.php" class="text-decoration-none text-center counter-box bg-gradient p-5  mt-2  text-center"  > <i class="fa fa-shopping-cart"></i> <span class="counter"> </span>
                <p>  إضافه ارض  </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Shop.php" class="text-decoration-none text-center counter-box bg-gradient p-5  mt-2   text-center"  > <i class="fa fa-user"></i> <span class="counter"> </span>
                <p> إضافه محل  </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Studio.php" class="text-decoration-none text-center counter-box bg-gradient p-5 mt-2  text-center"  > <i class="fa fa-thumbs-o-up"></i> <span class="counter"> </span>
                <p> إضافه إستيديو </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Villa.php" class="text-decoration-none text-center counter-box bg-gradient p-5 mt-2  text-center"  > <i class="fa fa-group"></i> <span class="counter"> </span>
                <p> إضافه فله</p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Office.php" class="text-decoration-none text-center counter-box bg-gradient p-5 mt-2  text-center"  > <i class="fa fa-shopping-cart"></i> <span class="counter"> </span>
                <p>  إضافه مكتب </p>
            </a>
        </div>
        <div class="four col-md-3">
            <a href="Add_Dianiyah.php" class="text-decoration-none text-center counter-box bg-gradient p-5 mt-2  text-center"  > <i class="fa fa-user"></i> <span class="counter"> </span>
                <p> إضافه استراحه  </p>
            </a>
        </div>

    </div>
</div>


</body>
</html>

<?php
include "footer.php";

?>
