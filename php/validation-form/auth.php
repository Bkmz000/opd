<?php

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);



    $pass = md5($pass."fdfdfd");



    require "../blocks/connect-bd.php";



    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");



    $user = $result->fetch_assoc();

        

    if ($user == '') {

        echo "Нету";

        exit();

    }



    setcookie('user', $user['id'], time() + 3600 * 2, "/");

    $mysql->close();



    header('Location: /home.html');

    

     

?>