<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-22 13:19:01 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Длинна поля &laquo;Описание посылки&raquo; должна быть не более 200 символов, Длинна поля &laquo;Тех. данные&raquo; должна быть не более 1024 символов, Ошибка просчета цены, или маршрут недоступен ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:19:01 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:23:53 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Ошибка просчета цены, или маршрут недоступен ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:23:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:24:15 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Ошибка просчета цены, или маршрут недоступен ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:24:15 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:24:17 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Ошибка просчета цены, или маршрут недоступен ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:24:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:24:23 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Длинна поля &laquo;Описание посылки&raquo; должна быть не более 200 символов, Длинна поля &laquo;Тех. данные&raquo; должна быть не более 1024 символов, Ошибка просчета цены, или маршрут недоступен ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:24:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:25:12 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:25:12 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:26:59 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:26:59 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:37:07 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:37:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:37:08 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:37:08 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:38:52 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:38:52 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:39:54 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:39:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:40:17 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:40:17 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:42:00 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:42:00 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021.5, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(322): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:44:05 --- EMERGENCY: DDelivery\DDeliveryException [ 0 ]: Unknown error. Contact with administrator! ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php [ 189 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685
2014-09-22 13:44:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(685): DDelivery\Sdk\DDeliverySDK->addSelfOrder('10146', 4, 2, 2, true, 0.74, '???????????????...', '9158085274', '???????????????...', 1803, 2021, '4755', 'stroymag32@yand...', '[{"name":"\u042...')
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(325): DDelivery\DDeliveryUI->createSelfOrder(Object(DDelivery\Order\DDeliveryOrder))
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:685