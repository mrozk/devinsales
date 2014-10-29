<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-22 17:11:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-22 17:11:04 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('insalesusers')
#1 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(19): Kohana_ORM::factory('InsalesUser')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-22 17:11:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-22 17:11:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('insalesusers')
#1 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(19): Kohana_ORM::factory('InsalesUser')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-22 17:12:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_insalesuser' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-22 17:12:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-22 17:12:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-22 17:12:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('insalesusers')
#1 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(19): Kohana_ORM::factory('InsalesUser')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-22 23:16:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view panel could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:16:37 --- DEBUG: #0 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('panel')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('panel', NULL)
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(16): Kohana_View::factory('panel')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:17:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view panel could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:17:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('panel')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('panel', NULL)
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(15): Kohana_View::factory('panel')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:17:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view panel could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:17:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('panel')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('panel', NULL)
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(15): Kohana_View::factory('panel')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:17:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view panel could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137
2014-05-22 23:17:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(137): Kohana_View->set_filename('panel')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(30): Kohana_View->__construct('panel', NULL)
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(15): Kohana_View::factory('panel')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/system/classes/Kohana/View.php:137