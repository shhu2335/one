<?php

    require "connection";
    require "fun.php";

    // form_add_building
    if (isset($_POST['submit_form_add_building'])) {

        $count_building = 0;
        // form_space
        if (empty($_POST["form_space"])) {
            $space_var_Err = "الرجاء كتابة المساحه";
            $_POST["form_space"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'form_space')) {

                $space_var = test_input(filter_var($_POST["form_space"], FILTER_SANITIZE_STRING));
                $count_building += 1;
            }
        }
    }
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <title>إضافة شقة</title>
    </head>
    <body>
    <?php  include "header.php"; ?>
    <div class="container">
        <div class="w-auto mx-auto p-3 m-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
            <p class="card-title  mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه شقة</p>
            <form class="row g-2 gap-0 row row-cols-2 row-cols-md-4 justify-content-center mt-4" method="post" action="thanks.php">
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع العرض العقار</option>
                    <option value="1">للبيع</option>
                    <option value="2">الإيجار</option>
                    <option value="3">إيجار منتهي بالتمليك</option>
                </select>
            </div>

            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الغرف</option>
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
                    <option selected>عدد المطابخ</option>
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
                    <option selected>عدد المجالس</option>
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
                    <option selected>عدد المستودعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected> عدد دورات المياه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="text-lg-start form-label col">
<!--                <label for="phone_number_form" class="form-label"></label>-->
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form" placeholder="عمر العقار">
                 <label for="username_form" class="form-label">
                    <?php if (isset($phone_number_var_Err)){
                        echo $phone_number_var_Err;
                    } ?>
                </label>
            </div>

            <div class="form-group text-lg-start form-label col-9">
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
