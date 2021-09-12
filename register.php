<?php
include "conection.php";
include "header.php";


?>


<div class="container p-5 ">

   isset(){ echo "<div  class='m-2  alert alert-warning text-center mx-auto h5'  style='width: 450px;' >

      .$alert_successfully_inserted_user.</div>";}

    <div class="text-center w-auto  bg-light  shadow-lg  rounded-3">
        <p class="fw-bolder bg-warning text-light  h4 shadow  text-center p-2 rounded-1"> تسجيل </p>
        <form class="row p-5  text-end" method="post" action="register.php">

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

                <button type="submit" class="btn btn-warning text-light form-control" name="submit_form_user">تسجيل</button>
            </div>
        </form>


    </div>

</div>