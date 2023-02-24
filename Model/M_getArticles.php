<?php

    class Articles {
        private $DB;
        private $articles;

        public function __construct() {
            $this->DB = Conection::conection();
            $this->articles = array();
        }

        public function getArticles() {
            $query = "SELECT * FROM articulos";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->articles[] = $rows;
            }

            return $this->articles;
        }
    }

?>