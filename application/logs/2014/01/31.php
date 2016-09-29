<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-31 15:55:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/controllers/web/products/index.php [ 6 ] in file:line
2014-01-31 15:55:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 20:14:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view controllers/web/products/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php:137
2014-01-31 20:14:59 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php(137): Kohana_View->set_filename('controllers/web...')
#1 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/application/classes/Controller/Web/Products.php(9): Kohana_View::factory('controllers/web...')
#3 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Controller.php(84): Controller_Web_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Products))
#6 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php:137
2014-01-31 20:15:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view controllers/web/products/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php:137
2014-01-31 20:15:32 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php(137): Kohana_View->set_filename('controllers/web...')
#1 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/application/classes/Controller/Web/Products.php(9): Kohana_View::factory('controllers/web...')
#3 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Controller.php(84): Controller_Web_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Products))
#6 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php:137
2014-01-31 20:15:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view controllers/web/products/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php:137
2014-01-31 20:15:35 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php(137): Kohana_View->set_filename('controllers/web...')
#1 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php(30): Kohana_View->__construct('controllers/web...', NULL)
#2 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/application/classes/Controller/Web/Products.php(9): Kohana_View::factory('controllers/web...')
#3 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Controller.php(84): Controller_Web_Products->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Products))
#6 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/XAMPP/xamppfiles/htdocs/gimpresiones/system/classes/Kohana/View.php:137