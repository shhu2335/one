<?php


include "conection.php";

//Check that username is not already in use, if it is return an error.
try{
    $stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
    $stmt->bindParam(':username', decrypt($username));
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $exception){
logme($result['uid'],time(),"PDOException","SELECT username FROM users WHERE username=:username","Error", $exception, "n/a");}

if ($stmt->rowCount() > 0) {
    $error=true;
    return "12";
}


?>





?>