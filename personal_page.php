<?php
include "fun.php";
include "connection.php";
if (! empty($_SESSION['logged_in'])){

if (isset($_POST['update_person'])) { // Start condition of add_Apartment

    $count_person = 0; // Define a variable  to count how many values are filed

    if (empty($_POST["F_email"])) {  // F_email
        $email_Err = "حقل اجباري";
        $_POST["F_email"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_email')) {
            $email = test_input(filter_var($_POST["F_email"], FILTER_SANITIZE_EMAIL));
            $count_person += 1;
        }
    }

    if (empty($_POST["F_phone_number"])) {  // F_phone_number
        $phone_number_Err = "حقل اجباري";
        $_POST["F_phone_number"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_phone_number')) {
            $phone_number = test_input(filter_var($_POST["F_phone_number"], FILTER_SANITIZE_NUMBER_INT));
            $count_person += 1;
        }
    }

    if (empty($_POST["F_name"])) {  // F_name
        $name_Err = "حقل اجباري";
        $_POST["F_name"] = '';
    } else {
        if (filter_has_var(INPUT_POST, 'F_name')) {
            $name = test_input(filter_var($_POST["F_name"], FILTER_SANITIZE_STRING));
            $count_person += 1;
        }
    }

    // Start condition count
    if ($count_person === 3){
        // Start SQL Conn -- 3
        if (isset($pdo)){
            // Start try catch --
            try {
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'id' => $_SESSION['id'],
                ];
                $sql = "UPDATE user SET name=:name, email=:email, phone_number=:phone_number WHERE id=:id";
                $stmt= $pdo->prepare($sql);
                $stmt->execute($data);

            }catch (Exception $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
    }
}
?>
<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-LPvXVVAlyPoBSGkX8UddpctDks+1P4HG8MhT7/YwqHtJ40bstjzCqjj+VVVDhsCo" crossorigin="anonymous">
    <title>مجموعة اكنه العقارية</title>


</head>
<body>
<?php  include 'header.php'; ?>
<div class="container overflow-hidden">
    <div class="w-auto mx-auto p-3 m-5 shadow border border-1 bg-gradient rounded-3 text-secondary">
        <p class="card-title  mb-5 py-1 text-center fs-3 bg-primary text-white rounded-3">
            <?php if (! empty($_SESSION['name'])){
                echo "مرحبا, ".$_SESSION['name'];
            }
            ?>
        </p>

        <div class="row g-md-1 gap-md-3 g-2 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 justify-content-center mt-4">

            <?php





                ?>
            <script>
                $(document).ready(function(){
                    $("#send").click(function(){
                        $("#hide").hide();
                    });
                    $("#show").click(function(){
                        $("p").show();
                    });
                });
            </script>



                <div id="hide" class="col text-center mb-5 bg-white p-2 border border-1 bg-gradient rounded-3 text-secondary">
                    <img src="img/14-22.jpg" style="width: 120px;height: 120px" class="rounded-circle">

                    <ul class="list-group  m-0 p-0 text-end   list-group-flush">
                        <li class="list-group-item">رقم العضوية: <?php echo $_SESSION['id']; ?></li>
                        <li class="list-group-item">أسم المستخدم: <?php echo $_SESSION['username']; ?></li>
                        <li class="list-group-item"><i class="bi bi-person"></i>  <?php echo $_SESSION['name']; ?></li>
                        <li class="list-group-item"><i class="bi bi-envelope"></i>  <?php echo $_SESSION['email']; ?></li>
                        <li class="list-group-item"><i class="bi bi-telephone"></i> <?php echo $_SESSION['phone_number']; ?></li>
                        <li class="list-group-item text-center">
                            <form method="POST" action="personal_page.php">
                                <button name="update" id="send" class="btn btn-primary btn-sm mx-auto">تعديل الملف</button>
                            </form>
                        </li>
                    </ul>
                </div>

                <?php

            if (isset($_POST['update'])){
                $check=+1;

                ?>

                <div class="col text-center mb-5 bg-white p-2 border border-1 bg-gradient rounded-3 text-secondary">
                    <img src="img/14-22.jpg" style="width: 120px;height: 120px" class="rounded-circle m--5">
                    <form method="POST" action="personal_page.php">
                        <ul class="list-group-flush m-0 p-0 text-end  table-dark  list-group-flush">
                            <li class="list-group-item">رقم العضوية: <?php echo $_SESSION['id']; ?></li>
                            <li class="list-group-item   mb-3 ">أسم المستخدم: <?php echo $_SESSION['username']; ?></li>

                            <li class="list-group  mb-3">
                                <div class="input-group">
                                    <span class="input-group-text " id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" name="F_name" <?php echo $_SESSION['username']; ?> placeholder="أسم المستخدم" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </li>

                            <li class="list-group  mb-3">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="text" class="form-control" name="F_email" <?php echo $_SESSION['email']; ?> placeholder="الايميل" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </li>

                            <li class="list-group">
                                <div class="input-group  mb-3 ">
                                    <span class="input-group-text " id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                    <input type="text" class="form-control" name="F_phone_number" <?php echo $_SESSION['phone_number']; ?> placeholder="رقم الجوال" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </li>
                            <li class="list-group-item text-center"><button type="submit" name="update_person" class="btn btn-outline-primary btn-sm mx-auto">تعديل الملف</button></li>
                        </ul>
                    </form>
                </div>
                <?php

            }?>

            <div class="col pt-2 mb-5 p-2 bg-white border border-1 bg-gradient rounded-3 text-secondary">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">عقاراتك</a>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        عدد الشقق<span class="badge bg-primary rounded-pill">14</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        عدد المحلات<span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">                    عدد العمائر
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}else{
    header("location:login.php");
}
include 'footer.php';
?>
</body>
</html>

