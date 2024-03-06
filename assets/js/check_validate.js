/////////////form-validate/////////////
function validate_form_register() {


}

function Checktendangnhap(event, min, max) {

    event.preventDefault();

    var mess = document.getElementById("nameerror");

    var username = document.getElementById("name_register").value;

    if (username == '') {
        // username.css('background-color', 'yellow');
        mess.innerHTML = 'Tên đăng nhập ko được để trống ';
        return false;
    } else if ((username.length > 0 && username.length < min) || username.length > max) {
        mess.innerHTML = '';
        mess.innerHTML = 'Tên đăng nhập từ 3-20 kí tự';
        return false;

    } else {

        mess.innerHTML = '';
        return true;

    }
}

function Checkpassword(event) {

    event.preventDefault();

    var pass = document.getElementById("pass_register").value;
    var repass = document.getElementById("re_pass_register").value;
    var mess = document.getElementById("passerror");
    var remess = document.getElementById("repasserror");
    if (pass == '' || pass == null) {
        mess.innerHTML = 'Mật khẩu ko được để trống ';
        return false;
    } else {
        if (repass == '' || repass == null) {
            remess.innerHTML = 'Nhập lại mật khẩu!';
        } else {
            if (pass != repass) {
                remess.innerHTML = '';
                remess.innerHTML = 'Password must be same !';
                return false;

            }
            remess.innerHTML = '';


        }
        mess.innerHTML = '';
        return true;
    }
}

function Checkemail(event) {
    event.preventDefault();

    var mess = document.getElementById("mailerror");
    var messerror = $("#mailerror");
    var email = document.getElementById("email_register").value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    if (atposition < 1 || dotposition < (atposition + 2) ||
        (dotposition + 2) >= email.length) {
        // alert('!!!!!!!!!!!');
        // email.css('backgroundColor','yellow') ;

        messerror.text("Email nhập sai định dạng");
        // alert('@@@@@@@@@@22');
        return false;
    } else {
        // email.style.backgroundColor = '';
        mess.innerHTML = '';
        return true;
    }
}

var registerbtn = document.getElementById("registerbtn");

registerbtn.onclick = function Validate() {

    //Mặc định các lỗi này sẽ ẩn

    var mess_ername = document.getElementById("name_register");
    var mess_eremail = document.getElementById("email_register");
    var mess_erpass = document.getElementById("pass_register");
    var mess_errepass = document.getElementById("re_pass_register");

    mess_ername.innerHTML = '';
    mess_eremail.innerHTML = '';
    mess_erpass.innerHTML = '';
    mess_errepass.innerHTML = '';

    //Gọi các hàm đã viết

    Checktendangnhap(event, 3, 20);

    Checkpassword(event);

    Checkemail(event);
    let formElement = document.querySelector('#form_register');
}