<?php


include "conection.php";
include "header.php";
include "fun.php";

?>
<html lang="ar" dir="rtl">




<head>



</head>
<!---->

<body>

<!--    Verify that the villa is add-->
<?php
if (isset( $alert_insert_villa_by_successfully)){
    echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
    echo   $alert_insert_villa_by_successfully;
    echo '  </div>';
}
?>
<!--   the villa addition form-->
<div class="container">
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه فلة</p>
        <form class="row g-3  p-5  text-end" method="POST" action="Add_Villa.php">
            <!--            space-->
            <div class="form-label col-md-6 text-start">
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
            <div class="form-label col-md-6 text-start">
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
            <div class="col-md-4 form-label  text-start">
                <!--                <label > </label>-->
                <select class="form-select" name="form_TypeOfOffer" aria-label="Default select example">

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
                if (isset($TypeOfOffer_var_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $TypeOfOffer_var_Err;
                    echo '<span >';
                }
                ?>

            </div>
            <!--             number of toilets-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberoftoilets" aria-label="Default select example">
                    <option selected>عدد دورات المياه </option>
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
            <!--           Type of toilets-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Typeoftoilets" aria-label="Default select example">
                    <option selected>نوع دورات المياه </option>
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
            <!--            number of halls  -->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberoflounges" aria-label="Default select example">
                    <option selected>عدد الصالات  </option>
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
                if (isset(  $Numberoflounges_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo   $Numberoflounges_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of clippers-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberofclippers" aria-label="Default select example">
                    <option selected>عدد المقلط </option>
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
                if (isset(  $Numberofclippers_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo   $Numberofclippers_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--             number of kitchens -->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberofkitchen" aria-label="Default select example">
                    <option selected>عدد المطابخ </option>
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
            <!--            number of bedrooms-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_Numberofbedrooms" aria-label="Default select example">
                    <option selected>عدد غرف النوم </option>
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
                if (isset($Numberofbedrooms_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Numberofbedrooms_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of wings -->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_numberofwings" aria-label="Default select example">
                    <option selected>عدد الأجنحه   </option>
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
                if (isset($numberofwings_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $numberofwings_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Warehouses-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select"  name="form_numberofwarehouses" aria-label="Default select example">
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
                if (isset( $Numberofwarehouse_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Numberofwarehouse_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
           <!--            number of streets-->
            <div class="col-md-4 text-start">
                <select class="form-select" name="form_numberofstreet" aria-label="Default select example">
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
                if (isset(  $numberofstreet_var_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo    $numberofstreet_var_Err ;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           number of boards -->
            <div class="col-md-4 text-start">
                <select class="form-select" name="form_BoardNumber" aria-label="Default select example">
                    <option selected>عدد المجالس   </option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberStreets[$i];
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
            <!--          kitchen type   -->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" name="form_typeofkitchen" aria-label="Default select example">
                    <option selected>نوع المطبخ  </option>
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
                if (isset(  $typeofkitchen_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo    $typeofkitchen_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            direction-->
            <div class="col-md-4 text-start">
                <select class="form-select" name="form_diraction" aria-label="Default select example">
                    <option selected>الواجهه </option>
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
                if (isset($diraction_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $diraction_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Additional features-->
            <div class="form-group  form-label text-start">
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
            <!--            save button-->
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_villa">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
