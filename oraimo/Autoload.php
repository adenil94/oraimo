<?php

class Autoload {

    static function loadClass() {
        spl_autoload_register(array(__CLASS__, 'LibraryClass'));

    } 

    static function LibraryClass($classname) {
        $file = 'Library/oraimo/'.$classname .'.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }

    static function ALLautoload(){
        

		// APP GestionLocataire gérant ANDIL ADEBIYI
		require 'App/Backend/BackendAutoload.php';
		BackendAutoload::loadClass();
        // APP GestionLocataire gérant ANDIL ADEBIYI
        require 'App/Frontend/FrontendAutoload.php';
        FrontendAutoload::loadClass();   
    }


}



