
<!-- start of conection -->
<?php


include "conection.php"; ?>

<?php



?>
<!-- start of header -->
<?php include "header.php"; ?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<!---->
<!--<div class="container overflow-hidden">-->
<!---->
<!---->
<!--                <div class="row g-2">-->
<!--                    <div class="col-6">-->
<!--                        <div class="p-3 border bg-light">Custom column padding <i class="fab fa-mdb"></i></div>-->
<!--                    </div>-->
<!--                    <div class="col-6">-->
<!--                        <div class="p-3 border bg-light">Custom column padding</div>-->
<!--                    </div>-->
<!--                    <div class="col-6">-->
<!--                        <div class="p-3 border bg-light">Custom column padding</div>-->
<!--                    </div>-->
<!--                    <div class="col-6">-->
<!--                        <div class="p-3 border bg-light">Custom column padding</div>-->
<!--                    </div>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</div>-->
<div class="container p-1">
    <div class="bg-transparent  my-3 py-3 mb-1">
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة فندق</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة فلة</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة عمارة</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة محل</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة أرض</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة مزرعة</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة استديو</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة استراحة</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة شالية</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة شقة</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة قصر</a>
        <a href = "logout.php" tite = "1" class="btn btn-outline-light m-0  p-1">إضافة مكتب</a>

    </div>





    <div class="row row-cols-1 row-cols-md-3 g-4">
<?php

$stmt = $pdo->query('SELECT * FROM villa');
foreach ($stmt as $row)
{  ?>
        <div class="col">
            <div class="card h-100 text-center">
                <img src="img/Villa_Riyadh.jpg" class="card-img-top" alt="فيلا بالرياض للبيع">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['TypeOfOffer'] ; ?>  </h5>
                    <p class="card-text">
                        <i class="bi bi-map"></i>
                      المساحة: <?php echo $row['space'] ; ?>  &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-signpost"></i>  الواجهة: <?php echo $row['diraction'] ; ?>

                        <br>
              عمر العقار: <?php echo $row['Numberofclippers'] ; ?> سنوات           &nbsp;&nbsp;  عدد الشوارع: <?php echo $row['Numberofclippers'] ; ?>
                        <br>
                        عمر العقار: <?php echo $row['Numberofclippers'] ; ?>  سنوات           &nbsp;&nbsp; نوع الغرض:<?php echo $row['TypeOfOffer'] ; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">سعر البيع: <?php echo $row['Numberofclippers'] ; ?> </small>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>
</html>
<!-- start of footer -->
<?php include  "footer.php"; ?>

