
<?php

include "fun.php";
include "connection.php";
include "header.php";

$stmt = $pdo->query('SELECT * FROM sa_provinces  ');//استدعاء جدول sa_provinces تحتوي على مناطق المملكه 13
$stmt->execute();
?>
<html>


<head>
    <title>مجموعة اكنه العقارية</title>


    <style>
        /*.k1{*/
        /*    background-image: url("./img/Shiny Overlay.svg");*/
        /*    background-repeat: no-repeat;*/
        /*    width: 100%;*/
        /*    background-size: cover;*/
        /*}*/

        .k2{
            background-image: url("./img/Rect Light.svg");
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }
    </style>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
            type="text/javascript"></script>
    <script>
        function getState() // تسترجع الاحياء
        {
            var str='';
            var val=document.getElementById('city-list');
            for (i=0;i< val.length;i++) {
                if(val[i].selected){
                    str += val[i].value + ',';
                }
            }
            var str=str.slice(0,str.length -1);// ميثود تأخذ العنصصر المختار

            $.ajax({
                type: "GET",
                url: "get_state.php",//   ايجاد جميع المدن التي لها نفس رقم id
                data:'id='+str, // ترسل الid  للصفحه get_state.php
                success: function(data){
                    $("#state-list").html(data);
                }
            });
        }


        function getcity() //استرجاع اسماء المدن
        {
            var str='';
            var val=document.getElementById('Region-list');
            for (i=0;i< val.length;i++) {
                if(val[i].selected){
                    str += val[i].value + ',';
                }
            }
            var str=str.slice(0,str.length -1); // ميثود تأخذ العنصصر المختار

            $.ajax({
                type: "GET",
                url: "get_city.php",//   ايجاد جميع المدن التي لها نفس رقم id
                data:'id='+str, // ترسل الid  للصفحهget_city.php
                success: function(data){
                    $("#city-list").html(data);
                }
            });
        }
    </script>

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



<div class="container-fluid k1 py-md-0 bg-t">
    <div class="bg-gradient  rounded-pill p-5 text-secondary">
        <div class="row gap-md-1 row-cols-1  row-cols-md-4  row-cols-lg-6 justify-content-center text-center  text-secondary g-1 py-5 rounded-3 border border-1 border-dark">
<!--اختيار المنطقه-->
            <div class="col">
                <form class="form m-0 p-0">
                    <label class="my-0 mr-0" for="3">اختار المنطقه</label>
                    <select class="form-control text-center rounded-3 my-0 mr-sm-2" name="country[]"
                            id="Region-list"
                            onChange="getcity();" >
                        <option value=""> المنطقه </option>
                        <?php
                        foreach ($stmt as $country) {
                            ?>
                            <option value="<?php echo $country["id"]; ?>"><?php echo $country["nameAr"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>

            </div>
<!--            ختار المدينه-->
            <div class="col">
                <form class="form">
                    <label class="my-0 mr-0" for="3">اختار المدينه</label>
                    <select class="form-control text-center rounded-3 my-0 mr-sm-2" name="country[]"
                            id="city-list" class=""
                            onChange="getState();" >
                        <option value="">المدينه </option>
                        <?php
                        foreach ($stmt as $country) {
                            ?>
                            <option value="<?php echo $country["id"]; ?>"><?php echo $country["nameAr"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
            </div>
<!--            اختارالحي-->
            <div class="col">

                <label class="my-0 mr-0" for="1">اختيارالحي </label>

                <select class="form-control text-center rounded-3 my-0 mr-sm-2" name="state[]"
                        id="state-list" class="" >
                    <option value=""> الحي </option>
                </select>
            </div>

<!--            اختار الغرض-->
            <div class="col">
                <label class="my-0 mr-0" for="1">اختار الغرض ..</label>
                <select class="form-control text-center rounded-3 my-0 mr-sm-2" name="F_Type_sale" id="1">
                    <option selected>الغرض من العقار ..</option>
                    <option value="1">إيجار</option>
                    <option value="2">للبيع</option>
                    <option value="3">تمليك</option>
                </select>
            </div>
<!--            اختار نوع العقار-->
            <div class="col">
                <label class="my-0 mr-0" for="2">اختار نوع العقار</label>
                <select class="form-control text-center rounded-3 my-0 mr-sm-2"name="f_property_type" id="2">
                    <option selected>نوع العقار ..</option>
                    <option value="1">عمارة</option>
                    <option value="2">شقة</option>
                    <option value="3">فلة</option>
                </select>
            </div>

            <div class="col">
                <label class="my-0 mr-0" for="inlineFormCustomSelectPref">أبحث عن عقارك..</label>
                <button type="submit" class="btn btn-primary rounded-pill my-0 w-100">أبحث ..</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid k2 m-0 p-0">
    <div class="row py-md-5 gap-3 gap-md-3 justify-content-center row-cols-1 row-cols-lg-5 g-1 g-lg-3 text-center  row-cols-3">
        <div class="col-12 m-0 p-0">
            <h1 class="display-1 m-0 p-0 text-white ">أرقام</h1>
        </div>

        <div class="col-8 col-md-3 bg-gradient rounded-pill text-white border border-1 border-white">
            <h1 class="display-4 m-0 p-0 "><?php echo number_format(count_num_office(), 0, ",", ",");?></h1>
            <p class="rounded-pill text-dark bg-white d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto "> عدد المكاتب </p>
        </div>

        <div class="col-8 col-md-3 bg-gradient rounded-pill text-white border border-1 border-white ">
            <h1 class="display-4 m-0 p-0 "><?php echo number_format(12505, 0, ",", ",");?></h1>
            <p class="rounded-pill  text-dark bg-white d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد العقارات </p>
        </div>

        <div class="col-8 col-md-3 bg-gradient rounded-pill text-white border border-1 border-white">
            <div class="display-4 m-0 p-0"><?php echo number_format(count_num_user(), 0, ",", ",");?></div>
            <p class="rounded-pill text-dark bg-white d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد المستفيدين</p>
        </div>

        <div class="col-8 col-md-3  bg-gradient  rounded-pill text-white border border-1 border-white">
            <div class="display-4 m-0 p-0"><?php echo number_format(500, 0, ",", ",");?></div>
            <p class="rounded-pill text-dark bg-white d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد المسوقين</p>
        </div>

        <div class="col-8 col-md-3 bg-gradient rounded-pill text-white border border-1 border-white">
            <div class="display-4 m-0 p-0"><?php  echo number_format(count_num_apartment(), 0, ",", ","); ?></div>
            <p class="rounded-pill text-dark bg-white d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد الشقق</p>
        </div>

        <div class="col-8 col-md-3 bg-gradient rounded-pill text-white border border-1 border-white">
            <div class="display-4 m-0 p-0"><?php echo number_format(count_num_building(), 0, ",", ",");?></div>
            <p class="rounded-pill text-dark bg-white d-block m-0 p-0 w-75 fs-5 py-1 mb-2 mx-auto">عدد العمائر</p>
        </div>
    </div>
</div>
<!-- my mx me ms m  py px pe ps  05-->

<div class="mt-3 bg-transparent bg-gradient shadow-lg py-2 bg-light text-center d-none" >

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
    <div class="row justify-content-center row-cols-md-5 row-cols-sm-3 g-1 gap-1 w-100 " id="Studio" >
        <?php
        $stmt = $pdo->query('SELECT * FROM studio  ORDER by id desc limit 8');
        $stmt->execute();
        $getAllproductVs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($getAllproductVs as $row) {
            ?>
            <div class="col rounded-3">
                <div class="card h-200 text-center border border-1 p-2 bg-gradient  rounded-3 text-secondary">
                    <!--  img   -->
                    <a class="text-decoration-none m-0 p-0" href="more_details.php?productV=<?php echo $row['id']?>">
                        <img src="img/Villa_Riyadh.jpg" class="w-100 mb-2" alt="<?php echo $row['property_name']?>">
                        <!--  title   -->
                        <h2 class="card-title bg-gradient p-1 m-0  w-100 btn btn-secondary btn-sm "><?php echo $row['property_name']  ; ?>   </h2>
                        <div class="card-body p-0 m-0">
                            <table class="table fs-6 table-striped table-hover m-0 p-0 ">
                                <thead>
                                <tr>
                                    <th scope="col">المساحة</th>
                                    <th scope="col">الفئة</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td><?php echo $row['space']; ?></td>
                                    <td><?php echo $row['details']; ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">عمر العقار</th>
                                    <th scope="col">نوع الغرض</th>
                                </tr>

                                <tr>
                                    <td>
                                        <?php
                                        $dateOfBirth = $row['property_age'];
                                        $today = date("Y-m-d");
                                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                        echo $diff->format('%y'). 'سنة';
                                        ?></td>
                                    <td><?php echo $row['Type_sale']; ?></td>
                                </tr>

                                <tr>
                                    <th scope="col">
                                        <?php
                                        echo ' السعر:   ' . number_format($row['price'], 0, ",", ".");
                                        ?></th>
                                    <th>تفاصيل اكثر</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </a>
                </div>
            </div>
        <?php }
        ?>
    </div>
<?php } ?>

<?php if (isset($_GET['Apartment'])){
    ?>
    <div class="row justify-content-center row-cols-md-5 row-cols-sm-3 g-1 gap-1 w-100 " id="Apartment" >
        <?php
            $stmt = $pdo->query('SELECT * FROM apartment  ORDER by id desc limit 8');
            $stmt->execute();
            $getAllproductVs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($getAllproductVs as $row) {
                ?>
                <div class="col rounded-3">
                    <div class="card h-200 text-center border border-1 p-2 bg-gradient  rounded-3 text-secondary">
                        <!--  img   -->
                        <a class="text-decoration-none m-0 p-0" href="more_details.php?productV=<?php echo $row['id']?>">
                            <img src="img/Villa_Riyadh.jpg" class="w-100 mb-2" alt="<?php echo $row['property_name']?>">
                            <!--  title   -->
                            <h2 class="card-title bg-gradient p-1 m-0  w-100 btn btn-secondary btn-sm "><?php echo $row['property_name']  ; ?>   </h2>
                            <div class="card-body p-0 m-0">
                                <table class="table fs-6 table-striped table-hover m-0 p-0 ">
                                    <thead>
                                    <tr>
                                        <th scope="col">غرف النوم</th>
                                        <th scope="col">الفئة</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td><?php echo $row['Num_Bedrooms']; ?></td>
                                        <td><?php echo $row['details']; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="col">عمر العقار</th>
                                        <th scope="col">نوع الغرض</th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <?php
                                            $dateOfBirth = $row['property_age'];
                                            $today = date("Y-m-d");
                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                            echo $diff->format('%y'). 'سنة ';
                                             ?></td>
                                        <td><?php echo $row['Type_sale']; ?></td>
                                    </tr>

                                    <tr>
                                        <th scope="col">
                                            <?php
                                            echo ' السعر:   ' . number_format($row['price'], 0, ",", ".");
                                            ?></th>
                                        <th>تفاصيل اكثر</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </a>
                    </div>
                </div>
            <?php }
            ?>
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

