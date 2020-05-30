<?php

class BackendAutoload {

    static function loadClass() {
        spl_autoload_register(array(__CLASS__, 'BackendAppClass'));
        spl_autoload_register(array(__CLASS__, 'crmFronClass'));
        spl_autoload_register(array(__CLASS__, 'LocationBackClass'));
    }

    static function BackendAppClass($classname) {
        $file = 'App/Backend/'.$classname .'.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }

    static function crmFronClass($classname) {
        $file = 'App/Backend/Modules/Crm/'.$classname .'.php';
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
