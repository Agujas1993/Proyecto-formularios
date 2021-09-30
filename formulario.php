<?php include_once "funciones.php" ?>
<form action="<?= "index.php" ?>" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" <?php mostrar_campo('nombre') ?> placeholder="Introduce tu nombre">
    <?php mostrar_error_campo('nombre', $errores)
    ?><br><br>

    <label for="email">Email</label>
    <input type="email" name="email" <?php mostrar_campo('email') ?>>
    <?php mostrar_error_campo('email', $errores)
    ?><br><br>

    <label for="clave1">Contraseña</label>
    <input type="password" name="clave1">
    <?php mostrar_error_campo('clave1', $errores)
    ?><br><br>

    <label for="clave2">Repetir clave</label>
    <input type="password" name="clave2">
    <?php mostrar_error_campo('clave2', $errores)
    ?><br><br>

    <label>
        <input type="submit" value="Enviar">
    </label>
    </p>
</form>