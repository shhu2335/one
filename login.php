<?php




include "conection.php";
include "header.php";
?>

<div class = "container p-5">
    <div class="text-center mx-auto bg-light  shadow-lg  rounded-3">
        <p class="fw-bolder bg-warning shadow text-light text-center p-2 rounded-3"> تسجيل عضو جديد</p>
        <form class="row mx-auto d-block p-5 text-end" method="post" action="register.php">
            <div class="col-md-4">
                <label for="name_form" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="name_form" name="name_form">
                <label for="username_form" class="alert- alert-danger shadow  rounded-3"><?php  if (isset($name_var_Err)) { echo $name_var_Err;} ?> </label>

            </div>
            <div class="col-md-4">
                <label for="username_form" class="form-label">كلمة المرور</label>
                <input type="text" class="form-control" id="username_form" name="username_form">
                <label for="username_form" class="lert- alert-danger shadow px-2 mt-1 rounded-2"><?php  if (isset($MESSAGE_USER_EXISTS)) { echo $MESSAGE_USER_EXISTS; }?> </label>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-warning form-control" name="submit_form_user" >دخول </button>
            </div>
        </form>


    </div>

</div>

