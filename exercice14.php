<!DOCTYPE html>
<html>
<head>
    <title>Agence Immobilière</title>
</head>
<body>
    <h1>Choisissez une action</h1>
    <form method="post">
        <input type="submit" name="vendre" value="Vendre">
        <input type="submit" name="acheter" value="Acheter">
        <input type="submit" name="louer" value="Louer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['vendre'])) {
            header("Location: vendre.php");
            exit;
        } elseif (isset($_POST['acheter'])) {
            header("Location: acheter.php");
            exit;
        } elseif (isset($_POST['louer'])) {
            header("Location: louer.php");
            exit;
        }
    }
    ?>
</body>
</html>