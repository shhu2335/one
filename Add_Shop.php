<?php


include "conection.php";
include "header.php";
include "fun.php";


?>

<!--  إضافه عدد المواقف للDB -->
<!--  إضافه عدد المصاعد للDB -->
<!--  إضافه توفر مصعد او لا  للDB -->





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
        <p class="fw-bolder  text-light shadow  text-center p-2 rounded-1 f82a8">إضافه محل</p>
        <form class="row g-3  p-5  text-end" method="post" action="fun.php">
            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label">المساحه</label>
                <input type="number" class="form-control" id="phone_number_form" name="form_space">
                <label for="username_form" class="form-label"><?php if (isset($space_var_Err)) {
                        echo $space_var_Err;
                    } ?> </label>
            </div>

            <div class="form-label col-md-6 text-lg-start">
                <label for="phone_number_form" class="form-label ">عمر العقار</label>
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
                <?php if (isset($TypeOfOffer_var_Err)) {echo $TypeOfOffer_var_Err;} ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Numberoftoilets">
                    <option selected>عدد دورات المياه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($Numberoftoilets_var_Err)) {
                    echo $Numberoftoilets_var_Err;
                } ?> </label>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_numberofroles">
                    <option selected>عدد الطوابق</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($numberofroles_var_Err)) {
                    echo $numberofroles_var_Err;
                } ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="form_Warehousenumber">
                    <option selected>عدد المستودعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($Warehousenumber_var_Err)) {echo $Warehousenumber_var_Err;} ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example"name="form_Typeoftoilets">
                    <option selected>نوع دورات المياه </option>
                    <option value="1">عربي </option>
                    <option value="2">إفرنجي</option>
                    <option value="2">إفرنجي و عربي</option>
                </select>
                <?php if (isset($Typeoftoilets_var_Err)) {echo $Typeoftoilets_var_Err;} ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example"name="form_diraction">
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
                <select class="form-select" aria-label="Default select example"name="form_numberofstreet">
                    <option selected>عدد الشوارع</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <?php if (isset($numberofstreet_var_Err)) {echo $numberofstreet_var_Err;} ?> </label>
            </div>



            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected> عدد المصاعد</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($phone_number_var_Err)) {echo $phone_number_var_Err;} ?> </label>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المواقف</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <?php if (isset($phone_number_var_Err)) {echo $phone_number_var_Err;} ?> </label>
            </div>





            <div class="form-group  form-label text-lg-start">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="form_Features" rows="5"></textarea>
                <?php if (isset($Features_var_Err)) {echo $Features_var_Err;} ?> </label>
            </div>

            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_add_shop">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
