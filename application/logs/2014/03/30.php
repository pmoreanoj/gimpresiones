<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-30 16:58:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Logos' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 16:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 17:09:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:09:52 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('Logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:14 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:15 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:19 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:21 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:21 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:22 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:22 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:22 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:22 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:22 --- CRITICAL: Database_Exception [ 1146 ]: Table 'gimpresiones.logos' doesn't exist [ SHOW FULL COLUMNS FROM `logos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 17:10:22 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('logos')
#2 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(10): Kohana_ORM::factory('logos')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\gimpresiones\modules\database\classes\Kohana\Database\MySQL.php:359
2014-03-30 18:15:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 18:15:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 18:16:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 18:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 18:17:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 18:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 18:18:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 18:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 18:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: first_color ~ APPPATH\classes\Controller\Admin\Logos.php [ 69 ] in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php:69
2014-03-30 18:20:16 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 69, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_ajax_logos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php:69
2014-03-30 18:20:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Admin\Logos.php [ 86 ] in file:line
2014-03-30 18:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 18:20:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Admin\Logos.php [ 86 ] in file:line
2014-03-30 18:20:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 18:31:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: color ~ APPPATH\views\controllers\admin\logos\index.php [ 26 ] in C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\index.php:26
2014-03-30 18:31:42 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gimpresiones\application\views\containers\admin.php(115): Kohana_View->__toString()
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#12 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\index.php:26
2014-03-30 18:46:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\controllers\admin\logos\edit.php [ 12 ] in C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php:12
2014-03-30 18:46:57 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gimpresiones\application\views\containers\admin.php(115): Kohana_View->__toString()
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#12 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php:12
2014-03-30 18:46:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\controllers\admin\logos\edit.php [ 12 ] in C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php:12
2014-03-30 18:46:57 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\gimpresiones\application\views\containers\admin.php(115): Kohana_View->__toString()
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#12 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php:12
2014-03-30 18:47:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\classes\Controller\Admin\Logos.php [ 90 ] in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php:90
2014-03-30 18:47:40 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 90, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php:90
2014-03-30 18:47:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\classes\Controller\Admin\Logos.php [ 90 ] in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php:90
2014-03-30 18:47:41 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 90, Array)
#1 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(84): Controller_Admin_Logos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Logos.php:90
2014-03-30 18:48:03 --- CRITICAL: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Logos class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php:603
2014-03-30 18:48:03 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('category')
#1 C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php(33): Kohana_ORM->__get('category')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\gimpresiones\application\views\containers\admin.php(115): Kohana_View->__toString()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#13 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php:603
2014-03-30 18:48:05 --- CRITICAL: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Logos class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php:603
2014-03-30 18:48:05 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('category')
#1 C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php(33): Kohana_ORM->__get('category')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\gimpresiones\application\views\containers\admin.php(115): Kohana_View->__toString()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#13 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php:603
2014-03-30 18:48:05 --- CRITICAL: Kohana_Exception [ 0 ]: The category property does not exist in the Model_Logos class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php:603
2014-03-30 18:48:05 --- DEBUG: #0 C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('category')
#1 C:\xampp\htdocs\gimpresiones\application\views\controllers\admin\logos\edit.php(33): Kohana_ORM->__get('category')
#2 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\gimpresiones\application\views\containers\admin.php(115): Kohana_View->__toString()
#6 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\gimpresiones\application\classes\Controller\Admin\Containers\Default.php(93): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Controller.php(87): Controller_Admin_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Logos))
#13 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\gimpresiones\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\gimpresiones\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\gimpresiones\modules\orm\classes\Kohana\ORM.php:603
2014-03-30 21:37:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_items' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:37:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:43:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:43:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_items' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 21:44:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-03-30 21:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 22:31:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_ClothColors::findAll() ~ APPPATH\classes\Controller\Admin\Items.php [ 21 ] in file:line
2014-03-30 22:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line