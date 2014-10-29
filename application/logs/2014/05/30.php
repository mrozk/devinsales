<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-30 10:11:22 --- EMERGENCY: DDelivery\Order\DDeliveryOrderException [ 0 ]: Корзина пуста ~ APPPATH/classes/Sdk/application/classes/DDelivery/Order/DDeliveryOrder.php [ 184 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:92
2014-05-30 10:11:22 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(92): DDelivery\Order\DDeliveryOrder->__construct(Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(33): DDelivery\DDeliveryUI->__construct(Object(IntegratorShop))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:92
2014-05-30 14:56:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:49
2014-05-30 14:56:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(49): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:49
2014-05-30 16:20:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:20:44 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(72): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:20:54 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: 2cc161f29865473560cf6866f31b93b1 ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:20:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(30): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(50): Controller_Control->addNewShipping('mrozk.myinsales...', '2cc161f29865473...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:20:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:20:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(72): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:21:06 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: 777359ca33e39d89997180a270d740f9 ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:21:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(30): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(50): Controller_Control->addNewShipping('mrozk.myinsales...', '777359ca33e39d8...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:21:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:21:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(72): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:22:04 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: 6df1e145cc0f4a46563aa59d0094e537 ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:22:04 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(30): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(50): Controller_Control->addNewShipping('mrozk.myinsales...', '6df1e145cc0f4a4...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:22:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:22:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(72): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:23:31 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: 80a8f85f364d8f5898ca421fa1df6dfb ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:23:31 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(26): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(46): Controller_Control->addNewShipping('mrozk.myinsales...', '80a8f85f364d8f5...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:23:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:68
2014-05-30 16:23:32 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(68): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:68
2014-05-30 16:24:40 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: cb6f13bdd92fba1de2b3badb8db88e6f ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:24:40 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(30): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(50): Controller_Control->addNewShipping('mrozk.myinsales...', 'cb6f13bdd92fba1...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:24:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:24:42 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(72): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:26:19 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: 9c9b7dfb1006d4a90f1987fb1e9722d8 ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:26:19 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(30): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(50): Controller_Control->addNewShipping('mrozk.myinsales...', '9c9b7dfb1006d4a...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 16:26:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:26:19 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(72): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:72
2014-05-30 16:26:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: secret_key ~ APPPATH/classes/Controller/Install.php [ 14 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Install.php:14
2014-05-30 16:26:46 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Install.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 14, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Install->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Install))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Install.php:14
2014-05-30 16:27:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: secret_key ~ APPPATH/classes/Controller/Install.php [ 14 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Install.php:14
2014-05-30 16:27:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Install.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 14, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Install->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Install))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Install.php:14
2014-05-30 16:28:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: secret_key ~ APPPATH/classes/Controller/Install.php [ 14 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Install.php:14
2014-05-30 16:28:14 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Install.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 14, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Install->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Install))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Install.php:14
2014-05-30 17:19:43 --- EMERGENCY: InsalesCurlException [ 6 ]: Could not resolve host: 68dc0845d4774814dd4c9d17ba44f83a ~ APPPATH/classes/InsalesApi.php [ 43 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 17:19:43 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(24): InsalesApi->curl_http_api_request_('POST', 'http://ddeliver...', '<?xml version="...', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(30): InsalesApi->api('POST', '/admin/delivery...', '<?xml version="...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(50): Controller_Control->addNewShipping('fffff', '68dc0845d477481...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_install()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:24
2014-05-30 19:50:11 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Sdk/application/classes/DDelivery/DataBase/Order.php [ 288 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Order.php:288
2014-05-30 19:50:11 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Order.php(288): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/client...', 288, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(979): DDelivery\DataBase\Order->saveFullOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(35): DDelivery\DDeliveryUI->saveFullOrder(Object(DDelivery\Order\DDeliveryOrder))
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DataBase/Order.php:288