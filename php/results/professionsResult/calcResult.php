<?php
    require "../../blocks/connect-bd.php";

    
    
    
    
    $importanceForDev = $mysql->prepare("SELECT `importance` FROM `qualities_developer`");
    $importanceForDev->execute();
    $arrayImportanceForDev = [];
    foreach ($importanceForDev->get_result() as $row)
    {
        $arrayImportanceForDev[] = $row['importance'];
    }
    rsort($arrayImportanceForDev);



    $prof1_quality_1_quality = $mysql->query("SELECT `quality` FROM `qualities_developer` WHERE `importance` = '$arrayImportanceForDev[0]'");
    $prof1_quality_2_quality = $mysql->query("SELECT `quality` FROM `qualities_developer` WHERE `importance` = '$arrayImportanceForDev[1]'");
    $prof1_quality_3_quality = $mysql->query("SELECT `quality` FROM `qualities_developer` WHERE `importance` = '$arrayImportanceForDev[2]'");
    $prof1_quality_4_quality = $mysql->query("SELECT `quality` FROM `qualities_developer` WHERE `importance` = '$arrayImportanceForDev[3]'");
    $prof1_quality_5_quality = $mysql->query("SELECT `quality` FROM `qualities_developer` WHERE `importance` = '$arrayImportanceForDev[4]'");
    $prof1_quality_1_quality = $prof1_quality_1_quality->fetch_assoc();
    $prof1_quality_2_quality = $prof1_quality_2_quality->fetch_assoc();
    $prof1_quality_3_quality = $prof1_quality_3_quality->fetch_assoc();
    $prof1_quality_4_quality = $prof1_quality_4_quality->fetch_assoc();
    $prof1_quality_5_quality = $prof1_quality_5_quality->fetch_assoc();

    setcookie('prof1_quality_1_importance', $arrayImportanceForDev[0], time() + 3600 * 20, "/");
    setcookie('prof1_quality_2_importance', $arrayImportanceForDev[1], time() + 3600 * 20, "/");
    setcookie('prof1_quality_3_importance', $arrayImportanceForDev[2], time() + 3600 * 20, "/");
    setcookie('prof1_quality_4_importance', $arrayImportanceForDev[3], time() + 3600 * 20, "/");
    setcookie('prof1_quality_5_importance', $arrayImportanceForDev[4], time() + 3600 * 20, "/");
    setrawcookie('prof1_quality_1_quality', $prof1_quality_1_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof1_quality_2_quality', $prof1_quality_2_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof1_quality_3_quality', $prof1_quality_3_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof1_quality_4_quality', $prof1_quality_4_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof1_quality_5_quality', $prof1_quality_5_quality['quality'], time() + 3600 * 20, "/");





    $importanceForManager = $mysql->prepare("SELECT `importance` FROM `qualities_manager`");
    $importanceForManager->execute();
    $arrayImportanceForManager = [];
    foreach ($importanceForManager->get_result() as $row)
    {
        $arrayImportanceForManager[] = $row['importance'];
    }
    rsort($arrayImportanceForManager);

    $prof2_quality_1_quality = $mysql->query("SELECT `quality` FROM `qualities_manager` WHERE `importance` = '$arrayImportanceForManager[0]'");
    $prof2_quality_2_quality = $mysql->query("SELECT `quality` FROM `qualities_manager` WHERE `importance` = '$arrayImportanceForManager[1]'");
    $prof2_quality_3_quality = $mysql->query("SELECT `quality` FROM `qualities_manager` WHERE `importance` = '$arrayImportanceForManager[2]'");
    $prof2_quality_4_quality = $mysql->query("SELECT `quality` FROM `qualities_manager` WHERE `importance` = '$arrayImportanceForManager[3]'");
    $prof2_quality_5_quality = $mysql->query("SELECT `quality` FROM `qualities_manager` WHERE `importance` = '$arrayImportanceForManager[4]'");
    $prof2_quality_1_quality = $prof2_quality_1_quality->fetch_assoc();
    $prof2_quality_2_quality = $prof2_quality_2_quality->fetch_assoc();
    $prof2_quality_3_quality = $prof2_quality_3_quality->fetch_assoc();
    $prof2_quality_4_quality = $prof2_quality_4_quality->fetch_assoc();
    $prof2_quality_5_quality = $prof2_quality_5_quality->fetch_assoc();

    setcookie('prof2_quality_1_importance', $arrayImportanceForManager[0], time() + 3600 * 20, "/");
    setcookie('prof2_quality_2_importance', $arrayImportanceForManager[1], time() + 3600 * 20, "/");
    setcookie('prof2_quality_3_importance', $arrayImportanceForManager[2], time() + 3600 * 20, "/");
    setcookie('prof2_quality_4_importance', $arrayImportanceForManager[3], time() + 3600 * 20, "/");
    setcookie('prof2_quality_5_importance', $arrayImportanceForManager[4], time() + 3600 * 20, "/");
    setrawcookie('prof2_quality_1_quality', $prof2_quality_1_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof2_quality_2_quality', $prof2_quality_2_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof2_quality_3_quality', $prof2_quality_3_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof2_quality_4_quality', $prof2_quality_4_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof2_quality_5_quality', $prof2_quality_5_quality['quality'], time() + 3600 * 20, "/");





    $importanceForDesigner = $mysql->prepare("SELECT `importance` FROM `qualities_designer`");
    $importanceForDesigner->execute();
    $arrayImportanceForDesigner = [];
    foreach ($importanceForDesigner->get_result() as $row)
    {
        $arrayImportanceForDesigner[] = $row['importance'];
    }
    rsort($arrayImportanceForDesigner);

    $prof3_quality_1_quality = $mysql->query("SELECT `quality` FROM `qualities_designer` WHERE `importance` = '$arrayImportanceForDesigner[0]'");
    $prof3_quality_2_quality = $mysql->query("SELECT `quality` FROM `qualities_designer` WHERE `importance` = '$arrayImportanceForDesigner[1]'");
    $prof3_quality_3_quality = $mysql->query("SELECT `quality` FROM `qualities_designer` WHERE `importance` = '$arrayImportanceForDesigner[2]'");
    $prof3_quality_4_quality = $mysql->query("SELECT `quality` FROM `qualities_designer` WHERE `importance` = '$arrayImportanceForDesigner[3]'");
    $prof3_quality_5_quality = $mysql->query("SELECT `quality` FROM `qualities_designer` WHERE `importance` = '$arrayImportanceForDesigner[4]'");
    $prof3_quality_1_quality = $prof3_quality_1_quality->fetch_assoc();
    $prof3_quality_2_quality = $prof3_quality_2_quality->fetch_assoc();
    $prof3_quality_3_quality = $prof3_quality_3_quality->fetch_assoc();
    $prof3_quality_4_quality = $prof3_quality_4_quality->fetch_assoc();
    $prof3_quality_5_quality = $prof3_quality_5_quality->fetch_assoc();

    setcookie('prof3_quality_1_importance', $arrayImportanceForDesigner[0], time() + 3600 * 20, "/");
    setcookie('prof3_quality_2_importance', $arrayImportanceForDesigner[1], time() + 3600 * 20, "/");
    setcookie('prof3_quality_3_importance', $arrayImportanceForDesigner[2], time() + 3600 * 20, "/");
    setcookie('prof3_quality_4_importance', $arrayImportanceForDesigner[3], time() + 3600 * 20, "/");
    setcookie('prof3_quality_5_importance', $arrayImportanceForDesigner[4], time() + 3600 * 20, "/");
    setrawcookie('prof3_quality_1_quality', $prof3_quality_1_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof3_quality_2_quality', $prof3_quality_2_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof3_quality_3_quality', $prof3_quality_3_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof3_quality_4_quality', $prof3_quality_4_quality['quality'], time() + 3600 * 20, "/");
    setrawcookie('prof3_quality_5_quality', $prof3_quality_5_quality['quality'], time() + 3600 * 20, "/");
    

    

    
    $mysql->close();

    header('Location: /statistic.php');
?>