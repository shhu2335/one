<?php
include "header.php";
include "config.php";



?>

<body >

<div class="container ">

    <?php
    if (isset($message_user_not_found))
    {
        echo "<div  class='m-2  alert alert-warning text-center mx-auto h5'  style='width: 450px;' >.$message_user_not_found.</div>";
    }
    ?>

    <div class="text-center mx-auto  bg-transparent bg-gradient m-2 mt-5 shadow-lg  rounded-3"
         style="width: 450px;"  >

        <p class="fw-bolder  bg-white  bg-transparent bg-gradient text-dark  h4 shadow text-center p-2 rounded-3">دخول</p>

        <form class="row  d-block p-4  text-end"
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
                <input type="password" class="form-control" id="form_password" name="form_password">
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

            <div class="col">
                <a class="link-primary text-decoration-none" href="index.php">نسيت كلمة المرور؟</a>
            </div>

        </form>
        <p>
            <a class="btn btn-primary  mb-3 text-center"
               data-bs-toggle="collapse"
               href="#collapseExample"
               role="button"
               aria-expanded="false"
               aria-controls="collapseExample">
                اظاهر الارشادات
            </a>
        <div class="collapse m-2" id="collapseExample">
            <div class="card card-body">
                <ul class="list-group list-group-flush text-end p-0">
                    <li class="list-group-item">اختيار كلمات مرور يصعب التنبؤ بها، ويسهل حفظها.</li>
                    <li class="list-group-item"> اختيار كلمات مرور مميزة تحتوي على تركيبة من حروف الأبجدية والأرقام والرموز الخاصة.</li>
                    <li class="list-group-item"> تغيير كلمات المرور الخاصة بك بشكل منتظم.</li>
                    <li class="list-group-item">يجب ألا تحتوي كلمات المرور على أحرف أو أرقام متطابقة ومتسلسلة.</li>
                    <li class="list-group-item">تعطيل خيار «الإكمال التلقائي» من الهويات أو كلمات المرور المستخدمة عند تسجيل الدخول.</li>
                    <li class="list-group-item">الحفاظ على سرية كلمة المرور وعدم كشفها لأي شخص، وتغييرها على الفور في حال وجود أي شك تجاهها.</li>
                </ul>
            </div>
        </div>
    </div>

</div>

</body>