

<?php

include "conection.php";
include "header.php";
?>
<div class = "container">
    <div class="mx-auto  p-4  mt-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 450px;" >
        <h4 class="card-title text-center ">نسيت كلمة المرور</h4>
        <form class="row w-100">
        <div class="col-md-12 mb-3 mx-auto">
             <label for="inputEmail4" class="form-label">الايميل</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
            <div class="col-md-12 mb-3 mx-auto ">
            <button type="submit" class="btn btn-primary">ارسال كلمة المرور</button>
            </div>
        </form>
        <hr>
        <div class="col-md-12 mx-auto text-center">
            <a class="link-primary text-decoration-none" href="login.php">تسجيل دخول </a>
        </div>

    </div>

</div>

