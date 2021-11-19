

<?php

include "conection.php";
include "header.php";
?>

<html>
<head></head>
<body>
<div class = "container">
    <div class="mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 450px;" >

        <h4 class="card-title  mb-3 py-2 text-center fs-3 bg-primary text-white rounded-3">نسيت كلمة المرور</h4>
        <form class="row mx-auto">
        <div class="col-md-12  ">
             <label for="inputEmail4" class="form-label">الايميل</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>

            <div class="col-12">
               <label for="username_form"
                       class="form-label">
                </label>

                <button type="submit"
                        class="btn btn-primary bg-gradient text-white mb-3 form-control"
                        name="submit_form_login">ارسال كلمة المرور
                </button>
            </div>
        </form>
        <hr>
        <div class="col-md-12 mx-auto text-center">
            <a class="link-primary text-decoration-none" href="login.php">تسجيل دخول </a>
        </div>

    </div>

</div>
</body>

<?php include "footer.php"?>
</html>

