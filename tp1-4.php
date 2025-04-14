<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 4</title>
</head>
<body>
<table border="1">
        <?php
        for ($i = 1; $i <= 50; $i++) {//ciclo 50 veces en el que por medio de if se compara si es divisible por 3 o por 5 o por los 2 entonces seria fizzbuzz
            $resultado = "";//variable vacia 

            if ($i % 3 == 0 && $i % 5 == 0) {
                $resultado = "FizzBuzz";
            } else if ($i % 3 == 0) {
                $resultado = "Fizz";
            } else if ($i % 5 == 0) {
                $resultado = "Buzz";
            }
            ?>
            <tr>
                    <td><?php print($i); ?></td> <!-- aca se copia el numero  -->
                <td><?php print ($resultado); ?></td> <!-- aca el resultado que ya paso por los if y elif -->
            </tr>
            <?php
        }
        ?>

    </table>
</body>
</html>
