<?php
    include 'main.php';

    class employeModel extends Main {
        private $id;
        private $nombre;
        private $email;
        private $sexo;
        private $area_id;
        private $boletin;
        private $description;
        private $rol;

        public function insert( $objEmploye ){
            $queryEployed = "INSERT INTO empleado (nombre, email, sexo, area_id, boletin, descripcion) VALUES ('$objEmploye->nombre', '$objEmploye->email', '$objEmploye->sexo', '$objEmploye->area_id', '$objEmploye->boletin', '$objEmploye->description');";
            $result = parent::insert( $queryEployed );
            if( $result ){
                $queryEployedID = "SELECT MAX(id) as id FROM empleado;";
				$eployedID = mysqli_fetch_row(parent::select($queryEployedID));
                if( $employedID[0] != '' ){
                    $id = $employedID[0];
                    $queryRol = "INSERT INTO empleado_rol (empleado_id, rol_id) VALUES ($id, '$objEmploye->rol');";
                    $result = parent::insert( $queryRol );
                }
            }
        }
    }
?>