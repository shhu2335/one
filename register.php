<?php


include "conection.php";
include "header.php";
?>



<div class = "container p-5">
    <div class="text-center m-5 p-5 bg-light  shadow-lg  rounded-3">
    <p class="fs-6"> تسجيل عضو جديد</p>
        <form class="row g-3" method="post" action="fun.php">
            <div class="col-md-6">
                <label for="name_form" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name_form" name="name_form">
                <label for="username_form" class="form-label"><?php  if (isset($name_var_Err)) { echo $name_var_Err;} ?> </label>

            </div>
            <div class="col-md-6">
                <label for="username_form" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="username_form" name="username_form">
                <label for="username_form" class="form-label"><?php  if (isset($MESSAGE_USER_EXISTS)) { echo $MESSAGE_USER_EXISTS; }?> </label>
            </div>

            <div class="col-md-6">
                <label for="password_form" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password_form" name="password_form">
                <label for="username_form" class="form-label"><?php  if (isset($password_var_Err)) { echo $password_var_Err; }?> </label>
            </div>

            <div class="col-md-6">
                <label for="password_con_form" class="form-label">تاكيد كلمة المرور</label>
                <input type="password" class="form-control" id="password_con_form" name="password_con_form">
                <label for="username_form" class="form-label"><?php  if (isset($password_con_var_Err)) { echo $password_con_var_Err; }?> </label>
            </div>

            <div class="col-md-6">
                <label for="email_from" class="form-label">الايميل</label>
                <input type="email" class="form-control" id="email_from" name="email_from">
                <label for="username_form" class="form-label"><?php  if (isset($email_from_var_Err)) { echo $email_from_var_Err; }?> </label>
            </div>


            <div class="col-md-6">
                <label for="phone_number_form" class="form-label">رقم الجوال</label>
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form">
                <label for="username_form" class="form-label"><?php  if (isset($phone_number_var_Err)) { echo $phone_number_var_Err;} ?> </label>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit_form_user" >تسجيل </button>
            </div>
        </form>


    </div>

</div>