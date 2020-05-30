<?php

class FrontendAutoload {

    static function loadClass() {
        spl_autoload_register(array(__CLASS__, 'FrontendAppClass'));
        spl_autoload_register(array(__CLASS__, 'oraimoFronClass'));
    }

    static function FrontendAppClass($classname) {
        $file = 'App/Frontend/'.$classname .'.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }

    static function oraimoFronClass($classname) {
        $file = 'App/Frontend/Modules/oraimo/'.$classname .'.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }

    

}
