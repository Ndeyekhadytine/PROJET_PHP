<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Rayon</label>
        <input type="text" name="number" id="number">
        <button>Envoyer</button>
    </form>
 
        <?php
        if (isset($_POST['number'])) {
            $rayon = (int)$_POST["number"];
            $diametre = $rayon * 2;
            $perimetre = 2 * 3.14 * $rayon;
            $surface = 3.14 * ($rayon * $rayon);
    
            echo 'Le diametre du cercle est : ' . $diametre.  '<br>';
            echo 'Le perimetre du cercle est : ' . $perimetre. '<br>';
            echo 'La surface du cercle est : ' . $surface.    '<br>';
        }
        ?>
</body>
</html>
 
 
