<?php
ini_set('display_errors', true);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'core' . DS);

//try{

    require_once APP_PATH . 'Config.php';
    require_once APP_PATH . 'Settings.php';
    require_once APP_PATH . 'Globals.php';
    require_once APP_PATH . 'Database.php';
    require_once APP_PATH . 'Hash.php';
    require_once APP_PATH . 'Request.php';
    require_once APP_PATH . 'Router.php';
    require_once APP_PATH . 'Bootstrap.php';
    require_once VENDOR_PATH . 'autoload.php';
    require_once APP_PATH . 'CruciusAutoloader.php';

    Bootstrap::run();

//}catch(Exception $e){
//    header('location:' . BASE_URL . 'error/default');
//}

?>