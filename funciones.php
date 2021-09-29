<?php

function mostrar_errores($datos) {
    echo '<ul>';
    foreach ($datos as $error) {
        echo '<li>' . $error . '</li><br>';
    }
    echo '</ul>';
}
?>