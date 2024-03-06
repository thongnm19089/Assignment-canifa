<?php
class DBConnection {
    private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=localhost;port=8890;dbname=onlineshop', 'root', 'root');
          self::$instance->exec("SET NAMES 'utf8'");
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }
      return self::$instance;
    }
}
?>