<?php
include "connection.php";
include "fun.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إضافه فله</title>
</head>
<body>

<?php   include "header.php"; ?>

<!--    Verify that the villa is add-->
<?php
if (isset( $alert_insert_villa_by_successfully)){
    echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
    echo   $alert_insert_villa_by_successfully;
    echo '  </div>';
}
?>



<!--   the villa addition SQL-->

<?php


// ***********************************  form_add_villa *****************************  start
if (isset($_POST['submit_form_add_villa'])) {
    $count_villa=0;
    //*************************************  form_TypeOfOffer    *********************************
    if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
        $Type_sale_Err = "حقل اجباري";
        $_POST["F_Type_sale"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
            $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
            $count_villa += 1;
        }
    }


    if (empty($_POST["F_Category"])) {  // $f_details  F_Category
        $Category_Err = "حقل اجباري";
        $_POST["F_Category"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Category')) {
            $Category= test_input(filter_var($_POST["F_Category"], FILTER_SANITIZE_STRING));
            $count_villa+= 1;
        }
    }

    if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
        $pay_method_Err = "حقل اجباري";
        $_POST["F_pay_method"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_pay_method')) {
            $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
            $count_villa+= 1;
        }
    }
//*************************************  form_Numberoftoilets  *********************************

    if (empty($_POST["F_Num_Toilets"])) {  // F_Num_Toilets
        $Num_Toilets_Err = "حقل اجباري";
        $_POST["F_Num_Toilets"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Toilets')) {
            $Num_Toilets= test_input(filter_var($_POST["F_Num_Toilets"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }

// ***********************************  f_Num_Wings   *************************************

    if (empty($_POST["F_Num_Wings"])) {  // $f_Num_Wings
        $Num_Wings_Err = "حقل اجباري";
        $_POST["F_Num_Wings"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Wings')) {
            $Num_Wings = test_input(filter_var($_POST["F_Num_Wings"], FILTER_SANITIZE_STRING));
            $count_villa += 1;
        }
    }

    //*************************************   form_Numberoflounges    *********************************

    if (empty($_POST["F_Num_Lounges"])) {  // F_Num_Lounges
        $Num_Lounges_Err = "حقل اجباري";
        $_POST["F_Num_Lounges"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Lounges')) {
            $Num_Lounges = test_input(filter_var($_POST["F_Num_Lounges"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }


    //**************************    form_Numberofkitchen    *********************************

    if (empty($_POST["F_Num_Kitchen"])) {  // F_Num_Kitchen
        $Num_Kitchen_Err = "حقل اجباري";
        $_POST["F_Num_Kitchen"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Kitchen')) {
            $Num_Kitchen = test_input(filter_var($_POST["F_Num_Kitchen"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }

//************************************* form_Numberofbedrooms   *********************************

    if (empty($_POST["F_Num_Bedrooms"])) {  // F_Num_Bedrooms
        $Num_Bedrooms_Err = "حقل اجباري";
        $_POST["F_Num_Bedrooms"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Bedrooms')) {
            $Num_Bedrooms = test_input(filter_var($_POST["F_Num_Bedrooms"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }

//************************************* form_BoardNumber  *********************************

    if (empty($_POST["F_Num_Council_1"])) {  // F_Num_Council_1
        $Num_Council_1_Err = "حقل اجباري";
        $_POST["F_Num_Council_1"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Council_1')) {
            $Num_Council_1 = test_input(filter_var($_POST["F_Num_Council_1"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }
//************************************* form_Numberofclippers  *********************************
    if (empty($_POST["F_Num_Council_2"])) {  // F_Num_Council_2
        $Num_Council_2_Err = "حقل اجباري";
        $_POST["F_Num_Council_2"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Council_2')) {
            $Num_Council_2 = test_input(filter_var($_POST["F_Num_Council_2"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }

//************************************* form_Numberofwarehouse     *********************************
    if (empty($_POST["F_Num_Warehouse"])) {  // F_Num_Warehouse
        $Num_Warehouse_Err = "حقل اجباري";
        $_POST["F_Num_Warehouse"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Warehouse')) {
            $Num_Warehouse = test_input(filter_var($_POST["F_Num_Warehouse"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa+= 1;
        }
    }

//*************************************  form_numberofstreet  *********************************


    if (empty($_POST["F_Num_streets"])) {  // F_Num_streets
        $Num_streets_Err = "حقل اجباري";
        $_POST["F_Num_streets"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_streets')) {
            $Num_streets = test_input(filter_var($_POST["F_Num_streets"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa += 1;
        }
    }

//********************************* F_Typeoftoilets       *********************************

    if (empty($_POST["F_Typeoftoilets"])) {
        $Typeoftoilets_Err = "حقل اجباري";
        $_POST["F_Typeoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["F_Typeoftoilets"], FILTER_SANITIZE_STRING));
        $count_villa +=1;}}


//*************************************  form_typeofkitchen  *********************************

    if (empty($_POST["form_typeofkitchen"])) {
        $typeofkitchen_var_Err = "الرجاء ادخال نوع المطبخ .";
        $_POST["form_typeofkitchen"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_typeofkitchen')) {

        $typeofkitchen_var = test_input(filter_var($_POST["form_typeofkitchen"], FILTER_SANITIZE_STRING));
        $count_villa +=1;}}

//*************************************  form_diraction   *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "حقل اجباري ";
        $_POST["form_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
        $count_villa +=1;}}


//******************************************* check form_features ***********************************************
    if (empty($_POST["form_features"])) {
        $features_var_Err = "حقل اجباري";
        $_POST["form_features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_features')) {

        $features_var = test_input(filter_var($_POST["form_features"], FILTER_SANITIZE_STRING));
        $count_villa +=1;}}
    //*************************************  check f_space     *********************************

    if (empty($_POST["F_space"])) {  // F_space
        $space_Err = "حقل اجباري";
        $_POST["F_space"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_space')) {
            $space= test_input(filter_var($_POST["F_space"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa += 1;
        }
    }


//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["F_property_age"])) {  // f_property_age
        $property_age_Err = "حقل اجباري";
        $_POST["F_property_age"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_property_age')) {
            $property_age= test_input(filter_var($_POST["F_property_age"], FILTER_SANITIZE_NUMBER_INT));
            $count_villa += 1;
        }
    }


    if (empty($_POST["F_Type_Kitchen"])) {  // F_Type_Kitchen
        $Type_Kitchen_Err = "حقل اجباري";
        $_POST["F_Type_Kitchen"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Type_Kitchen')) {
            $Type_Kitchen = test_input(filter_var($_POST["F_Type_Kitchen"], FILTER_SANITIZE_STRING));
            $count_villa+= 1;
        }
    }

    if (empty($_POST["F_price"])) {  // $f_details
        $price_Err = "حقل اجباري";
        $_POST["F_price"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_price')) {
            $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
            $count_villa+= 1;
        }
    }

//*************************************  form add villa          ********************************* end

//*************************************  sql add villa **************** ********************************* start
    if ( $count_villa ===19){
//    echo  $count_villa;
    $sql = 'insert into villa (id,Type_sale,Num_Toilets,Num_Wings,Num_Lounges,Num_Kitchen,Num_Bedrooms,Num_Council_1,Num_Council_2,Num_Warehouse,Direction,Features,Num_Street,Type_Toilets,Space,property_age,Type_Kitchen,price,Category,pay_method)
                           values(:id,:Type_sale,:Num_Toilets,:Num_Wings,:Num_Lounges,:Num_Kitchen,:Num_Bedrooms,:Num_Council_1,:Num_Council_2,:Num_Warehouse,:diraction,:Features,:Num_Street,:Type_Toilets,:Space,:property_age,:Type_Kitchen,:price,:Category,:pay_method)';
    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);

    }

    $stmt->execute($r = array(
        'id'=> null ,
        'Type_sale'=>$Type_sale,
        'Num_Toilets'=>$Num_Toilets,
        'Num_Wings'=>$Num_Wings,
        'Num_Lounges'=>$Num_Lounges,
        'Num_Kitchen'=>$Num_Kitchen,
        'Num_Bedrooms'=>$Num_Bedrooms,
        'Num_Council_1'=>$Num_Council_1,
        'Num_Council_2'=>$Num_Council_2,
        'Num_Warehouse'=>$Num_Warehouse,
        'diraction'=>$diraction_var,
        'Features'=>$features_var,
        'Num_Street'=>$Num_streets,
        'Type_Toilets'=>$Typeoftoilets_var,
        'Space'=>$space,
        'property_age'=>$property_age,
        'Type_Kitchen'=>$Type_Kitchen,
        'price'=>$price,
        'Category'=>$Category,
        'pay_method'=>$pay_method






    ));
    // ***********************************  sql_add_villa ****************************************  end
    $alert_insert_villa_by_successfully = '  تمت إضافه الفله بنجاح';

    }
}
// ***********************************  form_add_villa *****************************  end



?>



<!--   the villa addition form-->
<div class="container">
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه فلة</p>

        <form class="row g-1 gap-0 row row-cols-2 row-cols-md-4 justify-content-center mt-4" method="POST" action="Add_Villa.php">
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
            <!--       F_Type_sale-->
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
            <!--            direction-->
            <div class="col">
                <label for="F_Type_Kitchen" class="form-label">الواجهه </label>

                <select class="form-select" name="form_diraction" aria-label="Default select example">
                    <option selected  value="">الواجهه </option>
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
                    echo  $diraction_var_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <!--            number of streets-->
            <div class="col">
                <label for="Type_Sale" class="form-label">  عدد الشوارع </label>

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
            <!--      F_Num_Lounges-->
            <div class="col">
                <label for="F_Num_Lounges" class="form-label">عدد الصالات</label>
                <select class="form-select" name="F_Num_Lounges" aria-label="Default select example">
                    <option selected value="">عدد الصالات</option>
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
                if (isset($Num_Lounges_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Lounges_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--            number of wings -->
            <div class="col">
                <label for="F_Num_Wings" class="form-label">عدد الأجنحه</label>

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
            <!--       number of toilets-->
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
            <!--    Type of toilets-->
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
            <!--        number of clippers-->
            <div class="col">
                <label for="F_Num_Council_2" class="form-label">عدد المقلط</label>
                <select class="form-select" name="F_Num_Council_2" aria-label="Default select example">
                    <option selected value="">عدد المقلط</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){     ?>
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
                if (isset($Num_Council_2_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Council_2_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--             number of kitchens -->
            <div class="col">
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
            <!--            F_Num_Bedrooms-->
            <div class="col">
                <label for="F_Num_Bedrooms" class="form-label">عدد غرف النوم</label>
                <select class="form-select" name="F_Num_Bedrooms" aria-label="Default select example">
                    <option selected value="">عدد غرف النوم</option>
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
                if (isset($Num_Bedrooms_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Bedrooms_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--            Number of Warehouses-->
            <div class="col">
                <label for="F_Num_Warehouse" class="form-label">  عدد المستودعات </label>

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
            <!--           number of boards -->
            <div class="col">
                <label for="F_Num_Council_1" class="form-label">عدد المجالس</label>
                <select class="form-select" name="F_Num_Council_1" aria-label="Default select example">
                    <option selected value="">عدد المجالس</option>
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
                if (isset($Num_Council_1_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Council_1_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--          kitchen type   -->
            <div class="col">
                <label for="F_Type_Kitchen" class="form-label">نوع المطبخ</label>
                <select class="form-select" name="F_Type_Kitchen" aria-label="Default select example">
                    <option selected value="">نوع المطبخ</option>
                    <?php if (!empty($length_Type_kitchen)){
                        for ($i = 0; $i < $length_Type_kitchen; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_Type_kitchen)){
                                echo $arra_list_Type_kitchen[$i];
                            } ?>">
                                <?php if (!empty($arra_list_Type_kitchen)){
                                    echo $arra_list_Type_kitchen[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Type_Kitchen_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Type_Kitchen_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <!--     F_Category     -->
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
            <br><br>
            <!--            Additional features-->
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

            <div class="col-4">
                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_villa">إضافة
                </button>
            </div>
        </form>

    </div>


</div>


</body>

</html>

<?php include "footer.php"; ?>

