<?php

    //Считываем выбранные профессии из списка
    $firstQuality = filter_var(trim($_POST['firstQuality']),FILTER_SANITIZE_STRING);
    $secondQuality = filter_var(trim($_POST['secondQuality']),FILTER_SANITIZE_STRING);
    $thirdQuality = filter_var(trim($_POST['thirdQuality']),FILTER_SANITIZE_STRING);
    $fourthQuality = filter_var(trim($_POST['fourthQuality']),FILTER_SANITIZE_STRING);
    $fifthQuality = filter_var(trim($_POST['fifthQuality']),FILTER_SANITIZE_STRING);
    
    //Собираем куки юзера
    $user = $_COOKIE['user'];

    //Плдключаем бд
    require "../blocks/connect-bd.php";

    //Высчитываем коэф. компетентности юзера
    $coefficient = $mysql->query("SELECT `coefficient` FROM `users` WHERE `id` = '$user'");
    $result = $coefficient->fetch_assoc();

    //Считываем предыдущие значения importance для профессий
    $previousPointForFIrst = $mysql->query("SELECT `importance` FROM `qualities` WHERE `quality` = '$firstQuality'");
    $previousPointForSecond = $mysql->query("SELECT `importance` FROM `qualities` WHERE `quality` = '$secondQuality'");
    $previousPointForThird = $mysql->query("SELECT `importance` FROM `qualities` WHERE `quality` = '$thirdQuality'");
    $previousPointForFourth = $mysql->query("SELECT `importance` FROM `qualities` WHERE `quality` = '$fourthQuality'");
    $previousPointForFifth = $mysql->query("SELECT `importance` FROM `qualities` WHERE `quality` = '$fifthQuality'");

    $previousPointForFIrst = $previousPointForFIrst->fetch_assoc();
    $previousPointForSecond = $previousPointForSecond->fetch_assoc();
    $previousPointForThird = $previousPointForThird->fetch_assoc();
    $previousPointForFourth = $previousPointForFourth->fetch_assoc();
    $previousPointForFifth = $previousPointForFifth->fetch_assoc();
     

    
    $actualPointForFirst = $result['coefficient'] * 5.0 + $previousPointForFIrst['importance'];
    $actualPointForSecond = $result['coefficient'] * 4  + $previousPointForFIrst['importance'] ;
    $actualPointForThird = $result['coefficient'] * 3  + $previousPointForFIrst['importance'];
    $actualPointForFourth = $result['coefficient'] * 2  + $previousPointForFIrst['importance'];
    $actualPointForFifth = $result['coefficient'] * 1  + $previousPointForFIrst['importance'];


    //Обовляем баллы..
    $mysql->query("UPDATE `qualities` SET `importance` = '$actualPointForFirst' WHERE `quality` = '$firstQuality'");
    $mysql->query("UPDATE `qualities` SET `importance` = '$actualPointForSecond' WHERE `quality` = '$secondQuality'");
    $mysql->query("UPDATE `qualities` SET `importance` = '$actualPointForThird' WHERE `quality` = '$thirdQuality'");
    $mysql->query("UPDATE `qualities` SET `importance` = '$actualPointForFourth' WHERE `quality` = '$fourthQuality'");
    $mysql->query("UPDATE `qualities` SET `importance` = '$actualPointForFifth' WHERE `quality` = '$fifthQuality'");
        
    


    //$result = $mysql->query("SELECT * FROM `` WHERE `login` = '$login' AND `pass` = '$pass'");
    
    $mysql->close();
?>