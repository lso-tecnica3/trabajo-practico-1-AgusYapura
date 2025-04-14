<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 3</title>
  <link rel="stylesheet" href="punto2.css">
</head>
<body>     

        <?php
        $font_size = 10;
        for ($i = 0; $i<11 ; $i++){
            $font_size += 10;
            ?>
            <p style = "font-size : <?php print ($font_size);?>px">Hola Mundo </p>// abrimos devuelta el php para poner el print para poner la variable que tendria el numero que se suma 10 cada ciclo , en la cual despues le ponemos el px; asi toma el numero y desp el px , por ej 10px y asi sucesivamente
            <?php       
        }
       
       ?>
       
    </table>
</body>
</html>
