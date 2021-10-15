<?php
//<select>
//<option value="">الكل</option><option value="الرياض">الرياض</option><option value="الخرج">الخرج</option><option value="الدرعية">الدرعية</option><option value="الدلم">الدلم</option><option value="الدوادمي">الدوادمي</option><option value="الحريق">الحريق</option><option value="الزلفي">الزلفي</option><option value="السليل">السليل</option><option value="الغاط">الغاط</option><option value="القويعية">القويعية</option><option value="المجمعة">المجمعة</option><option value="المزاحمية">المزاحمية</option><option value="الهياثم">الهياثم</option><option value="ثادق">ثادق</option><option value="حوطة بني تميم">حوطة بني تميم</option><option value="رماح">رماح</option><option value="شقراء">شقراء</option><option value="عفيف">عفيف</option></select>
//?>
<?php
include "conection.php";
include "header.php"
//include "header.php";
//if (! empty($_SESSION['logged_in']))
//{
?>
<!DOCTYPE html>
<html lang="ar">

<head>


    <!--        <meta charset="utf-8">-->
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->
    <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom style to prevent carousel from being distorted
           if for some reason image doesn't load */
        .carousel-item{
            min-height: 280px;
        }
    </style>
</head>

<body>

<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>Bootstrap Carousel</title>-->
<!---->
<!--</head>-->
<!--<body>-->
<!--<img name="slide" class="w-100"  height="200" />-->
<!--<script>-->
<!--    var i = 0; 			// Start Point-->
<!--    var images = [];	// Images Array-->
<!--    var time = 4000;	// Time Between Switch-->
<!---->
<!--    // Image List-->
<!--    images[0] = "http://lorempixel.com/400/200/animals";-->
<!--    images[1] = "http://lorempixel.com/400/200/sports";-->
<!--    images[2] = "http://lorempixel.com/400/200/food";-->
<!--    images[3] = "http://lorempixel.com/400/200/people";-->
<!---->
<!--    // Change Image-->
<!--    function changeImg(){-->
<!--        document.slide.src = images[i];-->
<!---->
<!--        // Check If Index Is Under Max-->
<!--        if(i < images.length - 1){-->
<!--            // Add 1 to Index-->
<!--            i++;-->
<!--        } else {-->
<!--            // Reset Back To O-->
<!--            i = 0;-->
<!--        }-->
<!---->
<!--        // Run function every x seconds-->
<!--        setTimeout("changeImg()", time);-->
<!--    }-->
<!---->
<!--    // Run function when page loads-->
<!--    window.onload=changeImg;-->
<!--</script>-->

</body>
</html>