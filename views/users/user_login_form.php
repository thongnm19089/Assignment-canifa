<head>
<link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="shortcut icon" href="./assets/image/favicon.ico">   
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
<?php 
    if (isset($_SESSION['users_email'])) {
        $name = $_SESSION['users_name'];
        $email = $_SESSION['users_email'];
        echo "Welcome $name".'<br>'.$email;
    }
    else {
        echo "Get away";
    }
    ?>

    <form name="form_signin" action="" method="post" onsubmit="return validateForm()">
        <div class = "form-login">
            <div class = "container-login">
                <div class="main-login">
                    <div class = "container-main">
                        <div class="title">
                            <h2>Đăng nhập</h2>
                        </div>
                            <div class="monkey-grid form-main-login" >
                                <div class = "grid-item login-email">
                                    <label for="uname"><b>Email</b><span class="required-red"> </span></label>
                                    <input type="email" placeholder="" id="email_register" name="users_email" required>
                                </div>
                                <div class = "grid-item login-password">
                                    <label for="psw"><b>Mật khẩu</b><span class="required-red"> </span></label>
                                    <input type="password" placeholder="" id="pass_register" name="users_password" minlength="6" maxlength="15" required>
                                </div>
                            </div>
                            <div class="register-account signin">
                                <p>Bạn chưa có tài khoản hãy tạo cho mình một tài khoản?<a href="<?php $_SERVER['PHP_SELF']?>?controller=users&action=insertUsers"> Đăng Ký</a>.</p>
                            </div>
                            <!-- <div class="submit-login"> -->
                            <input type="submit" id ="btnDangNhap" value="Đăng nhập">
                            <!-- </div> -->
                        
                    </div>
                </div>
            </div>
           
        </div>
    </form>
    <div class = "card-tv">
        <img src="./assets/image/Namecard.png" alt="image" class = "img-fluid">
        <img src="./assets/image/Wave.png" alt="image" class = "img-fluid">
    </div>

    </head>
