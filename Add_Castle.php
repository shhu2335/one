<?php

include "fun.php";
include "config.php";
include "header.php";

?>
<html>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->


</head>
<!---->

<body>


<div class="container p-5 ">
    <div class="text-center w-auto  bg-light  shadow-lg  rounded-3">
        <p class="fw-bolder bg-warning text-light shadow  text-center p-2 rounded-1">إضافه قصر</p>
        <form class="row g-3  p-5  text-end" method="post" action="thanks.php">
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع العرض العقار</option>
                    <option value="1">للبيع</option>
                    <option value="2">الإيجار</option>
                    <option value="3">إيجار منتهي بالتمليك</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected> عدد دورات المياه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الصالات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المقلط</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المطابخ</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد غرف النوم</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الأجنحه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المستودعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع المطبخ</option>
                    <option value="1">  داخلي</option>
                    <option value="2"> خارجي</option>
                </select>
            </div>


            <div class="text-lg-start form-label col-md-4">
                <label for="phone_number_form" class="form-label">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?> </label>
            </div>
            <div class="form-group text-lg-start form-label ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>


            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-warning text-light form-control" name="submit_form_user">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
