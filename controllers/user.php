<?php

namespace blog\controllers;

use blog\libs\BaseController;

class user extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }

    function login()
    {

        $data = "damith";
        $this->render('user/login', $data);
    }

}

?>
