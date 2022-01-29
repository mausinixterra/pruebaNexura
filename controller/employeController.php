<?php
    include 'model/employeModel.php';
    include 'model/areaModel.php';
    include 'model/rolModel.php';

    class employe{
        private $modelo;

        public function __constructor(){
            $this->$modelo = new employeModel();
        }

        public function main(){
            $obj = new employeModel();
            $listEmploye = $obj->list();
            include 'view/listEmployed.php';
        }
        
        public function create(){
            $objArea = new areaModel();
            $objRol = new rolModel();
            $areas = $objArea->listAreas();
            $roles = $objRol->listRol();
            include 'view/createEmployed.php'; 
        }

        public function update(){
            if(!is_numeric( $_GET['id'] )){
                echo "<script>
                        alert('El id del empleado no es valido.');
                        window.location.href='?modulo=employe&componente=main';
                        </script>";
                return false;
             } 
            $id  =  $_GET['id'];
            $obj = new employeModel();
            $objArea = new areaModel();
            $objRol = new rolModel();
            $areas = $objArea->listAreas();
            $roles = $objRol->listRol();
            $data = $obj->find($id);
            $dataUserRol =  $obj->findRolesUser($id);
            include 'view/updateEmployed.php'; 
           
        }

        public function createProces(){
            
                $datos = new \stdClass();
                $datos->nombre      = isset($_POST['inputName'])   ? $_POST['inputName']   :NULL;
                $datos->email       = isset($_POST['email'])       ? $_POST['email']       :NULL;
                $datos->sexo        = isset($_POST['sexo'])        ? $_POST['sexo']        :NULL;
                $datos->area_id     = isset($_POST['area_id'])     ? $_POST['area_id']     :NULL;
                $datos->boletin     = isset($_POST['boletin'])     ? $_POST['boletin']     :NULL;
                $datos->description = isset($_POST['description']) ? $_POST['description'] :NULL;
                $datos->rol         = isset($_POST['rol'])         ? $_POST['rol']         :NULL;
            
		    if ( $datos != "" ){
                $obj = new employeModel();
			    $respuesta = $obj->insert($datos);
                if($respuesta != "") {
                    echo json_encode('exito'); 
                } else {
                    echo("<div id='men'><span>Error al Insertar...Vuelva a Intentarlo</span></div>");
                }
            }
        }

        public function deleteEmploye( )
        {
            if(!is_numeric( $_GET['id'] )){
                echo "<script>
                        alert('El id del empleado no es valido.');
                        window.location.href='?modulo=employe&componente=main';
                        </script>";
                return false;
             } 

            $obj = new employeModel();
            $respuesta = $obj->deleteEmploye( $_GET['id'] );
            if($respuesta) {
                echo "<script>
                        alert('El empleado ha sido eliminado.');
                        window.location.href='?modulo=employe&componente=main';
                        </script>";
            } else {
                echo "<script>
                        alert('Error al eliminar el empleado, intentelo de nuevo');
                        window.location.href='?modulo=employe&componente=main';
                        </script>";
            }
        }

        public function updateProces(){
            
            $datos = new \stdClass();
            $datos->nombre      = isset($_POST['inputName'])   ? $_POST['inputName']   :NULL;
            $datos->email       = isset($_POST['email'])       ? $_POST['email']       :NULL;
            $datos->sexo        = isset($_POST['sexo'])        ? $_POST['sexo']        :NULL;
            $datos->area_id     = isset($_POST['area_id'])     ? $_POST['area_id']     :NULL;
            $datos->boletin     = isset($_POST['boletin'])     ? $_POST['boletin']     :NULL;
            $datos->description = isset($_POST['description']) ? $_POST['description'] :NULL;
            $datos->rol         = isset($_POST['rol'])         ? $_POST['rol']         :NULL;
        
        if ( $datos != "" ){
            $obj = new employeModel();
            $respuesta = $obj->update($datos);
            if($respuesta != "") {
                echo json_encode('exito'); 
            } else {
                echo("<div id='men'><span>Error al Insertar...Vuelva a Intentarlo</span></div>");
            }
        }
    }
    }    
?>