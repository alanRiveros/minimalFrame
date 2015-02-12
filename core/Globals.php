<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 19/04/13
 * Time: 11:11
 */
class Globals{
/*
    public static function post($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = stripslashes($_POST[$clave]);
            $_POST[$clave] = strip_tags($_POST[$clave]);
            return trim($_POST[$clave]);
        }
    }

    public static function get($clave){
        if(isset($_GET[$clave]) && !empty($_GET[$clave])){
            if (is_array($_GET[$clave])){
                for($i = 1; $i<=count($_GET[$clave]); $i++){
                    $_GET[$clave][$i - 1] = strip_tags($_GET[$clave][$i - 1]);
                    $_GET[$clave][$i - 1] = (string) preg_replace('/[^A-Z0-9_.]/i', '', $_GET[$clave][$i - 1]);
                }
                return $_GET[$clave];
            }
            $_GET[$clave] = stripslashes($_GET[$clave]);
            $_GET[$clave] = strip_tags($_GET[$clave]);
            $_GET[$clave] = (string) preg_replace('/[^A-Z0-9_.]/i', '', $_GET[$clave]);
            return trim($_GET[$clave]);
        }
    }
*/
    public static function get($key){
        if(isset($_GET[$key]) && !empty($_GET[$key])){
            $_GET[$key] = stripslashes($_GET[$key]);
            $_GET[$key] = strip_tags($_GET[$key]);
            return trim($_GET[$key]);
        }
        return false;
    }

}

