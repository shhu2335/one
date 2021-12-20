<?php


include "conection.php";
include "header.php";
include "fun.php";
?>
<html>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->


</head>
<!---->

<body>

<div class="container">
    <div class="mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" >
        <p class="mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه استديو</p>
        <form class="row  g-3 p-5 text-end" method="post" action="Add_Studio.php">
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
            <!--            type of offer -->
            <div class="col-md-4 form-label  text-start">
                <!--                <label > </label>-->
                <select class="form-select" name="form_TypeOfOffer" aria-label="Default select example">

                    <option selected  value="" value="">-- الغرض من عرض العقار --</option>
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
                if (isset($TypeOfOffer_var_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $TypeOfOffer_var_Err;
                    echo '<span >';
                }
                ?>


            </div>
            <!--            Meeting_Rooms-->
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد غرف الإجتماعات</option>
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
                if (isset($var_Meeting_Rooms_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $var_Meeting_Rooms_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--             number of kitchens -->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberofkitchen" aria-label="Default select example">
                    <option selected  value="">عدد المطابخ </option>
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
                if (isset(   $Numberofkitchen_var_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo   $Numberofkitchen_var_Err ;
                    echo '<span >';
                }
                ?>
            </div>

            <!--          kitchen type   -->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_typeofkitchen" aria-label="Default select example">
                    <option selected  value="">نوع المطبخ  </option>
                    <?php if (!empty($length_Type_kitchen)) {
                        for ($i = 0; $i < $length_Type_kitchen; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_Type_kitchen)) {
                                echo $arra_list_Type_kitchen[$i];
                            } ?>">
                                <?php if (!empty($arra_list_Type_kitchen)) {
                                    echo $arra_list_Type_kitchen[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset(  $var_type_Kitchen_err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo    $var_type_Kitchen_err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of bedrooms-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberofbedrooms" aria-label="Default select example">
                    <option selected  value="">عدد غرف النوم </option>
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

            <!--           number of boards -->
            <div class="col-md-4 text-start">
                <select class="form-select" name="form_BoardNumber" aria-label="Default select example">
                    <option selected  value="">عدد المجالس   </option>
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
                if (isset( $BoardNumber_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $BoardNumber_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Warehouses-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select"  name="form_numberofwarehouses" aria-label="Default select example">
                    <option selected  value="">عدد المستودعات</option>
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
                if (isset( $Numberofwarehouse_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Numberofwarehouse_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--             number of toilets-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberoftoilets" aria-label="Default select example">
                    <option selected  value="">عدد دورات المياه </option>
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
                if (isset( $Numberoftoilets_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Numberoftoilets_var_Err;
                    echo '<span >';
                }
                ?>
            </div>


                <!--            Additional features-->
                <div class="form-group  form-label text-end">
                    <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                    <textarea class="form-control"  name="form_features" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <?php
                    if (isset($features_var_Err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $features_var_Err;
                        echo '<span >';
                    }
                    ?>

                </div>


            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">حفظ
                </button>
            </div>
        </form>


    </div>

</div>




</body>

</html>

<?php include "footer.php"; ?>
