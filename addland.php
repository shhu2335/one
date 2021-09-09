<?php

include "fun.php";
include "conection.php";
include "header.php";


?>

<!--  إضافه مميزات إضافي للDB -->





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
        <p class="fw-bolder bg-warning text-light shadow  text-center p-2 rounded-1">إضافه أرض </p>
        <form class="row g-3  p-5  text-end" method="post" action="fun.php">
            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_space">
                <label for="username_form" class="form-label">
                    <?php if (isset($space_var_Err)) {echo $space_var_Err;} ?>
                </label> </div>

            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_AgeOfProperty">
                <label for="username_form" class="form-label">
                    <?php if (isset($AgeOfProperty_var_Err)) {echo $AgeOfProperty_var_Err;} ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_TypeOfOffer">
                    <option selected>نوع العرض العقار</option>
                    <option value="1">للبيع</option>
                    <option value="2">الإيجار</option>
                    <option value="3">إيجار منتهي بالتمليك</option>
                </select>
                <?php if (isset($TypeOfOffer_var_Err)) {echo $TypeOfOffer_var_Err;} ?> </label>

            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofstreet">
                    <option selected>عددالشوارع </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <?php if (isset($numberofstreet_var_Err)) {echo $numberofstreet_var_Err;} ?> </label>

            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_diraction">
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
                <?php if (isset($diraction_var_Err)) {echo $diraction_var_Err;} ?> </label>

            </div>


            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Typeofinstrument">
                    <option selected>نوع الصك</option>
                    <option value="1">زراعي </option>
                    <option value="2">سكني </option>
                    <option value="3">تجاري </option>
                </select>
                <?php if (isset($Typeofinstrument_var_Err)) {echo $Typeofinstrument_var_Err;} ?> </label>

            </div>

            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label">سعر المتر</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_priceofonemeter">
                <label for="username_form" class="form-label"><?php if (isset($priceofonemeter_var_Err)) {
                        echo $priceofonemeter_var_Err;
                    } ?> </label>
            </div>



            <div class="form-group  form-label text-lg-start">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="form_Features" rows="5"></textarea>
                <?php if (isset($Features_var_Err)) {echo $Features_var_Err;} ?> </label>

            </div>

            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-warning text-light form-control" name="submit_form_add_land">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
