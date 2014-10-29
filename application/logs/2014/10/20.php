<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-20 15:42:36 --- EMERGENCY: InsalesCurlException [ 28 ]: Operation timed out after 30001 milliseconds with 0 bytes received ~ APPPATH/classes/InsalesApi.php [ 51 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-10-20 15:42:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(32): InsalesApi->curl_http_api_request_('GET', 'http://ddeliver...', '', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(359): InsalesApi->api('GET', '/admin/payment_...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(386): Controller_Cabinet::getPaymentWays(Object(InsalesApi))
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-10-20 15:44:14 --- EMERGENCY: InsalesCurlException [ 28 ]: Operation timed out after 30001 milliseconds with 0 bytes received ~ APPPATH/classes/InsalesApi.php [ 51 ] in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32
2014-10-20 15:44:14 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/InsalesApi.php(32): InsalesApi->curl_http_api_request_('GET', 'http://ddeliver...', '', Array, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(359): InsalesApi->api('GET', '/admin/payment_...')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(386): Controller_Cabinet::getPaymentWays(Object(InsalesApi))
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/application/classes/InsalesApi.php:32