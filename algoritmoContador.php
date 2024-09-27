<?php 

    // Función que cuenta el número de valores no vacíos en el array $datosCLiente
    function contador($datosCLiente){
        $numeroDeDatos = 0; // Inicializa el contador
        
        // Recorre cada clave-valor dentro del array $datosCLiente
        foreach ($datosCLiente as $dato => $contenido) {
            // Verifica si el valor del campo no está vacío
            if (!empty($contenido)) {
                $numeroDeDatos++; // Si el valor no está vacío, incrementa el contador
            }
        }

        // Devuelve el número total de datos no vacíos
        return $numeroDeDatos;
    }

    // Función que muestra los datos del formulario, validando si los campos no están vacíos
    function displayFormData($data) {
        // Verifica si el campo no está vacío y lo muestra
        if (!empty($data['iban'])) {
            echo "<p>IBAN: " . $data['iban'] . "</p>";
        }

        
        if (!empty($data['clientName'])) {
            echo "<p>Nombre: " . $data['clientName'] . "</p>";
        }

        
        if (!empty($data['amount'])) {
            echo "<p>Cantidad: " . $data['amount'] . "</p>";
        }

        
        if (!empty($data['currency'])) {
            echo "<p>Moneda: " . $data['currency'] . "</p>";
        }

        
        if (!empty($data['paymentMethod'])) {
            echo "<p>Metodo de pago: " . $data['paymentMethod'] . "</p>";
        }

        
        if (!empty($data['email'])) {
            echo "<p>Correo Electrónico: " . $data['email'] . "</p>";
        }

        
        if (!empty($data['newsletter'])) {
            echo "<p>Se ha suscrito al periódico</p>";
        }

        
        if (!empty($data['terms'])) {
            echo "<p>Ha aceptado los términos</p>";
        }
    }

?>
