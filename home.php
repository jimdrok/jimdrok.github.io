<?php 

    session_start();
    
    if(isset($_SESSION['user'])){
        

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <?php require_once "./src/php/dependencia.php"?>
    </head>
    <body>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <a href="./src/php/salir.php" class="btn btn-info">
                        salir
                    </a>
                    <h2>Ingreso con exito</h2>
                </div>
            </div>
        </div>
    </body>
    </html> 

<?php 
    }else{
        // header("location:index.php");
        var_dump($_SESSION['user']);
    }
    
?>