<?php
/**
 * Created by Alan.
 * User: alan
 * Date: 13/02/15
 * Time: 09:32
 */

spl_autoload_register(function ($className){
    $className = str_replace('\\', '/', $className);
    require_once ROOT . $className . '.php';
});