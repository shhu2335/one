<?php


include "connection.php";
include "fun.php";

?>

<!--    Verify that the Farm is add-->
<?php
if (isset($alert_insert_farm_by_successfully)){
    echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
    echo   $alert_insert_farm_by_successfully;
    echo '  </div>';
}
?>


<?php

// ======================  start submit_farm  ======================
if(isset($_POST['submit_form_add_farm']))
{  $count_farm =0;
    //************************************* F_Num_Wells  *********************************
    if (empty($_POST["F_Num_Wells"])) {
        $Num_wells_Err = "حقل اجباري.";
        $_POST["F_Num_Wells"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Num_Wells')) {

        $Num_wells = test_input(filter_var($_POST["F_Num_Wells"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}

    //*************************************  form_TypeOfOffer    *********************************
    if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
        $Type_sale_Err = "حقل اجباري";
        $_POST["F_Type_sale"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
            $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
            $count_farm += 1;
        }
    }
//*************************************  F_Num_Palms *********************************

    if (empty($_POST["F_Num_Palms"])) {
        $Num_palms_Err = "حقل اجباري ";
        $_POST["F_Num_Palms"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Num_Palms')) {

        $Num_palms = test_input(filter_var($_POST["F_Num_Palms"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}
//*************************************  F_Num_Trees  *********************************

    if (empty($_POST["F_Num_Trees"])) {
        $Num_trees_Err = "حقل اجباري";
        $_POST["F_Num_Trees"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Num_Trees')) {

        $Num_trees = test_input(filter_var($_POST["F_Num_Trees"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}
    //*************************************  form_Num_toilets  *********************************

    if (empty($_POST["F_Num_Toilets"])) {  // F_Num_Toilets
        $Num_Toilets_Err = "حقل اجباري";
        $_POST["F_Num_Toilets"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Toilets')) {
            $Num_Toilets= test_input(filter_var($_POST["F_Num_Toilets"], FILTER_SANITIZE_NUMBER_INT));
            $count_farm+= 1;
        }
    }
    if (empty($_POST["F_Num_streets"])) {  // F_Num_streets
        $Num_streets_Err = "حقل اجباري";
        $_POST["F_Num_streets"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_streets')) {
            $Num_streets = test_input(filter_var($_POST["F_Num_streets"], FILTER_SANITIZE_NUMBER_INT));
            $count_farm += 1;
        }
    }

//************************************* F_Break  *********************************
    if (empty($_POST["F_Break"])) {
        $Break_Err = "حقل إجباري ";
        $_POST["F_Break"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Break')) {

        $Break = test_input(filter_var($_POST["F_Break"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}

//*************************************  F_electricity  *********************************

    if (empty($_POST["F_electricity"])) {
        $electricity_Err = "حقل اجباري";
        $_POST["F_electricity"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_electricity')) {

        $electricity = test_input(filter_var($_POST["F_electricity"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}

//************************************* F_asphalt     *********************************
    if (empty($_POST["F_asphalt"])) {
        $asphalt_var_Err = "حقل اجباري";
        $_POST["F_asphalt"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_asphalt')) {

        $asphalt_var = test_input(filter_var($_POST["F_asphalt"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}

//********************************* form_Typeoftoilets       *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_Err = "حقل اجباري";
        $_POST["form_Typeoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}

//************************************* F_diraction    *********************************
    if (empty($_POST["F_diraction"])) {
        $diraction_Err = "حقل اجباري";
        $_POST["F_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_diraction')) {

        $diraction = test_input(filter_var($_POST["F_diraction"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}

//*************************************  form_Features  *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "حقل اجباري";
        $_POST["form_Features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
        $count_farm +=1;}}



    //************************************** check  form_space *******************************************
    if (empty($_POST["F_space"])) {  // F_space
        $Space_Err = "حقل اجباري";
        $_POST["F_space"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_space')) {
            $space= test_input(filter_var($_POST["F_space"], FILTER_SANITIZE_NUMBER_INT));
            $count_farm += 1;
        }
    }
//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["F_property_age"])) {  // f_property_age
        $property_age_Err = "حقل اجباري";
        $_POST["F_property_age"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_property_age')) {
            $property_age= test_input(filter_var($_POST["F_property_age"], FILTER_SANITIZE_NUMBER_INT));
            $count_farm += 1;
        }
    }

    if (empty($_POST["F_price"])) {  // $f_details
        $price_Err = "حقل اجباري";
        $_POST["F_price"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_price')) {
            $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
            $count_farm+= 1;
        }
    }

// ********************************  form_Typeofinstrument *****************************************



    if (empty($_POST["F_Type_instrument"])) {  // $f_details  $list_Type_instrument
        $Type_instrument_Err = "حقل اجباري";
        $_POST["F_Type_instrument"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Type_instrument')) {
            $Type_instrument= test_input(filter_var($_POST["F_Type_instrument"], FILTER_SANITIZE_STRING));
            $count_farm+=1;
        }
    }

    if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
        $pay_method_Err = "حقل اجباري";
        $_POST["F_pay_method"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_pay_method')) {
            $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
            $count_farm+= 1;
        }
    }
// ********************************  form add farm ****************************************** end

// ********************************  sql add farm ****************************************** start
    if ( $count_farm ===17 ){
//    echo $count_farm;
        $sql=  'insert into farm (id, Num_Wells, Num_Palms, Num_Trees, Num_Toilets, Break, Electricity, Asphalt, Type_Toilets, Diraction, Type_Sale, Features, Type_Instrument, Space, Price, property_age, pay_method) 
         values(:id, :Num_Wells, :Num_Palms, :Num_Trees, :Num_Toilets, :Break, :Electricity, :Asphalt, :Type_Toilets, :Diraction, :Type_Sale, :Features, :Type_Instrument, :Space, :Price, :property_age, :pay_method)' ;
        if (isset($pdo))
        {
            $stmt=$pdo->prepare($sql);

        }
        $stmt->execute($r = array(
            'id'=>null,
            'Num_Wells'=>$Num_wells,
            'Num_Palms'=>$Num_palms,
            'Num_Trees'=>$Num_trees,
            'Num_Toilets'=>$Num_Toilets,
            'Break'=>$Break,
            'Electricity'=>$electricity,
            'Asphalt'=>$asphalt_var,
            'Type_Toilets'=>$Typeoftoilets_var,
            'Diraction'=>$diraction,
            'Type_Sale'=>$Type_sale,
            'Features'=>$Features_var,
            'Type_Instrument'=>$Type_instrument,
            'Space'=>$space,
            'Price'=>$price,
            'property_age'=>$property_age,
            'pay_method'=>$pay_method


        ));





// ********************************  sql add farm ****************************************** end
        $alert_insert_farm_by_successfully = "تمت الإضافه بنجاح ";

    }
}

// ======================   end submit_farm   ======================

?>

<!--  إضافه مميزات إضافي للDB -->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

include "header.php";
?>
<!--   the Farm addition form-->
<div class="container">
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه مزرعة</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-5 justify-content-center mt-4" method="POST" action="Add_Farm.php">
            <!--            space-->
            <div class="col">
                <label for="F_space" class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="F_space" placeholder="المساحه">
                <?php
                if (isset($Space_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Space_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            property age-->
            <div class="col">
                <label for="f_property_age" class="form-label">عمر العقار</label>
                <input type="number"  class="form-control" id="phone_number_form" name="F_property_age" placeholder="عمر العقار">
                <?php
                if (isset($property_age_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $property_age_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            price-->
            <div class="col">
                <label for="F_price" class="form-label">قيمة الايجار </label>
                <input type="number"  class="form-control" id="F_price" name="F_price" placeholder="قيمة الايجار  ">
                <?php
                if (isset($price_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $price_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            F_Type_sale -->
            <div class="col">
                <label for="F_Type_sale" class="form-label">نوع العرض العقار</label>
                <select class="form-select"  name="F_Type_sale" aria-label="Default select example">
                    <option selected value="">نوع العرض العقار</option>
                    <?php if (!empty($length_State)) {
                        for ($i = 0; $i < $length_State; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_State)) {
                                echo $arra_list_State[$i];
                            } ?>">
                                <?php if (!empty($arra_list_State)) {
                                    echo $arra_list_State[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Type_sale_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Type_sale_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--         number of wells  -->
            <div class="col">
                <label for="F_Type_sale" class="form-label">  عدد الأبار</label>
                <select class="form-select"  name="F_Num_Wells" aria-label="Default select example">
                    <option selected value="">عدد الأبار </option>
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
                if (isset($Num_wells_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Num_wells_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of palm -->
            <div class="col">
                <label for="F_Type_sale" class="form-label">  عدد النخيل</label>
                <select class="form-select" name="F_Num_Palms" aria-label="Default select example">
                    <option selected value="">عدد النخيل </option>
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
                if (isset($Num_palms_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Num_palms_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--             number of trees-->
            <div class="col">
                <label for="F_Type_sale" class="form-label">عدد الأشجار  </label>

                <select class="form-select" name="F_Num_Trees" aria-label="Default select example">
                    <option selected value="">عدد الأشجار </option>
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
                if (isset($Num_trees_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Num_trees_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--             number of toilets-->
            <div class="col">
                <label for="F_Num_Toilets" class="form-label"> عدد دورات المياه</label>
                <select class="form-select" name="F_Num_Toilets" aria-label="Default select example">
                    <option selected value=""> عدد دورات المياه</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Toilets_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Toilets_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of streets-->
            <div class="col">
                <label for="F_Num_streets" class="form-label">  عدد الشوارع </label>

                <select class="form-select " name="F_Num_streets" aria-label="Default select example">
                    <option selected  value="">عدد الشوارع </option>
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
                if (isset( $Num_streets_Err )){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Num_streets_Err ;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            direction-->
            <div class="col">
                <label for="F_Type_sale" class="form-label"> اتجاه المزرعه  </label>

                <select class="form-select" name="F_diraction" aria-label="Default select example">
                    <option selected value="">الإتجاه </option>
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
                if (isset($diraction_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $diraction_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--     F_pay_method   -->
            <div class="col">
                <label for="F_pay_method" class="form-label">طرق الدفع</label>
                <select class="form-select"  name="F_pay_method" aria-label="Default select example">
                    <option selected value="">طرق الدفع</option>
                    <?php if (!empty($length_pay_method)) {
                        for ($i = 0; $i < $length_pay_method; $i++) { ?>
                            <option value="<?php if (!empty($list_pay_method)) {
                                echo $list_pay_method[$i];
                            } ?>">
                                <?php if (!empty($list_pay_method)) {
                                    echo $list_pay_method[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($pay_method_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $pay_method_Err;
                    echo '<span>';
                }
                ?>
            </div>

            <!--           Type of toilets-->
            <div class="col">
                <label for="F_Type_sale" class="form-label">  نوع دورات المياه </label>

                <select class="form-select" name="form_Typeoftoilets" aria-label="Default select example">
                    <option selected value="">نوع دورات المياه </option>
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
            <!--          It contains rest-->
            <div class="col-3">
                <label for="F_Type_sale" class="form-label"> هل المزرعه تحتوي على استراحه  </label>

                <select class="form-select" name="F_Break" aria-label="Default select example">
                    <option selected value="">تحتوي على استراحه  </option>
                    <?php if (!empty($length_yes_or_no)) {
                        for ($i = 0; $i < $length_yes_or_no; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_yes_or_no)) {
                                echo $arra_list_yes_or_no[$i];
                            } ?>">
                                <?php if (!empty($arra_list_yes_or_no)) {
                                    echo $arra_list_yes_or_no[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Break_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $Break_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           contain electricity -->
            <div class="col-3">
                <label for="F_Type_sale" class="form-label"> هل المزرعه تحتوي على الكهرباء  </label>

                <select class="form-select" name="F_electricity" aria-label="Default select example">
                    <option selected value="">تحتوي على كهرباء </option>
                    <?php if (!empty($length_yes_or_no)) {
                        for ($i = 0; $i < $length_yes_or_no; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_yes_or_no)) {
                                echo $arra_list_yes_or_no[$i];
                            } ?>">
                                <?php if (!empty($arra_list_yes_or_no)) {
                                    echo $arra_list_yes_or_no[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($electricity_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $electricity_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           connected to asphalt   -->
            <div class="col-3">
                <label for="F_Type_sale" class="form-label"> هل المزرعه متصله بالإسفلت  </label>

                <select class="form-select" name="F_asphalt" aria-label="Default select example">
                    <option selected value="">متصله بإسفلت </option>
                    <?php if (!empty($length_yes_or_no)) {
                        for ($i = 0; $i < $length_yes_or_no; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_yes_or_no)) {
                                echo $arra_list_yes_or_no[$i];
                            } ?>">
                                <?php if (!empty($arra_list_yes_or_no)) {
                                    echo $arra_list_yes_or_no[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($asphalt_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo  $asphalt_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Instrument type-->
            <div class="col">
                <label for="exampleFormControlTextarea1">نوع الصك</label>

                <select class="form-select"  aria-label="Default select example" name="F_Type_instrument">
                    <option selected value="">نوع الصك </option>
                    <?php if (!empty($length_Typeofinstrument)) {
                        for ($i = 0; $i < $length_Typeofinstrument; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_Typeofinstrument)) {
                                echo $arra_list_Typeofinstrument[$i];
                            } ?>">
                                <?php if (!empty($arra_list_Typeofinstrument)) {
                                    echo $arra_list_Typeofinstrument[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Type_instrument_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo   $Type_instrument_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Additional features-->
            <div class="col-9 form-group  form-label">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" name="form_Features" id="exampleFormControlTextarea1" rows="5"></textarea>
                <?php
                if (isset($Features_var_Err)){
                    echo '<span  class="badge bg-danger rounded-pill">';
                    echo $Features_var_Err;
                    echo '<span >';
                }
                ?>

            </div>
            <!--            save button-->
            <div class="col-4">
                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_farm">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>




