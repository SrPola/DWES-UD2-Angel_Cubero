<?php
    /**
    * @author: Ángel Cubero Olivares
    * @since: 27/09/2023
    */

    $radio = 50;
    $area = round(M_PI * (5 ** 2), 2) ;
    $perimetro = round(2 * M_PI * $radio, 2);   
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="SrPola">
        <title>Ejericio 3</title>
    </head>
    <body>
        <p>Longitud del radio: <?php echo $radio ?> </p>
        <p>Area del circulo: <?php echo $area ?> </p>
        <p>Perimetro del radio: <?php echo $perimetro ?> </p>

        <svg xmlns="http://www.w3.org/2000/svg">
            <circle cx="75" cy="60" r="<?php echo $radio?>" fill="black"/>
        </svg>

        <br><a href="https://github.com/SrPola/DWES-UD2-Angel_Cubero.git">Repositorio</a>
    </body>
</html>