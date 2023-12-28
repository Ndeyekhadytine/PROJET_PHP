
<!DOCTYPE html>
<html>
<head>
	<title>Générateur de nombres aléatoires</title>
</head>
<body>
	<h1>Générateur de nombres aléatoires</h1>
	<form method="post">
		<label for="nombre">Entrez un nombre de trois chiffres :</label>
		<input type="text" name="nombre" id="nombre" maxlength="3"><br><br>
		<input type="submit" value="Générer"><br><br>
	</form>
	<?php
	if (isset($_POST['nombre'])) {
		$nombreInitial = $_POST['nombre'];

		// Avec la boucle while
		$tiragesWhile = 0;
		$tirageWhile;

		while ($tirageWhile !== $nombreInitial) {
		    $tirageWhile = rand(100, 999);
		    $tiragesWhile++;
		}

		echo "Le nombre initial était : " . $nombreInitial . "<br>";
		echo "Le nombre de tirages nécessaires avec la boucle while était : " . $tiragesWhile . "<br>";
	}
	?>
</body>
</html>
