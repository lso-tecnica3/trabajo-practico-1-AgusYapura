<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 1</title>
  <link rel="stylesheet" href="punto1.css">
</head>
<body>
    <table border = 1>
        
        <td class = "X">X</td>
        <?php
       for ($i = 1;$i < 11 ;$i++){ // es la primera fila en negrito de izquierda a derecha 
        print ("<th>$i  </th>");
       }

       for ($i = 1;$i < 11 ;$i++){ // es la fila izquierda primera , que esta en negrito
        print ("<tr>");
        print ("<th>$i </th>");

        for ($a = 1; $a < 11; $a++) { // es todas las multiplicaciones de adentro que no estan enmarcadas en negrito
            print ("<td>".($a * $i)."</td>");
        }


       }

       
       ?>
        
        

        <?php
       
        ?>
    </table>
</body>
</html>
