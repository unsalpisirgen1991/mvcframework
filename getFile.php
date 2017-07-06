<?php echo !defined('__SECURITY__') ? die('Warning Forbidden Access Blocked') : null;

define("_ROOT_",realpath('.'));

define("_SYSTEM_",_ROOT_."/system/");

define("_LIBRARY_",_SYSTEM_."/library/");

define("_CORE_",_SYSTEM_.'/');

define("_APP_",_ROOT_."/app/");

define("_CONTROLLER_",_APP_.'controllers/');

define("_MODELS_",_APP_.'models/');

define("_VIEWS_",_APP_.'views/');

define("_CONFIGS_",_APP_.'configs/');