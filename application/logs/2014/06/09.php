<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-09 14:54:47 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 14:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 14:54:50 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 14:54:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 14:54:51 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 14:54:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 14:54:52 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 14:54:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 14:54:53 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 14:54:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 14:54:57 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 14:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 15:02:04 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-09 15:02:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #110, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(515): DDelivery\Sdk\DDeliverySDK->getCityByIp('178.137.202.42')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1311): DDelivery\DDeliveryUI->getCityByIp('178.137.202.42')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1433): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(234): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-09 15:43:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: DDelivery\Order\DDeliveryOrder::$id ~ APPPATH/classes/Controller/Sdk.php [ 232 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:232
2014-06-09 15:43:29 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(232): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 232, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_status()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:232
2014-06-09 16:24:19 --- EMERGENCY: ErrorException [ 1 ]: Class IntegratorShop contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (DDelivery\Adapter\DShopAdapter::setCmsOrderStatus) ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 13 ] in file:line
2014-06-09 16:24:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-09 16:55:23 --- EMERGENCY: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/Order.php [ 138 ] in file:line
2014-06-09 16:55:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/var/www/client...', 138, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Order.php(138): PDOStatement->execute()
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(194): DDelivery\DataBase\Order->getNotFinishedOrders()
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(101): DDelivery\DDeliveryUI->getUnfinishedOrders()
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(229): DDelivery\DDeliveryUI->changeInsalesOrderStatus()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_status()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in file:line