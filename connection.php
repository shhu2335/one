<?php
if (!isset($_SESSION)) {
    session_start();
}
//
//if (!isset($_SESSION['loggedin'])) {
////    header("Location: login.php");
////    exit;
//}

$host = 'localhost';
$db = 'one';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);

//    define('PRODUCT_IMG_URL','assets/product-images/');

} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());

}



?>
