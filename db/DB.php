<?php
    class Conection {
        public static function conection() {
            $conector = new mysqli('localhost', 'root', '', 'ddbb_revistaonline');
            $conector->set_charset('utf8');
            return $conector;
        }
    }
?>