<?php


include "connection.php";
include  "fun.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include  "header.php"; ?>

<div class="container-fluid my-5">

    <?php
    if (isset($alert_successfully_inserted_user)){
        echo "<div  class='m-2  alert alert-warning text-center mx-auto h5'>
       .$alert_successfully_inserted_user.</div>";}?>

    <div class="mx-auto p-3 m-5  bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 350px;">

            <h4 class="mb-3 py-2 text-center fs-3 bg-primary text-white rounded-3">تسجيل</h4>

        <form class="row  row-cols-1 g-1 gap-0" method="post" action="register.php">

            <div class="col m-0 p-0">
                <label for="name_form" class="form-label mb-0">الاسم</label>
                <input type="text" class="form-control" id="name_form" name="name_form">
                <label for="username_form"
                       class="alert- alert-danger shadow  rounded-3"><?php if (isset($name_var_Err)) {
                        echo $name_var_Err;
                    } ?> </label>
            </div>

            <div class="col m-0 p-0 ">
                <label for="username_form" class="form-label m-0 p-0">اسم المستخدم</label>
                <input type="text" class="form-control" id="username_form" name="username_form">
                <label for="username_form"
                       class="px-2 mt-1 fw-bold h6 text-danger"><?php if (isset($MESSAGE_USER_EXISTS)) {
                        echo $MESSAGE_USER_EXISTS;
                    } ?> </label>
            </div>

            <div class="col m-0 p-0">
                <label for="email_from" class="form-label m-0 p-0">الايميل</label>
                <input type="email" class="form-control" id="email_from" name="email_from">
                <label for="username_form" class="form-label"><?php if (isset($email_from_var_Err)) {
                        echo $email_from_var_Err;
                    } ?> </label>
            </div>

            <div class="col m-0 p-0">
                <label for="phone_number_form" class="form-label m-0 p-0">رقم الجوال</label>
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?> </label>
            </div>

            <div class="col  m-0 p-0">
                <label for="password_form" class="form-label m-0 p-0">كلمة المرور</label>
                <input type="password" class="form-control" id="password_form" name="password_form">
                <label for="username_form" class="form-label"><?php if (isset($password_var_Err)) {
                        echo $password_var_Err;
                    } ?> </label>
            </div>

            <div class="col  m-0 p-0">
                <label for="password_con_form" class="form-label mb-0">تاكيد كلمة المرور</label>
                <input type="password" class="form-control" id="password_con_form" name="password_con_form">
                <label for="username_form" class="form-label"><?php if (isset($password_con_var_Err)) {
                        echo $password_con_var_Err;
                    } ?> </label>
            </div>

            <div class="col mx-auto">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">تسجيل
                </button>
            </div>
        </form>
        <hr class="w-auto mx-auto">
        <div class="col-md-6-md-4 mx-auto mb-3 text-center">
            <a class="link-primary text-decoration-none" href="login.php">تسجيل دخول</a>
        </div>

    </div>

</div>

</body>
</html>
<?php require  "footer.php";  //}else{
// header("location:login.php");
//}
?>