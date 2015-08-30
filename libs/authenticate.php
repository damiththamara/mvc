<?php

if (session_status() === 'PHP_SESSION_ACTIVE') {
    if ($_SESSION['userId'] != '') {
        header('Location:dashboard.php');
        exit();
    } else {
        header('Location:/controllers/User/login.php');
        exit();
    }
} else {
    header('Location:controllers/user/login.php');
    exit();
}
?>
