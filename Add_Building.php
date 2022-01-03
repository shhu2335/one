<?php

include "connection.php";
include 'fun.php';

?>

<!--  إضافه نوع العرض للDB -->
<!-- Numberoftrees ؟؟ -->
<!--  إضافه عدد الطوابق للDB -->
<!--  إضافه توفر مصعد او لا  للDB -->
<!--  إضافه عدد المواقف  للDB -->
<!--  إضافه عدد الشوارع  للDB -->
<!--  إضافه الواجهه  للDB -->


<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إضافه عمارة</title>
</head>
<body>

<?php   include "header.php"; ?>


<div class="container">

                        <!--    Verify that the building is add-->
    <?php
    if (isset($alert_insert_building_by_successfully)){
        echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
        echo   $alert_insert_building_by_successfully;
        echo '  </div>';
    }
    ?>
                        <!--    Building addition form-->
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه عمارة</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-5 justify-content-center mt-4" method="POST" action="Add_Building.php">
                         <!--            space-->
            <div class="form-label col text-end">
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
            <div class="form-label col text-end">
                <label for="phone_number_form"  class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_AgeOfProperty">
                <?php
                if (isset($AgeOfProperty_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $AgeOfProperty_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            price-->
            <div class="form-label col text-end">
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
                         <!--            type of offer -->
            <div class="col form-label  text-start">
<!--                <label > </label>-->
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
                if (isset($taype_of_offer_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $taype_of_offer_var_Err;
                    echo '<span >';
                }else{}
                ?>

            </div>
                         <!--            Number of apartments-->
            <div class="col text-start">
                <select class="form-select" aria-label="Default select example" name="form_num_apartment">
                    <option selected value="">عدد الشقق </option>
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
                if (isset($num_apartment_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $num_apartment_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            the number of floors-->
            <div class="col text-start">
                <select class="form-select" aria-label="Default select example" name="form_num_flor">
                    <option selected value="">عدد الطوابق </option>
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
                if (isset($num_flor_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $num_flor_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            number of lifts-->
            <div class="col text-start">
                <select class="form-select" aria-label="Default select example" name="form_num_left">
                    <option selected value="">عدد المصاعد </option>
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
                if (isset($num_left_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $num_left_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            Number of parking-->
            <div class="col text-start">
                <select class="form-select" aria-label="Default select example" name="form_num_parking">
                    <option selected value="">عدد المواقف </option>
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
                if (isset($num_parking_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $num_parking_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            number of streets-->
            <div class="col text-start">
                <select class="form-select" aria-label="Default select example" name="form_num_Street">
                    <option selected value="">عدد الشوارع </option>
                    <?php if (!empty($length_numberStreets)) {
                        for ($i = 0; $i < $length_numberStreets; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberStreets)) {
                                echo $arra_list_numberStreets[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberStreets)) {
                                    echo $arra_list_numberStreets[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($num_Street_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $num_Street_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            direction-->
            <div class="col text-start">
                <select class="form-select"  aria-label="Default select example" name="form_direction">
                    <option selected value="">الواجهه </option>
                    <?php if (!empty($length_direction)) {
                        for ($i = 0; $i < $length_direction; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_direction)) {
                                echo $arra_list_direction[$i];
                            } ?>">
                                <?php if (!empty($arra_list_direction)) {
                                    echo $arra_list_direction[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($direction_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $direction_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            Apartment type-->
            <div class="col-md-12  text-end">
                <label for="phone_number_form" class="form-label">نوع الشقق </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_room1" id="inlineCheckbox1" value="ثنائيه ">
                    <label class="form-check-label" for="inlineCheckbox1">ثنائيه</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_room2" id="inlineCheckbox2" value="ثلاثيه ">
                    <label class="form-check-label" for="inlineCheckbox2"> ثلاثيه</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_room3" id="inlineCheckbox3" value="رباعيه " >
                    <label class="form-check-label" for="inlineCheckbox3"> رباعيه</label>
                </div>
                <?php
                if (isset($double_room_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $double_room_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            Additional features-->
            <div class="form-group  form-label text-start col-9 ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" name="form_features" id="exampleFormControlTextarea1" rows="5"></textarea>
                <?php
                if (isset($features_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $features_var_Err;
                    echo '<span >';
                }
                ?>

            </div>
        </form>      <!--            save button-->
            <div class="col-md-2 mx-auto ">
                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_building">إضافة
                </button>
            </div>



    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
