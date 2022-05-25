<h1 class="nombre-pagina">Olvide password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuacion</p>

<?php 
include_once __DIR__ . "/../templates/alertas.php";
?>
<form action="/olvide" class="formulario" method="POST">

<div class="campo">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Tu email" >
</div>

<input type="submit" class="boton" value="Enviar Instrucciones" >

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuneta ? inicia sesion </a>
    <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crear una </a>
</div>
