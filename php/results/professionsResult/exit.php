<?php
    setcookie('prof1_quality_1_importance', $arrayImportanceForDev[0], time() - 3600 * 20, "/");
    setcookie('prof1_quality_2_importance', $arrayImportanceForDev[1], time() - 3600 * 20, "/");
    setcookie('prof1_quality_3_importance', $arrayImportanceForDev[2], time() - 3600 * 20, "/");
    setcookie('prof1_quality_4_importance', $arrayImportanceForDev[3], time() - 3600 * 20, "/");
    setcookie('prof1_quality_5_importance', $arrayImportanceForDev[4], time() - 3600 * 20, "/");
    setrawcookie('prof1_quality_1_quality', $prof1_quality_1_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof1_quality_2_quality', $prof1_quality_2_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof1_quality_3_quality', $prof1_quality_3_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof1_quality_4_quality', $prof1_quality_4_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof1_quality_5_quality', $prof1_quality_5_quality['quality'], time() - 3600 * 20, "/");

    setcookie('prof2_quality_1_importance', $arrayImportanceForManager[0], time() - 3600 * 20, "/");
    setcookie('prof2_quality_2_importance', $arrayImportanceForManager[1], time() - 3600 * 20, "/");
    setcookie('prof2_quality_3_importance', $arrayImportanceForManager[2], time() - 3600 * 20, "/");
    setcookie('prof2_quality_4_importance', $arrayImportanceForManager[3], time() - 3600 * 20, "/");
    setcookie('prof2_quality_5_importance', $arrayImportanceForManager[4], time() - 3600 * 20, "/");
    setrawcookie('prof2_quality_1_quality', $prof2_quality_1_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof2_quality_2_quality', $prof2_quality_2_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof2_quality_3_quality', $prof2_quality_3_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof2_quality_4_quality', $prof2_quality_4_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof2_quality_5_quality', $prof2_quality_5_quality['quality'], time() - 3600 * 20, "/");

    setcookie('prof3_quality_1_importance', $arrayImportanceForDesigner[0], time() - 3600 * 20, "/");
    setcookie('prof3_quality_2_importance', $arrayImportanceForDesigner[1], time() - 3600 * 20, "/");
    setcookie('prof3_quality_3_importance', $arrayImportanceForDesigner[2], time() - 3600 * 20, "/");
    setcookie('prof3_quality_4_importance', $arrayImportanceForDesigner[3], time() - 3600 * 20, "/");
    setcookie('prof3_quality_5_importance', $arrayImportanceForDesigner[4], time() - 3600 * 20, "/");
    setrawcookie('prof3_quality_1_quality', $prof3_quality_1_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof3_quality_2_quality', $prof3_quality_2_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof3_quality_3_quality', $prof3_quality_3_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof3_quality_4_quality', $prof3_quality_4_quality['quality'], time() - 3600 * 20, "/");
    setrawcookie('prof3_quality_5_quality', $prof3_quality_5_quality['quality'], time() - 3600 * 20, "/");

    header('Location: /results.html');
    
?>