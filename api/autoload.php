<?php

class autoload {

    static function loadClass() {
        spl_autoload_register(array(__CLASS__, 'libClass'));
        spl_autoload_register(array(__CLASS__, 'entite'));
    }

    static function libClass($classname) {
        $file = 'lib/oraimo/'.$classname .'.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }  

    static function entite(){
          $file = 'entite'.$classname .'.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
    
}
