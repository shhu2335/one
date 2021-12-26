<?php

    include "fun.php";
    include "connection";
    if (! empty($_SESSION['logged_in'])){

?>

<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مجموعة اكنه العقارية</title>

</head>
<body>
<?php  include 'header.php'; ?>

<div class="container overflow-hidden">

    <div class="col w-auto mx-auto p-4 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-5 py-1 text-center fs-3 bg-primary text-white rounded-3">
            <?php if (! empty($_SESSION['name'])){
                echo "مرحبا, ".$_SESSION['name'];
            }
            ?>
        </p>

  <div class="row gap-2  text-center justify-content-center ">

    <div class="col text-center   mb-5 bg-white p-2 border border-1  bg-gradient  rounded-3 text-secondary">

        <img src="img/14-22.jpg" style="width: 120px;height: 120px" class="rounded-circle">

            <ul class="list-group  m-0 p-0 text-center   list-group-flush">
                <li class="list-group-item">   المعرف :<?php echo $_SESSION['id']; ?></li>
                <li class="list-group-item"><?php echo $_SESSION['name']; ?></li>
                <li class="list-group-item">  <?php echo $_SESSION['email']; ?></li>
                <li class="list-group-item"><?php echo $_SESSION['phonenumber']; ?></li>
                <li class="list-group-item">  المستخدم:<?php echo $_SESSION['usernmae']; ?></li>
                <li class="list-group-item"><button class="btn btn-primary btn-sm mx-auto">تعديل الملف</button></li>
            </ul>
        </div>


    <div class="col  pt-2 mb-5 bg-white   border border-1  bg-gradient  rounded-3 text-secondary">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
               عقاراتك
            </a>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                عدد الشقق
                <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                عدد المحلات
                <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                            عدد العمائر
                <span class="badge bg-primary rounded-pill">1</span>
            </li>
        </ul>
        </div>
        </div>

            </div>

    </div>
    </div>
    <?php

        }else{
        header("location:login.php");
    } include 'footer.php'; ?>
</body>
</html>

