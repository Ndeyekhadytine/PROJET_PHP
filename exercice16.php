<?php
function sinusAngle($angle, $unite = 'r') {
    switch ($unite) {
        case 'd': // Degrés
            $angleRad = deg2rad($angle);
            break;
        case 'g': // Grades
            $angleRad = deg2rad($angle * 0.9);
            break;
        case 'r': // Radians (valeur par défaut)
        default:
            $angleRad = $angle;
            break;
    }

    return sin($angleRad);
}

// Exemples d'utilisation de la fonction
$angleEnRadians = sinusAngle(1.047); // Par défaut, en radians
$angleEnDegres = sinusAngle(60, 'd'); // En degrés
$angleEnGrades = sinusAngle(100, 'g'); // En grades

echo "Sinus de 1.047 radians : $angleEnRadians<br>";
echo "Sinus de 60 degrés : $angleEnDegres<br>";
echo "Sinus de 100 grades : $angleEnGrades<br>";