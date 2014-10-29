<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-20 14:50:38 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/layout.php [ 29 ] in file:line
2014-06-20 14:50:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-20 14:53:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/views/layout.php [ 29 ] in /var/www/clients/client1/web4/web/application/views/layout.php:29
2014-06-20 14:53:20 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/views/layout.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 29, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/views/layout.php:29