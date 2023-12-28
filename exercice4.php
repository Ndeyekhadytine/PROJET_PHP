<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nombre1</label>
        <input type="text" name="num1" id="number1">
        <br>
        <br>
        <label for="">Nombre2</label>
        <input type="text" name="num2" id="number">
        <br><br>
        <button>Valider</button>
    </form>
 
    <?php
        if (isset($_POST["num1"]) && isset($_POST["num2"])) {
            $number1= (int)$_POST["num1"];
            $number2= (int)$_POST["num2"];
 
            $valeur1= $number1;
            $valeur2= $number2;
 
            while ($valeur1 != $valeur2){
                if($valeur1<$valeur2){
                    $valeur1+= $number1;
                }
                else{
                    $valeur2+= $number2;
                }
            }
 
            $PPCM=$valeur1;
 
            echo "Le PPCM est: " .$PPCM;
        }
        
   ?>
</body>
</html>
