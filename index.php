<?php
include "connection";
include "fun.php";

//if (! empty($_SESSION['logged_in'])){
//    header("location:login.php");
//}
?>
<!doctype html>
<html lang="ar">
    <head>
    <title>مجموعة اكنه العقارية</title>
<?php include "header.php";  ?>
    </head>
    <body>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

        <div class="carousel-inner ">
        <div class="carousel-item active">
        <img src="img/help3.gif" class="d-block w-100" style="height: 400px; max-height: 50%" alt="...">
        </div>
            <div class="carousel-item">
            <img src="img/help4.gif" class="d-block w-100" style="height: 400px; max-height: 50%" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/help5.gif" class="d-block w-100" style="height: 400px; max-height: 50%" alt="...">
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


    <hr class="my-md-5 p-0 ">
    <div class="container-fluid px-md-5">
        <div class="p-3 bg-gradient  rounded-pill  text-secondary border border-1 border-secondary ">
            <div class="row g-3  p-4 justify-content-center text-center  text-center  text-secondary g-1 row-cols-3">

            <div class="col-9 col-md-3">
                <form class="form bg-transparent bg-gradient mx-3">
                    <label class="my-1 mr-0" for="inlineFormCustomSelectPref">اختار المدينة..</label>
                    <select class="form-control text-center rounded-pill my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            </div>

            <div class="col-9 col-md-3 ">
                <label class="my-1 mr-0" for="inlineFormCustomSelectPref">اختار نوع العقار ..</label>
                <select class="form-control text-center rounded-pill my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="col-9 col-md-3 ">
                <label class="my-1 mr-0" for="inlineFormCustomSelectPref">اختار نوع العقار ..</label>
                    <select class="form-control text-center rounded-pill my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
            </div>

            <div class="col-9 col-md-3">
                <label class="my-1 mr-0" for="inlineFormCustomSelectPref">أبحث عن عقارك..</label>
                <button type="submit" class="btn btn-primary rounded-pill my-1 w-100">أبحث ..</button>
            </div>
            </form>
        </div>
        </div>
    </div>

    <hr class="mt-5 p-0 ">

    <div class="container-fluid p-md-5">
        <div class="row gap-0 gap-3 gap-md-3 justify-content-center row-cols-1 row-cols-lg-5 g-1 g-lg-3  text-center  text-secondary g-1 row-cols-3">

            <div class="col-8 col-md-3  bg-gradient  rounded-pill text-secondary border border-1 border-secondary">
                <h1 class="display-3 m-0 p-0 "><?php echo number_format(602, 0, ",", ",");?></h1>
                <p class="badge rounded-pill bg-secondary d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto text-wrap" > عدد المكاتب </p>
            </div>

            <div class="col-8 col-md-3  bg-gradient  rounded-pill text-secondary border border13 border-secondary ">
                <h1 class="display-3 m-0 p-0 "><?php echo number_format(12505, 0, ",", ",");?></h1>
                <p class="badge rounded-pill bg-secondary d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد  العقارات </p>
            </div>

            <div class="col-8 col-md-3  bg-gradient  rounded-pill text-secondary border border-1 border-secondary ">
                <div class="display-3  m-0  p-0"><?php echo number_format(60000, 0, ",", ",");?></div>
                <p class="badge rounded-pill bg-secondary d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد المستفيدين</p>
            </div>

            <div class="col-8 col-md-3  bg-gradient  rounded-pill text-secondary border border-1 border-secondary">
                <div class="display-3  m-0  p-0"><?php echo number_format(500, 0, ",", ",");?></div>
                <p class="badge rounded-pill bg-secondary d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد المسوقين</p>
            </div>
        </div>
    </div>
    <hr class="mb-5 p-0 ">


<!-- my mx me ms m  py px pe ps  05-->

    <div class="mt-3  bg-transparent bg-gradient shadow-lg py-2  bg-light text-center d-none" >

        <div class="mx-4 d-inline-block bg-secondary text-white">
            <div class="m-0 p-0 "> <img src="img/person.jpg" ALT="منال" ></div>
            <div class="m-0 p-0"><p> منال </p></div>
        </div>


        <div class="mx-4 d-inline-block bg-secondary text-white">
            <div class="m-0 p-0 "> <img src="img/person.jpg" ALT="منال" ></div>
            <div class="m-0 p-0"><p> منال </p></div>
        </div>

        <div class="mx-4 d-inline-block bg-secondary text-white">
            <div class="m-0 p-0 "> <img src="img/person.jpg" ALT="منال"></div>
            <div class="m-0 p-0"><p > منال </p></div>
        </div>




    </div>
    </div>
    <div  class="bg-gradient mx-auto p-3 text-center"  STYLE="background-color: #f8f9fa;">




        <div class="container-fluid d-none">
    <div class="row gap-0 gx--5 justify-content-start row-cols-lg-6  text-center  text-secondary g-1 row-cols-3">

        <div class="col p-md-1 bg-gradient  rounded-pill text-secondary border border-1 border-secondary">
            <div class="h3  m-0  p-0"><?php echo number_format(500, 0, ",", ",");?></div>
            <a  href="index.php?Villa&?#Villa"  class="badge rounded-pill bg-secondary d-block m-0 p-0 w-75 fs-5 mb-2 mx-auto text-decoration-none"> فلل</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Apartment&?#Apartment"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none"> شقق</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Building&?#Building"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none"> عمائر</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Castle&?#Castle"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none"> قصور</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Farm&?#Farm"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">المزارع</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Shop&?#Shop"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">المحلات</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Land&?#Land"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">الاراضي</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Office&?#Office"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">المكاتب</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?&?#Dianiyah"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">الشاليهات</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Dianiyah&?#Dianiyah"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">الإستراحات</a>
        </div>

        <div class="col  bg-gradient  rounded-pill text-secondary bg-secondary  border border-1 border-secondary">
            <a  href="index.php?Studio&?#Studio"  class="badge rounded-pill d-block   m-0 p-1 w-100 fs-5 p-3 h-100 mx-auto  text-decoration-none">استديوهات</a>
        </div>
    </div>
        </div>
</div>

<div class="container-fluid">

    <?php if (isset($_GET['Villa'])){

    ?>

    <div class="row justify-content-center row-cols-md-5 row-cols-sm-3 g-1 gap-1 w-100 " id="Villa" >
        <?php
        $stmt = $pdo->query('SELECT * FROM villa limit 8');
        $stmt->execute();
        $getAllproductVs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductVs as $row) {  ?>

            <div class="col rounded-3">
                <div class="card h-200 text-center border border-1 p-2 bg-gradient  rounded-3 text-secondary">

                    <!--  img   -->
                    <a class="text-decoration-none m-0 p-0" href="more_details.php?productV=<?php echo $row['id']?>">

                                    <img src="img/Villa_Riyadh.jpg" class="w-100 mb-2" alt="فيلا بالرياض للبيع">


                        <!--  title   -->
                        <h2 class="card-title bg-gradient p-1 m-0  w-100 btn btn-secondary btn-sm "><?php echo " فله ". $row['TypeOfOffer']  ; ?>   </h2>
                        <div class="card-body p-0 m-0">
                            <table class="table table-hover overflow-scroll m-0 p-0 ">
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

                    </a>
                </div>
            </div>
        <?php }
        ?>

        <!--    **********************************************************************************-->

    </div>
<?php } ?>

<?php if (isset($_GET['Building'])){

    ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-2  align-items: center  justify-content: center" id="Building">

        <?php

        $stmt = $pdo->query('SELECT * FROM building limit 8');
        $stmt->execute();
        $getAllproductBs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($getAllproductBs as $row) { ?>
            <div class="col-4">
                <div class="card h-200 text-center shadow-lg  rounded-3">

                    <!--  8888888888888888888888888   -->
                    <a class="text-decoration-none text-dark" href="more_details.php?productB=<?php echo $row['id']?>">
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

                        <h5 class="card-title bg-gradient p-1 m-0 fs-6 "><?php echo "عماره". $row['type_of_offer']; ?>  </h5>
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
                    </a></div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Land'])){?>

    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Land">

        <?php

        $stmt = $pdo->query('SELECT * FROM Land limit 8');
        $stmt->execute();
        $getAllproductLs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductLs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <!--  img   -->
                    <a class="text-decoration-none" href="more_details.php?productL=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productL['productL_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>

            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['hotel'])){?>


    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="hotel">
        <?php

        $stmt = $pdo->query('SELECT * FROM hotel limit 8');
        $stmt->execute();
        $getAllproductHs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductHs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3 text-dark">
                    <!--  img   -->
                    <a class="text-decoration-none text-dark" href="more_details.php?productH=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Shop'])){?>


    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Shop" >
        <?php

        $stmt = $pdo->query('SELECT * FROM Shop limit 8');
        $stmt->execute();
        $getAllproductSHs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductSHs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productSH=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Farm'])){?>

    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Farm">

        <?php

        $stmt = $pdo->query('SELECT * FROM Farm limit 8');
        $stmt->execute();
        $getAllproductFs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductFs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productF=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Castle'])){?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Castle">
        <?php

        $stmt = $pdo->query('SELECT * FROM castle limit 8');
        $stmt->execute();
        $getAllproductCs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductCs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productC=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

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
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Studio">

        <?php

        $stmt = $pdo->query('SELECT * FROM Studio limit 8');
        $stmt->execute();
        $getAllproductSs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductSs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productS=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['  '])){

    ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="">

        <?php

        $stmt = $pdo->query('SELECT * FROM hotel limit 4');
        $stmt->execute();
        $getAllproductWs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductWs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productW=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->


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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Dianiyah'])){

    ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Dianiyah">

        <?php

        $stmt = $pdo->query('SELECT * FROM diwaniyah limit 8');
        $stmt->execute();
        $getAllproductDs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductDs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productD=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Apartment'])){

    ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Apartment">

        <?php

        $stmt = $pdo->query('SELECT * FROM Apartment limit 8');
        $stmt->execute();
        $getAllproductAs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductAs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productA=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<?php if (isset($_GET['Office'])){

    ?>
    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center" id="Office">
        <?php

        $stmt = $pdo->query('SELECT * FROM desk limit 8');
        $stmt->execute();
        $getAllproductOs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductOs as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center shadow-lg  rounded-3">
                    <a class="text-decoration-none text-dark" href="more_details.php?productO=<?php echo $row['id']?>">
                        <!--                        <img class="card-img-top" src="--><?php //echo $imgUrl ?><!--" alt="--><?php //echo $productH['productH_name'] ?><!--">-->

                        <!--  IMG   -->
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
                        <!--  TITA   -->

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
                        </div></a>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>




</div>

<?php include "footer.php"; ?>
</body>
</html>

