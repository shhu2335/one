<?php
include "conection.php";
include "header.php";
?>

<div class="container ">
    <div class="text-center mx-auto bg-light  m-2 mt-5 shadow-lg  rounded-3" style="width: 450px;"  >
        <p class="fw-bolder  bg-warning bg-gradient text-light  h4 shadow text-center p-2 rounded-3">دخول</p>

        <form class="row  d-block p-4  text-end" method="post" action="register.php">
            <div class="col">
                <label for="name_form" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="name_form" name="name_form">
                <label for="username_form"
                       class="alert- alert-danger shadow  rounded-3"><?php if (isset($name_var_Err)) {
                        echo $name_var_Err;
                    } ?> </label>

            </div>
            <div class="col">
                <label for="username_form" class="form-label">كلمة المرور</label>
                <input type="text" class="form-control" id="username_form" name="username_form">
                <label for="username_form"
                       class="lert- alert-danger shadow px-2 mt-1 rounded-2"><?php if (isset($MESSAGE_USER_EXISTS)) {
                        echo $MESSAGE_USER_EXISTS;
                    } ?> </label>
            </div>

            <div class="col">
                <label for="username_form" class="form-label"></label>

                <button type="submit" class="btn btn-warning bg-gradient text-white mb-3 form-control" name="submit_form_user">دخول</button>
            </div>

            <div class="col">
                <a class="link-warning " href="index.php">نسيت كلمة المرور؟</a>
            </div>

        </form>
        <p>
            <a class="btn btn-outline-warning  mb-3 text-center"
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

