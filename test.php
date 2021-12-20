<!-- start of conection -->
<?php
include "conection.php";
include "header.php";
//if (! empty($_SESSION['logged_in']))
//{
?>
<!-- start of header -->




<?php

if (isset($_POST['submit_apartment'])) {
    $count_apartment =0;
/*************************************  form_space *********************************/

if (empty($_POST["form_space"])) {
$space_var_Err = "الرجاء ادخال المساحه.";
$_POST["form_space"] = '';
}
else{if (filter_has_var(INPUT_POST, 'form_space')) {

$space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    $count_apartment +=1; }}

//******************************************* check form_price ***********************************************

    if (empty($_POST["form_price"])) {
        $price_var_Err = "الرجاء كتابه السعر .";
        $_POST["form_price"] = '';
    }else{
        if (filter_has_var(INPUT_POST, 'form_price')) {

            $price_var = test_input(filter_var($_POST["form_price"], FILTER_SANITIZE_STRING));
            $count_apartment+=1;
        }}


    //  ======================  defined variable     property_age   ====================== done
    if (empty($_POST["property_age"])){
        $var_property_age_err = "حقل إجباري";
        $_POST["property_age"] = '';
    }else{
        //  ======================  filter variable      property_age   ====================== done
        if (filter_has_var(INPUT_POST, 'property_age')){
            $var_apartment__property_age = test_input(filter_var($_POST['property_age'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }
    }
    //  ======================  defined variable     sale_type   ====================== done
    if (empty($_POST["sale_type"])){
        $var_sale_type_err = "حقل إجباري";
        $_POST["sale_type"] = '';
    }else{
        //  ======================  filter variable      sale_type   ====================== done
        if (filter_has_var(INPUT_POST, 'sale_type')){
            $var_apartment_sale_type = test_input(filter_var($_POST['sale_type'], FILTER_SANITIZE_STRING));
            $count_apartment  += 1;
        }}

    //  ======================  defined variable     number_rooms   ====================== done
    if (empty($_POST["number_rooms"])){
        $var_number_rooms_err = "حقل إجباري";
        $_POST["number_rooms"] = '';
    }else{
        //  ======================  filter variable    number_rooms     ====================== done
        if (filter_has_var(INPUT_POST, 'number_rooms')){
            $var_apartment_number_rooms = test_input(filter_var($_POST['number_rooms'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }}


    //  ======================  defined variable     number_halls   ====================== done
    if (empty($_POST["number_halls"])){
        $var_number_halls_err = "حقل إجباري";
        $_POST["number_halls"] = '';
    }else{
        //  ======================  filter variable    number_halls     ====================== done
        if (filter_has_var(INPUT_POST, 'number_halls')){
            $var_apartment_number_halls = test_input(filter_var($_POST['number_halls'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }}


    //  ======================  defined variable     number_Kitchens   ====================== done
    if (empty($_POST["number_Kitchens"])){
        $var_number_Kitchens_err = "حقل إجباري";
        $_POST["number_Kitchens"] = '';
    }else{
        //  ======================  filter variable    number_Kitchens     ====================== done
        if (filter_has_var(INPUT_POST, 'number_Kitchens')){
            $var_apartment_number_Kitchens = test_input(filter_var($_POST['number_Kitchens'], FILTER_SANITIZE_NUMBER_INT ));
            $count_apartment  += 1;
        }
    }


    //  ======================  defined variable     type_Kitchen   ====================== done
    if (empty($_POST["type_Kitchen"])){
        $var_type_Kitchen_err = "حقل إجباري";
        $_POST["type_Kitchen"] = '';
    }else{
        //  ======================  filter variable    type_Kitchen     ====================== done
        if (filter_has_var(INPUT_POST, 'type_Kitchen')){
            $var_apartment_type_Kitchen = test_input(filter_var($_POST['type_Kitchen'], FILTER_SANITIZE_STRING));
            $count_apartment  += 1;
        }
    }


    //  ======================  defined variable     bed_room   ====================== done
    if (empty($_POST["bed_room"])){
        $var_bed_room_err = "حقل إجباري";
        $_POST["bed_room"] = '';
    }else{
        //  ======================  filter variable    bed_room     ====================== done
        if (filter_has_var(INPUT_POST, 'bed_room')){
            $var_apartment_bed_room = test_input(filter_var($_POST['bed_room'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }
    }


    //  ======================  defined variable     number_boards   ====================== done
    if (empty($_POST["number_boards"])){
        $var_number_boards_err = "حقل إجباري";
        $_POST["number_boards"] = '';
    }else{
        //  ======================  filter variable      number_boards   ====================== done
        if (filter_has_var(INPUT_POST, 'number_boards')){
            $var_apartment_number_boards = test_input(filter_var($_POST['number_boards'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }
    }


    //  ======================  defined variable     number_clippers   ====================== done
    if (empty($_POST["number_clippers"])){
        $var_number_clippers_err = "حقل إجباري";
        $_POST["number_clippers"] = '';
    }else{
        //  ======================  filter variable    number_clippers     ====================== done
        if (filter_has_var(INPUT_POST, 'number_clippers')){
            $var_apartment_number_clippers = test_input(filter_var($_POST['number_clippers'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }}


    //  ======================  defined variable     number_Warehouses   ====================== done
    if (empty($_POST["number_Warehouses"])){
        $var_number_Warehouses_err = "حقل إجباري";
        $_POST["number_Warehouses"] = '';
    }else{
        //  ======================  filter variable    number_Warehouses     ====================== done
        if (filter_has_var(INPUT_POST, 'number_Warehouses')){
            $var_apartment_number_Warehouses = test_input(filter_var($_POST['number_Warehouses'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }
    }


    //  ======================  defined variable     number_Bathrooms   ====================== done
    if (empty($_POST["number_Bathrooms"])){
        $var_number_Bathrooms_err = "حقل إجباري";
        $_POST["number_Bathrooms"] = '';
    }else{
        //  ======================  filter variable    number_Warehouses     ====================== done
        if (filter_has_var(INPUT_POST, 'number_Bathrooms')){
            $var_apartment_number_Bathrooms = test_input(filter_var($_POST['number_Bathrooms'], FILTER_SANITIZE_NUMBER_INT));
            $count_apartment  += 1;
        }
    }




    //  ======================  defined variable     Describe   ====================== done
    if (empty($_POST["Describe"])){
        $var_Describe_err = "حقل إجباري";
        $_POST["Describe"] = '';
    }else{
        //  ======================  filter variable    Describe     ====================== done
        if (filter_has_var(INPUT_POST, 'Describe')){
            $var_apartment_Describe = test_input(filter_var($_POST['Describe'], FILTER_SANITIZE_STRING));
            $count_apartment  += 1;
        }
    }

    echo  $count_apartment ;

    if ($count_apartment===12){

    }


    $var_insert_build = '  تمت إضافه العماره بنجاح' ;
}

?>
<!-- start of footer -->
<?php include "footer.php";  //}else{
// header("location:login.php");
//}
?>