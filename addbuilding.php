<?php


include "conection.php";
include "header.php";
include 'fun.php';

?>

<!--  إضافه نوع العرض للDB -->
<!-- Numberoftrees ؟؟ -->
<!--  إضافه عدد الطوابق للDB -->
<!--  إضافه توفر مصعد او لا  للDB -->
<!--  إضافه عدد المواقف  للDB -->
<!--  إضافه عدد الشوارع  للDB -->
<!--  إضافه الواجهه  للDB -->




<html lang="ar" dir="rtl">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">


</head>
<!---->

<body>


<div class="container p-5 ">
    <div class="text-center w-auto  bg-light  shadow-lg  rounded-3">
        <p class="fw-bolder bg-warning text-light shadow  text-center p-2 rounded-1">إضافه عماره</p>
        <form class="row g-3  p-5  text-end" method="POST" action="fun.php">
            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_space">
                <label for="username_form" class="form-label"><?php if (isset($space_arr)) {
                        echo $space_arr;
                    } ?> </label>
            </div>

            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_AgeOfProperty">
                <label for="username_form" class="form-label"><?php if (isset($AgeOfProperty_arr)) {
                        echo $AgeOfProperty_arr;
                    } ?> </label>
            </div>
            <div class="col-md-4">
                <select class="form-select"  name="form_taype_of_offer" aria-label="Default select example">
                    <option selected>نوع العرض العقار</option>
                    <option value="1">للبيع</option>
                    <option value="2">الإيجار</option>
                    <option value="3">إيجار منتهي بالتمليك</option>
                </select>
                <label for="username_form" class="form-label"><?php if (isset($form_taype_of_offer_arr)) {
                        echo $form_taype_of_offer_arr;
                    } ?> </label>

            </div>

            <div class="col-md-4">
                <select class="form-select" name="form_num_apartment" aria-label="Default select example">
                    <option value="" selected>عدد الشقق</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <label for="username_form" class="form-label"><?php if (isset($var_num_apartment_Err)) {
                        echo $var_num_apartment_Err;
                    } ?> </label>
            </div>


            <div class="col-md-4">
                <select class="form-select" name="form_num_flor" aria-label="Default select example">
                    <option selected>عدد الطوابق</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="username_form" class="form-label"><?php if (isset($form_num_flor_arr)) {
                        echo $form_num_flor_arr;
                    } ?> </label>

            </div>

            <div class="col-md-4">
                <select class="form-select" name="form_num_left" aria-label="Default select example">
                    <option selected> عدد المصاعد</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="username_form" class="form-label"><?php if (isset($form_num_left_arr)) {
                        echo $form_num_left_arr;
                    } ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" name="form_num_parking" aria-label="Default select example">
                    <option selected>عدد المواقف</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="username_form" class="form-label"><?php if (isset($form_num_parking_arr)) {
                        echo $form_num_parking_arr;
                    } ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" name="form_num_Street" aria-label="Default select example">
                    <option selected>عدد الشوارع</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
               <label for="username_form" class="form-label"><?php if (isset($form_num_Street_arr)) {
                    echo $form_num_Street_arr;
                } ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select"  name="form_direction" aria-label="Default select example">
                    <option selected>الواجهه</option>
                    <option value="1">شمالي</option>
                    <option value="2">شرقي</option>
                    <option value="3">غربي</option>
                    <option value="1">جنوبي</option>
                    <option value="2">شمالي شرقي</option>
                    <option value="3">شمالي غربي</option>
                    <option value="2"> جنوبي شرقي</option>
                    <option value="3"> جنوبي غربي</option>
                </select>
                <label for="username_form" class="form-label"><?php if (isset($form_direction_arr)) {
                    echo $form_direction_arr;
                } ?> </label>
            </div>

            <div class="col-md-12  text-start">
                <label for="phone_number_form" class="form-label">نوع الشقق </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_double_room" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">ثنائيه</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_triple_room" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2"> ثلاثيه</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="form_quad_room" id="inlineCheckbox3" value="option3" >
                    <label class="form-check-label" for="inlineCheckbox3"> رباعيه</label>
                </div>
            </div>

            <div class="form-group  form-label text-lg-start">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" name="form_features" id="exampleFormControlTextarea1" rows="5"></textarea>

            </div>

            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-warning text-light form-control"  name="submit_form_add_building">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
