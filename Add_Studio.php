<?php


include "conection.php";
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
    <div class="mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" >
        <p class="my-2 text-center fs-3 ">إضافه شقة</p>
        <form class="row  g-3 text-end" method="post" action="thanks.php">
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected value="">-- أختر الغرض --</option>
                    <?php if (!empty($length_State)) {
                        for ($i = 0; $i < $length_State; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_State)) {
                                echo $arra_list_State[$i];
                            } ?>">
                                <?php if (!empty($arra_list_State)) {
                                    echo $arra_list_State[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>



            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">

                    <option selected value="">-- أختر الغرض --</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد الصالات</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المطابخ</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>



            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>نوع المطبخ</option>
                    <option value="1">  داخلي</option>
                    <option value="2"> خارجي</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد غرف النوم</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المجالس</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المقلط</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد المستودعات</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>


            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected> عدد دورات المياه</option>
                    <?php if (!empty($length_numberRoom)) {
                        for ($i = 0; $i < $length_numberRoom; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)) {
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)) {
                                    echo $arra_list_numberRoom[$i];
                                } ?> </option>
                        <?php }
                    } ?>
                </select>
            </div>

            <div class="text-lg-start form-label col-md-4">
                <!--                <label for="phone_number_form" class="form-label"></label>-->
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form" placeholder="عمر العقار">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?> </label>
            </div>
            <div class="form-group text-lg-start form-label ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>


            <div class="col-md-5 mx-5">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">حفظ
                </button>
            </div>
        </form>


    </div>

</div>


<div class="container p-5 ">
    <div class="text-center w-auto  bg-light  shadow-lg  rounded-3">
        <p class="fw-bolder bg-warning text-light shadow  text-center p-2 rounded-1">إضافه شقة</p>
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
                    <option selected>عدد غرف الاجتماعات</option>
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
                    <option selected>عدد المجالس</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>عدد بيوت الشعر</option>
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
                    <option selected>نوع المطبخ</option>
                    <option value="1"> داخلي</option>
                    <option value="2"> خارجي</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>الكهرباء</option>
                    <option value="نعم">نعم</option>
                    <option value="لا">لا</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>الاسفلت</option>
                    <option value="نعم">نعم</option>
                    <option value="لا">لا</option>
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
                    <option selected> عدد دورات المياه</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="text-lg-start form-label col-md-4">
                <!--                <label for="phone_number_form" class="form-label"></label>-->
                <input type="number" class="form-control" id="phone_number_form" name="phone_number_form"
                       placeholder="عمر العقار">
                <label for="username_form" class="form-label"><?php if (isset($phone_number_var_Err)) {
                        echo $phone_number_var_Err;
                    } ?> </label>
            </div>
            <div class="form-group text-lg-start form-label ">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>


            <div class="col-md-3 mx-auto">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_user">تسجيل
                </button>
            </div>
        </form>


    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
