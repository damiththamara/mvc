<?php

namespace mvc\libs;

class BaseController
{

	function __construct()
	{
//        require 'libs/dbconnection.php';
	}

	function render($file, $data = NULL)
	{
		require "views/header.html";
		require "views/" . $file . ".phtml";
		require "views/footer.html";
	}

}

?>
