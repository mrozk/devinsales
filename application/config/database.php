<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'alternate' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
            /*
			'hostname'   => 'localhost',
			'database'   => 'insales',
			'username'   => 'root',
			'password'   => 'litionkenotivili',
			'persistent' => FALSE,
            */
            'hostname'   => 'localhost',
            'database'   => 'c1devinsales',
            'username'   => 'c1dba',
            'password'   => 'OH2AgbFiU',
            'persistent' => FALSE,

        ),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	'default' => array(
		'type'       => 'PDO',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
            /*
			'dsn'        => 'mysql:host=localhost;dbname=insales',
			'username'   => 'root',
			'password'   => 'litionkenotivili',
			'persistent' => FALSE,
            */
            'dsn'        => 'mysql:host=localhost;dbname=c1devinsales',
            'username'   => 'c1dba',
            'password'   => 'OH2AgbFiU',
            'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
);
