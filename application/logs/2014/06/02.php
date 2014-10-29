<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-02 11:08:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: type ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-02 11:08:33 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1706): DDelivery\DDeliveryUI->getCityByDisplay('952')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1479): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(57): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-02 11:08:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: type ~ APPPATH/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php [ 1540 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540
2014-06-02 11:08:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/client...', 1540, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1706): DDelivery\DDeliveryUI->getCityByDisplay('952')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1479): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(57): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php:1540