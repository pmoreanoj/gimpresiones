<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-12 22:13:44 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/data/eTickets.png): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Admin\Logos.php [ 24 ] in file:line
2014-03-12 22:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(24): move_uploaded_file('C:\xampp\tmp\ph...', '/data/eTickets....')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_ajax_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-03-12 22:32:13 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/data/eTickets.png): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Admin\Logos.php [ 24 ] in file:line
2014-03-12 22:32:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(24): move_uploaded_file('C:\xampp\tmp\ph...', '/data/eTickets....')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_ajax_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#8 {main} in file:line