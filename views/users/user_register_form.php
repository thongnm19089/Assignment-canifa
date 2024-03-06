    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo $result; 
        echo '<br>--------------------';
    }
    ?>
    <div class = "form-signup">
        <form name="formpass" action="" method="post" onsubmit="return matchpass()">
            <div class = "container-signup">
                <div class="main-signup">
                    <div class = "container-main">
                        <div class="title">
                            <h2>Đăng ký</h2>
                        </div>
                        <div class="monkey-grid form-main-login"  id="registerbtn">
                            <div class = "grid-item monkey-name">
                                <label for="uname"><b>Họ và tên</b><span class="required-red"> </span></label>
                                <input type="text" placeholder="" id ="name_register" name="users_name" onblur =" return(Checktendangnhap(event, 3, 20))" required>  
                                <span id ="nameerror" name = "nameerr"></span>
                            </div>
                            <div class = "grid-item monkey-email">
                                <label for="email"><b>Email</b><span class="required-red"> </span></label>
                                <input type="email" placeholder="" id = "email_register" name="users_email" onblur =" return(Checkemail(this.value))" onblur =" return(Checkemail(event))" maxlength="60" required
                                value="<?php if (isset($_POST['email'])) echo $_POST['users_email']; ?>">
                                <span id ="mailerror" name = "mailerr"></span>
                            </div>                
                            <div class = "grid-item monkey-password">
                                <label for="psw"><b>Mật khẩu</b><span class="required-red"> </span></label>
                                <input type="password" placeholder="" id = "pass_register" name="users_password" onblur =" return(Checkpassword(event)) minlength="6" maxlength="15" required
                                value="<?php if (isset($_POST['password'])) echo $_POST['users_password']; ?>">
                                <span id ="passerror" name = "passerr"></span>
                            </div>
                            <div class = "grid-item monkey-password">
                                <label for="psw-repeat"><b>Nhập lại mật khẩu</b><span class="required-red"> *</span></label>
                                <input type="password" placeholder="" id = "re_pass_register" name="repeat_password" required
                                value="<?php if (isset($_POST['password'])) echo $_POST['repeat_password']; ?>">
                                <span id ="repasserror" name = "repasserr"></span>
                            </div>
                        
                        </div>
                        <div class="signup-account signup">
                            <p>Bạn có tài khoản rồi quay lại để đăng nhập?<a href="<?php $_SERVER['PHP_SELF']?>?controller=users&action=loginUser"> Đăng nhập</a>.</p>
                        </div>
                        <!-- <div class="submit-login"> -->
                        <input type="submit" id = "btnDangKy"  value="Đăng ký">
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </form>             
        <div class = "card-tv">
            <img src="./assets/image/Namecard.png" alt="image" class = "img-fluid">
            <img src="./assets/image/Wave.png" alt="image" class = "img-fluid">
        </div>
    </div>
