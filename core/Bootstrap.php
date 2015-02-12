 <?php

/*
 * Created By Alan
 */

    class Bootstrap{
        public static function run(){
            $request = new Request();
            $controller = $request->getController();
            $controllerPath = Router::buildPath($request);
            $action     = $request->getAction();
            if (is_readable($controllerPath)){
                require_once $controllerPath;
            } else {
                throw new Exception('no encontrado');
            }
            $controllerInstance = new $controller();
            $controllerInstance->$action();
        }
    }

?>
