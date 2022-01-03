
<?php
include "connection.php";
include "header.php";
//if (! empty($_SESSION['logged_in']))
//{
?>
<!-- start of header -->
<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="row pt-5">
    <aside class="col-md-6 mx-auto">

        <!-- ============================ COMPONENT SIGNUP ================================= -->
        <div class="card">
            <article class="card-body">

                <form>
                        <div class="col-md-4">
                            <label>الاسم الاول</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    <div class="col-md-4">
                            <label>اللقب</label>
                            <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->

                    <div class="col-md-4">
                        <label>الأيميل</label>
                        <input type="email" class="form-control" placeholder="">
                        <small class="form-text text-muted">لن نشارك بريدك الإلكتروني مع أي شخص آخر.</small>
                    </div> <!-- form-group end.// -->

                    <div class="col-md-4">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                            <span class="custom-control-label"> ذكر </span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="gender" value="option2">
                            <span class="custom-control-label"> أنثى </span>
                        </label>

                    </div> <!-- form-group end.// -->
                    <div class="col-md-4">
                            <label>المدينة</label>
                            <input type="text" class="form-control">
                        </div> <!-- form-group end.// -->

                    <div class="col-md-4">
                            <label>الدولة</label>
                            <select id="inputState" class="form-control">
                                <option> اختار...</option>
                                <option>أوزبكستان</option>
                                <option>الولايات المتحدة</option>
                                <option selected="">السعودية</option>
                                <option>India</option>
                                <option>Afganistan</option>
                            </select>

                        <div class="form-group col-md-6">
                            <label>أنشاء كلمة المرور</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <label>أعد كلمةالمرور</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// -->
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary btn-block"> تسجيل  </button>
                    </div> <!-- form-group// -->
                    <p class="text-muted">بالنقر فوق الزر "تسجيل" ، فإنك تؤكد قبولك لشروط الاستخدام وسياسة الخصوصية الخاصة بنا.</p>
                </form>
                <hr>
                <p class="text-center">لديك حساب؟ تسجيل دخول? <a href="">تسجيل دخول</a></p>
            </article> <!-- card-body end .// -->
        </div> <!-- card.// -->
</div> <!-- form-group end.// -->
</div> <!-- form-row.// -->
        <!-- ============================ COMPONENT SIGNUP  END .// ================================= -->

    </aside>
    <aside class="col-md-6 d-none">

        <!-- ============================ COMPONENT SIGNUP 2  ================================= -->
        <div class="card">
            <article class="card-body">
                <header class="mb-4">
                    <h4 class="card-title">Sign up</h4>
                </header>
                <form class="block-register">
                    <div class="form-group form-row">
                        <label class="col-md-3 col-form-label">I am a</label>
                        <div class="col-sm-9 pt-1">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" checked="" type="radio" name="account_type" value="option1">
                                <span class="custom-control-label"> Buyer </span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="account_type" value="option2">
                                <span class="custom-control-label"> Seller </span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="account_type" value="option3">
                                <span class="custom-control-label"> Both </span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-3 col-form-label">Full name</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>


                    <div class="form-group form-row">
                        <label class="col-md-3 col-form-label">Phone</label>
                        <div class="col-9">
                            <div class="input-group">
                                <select class="custom-select" style="max-width: 120px;">
                                    <option selected="">UZ +971</option>
                                    <option value="1">AE +971</option>
                                    <option value="2">US +1</option>
                                    <option value="3">RU +7</option>
                                </select>
                                <input name="" class="form-control" placeholder="Phone number" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" placeholder="Ex. john@gmail.com">
                        </div>
                    </div>


                    <div class="form-group form-row">
                        <label class="col-md-3 col-form-label">Address</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="col">
                            <select class="custom-select form-control">
                                <option>Country</option>
                                <option>United states</option>
                                <option>Germany</option>
                                <option>Canada</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3"> </label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Street, Building">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-6">
                            <input type="password" class="form-control mb-3" placeholder="Create password">
                            <input type="password" class="form-control" placeholder="Repeat password">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-sm-9 offset-sm-3">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <div class="custom-control-label" for="customCheck1">I agree with <a href="#" target="_blank">terms and conditions</a></div>
                            </label>

                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>

                </form>
            </article> <!-- card-body end .// -->
            <div class="card-footer text-center">Have an account? <a href="">Log In</a></div>
        </div> <!-- card.// -->
        <!-- ============================ COMPONENT SIGNUP 2 END.// ================================= -->
    </aside>
</div>
</div>

</body>
</html>
