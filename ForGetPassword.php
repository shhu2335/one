

<?php

include "connection";
include "header.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>


<div class = "container">
    <div class="mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 350px;" >

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
</html>
<?php include "footer.php";  //}else{
// header("location:login.php");
//}
?>