<?php

define('VERSION', '0.7.0');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('APPS', ROOT . DS . 'app');
define('CORE', ROOT . DS . 'core');
define('LIBS', ROOT . DS . 'lib');
define('MODELS', ROOT . DS . 'models');
define('VIEWS', ROOT . DS . 'views');
define('CONTROLLERS', ROOT . DS . 'controllers');
define('LOGS', ROOT . DS . 'logs');	
define('FILES', ROOT . DS. 'files');

// ---------------------  NEW DATABASE TABLE -------------------------
define('DB_HOST',         'j3d.h.filess.io');
define('DB_USER',         'Assignment2DB_identityas'); 
define('DB_PASS',         $_ENV['DB_PASS']);
define('DB_DATABASE',     'Assignment2DB_identityas');
define('DB_PORT',         '3305');
define('ApiKey' ,         $_ENV['OMDB_KEY']);
define('AIkey',           $_ENV['AI_KEY']);