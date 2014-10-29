<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-25 13:08:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice' not found ~ APPPATH/classes/Controller/Cabinet.php [ 21 ] in file:line
2014-05-25 13:08:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 13:08:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice' not found ~ APPPATH/classes/Controller/Cabinet.php [ 21 ] in file:line
2014-05-25 13:08:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 13:09:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice' not found ~ APPPATH/classes/Controller/Cabinet.php [ 21 ] in file:line
2014-05-25 13:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 13:20:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice' not found ~ APPPATH/classes/Controller/Cabinet.php [ 21 ] in file:line
2014-05-25 13:20:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 13:25:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: init ~ SYSPATH/classes/Kohana/Core.php [ 599 ] in /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php:599
2014-05-25 13:25:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php(599): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 599, Array)
#1 /var/www/clients/client1/web4/web/application/bootstrap.php(135): Kohana_Core::modules(Array)
#2 /var/www/clients/client1/web4/web/index.php(102): require('/var/www/client...')
#3 {main} in /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php:599
2014-05-25 13:25:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice_Core' not found ~ MODPATH/messager/classes/Notice.php [ 3 ] in file:line
2014-05-25 13:25:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 13:27:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice_Core' not found ~ MODPATH/messager/classes/Notice.php [ 3 ] in file:line
2014-05-25 13:27:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 13:27:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Notice_Core' not found ~ MODPATH/messager/classes/Notice.php [ 3 ] in file:line
2014-05-25 13:27:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 14:30:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: error ~ APPPATH/classes/Controller/Base.php [ 45 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Base.php:45
2014-05-25 14:30:45 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Base.php(45): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 45, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(44): Controller_Base->_proccessMessages()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Base.php:45
2014-05-25 14:53:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The usersettings property does not exist in the Model_InsalesUser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-25 14:53:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('usersettings')
#1 /var/www/clients/client1/web4/web/application/views/panel.php(21): Kohana_ORM->__get('usersettings')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/clients/client1/web4/web/application/views/layout.php(73): Kohana_View->__toString()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-25 15:12:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/panel.php [ 24 ] in file:line
2014-05-25 15:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-25 15:42:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The plan_length property does not exist in the Model_UserSetting class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-25 15:42:43 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('plan_length')
#1 /var/www/clients/client1/web4/web/application/views/panel.php(183): Kohana_ORM->__get('plan_length')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/clients/client1/web4/web/application/views/layout.php(73): Kohana_View->__toString()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-25 18:00:58 --- EMERGENCY: ErrorException [ 2 ]: include_once(): open_basedir restriction in effect. File(../Sdk/application/bootstrap.php) is not within the allowed path(s): (/var/www/clients/client1/web4/web:/var/www/clients/client1/web4/private:/var/www/clients/client1/web4/tmp:/var/www/insales.ddelivery.ru/web:/srv/www/insales.ddelivery.ru/web:/usr/share/php5:/usr/share/php:/tmp:/usr/share/phpmyadmin:/etc/phpmyadmin:/var/lib/phpmyadmin) ~ APPPATH/classes/Controller/Sdk.php [ 5 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:5
2014-05-25 18:00:58 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(5): Kohana_Core::error_handler(2, 'include_once():...', '/var/www/client...', 5, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(5): include_once()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php(511): require('/var/www/client...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Sdk')
#4 [internal function]: spl_autoload_call('Controller_Sdk')
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Sdk')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:5
2014-05-25 18:05:40 --- EMERGENCY: ErrorException [ 2 ]: include_once(/var/www/clients/client1/web4/web/application/classes/Sdk/application/example/IntegratorShop.php): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Sdk.php [ 6 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:6
2014-05-25 18:05:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(6): Kohana_Core::error_handler(2, 'include_once(/v...', '/var/www/client...', 6, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(6): include_once()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php(511): require('/var/www/client...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Sdk')
#4 [internal function]: spl_autoload_call('Controller_Sdk')
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Sdk')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:6
2014-05-25 18:06:17 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Папка с БД SQLite не существует или недоступна для записи ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/SQLite.php [ 32 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:27
2014-05-25 18:06:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php(27): DDelivery\DataBase\SQLite::getPDO()
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(89): DDelivery\DataBase\Cache->__construct()
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:27
2014-05-25 18:17:29 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-05-25 18:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #74, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(206): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1157): DDelivery\Sdk\DDeliverySDK->getSelfDeliveryPoints(NULL, 151184)
#5 [internal function]: DDelivery\DDeliveryUI->getSelfPointsDetail(151184)
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(72): ReflectionMethod->invokeArgs(Object(DDelivery\DDeliveryUI), Array)
#7 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#8 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-05-25 22:47:04 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:47:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 22:59:27 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:59:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 22:59:28 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:59:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 22:59:28 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:59:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 22:59:29 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:59:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 22:59:30 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:59:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 22:59:30 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 58107 of 58107 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 93 ] in file:line
2014-05-25 22:59:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 93, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(93): unserialize('a:317:{i:0;O:34...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-05-25 23:09:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php [ 80 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:80
2014-05-25 23:09:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/client...', 80, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(90): DDelivery\DataBase\Cache->getCacheRec('getSelfPointsDe...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:80
2014-05-25 23:09:50 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php [ 80 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:80
2014-05-25 23:09:50 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/client...', 80, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(90): DDelivery\DataBase\Cache->getCacheRec('getSelfPointsDe...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:80
2014-05-25 23:09:51 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php [ 80 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:80
2014-05-25 23:09:51 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/client...', 80, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(90): DDelivery\DataBase\Cache->getCacheRec('getSelfPointsDe...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(65): DDelivery\Sdk\DCache->getCache('getSelfPointsDe...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(734): DDelivery\Sdk\DCache->render('getSelfPointsDe...', Array)
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(17): DDelivery\DDeliveryUI->getSelfPoints(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Cache.php:80