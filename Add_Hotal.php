<?php


include "conection.php";
include "header.php";
include "fun.php";

?>

<!--  هل الخدمات تكون نص او لست -->
<!--  Supplementnumber??! -->
<!--  نوع الصك ??! -->
<!-- المواقف سفليه او خارجيه  -->


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
        <p class="fw-bolder  text-light shadow  text-center p-2 rounded-1 f82a8">إضافه فندق</p>
        <form class="row g-3  p-5  text-end" method="POST" action="fun.php">
            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form " class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_space">
                <label for="username_form" class="form-label"><?php if (isset($space_var_Err)) {
                        echo $space_var_Err;
                    } ?> </label>
            </div>

            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form " class="form-label ">عمر العقار</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_AgeOfProperty">
                <label for="username_form" class="form-label"><?php if (isset($AgeOfProperty_var_Err)) {
                        echo $AgeOfProperty_var_Err;
                    } ?> </label>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_TypeOfOffer">
                    <option selected>نوع العرض العقار</option>
                    <option value="1">للبيع</option>
                    <option value="2">الإيجار</option>
                    <option value="3">إيجار منتهي بالتمليك</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofrooms">
                    <option selected>عدد الغرف</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($numberofrooms_var_Err)) {
                    echo $numberofrooms_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofwings">
                    <option selected>عدد الأجنحه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($numberofwings_var_Err)) {
                    echo $numberofwings_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_thenumberoffloors">
                    <option selected>عدد الطوابق</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($thenumberoffloors_var_Err)) {
                    echo $thenumberoffloors_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberoflifts">
                    <option selected> عدد المصاعد</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($numberoflifts_var_Err)) {
                    echo $numberoflifts_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Numberofmeetingroom">
                    <option selected>عدد غرف الإجتماعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($Numberofmeetingroom_var_Err)) {
                    echo $Numberofmeetingroom_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofwarehouses">
                    <option selected>عدد المستودعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($numberofwarehouses_var_Err)) {
                    echo $numberofwarehouses_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Numberofrestaurants">
                    <option selected>عدد المطاعم</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($Numberofrestaurants_var_Err)) {
                    echo $Numberofrestaurants_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofkitchens">
                    <option selected>عدد المطابخ</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($numberofkitchens_var_Err)) {
                    echo $numberofkitchens_var_Err;
                } ?>
            </div>


            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Numberofparking">
                    <option selected>عدد المواقف</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($Numberofparking_var_Err)) {
                    echo $Numberofparking_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofstreet">
                    <option selected>عدد الشوارع</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <?php if (isset($numberofstreet_var_Err)) {
                    echo $numberofstreet_var_Err;
                } ?>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Reception">
                    <option selected>عدد الإستقبال</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <?php if (isset($Reception_var_Err)) {
                    echo $Reception_var_Err;
                } ?>
            </div>


            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Typeoftoilets">
                    <option selected>نوع دورات المياه </option>
                    <option value="1">عربي </option>
                    <option value="2">إفرنجي</option>
                    <option value="2">إفرنجي و عربي</option>
                </select>
                <?php if (isset($Typeoftoilets_var_Err)) {
                    echo $Typeoftoilets_var_Err;
                } ?>
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
                </select><?php if (isset($diraction_var_Err)) {
                    echo $diraction_var_Err;
                } ?>
            </div>

            <div class="form-group  form-label text-lg-start">
                <label for="exampleFormControlTextarea1" >مميزات إضافيه</label>
                <textarea class="form-control" name="form_Features" id="exampleFormControlTextarea1" rows="5"></textarea>
                <?php if (isset($Features_var_Err)) {
                    echo $Features_var_Err;
                } ?>
            </div>




            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_add_hotel">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
