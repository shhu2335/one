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

    <!--    Building addition SQL-->
    <?php
    // ***************************** form_add_building ******************************* start
    if (isset($_POST['submit_form_add_building'])) {

        $count_building   = 0;
        //************************************** check  form_space *******************************************
        if (empty($_POST["F_space"])) {  // F_space
            $space_Err = "حقل اجباري";
            $_POST["F_space"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_space')) {
                $space= test_input(filter_var($_POST["F_space"], FILTER_SANITIZE_NUMBER_INT));
                $count_building  += 1;
            }
        }


        //******************************************* F_Category ***********************************************
        if (empty($_POST["F_Category"])) {  // $f_details  $list_pay_method
            $Category_Err = "حقل اجباري";
            $_POST["F_Category"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Category')) {
                $Category= test_input(filter_var($_POST["F_Category"], FILTER_SANITIZE_STRING));
                $count_building  +=1;
            }
        }

        //******************************************* check f_pay_method ***********************************************

        if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
            $pay_method_Err = "حقل اجباري";
            $_POST["F_pay_method"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_pay_method')) {
                $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
                $count_building  +=1;
            }
        }
//********************************** check form_AgeOfProperty ******************************************
        if (empty($_POST["F_property_age"])) {  // f_property_age
            $property_age_Err = "حقل اجباري";
            $_POST["F_property_age"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_property_age')) {
                $property_age= test_input(filter_var($_POST["F_property_age"], FILTER_SANITIZE_NUMBER_INT));
                $count_building  += 1;
            }
        }


        //*************************************  form_TypeOfOffer    *********************************
        if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
            $Type_sale_Err = "حقل اجباري";
            $_POST["F_Type_sale"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
                $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
                $count_building  += 1;
            }
        }


//********************************  form_num_apartment **************************************************
        if (empty($_POST["form_num_apartment"])) {
            $num_apartment_var_Err = "حقل اجباري";
            $_POST["form_num_apartment"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'form_num_apartment')) {

                $num_apartment_var = test_input(filter_var($_POST["form_num_apartment"], FILTER_SANITIZE_STRING));
                $count_building   += 1;
            }
        }

//*************************************   f_Num_Floors  *********************************

        if (empty($_POST["F_Num_Floors"])) {  // $f_Num_Floors
            $Num_Floors_Err = "حقل اجباري";
            $_POST["F_Num_Floors"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Floors')) {
                $Num_Floors = test_input(filter_var($_POST["F_Num_Floors"], FILTER_SANITIZE_STRING));
                $count_building  += 1;
            }
        }

        //*************************************  f_Num_lifts     *********************************

        if (empty($_POST["F_Num_lifts"])) {  // $f_Num_lifts
            $Num_lifts_Err = "حقل اجباري";
            $_POST["F_Num_lifts"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_lifts')) {
                $Num_lifts = test_input(filter_var($_POST["F_Num_lifts"], FILTER_SANITIZE_STRING));
                $count_building  += 1;
            }
        }

        //************************************* form_Num_parking     *********************************

        if (empty($_POST["F_Num_parking"])) {  // F_Num_parking
            $Num_parking_Err = "حقل اجباري";
            $_POST["F_Num_parking"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_parking')) {
                $Num_parking = test_input(filter_var($_POST["F_Num_parking"], FILTER_SANITIZE_NUMBER_INT));
                $count_building  += 1;
            }
        }
        //*************************************  form_numberofstreet  *********************************


        if (empty($_POST["F_Num_streets"])) {  // F_Num_streets
            $Num_streets_Err = "حقل اجباري";
            $_POST["F_Num_streets"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_streets')) {
                $Num_streets = test_input(filter_var($_POST["F_Num_streets"], FILTER_SANITIZE_NUMBER_INT));
                $count_building  += 1;
            }
        }
        //************************************* check    form_direction ********************************************
        if (empty($_POST["form_direction"])) {
            $direction_var_Err = "حقل اجباري";
            $_POST["form_direction"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'form_direction')) {

                $direction_var = test_input(filter_var($_POST["form_direction"], FILTER_SANITIZE_STRING));
                $count_building   += 1;
            }
        }

//******************************************** check form_double_room *****************************************
//    $count_checkbox1=0;
//    $checkbox1 =$_POST["form_room"];

//    if (empty($checkbox1)) {
//        $double_room_var_Err = "الرجاء الرجاء الإختيار.";
//        $_POST["form_room"] = '';}
//       if($count_checkbox1==3) {
//        $double_room_var_Err = "الرجاء الرجاء الإختيار.";
//        $_POST["form_room"] = '';
//    }
//       elseif($checkbox1==2){$checkbox1+=1;}
//    }else{$checkbox1 =$_POST["form_room"];}
//
//    if ($checkbox1==1){
//    if (filter_has_var(INPUT_POST, 'form_room')) {
//        $checkbox1 =$_POST["form_room"];
//        $double_room_var = test_input(filter_var($_POST["form_room"], FILTER_SANITIZE_STRING));
//        $count_building  +=1;


//    $double_room_var1=$_POST["form_room3"];
//    foreach ($double_room_var1 as $row)
//    {
//
//        $double_room_var = $row['name'];
//
//
//    }
////    print_r($category_values);
//    $count_building  +=1;
////    }}

//************************************* check form_triple_room *********************************************
//    if (empty($_POST["form_room2"])) {
//        $_triple_room_var_Err = "الرجاء الرجاء الإختيار.";
//        $_POST["form_room2"] = '';
//    } else {
        $_triple_room_var ="";
        if (filter_has_var(INPUT_POST, 'form_room2')) {

            $_triple_room_var = test_input(filter_var($_POST["form_room2"], FILTER_SANITIZE_STRING));
//        $count_building  +=1;
        }
//    }
//**************************************** check form_quad_room *******************************************
//    if (empty($_POST["form_room1"])) {
//        $quad_room_var_Err = "الرجاء الرجاء الإختيار.";
//        $_POST["form_room1"] = '';
//    } else {
        $double_room_var ="";
        if (filter_has_var(INPUT_POST, 'form_room1')) {

            $double_room_var = test_input(filter_var($_POST["form_room1"], FILTER_SANITIZE_STRING));
//        $count_building  +=1;
        }
//    }
//**************************************** check form_quad_room *******************************************
//    if (empty($_POST["form_room3"])) {
//        $quad_room_var_Err = "الرجاء الرجاء الإختيار.";
//        $_POST["form_room3"] = '';
//    }else{
        $quad_room_var ="";
        if (filter_has_var(INPUT_POST, 'form_room3')) {

            $quad_room_var = test_input(filter_var($_POST["form_room3"], FILTER_SANITIZE_STRING));
//        $count_building  +=1;
        }
//}
//******************************************* check form_features ***********************************************
        if (empty($_POST["form_features"])) {
            $features_var_Err = "حقل اجباري";
            $_POST["form_features"] = '';
        }
        else{if (filter_has_var(INPUT_POST, 'form_features')) {

            $features_var = test_input(filter_var($_POST["form_features"], FILTER_SANITIZE_STRING));
            $count_building  +=1;}}

        //******************************************* check form_price ***********************************************
        if (empty($_POST["F_price"])) {  // $f_details
            $price_Err = "حقل اجباري";
            $_POST["F_price"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_price')) {
                $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
                $count_building   += 1;
            }
        }


// ******************************************** form_add_building *********************** end
//        echo $count_building  ;
// ******************************************** SQL_add_building *********************** start
    if($count_building   ===13) {
        $sql = 'insert into building  (id,Num_Apartments,Num_streets,Features,Space,property_age,Type_sale,Price,Diraction,Num_Floors,Num_Lefts,Num_Parking,form_Room3,form_Room2,form_Room1,Category,pay_method)
                   values(:id,:Num_Apartments,:Num_streets,:Features,:Space,:property_age,:Type_sale,:Price,:Diraction,:Num_Floors,:Num_Lefts,:Num_Parking,:form_Room3,:form_Room2,:form_Room1,:Category,:pay_method)';


        if (isset($pdo)) {
            $stmt = $pdo->prepare($sql);
        }

        $stmt->execute($r = array(

            'id'=>null ,
            'Num_Apartments'=>$num_apartment_var,
            'Num_streets'=>$Num_streets,
            'Features'=>$features_var,
            'Space'=>$space,
            'property_age'=>$property_age,
            'Type_sale'=>$Type_sale,
            'Price'=>$price,
            'Diraction'=>$direction_var,
            'Num_Floors'=>$Num_Floors,
            'Num_Lefts'=>$Num_lifts,
            'Num_Parking'=>$Num_parking,
            'form_Room3'=>$quad_room_var,
            'form_Room2'=>$_triple_room_var,
            'form_Room1'=>$double_room_var,
            'Category'=>$Category,
            'pay_method'=>$pay_method




        ));
        $alert_insert_building_by_successfully = '  تمت إضافه العماره بنجاح';



    }


    }
    // ************************************ SQL_add_building ********************************* end


    ?>

    <!--    Building addition form-->
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه عمارة</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-5 justify-content-center mt-4" method="POST" action="Add_Building.php">
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
            <!--            Number of apartments-->
            <div class="col">
                <label for="F_Type_sale" class="form-label">عدد الشقق  </label>

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
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $num_apartment_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            the number of floors-->
            <div class="col">
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
            <div class="col">
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
            <!--            Number of parking-->
            <div class="col">
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
            <div class="col">
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
            <!--            direction-->
            <div class="col ">
                <label for="F_Type_sale" class="form-label">  الواجهه  </label>

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
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $direction_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--     F_Category   -->
            <div class="col">
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
            <!--     Apartment type   -->
            <div class="col-6 ">
                <label for="phone_number_form" class="col-12 ">نوع الشقق </label>
                <div class="col form-check form-check-inline text-end">
                    <input class="form-check-input text-end" type="checkbox" name="form_room1" id="inlineCheckbox1" value="ثنائيه ">
                    <label class="form-check-label text-end" for="inlineCheckbox1">ثنائيه</label>
                </div>
                <div class="col form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_room2" id="inlineCheckbox2" value="ثلاثيه ">
                    <label class="form-check-label" for="inlineCheckbox2"> ثلاثيه</label>
                </div>
                <div class="col form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_room3" id="inlineCheckbox3" value="رباعيه " >
                    <label class="form-check-label" for="inlineCheckbox3"> رباعيه</label>
                </div>
                <?php
                if (isset($double_room_var_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo  $double_room_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--           form_features-->
            <div class="form-group col-9 form-label ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control"  name="form_features" id="exampleFormControlTextarea1" عمر العقارrows="5"></textarea>
                <?php
                if (isset($features_var_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $features_var_Err;
                    echo '<span >';
                }
                ?>

            </div>
           <!--            save button-->
            <div class="col-4 mx-auto ">
                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_building">إضافة
                </button>
            </div>

        </form>

    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>


