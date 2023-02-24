<?php

    class AuthorModifier {
        private $DB;
        private $author;

        public function __construct() {
            $this->DB = Conection::conection();
            $this->author = array();
        }

        public function getAuthorToModify($IDauthor) {
            $query = "SELECT * from autor where DNI = '$IDauthor'";
            $dataQuery = $this->DB->query($query);

            while($rows = $dataQuery->fetch_assoc()) {
                $this->author[] = $rows;
            }

            return $this->author;
        }

        public function updateAuthor($DNI, $nombre, $apellidos, $descripcion) {
        $query = "UPDATE autor set NOMBRE = '$nombre', APELLIDOS = '$apellidos', DESCRIPCION = '$descripcion' WHERE DNI = '$DNI'";
            $this->DB->query($query);
        }

        public function deleteAuthor($DNI) {            
            $query = "DELETE FROM autor WHERE DNI = '$DNI'";
            $this->DB->query($query);
        }
    }

?>