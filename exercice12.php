<!DOCTYPE html>
<html>
<head>
    <title>Formulaire et Traitement Adresse Client</title>
</head>
<body>
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Affichage des données saisies dans un tableau XHTML
    ?>
        <h1>Données Client</h1>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
            </tr>
            <tr>
                <td><?php echo $_POST['nom']; ?></td>
                <td><?php echo $_POST['prenom']; ?></td>
                <td><?php echo $_POST['adresse']; ?></td>
                <td><?php echo $_POST['ville']; ?></td>
                <td><?php echo $_POST['code_postal']; ?></td>
            </tr>
        </table>
    <?php
    } else {
        // Affichage du formulaire
    ?>
        <h1>Adresse Client</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <fieldset>
                <legend>Adresse client</legend>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required><br><br>

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required><br><br>

                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" required><br><br>

                <label for="code_postal">Code Postal :</label>
                <input type="text" id="code_postal" name="code_postal" required><br><br>

                <input type="submit" value="Soumettre">
            </fieldset>
        </form>
    <?php
    }
    ?>
</body>
</html>