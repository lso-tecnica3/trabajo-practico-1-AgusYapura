<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="punto2.css">
</head>
<body>
    <table border = 1 cellspacing= "0px" >
        
   
        <?php
  

       for ($i = 1;$i < 9 ;$i++){ // ciclo que hace que baje la linea , hace los 9 espacios , baja y sigue haciendo asi
        print ("<tr>");

        for ($a = 1; $a < 9; $a++) { //2do ciclo adentro del for en el que vamos a sumar i /fila/ con a/columna/ asi queda en una fila par y en la proxima empezaria impar
            $total = $i+ $a;//en cada vuelta i va a ser 1 mas asi por ej empieza en 1 , 1 + 1 = 2 = par , y la proxima i subira de valor entonces seria 2 + 1 = 3 = impar , 
            // asi va intercalando entre lineas si una linea par para que comienze con la casilla negra y la otra linea empieza con impar que seria la casilla blanca
            if($total % 2 == 0)
        {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
        else{

            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        }
    }
    
        }
       
       ?>
        
        <?php
       
        ?>
    </table>
</body>
</html>
