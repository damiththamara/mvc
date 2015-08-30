<?php

namespace blog\libs;

require 'libs/BaseController.php';

class Bootsrap
{

    function __construct()
    {
        $url = $_GET['url'];

        if ($url == '') {
            if (session_status() === 'PHP_SESSION_ACTIVE') {
                if ($_SESSION['userId'] != '') {
                    header('Location:index.php?url=dashboard');
                    exit();
                } else {
                    header('Location:index.php?url=user/login');
                    exit();
                }
            } else {
                header('Location:index.php?url=user/login');
                exit();
            }
        } else {
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            $file = 'controllers/' . $url[0] . '.php';
            if (file_exists($file)) {
                require $file;
                $con = '\blog\controllers\\' . $url[0];
                $controller = new $con;
                $controller->{$url[1]}();
            } else {
                echo 'Route not found';
                return FALSE;
            }
        }
    }

}
?>

