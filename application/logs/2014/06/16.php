<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-16 18:07:03 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-16 18:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #109, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(531): DDelivery\Sdk\DDeliverySDK->getCityByIp('78.111.186.212')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1327): DDelivery\DDeliveryUI->getCityByIp('78.111.186.212')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1450): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(56): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-16 18:07:05 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-16 18:07:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #109, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(531): DDelivery\Sdk\DDeliverySDK->getCityByIp('78.111.186.212')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1327): DDelivery\DDeliveryUI->getCityByIp('78.111.186.212')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1450): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(56): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-16 18:07:41 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-16 18:07:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #109, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(531): DDelivery\Sdk\DDeliverySDK->getCityByIp('78.111.186.212')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1327): DDelivery\DDeliveryUI->getCityByIp('78.111.186.212')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1450): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(56): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-06-16 18:12:52 --- EMERGENCY: ErrorException [ 2 ]: curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set ~ APPPATH/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php [ 137 ] in file:line
2014-06-16 18:12:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_setopt(): ...', '/var/www/client...', 137, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(137): curl_setopt(Resource id #109, 52, 1)
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/RequestProvider.php(104): DDelivery\Sdk\RequestProvider->_setRequest('stagenode', Array)
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Sdk/DDeliverySDK.php(228): DDelivery\Sdk\RequestProvider->request('geoip', Array, 'get', 'stagenode')
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(531): DDelivery\Sdk\DDeliverySDK->getCityByIp('78.111.186.212')
#5 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1327): DDelivery\DDeliveryUI->getCityByIp('78.111.186.212')
#6 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1450): DDelivery\DDeliveryUI->getCityId()
#7 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(57): DDelivery\DDeliveryUI->render(Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in file:line