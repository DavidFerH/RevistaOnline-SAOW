<?php

    class Magazines {
        private $DB;
        private $magazines;

        public function __construct() {
            $this->DB = Conection::conection();
            $this->magazines = array();
        }

        public function getMagazines() {
            $query = "SELECT * FROM revistas";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->magazines[] = $rows;
            }

            return $this->magazines;
        }
    }

?>