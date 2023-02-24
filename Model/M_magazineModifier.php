<?php
    class MagazineModifier {
        private $DB;
        private $magazine;
        private $relatedArticles;
        private $articles;

        public function __construct() {
            $this->DB = Conection::conection();
            $this->magazine = array();
            $this->relatedArticles = array();
            $this->articles = array();
        }

        public function getMagazineToModify($IDmagazine) {
            $query = "SELECT * FROM revistas WHERE COD_REV = $IDmagazine";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->magazine[] = $rows;
            }

            return $this->magazine;
        }

        public function getRelatedArticles($COD_REV) {
            $query = "SELECT * FROM articulos WHERE COD_REV = $COD_REV";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->relatedArticles[] = $rows;
            }

            return $this->relatedArticles;
        }

        public function getArticles() {
            $query = "SELECT * FROM articulos";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->articles[] = $rows;
            }

            return $this->articles;
        }

        public function updateMagazine($COD_REV, $title, $editorial, $number, $FECHA_PUB) {
            $query = "UPDATE revistas set TITULO = '$title', EDITORIAL = '$editorial', NUMERO = '$number', FECHA = '$FECHA_PUB' WHERE COD_REV = $COD_REV";
            $this->DB->query($query);
        }

        function linkArticleToMagazine($COD_REV, $COD_ART) {
            $query = "UPDATE articulos set COD_REV = $COD_REV WHERE COD_ART = $COD_ART";
            $this->DB->query($query);
        }

        public function deleteMagazine($COD_REV) {
            $query = "DELETE FROM revistas WHERE COD_REV = $COD_REV";
            $this->DB->query($query);
        }
    }
?>