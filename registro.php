<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php require_once "./src/php/dependencia.php"?>
    
</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary" id="contenedor-panel-primary">
                    <div  class=" title  panel-heading">Registro de ususario en MovieHome</div>
                    <div class="panel panel-body">
                        <div class="container-img" >
                            <img src="src/img/Grupo.png">
                        </div>
                        <br>
                        <form id="formRegistro">
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" id="Nombre">
                            <label>Apellido</label>
                            <input type="text" class="form-control input-sm" id="Apellido">
                            <label>Ususario</label>
                            <input type="text" class="form-control input-sm" id="Usuario">
                            <label>Password</label>
                            <input type="password" class="form-control input-sm" id="Password">
                            <br>
                            <div class="btn-center" >
                                <span class="btn btn-primary" id="registrar">Registrar</span>
                            </div>
                        </form>
                        <br>
                        <div class="btn-center" >
                            <a href="index.php" class="btn btn-default">Ya estoy registrado</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){

        $('#registrar').click(function(){

            if($('#Nombre').val()==""){
                alertify.alert("Debes ingresar un Nombre");
                return false;
            }else if($('#Apellido').val()==""){
                alertify.alert("Debes ingresar un Apellido ");
                return false;
            }else if($('#Usuario').val()==""){
                alertify.alert("Debes ingresar un Usuario ");
                return false;
            }else if($('#Password').val()==""){
                alertify.alert("Debes ingresar una Contraseña ");
                return false;
            }

            cadena= "nombre="+ $('#Nombre').val() +
                    "&apellido=" + $('#Apellido').val() +
                    "&usuario=" + $('#Usuario').val() +
                    "&password=" + $('#Password').val();

            $.ajax({
                type:"POST",
                url:"./src/php/registrar.php",
                data:cadena,
                success:function(e){
                    console.log(e);
                    if(e==1){
                        $('#formRegistro')[0].reset();
                        alertify.success("Registro Exitoso");
                    }else{
                        alertify.error("Errros en Registro");
                    }
                }

               
            });
        });
    });
</script>