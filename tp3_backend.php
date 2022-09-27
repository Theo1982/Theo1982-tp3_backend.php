<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Control</title>
</head>
<body>
    <?php
        print "<h2>Ejercicio 1:</h2>\n";
        print "<h2>Mostrar los numeros del 1 al 100:</h2>\n";
        for ($i=1; $i <= 100 ; $i++) { 
            print $i. " - ";
        }
    ?>

    <?php
        print "<h2>Ejercicio 2:</h2>\n";
        print "<h2>Mostrar los numeros del 100 al 1:</h2>\n";
        for ($i=100; $i >= 1 ; $i--) { 
            print $i. " - ";
        }
    ?>

    <?php
        print "<h2>Ejercicio 3:</h2>\n";
        print "<h2>Mostrar los numeros pares del 1 al 100:</h2>\n";
        for ($i=2; $i%2==0 && $i<=100 ; $i+=2) { 
            print $i. " - ";
        }
    ?>
    
    <?php
        print "<h2>Ejercicio 4:</h2>\n";
        print "<h2>Mostrar los numeros impares del 1 al 100:</h2>\n";
        for ($i=1; $i%2!==0 && $i<=100 ; $i+=2) { 
            print $i. " - ";
        }
    ?>
    
    <?php
        print "<h2>Ejercicio 5:</h2>\n";
        print "<h2>Mostrar la suma de los numeros del 1 al 20:</h2>\n";
        
        $i=1;
        $a=0;

        while ($i <= 20) {
            $a+=$i;
            $i++;
            print "La suma acumulada es: <p>$a</p>\n";
        }  
    ?>   

<?php
        print "<h2>Ejercicio 6:</h2>\n";
        print "<h2>Mostrar la suma de los numeros pares del 1 al 20:</h2>\n";
        
        $i=2;
        $a=0;

        while ($i <= 20 && $i%2==0) {
            $a+=$i;
            $i+=2;
            print "La suma acumulada es: <p>$a</p>\n";
        }   
    ?>   

</body>
</html>
