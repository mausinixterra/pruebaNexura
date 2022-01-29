<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba técnica Nexura</title>
</head>
<body>
	<?php
		$modulo 	 = $_REQUEST['modulo'];
		$componente  = $_REQUEST['componente'];

		if (file_exists("controller/".$modulo."Controller.php")){
			include "controller/".$modulo."Controller.php";
			$obj = new $modulo();
			if (method_exists($obj, $componente)) {
				$obj->$componente();
			}else{
				echo "El metodo donde intenta acceder no existe";
			}
		}else{
			header('Location: ?modulo=employe&componente=main');
		}
		
	?>     
</body>
</html>