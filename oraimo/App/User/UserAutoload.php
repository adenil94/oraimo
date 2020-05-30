<?php

class LocationAutoload {

    static function loadClass() {
        spl_autoload_register(array(__CLASS__, 'LocationAppClass'));
        spl_autoload_register(array(__CLASS__, 'LocationFronClass'));
        spl_autoload_register(array(__CLASS__, 'LocationBackClass'));
    }

    static function LocationAppClass($classname) {
        $file = 'App/Location/'.$classname .'.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }

    static function LocationFronClass($classname) {
        $file = 'App/Location/Modules/LocationFront/'.$classname .'.php';
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
