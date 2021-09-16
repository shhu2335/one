<?php
include "conection.php";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// اختصارات
// عدد الصالات






// ^^^^^^^^^^ hussam ^^^^^^^^^^ login system ^^^^^^^^^^^^^^^^^^^^^  start

if (isset($_POST['submit_form_login']))
{
    // *********************    username   ***********************************
    if (empty($_POST["form_user_name"]))
    {
        $var_user_name_err = "الرجاء كتابة اسم المستخدم";
        $_POST["form_user_name"]='';
    }
    if (filter_has_var(INPUT_POST, 'form_user_name'))
    {
        $var_user_name=test_input(filter_var($_POST['form_user_name'], FILTER_SANITIZE_STRING));
    }


    // *********************    password   ************************************
    if (empty($_POST["form_password"]))
    {
        $var_password_err = "الرجاء كتابة كلمة المرور";
        $_POST["form_password"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_password'))
    {
        $var_password=test_input(filter_var($_POST["form_password"], FILTER_SANITIZE_STRING));
    }


    if (isset($pdo))
    {
        $user = $pdo->prepare('select *  from  user  where usernmae = :usernmae ');
        //,'password' => $password_var
        $user->execute(['usernmae' => $var_user_name ]);
        //$user->fetch(PDO::FETCH_ASSOC);
        $data = $user->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row) {
            // echo $row['usernmae'];
            // echo $row['password'];
            //do whatever you want with the row
        }
        $count = $user->rowcount();

        if ($count === 0)
        {
            $message_user_not_found = "اسم المستخدم غير صحيح .";
        }
        else{

            if (password_verify($var_password, $row["password"]))
            {
                $_SESSION['name'] = $row['name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['phoneNO'] = $row['Customer_num'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['logged_in'] = true;
                header("Location: index.php");
            }}

    }






}



// // ^^^^^^^^^^ hussam ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^  end
//  **********************************     add new user  ************************************************* start
if (isset($_POST['submit_form_user'])) {
    // *********************    $name_var   ********************************************************
    if (empty($_POST["name_form"])) {
        $name_var_err = "الرجاء كتابة الاسم";
        $_POST["name_form"] = '';
    }
    if (filter_has_var(INPUT_POST, 'name_form')) {

        $name_var = test_input(filter_var($_POST['name_form'], FILTER_SANITIZE_STRING));
    }

    // ********************* username_form   ***************************************************
    if (empty($_POST["username_form"])) {
        $username_var_err = "الرجاء كتابة أسم المستخدم";
        $_POST["username_form"] = '';
    }
    if (filter_has_var(INPUT_POST, 'username_form')) {
        $username_var = test_input(filter_var($_POST["username_form"], FILTER_SANITIZE_STRING));
    }

    //  *********************************** password_form   *******************************************
    if (empty($_POST["password_form"])) {
        $password_var_err = "الرجاء كتابة كلمه المرور ";
        $_POST["password_form"] = '';
    }
    if (filter_has_var(INPUT_POST, 'password_form')) {
        $hashPassword = test_input(filter_var($_POST["password_form"], FILTER_SANITIZE_STRING));

        $options = array("cost"=>4);
        $password_var = password_hash($hashPassword,PASSWORD_DEFAULT,$options);
    }

    // *********************************** password_con_form   *******************************************
    if (empty($_POST["password_con_form"])) {
        $password_con_var_err = "الرجاء كتابة تأكيد كلمه المرور ";
        $_POST["password_con_form"] = '';
    }
    if (filter_has_var(INPUT_POST, 'password_con_form')) {
        $password_con_var = test_input(filter_var($_POST["password_con_form"], FILTER_SANITIZE_STRING));
    }

    // ***********************************  email_from   *******************************************
    if (empty($_POST["email_from"])) {
        $email_from_var_err = "الرجاء كتابة الإيميل ";
        $_POST["email_from"] = '';
    }
    if (filter_has_var(INPUT_POST, 'email_from')) {
        $email_from_var = test_input(filter_var($_POST["email_from"], FILTER_SANITIZE_EMAIL));
    }

    // ***********************************  phone_number_form   *******************************************
    if (empty($_POST["phone_number_form"])) {
        $phone_number_var_err = "الرجاء كتابة رقم الجوال ";
        $_POST["phone_number_form"] = '';
    }
    if (filter_has_var(INPUT_POST, 'phone_number_form')) {
        $phone_number_var = test_input(filter_var($_POST["phone_number_form"], FILTER_SANITIZE_NUMBER_INT));
    }


// ************************************ sql add new user ********************************************   start

//check that username is not already in use, if it is return an error.
    try {

        if (isset($pdo)) {
            $user = $pdo->prepare('select usernmae  from  user  where usernmae = :usernmae ');
            $user->execute(['usernmae' => $username_var]);
            $user->fetch();
            $count = $user->rowcount();
            if ($count > 0) {
                $message_user_exists = "اسم المستخدم مستخدم من قبل الرجاء ادخال اسم مستخدم آخر.";
            } else {
                $sql = "insert into user
                            (id,name,usernmae,password,phonenumber,email)
                   values(:itid,:itname,:itusernmae,:itpassword,:itphonenumber,:itemail)";

                if (isset($pdo)) {
                    $stmt = $pdo->prepare($sql);
                }

                $stmt->execute($r = array(

                    'itid' => null,
                    'itname' => $name_var,
                    'itusernmae' => $username_var,
                    'itpassword' => $password_var,
                    'itphonenumber' => $phone_number_var,
                    'itemail' => $email_from_var,
                ));
            }


        }
    } catch (pdoexception $exception) {

    }
//// ************************************ sql add new user ********************************************   end

}

// ****************************************     add new user  ******************************************** end


// ***************************** form_add_building ******************************* start
if (isset($_POST['submit_form_add_building'])) {


    //************************************** form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة المساحه";
        $_POST["form_space"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    }
//**********************************  form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
    }


//**************************************  form_taype_of_offer ***************************************

    if (empty($_POST["form_taype_of_offer"])) {
        $taype_of_offer_var_Err = "الرجاء ادخال نوع عرض العقار.";
        $_POST["form_taype_of_offer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_taype_of_offer')) {

        $taype_of_offer_var = test_input(filter_var($_POST["form_taype_of_offer"], FILTER_SANITIZE_STRING));
    }


//********************************  form_num_apartment **************************************************
    if (empty($_POST["form_num_apartment"])) {
        $num_apartment_var_Err = "الرجاء ادخال عدد الشقق.";
        $_POST["form_num_apartment"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_apartment')) {

        $num_apartment_var = test_input(filter_var($_POST["form_num_apartment"], FILTER_SANITIZE_STRING));
    }

//**************************************** check form_num_flor **********************************************
    if (empty($_POST["form_num_flor"])) {
        $num_flor_var_Err = "الرجاء ادخال عدد الطوابق.";
        $_POST["form_num_flor"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_flor')) {

        $num_flor_var = test_input(filter_var($_POST["form_num_flor"], FILTER_SANITIZE_STRING));
    }

    //*********************************** check form_num_left **********************************************
    if (empty($_POST["form_num_left"])) {
        $num_left_var_Err = "الرجاء ادخال عدد المصاعد.";
        $_POST["form_num_left"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_left')) {

        $num_left_var = test_input(filter_var($_POST["form_num_left"], FILTER_SANITIZE_STRING));
    }

    //**************************** check form_num_parking ********************************
    if (empty($_POST["form_num_parking"])) {
        $num_parking_var_Err = "الرجاء اختيار عدد المواقف.";
        $_POST["form_num_parking"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_parking')) {

        $num_parking_var = test_input(filter_var($_POST["form_num_parking"], FILTER_SANITIZE_STRING));
    }
    //*************************** check form_num_Street *****************************************
    if (empty($_POST["form_num_Street"])) {
        $num_Street_var_Err = "الرجاءاختيار عدد الشوارع.";
        $_POST["form_num_Street"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_Street')) {

        $num_Street_var = test_input(filter_var($_POST["form_num_Street"], FILTER_SANITIZE_STRING));
    }
    //************************************* check    form_direction ********************************************
    if (empty($_POST["form_direction"])) {
        $direction_var_Err = "الرجاء اختيار الواجهه.";
        $_POST["form_direction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_direction')) {

        $direction_var = test_input(filter_var($_POST["form_direction"], FILTER_SANITIZE_STRING));
    }

//******************************************** check form_double_room *****************************************
    if (empty($_POST["form_double_room"])) {
        $double_room_var_Err = "الرجاء الرجاء الإختيار.";
        $_POST["form_double_room"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_double_room')) {

        $double_room_var = test_input(filter_var($_POST["form_double_room"], FILTER_SANITIZE_STRING));
    }

//************************************* check form_triple_room *********************************************
    if (empty($_POST["form_triple_room"])) {
        $_triple_room_var_Err = "الرجاء الرجاء الإختيار.";
        $_POST["form_triple_room"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_triple_room')) {

        $_triple_room_var = test_input(filter_var($_POST["form_triple_room"], FILTER_SANITIZE_STRING));
    }
//**************************************** check form_quad_room *******************************************
    if (empty($_POST["form_quad_room"])) {
        $quad_room_var_Err = "الرجاء الرجاء الإختيار.";
        $_POST["form_quad_room"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_quad_room')) {

        $quad_room_var = test_input(filter_var($_POST["form_quad_room"], FILTER_SANITIZE_STRING));
    }

//******************************************* check form_features ***********************************************
    if (empty($_POST["form_features"])) {
        $features_var_Err = "الرجاء ادخال عدد المميزات إضافيه.";
        $_POST["form_features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_features')) {

        $features_var = test_input(filter_var($_POST["form_features"], FILTER_SANITIZE_STRING));
    }
// ******************************************** form_add_building *********************** end


// ******************************************** SQL_add_building *********************** start

    $sql = 'insert into building  (id,Numberofapartments,Numberoftsrees,Features,Apartmenttype,space,AgeOfProperty,type_of_offer)
                   values(:itid,:itNumberofapartments,:itNumberoftsrees,:itFeatures,:itApartmenttype,:itspace,:itAgeOfProperty,:ittype_of_offer)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }


    $stmt->execute($r = array(
        'itid' => null,
        'itNumberofapartments' => $num_apartment_var,
        'itNumberoftsrees' => $num_Street_var,
        'itFeatures' => $features_var,
        'itApartmenttype' => $num_apartment_var,
        'itspace' => $space_var,
        'itAgeOfProperty' => $AgeOfProperty_var,
        'ittype_of_offer' => $taype_of_offer_var
    ));




    if (isset($_POST['submit_form_ِِAdd_studio'])) {


// *********************  defined variable     $var_Type_Offer   *******************************************
        if (empty($_POST["Form_Type_Offer"])) {
            $var_Type_Offer_err = "الرجاء أختيار نوع العرض";
            $_POST["Form_Type_Offer"] = '';
        }
        if (filter_has_var(input_post, 'Form_Type_Offer'))
        {
            $var_Type_Offer = test_input(filter_var($_POST['Form_Type_Offer'], filter_sanitize_string));
        }

// *********************  defined variable    $var_Direction   *******************************************
        if (empty($_POST["Form_Direction"]))
        {
            $var_Direction_err = "الرجاء الاختيار ";
            $_POST["Form_Direction"] = '';
        }
        if (filter_has_var(input_post, 'Form_Direction'))
        {
            $var_Direction = test_input(filter_var($_POST['Form_Direction'], filter_sanitize_string));
        }

// *********************  defined variable    $var_Number_Toilets   *******************************************
        if (empty($_POST["Form_Number_Toilets"]))
        {
            $var_Number_Toilets_err = "الرجاء ألاختيار ";
            $_POST["Form_Number_Toilets"] = '';
        }
        if (filter_has_var(input_post, 'Form_Number_Toilets'))
        {
            $var_Number_Toilets = test_input(filter_var($_POST['Form_Number_Toilets'], filter_sanitize_string));
        }

// *********************  defined variable    $var_Types_Toilets   *******************************************
        if (empty($_POST["Form_Types_Toilets"]))
        {
            $var_Types_Toilets_err = "الرجاء ألاختيار ";
            $_POST["Form_Types_Toilets"] = '';
        }
        if (filter_has_var(input_post, 'Form_Types_Toilets'))
        {
            $var_Types_Toilets = test_input(filter_var($_POST['Form_Types_Toilets'], filter_sanitize_string));
        }

// *********************  defined variable    $var_Meeting_Rooms   *******************************************
        if (empty($_POST["Form_Meeting_Rooms"]))
        {
            $var_Meeting_Rooms_err = "الرجاء ألاختيار ";
            $_POST["Form_Meeting_Rooms"] = '';
        }
        if (filter_has_var(input_post, 'Form_Meeting_Rooms'))
        {
            $var_Meeting_Rooms = test_input(filter_var($_POST['Form_Meeting_Rooms'], filter_sanitize_string));
        }

// *********************  defined variable    $var_Date   *******************************************
        if (empty($_POST["Form_Date"]))
        {
            $var_Date_err = "الرجاء ألاختيار ";
            $_POST["Form_Date"] = '';
        }
        if (filter_has_var(input_post, 'Form_Date'))
        {
            $var_Date = test_input(filter_var($_POST['Form_Date'], filter_sanitize_string));
        }

        $var_insert_build = '  تمت إضافه العماره بنجاح' ;
        $istrue = 1;

    }


}
// ************************************ SQL_add_building ********************************* end


// ***********************************  form_add_hotel  ***********************************  start
if (isset($_POST['submit_form_add_hotel'])) {
//*************************************  form_TypeOfOffer    *********************************
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_numberofrooms     *********************************
    if (empty($_POST["form_numberofrooms"])) {
        $numberofrooms_var_Err = "الرجاء ادخال عدد الغرف .";
        $_POST["form_numberofrooms"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofrooms')) {

        $numberofrooms_var = test_input(filter_var($_POST["form_numberofrooms"], FILTER_SANITIZE_STRING));
    }

// ***********************************  form_numberofwings   *************************************

    if (empty($_POST["form_numberofwings"])) {
        $numberofwings_var_Err = "الرجاء ادخال عدد الأجنحه .";
        $_POST["form_numberofwings"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofwings')) {

        $numberofwings_var = test_input(filter_var($_POST["form_numberofwings"], FILTER_SANITIZE_STRING));
    }

//*************************************   form_thenumberoffloors   *********************************

    if (empty($_POST["form_thenumberoffloors"])) {
        $thenumberoffloors_var_Err = "الرجاء ادخال عدد الأدوار .";
        $_POST["form_thenumberoffloors"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_thenumberoffloors')) {

        $thenumberoffloors_var = test_input(filter_var($_POST["form_thenumberoffloors"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_numberoflifts     *********************************

    if (empty($_POST["form_numberoflifts"])) {
        $numberoflifts_var_Err = "الرجاء ادخال عدد المصاعد .";
        $_POST["form_numberoflifts"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberoflifts')) {

        $numberoflifts_var = test_input(filter_var($_POST["form_numberoflifts"], FILTER_SANITIZE_STRING));
    }

//*************************************   form_Numberofmeetingroom   *********************************

    if (empty($_POST["form_Numberofmeetingroom"])) {
        $Numberofmeetingroom_var_Err = "الرجاء ادخال عدد غرف الإجتماعات .";
        $_POST["form_Numberofmeetingroom"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofmeetingroom')) {

        $Numberofmeetingroom_var = test_input(filter_var($_POST["form_Numberofmeetingroom"], FILTER_SANITIZE_STRING));
    }

//*************************************   form_numberofwarehouses   *********************************

    if (empty($_POST["form_numberofwarehouses"])) {
        $numberofwarehouses_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_numberofwarehouses"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofwarehouses')) {

        $numberofwarehouses_var = test_input(filter_var($_POST["form_numberofwarehouses"], FILTER_SANITIZE_STRING));
    }

//*************************************   form_Numberofrestaurants  *********************************

    if (empty($_POST["form_Numberofrestaurants"])) {
        $Numberofrestaurants_Err = "الرجاء ادخالعدد المطاعم .";
        $_POST["form_Numberofrestaurants"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofrestaurants')) {

        $Numberofrestaurants_var = test_input(filter_var($_POST["form_Numberofrestaurants"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_numberofkitchens  *********************************

    if (empty($_POST["form_numberofkitchens"])) {
        $numberofkitchens_var_Err = "الرجاء ادخال عدد المطابخ .";
        $_POST["form_numberofkitchens"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofkitchens')) {

        $numberofkitchens_var = test_input(filter_var($_POST["form_numberofkitchens"], FILTER_SANITIZE_STRING));
    }

//*************************************                   *********************************
    /*
        if (empty($_POST["form_Supplementnumber"])) {
            $Supplementnumber_var_Err = "الرجاء ادخال عدد الملاحق .";
            $_POST["form_Supplementnumber"] = '';
        }
        if (filter_has_var(INPUT_POST, 'form_Supplementnumber')) {

            $Supplementnumber_var = test_input(filter_var($_POST["form_Supplementnumber"], FILTER_SANITIZE_STRING));
        }
    */
//************************************* form_Numberofparking       *********************************

    if (empty($_POST["form_Numberofparking"])) {
        $Numberofparking_var_Err = "الرجاء ادخال عدد المواقف .";
        $_POST["form_Numberofparking"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofparking')) {

        $Numberofparking_var = test_input(filter_var($_POST["form_Numberofparking"], FILTER_SANITIZE_STRING));
    }

//************************************* form_numberofstreet *********************************

    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_Reception    *********************************

    if (empty($_POST["form_Reception"])) {
        $Reception_var_Err = "الرجاء ادخال عدد الإستقبال .";
        $_POST["form_Reception"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Reception')) {

        $Reception_var = test_input(filter_var($_POST["form_Reception"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_Typeoftoilets  *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_diraction   *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_Features   *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
    }

//*************************************  check form_space                 *********************************

    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء ادخال المساحه.";
        $_POST["form_space"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_AgeOfProperty   *********************************

    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار .";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
    }

//*************************************  form add hotel ********************************* end

//************************************* sql add hotel *********************************  start

    $sql = 'insert into hotel 
    (id,TypeOfOffer,numberofrooms,numberofwings,thenumberoffloors,numberoflifts, Numberofmeetingroom,numberofwarehouses, Numberofrestaurants,numberofkitchens,/*Supplementnumber,*/Numberofparking,numberofstreet,Reception,Typeoftoilets,diraction,Features,space,AgeOfProperty)
  values(:itid,:itTypeOfOffer,:itnumberofrooms,:itnumberofwings,:itthenumberoffloors,:itnumberoflifts,:itNumberofmeetingroom,:itnumberofwarehouses,:itNumberofrestaurants,:itnumberofkitchens,/*:itSupplementnumber,*/:itNumberofparking,:itnumberofstreet,:itReception,:itTypeoftoilets,:itdiraction,:itFeatures,:itspace,:itAgeOfProperty
)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array(
        'itid'                       => null,
        'itTypeOfOffer'              => $TypeOfOffer_var,
        'itnumberofrooms'            => $numberofrooms_var,
        'itnumberofwings'            => $numberofwings_var,
        'itthenumberoffloors'        => $thenumberoffloors_var,
        'itnumberoflifts'            => $numberoflifts_var,
        'itNumberofmeetingroom'      => $Numberofmeetingroom_var,
        'itnumberofwarehouses'       => $numberofwarehouses_var,
        'itNumberofrestaurants'      => $Numberofrestaurants_var,
        'itnumberofkitchens'         => $numberofkitchens_var,

        'itNumberofparking'          => $Numberofparking_var,
        'itnumberofstreet'           => $numberofstreet_var,
        'itReception'                => $Reception_var,
        'itTypeoftoilets'            => $Typeoftoilets_var,
        'itdiraction'                => $diraction_var,
        'itFeatures'                 => $Features_var,
        'itspace'                    => $space_var,
        'itAgeOfProperty'            => $AgeOfProperty_var
    ));
// 'itSupplementnumber'         => $Supplementnumber_var,
// ***********************************  sql_add_hotel  *****************************  end

}
// ***********************************  form_add_hotel  ******************************  end


// ***********************************  form_add_villa *****************************  start
if (isset($_POST['submit_form_add_villa'])) {
//************************************* form_TypeOfOffer  *********************************

    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_Numberoftoilets  *********************************

    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_numberofwings   *********************************

    if (empty($_POST["form_numberofwings"])) {
        $numberofwings_var_Err = "الرجاء ادخال عددالأجنحه .";
        $_POST["form_numberofwings"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofwings')) {

        $numberofwings_var = test_input(filter_var($_POST["form_numberofwings"], FILTER_SANITIZE_STRING));
    }

    //*************************************   form_Numberoflounges    *********************************

    if (empty($_POST["form_Numberoflounges"])) {
        $Numberoflounges_var_Err = "الرجاء ادخال عدد الصالات .";
        $_POST["form_Numberoflounges"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoflounges')) {

        $Numberoflounges_var = test_input(filter_var($_POST["form_Numberoflounges"], FILTER_SANITIZE_STRING));
    }

    //**************************    form_Numberofkitchen    *********************************

    if (empty($_POST["form_Numberofkitchen"])) {
        $Numberofkitchen_var_Err = "الرجاء ادخال عدد المطابخ .";
        $_POST["form_Numberofkitchen"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofkitchen')) {

        $Numberofkitchen_var = test_input(filter_var($_POST["form_Numberofkitchen"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Numberofbedrooms   *********************************
    if (empty($_POST["form_Numberofbedrooms"])) {
        $Numberofbedrooms_var_Err = "الرجاء ادخال عدد غرف النوم  .";
        $_POST["form_Numberofbedrooms"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofbedrooms')) {

        $Numberofbedrooms_var = test_input(filter_var($_POST["form_Numberofbedrooms"], FILTER_SANITIZE_STRING));
    }

//************************************* form_BoardNumber  *********************************

    if (empty($_POST["form_BoardNumber"])) {
        $BoardNumber_var_Err = "الرجاء ادخال عدد المجلس .";
        $_POST["form_BoardNumber"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_BoardNumber')) {

        $BoardNumber_var = test_input(filter_var($_POST["form_BoardNumber"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Numberofclippers  *********************************

    if (empty($_POST["form_Numberofclippers"])) {
        $Numberofclippers_var_Err = "الرجاء ادخال عدد المقلط .";
        $_POST["form_Numberofclippers"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofclippers')) {

        $Numberofclippers_var = test_input(filter_var($_POST["form_Numberofclippers"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Numberofwarehouse     *********************************
    if (empty($_POST["form_Numberofwarehouse"])) {
        $Numberofwarehouse_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_Numberofwarehouse"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofwarehouse')) {

        $Numberofwarehouse_var = test_input(filter_var($_POST["form_Numberofwarehouse"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_numberofstreet  *********************************


    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_Typeoftoilets   *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_typeofkitchen  *********************************

    if (empty($_POST["form_typeofkitchen"])) {
        $typeofkitchen_var_Err = "الرجاء ادخال نوع المطبخ .";
        $_POST["form_typeofkitchen"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_typeofkitchen')) {

        $typeofkitchen_var = test_input(filter_var($_POST["form_typeofkitchen"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_diraction   *********************************

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
    //************************************* form_numberofwarehouses  *********************************

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

//*************************************  form add villa          ********************************* end

//*************************************  sql add villa **************** ********************************* start

    $sql = 'insert into villa (id,numberofstreet,TypeOfOffer,Numberoftoilets,numberofwings,Numberoflounges,Numberofkitchen,Numberofclippers,numberofwarehouses,Typeoftoilets,diraction,Features,space,AgeOfProperty,typeofkitchen)
     values(:itid,:itnumberofstreet,:itTypeOfOffer,:itNumberoftoilets,:itnumberofwings,:itNumberoflounges,:itNumberofkitchen,:itNumberofclippers,:itnumberofwarehouses,:itTypeoftoilets,:itdiraction,:itFeatures,:itspace,:itAgeOfProperty,:ittypeofkitchen)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array(
        'itid'                       => null,
        'itnumberofstreet'=>$numberofstreet_var,
        'itTypeOfOffer'              => $TypeOfOffer_var,
        'itNumberoftoilets'=>$Numberoftoilets_var,
        'itnumberofwings'=>$numberofwings_var,
        'itNumberoflounges' =>$Numberoflounges_var,
        'itNumberofkitchen'=>$Numberofkitchen_var,
        'itNumberofclippers'=>$Numberofclippers_var,
        'itnumberofwarehouses'=>$numberofwarehouses_var,

        'itTypeoftoilets'=>$Typeoftoilets_var,
        'itdiraction'=>$diraction_var,
        'itFeatures'=>$features_var,
        'itspace'=>$space_var,
        'itAgeOfProperty'=>$AgeOfProperty_var,
        'ittypeofkitchen'=>$typeofkitchen_var


    ));
    // ***********************************  sql_add_villa ****************************************  end

}
// ***********************************  form_add_villa *****************************  end


// ***********************************  form_add_shop *****************************  start
if(isset($_POST['submit_form_add_shop'])){
    //*************************************  form_TypeOfOffer   *********************************
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
    }
//************************************* form_Numberoftoilets  *********************************

    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
    }

//************************************* form_numberofstreet *********************************

    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_numberofroles *********************************

    if (empty($_POST["form_numberofroles"])) {
        $numberofroles_var_Err = "الرجاء ادخال عدد الأدوار .";
        $_POST["form_numberofroles"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofroles')) {

        $numberofroles_var = test_input(filter_var($_POST["form_numberofroles"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Warehousenumber  *********************************

    if (empty($_POST["form_Warehousenumber"])) {
        $Warehousenumber_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_Warehousenumber"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Warehousenumber')) {

        $Warehousenumber_var = test_input(filter_var($_POST["form_Warehousenumber"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Typeoftoilets *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_diraction  *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Features *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_space *********************************

    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء ادخال المساحه.";
        $_POST["form_space"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_AgeOfProperty   *********************************

    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار .";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
    }

//*************************************  form add shop ********************************* end

//*************************************  sql add shop ********************************* start

    $sql = 'insert into shop  (id,TypeOfOffer,Numberoftoilets,numberofstreet,numberofroles,Warehousenumber,Typeoftoilets,diraction,Features,space,AgeOfProperty)
  values(:itid,:itTypeOfOffer,:itNumberoftoilet,:itnumberofstreet,:itnumberofroles,:itWarehousenumber,:itTypeoftoilets,:itdiraction,:itFeatures,:itspace,:itAgeOfProperty
)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array(
        'itid'    => null,
        'itTypeOfOffer'    => $TypeOfOffer_var,
        'itNumberoftoilet'   =>$Numberoftoilets_var,
        'itnumberofstreet'   =>  $numberofstreet_var,
        'itnumberofroles' =>  $numberofroles_var,
        'itWarehousenumber'  => $Warehousenumber_var,
        'itTypeoftoilets'  => $Typeoftoilets_var,
        'itdiraction'  => $diraction_var,
        'itFeatures'  => $Features_var,
        'itspace'  => $space_var,
        'itAgeOfProperty'=> $AgeOfProperty_var
    ));

//*************************************  sql add shop ********************************* end

}
// ***********************************  form_add_shop *****************************  end



//*************************************  form add land ********************************* start
if(isset($_POST['submit_form_add_land'])){
    //************************************* form_TypeOfOffer   *********************************

    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
    }

//************************************* form_numberofstreet  *********************************

    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
    }

//************************************* form_diraction  *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Typeofinstrument *********************************

    if (empty($_POST["form_Typeofinstrument"])) {
        $Typeofinstrument_var_Err = "الرجاء ادخال نوع الصك.";
        $_POST["form_Typeofinstrument"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeofinstrument')) {

        $Typeofinstrument_var = test_input(filter_var($_POST["form_Typeofinstrument"], FILTER_SANITIZE_STRING));
    }


    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة المساحه";
        $_POST["form_space"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    }
//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
    }



//************************************* form_Features  *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
    }
    // ******************************** check form_priceofonemeter ******************************************
    if (empty($_POST["form_priceofonemeter"])) {
        $priceofonemeter_var_Err = "الرجاء ادخال سعر المتر.";
        $_POST["form_priceofonemeter"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_priceofonemeter')) {

        $priceofonemeter_var = test_input(filter_var($_POST["form_priceofonemeter"], FILTER_SANITIZE_STRING));
    }



    //*************************************** sql add land **************************************   start
    $sql=  'insert into land (id,TypeOfOffer, numberofstreet,diraction,Typeofinstrument , space,priceofonemeter, AgeOfProperty )
                    values(:itid,:tiTypeOfOffer, :itnumberofstreet,
                           :itdiraction, :itTypeofinstrument , :itspace,
                           :itpriceofonemeter, :itAgeOfProperty)' ;
    if (isset($pdo))
    {
        $stmt=$pdo->prepare($sql);

    }
    $stmt->execute($r = array(
        'itid' =>null,
        'tiTypeOfOffer' => $TypeOfOffer_var,
        'itnumberofstreet'=>$numberofstreet_var,
        'itdiraction'=> $diraction_var,
        'itTypeofinstrument'=>$Typeofinstrument_var,
        'itspace'=>$space_var,
        'itpriceofonemeter'=>$priceofonemeter_var,
        'itAgeOfProperty'=>$AgeOfProperty_var

    ));

    //****************************************** sql add land  ******************************* end
}
//*************************************  form add land ********************************* end


//*************************************** form add farm ******************************* start
if(isset($_POST['submit_form_add_farm']))
{
    //************************************* form_Numberofwells  *********************************
    if (empty($_POST["form_Numberofwells"])) {
        $Numberofwells_var_Err = "الرجاء ادخال عدد الأبار .";
        $_POST["form_Numberofwells"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofwells')) {

        $Numberofwells_var = test_input(filter_var($_POST["form_Numberofwells"], FILTER_SANITIZE_STRING));
    }
//*************************************  form_Numberofpalms *********************************

    if (empty($_POST["form_Numberofpalms"])) {
        $Numberofpalms_var_Err = "الرجاء ادخال عدد النخيل .";
        $_POST["form_Numberofpalms"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberofpalms')) {

        $Numberofpalms_var = test_input(filter_var($_POST["form_Numberofpalms"], FILTER_SANITIZE_STRING));
    }
//*************************************  form_Numberoftrees  *********************************

    if (empty($_POST["form_Numberoftrees"])) {
        $Numberoftrees_var_Err = "الرجاء ادخال عدد الأشجار .";
        $_POST["form_Numberoftrees"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoftrees')) {

        $Numberoftrees_var = test_input(filter_var($_POST["form_Numberoftrees"], FILTER_SANITIZE_STRING));
    }
//*************************************  form_Numberoftoilets  *********************************

    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
    }

//************************************* form_numberofstreet *********************************
    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
    }

//************************************* form_Break  *********************************
    if (empty($_POST["form_Break"])) {
        $Break_var_Err = "الرجاء ادخال عدد الإستراحات .";
        $_POST["form_Break"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Break')) {

        $Break_var = test_input(filter_var($_POST["form_Break"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_electricity  *********************************

    if (empty($_POST["form_electricity"])) {
        $electricity_var_Err = "هل المزرعه موصوله بالكهرباء ؟ .";
        $_POST["form_electricity"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_electricity')) {

        $electricity_var = test_input(filter_var($_POST["form_electricity"], FILTER_SANITIZE_STRING));
    }

//************************************* form_asphalt     *********************************
    if (empty($_POST["form_asphalt"])) {
        $asphalt_var_Err = "هل المزرعه موصوله بالإسفلت ؟ .";
        $_POST["form_asphalt"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_asphalt')) {

        $asphalt_var = test_input(filter_var($_POST["form_asphalt"], FILTER_SANITIZE_STRING));
    }

//********************************* form_Typeoftoilets       *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
    }

//************************************* form_diraction    *********************************
    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
    }

//*************************************  form_Features  *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
    }

//************************************** check  form_TypeOfOffer *******************************************
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
    }

    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء إدخال المساحه";
        $_POST["form_space"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
    }
//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
    }

// ******************************** check form_priceofonemeter ******************************************
    if (empty($_POST["form_priceofonemeter"])) {
        $priceofonemeter_var_Err = "الرجاء ادخال سعر المتر.";
        $_POST["form_priceofonemeter"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_priceofonemeter')) {

        $priceofonemeter_var = test_input(filter_var($_POST["form_priceofonemeter"], FILTER_SANITIZE_STRING));
    }
// ********************************  form_Typeofinstrument *****************************************

    if (empty($_POST["form_Typeofinstrument"])) {
        $Typeofinstrument_var_Err = "الرجاء ادخال نوع الصك.";
        $_POST["form_Typeofinstrument"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_Typeofinstrument')) {

        $Typeofinstrument_var = test_input(filter_var($_POST["form_Typeofinstrument"], FILTER_SANITIZE_STRING));
    }
// ********************************  form add farm ****************************************** end

// ********************************  sql add farm ****************************************** start

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


}
//*************************************** form add farm ******************************* end


function hu4654646 (){



//
//
//
//
//
//
//
//
//
//$errors= array();
//$file_name = $_files['image']['name'];
//$file_size = $_files['image']['size'];
//$file_tmp = $_files['image']['tmp_name'];
//$file_type = $_files['image']['type'];
//$file_ext=strtolower(end(explode('.',$_files['image']['name'])));
//
//$expensions= array("jpeg","jpg","png");
//
//if(in_array($file_ext,$expensions)=== false){
//    $errors[]="صيغة الصورة غير مسموح به ، يرجى اختيار ملف jpeg أو jpeg أو png.";
//}
//
//if($file_size > 2097152) {
//    $errors[]='يجب أن يكون حجم الملف 2 ميغابايت بالضبط';
//}
//
//if(empty($errors)==true) {
//    move_uploaded_file($file_tmp,"img/".$file_name);
//    echo "$img";
//}
//
//
//// *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-* نهاية استقبال بيانات الصورة *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
//
//
//
//
//// vilter name_f *-*-*-*-*-*-*-*--*-*-*-*-*-*-*--*-*
//if (empty($_post["name_f"]))
//{ $descriptionerr="الرجاء كتابة المدينة"; $_post["name_f"]=''; }
//if(filter_has_var(input_post,'name_f'))
//{ $name=test_input(filter_var($_post["name_f"],filter_sanitize_string)); }
//
////********************************************
//
//
//
//
//
//                                        //*******************************************
//
//                                        $arra_list_state=array(
//                                            "مكة المكرمة", "المدينة المنورة", "الرياض",
//                                            "الشرقية", "القصيم", "حائل",
//                                            "تبوك", "جازان", "الجوف",
//                                            "نجران", "عسير", "الحدود الشمالية",
//                                        );
//
//                                        $length_state=count($arra_list_state);
//
//                                        //********************************************
//
//                                        $sql = "select *from countsusers where ip_address=:ip_address";
//                                        $stmt = $conn->prepare($sql);
//                                        $stmt->bindvalue("ip_address",$visitor_ip);
//                                        $stmt->execute();
//                                        $total_visitor=count($stmt->fetchall(pdo::fetch_assoc));
//
//                                        if ($total_visitor==0) {
//
//
//                                        }
//
//                                        //*****************************************************
//
//                                        function test_input($data) {
//                                            $data=trim($data);
//                                            $data=stripslashes($data);
//                                            $data=htmlspecialchars($data);
//                                            return $data;
//                                        }
//
//                                        //******************************************
//
//                                        if(filter_has_var(input_post,"search_status"))
//                                        {
//                                            $status_1=test_input(filter_var($_post["search_status"],filter_sanitize_string));
//                                            $is_display=+1;
//                                        }

}


?>