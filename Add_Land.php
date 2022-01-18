<?php


include "connection.php";
include "header.php";
include "fun.php";

?>

<!--  إضافه مميزات إضافي للDB -->


<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container ">
    <!--    Verify that the land is add-->
    <?php
    if (isset( $alert_insert_land_by_successfully)){
        echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
        echo   $alert_insert_land_by_successfully;
        echo '  </div>';
    }
    ?>


    <!--   the land addition SQL -->

    <?php

    if (isset($_POST['submit_form_add_land']))
    {
        $count_Land =0;
        if (empty($_POST["F_space"])) {  // F_space
            $space_Err = "حقل اجباري";
            $_POST["F_space"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_space')) {
                $space= test_input(filter_var($_POST["F_space"], FILTER_SANITIZE_NUMBER_INT));
                $count_Land += 1;
            }
        }

//*************************************  f_property_age   *********************************

        if (empty($_POST["F_property_age"])) {  // f_property_age
            $property_age_Err = "حقل اجباري";
            $_POST["F_property_age"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_property_age')) {
                $property_age= test_input(filter_var($_POST["F_property_age"], FILTER_SANITIZE_NUMBER_INT));
                $count_Land += 1;
            }
        }


//******************************************* check form_price ***********************************************

        if (empty($_POST["F_price"])) {  // $f_details
            $price_Err = "حقل اجباري";
            $_POST["F_price"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_price')) {
                $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
                $count_Land += 1;
            }
        }


//*************************************  form_TypeOfOffer    *********************************
        if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
            $Type_sale_Err = "حقل اجباري";
            $_POST["F_Type_sale"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
                $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
                $count_Land += 1;
            }
        }


//************************************* f_Num_streets *********************************

        if (empty($_POST["F_Num_streets"])) {  // F_Num_streets
            $Num_streets_Err = "حقل اجباري";
            $_POST["F_Num_streets"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_streets')) {
                $Num_streets = test_input(filter_var($_POST["F_Num_streets"], FILTER_SANITIZE_NUMBER_INT));
                $count_Land += 1;
            }
        }

//************************************* F_diraction    *********************************
        if (empty($_POST["F_diraction"])) {
            $diraction_Err = "حقل اجباري";
            $_POST["F_diraction"] = '';
        }
        else{if (filter_has_var(INPUT_POST, 'F_diraction')) {

            $diraction = test_input(filter_var($_POST["F_diraction"], FILTER_SANITIZE_STRING));
            $count_Land +=1;}}

//******************************************* F_Type_instrument ***********************************************


        if (empty($_POST["F_Type_instrument"])) {  // $f_details  $list_Type_instrument
            $Type_instrument_Err = "حقل اجباري";
            $_POST["F_Type_instrument"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_instrument')) {
                $Type_instrument= test_input(filter_var($_POST["F_Type_instrument"], FILTER_SANITIZE_STRING));
                $count_Land+=1;
            }
        }
//*************************************  form_Features  *********************************

        if (empty($_POST["form_Features"])) {
            $Features_Err = "حقل اجباري";
            $_POST["form_Features"] = '';
        }
        else{if (filter_has_var(INPUT_POST, 'form_Features')) {

            $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
            $count_Land +=1;}}







//******************************************* check f_pay_method ***********************************************
        if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
            $pay_method_Err = "حقل اجباري";
            $_POST["F_pay_method"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_pay_method')) {
                $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
                $count_Land+=1;
            }
        }
        ?>
        <?php
//************************************* sql add hotel *********************************  start
//        echo $count_Land;
// Start SQL Connection
        if ($count_Land === 9 ){ // Start condition of count

            if (isset($pdo)){ // Start SQL Conn -- 21

                try { // Start try catch --
                    $SQL = 'insert into land 
    (id,Type_sale,Num_streets,Direction,Type_Instrument,Space,Price,property_age,features,pay_method) 
    VALUES(:id,:Type_sale,:Num_streets,:Direction,:Type_Instrument,:Space,:Price,:property_age,:features,:pay_method)';

                    $stmt=$pdo->prepare($SQL);
                    $stmt->execute($r = array(
                        'id'=> null,
                        'Type_sale'=>$Type_sale,
                        'Num_streets'=>$Num_streets,
                        'Direction'=>$diraction,
                        'Type_Instrument'=>$Type_instrument,
                        'Space'=>$space,
                        'Price'=>$price,
                        'property_age'=>$property_age,
                        'features'=> $Features_var,
                        'pay_method'=>$pay_method
                    ) );
                } catch (Exception $e) {
                    throw new \PDOException($e->getMessage(),
                        (int)$e->getCode());
                } // End ty catch --
            } // End SQL Conn -- 9
        } // End condition of count
// End condition of add_hotel

// ***********************************  sql_add_hotel  *****************************  end

    }
    ?>

    <!--   the land addition form-->
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافة أرض</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-4 justify-content-center mt-4" method="post" action="Add_Land.php">
            <!--            space-->
            <div class="col">
                <label for="phone_number_form" class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="F_space">
                <?php
                if (isset($space_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $space_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            property age-->
            <div class="col">
                <label for="phone_number_form" class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="F_property_age">
                <?php
                if (isset($property_age_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $property_age_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            price    -->
            <div class="col">
                <label for="phone_number_form" class="form-label"> السعر</label>
                <input type="number" class="form-control" id="phone_number_form" name="F_price">
                <?php
                if (isset($price_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $price_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            type of offer -->
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
            <!--            Instrument type-->
            <div class="col">
                <label for="F_Type_instrument">نوع الصك</label>
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
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo   $Type_instrument_Err;
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
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Num_streets_Err ;
                    echo '<span >';
                }
                ?>
            </div>

            <!--            direction-->
            <div class="col">
                <label for="F_Type_sale" class="form-label"> اتجاه الأرض  </label>
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
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
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
            <!--            Additional features-->
            <div class="col-9 form-group  form-label">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" name="form_Features" id="exampleFormControlTextarea1" rows="5"></textarea>
                <?php
                if (isset($Features_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Features_Err;
                    echo '<span >';
                }
                ?>

            </div>
            <br><br><br>
            <!--            save button-->
            <div class="col-3  m-5 ">

                <button type="submit" onclick="myFunction()" class="btn btn-primary text-light form-control"  name="submit_form_add_land">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
