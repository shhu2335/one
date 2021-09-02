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


<body>
<div class="container p-1 mb-5">
    <div class="bg-transparent  my-1 py-3 mb-1 text-center">
        <a href="addhotal.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة فندق</a>
        <a href="addvilla.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة فلة</a>
        <a href="addbuilding.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة عمارة</a>
        <a href="addshop.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة محل</a>
        <a href="addland.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة أرض</a>
        <a href="addfarm.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة مزرعة</a>
        <a href="logout.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة استديو</a>
        <a href="logout.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة استراحة</a>
        <a href="dianiyah.php" tite="1" class="btn btn-outline-light m-0 fw-lighter p-1">إضافة شالية</a>
        <a href="apartment.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة شقة</a>
        <a href="addCastle.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة قصر</a>
        <a href="addoffice.php" tite="1" class="btn btn-outline-light m-1 fw-lighter p-1">إضافة مكتب</a>
    </div>

    <button type="button" class="btn btn-warning bg-gradient position-relative  my-auto mb-4">
        عمائر
        <svg width="1em" height="1em" viewBox="0 0 16 16"
             class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
    </button>

    <div class="row d-flex row-cols-md-12 row-cols-sm-4  g-3  align-items: center  justify-content: center">

        <?php

        $stmt = $pdo->query('SELECT * FROM villa');
        foreach ($stmt as $row) { ?>
            <div class="col">
                <div class="card h-200 text-center">

                    <!--  8888888888888888888888888   -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Villa_Riyadh.jpg" class="d-block w-100" alt="فيلا بالرياض للبيع">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hussam.PNG" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hussam.PNG" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!--  8888888888888888888888888   -->

                    <h5 class="card-title bg-gradient p-1 m-0"><?php echo $row['TypeOfOffer']; ?>  </h5>
                    <div class="card-body p-0 m-0">
                        <table class="table table-striped overflow-scroll m-0 p-0 ">
                            <thead>
                            <tr>
                                <th scope="col">المساحة</th>
                                <th scope="col">الواجهة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $row['space']; ?></td>
                                <td><?php echo $row['diraction']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">عمر العقار</th>
                                <th scope="col">نوع الغرض</th>
                            </tr>
                            <tr>
                                <td><?php echo $row['Numberofclippers']; ?></td>
                                <td><?php echo $row['TypeOfOffer']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col"><?php
                                    echo ' السعر:   ' . number_format($row['Numberofclippers'], 2, ",", ".");
                                    ?></th>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <!--                    <div class="card-footer">-->
                    <!--                        <small class="text-muted"></small>-->
                    <!--                    </div>-->
                </div>
            </div>
        <?php } ?>

    </div>
</div>
</body>
</html>
<!-- start of footer -->
<?php include "footer.php"; ?>
