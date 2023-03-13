<?php
    setcookie('user', $user['id'], time() - 3600 * 2, "/");

    header('Location: /index.html');
?>