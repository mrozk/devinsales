<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-24 14:19:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: insalesuser ~ APPPATH/views/panel.php [ 51 ] in /var/www/clients/client1/web4/web/application/views/panel.php:51
2014-05-24 14:19:16 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/views/panel.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 51, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client1/web4/web/application/views/layout.php(38): Kohana_View->__toString()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/clients/client1/web4/web/application/views/panel.php:51
2014-05-24 14:58:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: insalesuser ~ APPPATH/views/panel.php [ 51 ] in /var/www/clients/client1/web4/web/application/views/panel.php:51
2014-05-24 14:58:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/views/panel.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 51, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client1/web4/web/application/views/layout.php(38): Kohana_View->__toString()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/clients/client1/web4/web/application/views/panel.php:51
2014-05-24 15:18:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: insales_id ~ APPPATH/classes/Controller/Cabinet.php [ 15 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:15
2014-05-24 15:18:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 15, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:15
2014-05-24 15:18:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_usersetting' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-24 15:18:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-24 15:19:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_usersetting' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-24 15:19:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-24 15:19:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-24 15:19:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('usersettings')
#1 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1685): Kohana_ORM::factory('UserSetting')
#6 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(647): Kohana_ORM->_related('usersetting')
#7 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('usersetting')
#8 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(16): Kohana_ORM->__get('usersetting')
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_save()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:1668
2014-05-24 16:47:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The api property does not exist in the Model_InsalesUser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:702
2014-05-24 16:47:16 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('api', 'sdfsdfsdfsdfsdf')
#1 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('api', 'sdfsdfsdfsdfsdf')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(18): Kohana_ORM->values(Array, Array)
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:702
2014-05-24 17:39:10 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id = '3'' at line 1 [ UPDATE insalesusers SET  WHERE id = '3' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-05-24 17:39:10 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE insalesu...', false, Array)
#1 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1394): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(23): Kohana_ORM->save()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_save()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251