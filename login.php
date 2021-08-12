<?php




include "conection.php";
include "header.php";
?>

<div class = "container p-5">
    <div class="text-center m-5 p-5 bg-light  shadow-lg  rounded-3">
    <p class="fs-6"> تسجيل دخول</p>
        <form class="row g-2">

        <div class="col-md-6">
        <label for="inputEmail4" class="form-label">الايميل</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
            <div class="col-md-6">
            <label for="inputPassword4" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-md-10 mx-auto">
            <button type="submit" class="btn btn-primary">تسجيل دخول</button>
            </div>
        </form>

        <a href = "logout.php" tite = "Logout" class="btn btn-outline-dark m-3">لتسجيل اضغط هنا  </a>

    </div>

</div>

