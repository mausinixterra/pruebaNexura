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
        
        <form id="formulario">

            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Nombre completo *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" name="inputName" value="<?= $data["nombre"] ?>" placeholder="Nombre completo del empleado">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Correo electrónico *</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control form-control-sm" name="email" value="<?= $data["email"] ?>" placeholder="Correo electrónico">
                </div>
            </div>

            <?php   if( $data["sexo"] == "M" ){
                        $checkedM = "checked";
                    } else if ( $data["sexo"] == "F" ) {
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
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        
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
                        <input class="form-check-input" type="checkbox" value="1" name="boletin">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Roles *</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="rol">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" name="rol">
                        <label class="form-check-label" for="flexCheckChecked">
                            Checked checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" name="rol">
                        <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" name="rol">
                        <label class="form-check-label" for="flexCheckChecked">
                            Checked checkbox
                        </label>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
        <div class="mt-3" id="respuesta"></div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>