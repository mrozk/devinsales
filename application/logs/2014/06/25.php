<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-25 08:11:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$product_field_values ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 112 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:112
2014-06-25 08:11:08 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(112): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 112, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(199): IntegratorShop->_parseCart('29303485_2,2930...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Adapter/DShopAdapter.php(260): IntegratorShop->_getProductsFromCart()
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(121): DDelivery\Adapter\DShopAdapter->getProductsFromCart()
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(152): DDelivery\DDeliveryUI->__construct(Object(IntegratorShop))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:112
2014-06-25 08:18:21 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/Sdk.php [ 68 ] in file:line
2014-06-25 08:18:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-25 11:58:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:58:31 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:58:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:58:43 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:58:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:58:59 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:38 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 11:59:44 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:14 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:24 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:43 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:47 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:00:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:21 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:22 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:37 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:01:58 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:02:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:02:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:24 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:28 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:43 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:03:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:05:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:05:02 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:05:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:05:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:06:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:06:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:07:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:07:59 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:08:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:08:44 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:09:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:09:20 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:11:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:11:38 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:11:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:11:39 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:12:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 12:12:28 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:03:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:03:01 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:03:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:03:31 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:03:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:03:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:04:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:04:38 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:07:55 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:12:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:12:46 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:50:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:50:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:51:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:51:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:51:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:51:37 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:51:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:51:55 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:52:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:52:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:52:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:52:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:53:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:53:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:53:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:53:29 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:55:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:55:19 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:55:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 14:55:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 15:01:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 15:01:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 15:01:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 15:01:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 17:36:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: IntegratorShop::$zabor ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 32 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:32
2014-06-25 17:36:56 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 32, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(155): IntegratorShop->__construct(Object(Request), 22)
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:32
2014-06-25 20:11:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:11:48 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:11:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:11:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:31 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:12:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:14 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:29 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:13:45 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:14:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:14:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:14:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:14:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:16:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:16:04 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:16:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:16:42 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:17:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:17:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:18:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:18:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:18:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:19:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:19:20 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:20:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:20:01 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:21:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:21:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:22:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:22:09 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:22:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:22:50 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:22:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:22:51 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:28:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 36 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36
2014-06-25 20:28:20 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 36, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:36