<!-- start of conection -->
<?php
//include "conection.php";
//include "header.php";
//if (! empty($_SESSION['logged_in']))

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//{
?>
<!-- start of header -->

<!DOCTYPE html>
<html lang="ar">

<head>


    <!--        <meta charset="utf-8">-->
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->
    <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom style to prevent carousel from being distorted
           if for some reason image doesn't load */
        .carousel-item{
            min-height: 280px;
        }
    </style>
</head>


<body>

<?php


// ======================  start submit_farm  ======================
if(isset($_POST['submit_form_add_farm']))
{  $count_farm =0;
    //************************************* form_Numberofwells  *********************************
    if (empty($_POST["form_Numberofwells"])) {
        $Numberofwells_var_Err = "الرجاء ادخال عدد الأبار .";
        $_POST["form_Numberofwells"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofwells')) {

        $Numberofwells_var = test_input(filter_var($_POST["form_Numberofwells"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}
//*************************************  form_Numberofpalms *********************************

    if (empty($_POST["form_Numberofpalms"])) {
        $Numberofpalms_var_Err = "الرجاء ادخال عدد النخيل .";
        $_POST["form_Numberofpalms"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofpalms')) {

        $Numberofpalms_var = test_input(filter_var($_POST["form_Numberofpalms"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}
//*************************************  form_Numberoftrees  *********************************

    if (empty($_POST["form_Numberoftrees"])) {
        $Numberoftrees_var_Err = "الرجاء ادخال عدد الأشجار .";
        $_POST["form_Numberoftrees"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberoftrees')) {

        $Numberoftrees_var = test_input(filter_var($_POST["form_Numberoftrees"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}
//*************************************  form_Numberoftoilets  *********************************

    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//************************************* form_numberofstreet *********************************
    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//************************************* form_Break  *********************************
    if (empty($_POST["form_Break"])) {
        $Break_var_Err = "حقل إجباري .";
        $_POST["form_Break"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Break')) {

        $Break_var = test_input(filter_var($_POST["form_Break"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//*************************************  form_electricity  *********************************

    if (empty($_POST["form_electricity"])) {
        $electricity_var_Err = "هل المزرعه موصوله بالكهرباء ؟ .";
        $_POST["form_electricity"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_electricity')) {

        $electricity_var = test_input(filter_var($_POST["form_electricity"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//************************************* form_asphalt     *********************************
    if (empty($_POST["form_asphalt"])) {
        $asphalt_var_Err = "هل المزرعه موصوله بالإسفلت ؟ .";
        $_POST["form_asphalt"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_asphalt')) {

        $asphalt_var = test_input(filter_var($_POST["form_asphalt"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//********************************* form_Typeoftoilets       *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//************************************* form_diraction    *********************************
    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//*************************************  form_Features  *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

//************************************** check  form_TypeOfOffer *******************************************
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء إدخال المساحه";
        $_POST["form_space"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}
//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}

// ******************************** check form_priceofonemeter ******************************************
    if (empty($_POST["form_priceofonemeter"])) {
        $priceofonemeter_var_Err = "الرجاء ادخال سعر المتر.";
        $_POST["form_priceofonemeter"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_priceofonemeter')) {

        $priceofonemeter_var = test_input(filter_var($_POST["form_priceofonemeter"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}
// ********************************  form_Typeofinstrument *****************************************

    if (empty($_POST["form_Typeofinstrument"])) {
        $Typeofinstrument_var_Err = "الرجاء ادخال نوع الصك.";
        $_POST["form_Typeofinstrument"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Typeofinstrument')) {

        $Typeofinstrument_var = test_input(filter_var($_POST["form_Typeofinstrument"], FILTER_SANITIZE_STRING));
        $count_farm =+1;}}
// ********************************  form add farm ****************************************** end

// ********************************  sql add farm ****************************************** start
    if ( $count_farm ===16){
        $sql=  'insert into farm (id,Numberofwells,Numberofpalms,Numberoftrees, Numberoftoilets,numberofstreet,Break,electricity,asphalt,Typeoftoilets,diraction,Typeofoffer,Features,Typeofinstrument,space,priceofonemeter,AgeOfProperty ) 
         values(:itid,:itNumberofwells,:itNumberofpalms,:itNumberoftrees,:itNumberoftoilets, :itnumberofstreet,:itBreak,:itelectricity,:itasphalt,:itTypeoftoilets,:itdiraction,:itTypeofoffer,:itFeatures,:itTypeofinstrument,:itspace,:itpriceofonemeter,:itAgeOfProperty)' ;
        if (isset($pdo))
        {
            $stmt=$pdo->prepare($sql);

        }
        $stmt->execute($r = array(
            'itid'=>null,
            'itNumberofwells' => $Numberofwells_var,
            'itNumberofpalms'=> $Numberofpalms_var,
            'itNumberoftrees'=> $Numberoftrees_var,
            'itNumberoftoilets' => $Numberoftoilets_var,
            'itnumberofstreet'=> $numberofstreet_var,
            'itBreak'=> $Break_var,
            'itelectricity'=> $electricity_var,
            'itasphalt' => $asphalt_var,
            'itTypeoftoilets' => $Typeoftoilets_var,
            'itdiraction' => $diraction_var,
            'itTypeofoffer' => $TypeOfOffer_var,
            'itFeatures' => $Features_var,
            'itTypeofinstrument' => $Typeofinstrument_var,
            'itspace' => $space_var,
            'itpriceofonemeter' => $priceofonemeter_var,
            'itAgeOfProperty' => $AgeOfProperty_var));



// ********************************  sql add farm ****************************************** end
        $alert_insert_farm_by_successfully = "تمت الإضافه بنجاح ";

    }
}
// ======================   end submit_farm   ======================

?>
</body>
</html>
<!-- start of footer -->
<?php //include "footer.php";  //}else{
// header("location:login.php");
//}
?>