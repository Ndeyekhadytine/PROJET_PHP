<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Diviseurs</title>

</head>

<body>

    <div id="form">

        <form action="" method="POST">

            <label for="number">Nombre</label>

            <input type="text" name="number" id="number" placeholder="Entrer un nombre entier">

 

            <button type="submit">Afficher les diviseurs</button>

        </form>

 

        <?php

        if (isset($_POST["number"])) {

            $number = (int)$_POST["number"];

            if($number===0){

                echo '<div>Pas de diviseur</div>';

            }

            else{

                echo '<div>Les diviseurs de ' . $number . ' sont : ';

 

                for ($i = 1; $i <= $number; $i++) {

                    if ($number % $i == 0) {

                        echo $i . ' , ';

                    }

                }

   

                echo '</div>';

            }

 

            }

 

        ?>

    </div>

</body>

</html>