<?php

function test_input($data) {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


include "conection.php";





//  **********************************     add new user  **********************************
            if (isset($_POST['submit_form_user']))
            {
                // *********************  defind varible    $name_var   *******************************************
                if (empty($_POST["name_form"]))
                {
                    $name_var_Err = "الرجاء كتابة الاسم";
                    $_POST["name_form"]='';
                }
                if(filter_has_var(INPUT_POST,'name_form'))
                {

                    $name_var = test_input(filter_var($_POST["name_form"],FILTER_SANITIZE_STRING));
                }

                // ********************* defind varible    username_form   *******************************************
                if (empty($_POST["username_form"]))
                {
                    $username_var_Err = "الرجاء كتابة أسم المستخدم";
                    $_POST["username_form"]='';
                }
                if(filter_has_var(INPUT_POST,'username_form'))
                {
                    $username_var = test_input(filter_var($_POST["username_form"],FILTER_SANITIZE_STRING));
                }

                //  ********************* defind varible    password_form   *******************************************
                if (empty($_POST["password_form"]))
                {
                    $password_var_Err = "الرجاء كتابة كلمه المرور ";
                    $_POST["password_form"]='';
                }
                if(filter_has_var(INPUT_POST,'password_form'))
                {
                    $password_var = test_input(filter_var($_POST["password_form"],FILTER_SANITIZE_STRING));
                }

                // ********************* defind varible    password_con_form   *******************************************
                if (empty($_POST["password_con_form"]))
                {
                    $password_con_var_Err = "الرجاء كتابة تأكيد كلمه المرور ";
                    $_POST["password_con_form"]='';
                }
                if(filter_has_var(INPUT_POST,'password_con_form'))
                {
                    $password_con_var = test_input(filter_var($_POST["password_con_form"],FILTER_SANITIZE_STRING));
                }

                // ********************* defind varible    email_from   *******************************************
                if (empty($_POST["email_from"]))
                {
                    $email_from_var_Err = "الرجاء كتابة الإيميل ";
                    $_POST["email_from"]='';
                }
                if(filter_has_var(INPUT_POST,'email_from'))
                {
                    $email_from_var = test_input(filter_var($_POST["email_from"],FILTER_SANITIZE_EMAIL));
                }

                // ********************* defind varible    phone_number_form   *******************************************
                if (empty($_POST["phone_number_form"]))
                {
                    $phone_number_var_Err = "الرجاء كتابة رقم الجوال ";
                    $_POST["phone_number_form"]='';
                }
                if(filter_has_var(INPUT_POST,'phone_number_form'))
                {
                    $phone_number_var = test_input(filter_var($_POST["phone_number_form"],FILTER_SANITIZE_NUMBER_INT));
                }



// ************************************ sql add new user ********************************************   start

//Check that username is not already in use, if it is return an error.
    try
    {
        if (isset($pdo))
        {
            $user = $pdo->prepare('SELECT usernmae  from  user  WHERE usernmae = :usernmae ');
            $user->execute(['usernmae' => $username_var]);
            $user->fetch();
           $count = $user->rowCount();
            if ( $count > 0)
            {
               $MESSAGE_USER_EXISTS="اسم المستخدم مستخدم من قبل الرجاء ادخال اسم مستخدم آخر.";
            }
            else
            {
                $sql = "INSERT INTO user
                            (id,name,usernmae,password,phonenumber,email)
                   VALUES(:itID,:itname,:itusernmae,:itpassword,:itphonenumber,:itemail)"   ;

                if (isset($pdo))
                {
                    $stmt = $pdo->prepare($sql);
                }

                $stmt->execute($R=array(

                    'itID'           => null,
                    'itname'         => $name_var,
                    'itusernmae'     => $username_var,
                    'itpassword'     => $password_var,
                    'itphonenumber'  => $phone_number_var,
                    'itemail'        => $email_from_var,
                ));
            }


        }
    }catch (PDOException $exception)
    {

     }

            }

//// ************************************ sql add new user ********************************************   end
//
//
//
////  **********************************     add new user  **********************************  end








































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
//$file_name = $_FILES['image']['name'];
//$file_size = $_FILES['image']['size'];
//$file_tmp = $_FILES['image']['tmp_name'];
//$file_type = $_FILES['image']['type'];
//$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
//
//$expensions= array("jpeg","jpg","png");
//
//if(in_array($file_ext,$expensions)=== false){
//    $errors[]="صيغة الصورة غير مسموح به ، يرجى اختيار ملف JPEG أو Jpeg أو PNG.";
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
//// vilter name_F *-*-*-*-*-*-*-*--*-*-*-*-*-*-*--*-*
//if (empty($_POST["name_F"]))
//{ $DescriptionErr="الرجاء كتابة المدينة"; $_POST["name_F"]=''; }
//if(filter_has_var(INPUT_POST,'name_F'))
//{ $name=test_input(filter_var($_POST["name_F"],FILTER_SANITIZE_STRING)); }
//
////********************************************
//
//
//
//
//
//                                        //*******************************************
//
//                                        $arra_list_State=array(
//                                            "مكة المكرمة", "المدينة المنورة", "الرياض",
//                                            "الشرقية", "القصيم", "حائل",
//                                            "تبوك", "جازان", "الجوف",
//                                            "نجران", "عسير", "الحدود الشمالية",
//                                        );
//
//                                        $length_State=count($arra_list_State);
//
//                                        //********************************************
//
//                                        $sql = "SELECT *from countsusers WHERE ip_address=:ip_address";
//                                        $stmt = $conn->prepare($sql);
//                                        $stmt->bindValue("ip_address",$visitor_ip);
//                                        $stmt->execute();
//                                        $total_visitor=count($stmt->fetchAll(PDO::FETCH_ASSOC));
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
//                                        if(filter_has_var(INPUT_POST,"search_Status"))
//                                        {
//                                            $Status_1=test_input(filter_var($_POST["search_Status"],FILTER_SANITIZE_STRING));
//                                            $is_display=+1;
//                                        }
?>