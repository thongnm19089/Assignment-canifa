

<?php
  //Gọi file db_connection.php
  require_once('db_connection.php');

  //  được dùng để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ của máy tính hay chưa, 
  // nếu nó đã khởi tạo (tồn tại) thì sẽ trả về TRUE và ngược lại sẽ trả về FALSE.
  if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
      $action = $_GET['action'];
    } else {
      $action = 'index';
    }
  } else {
    $controller = 'pages';
    $action = 'home';
  }
  require_once('routes.php');
?>