<?php


include "conection.php";
include "header.php";
include "fun.php";
?>
<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<!---->

<body>


<div class="container">
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه شقة</p>
        <form class="row g-3  p-5  text-end" method="post" action="fun.php">
            <!--            space-->
            <div class="form-label col-md-4 text-end">
                <label for="phone_number_form" class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_space">
                <?php
                if (isset($space_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $space_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            property age-->
            <div class="form-label col-md-4 text-end">
                <label for="phone_number_form"  class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="property_age">
                <?php
                if (isset($var_property_age_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_property_age_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            price-->
            <div class="form-label col-md-4 text-end">
                <label for="phone_number_form" class="form-label"> السعر</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_price">
                <?php
                if (isset($price_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $price_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            type of offer-->
            <div class="col-md-4 form-label  text-start">
                <select class="form-select" aria-label="Default select example" name="form_taype_of_offer">

                    <option selected value="" >-- الغرض من عرض العقار --</option>
                    <?php if (!empty($length_State)) {
                        for ($i = 0; $i < $length_State; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_State)) {
                                echo $arra_list_State[$i];
                            } ?>">
                                <?php if (!empty($arra_list_State)) {
                                    echo $arra_list_State[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_sale_type_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_sale_type_err;
                    echo '<span >';
                }else{}
                ?>

            </div>
            <!--            Number of rooms-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الغرف</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_rooms_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_rooms_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Lounges-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الصالات</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_halls_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_halls_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            NumbeOfKitchen-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المطابخ</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_Kitchens_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_Kitchens_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            TypeOfKitchen-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع المطبخ</option>
                    <option value="1">  داخلي</option>
                    <option value="2"> خارجي</option>
                </select>
            </div>
           <!--NumberOfBedrooms-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد غرف النوم</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_bed_room_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_bed_room_err;
                    echo '<span >';
                }
                ?>
            </div>
<!--            BoardNumber-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المجالس</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_boards_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_boards_err;
                    echo '<span >';
                }
                ?>
            </div>
<!--            NumberOfClippers-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المقلط</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_clippers_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_clippers_err;
                    echo '<span >';
                }
                ?>
            </div>
<!--            NumberOfWarehouse-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المستودعات</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_Warehouses_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_Warehouses_err;
                    echo '<span >';
                }
                ?>
            </div>

<!--            NumberOfToilets-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected> عدد دورات المياه</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($var_number_Bathrooms_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_number_Bathrooms_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           Type of toilets-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select " name="form_Typeoftoilets" aria-label="Default select example">
                    <option selected  value="">نوع دورات المياه </option>
                    <?php if (!empty($length_Type_of_toilets)) {
                        for ($i = 0; $i < $length_Type_of_toilets; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_Type_of_toilets)) {
                                echo $arra_list_Type_of_toilets[$i];
                            } ?>">
                                <?php if (!empty($arra_list_Type_of_toilets)) {
                                    echo $arra_list_Type_of_toilets[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Typeoftoilets_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Typeoftoilets_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Additional features-->
            <div class="form-group text-lg-start form-label ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>


            <div class="col-md-4">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
