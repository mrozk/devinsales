<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-19 16:49:20 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-19 16:49:20 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-19 16:49:41 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Заказ DD в локальной БД не найден ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 371 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84
2014-09-19 16:49:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(84): DDelivery\DDeliveryUI->initOrder(1416)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_orderinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php:84