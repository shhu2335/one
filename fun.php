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
            $message_user_not_found = "أسم المستخدم أو كلمة المرور غير صحيحة";
        }
        else{

            if (password_verify($var_password, $row["password"]))
            {
                $_SESSION['name']        = $row['name'];
                $_SESSION['id']          = $row['id'];
                $_SESSION['password']    = $row['password'];
                $_SESSION['email']       = $row['email'];
                $_SESSION['phonenumber'] = $row['phonenumber'];
                $_SESSION['usernmae']    = $row['usernmae'];
                $_SESSION['logged_in']   = true;
                header("Location:index.php");

            }
            else{
                $message_user_not_found = "أسم المستخدم أو كلمه المرور غير صحيحه";
            }

        }

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
                header('location: index.php');
            }


        }
    } catch (pdoexception $exception) {

    }
//// ************************************ sql add new user ********************************************   end

}

// ****************************************     add new user  ******************************************** end


// ***************************** form_add_building ******************************* start
if (isset($_POST['submit_form_add_building'])) {

    $count_building =0;
    //************************************** form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة المساحه";
        $_POST["form_space"] = '';
    }else{
    if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }}
//**********************************  form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }


//**************************************  form_taype_of_offer ***************************************

    if (empty($_POST["form_taype_of_offer"])) {
        $taype_of_offer_var_Err = "الرجاء ادخال نوع عرض العقار.";
        $_POST["form_taype_of_offer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_taype_of_offer')) {

        $taype_of_offer_var = test_input(filter_var($_POST["form_taype_of_offer"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }



//********************************  form_num_apartment **************************************************
    if (empty($_POST["form_num_apartment"])) {
        $num_apartment_var_Err = "الرجاء ادخال عدد الشقق.";
        $_POST["form_num_apartment"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_apartment')) {

        $num_apartment_var = test_input(filter_var($_POST["form_num_apartment"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }

//**************************************** check form_num_flor **********************************************
    if (empty($_POST["form_num_flor"])) {
        $num_flor_var_Err = "الرجاء ادخال عدد الطوابق.";
        $_POST["form_num_flor"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_flor')) {

        $num_flor_var = test_input(filter_var($_POST["form_num_flor"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }

    //*********************************** check form_num_left **********************************************
    if (empty($_POST["form_num_left"])) {
        $num_left_var_Err = "الرجاء ادخال عدد المصاعد.";
        $_POST["form_num_left"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_left')) {

        $num_left_var = test_input(filter_var($_POST["form_num_left"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }

    //**************************** check form_num_parking ********************************
    if (empty($_POST["form_num_parking"])) {
        $num_parking_var_Err = "الرجاء اختيار عدد المواقف.";
        $_POST["form_num_parking"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_parking')) {

        $num_parking_var = test_input(filter_var($_POST["form_num_parking"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }
    //*************************** check form_num_Street *****************************************
    if (empty($_POST["form_num_Street"])) {
        $num_Street_var_Err = "الرجاءاختيار عدد الشوارع.";
        $_POST["form_num_Street"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_Street')) {

        $num_Street_var = test_input(filter_var($_POST["form_num_Street"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }
    //************************************* check    form_direction ********************************************
    if (empty($_POST["form_direction"])) {
        $direction_var_Err = "الرجاء اختيار الواجهه.";
        $_POST["form_direction"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_direction')) {

        $direction_var = test_input(filter_var($_POST["form_direction"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }

//******************************************** check form_double_room *****************************************
    if (empty($_POST["form_double_room"])) {
        $double_room_var_Err = "الرجاء الرجاء الإختيار.";
        $_POST["form_double_room"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_double_room')) {

        $double_room_var = test_input(filter_var($_POST["form_double_room"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }

//************************************* check form_triple_room *********************************************
    if (empty($_POST["form_triple_room"])) {
        $_triple_room_var_Err = "الرجاء الرجاء الإختيار.";
        $_POST["form_triple_room"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_triple_room')) {

        $_triple_room_var = test_input(filter_var($_POST["form_triple_room"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }
//**************************************** check form_quad_room *******************************************
    if (empty($_POST["form_quad_room"])) {
        $quad_room_var_Err = "الرجاء الرجاء الإختيار.";
        $_POST["form_quad_room"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_quad_room')) {

        $quad_room_var = test_input(filter_var($_POST["form_quad_room"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }

//******************************************* check form_features ***********************************************
    if (empty($_POST["form_features"])) {
        $features_var_Err = "الرجاء ادخال عدد المميزات إضافيه.";
        $_POST["form_features"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_features')) {

        $features_var = test_input(filter_var($_POST["form_features"], FILTER_SANITIZE_STRING));
        $count_building+=1;
    }
// ******************************************** form_add_building *********************** end


// ******************************************** SQL_add_building *********************** start
if($count_building ===13) {
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
    $alert_insert_building_by_successfully = '  تمت إضافه العماره بنجاح';


}



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



    }


}
// ************************************ SQL_add_building ********************************* end


// ***********************************  form_add_hotel  ***********************************  start
if (isset($_POST['submit_form_add_hotel'])) {
    $count_hotel =0;
//*************************************  form_TypeOfOffer    *********************************
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }else{if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));

        $count_hotel+=1;}}

//*************************************  form_numberofrooms     *********************************
    if (empty($_POST["form_numberofrooms"])) {
        $numberofrooms_var_Err= "الرجاء ادخال عدد الغرف .";
        $_POST["form_numberofrooms"] = '';
    }else
    {if (filter_has_var(INPUT_POST, 'form_numberofrooms')) {

        $numberofrooms_var = test_input(filter_var($_POST["form_numberofrooms"], FILTER_SANITIZE_STRING));
        $count_hotel+=1;}}

// ***********************************  form_numberofwings   *************************************

    if (empty($_POST["form_numberofwings"])) {
        $numberofwings_var_Err = "الرجاء ادخال عدد الأجنحه .";
        $_POST["form_numberofwings"] = '';
    }else{if (filter_has_var(INPUT_POST, 'form_numberofwings')) {

        $numberofwings_var = test_input(filter_var($_POST["form_numberofwings"], FILTER_SANITIZE_STRING));
        $count_hotel+=1;}
    }

//*************************************   form_thenumberoffloors   *********************************

    if (empty($_POST["form_thenumberoffloors"])) {
        $thenumberoffloors_var_Err = "الرجاء ادخال عدد الطوابق .";
        $_POST["form_thenumberoffloors"] = '';
    }
    else{ if (filter_has_var(INPUT_POST, 'form_thenumberoffloors')) {

        $thenumberoffloors_var = test_input(filter_var($_POST["form_thenumberoffloors"], FILTER_SANITIZE_STRING));
        $count_hotel+=1; }
    }

//*************************************  form_numberoflifts     *********************************

    if (empty($_POST["form_numberoflifts"])) {
        $numberoflifts_var_Err = "الرجاء ادخال عدد المصاعد .";
        $_POST["form_numberoflifts"] = '';
    }
    else{ if (filter_has_var(INPUT_POST, 'form_numberoflifts')) {

        $numberoflifts_var = test_input(filter_var($_POST["form_numberoflifts"], FILTER_SANITIZE_STRING));
        $count_hotel+=1;}
    }

//*************************************   form_Numberofmeetingroom   *********************************

    if (empty($_POST["form_Numberofmeetingroom"])) {
        $Numberofmeetingroom_var_Err = "الرجاء ادخال عدد غرف الإجتماعات .";
        $_POST["form_Numberofmeetingroom"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofmeetingroom')) {

        $Numberofmeetingroom_var = test_input(filter_var($_POST["form_Numberofmeetingroom"], FILTER_SANITIZE_STRING));
        $count_hotel+=1;}
    }

//*************************************   form_numberofwarehouses   *********************************

    if (empty($_POST["form_numberofwarehouses"])) {
        $numberofwarehouses_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_numberofwarehouses"] = '';
    }
    else{ if (filter_has_var(INPUT_POST, 'form_numberofwarehouses')) {

        $numberofwarehouses_var = test_input(filter_var($_POST["form_numberofwarehouses"], FILTER_SANITIZE_STRING));
        $count_hotel+=1;}
    }

//*************************************   form_Numberofrestaurants  *********************************

    if (empty($_POST["form_Numberofrestaurants"])) {
        $Numberofrestaurants_Err = "الرجاء ادخال عدد المطاعم .";
        $_POST["form_Numberofrestaurants"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_Numberofrestaurants')) {

            $Numberofrestaurants_var = test_input(filter_var($_POST["form_Numberofrestaurants"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form_numberofkitchens  *********************************

    if (empty($_POST["form_numberofkitchens"])) {
        $numberofkitchens_var_Err = "الرجاء ادخال عدد المطابخ .";
        $_POST["form_numberofkitchens"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_numberofkitchens')) {

            $numberofkitchens_var = test_input(filter_var($_POST["form_numberofkitchens"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************                   *********************************

//************************************* form_Numberofparking       *********************************

    if (empty($_POST["form_Numberofparking"])) {
        $Numberofparking_var_Err = "الرجاء ادخال عدد المواقف .";
        $_POST["form_Numberofparking"] = '';
    }
  else {
      if (filter_has_var(INPUT_POST, 'form_Numberofparking')) {

          $Numberofparking_var = test_input(filter_var($_POST["form_Numberofparking"], FILTER_SANITIZE_STRING));
          $count_hotel+=1;}
  }
//************************************* form_numberofstreet *********************************

    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

            $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form_Reception    *********************************

    if (empty($_POST["form_Reception"])) {
        $Reception_var_Err = "الرجاء ادخال عدد الإستقبال .";
        $_POST["form_Reception"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_Reception')) {

            $Reception_var = test_input(filter_var($_POST["form_Reception"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form_Typeoftoilets  *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

            $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form_diraction   *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_diraction')) {

            $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form_Features   *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_Features')) {

            $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  check form_space                 *********************************

    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء ادخال المساحه.";
        $_POST["form_space"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_space')) {

            $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form_AgeOfProperty   *********************************

    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار .";
        $_POST["form_AgeOfProperty"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

            $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
            $count_hotel+=1;}
    }
//*************************************  form add hotel ********************************* end

//************************************* sql add hotel *********************************  start
if( $count_hotel===17){
    $sql = 'insert into hotel 
    (id,TypeOfOffer,numberofrooms,numberofwings,thenumberoffloors,numberoflifts, Numberofmeetingroom,numberofwarehouses, Numberofrestaurants,numberofkitchens,/*Supplementnumber,*/Numberofparking,numberofstreet,Reception,Typeoftoilets,diraction,Features,space,AgeOfProperty)
  values(:itid,:itTypeOfOffer,:itnumberofrooms,:itnumberofwings,:itthenumberoffloors,:itnumberoflifts,:itNumberofmeetingroom,:itnumberofwarehouses,:itNumberofrestaurants,:itnumberofkitchens,/*:itSupplementnumber,*/:itNumberofparking,:itnumberofstreet,:itReception,:itTypeoftoilets,:itdiraction,:itFeatures,:itspace,:itAgeOfProperty
)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array(
        'itid'                       => null,
        'itTypeOfOffer'              => $taype_of_offer_var,
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
    $alert_insert_hotal_by_successfully = '  تمت إضافه بنجاح';}
// 'itSupplementnumber'         => $Supplementnumber_var,
// ***********************************  sql_add_hotel  *****************************  end

}
// ***********************************  form_add_hotel  ******************************  end


// ***********************************  form_add_villa *****************************  start
if (isset($_POST['submit_form_add_villa'])) {
//************************************* form_TypeOfOffer  *********************************
    $count_villa =0;
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form_Numberoftoilets  *********************************

    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form_numberofwings   *********************************

    if (empty($_POST["form_numberofwings"])) {
        $numberofwings_var_Err = "الرجاء ادخال عددالأجنحه .";
        $_POST["form_numberofwings"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofwings')) {

        $numberofwings_var = test_input(filter_var($_POST["form_numberofwings"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

    //*************************************   form_Numberoflounges    *********************************

    if (empty($_POST["form_Numberoflounges"])) {
        $Numberoflounges_var_Err = "الرجاء ادخال عدد الصالات .";
        $_POST["form_Numberoflounges"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberoflounges')) {

        $Numberoflounges_var = test_input(filter_var($_POST["form_Numberoflounges"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

    //**************************    form_Numberofkitchen    *********************************

    if (empty($_POST["form_Numberofkitchen"])) {
        $Numberofkitchen_var_Err = "الرجاء ادخال عدد المطابخ .";
        $_POST["form_Numberofkitchen"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofkitchen')) {

        $Numberofkitchen_var = test_input(filter_var($_POST["form_Numberofkitchen"], FILTER_SANITIZE_STRING));
       $count_villa =+1;}}

//************************************* form_Numberofbedrooms   *********************************
    if (empty($_POST["form_Numberofbedrooms"])) {
        $Numberofbedrooms_var_Err = "الرجاء ادخال عدد غرف النوم  .";
        $_POST["form_Numberofbedrooms"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofbedrooms')) {

        $Numberofbedrooms_var = test_input(filter_var($_POST["form_Numberofbedrooms"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//************************************* form_BoardNumber  *********************************

    if (empty($_POST["form_BoardNumber"])) {
        $BoardNumber_var_Err = "الرجاء ادخال عدد المجلس .";
        $_POST["form_BoardNumber"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_BoardNumber')) {

        $BoardNumber_var = test_input(filter_var($_POST["form_BoardNumber"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//************************************* form_Numberofclippers  *********************************

    if (empty($_POST["form_Numberofclippers"])) {
        $Numberofclippers_var_Err = "الرجاء ادخال عدد المقلط .";
        $_POST["form_Numberofclippers"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofclippers')) {

        $Numberofclippers_var = test_input(filter_var($_POST["form_Numberofclippers"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//************************************* form_Numberofwarehouse     *********************************
    if (empty($_POST["form_Numberofwarehouse"])) {
        $Numberofwarehouse_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_Numberofwarehouse"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberofwarehouse')) {

        $Numberofwarehouse_var = test_input(filter_var($_POST["form_Numberofwarehouse"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form_numberofstreet  *********************************


    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form_Typeoftoilets   *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form_typeofkitchen  *********************************

    if (empty($_POST["form_typeofkitchen"])) {
        $typeofkitchen_var_Err = "الرجاء ادخال نوع المطبخ .";
        $_POST["form_typeofkitchen"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_typeofkitchen')) {

        $typeofkitchen_var = test_input(filter_var($_POST["form_typeofkitchen"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form_diraction   *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}


//******************************************* check form_features ***********************************************
    if (empty($_POST["form_features"])) {
        $features_var_Err = "الرجاء ادخال عدد المميزات إضافيه.";
        $_POST["form_features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_features')) {

        $features_var = test_input(filter_var($_POST["form_features"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}
    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة المساحه";
        $_POST["form_space"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}
    //************************************* form_numberofwarehouses  *********************************

    if (empty($_POST["form_numberofwarehouses"])) {
        $numberofwarehouses_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_numberofwarehouses"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofwarehouses')) {

        $numberofwarehouses_var = test_input(filter_var($_POST["form_numberofwarehouses"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}


//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
        $count_villa =+1;}}

//*************************************  form add villa          ********************************* end

//*************************************  sql add villa **************** ********************************* start
if ( $count_villa ===16){
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
}
// ***********************************  form_add_villa *****************************  end


// ***********************************  form_add_shop *****************************  start
if(isset($_POST['submit_form_add_shop'])){
    $count_shop =0;
    //*************************************  form_TypeOfOffer   *********************************
    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    else
    {if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}


//************************************* form_Numberofparking       *********************************

    if (empty($_POST["form_Numberofparking"])) {
        $Numberofparking_var_Err = "الرجاء ادخال عدد المواقف .";
        $_POST["form_Numberofparking"] = '';
    }
    else {
        if (filter_has_var(INPUT_POST, 'form_Numberofparking')) {

            $Numberofparking_var = test_input(filter_var($_POST["form_Numberofparking"], FILTER_SANITIZE_STRING));
            $count_shop+=1;}
    }
//************************************* form_Numberoftoilets  *********************************
    if (empty($_POST["form_Numberoftoilets"])) {
        $Numberoftoilets_var_Err = "الرجاء ادخال عدد دورات المياه .";
        $_POST["form_Numberoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Numberoftoilets')) {

        $Numberoftoilets_var = test_input(filter_var($_POST["form_Numberoftoilets"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}
//************************************* form_numberofstreet *********************************
    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}
//*************************************  form_numberofroles *********************************
    if (empty($_POST["form_numberofroles"])) {
        $numberofroles_var_Err = "الرجاء ادخال عدد الأدوار .";
        $_POST["form_numberofroles"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofroles')) {

        $numberofroles_var = test_input(filter_var($_POST["form_numberofroles"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}
//************************************* form_Warehousenumber  *********************************
    if (empty($_POST["form_Warehousenumber"])) {
        $Warehousenumber_var_Err = "الرجاء ادخال عدد المستودعات .";
        $_POST["form_Warehousenumber"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Warehousenumber')) {

        $Warehousenumber_var = test_input(filter_var($_POST["form_Warehousenumber"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}

//************************************* form_Typeoftoilets *********************************

    if (empty($_POST["form_Typeoftoilets"])) {
        $Typeoftoilets_var_Err = "الرجاء ادخال نوع دورات المياه .";
        $_POST["form_Typeoftoilets"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Typeoftoilets')) {

        $Typeoftoilets_var = test_input(filter_var($_POST["form_Typeoftoilets"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}

//*************************************  form_diraction  *********************************
    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}

//************************************* form_Features *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}

//*************************************  form_space *********************************

    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء ادخال المساحه.";
        $_POST["form_space"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}

//*************************************  form_AgeOfProperty   *********************************

    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار .";
        $_POST["form_AgeOfProperty"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
        $count_shop =+1; }}


//*************************************  form_numberoflifts     *********************************

    if (empty($_POST["form_numberoflifts"])) {
        $numberoflifts_var_Err = "الرجاء ادخال عدد المصاعد .";
        $_POST["form_numberoflifts"] = '';
    }
    else{ if (filter_has_var(INPUT_POST, 'form_numberoflifts')) {

        $numberoflifts_var = test_input(filter_var($_POST["form_numberoflifts"], FILTER_SANITIZE_STRING));
        $count_shop+=1;}
    }

//*************************************  form add shop ********************************* end

//*************************************  sql add shop ********************************* start
if($count_shop ===10){
    $sql = 'insert into shop  (id,TypeOfOffer,Numberoftoilets,numberofstreet,numberofroles,Warehousenumber,Typeoftoilets,diraction,Features,space,AgeOfProperty,numberoflifts,Numberofparking)
  values(:itid,:itTypeOfOffer,:itNumberoftoilet,:itnumberofstreet,:itnumberofroles,:itWarehousenumber,:itTypeoftoilets,:itdiraction,:itFeatures,:itspace,:itAgeOfProperty
,:itnumberoflifts, :itNumberofparking)';

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
        'itAgeOfProperty'=> $AgeOfProperty_var,
        'itnumberoflifts'=> $numberoflifts_var,
        'itNumberofparking' => $Numberofparking_var
    ));
    $alert_insert_shop_by_successfully =" تمت الإضافه بنجاح ";
//*************************************  sql add shop ********************************* end

}
}
// ***********************************  form_add_shop *****************************  end



//*************************************  form add land ********************************* start
if(isset($_POST['submit_form_add_land'])){
    $count_land =0;
    //************************************* form_TypeOfOffer   *********************************

    if (empty($_POST["form_TypeOfOffer"])) {
        $TypeOfOffer_var_Err = "الرجاء ادخال نوع العرض .";
        $_POST["form_TypeOfOffer"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_TypeOfOffer')) {

        $TypeOfOffer_var = test_input(filter_var($_POST["form_TypeOfOffer"], FILTER_SANITIZE_STRING));
        $count_land =+1;}}

//************************************* form_numberofstreet  *********************************

    if (empty($_POST["form_numberofstreet"])) {
        $numberofstreet_var_Err = "الرجاء ادخال عدد الشوارع .";
        $_POST["form_numberofstreet"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_numberofstreet')) {

        $numberofstreet_var = test_input(filter_var($_POST["form_numberofstreet"], FILTER_SANITIZE_STRING));
        $count_land =+1;}}

//************************************* form_diraction  *********************************

    if (empty($_POST["form_diraction"])) {
        $diraction_var_Err = "الرجاء ادخال الإتجاه.";
        $_POST["form_diraction"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_diraction')) {

        $diraction_var = test_input(filter_var($_POST["form_diraction"], FILTER_SANITIZE_STRING));
        $count_land =+1;}}

//************************************* form_Typeofinstrument *********************************

    if (empty($_POST["form_Typeofinstrument"])) {
        $Typeofinstrument_var_Err = "الرجاء ادخال نوع الصك.";
        $_POST["form_Typeofinstrument"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Typeofinstrument')) {

        $Typeofinstrument_var = test_input(filter_var($_POST["form_Typeofinstrument"], FILTER_SANITIZE_STRING));
        $count_land =+1; }}


    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة المساحه";
        $_POST["form_space"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_space')) {

        $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
        $count_land =+1; }}
//********************************** check form_AgeOfProperty ******************************************
    if (empty($_POST["form_AgeOfProperty"])) {
        $AgeOfProperty_var_Err = "الرجاء ادخال عمر العقار.";
        $_POST["form_AgeOfProperty"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_AgeOfProperty')) {

        $AgeOfProperty_var = test_input(filter_var($_POST["form_AgeOfProperty"], FILTER_SANITIZE_STRING));
        $count_land =+1; }}

//************************************* form_Features  *********************************

    if (empty($_POST["form_Features"])) {
        $Features_var_Err = "الرجاء ادخال المميزات الإضافيه  .";
        $_POST["form_Features"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_Features')) {

        $Features_var = test_input(filter_var($_POST["form_Features"], FILTER_SANITIZE_STRING));
        $count_land =+1;}}
    // ******************************** check form_priceofonemeter ******************************************
    if (empty($_POST["form_priceofonemeter"])) {
        $priceofonemeter_var_Err = "الرجاء ادخال سعر المتر.";
        $_POST["form_priceofonemeter"] = '';
    }
    else{if (filter_has_var(INPUT_POST, 'form_priceofonemeter')) {

        $priceofonemeter_var = test_input(filter_var($_POST["form_priceofonemeter"], FILTER_SANITIZE_STRING));
        $count_land =+1; }}


    //*************************************** sql add land **************************************   start
   if ( $count_land ===8) {
       $sql = 'insert into land (id,TypeOfOffer, numberofstreet,diraction,Typeofinstrument , space,priceofonemeter, AgeOfProperty )
                    values(:itid,:tiTypeOfOffer, :itnumberofstreet,
                           :itdiraction, :itTypeofinstrument , :itspace,
                           :itpriceofonemeter, :itAgeOfProperty)';
       if (isset($pdo)) {
           $stmt = $pdo->prepare($sql);

       }
       $stmt->execute($r = array(
           'itid' => null,
           'tiTypeOfOffer' => $TypeOfOffer_var,
           'itnumberofstreet' => $numberofstreet_var,
           'itdiraction' => $diraction_var,
           'itTypeofinstrument' => $Typeofinstrument_var,
           'itspace' => $space_var,
           'itpriceofonemeter' => $priceofonemeter_var,
           'itAgeOfProperty' => $AgeOfProperty_var

       ));
       $alert_insert_land_by_successfully="تمت الإضافه بنجاح. ";
   }
    //****************************************** sql add land  ******************************* end
}
//*************************************  form add land ********************************* end


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


    // ======================  start submit_studio  ====================== DONE LAST_UPDATE
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


}
    // ======================   end submit_studio   ======================


    // ======================  start submit_apartment  ====================== DONE
    if (isset($_POST['submit_apartment'])) {
    $count_apartment =0;


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
    // ======================   end submit_apartment   ======================

//    المصفوفه غرض البيع
    $arra_list_State = array( "للبيع", "الإيجار", "إيجار منتهي بالتمليك");
//    المصفوفه عدد الغرفة
    $length_State = count($arra_list_State);

//    المصفوفه عدد الغرف
    $arra_list_numberRoom = array( "1","2","3","4","5","6","7","8", "9","10" );
    //    عدد للمصفوفه عدد الغرفة
    $length_numberRoom = count($arra_list_numberRoom);


//المصفوفه لعد الشوارع
$arra_list_numberStreets = array( "1","2","3","4" );
//    عدد للمصفوفه الشوارع
$length_numberStreets = count($arra_list_numberStreets);


//    المصفوفه للواجهه
$arra_list_direction = array( "شمالي", "شرقي", "غربي","جنوبي","شرقي"," شمالي شرقي","شمالي غربي","جنوبي شرقي"," جنوبي غربي","شرقي غربي ","شمالي جنوبي ");
//   عد المصفوفه للواجهه
$length_direction = count($arra_list_direction);


//    المصفوفه للواجهه
$arra_list_Type_of_toilets = array( "عربي", "إفرنجي", "عربي و افرنجي");
//   عد المصفوفه للواجهه
$length_Type_of_toilets = count($arra_list_Type_of_toilets);


//    المصفوفه نعم او لا
$arra_list_yes_or_no = array( "نعم", "لا");
//   عد المصفوفه نعم او لا
$length_yes_or_no = count($arra_list_yes_or_no);


//    المصفوفه نوع المطبخ
$arra_list_Type_kitchen = array( "خارجي ", "داخلي ");
//   عد المصفوفه نوع المطبخ
$length_Type_kitchen = count($arra_list_Type_kitchen);

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