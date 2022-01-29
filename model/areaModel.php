<?php
    include 'main.php';

    class areaModel extends Main {
        private $id;
        private $nombre;

        public function listAreas(){
            $queryAreas = "SELECT * FROM areas";
            $listEAreas = parent::select( $queryAreas );
            
            return $listEAreas;
        }
    }

?>