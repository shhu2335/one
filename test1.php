


<?php


include "config.php";
include 'header.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*session_start();
    $name = 'huss';
    $name ='shuq';
    $_SESSION['USER'] = $name;


$_SESSION['ss'] = 'hussam';

*/
$phoneNO = $pdo->escape_string($_POST["phoneNO"]);
    $result  = $pdo->query("SELECT * FROM customer WHERE Customer_num ='$phoneNO' Limit 1");
    if($result->num_rows == 0) { // use doesnt exist!
        $erorr = "رقم الجوال أو كلمة المرور غير صحيح ";
        // header("location:error.php");
    }
    else{// User exists

     $user = $result->fetch_assoc();

/* @var $_POST type                */
        if(password_verify($_POST['Pwd'] , $user['CustomerPwd']) ) {

        $_SESSION['admin'] = $user['admin'];
        $_SESSION['phoneNO'] = $user['Customer_num'];
        $_SESSION['CustomerID']= $user['CustomerID'];
        $_SESSION['Name']= $user['CustomerName'];
        $_SESSION['Block']= $user['Block'];
        $_SESSION['CustomerTown']= $user['CustomerTown'];

        $_SESSION['logged_in'] = true;
        header("Location:home.php");
     }
     else {
        $erorr = "رقم الجوال أو كلمة المرور غير صحيح ";
//        $_SESSION['logged_in'] = false;
        // header("location:error.php");
     } }


/*
echo $name;
echo $_SESSION["USER"]." - -  - ".$_SESSION['ss'] ;
*/

