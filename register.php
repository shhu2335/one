<?php


include "conection.php";
include "header.php";
?>



<div class = "container p-5">
    <div class="text-center m-5 p-5 bg-light  shadow-lg  rounded-3">
    <p class="fs-6"> تسجيل عضو جديد</p>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">الاسم</label>
                <input type="email" class="form-control" id="inputnmae">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="usernmae">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">تاكيد كلمة المرور</label>
                <input type="password" class="form-control" id="confgerPassword">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">الايميل</label>
                <input type="email" class="form-control" id="inputemail">
            </div>


            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">رقم الجوال</label>
                <input type="number" class="form-control" id="phonenumber">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">تسجيل </button>
            </div>
        </form>


    </div>

</div>