<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-05 00:08:53 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('{\"fields_values\":[],\"order_lines\":[{\"id\":9944401,\"order_' at line 1 [ INSERT INTO ordddd (create) VALUES ('{\"fields_values\":[],\"order_lines\":[{\"id\":9944401,\"order_id\":3046586,\"sale_price\":12600.0,\"full_sale_price\":12600.0,\"total_price\":12600.0,\"full_total_price\":12600.0,\"quantity\":1,\"reserved_quantity\":0,\"weight\":null,\"variant_id\":42474764,\"product_id\":27913632,\"sku\":null,\"title\":\"Samsung Galaxy Tab 2 7.0 P3100 8Gb\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"created_at\":\"2014-06-05T00:08:53+04:00\"}],\"order_changes\":[{\"id\":9547360,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"action\":\"order_created\",\"value_was\":null,\"value_is\":null,\"user_name\":\"\\u0414\\u043e\\u043a\\u0442\\u043e\\u0440 \\u043c\\u0440\\u043e\\u0437\\u043a\"}],\"discount\":null,\"shipping_address\":{\"fields_values\":[],\"name\":\"sdff\",\"surname\":null,\"middlename\":null,\"phone\":\"+79261111111\",\"address\":\"\",\"city\":\"\",\"state\":\"\\u0433 \\u041c\\u043e\\u0441\\u043a\\u0432\\u0430\",\"country\":null,\"zip\":\"\",\"full_name\":\"sdff\",\"full_delivery_address\":\"\\u0433 \\u041c\\u043e\\u0441\\u043a\\u0432\\u0430\"},\"client\":{\"id\":2919906,\"fields_values\":[],\"name\":\"sdff\",\"surname\":null,\"middlename\":null,\"email\":\"ffdsf@sdsd.sd\",\"phone\":\"+79261111111\",\"registered\":false,\"subscribe\":true,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"bonus_points\":0,\"client_group_id\":null,\"ip_addr\":\"176.37.148.81\"},\"discounts\":[],\"total_price\":13042.5,\"items_price\":12600.0,\"id\":3046586,\"key\":\"ee57f604ab7cc51d2fa686dd33e28e5c\",\"number\":1001,\"comment\":\"sff\",\"delivery_title\":\"DDelivery\",\"delivery_description\":\"DDelivery (DDelivery)\",\"delivery_price\":442.5,\"full_delivery_price\":442.5,\"payment_description\":\"\\u041d\\u0430\\u043b\\u0438\\u0447\\u043d\\u044b\\u043c\\u0438 \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443\",\"payment_title\":\"\\u041d\\u0430\\u043b\\u0438\\u0447\\u043d\\u044b\\u043c \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443\",\"referer\":\"\",\"current_location\":\"/\",\"first_referer\":\"\",\"first_current_location\":\"/\",\"fulfillment_status\":\"new\",\"delivered_at\":null,\"accepted_at\":null,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"financial_status\":\"pending\",\"delivery_date\":null,\"delivery_from_hour\":null,\"delivery_to_hour\":null,\"paid_at\":null,\"delivery_variant_id\":221842,\"payment_gateway_id\":182218,\"margin\":\"0.0\",\"cookies\":{}}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:08:53 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:09:36 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('{\"fields_values\":[],\"order_lines\":[{\"id\":9944401,\"order_' at line 1 [ INSERT INTO ordddd (create) VALUES ('{\"fields_values\":[],\"order_lines\":[{\"id\":9944401,\"order_id\":3046586,\"sale_price\":12600.0,\"full_sale_price\":12600.0,\"total_price\":12600.0,\"full_total_price\":12600.0,\"quantity\":1,\"reserved_quantity\":0,\"weight\":null,\"variant_id\":42474764,\"product_id\":27913632,\"sku\":null,\"title\":\"Samsung Galaxy Tab 2 7.0 P3100 8Gb\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"created_at\":\"2014-06-05T00:08:53+04:00\"}],\"order_changes\":[{\"id\":9547360,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"action\":\"order_created\",\"value_was\":null,\"value_is\":null,\"user_name\":\"\\u0414\\u043e\\u043a\\u0442\\u043e\\u0440 \\u043c\\u0440\\u043e\\u0437\\u043a\"}],\"discount\":null,\"shipping_address\":{\"fields_values\":[],\"name\":\"sdff\",\"surname\":null,\"middlename\":null,\"phone\":\"+79261111111\",\"address\":\"\",\"city\":\"\",\"state\":\"\\u0433 \\u041c\\u043e\\u0441\\u043a\\u0432\\u0430\",\"country\":null,\"zip\":\"\",\"full_name\":\"sdff\",\"full_delivery_address\":\"\\u0433 \\u041c\\u043e\\u0441\\u043a\\u0432\\u0430\"},\"client\":{\"id\":2919906,\"fields_values\":[],\"name\":\"sdff\",\"surname\":null,\"middlename\":null,\"email\":\"ffdsf@sdsd.sd\",\"phone\":\"+79261111111\",\"registered\":false,\"subscribe\":true,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"bonus_points\":0,\"client_group_id\":null,\"ip_addr\":\"176.37.148.81\"},\"discounts\":[],\"total_price\":13042.5,\"items_price\":12600.0,\"id\":3046586,\"key\":\"ee57f604ab7cc51d2fa686dd33e28e5c\",\"number\":1001,\"comment\":\"sff\",\"delivery_title\":\"DDelivery\",\"delivery_description\":\"DDelivery (DDelivery)\",\"delivery_price\":442.5,\"full_delivery_price\":442.5,\"payment_description\":\"\\u041d\\u0430\\u043b\\u0438\\u0447\\u043d\\u044b\\u043c\\u0438 \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443\",\"payment_title\":\"\\u041d\\u0430\\u043b\\u0438\\u0447\\u043d\\u044b\\u043c \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443\",\"referer\":\"\",\"current_location\":\"/\",\"first_referer\":\"\",\"first_current_location\":\"/\",\"fulfillment_status\":\"new\",\"delivered_at\":null,\"accepted_at\":null,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"financial_status\":\"pending\",\"delivery_date\":null,\"delivery_from_hour\":null,\"delivery_to_hour\":null,\"paid_at\":null,\"delivery_variant_id\":221842,\"payment_gateway_id\":182218,\"margin\":\"0.0\",\"cookies\":{}}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:09:36 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:10:10 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('{\"fields_values\":[],\"order_lines\":[{\"id\":9944401,\"order_' at line 1 [ INSERT INTO ordddd (create) VALUES ('{\"fields_values\":[],\"order_lines\":[{\"id\":9944401,\"order_id\":3046586,\"sale_price\":12600.0,\"full_sale_price\":12600.0,\"total_price\":12600.0,\"full_total_price\":12600.0,\"quantity\":1,\"reserved_quantity\":0,\"weight\":null,\"variant_id\":42474764,\"product_id\":27913632,\"sku\":null,\"title\":\"Samsung Galaxy Tab 2 7.0 P3100 8Gb\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"created_at\":\"2014-06-05T00:08:53+04:00\"}],\"order_changes\":[{\"id\":9547360,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"action\":\"order_created\",\"value_was\":null,\"value_is\":null,\"user_name\":\"\\u0414\\u043e\\u043a\\u0442\\u043e\\u0440 \\u043c\\u0440\\u043e\\u0437\\u043a\"}],\"discount\":null,\"shipping_address\":{\"fields_values\":[],\"name\":\"sdff\",\"surname\":null,\"middlename\":null,\"phone\":\"+79261111111\",\"address\":\"\",\"city\":\"\",\"state\":\"\\u0433 \\u041c\\u043e\\u0441\\u043a\\u0432\\u0430\",\"country\":null,\"zip\":\"\",\"full_name\":\"sdff\",\"full_delivery_address\":\"\\u0433 \\u041c\\u043e\\u0441\\u043a\\u0432\\u0430\"},\"client\":{\"id\":2919906,\"fields_values\":[],\"name\":\"sdff\",\"surname\":null,\"middlename\":null,\"email\":\"ffdsf@sdsd.sd\",\"phone\":\"+79261111111\",\"registered\":false,\"subscribe\":true,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"bonus_points\":0,\"client_group_id\":null,\"ip_addr\":\"176.37.148.81\"},\"discounts\":[],\"total_price\":13042.5,\"items_price\":12600.0,\"id\":3046586,\"key\":\"ee57f604ab7cc51d2fa686dd33e28e5c\",\"number\":1001,\"comment\":\"sff\",\"delivery_title\":\"DDelivery\",\"delivery_description\":\"DDelivery (DDelivery)\",\"delivery_price\":442.5,\"full_delivery_price\":442.5,\"payment_description\":\"\\u041d\\u0430\\u043b\\u0438\\u0447\\u043d\\u044b\\u043c\\u0438 \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443\",\"payment_title\":\"\\u041d\\u0430\\u043b\\u0438\\u0447\\u043d\\u044b\\u043c \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443\",\"referer\":\"\",\"current_location\":\"/\",\"first_referer\":\"\",\"first_current_location\":\"/\",\"fulfillment_status\":\"new\",\"delivered_at\":null,\"accepted_at\":null,\"created_at\":\"2014-06-05T00:08:53+04:00\",\"updated_at\":\"2014-06-05T00:08:53+04:00\",\"financial_status\":\"pending\",\"delivery_date\":null,\"delivery_from_hour\":null,\"delivery_to_hour\":null,\"paid_at\":null,\"delivery_variant_id\":221842,\"payment_gateway_id\":182218,\"margin\":\"0.0\",\"cookies\":{}}') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:10:10 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:11:41 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('asdasd')' at line 1 [ INSERT INTO ordddd (create) VALUES ('asdasd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:11:41 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:12:07 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('asdasd')' at line 1 [ INSERT INTO ordddd (create) VALUES ('asdasd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:12:07 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:14:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('errwreerwer wervwerw')' at line 1 [ INSERT INTO ordddd (create) VALUES ('errwreerwer wervwerw') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:14:16 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:14:22 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create) VALUES ('errwreerwer wervwerw')' at line 1 [ INSERT INTO ordddd (create) VALUES ('errwreerwer wervwerw') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:14:22 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:04 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd')' at line 1 [ INSERT INTO ordddd (create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:04 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:05 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd')' at line 1 [ INSERT INTO ordddd (create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:05 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:06 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd')' at line 1 [ INSERT INTO ordddd (create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:06 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd')' at line 1 [ INSERT INTO ordddd (create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:06 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd')' at line 1 [ INSERT INTO ordddd (create, orderer) VALUES ('errwreerwer wervwerw', 'asdsd') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 00:15:06 --- DEBUG: #0 /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO ord...', false, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Controller/Orders.php(25): Kohana_Database_Query->execute()
#2 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Orders->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Orders))
#5 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/clients/client1/web4/web/modules/database/classes/Kohana/Database/Query.php:251
2014-06-05 15:35:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 32 ~ APPPATH/classes/Sdk/application/templates/couriers.php [ 57 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:35:23 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/client...', 57, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1740): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1506): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(149): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:35:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 32 ~ APPPATH/classes/Sdk/application/templates/couriers.php [ 57 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:35:30 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/client...', 57, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1740): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1506): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(149): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:36:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 32 ~ APPPATH/classes/Sdk/application/templates/couriers.php [ 57 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:36:34 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/client...', 57, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1740): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1506): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(149): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:43:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 32 ~ APPPATH/classes/Sdk/application/templates/couriers.php [ 57 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:43:56 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/client...', 57, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1740): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1506): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(149): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:47:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 32 ~ APPPATH/classes/Sdk/application/templates/couriers.php [ 57 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:47:03 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/client...', 57, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1740): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1506): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(149): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:47:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 32 ~ APPPATH/classes/Sdk/application/templates/couriers.php [ 57 ] in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57
2014-06-05 15:47:26 --- DEBUG: #0 /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/client...', 57, Array)
#1 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1740): include('/var/www/client...')
#2 /var/www/clients/client1/web4/web/application/classes/Sdk/application/classes/DDelivery/DDeliveryUI.php(1506): DDelivery\DDeliveryUI->renderCourier()
#3 /var/www/clients/client1/web4/web/application/classes/Controller/Sdk.php(149): DDelivery\DDeliveryUI->render(Array)
#4 /var/www/clients/client1/web4/web/system/classes/Kohana/Controller.php(84): Controller_Sdk->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sdk))
#7 /var/www/clients/client1/web4/web/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/clients/client1/web4/web/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/clients/client1/web4/web/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/clients/client1/web4/web/application/classes/Sdk/application/templates/couriers.php:57