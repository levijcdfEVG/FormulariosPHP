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
                //Mediante el array $_GET, que guarda las informaciones del formulario que han sido enviadas via URL, se envian a la pagina con la instruccion ECHO como html
                echo "<p>IBAN:."$_GET['iban']".</p>";
                echo "<p>Nombre:."$_GET['clientName']".</p>";
                echo "<p>Cantidad:."$_GET['amount']".</p>";
                echo "<p>Moneda:."$_GET['currency']".</p>";
                echo "<p>Metodo de pago:."$_GET['paymentMethod']".</p>";
                echo "<p>Correo Electrónico:."$_GET['email']".</p>";
                if(isset($_GET['newsletter']))
                    echo "<p>Se ha suscrito al periodico</p>";
                if(isset($_GET['terms']))
                    echo "<p>Ha aceptado los terminos</p>";
            ?>
       </main>
   </body>
</html>