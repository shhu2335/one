<!-- start of conection -->
<?php
include "conection.php";
include "header.php";
//if (! empty($_SESSION['logged_in']))
//{
?>
<!-- start of header -->

<html>

<head>


<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body>

<!--<div   class="px-2 m-5  mx-auto text-start text-center" style="background-color: #f8f9fa;">-->
<!--    <h1 class="display-1  rounded-pill p-5 d-inline-block text-secondary mt-5  mb-3 "  STYLE="background-color: #adb5bd;width: 220px; height: 220px;">نقدم </h1>-->
<!--    <h1 class="display-3 d-inline text-secondary" >   حلول عقارية لا مثيل لها</h1>-->

    <div id="myCarousel" class="carousel slide text-center m-0 p-0" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators ">
            <li data-target="#myCarousel" data-slide-to="0" class="active text-center"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active text-center">
                <img   <source src="img/help3.gif"  alt="00" style="width:1360px; height:302px; ">
                <div class="carousel-caption">

                </div>
            </div>

            <div class="item">
                <img src="img/help4.gif" alt="00" style="width:1360px; height:302px; ">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="item">
                <img src="img/help5.gif" alt="00" style="width:1360px; height:302px; ">
                <div class="carousel-caption">
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



<hr class="m-0 p-0">
<!--<div   class="d-none row bg-white bg-gradient p-4  mx-auto text-center">-->
<!--    <div class="col-3 bg-transparent mx-auto bg-gradient text-primary shadow  border-start border-end  border-primary border-5 rounded-pill">-->
<!--        <p class="fs-md-4 fs-sm-4 p-sm-0 m-0 p-0"> عدد الزوار</p>-->
<!--        <p class="fs-md-4 fs-sm-4 p-sm-0 m-0 p-0">4</p>-->
<!--    </div>-->
<!---->
<!--    <div class="col-3  bg-transparent  bg-gradient text-primary shadow border-start border-end  border-primary border-5 rounded-pill">-->
<!--        <p class="fs-md-4 fs-sm-4 p-sm-0 m-0 p-0"> عـدد المكاتب</p>-->
<!--        <p class="fs-md-4 fs-sm-4 p-sm-0 m-0 p-0">4</p>-->
<!--    </div>-->
<!---->
<!--    <div class="col-3 bg-transparent mx-auto bg-gradient text-primary  shadow border-start border-end  border-primary border-5 rounded-pill">-->
<!--        <p class="fs-md-4 fs-sm-4 p-sm-0 m-0 p-0"> عـدد العقارات</p>-->
<!--        <p class="fs-md-4 fs-sm-4 p-sm-0 m-0 p-0">4</p>-->
<!--    </div>-->
<!---->
<!--</div>-->
<div class="m-0 p-1 e2d1c3  text-center mx-auto text-white " >
    <div class="container">
        <div class="row">
            <div class="four col-md-3">
                <div class="counter-box bg-transparent"> <i class="fa fa-thumbs-o-up"></i> <span class="counter">2147</span>
                    <p>عدد زورا الموقع </p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box  bg-transparent"> <i class="fa fa-group"></i> <span class="counter">3275</span>
                    <p>عدد مكاتب العقار</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box bg-transparent"> <i class="fa fa-shopping-cart"></i> <span class="counter">289</span>
                    <p>عدد العقارات </p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box bg-transparent"> <i class="fa fa-user"></i> <span class="counter">1563</span>
                    <p>Saved Trees</p>
                </div>
            </div>
        </div>
    </div>



</div>
<hr class="m-0 p-0">
<div class="m-0 p-2 bg-danger bg-gradient text-center mx-auto text-white d-none">

    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عـ العقارات   </h4>
    <p class="p-2 d-inline">5,464</p>
    </div>

    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عـ مكاتب العقارات </h4>
    <p class="p-2 d-inline">5,4643</p>
</div>
    <div    class="btn btn-outline-light rounded-pill my-2 m-sm-2 mx-5">
    <h4 class="h5 d-inline"> عـ الزوار </h4>
    <p class="p-2 d-inline">5,464</p>
</div>

    </div>
<!-- my mx me ms m  py px pe ps  05-->

    <div class="mt-3  bg-transparent bg-gradient shadow-lg py-3  bg-light text-center d-none" >

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

<style>
    .cards:hover {
        box-shadow: 5px 6px 6px 2px #e9ecef;
        transform: scale(1.03)
    }
</style>
<div  class="bg-gradient mx-auto p-4 text-center"  STYLE="background-color: #f8f9fa;">
    <div class="container">
        <div class="row g-2 ">
            <div class="col-3">
                <a href="Add_Villa.php" class="text-decoration-none text-dark ">
                <div  class="cards  p-3 border bg-light rounded-3 w-100 table-hover" > الفلل</div>
                </a>
            </div>

            <div class="col-3">
                <a href="Add_Castle.php" class="text-decoration-none text-dark ">
                <div  class="cards  p-3 border bg-light rounded-3 w-100 table-hover" > القصور </div>
                </a>
            </div>
            <div class="col-3">
                <a href="Add_Apartment.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3"> الشقق</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Land.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الاراضي</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Hotal.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الفنادق</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Dianiyah.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الإستراحات </div></a>
            </div>

            <div class="col-3">
                <a href=" " class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الشاليهات </div></a>
                                       <!--                تحتاج فورم-->
            </div>

            <div class="col-3">
                <a href="Add_Office.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">المكاتب</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Building.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">العمائر</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Farm.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">المزارع</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Shop.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">المحلات</div></a>
            </div>

            <div class="col-3">
                <a href="Add_Studio.php" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">استديوهات</div></a>
            </div>
        </div>
    </div>

</div>

<?php if (isset($_GET['hus'])){

 ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM villa limit 4');
        foreach ($stmt as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">

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

                    <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo $row['TypeOfOffer']; ?>  </h5>
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
                                <th>تفاصيل اكثر</th>
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
<?php } ?>

    <?php if (isset($_GET['shouq'])){

        ?> <div class="container p-1 mb-5"><div class="bg-primary m5 p-5 ">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

            <?php

            $stmt = $pdo->query('SELECT * FROM hotel limit 4');
            foreach ($stmt as $row) { ?>
                <div class="col">
                    <div class="card h-200 text-center shadow-lg  rounded-3">

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

                        <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo $row['TypeOfOffer']; ?>  </h5>
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
                                    <td><?php echo $row['Supplementnumber']; ?></td>
                                    <td><?php echo $row['TypeOfOffer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col"><?php
                                        echo ' السعر:   ' . number_format($row['thenumberoffloors'], 2, ",", ".");
                                        ?></th>
                                    <th>تفاصيل اكثر</th>
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
    <?php } ?>



</div>
</body>
</html>
<!-- start of footer -->
<?php include "footer.php";  //}else{
   // header("location:login.php");
//}
    ?>