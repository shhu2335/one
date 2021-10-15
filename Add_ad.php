<?php
include "header.php";
include "conection.php";
include "fun.php";

?>
<html>
<header>
<!--    <link rel="stylesheet" href="css/style.css">-->
</header>

<body>
<div class="container">
    <div class="w-auto mx-auto p-3 my-5 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary">
        <p class="card-title  mb-4 py-2 text-center fs-3 bg-primary text-white rounded-3"> الأضافات</p>

    <div class="row g-3  text-center">
        <div class="col-3">
            <a href="Add_Villa.php" class="text-decoration-none text-dark ">
                <div  class="cards  p-3 border bg-light rounded-3 w-100 table-hover" > الفلل</div>
            </a>
        </div>

        <div class="col-3">
            <a href="Add_Castle.php" class="text-decoration-none text-dark ">
                <div  class="cards  p-3 border bg-light rounded-3 w-100 table-hover" > القصور </div>
            </a>
        </div>
        <div class="col-3">
            <a href="Add_Apartment.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3"> الشقق</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Land.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">الاراضي</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Hotal.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">الفنادق</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Dianiyah.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">الإستراحات </div></a>
        </div>

        <div class="col-3">
            <a href=" " class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">الشاليهات </div></a>
            <!--                تحتاج فورم-->
        </div>

        <div class="col-3">
            <a href="Add_Office.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">المكاتب</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Building.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">العمائر</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Farm.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">المزارع</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Shop.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">المحلات</div></a>
        </div>

        <div class="col-3">
            <a href="Add_Studio.php" class="text-decoration-none text-dark ">
                <div class="cards p-3 border bg-light rounded-3">استديوهات</div></a>
        </div>
    </div></div>
</div>


<div class="container d-none">

    <div class="text-center mt-5 mb-1 p-3 d-none" >
        <a href="Add_Villa.php" ><div class="col-2   p-3  py-3  mx-3 bg-primary text-center text-white text-decoration-none   ">
           <p >الفلل</p>
        </div></a>
        <a href="index.php" ><div class="col-2     p-3  py-3  mx-3 bg-primary text-center text-white text-decoration-none   ">
                <p >hi</p>
            </div></a>
         <a href="index.php" ><div class="col-2     p-3  py-3  mx-3 bg-primary text-center text-white  text-decoration-none   ">
           <p >hi</p>
        </div></a>
        <a href="index.php" ><div class="col-2     p-3  py-3  mx-3 bg-primary text-center  text-white text-decoration-none   ">
                <p >hi</p>
            </div></a>
    </div>

    <div class="text-center mb-1 p-3">
         <a href="index.php" ><div class="col-2     p-3 py-3  mx-3 bg-primary text-center  text-white text-decoration-none   ">
           <p >hi</p>
        </div></a>

         <a href="index.php" ><div class="col-2     p-3 py-3  mx-3 bg-primary text-center  text-white text-decoration-none   ">
           <p >hi</p>
        </div></a>
         <a href="index.php" ><div class="col-2  border   p-3  py-3  mx-3 bg-primary text-center   text-decoration-none   ">
           <p >hi</p>
        </div></a>
        <a href="index.php" ><div class="col-2  border   p-3  py-3  mx-3 bg-primary text-center   text-decoration-none   ">
                <p >hi</p>
            </div></a>
    </div>

    <div class="text-center mb-5 p-3">
         <a href="index.php" ><div class="col-2  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
           <p >hi</p>
        </div></a>

         <a href="index.php" ><div class="col-2  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
           <p >hi</p>
        </div></a>
         <a href="index.php" ><div class="col-2  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
           <p >hi</p>
        </div></a>
        <a href="index.php" ><div class="col-2  border   p-3  pt-5 pb-5  mx-3 f82a8 text-center text-dark text-decoration-none   ">
                <p >hi</p>
            </div></a>
    </div>


</div>

</body>
</html>

<?php
include "footer.php";

?>
