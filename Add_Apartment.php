<?php

include "connection.php";
include "fun.php";

    // form_add_building
    if (isset($_POST['submit_form_Add_Apartment'])) { // Start condition of add_Apartment

        $count_Apartment = 0; // Define a variable  to count how many values are filed

        if (empty($_POST["F_Type_sale"])) {  // $f_type_aleaqar
            $Type_sale_Err = "حقل اجباري";
            $_POST["F_Type_sale"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_sale')) {
                $Type_sale = test_input(filter_var($_POST["F_Type_sale"], FILTER_SANITIZE_STRING));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Lounges"])) {  // F_Num_Lounges
            $Num_Lounges_Err = "حقل اجباري";
            $_POST["F_Num_Lounges"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Lounges')) {
                $Num_Lounges = test_input(filter_var($_POST["F_Num_Lounges"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Kitchen"])) {  // F_Num_Kitchen
            $Num_Kitchen_Err = "حقل اجباري";
            $_POST["F_Num_Kitchen"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Kitchen')) {
                $Num_Kitchen = test_input(filter_var($_POST["F_Num_Kitchen"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Type_Kitchen"])) {  // F_Type_Kitchen
            $Type_Kitchen_Err = "حقل اجباري";
            $_POST["F_Type_Kitchen"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Type_Kitchen')) {
                $Type_Kitchen = test_input(filter_var($_POST["F_Type_Kitchen"], FILTER_SANITIZE_STRING));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Bedrooms"])) {  // F_Num_Bedrooms
            $Num_Bedrooms_Err = "حقل اجباري";
            $_POST["F_Num_Bedrooms"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Bedrooms')) {
                $Num_Bedrooms = test_input(filter_var($_POST["F_Num_Bedrooms"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Council_1"])) {  // F_Num_Council_1
            $Num_Council_1_Err = "حقل اجباري";
            $_POST["F_Num_Council_1"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Council_1')) {
                $Num_Council_1 = test_input(filter_var($_POST["F_Num_Council_1"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Council_2"])) {  // F_Num_Council_2
            $Num_Council_2_Err = "حقل اجباري";
            $_POST["F_Num_Council_2"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Council_2')) {
                $Num_Council_2 = test_input(filter_var($_POST["F_Num_Council_2"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Warehouse"])) {  // F_Num_Warehouse
            $Num_Warehouse_Err = "حقل اجباري";
            $_POST["F_Num_Warehouse"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Warehouse')) {
                $Num_Warehouse = test_input(filter_var($_POST["F_Num_Warehouse"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Num_Toilets"])) {  // F_Num_Toilets
            $Num_Toilets_Err = "حقل اجباري";
            $_POST["F_Num_Toilets"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Num_Toilets')) {
                $Num_Toilets= test_input(filter_var($_POST["F_Num_Toilets"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["f_property_age"])) {  // f_property_age
            $property_age_Err = "حقل اجباري";
            $_POST["f_property_age"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'f_property_age')) {
                $property_age= test_input(filter_var($_POST["f_property_age"], FILTER_SANITIZE_NUMBER_INT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["f_details"])) {  // $f_details
            $details_Err = "حقل اجباري";
            $_POST["f_details"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'f_details')) {
                $details= test_input(filter_var($_POST["f_details"], FILTER_SANITIZE_STRING));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_price"])) {  // $f_details
            $price_Err = "حقل اجباري";
            $_POST["F_price"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_price')) {
                $price= test_input(filter_var($_POST["F_price"], FILTER_SANITIZE_NUMBER_FLOAT));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_Category"])) {  // $f_details  $list_pay_method
            $Category_Err = "حقل اجباري";
            $_POST["F_Category"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_Category')) {
                $Category= test_input(filter_var($_POST["F_Category"], FILTER_SANITIZE_STRING));
                $count_Apartment += 1;
            }
        }

        if (empty($_POST["F_pay_method"])) {  // $f_details  $list_pay_method
            $pay_method_Err = "حقل اجباري";
            $_POST["F_pay_method"] = '';
        } else {
            if (filter_has_var(INPUT_POST, 'F_pay_method')) {
                $pay_method= test_input(filter_var($_POST["F_pay_method"], FILTER_SANITIZE_STRING));
                $count_Apartment += 1;
            }
        }

        // Start SQL Connection
         if ($count_Apartment === 14){ // Start condition of count

            if (isset($pdo)){ // Start SQL Conn -- 12

                 try { // Start try catch --

                    $SQL = 'insert into apartment (id, Type_sale, Num_Lounges, Num_Kitchen, Type_Kitchen, Num_Bedrooms,
                     Num_Council_1, Num_Warehouse, property_name, Num_Toilets, property_age,Num_Council_2,details,price,Category,pay_method)
                    VALUES (:id, :Type_sale, :Num_Lounges, :Num_Kitchen, :Type_Kitchen, :Num_Bedrooms,
                     :Num_Council_1, :Num_Warehouse, :property_name, :Num_Toilets, :property_age,:Num_Council_2,:details,:price,:Category,:pay_method)' ;

                    $stmt=$pdo->prepare($SQL);
                    $stmt->execute($r = array(
                            'id'=>null,
                        'Type_sale' => $Type_sale,
                        'Num_Lounges' => $Num_Lounges,
                        'Num_Kitchen' => $Num_Kitchen,
                        'Type_Kitchen' => $Type_Kitchen,
                        'Num_Bedrooms' => $Num_Bedrooms,
                        'Num_Council_1' => $Num_Council_1,
                        'Num_Council_2' => $Num_Council_2,
                        'Num_Warehouse' => $Num_Warehouse,
                        'property_name' => 'شقة',
                        'Num_Toilets' => $Num_Toilets,
                        'property_age' => $property_age,
                        'details' => $details,
                        'price' => $price,
                        'pay_method' => $pay_method,
                        'Category' => $Category,)
                    );
                 } catch (Exception $e) {
                     throw new \PDOException($e->getMessage(), (int)$e->getCode());
                 } // End ty catch --
            } // End SQL Conn -- 12
         } // End condition of count
    } // End condition of add_Apartment
?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إضافه شقة</title>
</head>
<body>
<?php  include "header.php"; ?>
<div class="container-fluid p-md-5">
    <div class="w-auto mx-auto p-3 m-5 shadow border border-1 bg-gradient rounded-3 text-secondary">
        <p class="card-title mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">إضافه شقة</p>
        <form class="row g-md-1 gap-md-0 row row-cols-2 row-cols-md-3 justify-content-start mt-4" method="post" action="Add_Apartment.php">

            <div class="col">
                <label for="F_Type_sale" class="form-label">نوع العرض العقار</label>
                <select class="form-select"  name="F_Type_sale" aria-label="Default select example">
                    <option selected value="">نوع العرض العقار</option>
                    <?php if (!empty($length_State)) {
                        for ($i = 0; $i < $length_State; $i++) { ?>
                            <option value="<?php if (!empty($arra_list_State)) {
                                echo $arra_list_State[$i];
                            } ?>">
                                <?php if (!empty($arra_list_State)) {
                                    echo $arra_list_State[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Type_sale_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Type_sale_Err;
                    echo '<span>';
                }
                ?>
                </div>
            <div class="col">
                <label for="F_Category" class="form-label">التصنيف</label>
                <select class="form-select"  name="F_Category" aria-label="Default select example">
                    <option selected value="">التنصنيف</option>
                    <?php if (!empty($length_Category)) {
                        for ($i = 0; $i < $length_Category; $i++) { ?>
                            <option value="<?php if (!empty($list_Category)) {
                                echo $list_Category[$i];
                            } ?>">
                                <?php if (!empty($list_Category)) {
                                    echo $list_Category[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Category_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Category_Err;
                    echo '<span>';
                }
                ?>
            </div>  <!--     F_Category     -->
            <div class="col">
                <label for="F_pay_method" class="form-label">طرق الدفع</label>
                <select class="form-select"  name="F_pay_method" aria-label="Default select example">
                    <option selected value="">طرق الدفع</option>
                    <?php if (!empty($length_pay_method)) {
                        for ($i = 0; $i < $length_pay_method; $i++) { ?>
                            <option value="<?php if (!empty($list_pay_method)) {
                                echo $list_pay_method[$i];
                            } ?>">
                                <?php if (!empty($list_pay_method)) {
                                    echo $list_pay_method[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($pay_method_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $pay_method_Err;
                    echo '<span>';
                }
                ?>
            </div>  <!--     F_pay_method   -->
            <div class="col">
                    <label for="F_Num_Bedrooms" class="form-label">عدد غرف النوم</label>
                    <select class="form-select" name="F_Num_Bedrooms" aria-label="Default select example">
                    <option selected value="">عدد غرف النوم</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                    </select>
                <?php
                if (isset($Num_Bedrooms_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Bedrooms_Err;
                    echo '<span>';
                }
                ?>
                </div>
            <div class="col">
                <label for="F_Num_Lounges" class="form-label">عدد الصالات</label>
                <select class="form-select" name="F_Num_Lounges" aria-label="Default select example">
                    <option selected value="">عدد الصالات</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Lounges_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Lounges_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_Num_Kitchen" class="form-label">عدد المطابخ</label>
                <select class="form-select" name="F_Num_Kitchen" aria-label="Default select example">
                    <option selected value="">عدد المطابخ</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Kitchen_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Kitchen_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_Type_Kitchen" class="form-label">نوع المطبخ</label>
                <select class="form-select" name="F_Type_Kitchen" aria-label="Default select example">
                    <option selected value="">نوع المطبخ</option>
                    <?php if (!empty($length_Type_kitchen)){
                        for ($i = 0; $i < $length_Type_kitchen; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_Type_kitchen)){
                                echo $arra_list_Type_kitchen[$i];
                            } ?>">
                                <?php if (!empty($arra_list_Type_kitchen)){
                                    echo $arra_list_Type_kitchen[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Type_Kitchen_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Type_Kitchen_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_Num_Council_1" class="form-label">عدد المجالس</label>
                <select class="form-select" name="F_Num_Council_1" aria-label="Default select example">
                    <option selected value="">عدد المجالس</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Council_1_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Council_1_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_Num_Council_2" class="form-label">عدد المقلط</label>
                <select class="form-select" name="F_Num_Council_2" aria-label="Default select example">
                    <option selected value="">عدد المقلط</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){     ?>
                        <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                        </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Council_2_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Council_2_Err;
                    echo '<span>';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_Num_Warehouse" class="form-label">عدد المستودعات</label>
                <select class="form-select" name="F_Num_Warehouse" aria-label="Default select example">
                    <option selected value="">عدد المستودعات</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Warehouse_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Warehouse_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_Num_Toilets" class="form-label"> عدد دورات المياه</label>
                <select class="form-select" name="F_Num_Toilets" aria-label="Default select example">
                    <option selected value=""> عدد دورات المياه</option>
                    <?php if (!empty($length_numberRoom)){
                        for ($i = 0; $i < $length_numberRoom; $i++){
                            ?>
                            <option value="<?php if (!empty($arra_list_numberRoom)){
                                echo $arra_list_numberRoom[$i];
                            } ?>">
                                <?php if (!empty($arra_list_numberRoom)){
                                    echo $arra_list_numberRoom[$i];
                                } ?>
                            </option>
                        <?php }
                    } ?>
                </select>
                <?php
                if (isset($Num_Toilets_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $Num_Toilets_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <div class="col">
                <label for="f_property_age" class="form-label">عمر العقار</label>
                <input type="date"  class="form-control" id="phone_number_form" name="f_property_age" placeholder="عمر العقار">
                <?php
                if (isset($property_age_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $property_age_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <div class="col">
                <label for="F_price" class="form-label">قيمة الايجار </label>
                <input type="number"  class="form-control" id="F_price" name="F_price" placeholder="قيمة الايجار  ">
                <?php
                if (isset($price_Err)){
                    echo '<span  class="badge bg-danger bg-gradient rounded-3">';
                    echo $price_Err;
                    echo '<span >';
                }
                ?>
            </div>
            <div class="col-12">
                <label for="exampleFormControlTextarea1">مميزات إضافيه</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="f_details" rows="5"></textarea>
            </div>
<!--            -->
            <div class="col-12 d-flex flex-row bd-highlight  border  border-1 rounded-3 border-secondary p-3 my-3">
                <div class="form-check form-switch  ">
                    <label class="form-check-label" for="flexCheck">مصعد</label>
                <input class="form-check-input" type="checkbox" value="" id="flexCheck" >
                </div>

                <div class="form-check form-switch ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheck" >
                <label class="form-check-label" for="flexCheck">مؤثثة</label>
                </div>
                <div class="form-check form-switch ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheck" >
                <label class="form-check-label" for="flexCheck">مكيفات</label>
                </div>
                <div class="form-check form-switch ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheck" >
                <label class="form-check-label" for="flexCheck">مدخل سيارة</label>
                </div>
                <div class="form-check form-switch ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheck" >
                <label class="form-check-label" for="flexCheck">غرفة سائق</label>
                </div>
                <div class="form-check form-switch ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheck" >
                <label class="form-check-label" for="flexCheck">حديقة</label>
                </div>
            </div>


            <div class="col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary text-light form-control" name="submit_form_Add_Apartment">إضافة</button>
            </div>

            </form>

    </div>

</div>


</body>

</html>

<?php include "footer.php"; ?>
