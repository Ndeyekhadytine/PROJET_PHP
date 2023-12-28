<?php
    function afficherTableau($tableau) {
        echo "&lt;table&gt;\n";
        echo "&lt;tr&gt;\n";
        foreach(array_keys($tableau[0]) as $titre) {
            echo "&lt;th&gt;$titre&lt;/th&gt;\n";
        }
        echo "&lt;/tr&gt;\n";
        foreach($tableau as $ligne) {
            echo "&lt;tr&gt;\n";
            foreach($ligne as $valeur) {
                echo "&lt;td&gt;$valeur&lt;/td&gt;\n";
            }
            echo "&lt;/tr&gt;\n";
        }
        echo "&lt;/table&gt;\n";
    }
    
    