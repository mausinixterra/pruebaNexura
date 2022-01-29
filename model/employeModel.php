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
                $queryEployedID = "SELECT MAX(id) as id FROM empleado";
				$employedID = mysqli_fetch_row(parent::select( $queryEployedID ));
                if( $employedID[0] != '' ){
                    $id = $employedID[0];
                    $queryRol = "INSERT INTO empleado_rol (empleado_id, rol_id) VALUES ($id, '$objEmploye->rol');";
                    $result = parent::insert( $queryRol );
                    return json_decode($result);
                }
            }
        }

        public function list(){
            $queryEployed = "SELECT empleado.id, empleado.nombre, email, sexo, areas.nombre AS area, boletin FROM empleado, areas WHERE areas.id = empleado.area_id";
            $listEmployed = parent::select( $queryEployed );
            
            return $listEmployed;
        }

        public function deleteEmploye( $var ) {
            $queryEployed = "DELETE empleado, empleado_rol FROM empleado INNER JOIN empleado_rol ON empleado.id = empleado_rol.empleado_id WHERE empleado.id = $var ";
            $respuesta = parent::delete($queryEployed);
            return $respuesta;
        }
    }
?>