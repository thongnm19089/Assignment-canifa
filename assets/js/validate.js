function validateForm() {
    // Bước 1: Lấy giá trị của username và password
    var username = document.getElementById('users_name').value;
    var password = document.getElementById('users_password').value;

    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
    if (username == '') {
        alert('Bạn chưa nhập tên đăng nhập');
    } else if (password == '') {
        alert('Bạn chưa nhập mật khẩu');
    } else {
        alert('Dữ liệu hợp lệ, ta có thể chấp nhận submit form');
        return true;
    }

    return false;
}

// check nhập lại mật khẩuy
function matchpass() {
    var firstpassword = document.formpass.users_password.value;
    var secondpassword = document.formpass.repeat_password.value;

    if (firstpassword == secondpassword) {
        return true;
    } else {
        alert("password must be same!");
        return false;
    }
}

