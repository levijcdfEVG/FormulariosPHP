<?php 
    require 'algoritmoContador.php';
?>
<!DOCTYPE html>
<html lang="es">
   <head>
       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Rescalar la pagina para distintas resoluciones de pantalla -->
       <title>Datos</title>
       <link href="css/reset.css" rel="stylesheet" /> <!-- Estilo reset para que la pagina se vea uniforme en todos los tipos de navegadores -->
       <link href="css/spanStyles.css" rel="stylesheet" />
       <link href="css/form.css" rel="stylesheet" />
   </head>
   <body>
       <main>
            <h1>Datos Recolectados</h1>
            <?php
                displayFormData($_GET); //Mediante el array $_GET, que guarda las informaciones del formulario que han sido enviadas via URL, se envian a la pagina con la instruccion ECHO como html
                $contadorDatos = contador($_GET); //Llama el algoritmo del contador para poder devolver el numero de datos
                echo "<p>El numero de datos enviados es: ".$contadorDatos."</p>";
            ?>
       </main>
   </body>
</html>