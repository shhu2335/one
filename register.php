<?php


include "conection.php";
include "header.php";
include "fun.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="container p-5 ">

<?php
if (isset($alert_successfully_inserted_user)){
 echo "<div  class='m-2  alert alert-warning text-center mx-auto h5'  style='width: 450px;' >
       .$alert_successfully_inserted_user.</div>";}?>

    <div class="w-auto  bg-white border border-1  bg-gradient shadow  rounded-3">

            <h4 class="card-title mt-3 text-center text-secondary">تسجيل</h4>
        <form class="row p-3 text-secondary " method="post" action="register.php">
            <div class="col-md-4">
                <label for="name_form" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name_form" name="name_form">
                <label for="username_form"
                       class="alert- alert-danger shadow  rounded-3"><?php if (isset($name_var_Err)) {
                        echo $name_var_Err;
                    } ?> </label>
            </div>
            <div class="col-md-4">
                <label for="username_form" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="username_form" name="username_form">
                <label for="username_form"
                       class="px-2 mt-1 fw-bold h6 text-danger"><?php if (isset($MESSAGE_USER_EXISTS)) {
                        echo $MESSAGE_USER_EXISTS;
                    } ?> </label>
            </div>

            <div class="col-md-4">
                <label for="email_from" class="form-label">الايميل</label>
                <input type="email" class="form-control" id="email_from" name="email_from">
                <label for="username_form" class="form-label"><?php if (isset($email_from_var_Err)) {
                        echo $email_from_var_Err;
                    } ?> </label>
            </div>


            <div class="col-md-4">
                <label for="phone_number_form" class="form-label">رقم الجوال</label>
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?> </label>
            </div>

            <div class="col-md-4">
                <label for="password_form" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password_form" name="password_form">
                <label for="username_form" class="form-label"><?php if (isset($password_var_Err)) {
                        echo $password_var_Err;
                    } ?> </label>
            </div>

            <div class="col-md-4">
                <label for="password_con_form" class="form-label">تاكيد كلمة المرور</label>
                <input type="password" class="form-control" id="password_con_form" name="password_con_form">
                <label for="username_form" class="form-label"><?php if (isset($password_con_var_Err)) {
                        echo $password_con_var_Err;
                    } ?> </label>
            </div>

            <div class="col-md-4 mx-auto">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">تسجيل
                </button>
            </div>
        </form>
        <hr>
        <div class="col-md-4 mx-auto mb-3 text-center">
            <a class="link-primary text-decoration-none" href="login.php">تسجيل دخول</a>
        </div>

    </div>

</div></body>
</html>
