<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="punto5.css">
</head>
<body>

<table border="1">
    <?php
    for ($fila = 0; $fila < 20; $fila++) { // primer for
        print ("<tr>");
        for ($col = 0; $col < 20; $col++) { // segundo for en el que se usa las condiciones para determinar el color
            if ($fila == $col) { // si la fila es igual a la columna seria la linea diagonal 1:1 2:2
                $color = "verde"; 
            } else if ($fila > $col) { // si la fila es mayor a la columna 2:1 se pinta de rojo
                $color = "rojo";
            } else { // sino de azul
                $color = "azul";
            }
            print("<td class='$color'></td>");
        }     
    }
    ?>
</table>

</body>
</html>
