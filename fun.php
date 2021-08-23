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
if (isset($_post['submit_form_user'])) {
    // *********************  defind varible    $name_var   *******************************************
    if (empty($_post["name_form"])) {
        $name_var_err = "الرجاء كتابة الاسم";
        $_post["name_form"] = '';
    }
    if (filter_has_var(input_post, 'name_form')) {

        $name_var = test_input(filter_var($_post["name_form"], filter_sanitize_string));
    }

    // ********************* defind varible    username_form   *******************************************
    if (empty($_post["username_form"])) {
        $username_var_err = "الرجاء كتابة أسم المستخدم";
        $_post["username_form"] = '';
    }
    if (filter_has_var(input_post, 'username_form')) {
        $username_var = test_input(filter_var($_post["username_form"], filter_sanitize_string));
    }

    //  ********************* defind varible    password_form   *******************************************
    if (empty($_post["password_form"])) {
        $password_var_err = "الرجاء كتابة كلمه المرور ";
        $_post["password_form"] = '';
    }
    if (filter_has_var(input_post, 'password_form')) {
        $password_var = test_input(filter_var($_post["password_form"], filter_sanitize_string));
    }

    // ********************* defind varible    password_con_form   *******************************************
    if (empty($_post["password_con_form"])) {
        $password_con_var_err = "الرجاء كتابة تأكيد كلمه المرور ";
        $_post["password_con_form"] = '';
    }
    if (filter_has_var(input_post, 'password_con_form')) {
        $password_con_var = test_input(filter_var($_post["password_con_form"], filter_sanitize_string));
    }

    // ********************* defind varible    email_from   *******************************************
    if (empty($_post["email_from"])) {
        $email_from_var_err = "الرجاء كتابة الإيميل ";
        $_post["email_from"] = '';
    }
    if (filter_has_var(input_post, 'email_from')) {
        $email_from_var = test_input(filter_var($_post["email_from"], filter_sanitize_email));
    }

    // ********************* defind varible    phone_number_form   *******************************************
    if (empty($_post["phone_number_form"])) {
        $phone_number_var_err = "الرجاء كتابة رقم الجوال ";
        $_post["phone_number_form"] = '';
    }
    if (filter_has_var(input_post, 'phone_number_form')) {
        $phone_number_var = test_input(filter_var($_post["phone_number_form"], filter_sanitize_number_int));
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


if (isset($_post['submit_form_user'])){

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