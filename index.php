<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$mod 	 = $_REQUEST['modulo'];
	$funcion  = $_REQUEST['f'];
	
	// $mod  = 'usuarios';
	// $funcion = 'listar';


	if (file_exists("controller/".$mod."Controller.php")){
		include "controller/".$mod."Controller.php";
		$obj = new $mod();
		if (method_exists($obj, $funcion)) {
			$obj->$funcion();
		}else{
			echo "El metodo donde intenta acceder no existe";
		}
	}else{
		echo "No existe el archivo";
	}
	
?>
<a href="?modulo=employe&f=create"><button class="btn btn-success">Nuevo usuario</button></a>

       

</body>
</html>