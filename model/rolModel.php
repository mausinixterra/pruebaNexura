<?php

    class rolModel extends Main {
        private $id;
        private $nombre;

        public function listRol(){
            $queryRol = "SELECT * FROM roles";
            $listRol = parent::select( $queryRol ); 
            return $listRol;
        }
    }

?>