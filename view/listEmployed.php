<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Prueba técnica Nexura</title>
</head>
<body>
	<div class="container-md">
		<h2>Lista de empleados</h2>
		<a href="?modulo=employe&componente=create"><button class="btn btn-success">Nuevo usuario</button></a>
		<table id="listEmployed" class="table table-striped" style="width:100%">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Sexo</th>
					<th>Área</th>
					<th>Boletin</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>

				<?php 
				foreach ($listEmploye as $key => $value) { ?>
					<tr>
						<td><?php echo $value['nombre'];?></td>
						<td><?php echo $value['email'];?></td>
						<td><?php echo $value['sexo'] == "F" ? "Femenino" : "Masculino";?></td>
						<td><?php echo $value['area'];?></td>
						<td><?php echo $value['boletin'] == 1 ? "Si" : "No";?></td>
						<td><a href="?modulo=employe&componente=update&id=<?= $value['id']?>"><i>Modificar</i></a></td>
						<td><a  onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?modulo=employe&componente=deleteEmploye&id=<?= $value['id']?>"><button class="btn btn-danger">Eliminar</button></a></td>
						
					</tr>
					

				<?php } 
				
					
				?>
			</tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>