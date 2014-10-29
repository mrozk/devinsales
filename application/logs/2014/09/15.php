<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-15 00:15:58 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host:  ~ APPPATH/classes/InsalesApi.php [ 51 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-09-15 00:15:58 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(32): InsalesApi->curl_http_api_request_('GET', 'http://ddeliver...', '', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(432): InsalesApi->api('GET', '/admin/payment_...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(466): Controller_Cabinet->getPaymentWays(Object(InsalesApi))
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-09-15 00:16:53 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host:  ~ APPPATH/classes/InsalesApi.php [ 51 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-09-15 00:16:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(32): InsalesApi->curl_http_api_request_('GET', 'http://ddeliver...', '', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(432): InsalesApi->api('GET', '/admin/payment_...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(466): Controller_Cabinet->getPaymentWays(Object(InsalesApi))
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-09-15 12:03:44 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 12:03:44 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 13:47:44 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 13:47:44 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 14:39:27 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 14:39:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 14:56:33 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 14:56:33 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 15:01:11 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 15:01:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 15:19:37 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 15:19:37 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 16:15:27 --- EMERGENCY: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH/classes/Controller/Cabinet.php [ 167 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:167
2014-09-15 16:15:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(167): SimpleXMLElement->__construct('HTTP Basic: Acc...')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addway()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:167
2014-09-15 16:16:27 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 16:16:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 16:16:57 --- EMERGENCY: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH/classes/Controller/Cabinet.php [ 191 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:16:57 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(191): SimpleXMLElement->__construct('HTTP Basic: Acc...')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addway()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:17:00 --- EMERGENCY: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH/classes/Controller/Cabinet.php [ 191 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:17:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(191): SimpleXMLElement->__construct('HTTP Basic: Acc...')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addway()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:17:00 --- EMERGENCY: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH/classes/Controller/Cabinet.php [ 191 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:17:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(191): SimpleXMLElement->__construct('HTTP Basic: Acc...')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addway()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:17:16 --- EMERGENCY: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH/classes/Controller/Cabinet.php [ 191 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 16:17:16 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(191): SimpleXMLElement->__construct('HTTP Basic: Acc...')
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_addway()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php:191
2014-09-15 17:41:40 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 17:41:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 17:47:29 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-15 17:47:29 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84