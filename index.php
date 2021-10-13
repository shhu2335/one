<!-- start of conection -->
<?php
include "conection.php";
include "header.php";
//if (! empty($_SESSION['logged_in']))
//{
?>
<!-- start of header -->

<!DOCTYPE html>
<html lang="ar">

<head>


<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom style to prevent carousel from being distorted
           if for some reason image doesn't load */
        .carousel-item{
            min-height: 280px;
        }
    </style>
</head>


<body>

<!--<div   class="px-2 m-5  mx-auto text-start text-center" style="background-color: #f8f9fa;">-->
<!--    <h1 class="display-1  rounded-pill p-5 d-inline-block text-secondary mt-5  mb-3 "  STYLE="background-color: #adb5bd;width: 220px; height: 220px;">نقدم </h1>-->
<!--    <h1 class="display-3 d-inline text-secondary" >   حلول عقارية لا مثيل لها</h1>-->

<!--  صور العرض  Display Pictures-->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="img/help3.gif" class="d-block w-100 h-auto" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/help4.gif" class="d-block w-100 h-auto" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/help5.gif" class="d-block w-100 h-auto" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">

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

<!--    عرض ارقام زوار الموقع و مكاتب العقار View the numbers of visitors to the site and real estate offices-->
<div class="h3 m-0 p-1 e2d1c3  text-center mx-auto text-black-50 " >

        <div class="row">
            <div class="four col-md-4">
                <br>
                <i class="bi bi-graph-up"></i><br><br>
                <div class="counter-box bg-transparent"> <i class="fa fa-thumbs-o-up"></i> <span class="counter">2147</span>
                    <p>عدد زورا الموقع </p>
                </div>
            </div>
            <div class="four col-md-4">
                <br>
                <i class="bi bi-bank"></i><br><br>
                <div class="counter-box  bg-transparent"> <i class="fa fa-group"></i> <span class="counter">3275</span>
                    <p>عدد مكاتب العقار</p>
                </div>
            </div>
            <div class="four col-md-4">
                <br>
                <i class="bi bi-building"></i><br><br>
                <div class="counter-box bg-transparent"> <i class="fa fa-shopping-cart"></i> <span class="counter">289</span>
                    <p>عدد العقارات </p>
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


<!--افضل مكاتب العقار The best real estate offices-->
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


<style>
    .cards:hover {
        box-shadow: 5px 6px 6px 2px #e9ecef;
        transform: scale(1.03)
    }
</style>



<div  class="bg-gradient mx-auto p-4 text-center"  STYLE="background-color: #f8f9fa;">

        <div class="row g-2 ">
<!--            Villa-->
            <div class="col-3">
                <a href="index.php?Villa" class="text-decoration-none text-dark ">
                <div  class="cards  p-3 border bg-light rounded-3 w-100 table-hover" > الفلل</div>
                </a>
            </div>
<!--            ?Building-->
            <div class="col-3">
                <a href="index.php?Building" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">العمائر</div></a>
            </div>
<!--            Land-->
            <div class="col-3">
                <a href="index.php?Land" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الاراضي</div></a>
            </div>

<!--            hotel-->
            <div class="col-3">
                <a href="index.php?hotel" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الفنادق</div></a>
            </div>
<!--            Shop-->
            <div class="col-3">
                <a href="index.php?Shop" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">المحلات</div></a>
            </div>
<!--            Farm-->
            <div class="col-3">
                <a href="index.php?Farm" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">المزارع</div></a>
            </div>




<!--            Castle-->
            <div class="col-3">
                <a href="index.php?Castle" class="text-decoration-none text-dark ">
                <div  class="cards  p-3 border bg-light rounded-3 w-100 table-hover" > القصور </div>
                </a>
            </div>
<!--            Apartment-->
            <div class="col-3">
                <a href="index.php?Apartment" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3"> الشقق</div></a>
            </div>

<!--            Dianiyah-->
            <div class="col-3">
                <a href="index.php?Dianiyah" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الإستراحات </div></a>
            </div>
<!--            لشاليهات-->
            <div class="col-3">
                <a href="index.php? " class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">الشاليهات </div></a>
                                       <!--                تحتاج فورم-->
            </div>
<!--            Office-->
            <div class="col-3">
                <a href="index.php?Office" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">المكاتب</div></a>
            </div>
<!--            Studio-->
            <div class="col-3">
                <a href="index.php?Studio" class="text-decoration-none text-dark ">
                    <div class="cards p-3 border bg-light rounded-3">استديوهات</div></a>
            </div>



        </div>

</div>


    <?php if (isset($_GET['Villa'])){

        ?>

        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">
            <?php

            $stmt = $pdo->query('SELECT * FROM villa limit 8');
            foreach ($stmt as $row) { ?>
                <div class="col">
                    <div class="card h-200 text-center shadow-lg  rounded-3">

                        <!--  img   -->
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

                        <!--  title   -->
                        <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo " فله ". $row['TypeOfOffer']  ; ?>   </h5>
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
                                    <td><?php echo $row['AgeOfProperty']; ?></td>
                                    <td><?php echo $row['TypeOfOffer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">
                                        <?php
                                        echo ' السعر:   ' . number_format($row['price'], 2, ",", ".");
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

    <?php if (isset($_GET['Building'])){

        ?>
        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

            <?php

            $stmt = $pdo->query('SELECT * FROM building limit 8');
            foreach ($stmt as $row) { ?>
                <div class="col-4">
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

                        <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo "عماره". $row['type_of_offer']; ?>  </h5>
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
                                    <td><?php echo $row['AgeOfProperty']; ?></td>
                                    <td><?php echo $row['type_of_offer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col"><?php
                                        echo ' السعر:   ' . number_format($row['price'], 2, ",", ".");
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


    <?php if (isset($_GET['Land'])){?>

        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

            <?php

            $stmt = $pdo->query('SELECT * FROM Land limit 8');
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

                        <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo  "ارض " .$row['TypeOfOffer']; ?>  </h5>
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
                                    <td><?php echo $row['AgeOfProperty']; ?></td>
                                    <td><?php echo $row['TypeOfOffer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col"><?php
                                        echo ' السعر:   ' . number_format($row['priceofonemeter'], 2, ",", ".");
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


    <?php if (isset($_GET['hotel'])){?>


        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">
            <?php

            $stmt = $pdo->query('SELECT * FROM hotel limit 8');
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


    <?php if (isset($_GET['Shop'])){?>


        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">
            <?php

            $stmt = $pdo->query('SELECT * FROM Shop limit 8');
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

                        <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo "المحل " . $row['TypeOfOffer']; ?>  </h5>
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
                                    <td><?php echo $row['AgeOfProperty']; ?></td>
                                    <td><?php echo $row['TypeOfOffer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col"><?php
                                        echo ' السعر:   ' . number_format($row['price'], 2, ",", ".");
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

    <?php if (isset($_GET['Farm'])){?>

    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM Farm limit 8');
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

                    <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo $row['Typeofoffer']; ?>  </h5>
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
                                <td><?php echo $row['AgeOfProperty']; ?></td>
                                <td><?php echo $row['Typeofoffer']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col"><?php
                                    echo ' السعر:   ' . number_format($row['priceofonemeter'], 2, ",", ".");
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

    <?php if (isset($_GET['Castle'])){?>
        <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">
            <?php

            $stmt = $pdo->query('SELECT * FROM castle limit 8');
            foreach ($stmt as $row) { ?>
                <div class="col">
                    <div class="card h-200 text-center shadow-lg  rounded-3">

                        <!--  img   -->
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

                        <!--  title   -->
                        <h5 class="card-title bg-gradient p-1 m-0 fs-6"><?php echo " عماره ". $row['TypeOfOffer']  ; ?>   </h5>
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
                                    <td><?php echo $row['AgeOfProperty']; ?></td>
                                    <td><?php echo $row['TypeOfOffer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">
                                        <?php
                                        echo ' السعر:   ' . number_format($row['price'], 2, ",", ".");
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

<?php if (isset($_GET['Studio'])){

    ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM Studio limit 8');
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

<?php if (isset($_GET['  '])){

    ?> <div class="bg-primary m5 p-5 ">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
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

<?php if (isset($_GET['Dianiyah'])){

    ?> <div class="bg-primary m5 p-5 ">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="3">Three</option>

        </select>
    </div>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM Dianiyah limit 8');
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

<?php if (isset($_GET['Apartment'])){

    ?> <div class="bg-primary m5 p-5 ">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="3">Three</option>

        </select>
    </div>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM Apartment limit 8');
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


<?php if (isset($_GET['Office'])){

    ?> <div class="bg-primary m5 p-5 ">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">
        <?php

        $stmt = $pdo->query('SELECT * FROM Office limit 8');
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