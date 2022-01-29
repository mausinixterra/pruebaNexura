var formulario = document.getElementById('formulario');
var actualizar = document.getElementById('actualizar');
var respuesta = document.getElementById('respuesta');

if(formulario){
    formulario.addEventListener('submit', function(e){
        e.preventDefault();
        var datos = new FormData(formulario);
        fetch('?modulo=employe&componente=createProces',{
            method: 'POST',
            body: datos
        })
            .then( res => res.json())
            .then( data => {
                
                if(data === 'error'){
                    respuesta.innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        Llena todos los campos
                    </div>
                    `
                }else{
                    respuesta.innerHTML = `
                    <div class="alert alert-primary" role="alert">
                        ${data}
                    </div>
                    `
                }
            } )
    });
}

if(actualizar){
    actualizar.addEventListener('submit', function(e){
        e.preventDefault();
        var datos = new FormData(actualizar);
        fetch('?modulo=employe&componente=updateProces',{
            method: 'POST',
            body: datos
        })
            .then( res => res.json())
            .then( data => {
                
                if(data === 'error'){
                    respuesta.innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        Llena todos los campos
                    </div>
                    `
                }else{
                    respuesta.innerHTML = `
                    <div class="alert alert-primary" role="alert">
                        ${data}
                    </div>
                    `
                }
            } )
    });
}




