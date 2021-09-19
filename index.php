<!-- start of conection -->
<?php
include "config.php"; ?>

<?php


?>
<!-- start of header -->
<?php include "header.php"; ?>
<html >

<head>
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->

</head>


<body>
<div   class="m-0 p-5 bg-danger bg-gradient text-white ">
    <div class="display-1 pt-5 pe-3 bg-light bg-gradient text-danger
    rounded-pill py-auto d-inline-block" style="height: 210px; width: 200px;">نقدم </div>
    <p class="fs-1 fs mx-5 d-inline text-light">   حلول عقارية لا مثيل لها</p>

        <form class="form-group pt-5 pe-3  d-inline-flex ">
        <div class="input-group  ">
            <input type="text" class="form-control-lg  rounded-2" placeholder="ابحث عن العقارات هنا" ">
            <button class="btn btn-outline-light   rounded-3 mx-3 " type="button" >أبــحــث</button>
        </div>
        </form>
</div>


<div class="m-0 p-2 bg-light bg-gradient text-center mx-auto text-white">

    <div    class="btn btn-danger rounded-pill border-start my-2 mx-1">
    <h4 class="h5 d-inline"> عـ العقارات  </h4>
    <p class="p-2 d-inline">5464</p>
    </div>

    <div    class="btn btn-danger rounded-pill border-start my-2 mx-1">
    <h4 class="h5 d-inline"> عـ مكاتب العقارات </h4>
    <p class="p-2 d-inline">5464</p>
</div>
    <div    class="btn btn-danger rounded-pill border-start my-2 mx-1">
    <h4 class="h5 d-inline"> عددالزوار </h4>
    <p class="p-2 d-inline">5464</p>
</div>

    <div    class="btn btn-danger rounded-pill border-start my-2  mx-1">
    <h4 class="h5 d-inline"> عـالزوار </h4>
    <p class="p-2 d-inline">5464</p>
    </div></div>
<!-- my mx me ms m  py px pe ps  05-->

    <div class="mt-3  bg-transparent bg-gradient shadow-lg py-3  bg-light text-center">

        <div class="mx-4 d-inline-block bg-secondary text-white">
            <div class="m-0 p-0 "> <img src="img/person.jpg" ></div>
            <div class="m-0 p-0"><p> منال </p></div>
        </div>


        <div class="mx-4 d-inline-block bg-secondary text-white">
            <div class="m-0 p-0 "> <img src="img/person.jpg" ></div>
            <div class="m-0 p-0"><p> منال </p></div>
        </div>

        <div class="mx-4 d-inline-block bg-secondary text-white">
            <div class="m-0 p-0 "> <img src="img/person.jpg" ></div>
            <div class="m-0 p-0"><p > منال </p></div>
        </div>




    </div>

</div>


<div class="mb-3 p-4 bg-info bg-gradient text-center mx-auto text-white">
        <a href="Add_Hotal.php"     class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة فندق</a>
        <a href="Add_Villa.php"     class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة فلة</a>
        <a href="Add_Building.php"  class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة عمارة</a>
        <a href="Add_Shop.php"      class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة محل</a>
        <a href="Add_Land.php"      class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة أرض</a>
        <a href="Add_Farm.php"      class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة مزرعة</a>
        <a href="logout.php"        class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة استديو</a>
        <a href="logout.php"        class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة استراحة</a>
        <a href="Add_Dianiyah.php"  class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-0 fw-lighter p-1">إضافة شالية</a>
        <a href="Add_Aprtment.php"  class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة شقة</a>
        <a href="Add_Castle.php"    class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة قصر</a>
        <a href="Add_Office.php"    class="text-decoration-none  bg-light  border-4  rounded-3 border-end border-start  border-secondary text-secondary  my-1 fw-lighter p-1">إضافة مكتب</a>
    </div>
<div class="container p-1 mb-5">


    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM villa');
        foreach ($stmt as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg   rounded-3">

                    <!--  8888888888888888888888888   -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Villa_Riyadh.jpg" class="d-block w-100" alt="فيلا بالرياض للبيع">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hussam.PNG" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hussam.PNG" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!--  8888888888888888888888888   -->

                    <h5 class="card-title bg-gradient p-1 m-0"><?php echo $row['TypeOfOffer']; ?>  </h5>
                    <div class="card-body p-0 m-0">
                        <table class="table table-striped overflow-scroll m-0 p-0 ">
                            <thead>
                            <tr>
                                <th scope="col">المساحة</th>
                                <th scope="col">الواجهة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $row['space']; ?></td>
                                <td><?php echo $row['diraction']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">عمر العقار</th>
                                <th scope="col">نوع الغرض</th>
                            </tr>
                            <tr>
                                <td><?php echo $row['Numberofclippers']; ?></td>
                                <td><?php echo $row['TypeOfOffer']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col"><?php
                                    echo ' السعر:   ' . number_format($row['Numberofclippers'], 2, ",", ".");
                                    ?></th>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
</div>
</body>
</html>
<!-- start of footer -->
<?php include "footer.php"; ?>
