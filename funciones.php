<?php

function mostrar_errores($datos) {
    echo '<ul>';
    foreach ($datos as $error) {
        echo '<li>' . $error . '</li><br>';
    }
    echo '</ul>';
}

function mostrar_campo($campo) {
    if (isset($_POST[$campo])) {
        echo 'value="' . $_POST[$campo] .'"';
    }
}

function mostrar_error_campo($campo, $errores){
    if(isset($errores[$campo])){
        echo '<span>' . $errores[$campo] . '</span>';
    }
}