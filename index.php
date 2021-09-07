<!-- start of conection -->
<?php


include "conection.php"; ?>

<?php


?>
<!-- start of header -->
<?php include "header.php"; ?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>


<body>
<div   class="m-0 p-5 bg-dark text-white ">
    <h1 class="display-5">نقدم </h1>
    <p class="h6">  لك حلول عقارية لا مثيل لها</p>
    <form class="my-4 " >
    <input type="text" class="form-group col" name="sarech" placeholder="ابحث هنا "><input class="form-group col" type="submit" value="أبحث">
    </form>
</div>


<div class="m-0 p-2 bg-secondary text-center mx-auto text-white">

    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عدد العقارات المضافه  </h4>
    <p class="p-2 d-inline">5464</p>
    </div>

    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عدد مكاتب العقارات </h4>
    <p class="p-2 d-inline">5464</p>
</div>
    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عددالزوار </h4>
    <p class="p-2 d-inline">5464</p>
</div>

    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عددالزوار </h4>
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


    <div class="my-3 py-2 bg-transparent bg-gradient  py-1 bg-light text-center">
        <a href="addhotal.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة فندق</a>
        <a href="addvilla.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة فلة</a>
        <a href="addbuilding.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة عمارة</a>
        <a href="addshop.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة محل</a>
        <a href="addland.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة أرض</a>
        <a href="addfarm.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة مزرعة</a>
        <a href="logout.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة استديو</a>
        <a href="logout.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة استراحة</a>
        <a href="dianiyah.php" tite="1" class="text-decoration-none  text-white  my-0 fw-lighter p-1">إضافة شالية</a>
        <a href="apartment.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة شقة</a>
        <a href="addCastle.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة قصر</a>
        <a href="addoffice.php" tite="1" class="text-decoration-none  text-white  my-1 fw-lighter p-1">إضافة مكتب</a>
    </div>
<div class="container p-1 mb-5">


    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM villa');
        foreach ($stmt as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center border border-2 border-dark rounded-3">

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
