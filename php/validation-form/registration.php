<?php

    //Считываем данные с полей input

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);

    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);

    $surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);

    //Считываем пароль и хешируем его

    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    $pass = md5($pass."fdfdfd");

    

    //Подключаем таблицу
    
    require "../blocks/connect-bd.php";

    

    //Вносим данные в таблицу с форм регистрации

    $mysql->query("INSERT INTO `users` (`login`, `name`, `pass`,`surname`) VALUES ('$login','$name','$pass','$surname')");

    

    //Устанавливаем куки по id из таблицы и закрываем таблицу

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();

    



    setcookie('user', $user['id'], time() + 3600 * 2, "/");

    $mysql->close();



    //Переносим пользователя на home.html

    header('Location: /home.html');

?>