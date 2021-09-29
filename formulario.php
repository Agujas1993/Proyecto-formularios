<form action="<?= $_SERVER['PPHP_SELF']?>" method="post">
<p>

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="" placeholder="Introduce tu nombre">
</p>
<p>
<label for="email">Email</label>
<input type="email" name="email">
</p>
<p>
<label for="clave1">Contraseña</label>
<input type="password" name="clave1">
</p>
<p>
<label for="clave2">Repetir clave</label>
<input type="password" name="clave2">
</p>
<p>
<label>
<input type="submit" value="Enviar">
</label>
</p>
</form>