<?php
include "connection.php";
include "header.php";
include "fun.php";
?>

<!--  إضافه عدد المواقف للDB -->
<!-- ** إضافه عدد المصاعد للDB -->
<!--  إضافه توفر مصعد او لا  للDB -->


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


<!--    Verify that the land is add-->
<?php
if (isset( $alert_insert_shop_by_successfully)){
    echo ' <div class="alert alert-success text-center m-0  
  border border-1    rounded-3" role="alert">';
    echo   $alert_insert_shop_by_successfully;
    echo '  </div>';
}
?>



<!--   the land addition SQL -->
<?php


// ***********************************  form_add_shop *****************************  start
if(isset($_POST['submit_form_add_shop'])){
    $count_shop  =0;

    //*************************************  form_TypeOfOffer    *********************************
    if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
        $Type_sale_Err = "حقل اجباري";
        $_POST["F_Type_sale"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
            $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
            $count_shop  += 1;
        }
    }

    //************************************* form_Num_parking     *********************************

    if (empty($_POST["F_Num_parking"])) {  // F_Num_parking
        $Num_parking_Err = "حقل اجباري";
        $_POST["F_Num_parking"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_parking')) {
            $Num_parking = test_input(filter_var($_POST["F_Num_parking"], FILTER_SANITIZE_NUMBER_INT));
            $count_shop  += 1;
        }
    }
//*************************************  form_Numberoftoilets  *********************************

    if (empty($_POST["F_Num_Toilets"])) {  // F_Num_Toilets
        $Num_Toilets_Err = "حقل اجباري";
        $_POST["F_Num_Toilets"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Toilets')) {
            $Num_Toilets= test_input(filter_var($_POST["F_Num_Toilets"], FILTER_SANITIZE_NUMBER_INT));
            $count_shop  += 1;
        }
    }
//*************************************  form_numberofstreet  *********************************


    if (empty($_POST["F_Num_streets"])) {  // F_Num_streets
        $Num_streets_Err = "حقل اجباري";
        $_POST["F_Num_streets"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_streets')) {
            $Num_streets = test_input(filter_var($_POST["F_Num_streets"], FILTER_SANITIZE_NUMBER_INT));
            $count_shop += 1;
        }
    }
//*************************************   f_Num_Floors  *********************************

    if (empty($_POST["F_Num_Floors"])) {  // $f_Num_Floors
        $Num_Floors_Err = "حقل اجباري";
        $_POST["F_Num_Floors"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Floors')) {
            $Num_Floors = test_input(filter_var($_POST["F_Num_Floors"], FILTER_SANITIZE_STRING));
            $count_shop  += 1;
        }
    }

//************************************* form_Numberofwarehouse     *********************************
    if (empty($_POST["F_Num_Warehouse"])) {  // F_Num_Warehouse
        $Num_Warehouse_Err = "حقل اجباري";
        $_POST["F_Num_Warehouse"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_Warehouse')) {
            $Num_Warehouse = test_input(filter_var($_POST["F_Num_Warehouse"], FILTER_SANITIZE_NUMBER_INT));
            $count_shop += 1;
        }
    }
//********************************* F_Typeoftoilets       *********************************

    if (empty($_POST["F_Typeoftoilets"])) {
        $Typeoftoilets_Err = "حقل اجباري";
        $_POST["F_Typeoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["F_Typeoftoilets"], FILTER_SANITIZE_STRING));
        $count_shop +=1;}}

//*************************************  F_diraction  *********************************
    if (empty($_POST["F_diraction"])) {
        $diraction_var_Err = "حقل اجباري";
        $_POST["F_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_diraction')) {

        $diraction_var = test_input(filter_var($_POST["F_diraction"], FILTER_SANITIZE_STRING));
        $count_shop  +=1; }}

//************************************* F_Features *********************************

    if (empty($_POST["F_Features"])) {
        $Features_Err = "حقل اجباري";
        $_POST["F_Features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'F_Features')) {

        $Features_var = test_input(filter_var($_POST["F_Features"], FILTER_SANITIZE_STRING));
        $count_shop  +=1; }}

///************************************** check  form_space *******************************************
    if (empty($_POST["F_space"])) {  // F_space
        $space_Err = "حقل اجباري";
        $_POST["F_space"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_space')) {
            $space= test_input(filter_var($_POST["F_space"], FILTER_SANITIZE_NUMBER_INT));
            $count_shop  += 1;
        }
    }
//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["F_property_age"])) {  // f_property_age
        $property_age_Err = "حقل اجباري";
        $_POST["F_property_age"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_property_age')) {
            $property_age= test_input(filter_var($_POST["F_property_age"], FILTER_SANITIZE_NUMBER_INT));
            $count_shop  += 1;
        }
    }


//*************************************  f_Num_lifts     *********************************

    if (empty($_POST["F_Num_lifts"])) {  // $f_Num_lifts
        $Num_lifts_Err = "حقل اجباري";
        $_POST["F_Num_lifts"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Num_lifts')) {
            $Num_lifts = test_input(filter_var($_POST["F_Num_lifts"], FILTER_SANITIZE_STRING));
            $count_shop  += 1;
        }
    }

//******************************************* check form_price ***********************************************
    if (empty($_POST["F_price"])) {  // $f_details
        $price_Err = "حقل اجباري";
        $_POST["F_price"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_price')) {
            $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
            $count_shop   += 1;
        }
    }

    if (empty($_POST["F_Category"])) {  // $f_details  F_Category
        $Category_Err = "حقل اجباري";
        $_POST["F_Category"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_Category')) {
            $Category= test_input(filter_var($_POST["F_Category"], FILTER_SANITIZE_STRING));
            $count_shop += 1;
        }
    }

    if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
        $pay_method_Err = "حقل اجباري";
        $_POST["F_pay_method"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_pay_method')) {
            $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
            $count_shop += 1;
        }
    }
//*************************************  form add shop ********************************* end

//*************************************  sql add shop ********************************* start
    if( $count_shop  ===14){
//        echo $count_shop ;
        $sql = 'insert into shop  (id, Type_sale, Num_Toilets, Num_Streets, Num_Floors, Num_Warehouse, Type_Toilets, Direction, Features, Space, property_age, Num_Lifts, Num_Parking, Price, pay_method)
  values(:id, :Type_sale, :Num_Toilets, :Num_Streets, :Num_Floors, :Num_Warehouse, :Type_Toilets, :Direction, :Features, :Space, :property_age, :Num_Lifts, :Num_Parking, :Price , :pay_method)';

        if (isset($pdo)) {
            $stmt = $pdo->prepare($sql);
        }

        $stmt->execute($r = array(
            'id'=> null,
            'Type_sale'=>$Type_sale,
            'Num_Toilets'=>$Num_Toilets,
            'Num_Streets'=>$Num_streets,
            'Num_Floors'=>$Num_Floors,
            'Num_Warehouse'=>$Num_Warehouse,
            'Type_Toilets'=>$Typeoftoilets_var,
            'Direction'=>$diraction_var,
            'Features'=>$Features_var,
            'Space'=>$space ,
            'property_age'=>$property_age,
            'Num_Lifts'=>$Num_lifts,
            'Num_Parking'=>$Num_parking,
            'Price'=>$price,
            'pay_method'=>$pay_method
        ));




        $alert_insert_shop_by_successfully =" تمت الإضافه بنجاح ";
//*************************************  sql add shop ********************************* end

    }
}
// ***********************************  form_add_shop *****************************  end


?>
<!--   the land addition form-->
<div class="container">
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافة محل</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-5 justify-content-center mt-4" method="post" action="Add_Shop.php">
            <!--            space-->
            <div class="col">
                <label for="phone_number_form"  class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="F_space" placeholder="المساحه ">
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
            <!--            the number of floors-->
            <div class="col ">
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
            <!--            Number of Warehouses-->
            <div class="col ">
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
             <!--     F_Category     -->
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
            </div>  <!--     F_pay_method   -->
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
            <div class="col d-block m-5">

                <button type="submit" class="btn btn-primary text-light form-control"  name="submit_form_add_shop">إضافة
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>





