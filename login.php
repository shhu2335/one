<?php
include "conection.php";
include "header.php";
include "fun.php";
?>



<div class="container ">

    <?php
    if (isset($message_user_not_found)){
        echo "<div  class='m-2  alert alert-warning text-center mx-auto h5'  style='width: 450px;' >
       .$message_user_not_found.</div>";}?>


    <div class="mx-auto  mt-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 450px;" >
        <h4 class="card-title mt-3 text-center ">تسجيل دخول</h4>
        <form class="row  d-block p-4"
              method="post"
              action="login.php">
            <div class="col">
                <label for="form_user_name"
                       class="form-label">اسم المستخدم</label>
                <input type="text"
                       class="form-control"
                       id="form_user_name"
                       name="form_user_name">
                <label for="username_form"
                       class="alert- alert-danger mb-3 px-2 shadow  rounded-3">
                    <?php
                    if (isset($var_user_name_err))
                    {
                        echo $var_user_name_err;
                    }
                    ?>
                </label>

            </div>
            <div class="col">
                <label for="form_password" class="form-label">كلمة المرور</label>
                <input type="text" class="form-control" id="form_password" name="form_password">
                <label for="form_password"
                       class="lert- alert-danger shadow mb-3 px-2 rounded-2">
                    <?php
                    if (isset($var_password_err))
                    {
                        echo $var_password_err;
                    }
                    ?>
                </label>
            </div>

            <div class="col">
                <label for="username_form" class="form-label"></label>

                <button type="submit" class="btn btn-primary bg-gradient text-white mb-3 form-control" name="submit_form_login">دخول</button>
            </div>

        </form>
        <hr>
        <div class="col mx-auto text-center  mb-3 ">
            <a class="link-primary m-0 text-decoration-none" href="register.php">ليس لديك حساب؟  سجل الان</a>
        </div>

        <div class="col mx-auto text-center  my-2 ">
            <a class="link-primary text-decoration-none " href="ForGetPassword.php">نسيت كلمة المرور؟</a>
        </div>

    </div>

</div>

