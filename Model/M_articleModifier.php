<?php
    class ArticleModifier {
        private $DB;
        private $article;

        public function __construct() {
            $this->DB = Conection::conection();
            $this->article = array();
        }

        public function getArticleToModify($COD_ART) {
            $query = "SELECT * FROM articulos ar, autor_articulos aa, autor au WHERE ar.COD_ART = '$COD_ART' AND ar.COD_ART = aa.COD_ART AND aa.DNI = au.DNI";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->article[] = $rows;
            }

            return $this->article;
        }

        public function UpdateArticle($title, $article, $cod_art) {
            $query = "UPDATE articulos set titulo = '$title', contenido = '$article' WHERE COD_ART = '$cod_art'";
            $this->DB->query($query);
        }

        public function DeleteArticle($cod_art) {            
            $query = "DELETE FROM articulos WHERE COD_ART = $cod_art";
            $this->DB->query($query);
        }
    }
?>