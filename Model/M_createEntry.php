<?php
    class CreateEntry {
        private $DB;
        private $authors;
        private $articles;
        private $magazines;

        public function __construct() {
            $this->DB = Conection::conection();
            $this->authors = array();
            $this->articles = array();
            $this->magazines = array();
        }

        // GETTERS

        public function getAuthors() {
            $query = "SELECT * FROM autor";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->authors[] = $rows;
            }

            return $this->authors;
        }

        public function getArticles() {
            $query = "SELECT * FROM articulos";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->articles[] = $rows;
            }

            return $this->articles;
        }

        public function getMagazines() {
            $query = "SELECT * FROM revistas";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->magazines[] = $rows;
            }

            return $this->magazines;
        }

        // SETTERS
        public function setArticle($idAutor, $date, $title, $article) {
            $query = "INSERT INTO articulos(TITULO, CONTENIDO) VALUES ('$title','$article')";
            $this->DB->query($query);

            $query = "SELECT COD_ART FROM articulos WHERE TITULO = '$title'";
            $COD_ART = $this->DB->query($query);
            $COD_ART = $COD_ART->fetch_assoc();
            $COD_ART = $COD_ART["COD_ART"];

            $query  = "INSERT INTO autor_articulos(DNI, COD_ART, FECHA_PUB) VALUES ('$idAutor','$COD_ART','$date')";
            $COD_ART = $this->DB->query($query);
        }

        public function setMagazine($title, $number, $editorial, $date, $coverPath) {
            $query = "INSERT INTO revistas(TITULO, NUMERO, EDITORIAL, FECHA, PORTADA) VALUES ('$title', $number, '$editorial', '$date', '$coverPath')";
            $this->DB->query($query);
        }

        public function setAuthor($dni, $nombre, $apellidos, $descripcion) {
            $query = "INSERT INTO autor(DNI, NOMBRE, APELLIDOS, DESCRIPCION) VALUES ('$dni','$nombre','$apellidos','$descripcion')";
            $this->DB->query($query);
        }
    }
?>