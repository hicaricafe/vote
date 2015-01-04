<?php

define('DSN', 'mysql:host=localhost;dbname=vote');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'password');

define('SITE_URL', 'http://192.168.1.7/vote/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/vote/');
