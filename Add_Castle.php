<?php


include "connection";
include "header.php";
include "fun.php";
?>
<html>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->


</head>
<!---->

<body>


<div class="container">
    <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه قصر</p>
        <form class="row g-2 gap-0 row row-cols-2 row-cols-md-4 justify-content-center mt-4" method="post" action="thanks.php">
            <div class="col"><label>نوع العرض العقار</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع العرض العقار</option>
                    <option value="1">للبيع</option>
                    <option value="2">الإيجار</option>
                    <option value="3">إيجار منتهي بالتمليك</option>
                </select>
            </div>

            <div class="col"><label></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected> عدد دورات المياه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الصالات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المقلط</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المطابخ</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد غرف النوم</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الأجنحه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المستودعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع المطبخ</option>
                    <option value="1">  داخلي</option>
                    <option value="2"> خارجي</option>
                </select>
            </div>


            <div class="text-lg-start form-label col">
                <label for="phone_number_form" class="form-label">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?> </label>
            </div>
            <div class="form-group col-9 text-lg-start form-label ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>

        </form>

            <div class="col-md-2 mx-auto">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">إضافة
                </button>
            </div>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
