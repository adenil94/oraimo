<?php

class UserAutoload {

    static function loadClass() {
        spl_autoload_register(array(__CLASS__, 'BackendAppClass'));
        spl_autoload_register(array(__CLASS__, 'userFronClass'));
        spl_autoload_register(array(__CLASS__, 'LocationBackClass'));
    }

    static function BackendAppClass($classname) {
        $file = 'App/User/'.$classname .'.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }

    static function userFronClass($classname) {
        $file = 'App/User/Modules/User/'.$classname .'.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }

        static function LocationBackClass($classname) {
        $file = 'App/Location/Modules/LocationBack/'.$classname .'.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }

}
