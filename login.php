<?php


include "connection.php";
include "fun.php";
    if (isset($_POST['submit_form_login'])){
    // *********************    username   ***********************************
    if (empty($_POST["form_user_name"])){
        $var_user_name_err = "الرجاء كتابة اسم المستخدم";
        $_POST["form_user_name"]='';
    }
    if (filter_has_var(INPUT_POST, 'form_user_name')) {
        $var_user_name=test_input(filter_var($_POST['form_user_name'], FILTER_SANITIZE_STRING));
    }


    // *********************    password   ************************************
    if (empty($_POST["form_password"])){
        $var_password_err = "الرجاء كتابة كلمة المرور";
        $_POST["form_password"] = '';
    }
    if (filter_has_var(INPUT_POST, 'form_password')) {
        $var_password=test_input(filter_var($_POST["form_password"], FILTER_SANITIZE_STRING));
    }


    if (isset($pdo)){
        $user = $pdo->prepare('select *  from  user  where usernmae = :usernmae ');

        $user->execute(['usernmae' => $var_user_name ]);
        //$user->fetch(PDO::FETCH_ASSOC);
        $data = $user->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row) {
            // echo $row['usernmae'];
            // echo $row['password'];
            //do whatever you want with the row
        }

        $count = $user->rowcount();
        if ($count === 0) {
            $message_user_not_found = "أسم المستخدم أو كلمة المرور غير صحيحة";
        }
        else{
            if (password_verify($var_password, $row["password"])) {
                session_regenerate_id();
                $_SESSION['name']        = $row['name'];
                $_SESSION['id']          = $row['id'];
                $_SESSION['password']    = $row['password'];
                $_SESSION['email']       = $row['email'];
                $_SESSION['phone_number'] = $row['phone_number'];
                $_SESSION['username']    = $row['username'];
                $_SESSION['logged_in']   = true;
                header("location:index.php");
            }
            else{
                $message_user_not_found = "أسم المستخدم أو كلمه المرور غير صحيحه";
            }
        }
    } //   if (isset($pdo)){
}
?>

<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php include  "header.php"; ?>

<div class="container-fluid P-0 huss" >

    <div class="mx-auto  mt-5 mb-5  p-3 bg-white  shadow border border-1  bg-gradient  rounded-3 text-secondary" style="width: 350px;" >
        <h4 class="card-title mb-2 py-2 text-center fs-3 bg-primary text-white rounded-3">تسجيل دخول</h4>
        <form class="row p-2 m-0  row-cols-1"    method="post"    action="login.php">

            <div class="m-0 p-0">
                <label for="form_user_name"  class="form-label p-2 m-0">اسم المستخدم</label>

                <input type="text" value="<?php   if (isset($var_user_name) ){  echo $var_user_name;}?>"

                       class="form-control"   id="form_user_name"  name="form_user_name">
                <label for="username_form"  class="alert- alert-danger my-1 px-2   rounded-3">
                    <?php   if (isset($var_user_name_err)) {
                        echo $var_user_name_err;
                    }
                    ?>
                </label>

            </div>
            <div class="col m-0 p-0">
                <label for="form_password" class="form-label m-0 p-0">كلمة المرور</label>
                <input type="password" class="form-control " id="form_password" name="form_password">
                <label for="form_password"  class="lert- alert-danger my-1 px-2   rounded-3">
                    <?php
                    if (isset($var_password_err)) {
                        echo $var_password_err;
                    }
                    ?>
                </label>
            </div>

            <div class="col m-0 p-0">
                <label for="username_form"   class="form-label m-0 p-0">      </label>
                <button type="submit"  class="btn btn-primary bg-gradient text-white mb-3 form-control" name="submit_form_login">دخول</button>
            </div>

        </form>
        <hr>
        <div class="col mx-auto text-center  mb-3 ">
            <a class="link-primary m-0 text-decoration-none" href="register.php">ليس لديك حساب؟  سجل الان</a>
        </div>

        <div class="col mx-auto text-center  my-2 ">
            <a class="link-primary text-decoration-none " href="ForGetPassword.php">نسيت كلمة المرور؟</a>
        </div>

    </div>

</div>

<?php include "footer.php"; ?>

</body>
</html>
