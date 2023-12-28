<!DOCTYPE html>
<html>
<head>
    <title>Calcul TVA et Prix TTC</title>
</head>
<body>
    <?php
    $prixHT = $tva = $prixTTC = "";

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données saisies
        $prixHT = $_POST['prix_ht'];
        $tva = $_POST['tva'];

        // Calculer la TVA et le prix TTC
        $montantTVA = $prixHT * ($tva / 100);
        $prixTTC = $prixHT + $montantTVA;
    }
    ?>

    <h1>Calcul TVA et Prix TTC</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="prix_ht">Prix HT :</label>
        <input type="text" id="prix_ht" name="prix_ht" value="<?php echo $prixHT; ?>" required><br><br>

        <label for="tva">Taux de TVA :</label>
        <input type="text" id="tva" name="tva" value="<?php echo $tva; ?>" required><br><br>

        <input type="submit" value="Calculer">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <h2>Résultats</h2>
        <label for="montant_tva">Montant de la TVA :</label>
        <input type="text" id="montant_tva" name="montant_tva" value="<?php echo $montantTVA; ?>" disabled><br><br>

        <label for="prix_ttc">Prix TTC :</label>
        <input type="text" id="prix_ttc" name="prix_ttc" value="<?php echo $prixTTC; ?>" disabled><br><br>
    <?php } ?>
</body>
</html>