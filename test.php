<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


include "conection.php";


if (isset($_POST['submit_form_user'])) {

}


if (isset($_POST['submit_form_add_building'])) {
//    echo "acds";

    //************************************** check  form_space *******************************************



    if (empty($_POST["form_space"]))
    {
        $name_var_Err = "الرجاء كتابة الاسم";
        $_POST["form_space"]='';
    }
    if(filter_has_var(INPUT_POST,'form_space'))
    {

        $space_var = test_input(filter_var($_POST["form_space"],FILTER_SANITIZE_STRING));
    }



    $sql = 'insert into building  (id,space)  values(:itid,:itspace)';

    if (isset($pdo)) {
        $stmt = $pdo->prepare($sql);
    }

    $stmt->execute($r = array('itid' => null, 'itspace' => $space_var));




}


?>