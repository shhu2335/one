


<?php
include "config.php";
include "header.php";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
/*session_start();
    $name = 'huss';
    $name ='shuq';
    $_SESSION['USER'] = $name;


$_SESSION['ss'] = 'hussam';

*/


if (isset($_POST['submit_form_add_villa'])) {

    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************


    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************

    if (empty($_POST["form_numberofwings"])) {
        $numberofwings_var_Err = "الرجاء ادخال عددالأجنحه .";
        $_POST["form_numberofwings"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofwings')) {

        $numberofwings_var = test_input(filter_var($_POST["form_numberofwings"], FILTER_SANITIZE_STRING));
    }

    //*************************************                   *********************************


    if (empty($_POST["form_Numberoflounges"])) {
        $Numberoflounges_var_Err = "الرجاء ادخال عدد الصالات .";
        $_POST["form_Numberoflounges"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoflounges')) {

        $Numberoflounges_var = test_input(filter_var($_POST["form_Numberoflounges"], FILTER_SANITIZE_STRING));
    }

    //*************************************                   *********************************

    if (empty($_POST["form_Numberofkitchen"])) {
        $Numberofkitchen_var_Err = "الرجاء ادخال عدد المطابخ .";
        $_POST["form_Numberofkitchen"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofkitchen')) {

        $Numberofkitchen_var = test_input(filter_var($_POST["form_Numberofkitchen"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************
    if (empty($_POST["form_Numberofbedrooms"])) {
        $Numberofbedrooms_var_Err = "الرجاء ادخال عدد غرف النوم  .";
        $_POST["form_Numberofbedrooms"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofbedrooms')) {

        $Numberofbedrooms_var = test_input(filter_var($_POST["form_Numberofbedrooms"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************

    if (empty($_POST["form_BoardNumber"])) {
        $BoardNumber_var_Err = "الرجاء ادخال عدد المجلس .";
        $_POST["form_BoardNumber"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_BoardNumber')) {

        $BoardNumber_var = test_input(filter_var($_POST["form_BoardNumber"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************

    if (empty($_POST["form_Numberofclippers"])) {
        $Numberofclippers_var_Err = "الرجاء ادخال عدد المقلط .";
        $_POST["form_Numberofclippers"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofclippers')) {

        $Numberofclippers_var = test_input(filter_var($_POST["form_Numberofclippers"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************
    if (empty($_POST["form_Numberofwarehouse"])) {
        $Numberofwarehouse_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_Numberofwarehouse"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofwarehouse')) {

        $Numberofwarehouse_var = test_input(filter_var($_POST["form_Numberofwarehouse"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************


    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************



    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************

    if (empty($_POST["form_typeofkitchen"])) {
        $typeofkitchen_var_Err = "الرجاء ادخال نوع المطبخ .";
        $_POST["form_typeofkitchen"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_typeofkitchen')) {

        $typeofkitchen_var = test_input(filter_var($_POST["form_typeofkitchen"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
    }


//******************************************* check form_features ***********************************************
    if (empty($_POST["form_features"])) {
        $features_var_Err = "الرجاء ادخال عدد المميزات إضافيه.";
        $_POST["form_features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_features')) {

        $features_var = test_input(filter_var($_POST["form_features"], FILTER_SANITIZE_STRING));
    }
    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة المساحه";
        $_POST["form_space"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    }
    //*************************************                   *********************************

    if (empty($_POST["form_numberofwarehouses"])) {
        $numberofwarehouses_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_numberofwarehouses"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofwarehouses')) {

        $numberofwarehouses_var = test_input(filter_var($_POST["form_numberofwarehouses"], FILTER_SANITIZE_STRING));
    }


//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
    }

//*************************************  form add villa                 ********************************* end

//*************************************  sql add villa                 ********************************* start
    $sql = 'insert into villa (id,TypeOfOffer,Numberoftoilets,numberofwings,Numberoflounges,Numberofkitchen,Numberofclippers,numberofwarehouses,Typeoftoilets,diraction,Features,space,AgeOfProperty,typeofkitchen)
    values(:itid,:itTypeOfOffer,:itNumberoftoilets,:itnumberofwings,:itNumberoflounges,:itNumberofkitchen,:itNumberofclippers,:itnumberofwarehouses,:itTypeoftoilets,:itdiraction,:itFeatures,:itspace,:itAgeOfProperty,:ittypeofkitchen)';


    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array(
       'itid' => null,
    'itTypeOfOffer' => $TypeOfOffer_var,
    'itNumberoftoilets' => $Numberoftoilets_var,
    'itnumberofwings' => $numberofwings_var,
    'itNumberoflounges'  => $Numberoflounges_var,
    'itNumberofkitchen' => $Numberofkitchen_var,
    'itNumberofclippers' => $Numberofclippers_var,
    'it	numberofwarehouses' =>  $numberofwarehouses_var,
    'itnumberofstreet' => $numberofstreet_var,
    'itTypeoftoilets' => $Typeoftoilets_var,
    'itdiraction'  => $diraction_var,
    'itFeatures'  => $features_var,
    'itspace' => $space_var,
    'itAgeOfProperty'  => $AgeOfProperty_var,
    'ittypeofkitchen' => $typeofkitchen_var


    ));


    //*************************************  sql add villa                 ********************************* end



}

    ?>