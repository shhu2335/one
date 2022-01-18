<?php


include "connection.php";
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


    <!--   the hotal addition SQL-->
    <?php


    // ***********************************  form_add_hotel  ***********************************  start
    if (isset($_POST['submit_form_add_hotel'])) {
        $count_hotel =0;// Define a variable  to count how many values are filed
//*************************************  form_TypeOfOffer    *********************************
        if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
            $Type_sale_Err = "حقل اجباري";
            $_POST["F_Type_sale"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
                $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }

//*************************************  f_Num_Rooms     *********************************
        if (empty($_POST["F_Num_Rooms"])) {  // $f_Num_Rooms
            $Num_Rooms_Err = "حقل اجباري";
            $_POST["F_Num_Rooms"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Rooms')) {
                $Num_Rooms=test_input(filter_var($_POST["F_Num_Rooms"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }
// ***********************************  f_Num_Wings   *************************************

        if (empty($_POST["F_Num_Wings"])) {  // $f_Num_Wings
            $Num_Wings_Err = "حقل اجباري";
            $_POST["F_Num_Wings"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Wings')) {
                $Num_Wings = test_input(filter_var($_POST["F_Num_Wings"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }

//*************************************   f_Num_Floors  *********************************

        if (empty($_POST["F_Num_Floors"])) {  // $f_Num_Floors
            $Num_Floors_Err = "حقل اجباري";
            $_POST["F_Num_Floors"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Floors')) {
                $Num_Floors = test_input(filter_var($_POST["F_Num_Floors"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }

//*************************************  f_Num_lifts     *********************************

        if (empty($_POST["F_Num_lifts"])) {  // $f_Num_lifts
            $Num_lifts_Err = "حقل اجباري";
            $_POST["F_Num_lifts"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_lifts')) {
                $Num_lifts = test_input(filter_var($_POST["F_Num_lifts"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }

//*************************************   f_Num_MeetingRoom   *********************************
        if (empty($_POST["F_Num_MeetingRoom"])) {  // $f_Num_MeetingRoom
            $Num_MeetingRoom_Err = "حقل اجباري";
            $_POST["F_Num_MeetingRoom"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_MeetingRoom')) {
                $Num_MeetingRoom = test_input(filter_var($_POST["F_Num_MeetingRoom"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }

//*************************************   f_Num_Warehouse   *********************************

        if (empty($_POST["F_Num_Warehouse"])) {  // $f_Num_Warehouse
            $Num_Warehouse_Err = "حقل اجباري";
            $_POST["F_Num_Warehouse"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Warehouse')) {
                $Num_Warehouse = test_input(filter_var($_POST["F_Num_Warehouse"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }

//*************************************   fNum_Restaurants  *********************************

        if (empty($_POST["F_Num_Restaurants"])) {  // $f_Num_Restaurants
            $Num_Restaurants_Err = "حقل اجباري";
            $_POST["F_Num_Restaurants"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Restaurants')) {
                $Num_Restaurants = test_input(filter_var($_POST["F_Num_Restaurants"], FILTER_SANITIZE_STRING));
                $count_hotel += 1;
            }
        }
//*************************************  f_Num_Kitchen  *********************************

        if (empty($_POST["F_Num_Kitchen"])) {  // F_Num_Kitchen
            $Num_Kitchen_Err = "حقل اجباري";
            $_POST["F_Num_Kitchen"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Kitchen')) {
                $Num_kitchen = test_input(filter_var($_POST["F_Num_Kitchen"], FILTER_SANITIZE_NUMBER_INT));
                $count_hotel += 1;
            }
        }
//*************************************                   *********************************

//************************************* form_Num_parking     *********************************

        if (empty($_POST["F_Num_parking"])) {  // F_Num_parking
            $Num_parking_Err = "حقل اجباري";
            $_POST["F_Num_parking"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_parking')) {
                $Num_parking = test_input(filter_var($_POST["F_Num_parking"], FILTER_SANITIZE_NUMBER_INT));
                $count_hotel += 1;
            }
        }
//************************************* f_Num_streets *********************************

        if (empty($_POST["F_Num_streets"])) {  // F_Num_streets
            $Num_streets_Err = "حقل اجباري";
            $_POST["F_Num_streets"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_streets')) {
                $Num_streets = test_input(filter_var($_POST["F_Num_streets"], FILTER_SANITIZE_NUMBER_INT));
                $count_hotel += 1;
            }
        }
//*************************************  form_Reception    *********************************

        if (empty($_POST["F_Reception"])) {  // F_Reception
            $Reception_Err = "حقل اجباري";
            $_POST["F_Reception"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Reception')) {
                $Reception= test_input(filter_var($_POST["F_Reception"], FILTER_SANITIZE_NUMBER_INT));
                $count_hotel += 1;
            }
        }
//********************************* F_Typeoftoilets       *********************************

        if (empty($_POST["F_Typeoftoilets"])) {
            $Typeoftoilets_Err = "حقل اجباري";
            $_POST["F_Typeoftoilets"] = '';
        }
        else{if (filter_has_var(INPUT_POST, 'F_Typeoftoilets')) {

            $Typeoftoilets_var = test_input(filter_var($_POST["F_Typeoftoilets"], FILTER_SANITIZE_STRING));
            $count_hotel +=1;}}

//*************************************  F_diraction  *********************************
        if (empty($_POST["F_diraction"])) {
            $diraction_var_Err = "حقل اجباري";
            $_POST["F_diraction"] = '';
        }
        else{if (filter_has_var(INPUT_POST, 'F_diraction')) {

            $diraction_var = test_input(filter_var($_POST["F_diraction"], FILTER_SANITIZE_STRING));
            $count_hotel  +=1; }}

//************************************* F_Features *********************************

        if (empty($_POST["F_Features"])) {
            $Features_Err = "حقل اجباري";
            $_POST["F_Features"] = '';
        }
        else{if (filter_has_var(INPUT_POST, 'F_Features')) {

            $Features_var = test_input(filter_var($_POST["F_Features"], FILTER_SANITIZE_STRING));
            $count_hotel  +=1; }}
//*************************************  check f_space     *********************************

        if (empty($_POST["F_space"])) {  // F_space
            $space_Err = "حقل اجباري";
            $_POST["F_space"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_space')) {
                $space= test_input(filter_var($_POST["F_space"], FILTER_SANITIZE_NUMBER_INT));
                $count_hotel += 1;
            }
        }
//*************************************  f_property_age   *********************************

        if (empty($_POST["F_property_age"])) {  // f_property_age
            $property_age_Err = "حقل اجباري";
            $_POST["F_property_age"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_property_age')) {
                $property_age= test_input(filter_var($_POST["F_property_age"], FILTER_SANITIZE_NUMBER_INT));
                $count_hotel += 1;
            }
        }

//******************************************* check form_price ***********************************************

        if (empty($_POST["F_price"])) {  // $f_details
            $price_Err = "حقل اجباري";
            $_POST["F_price"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_price')) {
                $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
                $count_hotel += 1;
            }
        }
//******************************************* check f_pay_method ***********************************************

        if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
            $pay_method_Err = "حقل اجباري";
            $_POST["F_pay_method"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_pay_method')) {
                $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
                $count_hotel+=1;
            }
        }
        //******************************************* F_Category ***********************************************
        if (empty($_POST["F_Category"])) {  // $f_details  $list_pay_method
            $Category_Err = "حقل اجباري";
            $_POST["F_Category"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Category')) {
                $Category= test_input(filter_var($_POST["F_Category"], FILTER_SANITIZE_STRING));
                $count_hotel+=1;
            }
        }
        //******************************************* F_Type_instrument ***********************************************


        if (empty($_POST["F_Type_instrument"])) {  // $f_details  $list_Type_instrument
            $Type_instrument_Err = "حقل اجباري";
            $_POST["F_Type_instrument"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_instrument')) {
                $Type_instrument= test_input(filter_var($_POST["F_Type_instrument"], FILTER_SANITIZE_STRING));
                $count_hotel+=1;
            }
        }


//*************************************  form add hotel ********************************* end

//************************************* sql add hotel *********************************  start
//        echo $count_hotel;
        // Start SQL Connection
    if ($count_hotel === 21 ){ // Start condition of count

        if (isset($pdo)){ // Start SQL Conn -- 21

            try { // Start try catch --
                $SQL = 'insert into hotel 
    (id,Type_sale,Num_Rooms,Num_Wings,Num_Floors,Num_lifts,Num_MeetingRoom,Num_Warehouse,Num_Restaurants,Num_kitchen,pay_method,Num_parking,Num_streets,Reception,Type_toilets,diraction,Features,Type_instrument,Category,property_age,price,space,property_name)
     VALUES(:id,:Type_sale,:Num_Rooms,:Num_Wings,:Num_Floors,:Num_lifts,:Num_MeetingRoom,:Num_Warehouse,:Num_Restaurants,:Num_kitchen,:pay_method,:Num_parking,:Num_streets,:Reception,:Type_toilets,:diraction,:Features,:Type_instrument,:Category,:property_age,:price,:space,:property_name)';

                $stmt=$pdo->prepare($SQL);
                $stmt->execute($r = array(
                    'id'=> null,
                    'Type_sale'=>$Type_sale,
                    'Num_Rooms'=>$Num_Rooms,
                    'Num_Wings'=>$Num_Wings,
                    'Num_Floors'=>$Num_Floors,
                    'Num_lifts'=>$Num_lifts,
                    'Num_MeetingRoom'=>$Num_MeetingRoom,
                    'Num_Warehouse'=>$Num_Warehouse,
                    'Num_Restaurants'=>$Num_Restaurants,
                    'Num_kitchen'=>$Num_kitchen,
                    'pay_method'=>$pay_method,
                    'Num_parking'=>$Num_parking,
                    'Num_streets'=>$Num_streets ,
                    'Reception'=>$Reception,
                    'Type_toilets'=>$Typeoftoilets_var,
                    'diraction'=>$diraction_var,
                    'Features'=>$Features_var,
                    'Type_instrument'=>$Type_instrument,
                    'Category'=>$Category,
                    'property_age'=>$property_age,
                    'price'=>$price,
                    'space'=>$space,
                    'property_name'=>'فندق'



                )              );
            } catch (Exception $e) {
                throw new \PDOException($e->getMessage(),
                    (int)$e->getCode());
            } // End ty catch --
        } // End SQL Conn -- 21
    } // End condition of count
// End condition of add_hotel

// ***********************************  sql_add_hotel  *****************************  end

    }
    // ***********************************  form_add_hotel  ******************************  end





    ?>

    <!--   the hotal addition form-->
    <div class="w-auto mx-auto p-3  bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه فندق</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-5 justify-content-center mt-4" method="POST" action="Add_Hotal.php">
            <!--            space-->
            <div class="form-label col text-start">
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
            <div class="form-label col text-start">
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
            <div class="form-label col text-start">
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
            <div class="form-label col text-start">
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
            <!--            direction-->
            <div class="col">
                <label for="F_Type_sale" class="form-label">الواجهه </label>
                <select class="form-select" name="F_diraction" aria-label="Default select example">
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
                if (isset($diraction_var_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $diraction_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            F_Category-->
            <div class="form-label col text-start">
                <label for="F_Category" class="form-label">التصنيف</label>
                <select class="form-select"  name="F_Category" aria-label="Default select example">
                    <option selected value="">التنصنيف</option>
                    <?php if (!empty($length_Category)) {
                        for ($i = 0; $i < $length_Category; $i++) { ?>
                            <option value="<?php if (!empty($list_Category)) {
                                echo $list_Category[$i];
                            } ?>">
                                <?php if (!empty($list_Category)) {
                                    echo $list_Category[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Category_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Category_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--     F_pay_method   -->
            <div class="form-label col text-start">
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
            <!--            Instrument type-->
            <div class="col form-label text-start">
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
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo   $Type_instrument_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Room-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label">عدد الغرف </label>

                <select class="form-select " name="F_Num_Rooms"  aria-label="Default select example">
                    <option selected  value="">عدد الغرف</option>
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
                if (isset( $Num_Rooms_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Num_Rooms_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of wings-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label">عدد الأجنحه</label>

                <select class="form-select " name="F_Num_Wings" aria-label="Default select example">
                    <option selected  value="">عدد الأجنحه </option>
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
                if (isset($Num_Wings_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Wings_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            the number of floors-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label">عدد الطوابق </label>

                <select class="form-select " name="F_Num_Floors" aria-label="Default select example">
                    <option selected  value="">عدد الطوابق </option>
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
                if (isset( $Num_Floors_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Num_Floors_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of lifts-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label"> عدد المصاعد  </label>

                <select class="form-select " name="F_Num_lifts" aria-label="Default select example">
                    <option selected  value="">عدد المصاعد </option>
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
                if (isset( $Num_lifts_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Num_lifts_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of meeting rooms-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label"> عدد غرف الإجتماعات </label>

                <select class="form-select " name="F_Num_MeetingRoom" aria-label="Default select example">
                    <option selected  value="">عدد غرف الإجتماعات</option>
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
                if (isset( $Num_MeetingRoom_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_MeetingRoom_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Warehouses-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label">  عدد المستودعات </label>
                <select class="form-select " name="F_Num_Warehouse" aria-label="Default select example">
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
                if (isset(  $Num_Warehouse_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo   $Num_Warehouse_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Restaurants-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label"> عدد المطاعم  </label>

                <select class="form-select " name="F_Num_Restaurants" aria-label="Default select example">
                    <option selected  value="">عدد المطاعم</option>
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
                if (isset( $Num_Restaurants_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Num_Restaurants_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Number of Kitchens-->
            <div class="form-label col text-start">
                <label for="F_Num_Kitchen" class="form-label">عدد المطابخ</label>
                <select class="form-select" name="F_Num_Kitchen" aria-label="Default select example">
                    <option selected value="">عدد المطابخ</option>
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
                if (isset($Num_Kitchen_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Kitchen_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--            Number of parking-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label"> عدد المواقف  </label>

                <select class="form-select " name="F_Num_parking" aria-label="Default select example">
                    <option selected  value="">عدد المواقف </option>
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
                if (isset(  $Num_parking_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo   $Num_parking_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of streets-->
            <div class="col form-label text-start">
                <label for="F_Type_sale" class="form-label">  عدد الشوارع </label>

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
            <!--            number of Reception-->
            <div class="col form-label text-start">
                <label for="F_Reception" class="form-label">  عدد الإستقبال </label>

                <select class="form-select " name="F_Reception" aria-label="Default select example">
                    <option selected  value="">عدد الإستقبال </option>
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
                if (isset( $Reception_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Reception_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           Type of toilets-->
            <div class="col">
                <label for="F_Type_sale" class="form-label">نوع دورات المياه </label>
                <select class="form-select " name="F_Typeoftoilets" aria-label="Default select example">
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
                if (isset($Typeoftoilets_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $Typeoftoilets_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            Additional features-->
            <div class="col-9 form-group  form-label">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" name="F_Features" id="exampleFormControlTextarea1" rows="5"></textarea>
                <?php
                if (isset($Features_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Features_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            save button-->
            <div class="col-4 ">
                <button type="submit" onclick="myFunction()" class="btn btn-primary text-light form-control"  name="submit_form_add_hotel">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>

