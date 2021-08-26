<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


include "conection.php";


//  **********************************     add new user  **********************************
if (isset($_POST['submit_form_user'])) {
    // *********************  defind varible    $name_var   *******************************************
    if (empty($_POST["name_form"])) {
        $name_var_err = "الرجاء كتابة الاسم";
        $_POST["name_form"] = '';
    }
    if (filter_has_var(input_post, 'name_form')) {

        $name_var = test_input(filter_var($_POST['name_for'], filter_sanitize_string));
    }

    // ********************* defind varible    username_form   *******************************************
    if (empty($_POST["username_form"])) {
        $username_var_err = "الرجاء كتابة أسم المستخدم";
        $_POST["username_form"] = '';
    }
    if (filter_has_var(input_post, 'username_form')) {
        $username_var = test_input(filter_var($_POST["username_form"], filter_sanitize_string));
    }

    //  ********************* defind varible    password_form   *******************************************
    if (empty($_POST["password_form"])) {
        $password_var_err = "الرجاء كتابة كلمه المرور ";
        $_POST["password_form"] = '';
    }
    if (filter_has_var(input_post, 'password_form')) {
        $password_var = test_input(filter_var($_POST["password_form"], filter_sanitize_string));
    }

    // ********************* defind varible    password_con_form   *******************************************
    if (empty($_POST["password_con_form"])) {
        $password_con_var_err = "الرجاء كتابة تأكيد كلمه المرور ";
        $_POST["password_con_form"] = '';
    }
    if (filter_has_var(input_post, 'password_con_form')) {
        $password_con_var = test_input(filter_var($_POST["password_con_form"], filter_sanitize_string));
    }

    // ********************* defind varible    email_from   *******************************************
    if (empty($_POST["email_from"])) {
        $email_from_var_err = "الرجاء كتابة الإيميل ";
        $_POST["email_from"] = '';
    }
    if (filter_has_var(input_post, 'email_from')) {
        $email_from_var = test_input(filter_var($_POST["email_from"], filter_sanitize_email));
    }

    // ********************* defind varible    phone_number_form   *******************************************
    if (empty($_POST["phone_number_form"])) {
        $phone_number_var_err = "الرجاء كتابة رقم الجوال ";
        $_POST["phone_number_form"] = '';
    }
    if (filter_has_var(input_post, 'phone_number_form')) {
        $phone_number_var = test_input(filter_var($_POST["phone_number_form"], filter_sanitize_number_int));
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

}

//// ************************************ sql add new user ********************************************   end
//
//
//
////  **********************************     add new user  **********************************  end


if (isset($_POST['submit_form_user'])) {

}


if (isset($_POST['submit_form_add_building'])) {
//    echo "acds";

    //************************************** check  form_space *******************************************
    if (empty($_POST["form_space"])) {
        $space_var_Err = "الرجاء كتابة السمساحع";
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


//************************************** check form_taype_of_offer ***************************************

    if (empty($_POST["form_taype_of_offer"])) {
        $taype_of_offer_var_Err = "الرجاء ادخال نوع عرض العقار.";
        $_POST["form_taype_of_offer"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_taype_of_offer')) {

        $taype_of_offer_var = test_input(filter_var($_POST["form_taype_of_offer"], FILTER_SANITIZE_STRING));
    }


//******************************** check form_num_apartment **************************************************
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

    //******************************************************* check form_num_left **************************
    if (empty($_POST["form_num_left"])) {
        $num_left_var_Err = "الرجاء ادخال عدد المصاعد.";
        $_POST["form_num_left"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_left')) {

        $num_left_var = test_input(filter_var($_POST["form_num_left"], FILTER_SANITIZE_STRING));
    }

    //************************************************* check form_num_parking ********************************
    if (empty($_POST["form_num_parking"])) {
        $num_parking_var_Err = "الرجاء اختيار عدد المواقف.";
        $_POST["form_num_parking"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_num_parking')) {

        $num_parking_var = test_input(filter_var($_POST["form_num_parking"], FILTER_SANITIZE_STRING));
    }
    //**************************************** check form_taype_of_offer*****************************************
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


    $sql = 'insert into building  (id,Numberofapartments,Numberoftrees,Features,Apartmenttype,space,AgeOfProperty,type_of_offer)
                   values(:itid,:itNumberofapartments,:itNumberoftrees,:itFeatures,:itApartmenttype,:itspace,:itAgeOfProperty,:ittype_of_offer)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array(
        'itid' => null,
        'itNumberofapartments' => $num_apartment_var,
        'itNumberoftrees' => $num_Street_var,
        'itFeatures' => $features_var,
        'itApartmenttype' => $num_apartment_var,
        'itspace' => $space_var,
        'itAgeOfProperty' => $AgeOfProperty_var,
        'ittype_of_offer' => $taype_of_offer_var));

}


//
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
?>