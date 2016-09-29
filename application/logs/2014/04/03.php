<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-03 16:59:59 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`gimpresiones`.`item`, CONSTRAINT `fk_item_clothing_colors1` FOREIGN KEY (`first_color`) REFERENCES `clothing_colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ UPDATE `item` SET `first_color` = 'Amarillo', `second_color` = '', `active` = '' WHERE `id` = '5' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 16:59:59 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `item` S...', false, Array)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#3 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Items.php(71): Kohana_ORM->save()
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Items->action_ajax_edit_item()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Items))
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 17:01:50 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`gimpresiones`.`item`, CONSTRAINT `fk_item_clothing_colors1` FOREIGN KEY (`first_color`) REFERENCES `clothing_colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `item` (`name`, `clothing_id`, `photo`, `first_color`, `second_color`, `active`) VALUES ('Camiseta amarilla niños', '14', 'data/items/yellowTshirt.png', 'Amarillo', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 17:01:50 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Items.php(71): Kohana_ORM->save()
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Items->action_ajax_edit_item()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Items))
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 17:03:18 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`gimpresiones`.`item`, CONSTRAINT `fk_item_clothing_colors1` FOREIGN KEY (`first_color`) REFERENCES `clothing_colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `item` (`name`, `clothing_id`, `photo`, `first_color`, `second_color`, `active`) VALUES ('Camiseta amarilla niños', '14', 'data/items/yellowTshirt.png', 'Amarillo', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 17:03:18 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Items.php(71): Kohana_ORM->save()
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Items->action_ajax_edit_item()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Items))
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 17:03:38 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`gimpresiones`.`item`, CONSTRAINT `fk_item_clothing_colors1` FOREIGN KEY (`first_color`) REFERENCES `clothing_colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `item` (`name`, `clothing_id`, `photo`, `first_color`, `second_color`, `active`) VALUES ('Camiseta amarilla niños', '14', 'data/items/yellowTshirt.png', 'Amarillo', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 17:03:38 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Items.php(71): Kohana_ORM->save()
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Items->action_ajax_edit_item()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Items))
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\Query.php:251
2014-04-03 21:50:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\Controller\Web\Products.php [ 89 ] in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Web\Products.php:89
2014-04-03 21:50:22 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Web\Products.php(89): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 89, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Web_Products->action_agetsizes()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Products))
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Web\Products.php:89
2014-04-03 23:26:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\controllers\admin\items\edit.php [ 177 ] in file:line
2014-04-03 23:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-03 23:26:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\controllers\admin\items\edit.php [ 177 ] in file:line
2014-04-03 23:26:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-03 23:26:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\controllers\admin\items\edit.php [ 177 ] in file:line
2014-04-03 23:26:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line