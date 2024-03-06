<?php
    class Product{
        public $product_id;
        public $product_name;
        public $product_desc;
        public $product_price;
        public $product_image;
        public $product_quanlity;

        function __construct($product_id, $product_name, $product_desc, $product_price, $product_image, $product_quanlity) {
            $this->product_id = $product_id;
            $this->product_name = $product_name;
            $this->product_desc = $product_desc;
            $this->product_price = $product_price;
            $this->product_image = $product_image;
            $this->product_quanlity = $product_quanlity;
        }

        static function getAll() {
            $list = [];
            $db = DBConnection::getInstance();
            $req = $db->query('SELECT * FROM products');

            foreach ($req->fetchAll() as $item) {
                $list[] = new Product($item['product_id'], $item['product_name'], $item['product_desc'], $item['product_price'], $item['product_image'], $item['product_quanlity'] );
            }

            return $list;
        }

        static function find($id) {
            $db = DBConnection::getInstance();
            $req = $db->prepare('SELECT * FROM products WHERE product_id = :product_id');
            $req->execute(array('product_id' => $id));

            $item = $req->fetch();
            if (isset($item['product_id'])) {
                return new User($item['product_id'], $item['product_name'], $item['product_desc'], $item['product_price'], $item['product_image'], $item['product_quanlity'] );
            }
            return null;
        }
        static function insert($name, $email){
            $db = DBConnection::getInstance();
            $req = $db->prepare('INSERT INTO products(product_name, product_desc, product_price, product_image, product_quanlity) VALUES(:product_name, :product_desc, :product_price, :product_image, :product_quanlity)');
            $re = $req->execute(array('product_name' => $product_name, 'product_desc' => $product_desc, 'product_price' => $product_price, 'product_image' => $product_image,'product_quanlity' => $product_quanlity));
            if ($re) {
                return "Insert OK!";
            } 
            return "Insert not OK"; 
        }
        // static function login($email){
        //     $db=DBConnection::getInstance();
        //     $req = $db->prepare('SELECT * FROM users WHERE email= :email');
        //     $req->execute(array('email' => $email));
        //     $item = $req->fetch();
        //     if(isset($item['email'])){
        //         session_start();
        //         $_SESSION['name']=$item['name'];
        //         header('location:http://localhost:8888/mvcdemo/views/users/welcome.php
        //     ');
      
        //     // return new User($item['id'],$item['name'],$item['email']);
        //     }
      
        //     return "Email is not exist!";
        // }
    }

?>