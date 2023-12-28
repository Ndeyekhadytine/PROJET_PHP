
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $personnes1 = array(
        'cisse' => array('prenom' => 'ada', 'ville' => 'pout', 'age' => 30),
        'diame' => array('prenom' => 'Ali', 'ville' => 'guinee', 'age' => 25),
        'fall' => array('prenom' => 'aida', 'ville' => 'Paris', 'age' => 35),
    );

    $personnes2 = array(
        'DIALLO' => array(
            'prenom' => 'khady',
            'ville' => 'Paris',
            'age' => 30
        ),
        'NDIAYE' => array(
            'prenom' => 'ala',
            'ville' => 'lyon',
            'age' => 25
        ),
        'LY' => array(
            'prenom' => 'balla',
            'ville' => 'marseille',
            'age' => 35
        )
    );
    ?>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>

        <?php
        echo "<tr><td colspan='4'>Personnes 1:</td></tr>";
        foreach ($personnes1 as $key => $value) {
            echo "<tr><td>$key</td>";
            foreach ($value as $innerKey => $innerValue) {
                echo "<td>$innerValue</td>";
            }
            echo "</tr>";
        }

        echo "<tr><td colspan='4'>Personnes 2:</td></tr>";
        foreach ($personnes2 as $key => $value) {
            echo "<tr><td>$key</td>";
            foreach ($value as $innerKey => $innerValue) {
                echo "<td>$innerValue</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>