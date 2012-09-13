<?php 
defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'ORM',
	'hash_method' => 'md5',
	'salt_pattern' => '3, 7, 9, 11, 15, 20, 21, 22, 28, 30',
	'lifetime' => 1209600,
	'session_key' => 'XXX_auth',
	'hash_key' =>'a1b2c3d4e5',
);
