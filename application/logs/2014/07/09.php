<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-09 12:57:14 --- EMERGENCY: ErrorException [ 2 ]: include_once(/var/www/clients/client1/web4/web/application/classes/Sdk/mrozk/IntegratorShop2.php): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Sdk.php [ 7 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:7
2014-07-09 12:57:14 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(7): Kohana_Core::error_handler(2, 'include_once(/v...', '/var/www/client...', 7, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(7): include_once()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php(511): require('/var/www/client...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Sdk')
#4 [internal function]: spl_autoload_call('Controller_Sdk')
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Sdk')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:7
2014-07-09 12:57:26 --- EMERGENCY: ErrorException [ 2 ]: include_once(/var/www/clients/client1/web4/web/application/classes/Sdk/mrozk/IntegratorShop2.php): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Sdk.php [ 7 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:7
2014-07-09 12:57:26 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(7): Kohana_Core::error_handler(2, 'include_once(/v...', '/var/www/client...', 7, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(7): include_once()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php(511): require('/var/www/client...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Sdk')
#4 [internal function]: spl_autoload_call('Controller_Sdk')
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Sdk')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:7
2014-07-09 12:57:27 --- EMERGENCY: ErrorException [ 2 ]: include_once(/var/www/clients/client1/web4/web/application/classes/Sdk/mrozk/IntegratorShop2.php): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Sdk.php [ 7 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:7
2014-07-09 12:57:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(7): Kohana_Core::error_handler(2, 'include_once(/v...', '/var/www/client...', 7, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(7): include_once()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Core.php(511): require('/var/www/client...')
#3 [internal function]: Kohana_Core::auto_load('Controller_Sdk')
#4 [internal function]: spl_autoload_call('Controller_Sdk')
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Sdk')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:7
2014-07-09 14:54:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:54:49 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:55:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:55:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:56:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:56:45 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:56:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:56:48 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:56:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:56:58 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:13 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:13 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:16 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:57:51 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:21 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:26 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 14:59:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:00:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:00:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:00:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:00:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:01:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:01:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:02:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:02:02 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:02:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:02:31 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:01 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:08 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:10 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:42 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:46 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:04:56 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:28 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:35 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:37 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:38 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:05:55 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:08 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:19 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:22 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:29 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:06:47 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:01 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:42 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:57 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:07:59 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:08:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:08:19 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:08:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:08:26 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:09:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:09:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:09:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:09:57 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:02 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:16 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:18 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:10:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:14:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:14:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:14:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:14:58 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:15:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:15:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:15:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:15:26 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:15:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:15:27 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:16:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:16:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:16:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:16:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:24:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:24:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:24:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:24:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:25:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:25:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:26:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:26:47 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:28:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:28:56 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:35:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 15:35:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:36:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:36:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:36:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:36:59 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:37:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:37:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:44 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:51 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:38:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:13 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:33 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:42 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:39:55 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:15 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:40:47 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:10 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:15 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:41:29 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:42:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:42:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:42:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:42:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:43:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:43:25 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:43:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:43:39 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:44:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:44:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:44:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:44:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:45:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:45:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:48:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:48:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:48:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:48:20 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:49:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:49:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:50:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:50:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:51:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ddelivery_id ~ APPPATH/classes/Controller/Orders.php [ 38 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 16:51:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 38, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:38
2014-07-09 17:52:02 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Orders.php [ 154 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:154
2014-07-09 17:52:02 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/client...', 154, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php:154