<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once "./src/php/dependencia.php"?>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary" id="contenedor-panel-primary" >
                    <div class=" title panel panel-heading"> Ingreso al sistema MovieHome</div>
                    <div class="panel panel-body">
                        <div class="container-img" >
                            <img src="src/img/Grupo.png">
                        </div>
                        <br>
                        <label>Usuario</label>
                        <input type="text" id="Usuario" class="form-control input-sm" name="" >
                        <label>Password</label>
                        <input type="password" id="Password" class="form-control input-sm" name="" >
                        <br>
                        <div class="btn-center">
                            <span class="btn btn-primary" id="entrarSistema">Ingresar</span>
                            <a href="registro.php" class="btn btn-danger"> Registrar </a>
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
        
        $('#entrarSistema').click(function(){
            
            if($('#Usuario').val()==""){
                alertify.alert("Debes ingresar un Usuario");
                return false;
            }else if($('#Password').val()==""){
                alertify.alert("Debes ingresar un Contraseña ");
                return false;
            }


            cadena="usuario=" + $('#Usuario').val()+
                    "&password=" + $('#Password').val();

            $.ajax({
                type:"POST",
                url:"./src/php/iniciar.php",
                data:cadena,
                success:function(e){
                    console.log(e)
                    if(e==1){
                        window.location="home.php";
                    }else{
                        alertify.alert("Fallo al entrar");
                    }
                }
                
            });
        });
    });
</script>