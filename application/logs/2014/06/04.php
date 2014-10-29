<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-04 00:51:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Result_Cached::$orderer ~ APPPATH/classes/Controller/Orders.php [ 28 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:28
2014-06-04 00:51:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 28, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:28
2014-06-04 15:21:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: type ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1542 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1542
2014-06-04 15:21:04 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1542): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1542, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1708): DDelivery\DDeliveryUI->getCityByDisplay('110301')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1542
2014-06-04 16:07:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: type ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1542 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1542
2014-06-04 16:07:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1542): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1542, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1687): DDelivery\DDeliveryUI->getCityByDisplay('89247')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1484): DDelivery\DDeliveryUI->renderDeliveryTypeForm()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1542
2014-06-04 20:28:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1541 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:28:03 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1541): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1541, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1711): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:28:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1541 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:28:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1541): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1541, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1711): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:28:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1541 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:28:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1541): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1541, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1711): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:29:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1541 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:29:18 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1541): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1541, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1711): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:30:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1541 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:30:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1541): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1541, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1711): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:30:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1541 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:30:10 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1541): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1541, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1711): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1541
2014-06-04 20:30:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:30:45 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:30:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:30:49 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:30:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:30:59 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:09 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:31:57 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1709): DDelivery\DDeliveryUI->getCityByDisplay('413')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-04 20:35:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'DDelivery\DataBase\PDO' not found ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/SQLite.php [ 28 ] in file:line
2014-06-04 20:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 20:35:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'DDelivery\DataBase\PDO' not found ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/SQLite.php [ 28 ] in file:line
2014-06-04 20:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 20:35:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'DDelivery\DataBase\PDO' not found ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/SQLite.php [ 28 ] in file:line
2014-06-04 20:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 20:35:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'DDelivery\DataBase\PDO' not found ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/SQLite.php [ 28 ] in file:line
2014-06-04 20:35:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 20:36:35 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 1483 of 3529 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 95 ] in file:line
2014-06-04 20:36:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 95, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(95): unserialize('O:34:"DDelivery...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(592): DDelivery\Sdk\DCache->getCache('DDeliverySDK::c...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(547): DDelivery\DDeliveryUI->getCourierDeliveryInfoForCity(Object(DDelivery\Order\DDeliveryOrder))
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1712): DDelivery\DDeliveryUI->getCourierPointsForCity(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#6 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 20:36:38 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 1483 of 3529 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 95 ] in file:line
2014-06-04 20:36:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 95, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(95): unserialize('O:34:"DDelivery...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(592): DDelivery\Sdk\DCache->getCache('DDeliverySDK::c...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(547): DDelivery\DDeliveryUI->getCourierDeliveryInfoForCity(Object(DDelivery\Order\DDeliveryOrder))
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1712): DDelivery\DDeliveryUI->getCourierPointsForCity(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#6 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 20:36:52 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 1483 of 3529 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 95 ] in file:line
2014-06-04 20:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 95, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(95): unserialize('O:34:"DDelivery...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(592): DDelivery\Sdk\DCache->getCache('DDeliverySDK::c...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(547): DDelivery\DDeliveryUI->getCourierDeliveryInfoForCity(Object(DDelivery\Order\DDeliveryOrder))
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1712): DDelivery\DDeliveryUI->getCourierPointsForCity(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#6 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 20:36:54 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 1483 of 3529 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 95 ] in file:line
2014-06-04 20:36:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 95, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(95): unserialize('O:34:"DDelivery...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(592): DDelivery\Sdk\DCache->getCache('DDeliverySDK::c...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(547): DDelivery\DDeliveryUI->getCourierDeliveryInfoForCity(Object(DDelivery\Order\DDeliveryOrder))
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1712): DDelivery\DDeliveryUI->getCourierPointsForCity(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#6 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 20:37:04 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 1483 of 3529 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 95 ] in file:line
2014-06-04 20:37:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 95, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(95): unserialize('O:34:"DDelivery...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(592): DDelivery\Sdk\DCache->getCache('DDeliverySDK::c...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(547): DDelivery\DDeliveryUI->getCourierDeliveryInfoForCity(Object(DDelivery\Order\DDeliveryOrder))
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1712): DDelivery\DDeliveryUI->getCourierPointsForCity(Object(DDelivery\Order\DDeliveryOrder))
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1481): DDelivery\DDeliveryUI->renderCourier()
#6 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 20:37:11 --- EMERGENCY: ErrorException [ 8 ]: unserialize(): Error at offset 2250 of 3900 bytes ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php [ 95 ] in file:line
2014-06-04 20:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'unserialize(): ...', '/var/www/client...', 95, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DCache.php(95): unserialize('O:34:"DDelivery...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(784): DDelivery\Sdk\DCache->getCache('DDeliverySDK::c...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1617): DDelivery\DDeliveryUI->getSelfDeliveryInfoForCity(Object(DDelivery\Order\DDeliveryOrder))
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1684): DDelivery\DDeliveryUI->getDataFromHeader()
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1484): DDelivery\DDeliveryUI->renderDeliveryTypeForm()
#6 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(134): DDelivery\DDeliveryUI->render(Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 22:23:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Sdk.php [ 133 ] in file:line
2014-06-04 22:23:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 22:44:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getPoint() on a non-object ~ APPPATH/classes/Controller/Sdk.php [ 133 ] in file:line
2014-06-04 22:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 22:45:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getPoint() on a non-object ~ APPPATH/classes/Controller/Sdk.php [ 134 ] in file:line
2014-06-04 22:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-04 22:45:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getPoint() on a non-object ~ APPPATH/classes/Controller/Sdk.php [ 135 ] in file:line
2014-06-04 22:45:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line