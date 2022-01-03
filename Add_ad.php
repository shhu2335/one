<?php

include "connection.php";
include "fun.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  include "header.php"; ?>

<div class="container">
    <div class="mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 800px;" >
        <p class="card-title  mb-4 py-2 text-center fs-3 bg-primary text-white rounded-3"> إضف عقارك</p>

    <div class="row gap-0 g-1  row-cols-auto row-cols-sm-auto row-cols-md-5 justify-content-center  text-center">
        <div class="col">
            <a href="Add_Villa.php" class="text-decoration-none text-dark ">
                <div  class="p-3 border bg-light rounded-3 w-100 table-hover" > الفلل</div>
            </a>
        </div>

        <div class="col">
            <a href="Add_Castle.php" class="text-decoration-none text-dark ">
                <div  class="p-3 border bg-light rounded-3 w-100 table-hover" > القصور </div>
            </a>
        </div>
        <div class="col">
            <a href="Add_Apartment.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3"> الشقق</div></a>
        </div>

        <div class="col">
            <a href="Add_Land.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">الاراضي</div></a>
        </div>

        <div class="col">
            <a href="Add_Hotal.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">الفنادق</div></a>
        </div>

        <div class="col">
            <a href="Add_Dianiyah.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">الإستراحات </div></a>
        </div>

        <div class="col">
            <a href=" " class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">الشاليهات </div></a>
            <!--                تحتاج فورم-->
        </div>

        <div class="col">
            <a href="Add_Office.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">المكاتب</div></a>
        </div>

        <div class="col">
            <a href="Add_Building.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">العمائر</div></a>
        </div>

        <div class="col">
            <a href="Add_Farm.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">المزارع</div></a>
        </div>

        <div class="col">
            <a href="Add_Shop.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">المحلات</div></a>
        </div>

        <div class="col">
            <a href="Add_Studio.php" class="text-decoration-none text-dark ">
                <div class="p-3 border bg-light rounded-3">استديوهات</div></a>
        </div>
    </div></div>
</div>


<div class="container d-none">

    <div class="text-center mt-5 mb-1 p-3 d-none" >
        <a href="Add_Villa.php" ><div class="col   p-3  py-3  mx-3 bg-primary text-center text-white text-decoration-none   ">
           <p >الفلل</p>
        </div></a>
        <a href="index.php" ><div class="col     p-3  py-3  mx-3 bg-primary text-center text-white text-decoration-none   ">
                <p >hi</p>
            </div></a>
         <a href="index.php" ><div class="col    p-3  py-3  mx-3 bg-primary text-center text-white  text-decoration-none   ">
           <p >hi</p>
        </div></a>
        <a href="index.php" ><div class="col     p-3  py-3  mx-3 bg-primary text-center  text-white text-decoration-none   ">
                <p >hi</p>
            </div></a>
    </div>

    <div class="text-center mb-1 p-3">
         <a href="index.php" ><div class="col     p-3 py-3  mx-3 bg-primary text-center  text-white text-decoration-none   ">
           <p >hi</p>
        </div></a>

         <a href="index.php" ><div class="col     p-3 py-3  mx-3 bg-primary text-center  text-white text-decoration-none   ">
           <p >hi</p>
        </div></a>
         <a href="index.php" ><div class="col  border   p-3  py-3  mx-3 bg-primary text-center   text-decoration-none   ">
           <p >hi</p>
        </div></a>
        <a href="index.php" ><div class="col  border   p-3  py-3  mx-3 bg-primary text-center   text-decoration-none   ">
                <p >hi</p>
            </div></a>
    </div>

    <div class="text-center mb-5 p-3">
         <a href="index.php" ><div class="col  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
           <p >hi</p>
        </div></a>

         <a href="index.php" ><div class="col  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
           <p >hi</p>
        </div></a>
         <a href="index.php" ><div class="col  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
           <p >hi</p>
        </div></a>
        <a href="index.php" ><div class="col  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
                <p >hi</p>
            </div></a>
    </div>


</div>

</body>
</html>

<?php
include "footer.php";

?>
