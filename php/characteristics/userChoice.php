<?php

    $firstQuality = filter_var(trim($_POST['firstQuality']),FILTER_SANITIZE_STRING);
    $secondQuality = filter_var(trim($_POST['secondQuality']),FILTER_SANITIZE_STRING);
    $thirdQuality = filter_var(trim($_POST['thirdQuality']),FILTER_SANITIZE_STRING);
    $fourthQuality = filter_var(trim($_POST['fourthQuality']),FILTER_SANITIZE_STRING);
    $fifthQuality = filter_var(trim($_POST['fifthQuality']),FILTER_SANITIZE_STRING);
    
    $user = $_COOKIE['user'];

    require "../blocks/connect-bd.php";

    $coefficient = $mysql->query("SELECT `coefficient` FROM `users` WHERE `id` = '$user'");
    $result = $coefficient->fetch_assoc();
    
    $pointForFirst = $result['coefficient'] * 5;

    $mysql->query("UPDATE `qualities` SET `importance` = '$pointForFirst' WHERE `quality` = '$firstQuality'");
    echo $firstQuality;
    
    


    //$result = $mysql->query("SELECT * FROM `` WHERE `login` = '$login' AND `pass` = '$pass'");
    
    $mysql->close();
?>