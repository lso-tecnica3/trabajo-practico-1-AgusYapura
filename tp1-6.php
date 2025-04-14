<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="punto6.css">
</head>
<body>

<table>
    <tr>
        <?php
        
        for ($col = 0; $col < 5; $col++) {
            print("<td>");
            for ($fila = 1; $fila <= 10; $fila++) {
                $num = $col * 10 + $fila;// se multiplica por 10 para que en la proxima columna empieze 10 , y despues vaya sumando 1 , 11 y asi , despues cuando cambie va a ser 2 x 10 y asi
                print("<li>$num</li>");
            }
            print("</td>");
        }
        ?>
    </tr>
</table>

<table>
    <tr>
        <?php
        $num = 100; // empieza en 100

       
        for ($col = 0; $col < 5; $col++) {
            print("<td>");
            for ($fila = 1; $fila <= 10; $fila++) {
                print("$fila. $num<br>");// se va restando 1 por cada vez que hace este ciclo
                $num--;
            }
            print("</td>");
        }
        ?>
    </tr>
</table>
</body>
</html>
