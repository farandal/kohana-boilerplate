<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			'hostname'   => 'localhost',
			'username'   => 'root',
			'password'   => '',
			'persistent' => FALSE,
			'database'   => 'kohanabaseapp',
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
	)
	
);

