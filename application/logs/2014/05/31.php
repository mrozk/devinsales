<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-31 12:15:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The setting property does not exist in the Model_InsalesUser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 12:15:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('setting')
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(23): Kohana_ORM->__get('setting')
#2 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(53): IntegratorShop->__construct(Object(Request), 136789)
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 12:24:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete usersetting model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:49
2014-05-31 12:24:24 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Controller/Control.php(49): Kohana_ORM->delete()
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Control->action_uninstall()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Control))
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/clients/client1/web4/web/application/classes/Controller/Control.php:49
2014-05-31 13:14:33 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_UserSetting as array ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 57 ] in file:line
2014-05-31 13:14:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-31 13:30:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/Controller/Cabinet.php [ 105 ] in file:line
2014-05-31 13:30:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-31 13:35:17 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/Cabinet.php [ 98 ] in file:line
2014-05-31 13:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-31 13:35:25 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/Cabinet.php [ 98 ] in file:line
2014-05-31 13:35:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-31 13:42:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: payments ~ APPPATH/views/panel.php [ 79 ] in /var/www/clients/client1/web4/web/application/views/panel.php:79
2014-05-31 13:42:51 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/views/panel.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/client...', 79, Array)
#1 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/clients/client1/web4/web/application/views/layout.php(85): Kohana_View->__toString()
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/clients/client1/web4/web/application/views/panel.php:79
2014-05-31 14:57:24 --- EMERGENCY: ErrorException [ 2 ]: implode(): Argument must be an array ~ APPPATH/classes/Controller/Cabinet.php [ 24 ] in file:line
2014-05-31 14:57:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Argu...', '/var/www/client...', 24, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Cabinet.php(24): implode(NULL)
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Cabinet->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-31 15:08:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The pvz_companies property does not exist in the Model_InsalesUser class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 15:08:13 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('pvz_companies')
#1 /var/www/clients/client1/web4/web/application/views/panel.php(24): Kohana_ORM->__get('pvz_companies')
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#3 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/clients/client1/web4/web/application/views/layout.php(85): Kohana_View->__toString()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(61): include('/var/www/client...')
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/client...', Array)
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cabinet))
#12 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 17:17:54 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 100 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:100
2014-05-31 17:17:54 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(100): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/client...', 100, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(132): IntegratorShop->_parseCart('27913632_5,2791...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Adapter/DShopAdapter.php(213): IntegratorShop->_getProductsFromCart()
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(91): DDelivery\Adapter\DShopAdapter->getProductsFromCart()
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(54): DDelivery\DDeliveryUI->__construct(Object(IntegratorShop))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:100
2014-05-31 17:19:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$option_values ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 99 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:99
2014-05-31 17:19:14 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(99): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/client...', 99, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(132): IntegratorShop->_parseCart('27913632_5,2791...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Adapter/DShopAdapter.php(213): IntegratorShop->_getProductsFromCart()
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(91): DDelivery\Adapter\DShopAdapter->getProductsFromCart()
#4 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(54): DDelivery\DDeliveryUI->__construct(Object(IntegratorShop))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php:99
2014-05-31 17:38:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Sdk/example/IntegratorShop.php [ 132 ] in file:line
2014-05-31 17:38:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-31 17:55:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The planwidth property does not exist in the Model_UserSetting class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 17:55:35 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('planwidth')
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(110): Kohana_ORM->__get('planwidth')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(170): IntegratorShop->_parseCart('27913632_5,2791...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Adapter/DShopAdapter.php(213): IntegratorShop->_getProductsFromCart()
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(91): DDelivery\Adapter\DShopAdapter->getProductsFromCart()
#5 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(54): DDelivery\DDeliveryUI->__construct(Object(IntegratorShop))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 18:12:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The plan_length property does not exist in the Model_UserSetting class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603
2014-05-31 18:12:37 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('plan_length')
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(113): Kohana_ORM->__get('plan_length')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/example/IntegratorShop.php(175): IntegratorShop->_parseCart('27913632_5,2791...')
#3 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/Adapter/DShopAdapter.php(213): IntegratorShop->_getProductsFromCart()
#4 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(91): DDelivery\Adapter\DShopAdapter->getProductsFromCart()
#5 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(54): DDelivery\DDeliveryUI->__construct(Object(IntegratorShop))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#9 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/clients/client1/web4/web/modules/orm/classes/Kohana/ORM.php:603