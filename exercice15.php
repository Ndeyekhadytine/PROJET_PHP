
<?php
function formatStrings(array &$strings) {
    foreach ($strings as &$str) {
        // Mettre la chaîne en minuscules
        $str = strtolower($str);

        // Mettre le premier caractère en majuscule
        $str = ucfirst($str);
    }
}

// Exemple d'utilisation de la fonction
$myArray = array("hello", "GooDbye", "TEst");
formatStrings($myArray);

// Affichage du tableau après transformation
print_r($myArray);