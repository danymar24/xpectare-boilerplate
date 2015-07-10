<?php include('header.php'); ?>

	<form name="forma-contacto" id="forma-contacto" action="POST">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre">
		<label for="email">Email</label>
		<input type="email" name="email">
		<label for="mensaje">Mensaje</label>
		<textarea name="mensaje"cols="30" rows="10"></textarea>
		<input type="submit">
	</form>

<?php include('footer.php'); ?>