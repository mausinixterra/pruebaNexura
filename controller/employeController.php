<?php
    include 'model/employeModel.php';

    class employe{
        private $modelo;

        public function __constructor(){
            $this->$modelo = new employeModel();
        }
        
        public function create(){
            include 'view/createEmployed.php'; 
        }

        public function createProces(){
            
                $datos = new \stdClass();
                $datos->nombre      = isset($_POST['inputName'])      ? $_POST['inputName']      :NULL;
                $datos->email       = isset($_POST['email'])       ? $_POST['email']       :NULL;
                $datos->sexo        = isset($_POST['sexo'])        ? $_POST['sexo']        :NULL;
                $datos->area_id     = isset($_POST['area_id'])     ? $_POST['area_id']     :NULL;
                $datos->boletin     = isset($_POST['boletin'])     ? $_POST['boletin']     :NULL;
                $datos->description = isset($_POST['description']) ? $_POST['description'] :NULL;
                $datos->rol         = isset($_POST['rol'])         ? $_POST['rol']         :NULL;
            var_dump( $datos);
		    if ( $datos != "" ){
                $obj = new employeModel();
			    $r = $obj->insert($datos);

                if($r != "") {
                    echo "<div id='men' class='bg-success'><span>Usuario Insertado Conrrectamente</span></div>
                        <script type='text/javascript'>
                        $(document).ready(function() {
                        setTimeout(function() {
                             $('#mensaje').fadeOut(3000);
                        },2000);
                        window.location = '?modulo=usuarios&f=listar';
                        });
                    </script>";
                    
                }else{
                    echo("<div id='men'><span>Error al Insertar...Vuelva a Intentarlo</span></div>");
                }
            }
      

        }


        private function validate( $data ){
            $datos = new \stdClass();
            $datos->nombre      = isset($_POST['nombre'])      ? $_POST['nombre']      :NULL;
            $datos->email       = isset($_POST['email'])       ? $_POST['email']       :NULL;
            $datos->sexo        = isset($_POST['sexo'])        ? $_POST['sexo']        :NULL;
            $datos->area_id     = isset($_POST['area_id'])     ? $_POST['area_id']     :NULL;
            $datos->boletin     = isset($_POST['boletin'])     ? $_POST['boletin']     :NULL;
            $datos->description = isset($_POST['description']) ? $_POST['description'] :NULL;
            $datos->rol         = isset($_POST['rol'])         ? $_POST['rol']         :NULL;
            return $datos;
        }
    }
?>