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

