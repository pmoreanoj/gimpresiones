<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-13 18:49:59 --- CRITICAL: View_Exception [ 0 ]: The requested view controllers/web/home/estampadopelicula could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php:137
2014-01-13 18:49:59 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(137): Kohana_View->set_filename('controllers/web...')
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Web\Home.php(62): Kohana_View::factory('controllers/web...')
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_filmstamp()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php:137