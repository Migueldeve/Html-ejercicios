<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mira si eres alto o bajito</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <?php # Variables
    $nombre = ExisteParametro("nombre", false);
    $estatura = ExisteParametro("estatura", true);

    $texto = "Repaso de PHP con $nombre la estatura de $nombre es de $estatura CM"; ?>

    <?php
    echo "<h1>".$texto."</h1>";
    
    #GET
    $nombre = ExisteParametro("nombre", false);
    
    #condiciones
    if($estatura >= 180){
       echo "<h3>eres una persona alta</h3>";
    }else{
        echo "<h3>eres un enan@</h3>";
    }?>

    <?php 
    
    #funciones
    function ExisteParametro($parametro, $numero){
        if(isset($_GET[$parametro])){
            $valor = $_GET[$parametro];
        }else{
            $valor = "pepito";

            if($numero){
                $valor = 180;
            }
        }

        return $valor;
    }
    
    #Arrays
    
    $nombres = ["pepito", "miguel", "david"];
    
    echo "<h3>".$nombres[0]."</h3>";?>

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="">
    

</body>
</html>