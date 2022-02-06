<?php
include "connection.php";
include  "fun.php";
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
            $user = $pdo->prepare('select  usernmae  from  user  where usernmae = :usernmae ');
            $user->execute(['usernmae' => $username_var]);
            $user->fetch();
            $count = $user->rowcount();
            if ($count > 0) {
                $message_user_exists = "اسم المستخدم مستخدم من قبل الرجاء ادخال اسم مستخدم آخر.";
            } else {
                $sql = "insert into user
                            (id,name,usernmae,password,phone_number,email)
                   values(:itid,:itname,:itusernmae,:itpassword,:phone_number,:itemail)";

                if (isset($pdo)) {
                    $stmt = $pdo->prepare($sql);
                }

                $stmt->execute($r = array(
                    'itid' => null,
                    'itname' => $name_var,
                    'itusernmae' => $username_var,
                    'itpassword' => $password_var,
                    'phone_number' => $phone_number_var,
                    'itemail' => $email_from_var,
                ));
                header('location: index.php');
                exit();
            }
        }
    }catch (Exception $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
//// ************************************ sql add new user ********************************************   end

}
?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>التسجيل</title>

</head>
<body>


<div class="container-fluid p-5">

    <?php
    if (isset($alert_successfully_inserted_user)){
        echo "<div  class='m-2  alert alert-warning text-center mx-auto h5'>
       .$alert_successfully_inserted_user.</div>";}?>
    <div class="mx-auto p-3 m-5  bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" >
            <h4 class="mb-3 py-2 text-center fs-3 bg-primary text-white rounded-3">تسجيل</h4>

        <form class="row  justify-content-center row-cols-md-4  row-cols-sm-1  gap-md-0 method="post" action="register.php">

            <div class="col">
                <label for="name_form" class="form-label mb-0">الاسم</label>
                <input type="text" class="form-control" id="name_form" name="name_form">
                <label for="username_form" class="alert- alert-danger shadow rounded-3">
                    <?php if (isset($name_var_Err)) {
                        echo $name_var_Err;
                    } ?>
                </label>
            </div>

            <div class="col">
                <label for="username_form" class="form-label m-0 p-0">اسم المستخدم</label>
                <input type="text" class="form-control" id="username_form" name="username_form">
                <label for="username_form" class="px-2 mt-1 fw-bold h6 text-danger"><?php if (isset($MESSAGE_USER_EXISTS)) {
                        echo $MESSAGE_USER_EXISTS;
                    } ?>
                </label>
            </div>

            <div class="col">
                <label for="email_from" class="form-label m-0 p-0">الايميل</label>
                <input type="email" class="form-control" id="email_from" name="email_from">
                <label for="username_form" class="form-label"><?php if (isset($email_from_var_Err)) {
                        echo $email_from_var_Err;
                    } ?>
                </label>
            </div>

            <div class="col">
                <label for="phone_number_form" class="form-label m-0 p-0">رقم الجوال</label>
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?>
                </label>
            </div>

            <div class="col">
                <label for="password_form" class="form-label m-0 p-0">كلمة المرور</label>
                <input type="password" class="form-control" id="password_form" name="password_form">
                <label for="username_form" class="form-label"><?php if (isset($password_var_Err)) {
                        echo $password_var_Err;
                    } ?>
                </label>
            </div>

            <div class="col">
                <label for="password_con_form" class="form-label mb-0">تاكيد كلمة المرور</label>
                <input type="password" class="form-control" id="password_con_form" name="password_con_form">
                <label for="username_form" class="form-label"><?php if (isset($password_con_var_Err)) {
                        echo $password_con_var_Err;
                    } ?>
                </label>
            </div>
            <div class="col mx-auto">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">تسجيل</button>
            </div>
        </form>

        <hr class="w-auto mx-auto">

        <div class="col-md-9 mx-auto mb-3 text-center">
            <a class="link-primary text-decoration-none" href="login.php">تسجيل دخول</a>
        </div>

    </div>

</div>

</body>
</html>
<?php require  "footer.php";  //}else{
// header("location:login.p