<!DOCTYPE html>
<html lang="es">
   <head>
       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Rescalar la pagina para distintas resoluciones de pantalla -->
       <title>Desastres Naturales ONG</title>
       <link href="css/reset.css" rel="stylesheet" /> <!-- Estilo reset para que la pagina se vea uniforme en todos los tipos de navegadores -->
       <link href="css/header.css" rel="stylesheet" />
       <link href="css/main.css" rel="stylesheet" />
       <link href="css/spanStyles.css" rel="stylesheet" />
       <link href="css/form.css" rel="stylesheet" />
   </head>
   <body>
       <!-- Cabecera de la pagina -->
       <header>
        <nav>
            <a href="datos.html">Datos</a>
            <a href="index.html" id="ongLogo"><img src="img/logo.png"</a>
            <a href="donate.html">Donate</a>
        </nav>
       </header>
       <main>
            <h1>Formulario de donaciones</h1>
            <form>
                <fieldset>
                    <!-- Campo para el IBAN -->
                    <input type="text" name="iban" placeholder="IBAN" required/>
                    
                    <!-- Campo para el nombre del cliente -->
                    <input type="text" name="clientName" placeholder="Nombre" required/>
                    
                    <!-- Campo para la cantidad de la donación -->
                    <input type="number" name="amount" placeholder="Cantidad" required/>
                    
                    <!-- Selección de moneda -->
                    <select name="currency" required>
                        <option value="" disabled selected>Selecciona la moneda</option>
                        <option value="EUR">Euro (€)</option>
                        <option value="USD">Dólar ($)</option>
                        <option value="GBP">Libra (£)</option>
                    </select>
                    
                    <!-- Métodos de pago -->
                    <label>Método de pago:</label><br>
                    <input type="radio" name="paymentMethod" value="Tarjeta" required> Tarjeta de crédito<br>
                    <input type="radio" name="paymentMethod" value="Transferencia" required> Transferencia bancaria<br>
                    <input type="radio" name="paymentMethod" value="PayPal" required> PayPal<br>
                    
                    <!-- Campo para la dirección de correo electrónico -->
                    <input type="email" name="email" placeholder="Correo electrónico" required/>
                    
                    <!-- Checkbox para suscribirse a boletines -->
                    <label>
                        <input type="checkbox" name="newsletter"> Deseo recibir correos de la ONG
                    </label><br>
                    
                    <!-- Checkbox de aceptación de términos -->
                    <label>
                        <input type="checkbox" name="terms" required> Acepto los términos y condiciones
                    </label><br>
                    
                    <!-- Botón de envío -->
                    <input type="submit" name="submit" value="Enviar" id="submitButton"/>
                </fieldset>
            </form>
       </main>
   </body>
</html>