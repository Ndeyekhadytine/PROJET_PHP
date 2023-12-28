<!DOCTYPE html>
<html>
<head>
	<title>Vérificateur de nombres parfaits</title>
</head>
<body>
	<h1>Vérificateur de nombres parfaits</h1>
	<form method="post">
		<label for="nombre">Entrez un nombre :</label>
		<input type="text" name="nombre" id="nombre"><br><br>
		<input type="submit" value="Vérifier"><br><br>
	</form>
	<?php
	if (isset($_POST['nombre'])) {
		$nombre = $_POST['nombre'];

		$sommeDiviseurs = 0;
		for ($i = 1; $i < $nombre; $i++) {
		    if ($nombre % $i == 0) {
		        $sommeDiviseurs += $i;
		    }
		}

		if ($sommeDiviseurs == $nombre) {
		    echo "$nombre est un nombre parfait.";
		} else {
		    echo "$nombre n'est pas un nombre parfait.";
		}
	}
	?>
</body>
</html>
