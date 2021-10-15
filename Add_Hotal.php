<?php


include "conection.php";
include "header.php";
include "fun.php";

?>

<!--  هل الخدمات تكون نص او لست -->
<!--  Supplementnumber??! -->
<!--  نوع الصك ??! -->
<!-- المواقف سفليه او خارجيه  -->


<html lang="ar" dir="rtl">




<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">


</head>
<!---->

<body>


<div class="container p-5 ">

    <!--    Verify that the hotal is add-->
    <?php
    if (isset( $alert_insert_hotal_by_successfully)){
        echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
        echo   $alert_insert_hotal_by_successfully;
        echo '  </div>';
    }
    ?>


    <!--   the hotal addition form-->
    <div class="w-auto mx-auto p-3  bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه فندق</p>
        <form class="row g-3  p-5  text-end" method="POST" action="Add_Hotal.php">
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
                if (isset(  $TypeOfOffer_var_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo   $TypeOfOffer_var_Err ;
                    echo '<span >';
                }
                ?>

            </div>
            <!--            Number of Room-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select"  aria-label="Default select example">
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
                if (isset($numberofrooms_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $numberofrooms_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of wings-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الأجنحه </option>
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
            <!--            the number of floors-->
            <div class="col-md-4 form-label text-start">
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
                if (isset($thenumberoffloors_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $thenumberoffloors_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of lifts-->
            <div class="col-md-4 form-label text-start">
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
                if (isset($numberoflifts_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $numberoflifts_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of meeting rooms-->
            <div class="col-md-4 form-label text-start">
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
                if (isset($Numberofmeetingroom_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Numberofmeetingroom_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Warehouses-->
            <div class="col-md-4 form-label text-start">
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
                if (isset($numberofwarehouses_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $numberofwarehouses_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Restaurants-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المطاعم</option>
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
                if (isset($Numberofrestaurants_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Numberofrestaurants_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Kitchens-->
            <div class="col-md-4 form-label text-start">
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
                if (isset($numberofkitchens_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $numberofkitchens_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of parking-->
            <div class="col-md-4 form-label text-start">
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
                if (isset( $Numberofparking_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Numberofparking_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of streets-->
            <div class="col-md-4 form-label text-start">
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
                if (isset($numberofstreet_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $numberofstreet_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of Reception-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الإستقبال </option>
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
                if (isset($Reception_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Reception_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           Type of toilets-->
            <div class="col-md-4 form-label text-start">
                <select class="form-select" aria-label="Default select example">
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
            <!--            direction-->
            <div class="col-md-4 text-start">
                <select class="form-select"  aria-label="Default select example">
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
                <textarea class="form-control" name="form_features" id="exampleFormControlTextarea1" rows="5"></textarea>
                <?php
                if (isset( $Features_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Features_var_Err;
                    echo '<span >';
                }
                ?>

            </div>
            <!--            save button-->
            <div class="col-md-4 ">
                <button type="submit" onclick="myFunction()" class="btn btn-primary text-light form-control"  name="submit_form_add_hotel">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
