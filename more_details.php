<?php

include "connection";
include "header.php";
include "fun.php";


?>


<!DOCTYPE html>
<html lang="ar">

<head></head>
<body>
<div class="container  text-center">



    <!--ربط مع منتج محدد فله-->
    <?php



    if(isset($_GET['productV']) && !empty($_GET['productV']) && is_numeric($_GET['productV']))
    {


        $sql = "SELECT * from villa WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//
            ':itid' =>$_GET['productV'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductVData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = product_IMG_URL.str_replace(' ','-',strtolower($getproductVData ['productV']))."/".$getproductVData ['imgV'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل فله -->
    <?php if(isset($getproductVData) && is_array($getproductVData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                                <img  src="<?php echo $imgUrl;?>" alt="صوره لتفاصيل فله">
            </div>
            <div class="col-md-7">

                <h1><?php echo "الفله ". $getproductVData['TypeOfOffer']?></h1>
                <p><?php echo $getproductVData['Features']?></p>
                <h4>$<?php echo $getproductVData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductVData['space']; ?></td>
                        <td><?php echo $getproductVData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductVData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductVData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductVData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>



    <!--ربط مع منتج محدد عماره-->
    <?php



    if(isset($_GET['productB']) && !empty($_GET['productB']) && is_numeric($_GET['productB']))
    {
        $sql = "SELECT * from Building WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productB'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductBData = $handle->fetch(PDO::FETCH_ASSOC);
            $imgUrl = productB_IMG_URL.str_replace(' ','-',strtolower($getproductBData ['productB_name']))."/".$getproductBData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل عماره -->
    <?php if(isset($getproductBData) && is_array($getproductBData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="صوره لتفاصيل عماره">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "عماره ". $getproductBData['type_of_offer']?></h1>
                <p><?php echo $getproductBData['Features']?></p>
                <h4>$<?php echo $getproductBData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductBData['space']; ?></td>
                        <td><?php echo $getproductBData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductBData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductBData['type_of_offer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductBData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>




    <!--ربط مع منتج محدد الأرض-->
    <?php



    if(isset($_GET['productL']) && !empty($_GET['productL']) && is_numeric($_GET['productL']))
    {
        $sql = "SELECT * from land WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productL']

        ];
        $handle->execute($params);

        if($handle->rowCount() == 1 )
        {
            $getproductLData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productL_IMG_URL.str_replace(' ','-',strtolower($getproductLData ['productL_name']))."/".$getproductLData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل الأرض  -->
    <?php if(isset($getproductLData) && is_array($getproductLData)){ ?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="صوره تفاصيل الأرض">-->
            </div>
            <div class="col-md-7">


                <h1><?php echo "الأرض  ". $getproductLData['TypeOfOffer']?></h1>
<!--                <p>--><?php //echo $getproductLData['Features']?><!--</p>-->
                <h4>$<?php echo $getproductLData['priceofonemeter']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductLData['space']; ?></td>
                        <td><?php echo $getproductLData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductLData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductLData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductLData['priceofonemeter'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>


    <!--ربط مع منتج محدد فندق-->
    <?php



    if(isset($_GET['productH']) && !empty($_GET['productH']) && is_numeric($_GET['productH']))
    {
        $sql = "SELECT * from hotel WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productH'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductHData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productH_IMG_URL.str_replace(' ','-',strtolower($getproductHData ['productH_name']))."/".$getproductHData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل فندق -->
    <?php if(isset($getproductHData) && is_array($getproductHData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="صوره تفاصيل فندق">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "الفندق ". $getproductHData['TypeOfOffer']?></h1>
<!--                <p>--><?php //echo $getproductHData['Features']?><!--</p>-->
<!--                <h4>$--><?php //echo $getproductHData['price']?><!--</h4>-->

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductHData['space']; ?></td>
                        <td><?php echo $getproductHData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductHData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductHData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductHData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>





    <!--ربط مع منتج محدد محل-->
    <?php



    if(isset($_GET['productSH']) && !empty($_GET['productSH']) && is_numeric($_GET['productSH']))
    {
        $sql = "SELECT * from Shop WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productSH'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductSHData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productSH_IMG_URL.str_replace(' ','-',strtolower($getproductSHData ['productSH_name']))."/".$getproductSHData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل محل -->
    <?php if(isset($getproductSHData) && is_array($getproductSHData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="صوره تفاصيل محل">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "المحل ". $getproductSHData['TypeOfOffer']?></h1>
                <p><?php echo $getproductSHData['Features']?></p>
                <h4>$<?php echo $getproductSHData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductSHData['space']; ?></td>
                        <td><?php echo $getproductSHData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductSHData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductSHData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductSHData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>



    <!--ربط مع منتج محدد المزرعه-->
    <?php



    if(isset($_GET['productF']) && !empty($_GET['productF']) && is_numeric($_GET['productF']))
    {
        $sql = "SELECT * from Farm WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productF'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductFData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productF_IMG_URL.str_replace(' ','-',strtolower($getproductFData ['productF_name']))."/".$getproductFData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل المزرعه -->
    <?php if(isset($getproductFData) && is_array($getproductFData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="صوره تفاصيل المزرعه" >-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "المزرعه ". $getproductFData['Typeofoffer']?></h1>
                <p><?php echo $getproductFData['Features']?></p>
                <h4>$<?php echo $getproductFData['priceofonemeter']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductFData['space']; ?></td>
                        <td><?php echo $getproductFData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductFData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductFData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductFData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>


    <!--ربط مع منتج محدد القصر-->
    <?php



    if(isset($_GET['productC']) && !empty($_GET['productC']) && is_numeric($_GET['productC']))
    {
        $sql = "SELECT * from castle WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productC'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductCData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productC_IMG_URL.str_replace(' ','-',strtolower($getproductCData ['productC_name']))."/".$getproductCData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل القصر -->
    <?php if(isset($getproductCData) && is_array($getproductCData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt=" صوره تفاصيل القصر">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "القصر ". $getproductCData['TypeOfOffer']?></h1>
                <p><?php echo $getproductCData['Features']?></p>
                <h4>$<?php echo $getproductCData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductCData['space']; ?></td>
                        <td><?php echo $getproductCData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductCData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductCData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductCData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>


    <!--ربط مع منتج محدد استيديو-->
    <?php



    if(isset($_GET['productS']) && !empty($_GET['productS']) && is_numeric($_GET['productS']))
    {
        $sql = "SELECT * from Studio WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productS'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductSData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productS_IMG_URL.str_replace(' ','-',strtolower($getproductSData ['productS_name']))."/".$getproductSData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل استيديو -->
    <?php if(isset($getproductSData) && is_array($getproductSData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="  صوره تفاصيل استيديو">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "الأستيديو ". $getproductSData['TypeOfOffer']?></h1>
                <p><?php echo $getproductSData['Features']?></p>
                <h4>$<?php echo $getproductSData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductSData['space']; ?></td>
                        <td><?php echo $getproductSData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductSData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductSData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductSData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>

    <!--ربط مع منتج محدد الشاليه-->
    <?php



    if(isset($_GET['productW']) && !empty($_GET['productW']) && is_numeric($_GET['productW']))
    {
        $sql = "SELECT * from Studio WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productW'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductWData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productW_IMG_URL.str_replace(' ','-',strtolower($getproductWData ['productW_name']))."/".$getproductWData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل الشاليه -->
    <?php if(isset($getproductWData) && is_array($getproductWData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt=" صوره تفاصيل الشاليه">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "الشاليه ". $getproductWData['TypeOfOffer']?></h1>
                <p><?php echo $getproductWData['Features']?></p>
                <h4>$<?php echo $getproductWData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductWData['space']; ?></td>
                        <td><?php echo $getproductWData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductWData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductWData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductWData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>



    <!--ربط مع منتج محدد الإستراحه-->
    <?php



    if(isset($_GET['productD']) && !empty($_GET['productD']) && is_numeric($_GET['productD']))
    {
        $sql = "SELECT * from diwaniyah WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productD'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductDData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productD_IMG_URL.str_replace(' ','-',strtolower($getproductDData ['productD_name']))."/".$getproductDData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل الإستراحه -->
    <?php if(isset($getproductDData) && is_array($getproductDData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt=" صوره تفاصيل الإستراحه ">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "الإستراحه ". $getproductDData['TypeOfOffer']?></h1>
                <p><?php echo $getproductDData['Features']?></p>
                <h4>$<?php echo $getproductDData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductDData['space']; ?></td>
                        <td><?php echo $getproductDData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductDData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductDData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductDData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>



    <!--ربط مع منتج محدد الشقه-->
    <?php



    if(isset($_GET['productA']) && !empty($_GET['productA']) && is_numeric($_GET['productA']))
    {
        $sql = "SELECT * from Apartment WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productA'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductAData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productA_IMG_URL.str_replace(' ','-',strtolower($getproductAData ['productA_name']))."/".$getproductAData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل الشقه -->
    <?php if(isset($getproductAData) && is_array($getproductAData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt=" صوره تفاصيل الشقه">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "الشقه ". $getproductAData['TypeOfOffer']?></h1>
                <p><?php echo $getproductAData['Features']?></p>
                <h4>$<?php echo $getproductAData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductAData['space']; ?></td>
                        <td><?php echo $getproductAData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductAData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductAData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductAData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>


    <!--ربط مع منتج محدد المكتب-->
    <?php



    if(isset($_GET['productO']) && !empty($_GET['productO']) && is_numeric($_GET['productO']))
    {
        $sql = "SELECT * from desk WHERE  id =:itid";
        $handle = $pdo->prepare($sql);
        $params = [
//            ':featured'=>1,
            ':itid' =>$_GET['productO'],
        ];
        $handle->execute($params);
        if($handle->rowCount() == 1 )
        {
            $getproductOData = $handle->fetch(PDO::FETCH_ASSOC);
//            $imgUrl = productO_IMG_URL.str_replace(' ','-',strtolower($getproductOData ['productO_name']))."/".$getproductOData ['img'];
        }
        else
        {
            $error = '404! No record found';
        }

    }

    //    include('layouts/header.php');

    ?>
    <!--عرض التفاصيل المكتب -->
    <?php if(isset($getproductOData) && is_array($getproductOData)){?>
        <div class="row mt-3">
            <div class="col-md-5">
                <!--                <img src="--><?php //echo $imgUrl;?><!--" alt="  صوره تفاصيل المكتب ">-->
            </div>
            <div class="col-md-7">

                <h1><?php echo "المكتب ". $getproductOData['TypeOfOffer']?></h1>
                <p><?php echo $getproductOData['Features']?></p>
                <h4>$<?php echo $getproductOData['price']?></h4>

                <table class="table table-striped overflow-scroll m-0 p-0 ">

                    <thead>
                    <tr>
                        <th scope="col">المساحة</th>
                        <th scope="col">الواجهة</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $getproductOData['space']; ?></td>
                        <td><?php echo $getproductOData['diraction']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">عمر العقار</th>
                        <th scope="col">نوع الغرض</th>
                    </tr>
                    <tr>
                        <td><?php echo $getproductOData['AgeOfProperty']; ?></td>
                        <td><?php echo $getproductOData['TypeOfOffer']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">
                            <?php
                            echo ' السعر:   ' . number_format($getproductOData['price'], 2, ",", ".");
                            ?></th>

                    </tr>

                    </tbody>
                </table>

            </div>
        </div>


        <?php
    }
    ?>


</div>
</body>
</html>

<?php
include "footer.php";

?>