<?php
    class User{
        public $users_id;
        public $users_name;
        public $users_email;
        public $users_password;
        public $repeat_password;

        function __construct($users_id, $users_name, $users_email, $users_password, $repeat_password) {
            $this->users_id = $users_id;
            $this->users_name = $users_name;
            $this->users_email = $users_email;
            $this->users_password = $users_password;
            $this->repeat_password = $repeat_password;
        }

        static function getAll() {
            $list = [];
            $db = DBConnection::getInstance();
            $req = $db->query('SELECT * FROM users');

            foreach ($req->fetchAll() as $item) {
            $list[] = new User($item['users_id'], $item['users_name'], $item['users_email']);
            }

            return $list;
        }

        static function find($users_id) {
            $db = DBConnection::getInstance();
            $req = $db->prepare('SELECT * FROM users WHERE users_id = :users_id');
            $req->execute(array('users_id' => $users_id));

            $item = $req->fetch();
            if (isset($item['users_id'])) {
                return new User($item['users_id'], $item['users_name'], $item['users_email']);
            }
            return null;
        }
        static function insert($users_name, $users_email, $hashed_passcode, $hashed_passcode1){
            $db = DBConnection::getInstance();
            $req = $db->prepare('INSERT INTO users(users_name, users_email, users_password, repeat_password, users_status) VALUES(:users_name, :users_email, :users_password, :repeat_password, 1)');
            $re = $req->execute(array('users_name' => $users_name, 'users_email' => $users_email, 'users_password' => $hashed_passcode, 'repeat_password' => $hashed_passcode1 ));
            if ($re) {
                return "Insert OK!";
            } 
            return "Insert not OK"; 
        }
        static function login($users_email,$users_password){
            $db=DBConnection::getInstance();
            $req = $db->query('SELECT * FROM users WHERE users_email = "'.$users_email.'" ');
            // echo $users_password;
            $item = $req->fetch();
            // echo 'Pass hashedcode: '.$item['users_password'];
            if(isset($item['users_email']) &&  $item['users_password'] == $users_password){
              
                session_start();
                $_SESSION['users_name']=$item['users_name'];
                $_SESSION['users_id']=$item['users_id'];
                $_SESSION['users_email']=$item['users_email'];
                $_SESSION['users_status']=$item['users_status'];
                // header('location: views/users/welcome.php');
                return $item;
                  // return new User($item['users_id'],$item['users_name'],$item['users_email']);
            }else{
              return "Email or Password is incorrect!!!";
            }
        
            
          }
    }

?>