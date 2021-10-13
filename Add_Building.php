<?php


include "conection.php";
include "header.php";
include 'fun.php';

?>

<!--  إضافه نوع العرض للDB -->
<!-- Numberoftrees ؟؟ -->
<!--  إضافه عدد الطوابق للDB -->
<!--  إضافه توفر مصعد او لا  للDB -->
<!--  إضافه عدد المواقف  للDB -->
<!--  إضافه عدد الشوارع  للDB -->
<!--  إضافه الواجهه  للDB -->




<html lang="ar" dir="rtl">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<!---->

<body>


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
    <div class="text-center w-auto  bg-light  shadow-lg  rounded-3">
        <p class="fw-bolder  text-light shadow  text-center  p-2 rounded-1 f82a8" >إضافه عماره</p>
        <form class="row g-3  p-5  text-end" method="POST" action="Add_Building.php">
                         <!--            space-->
            <div class="form-label col-md-6 text-end">
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
            <div class="form-label col-md-6 text-end">
                <label for="phone_number_form" class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_AgeOfProperty">
                <?php
                if (isset($AgeOfProperty_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $AgeOfProperty_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                         <!--            type of offer -->
            <div class="col-md-4 form-label  text-end">
<!--                <label > </label>-->
                <select class="form-select" aria-label="Default select example">

                    <option selected value="">-- الغرض من عرض العقار --</option>
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
                if (isset($taype_of_offer_var_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $taype_of_offer_var_Err ;
                    echo '<span >';
                }
                ?>

            </div>
                         <!--            Number of apartments-->
            <div class="col-md-4 text-end">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الشقق </option>
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
            <div class="col-md-4 text-end">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الطوابق </option>
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
            <div class="col-md-4 text-end">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المصاعد </option>
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
            <div class="col-md-4 text-end">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المواقف </option>
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
            <div class="col-md-4 text-end">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الشوارع </option>
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


            <div class="col-md-6 text-end">
                <p>الواجهه</p>
                <select class="form-select"  aria-label="Default select example">
                    <option selected>اختيار </option>
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

            <!--            price-->
            <div class="form-label col-md-6 text-end"><
                <p for="phone_number_form" class="form-label">سعر المتر</p>
                <input type="number" class="form-control" id="phone_number_form" name="form_price">


                <?php

                if (isset($price_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $price_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
                        <!--            Apartment type-->
            <div class="col-md-6  text-end">
                <label for="phone_number_form" class="form-label">نوع الشقق </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_double_room" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">ثنائيه</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_triple_room" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2"> ثلاثيه</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_quad_room" id="inlineCheckbox3" value="option3" >
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
            <div class="form-group  form-label text-end">
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

                        <!--            save button-->
            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_building">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
