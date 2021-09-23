<?php


    include "conection.php";
    include "header.php";
    include "fun.php";
    ?>
<!doctype html>
 <html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إضافه شقة</title>
    </head>
<body>


<div class="container  text-success ">
    <div class="mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" >

        <h1 class="mb-5 text-center">إضافه شقة</h1>

        <form class="row g-2 needs-validation text-end" method="post" action="add_apartment.php">

            <!--  ===========     get value of  sale_type   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="sale_type" aria-label="Default select example">
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
                    <?php
                    if (isset($var_sale_type_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_sale_type_err;
                        echo '  </span>';
                    }
                    ?>

            </div>

            <!--  ===========     get value of  number_rooms   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select"  name="number_rooms" aria-label="Default select example">
                    <option selected value="">-- أختر عدد الغرف --</option>
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

                    <?php
                    if (isset($var_number_rooms_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_number_rooms_err;
                        echo '  </span>';
                    }
                    ?>
            </div>

            <!--  ===========     get value of  number_halls   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="number_halls" aria-label="Default select example">
                    <option selected value="">عدد الصالات</option>
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
                    <?php
                    if (isset($var_number_halls_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_number_halls_err;
                        echo '<span >';
                    }
                    ?>
            </div>

            <!--  ===========     get value of  number_Kitchens   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="number_Kitchens" aria-label="Default select example">
                    <option selected value="">عدد المطابخ</option>
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

                    <?php
                    if (isset($var_number_Kitchens_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_number_Kitchens_err;
                        echo '</span>';
                    }
                    ?>
            </div>

            <!--  ===========     get value of  type_Kitchen   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="type_Kitchen" aria-label="Default select example">
                    <option selected value="">نوع المطبخ</option>
                    <option value="1">  داخلي</option>
                    <option value="2"> خارجي</option>
                </select>

                    <?php
                    if (isset($var_type_Kitchen_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_type_Kitchen_err;
                        echo '<span >';
                    }

                    ?>
            </div>

            <!--  ===========     get value of  bed_room   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="bed_room" aria-label="Default select example">
                    <option selected value="">عدد غرف النوم</option>
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

                    <?php
                    if (isset($var_bed_room_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';   echo  '</span>';
                        echo $var_bed_room_err;
                    }
                    echo  '</span>';
                    ?>
            </div>

            <!--  ===========     get value of  number_boards   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="number_boards" aria-label="Default select example">
                    <option selected value="">عدد المجالس</option>
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

                    <?php
                    if (isset($var_number_boards_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_number_boards_err;
                        echo  '</span>';
                    }

                    ?>

            </div>

            <!--  ===========     get value of  number_clippers   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="number_clippers" aria-label="Default select example">
                    <option selected value="">عدد المقلط</option>
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
                    <?php
                    if (isset($var_number_clippers_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_number_clippers_err;
                    }
                    echo  '</span>';
                    ?>

            </div>

            <!--  ===========     get value of  number_Warehouses   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="number_Warehouses" aria-label="Default select example">
                    <option selected value="">عدد المستودعات</option>
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

                    <?php
                    if (isset($var_number_Warehouses_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_number_Warehouses_err;
                    }
                    echo  '</span>';
                    ?>

            </div>

            <!--  ===========     get value of  number_Bathrooms   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="number_Bathrooms" aria-label="Default select example">
                    <option selected value=""> عدد دورات المياه</option>
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

                    <?php
                    echo '<span  class="badge bg-danger rounded-pill">';
                    if (isset($var_number_Bathrooms_err)){
                        echo $var_number_Bathrooms_err;
                    }
                    echo  '</span>';
                    ?>

            </div>

            <!--  ===========     get value of  property_age   ===========  done  -->
            <div class="col-md-4">
                <select class="form-select" name="property_age" aria-label="Default select example">
                    <option selected value=""> -- أختر عمر العقار --</option>
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

                    <?php
                    if (!empty($var_property_age_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_property_age_err;
                    }
                    echo  '</span>';
                    ?>
            </div>

            <!--  ===========     get value of  Describe   ===========  done  -->
            <div class="form-group text-lg-start form-label">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" placeholder="هـنـا أكـتـب تـفـاصـيـل مميزات شروط ,ملاحظات , تنويه " name="Describe" id="exampleFormControlTextarea1" rows="5"></textarea>

                    <?php
                    if (!empty($var_Describe_err)){
                        echo '<span  class="badge bg-danger rounded-pill">';
                        echo $var_Describe_err;
                        echo '  </span>';
                    }
                    ?>
            </div>

            <div class="col-md-4 mx-auto">
                <button type="submit" class="btn btn-primary text-light form-control" name="submit_apartment">تسجيل
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>

<?php include "footer.php"; ?>
