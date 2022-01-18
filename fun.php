<?php
include "connection.php";
    if (! isset($_SESSION)) {
    session_start();
    }
//

    function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
                exit();
            }


        }
    } catch (pdoexception $exception) {

    }
//// ************************************ sql add new user ********************************************   end

}

// ****************************************     add new user  ******************************************** end





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
        //  ======================  defined variable     number_rooms   ====================== done
        if (empty($_POST["number_rooms"])){
            $var_number_rooms_err = "حقل إجباري";
            $_POST["number_rooms"] = '';
        }else{
            //  ======================  filter variable    number_rooms     ====================== done
            if (filter_has_var(INPUT_POST, 'number_rooms')){
                $var_number_rooms = test_input(filter_var($_POST['number_rooms'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment  += 1;
            }}
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
        $count_apartment = 0;
        /*************************************  form_space *********************************/

        if (empty($_POST["form_space"])) {
            $space_var_Err = "الرجاء ادخال المساحه.";
            $_POST["form_space"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'form_space')) {

                $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
                $count_apartment += 1;
            }
        }

//******************************************* check form_price ***********************************************

        if (empty($_POST["form_price"])) {
            $price_var_Err = "الرجاء كتابه السعر .";
            $_POST["form_price"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'form_price')) {

                $price_var = test_input(filter_var($_POST["form_price"], FILTER_SANITIZE_STRING));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     property_age   ====================== done
        if (empty($_POST["property_age"])) {
            $var_property_age_err = "حقل إجباري";
            $_POST["property_age"] = '';
        } else {
            //  ======================  filter variable      property_age   ====================== done
            if (filter_has_var(INPUT_POST, 'property_age')) {
                $var_apartment__property_age = test_input(filter_var($_POST['property_age'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }
        //  ======================  defined variable     sale_type   ====================== done
        if (empty($_POST["sale_type"])) {
            $var_sale_type_err = "حقل إجباري";
            $_POST["sale_type"] = '';
        } else {
            //  ======================  filter variable      sale_type   ====================== done
            if (filter_has_var(INPUT_POST, 'sale_type')) {
                $var_apartment_sale_type = test_input(filter_var($_POST['sale_type'], FILTER_SANITIZE_STRING));
                $count_apartment += 1;
            }
        }

        //  ======================  defined variable     number_rooms   ====================== done
        if (empty($_POST["number_rooms"])) {
            $var_number_rooms_err = "حقل إجباري";
            $_POST["number_rooms"] = '';
        } else {
            //  ======================  filter variable    number_rooms     ====================== done
            if (filter_has_var(INPUT_POST, 'number_rooms')) {
                $var_apartment_number_rooms = test_input(filter_var($_POST['number_rooms'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     number_halls   ====================== done
        if (empty($_POST["number_halls"])) {
            $var_number_halls_err = "حقل إجباري";
            $_POST["number_halls"] = '';
        } else {
            //  ======================  filter variable    number_halls     ====================== done
            if (filter_has_var(INPUT_POST, 'number_halls')) {
                $var_apartment_number_halls = test_input(filter_var($_POST['number_halls'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     number_Kitchens   ====================== done
        if (empty($_POST["number_Kitchens"])) {
            $var_number_Kitchens_err = "حقل إجباري";
            $_POST["number_Kitchens"] = '';
        } else {
            //  ======================  filter variable    number_Kitchens     ====================== done
            if (filter_has_var(INPUT_POST, 'number_Kitchens')) {
                $var_apartment_number_Kitchens = test_input(filter_var($_POST['number_Kitchens'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     type_Kitchen   ====================== done
        if (empty($_POST["type_Kitchen"])) {
            $var_type_Kitchen_err = "حقل إجباري";
            $_POST["type_Kitchen"] = '';
        } else {
            //  ======================  filter variable    type_Kitchen     ====================== done
            if (filter_has_var(INPUT_POST, 'type_Kitchen')) {
                $var_apartment_type_Kitchen = test_input(filter_var($_POST['type_Kitchen'], FILTER_SANITIZE_STRING));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     bed_room   ====================== done
        if (empty($_POST["bed_room"])) {
            $var_bed_room_err = "حقل إجباري";
            $_POST["bed_room"] = '';
        } else {
            //  ======================  filter variable    bed_room     ====================== done
            if (filter_has_var(INPUT_POST, 'bed_room')) {
                $var_apartment_bed_room = test_input(filter_var($_POST['bed_room'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     number_boards   ====================== done
        if (empty($_POST["number_boards"])) {
            $var_number_boards_err = "حقل إجباري";
            $_POST["number_boards"] = '';
        } else {
            //  ======================  filter variable      number_boards   ====================== done
            if (filter_has_var(INPUT_POST, 'number_boards')) {
                $var_apartment_number_boards = test_input(filter_var($_POST['number_boards'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     number_clippers   ====================== done
        if (empty($_POST["number_clippers"])) {
            $var_number_clippers_err = "حقل إجباري";
            $_POST["number_clippers"] = '';
        } else {
            //  ======================  filter variable    number_clippers     ====================== done
            if (filter_has_var(INPUT_POST, 'number_clippers')) {
                $var_apartment_number_clippers = test_input(filter_var($_POST['number_clippers'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     number_Warehouses   ====================== done
        if (empty($_POST["number_Warehouses"])) {
            $var_number_Warehouses_err = "حقل إجباري";
            $_POST["number_Warehouses"] = '';
        } else {
            //  ======================  filter variable    number_Warehouses     ====================== done
            if (filter_has_var(INPUT_POST, 'number_Warehouses')) {
                $var_apartment_number_Warehouses = test_input(filter_var($_POST['number_Warehouses'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     number_Bathrooms   ====================== done
        if (empty($_POST["number_Bathrooms"])) {
            $var_number_Bathrooms_err = "حقل إجباري";
            $_POST["number_Bathrooms"] = '';
        } else {
            //  ======================  filter variable    number_Warehouses     ====================== done
            if (filter_has_var(INPUT_POST, 'number_Bathrooms')) {
                $var_apartment_number_Bathrooms = test_input(filter_var($_POST['number_Bathrooms'], FILTER_SANITIZE_NUMBER_INT));
                $count_apartment += 1;
            }
        }


        //  ======================  defined variable     Describe   ====================== done
        if (empty($_POST["Describe"])) {
            $var_Describe_err = "حقل إجباري";
            $_POST["Describe"] = '';
        } else {
            //  ======================  filter variable    Describe     ====================== done
            if (filter_has_var(INPUT_POST, 'Describe')) {
                $var_apartment_Describe = test_input(filter_var($_POST['Describe'], FILTER_SANITIZE_STRING));
                $count_apartment += 1;
            }
        }

        echo $count_apartment;
    }

        //*************************************** sql add land **************************************   start
//        if ( $count_land ===15) {
//            $sql = insert into apartment(id, Typeofsale, NumberOFRooms, NumberOfLounges, NumbeOfKitchen, TypeOfKitchen, NumberOfBedrooms, BoardNumber, NumberOfClippers, NumberOfWarehouse, TypeOfOffer, NumberOfToilets, AgeOfProperty, space, diraction, price)
//            VALUES (:id, :Typeofsale, :NumberOFRooms, :NumberOfLounges, :NumbeOfKitchen, :TypeOfKitchen, :NumberOfBedrooms, :BoardNumber, :NumberOfClippers, :NumberOfWarehouse, :TypeOfOffer, :NumberOfToilets, :AgeOfProperty, :space, :diraction, :price)';
//            if (isset($pdo)) {
//                $stmt = $pdo->prepare($sql);
//
//            }
//            $stmt->execute($r = array(
//                'id' => null,
//                'Typeofsale',
//                 'NumberOFRooms',
//                'NumberOfLounges',
//                'NumbeOfKitchen',
//                'TypeOfKitchen',
//                'NumberOfBedrooms',
//                'BoardNumber',
//                'NumberOfClippers',
//                'NumberOfWarehouse',
//                'TypeOfOffer', 'NumberOfToilets', 'AgeOfProperty', 'space', 'diraction', price)
//
//
//            ));
//            $alert_insert_land_by_successfully="تمت الإضافه الأرض بنجاح. ";
//        }
//        //****************************************** sql add land  ******************************* end
//    }









//    المصفوفه غرض البيع
    $arra_list_State = array("للبيع", "الإيجار", "إيجار منتهي بالتمليك");
//    المصفوفه عدد الغرفة
    $length_State = count($arra_list_State);

//    المصفوفه عدد الغرف
    $arra_list_numberRoom = array("لايوجد","1","2","3","4","5");
    //    عدد للمصفوفه عدد الغرفة
    $length_numberRoom = count($arra_list_numberRoom);


//المصفوفه لعد الشوارع
$arra_list_numberStreets = array("0","1","2","3","4" );
//    عدد للمصفوفه الشوارع
$length_numberStreets = count($arra_list_numberStreets);


//    المصفوفه للواجهه
$arra_list_direction = array("شمالي", "شرقي", "غربي","جنوبي","شرقي"," شمالي شرقي","شمالي غربي","جنوبي شرقي"," جنوبي غربي","شرقي غربي ","شمالي جنوبي ");
//   عد المصفوفه للواجهه
$length_direction = count($arra_list_direction);


//    المصفوفه للواجهه
$arra_list_Type_of_toilets = array("عربي", "إفرنجي", "عربي و افرنجي");
//   عد المصفوفه للواجهه
$length_Type_of_toilets = count($arra_list_Type_of_toilets);


//    المصفوفه نعم او لا
$arra_list_yes_or_no = array( "نعم", "لا");
//   عد المصفوفه نعم او لا
$length_yes_or_no = count($arra_list_yes_or_no);


//    المصفوفه نوع المطبخ
$arra_list_Type_kitchen = array( 'نظام امريكي',"خارجي", "داخلي ");
//   عد المصفوفه نوع المطبخ
$length_Type_kitchen = count($arra_list_Type_kitchen);


//    المصفوفه نوع المطبخ
$list_pay_method = array( 'كل سنة','كل 6 أشهر',"كل 4 أشهر", "كل 3 أشهر",'كل شهر');
//  طرق الدفع
$length_pay_method = count($list_pay_method);



//    المصفوفه نوع المطبخ
$list_Category = array( 'عوائل',"عزاب", "عوائل او عزاب");
//  طرق الدفع
$length_Category = count($list_Category);

//    المصفوفه أنواع الصك
$arra_list_Typeofinstrument = array( "صك سكني", "صك زراعي","صك تجاري");
//   عد المصفوفه أنواع الصك
$length_Typeofinstrument = count($arra_list_Typeofinstrument);

// count numbers of apartment
function count_num_apartment(){
    include 'connection.php';
    if (isset($pdo)){
        $stmt = $pdo->query(" select id from apartment");
        $stmt->execute();
        $total_visitor=count($stmt->fetchAll(PDO::FETCH_ASSOC));
        return$total_visitor;
    }
}

// count numbers of  building
function count_num_building(){
    include 'connection.php';
    if (isset($pdo)){
        $stmt = $pdo->query(" select id from building");
        $stmt->execute();
        $total_visitor=count($stmt->fetchAll(PDO::FETCH_ASSOC));
        return$total_visitor;
    }
}

// count numbers of  office
function count_num_office(){
    include 'connection.php';
    if (isset($pdo)){
        $stmt = $pdo->query(" select id from `office`");
        $stmt->execute();
        $total_visitor=count($stmt->fetchAll(PDO::FETCH_ASSOC));
        return$total_visitor;
    }
}

// count numbers of  user
function count_num_user(){
    include 'connection.php';
    if (isset($pdo)){
        $stmt = $pdo->query(" select id from user");
        $stmt->execute();
        $total_visitor=count($stmt->fetchAll(PDO::FETCH_ASSOC));
        return$total_visitor;
    }
}

// count numbers of  property
function count_num_property(){
    include 'connection.php';
    if (isset($pdo)){
        $stmt = $pdo->query(" select count(id) from user");
        $stmt->execute();
        $total_visitor=count($stmt->fetchAll(PDO::FETCH_ASSOC));
        return$total_visitor;
    }
}


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
//select COUNT(*) from apartment;
//                                        $sql = "select *from countsusers where ip_address='ip_address";
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