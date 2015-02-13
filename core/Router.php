<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 24/05/13
 * Time: 2:20
 * To change this template use File | Settings | File Templates.
 */

class Router{
   static public function buildPath(Request $peticion){
        $module = $peticion->getModule();
        $controller = $peticion->getController();
        $path = CONTROLLER_PATH . $module . DS . $controller . '.php';
        return $path;
   }
}