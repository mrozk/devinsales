<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-23 14:55:22 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Пустой массив для инициализации заказа ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 363 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-10-23 14:55:22 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(0)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-10-23 14:55:28 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Пустой массив для инициализации заказа ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 363 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-10-23 14:55:28 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(0)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-10-23 20:05:09 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Пустой api ключ ~ APPPATH/classes/Sdk/mrozk/IntegratorShop.php [ 32 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:321
2014-10-23 20:05:09 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(321): IntegratorShop->__construct(Object(Request), NULL)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:321
2014-10-23 20:05:30 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:324
2014-10-23 20:05:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(324): DDelivery\DDeliveryUI->initOrder(4897)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:324
2014-10-23 20:07:31 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:325
2014-10-23 20:07:31 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(325): DDelivery\DDeliveryUI->initOrder(4897)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:325