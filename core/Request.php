<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 26/03/13
 * Time: 12:03
 */

class Request {
    private $_module;
    private $_controller;
    private $_action;
    private $_args;
    private $_moduleCode = array(
        'home'
    );
    private $_controllerCode = array(
        'index'
    );

    public function __construct(){
        if (isset($_GET['url'])){
            $url = explode('/', Globals::get('url'));
            $url = array_filter($url);
            $this->_module = strtolower(array_shift($url));
            $this->_controller = strtolower(array_shift($url));
            $this->_action = strtolower(array_shift($url));
            $this->_args = $url;
        }

        if(!isset($this->_module) || $this->_module == 'index.php'){
            $this->_module = 'home';
        }

        if(!isset($this->_controller) || empty($this->_controller)){
            $this->_controller = 'index';
        }
        if ($this->_action == ''){
            $this->_action = 'show';
        }
        if (!isset($this->_argumentos)){
            $this->_argumentos = array();
        }

    }

    public function getModule(){
        if(in_array($this->_module, $this->_moduleCode)){
            return $this->_module;
        }
        throw new Exception('Módulo Inválido');
    }

    public function getController(){
        if(in_array($this->_controller, $this->_controllerCode)){
            return ucfirst($this->_controller) . 'Controller';
        }
        throw new Exception('Controlador Inválido');
    }

    public function getAction(){
        return $this->_action . 'Action';
    }

    public function getArgs(){
        return $this->_args;
    }

}

?>