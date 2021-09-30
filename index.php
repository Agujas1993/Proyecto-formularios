<h1>Formularios usables</h1>

<?php
$errores = [];
if (!$_POST) {
    include "formulario.php";
} else {
    include_once 'funciones.php';
    //Procesar los datos del formulario
    if (empty($_POST['nombre'])) {
        $errores['nombre'] = "No he recibido el nombre";
    } elseif (strlen($_POST['nombre']) < 3) {
        $errores['nombre'] = 'Campo nombre demasiado corto';
    }
    if (empty($_POST['email'])) {
        $errores['email'] = 'No he recibido el email';
    } elseif (strlen($_POST['email']) < 6) {
        $errores['email'] = 'El email no es válido';
    }
    if (empty($_POST['clave1']) || empty($_POST['clave2'])) {
        $errores['clave1'] = 'No he recibido ambas claves';
    } else {
        if (strlen($_POST['clave1']) < 5) {
            $errores['clave1'] =  'La clave debe tener al menos 6 caracteres';
        }
        if ($_POST['clave1'] != $_POST['clave2']) {
            $errores['clave2'] =  'Las claves no son iguales';
        }
    }
    if ($errores) {
        //mostrar_errores($errores);
        include "formulario.php";
    } else {
        echo 'Todo bien, pasamos a registrar al usuario en la BD';
    }
}
