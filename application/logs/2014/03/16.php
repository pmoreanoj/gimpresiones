<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-16 17:34:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.clothing_colors' doesn't exist [ SHOW FULL COLUMNS FROM `clothing_colors` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-16 17:34:28 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('clothing_colors')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Home.php(30): Kohana_ORM::factory('ClothColors')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Home->action_ajax_colors()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-16 17:38:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.clothing_colors' doesn't exist [ SHOW FULL COLUMNS FROM `clothing_colors` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-16 17:38:09 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('clothing_colors')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Home.php(30): Kohana_ORM::factory('ClothColors')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Home->action_ajax_colors()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-16 17:41:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_rojo concha de vino' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-16 17:41:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 17:43:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_rojo concha de vino' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-16 17:43:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 17:46:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-16 17:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-16 17:51:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-16 17:51:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line