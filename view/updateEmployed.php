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
        <h2>Actualizar empleado</h2>

        <form id="actualizar">
                <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Nombre completo *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" name="inputName" value="<?= $data[1] ?>" placeholder="Nombre completo del empleado">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Correo electrónico *</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control form-control-sm" name="email" value="<?= $data[2] ?>" placeholder="Correo electrónico">
                </div>
            </div>

            <?php   if( $data[3] == "M" ){
                        $checkedM = "checked";
                    } else if ( $data[3] == "F" ) {
                        $checkedF = "checked";
                    } 
            ?>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Sexo *</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" name="radiosSex1" value="M" <?= $checkedM ?>>
                        <label class="form-check-label" for="radiosSex1">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" name="radiosSex2" value="F" <?= $checkedF ?> >
                        <label class="form-check-label" for="radiosSex2">
                            Femenino
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Área *</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-sm" name="area_id" aria-label=".form-select-sm example">
                        <option selected>Selecione el área</option>
                        <?php foreach ($areas as $key => $value) { ?>
                            <option value="<?= $value[0] ?>" <?php $value[0] == $data["area_id"] ? "selected" : "" ?> ><?= $value["nombre"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Descripción *</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" rows="3" placeholder="Descripión de la experiencia del empleado"></textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="<?= $value[5] ?>" name="boletin">
                        <label class="form-check-label" for="flexCheckDefault">
                            Deseo recibir el boletin informativo
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Roles *</label>
                <div class="col-sm-10">
                    <?php foreach ($roles as $key => $value) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $value[0] ?>" <?php $value[0] == $dataUserRol["rol_id"] ? "checked" : "" ?>  name="rol">
                            <label class="form-check-label" for="flexCheckDefault">
                            <?= $value["nombre"] ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Actualizar</button>
        </form>
        <div class="mt-3" id="respuesta"></div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>