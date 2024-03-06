<?php
    require_once('controllers/base_controller.php');
    require_once('models/user.php');

    class UsersController extends BaseController {
        function __construct() {
            $this->folder = 'users';
        }

        public function index() {
            $users = User::getAll();
            $data = array('users' => $users);
            $this->render('index', $data);
        }

        public function showUser() {
            $user = User::find($_GET['id']);
            $data = array('user' => $user);
            $this->render('user_details', $data);
        }
        public function insertUsers(){
            $result = [];
            if(isset($_POST['users_name']) && isset($_POST['users_email']) && isset($_POST['users_password']) && isset($_POST['repeat_password']))
            {
                $hashed_passcode = md5($_POST['users_password']); 
                $hashed_passcode1 = md5($_POST['repeat_password']);
                $result = User::insert($_POST['users_name'], $_POST['users_email'], $hashed_passcode, $hashed_passcode1);
            }
            $data = array('result' => $result);
            $this->render('user_register_form', $data);
        }

        public function loginUser()
        {
            $result = [];
            if(isset($_POST['users_email']) && isset($_POST['users_password']))
            {
                $hashed_passcode = md5($_POST['users_password']); 
                $result = User::login($_POST['users_email'], $hashed_passcode);
            }
            $data = array('result' => $result);
            $this->render('user_login_form', $data);
        }

    }
?>