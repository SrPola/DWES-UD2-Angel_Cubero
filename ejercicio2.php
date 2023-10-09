<?php
    /**
    * @author: Ángel Cubero Olivares
    * @since: 27/09/2023
    */
    
    $email = "angelcuberoolivares@gmail.com";
    $phone = "+34 642 427 916";
    $name = "Ángel";
    $surname = "Cubero Olivares";
    $linkedin = "https://es.linkedin.com";
    $twitter = "https://twitter.com";

    $src = "./recursos/1.png";


    $hora = date("H");
    if ($hora >= 6 && $hora < 12) {
        // Mañana
        $color1 = '#3471e1';
        $color2 = '#43b6ff';
        $color3 = '#75dad3';
    } elseif ($hora >= 12 && $hora < 21) {
        // Tarde
        $color1 = '#ffa560';
        $color2 = '#fff460';
        $color3 = '#ff5c64';
    } else {
        // Noche
        $color1 = '#000000';
        $color2 = '#000796';
        $color3 = '#520069';
    }


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba 1 php</title>
        <link rel="stylesheet" href="css/styles.css">
        <style>
            html, body {
                height: 100%;
                width: 100%;
                background: linear-gradient(45deg, <?php echo $color1; ?>, <?php echo $color2; ?>, <?php echo $color3; ?>);
                background-repeat: no-repeat;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            h1 {
                text-align: center;
            }

            header {
                position: absolute;
                top: 0%;
            }

            main {
                margin-top: 3%;
                text-align: center;
                position: absolute;
                top: 7%;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 10px;
                width: auto; /* Ajusta el ancho según tus necesidades */
                height: auto;
                padding: 20px;
                box-sizing: border-box;
            }

            img {
                width: 500px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Porfolio con php</h1>
        </header>
        <main>
            <div class="content">
                <p><?php echo $name . " " . $surname ?></p>
                <p><?php echo $email; ?></p>
                <p><?php echo $phone; ?></p>
                <a href=<?php echo $linkedin; ?> target="_blank">linkedin</a>
                <br>
                <br>
                <a href=<?php echo $twitter; ?> target="_blank">twitter</a>
                <br>
                <br>
                <img src=<?php echo $src; ?> alt="Imagen que cambia segun la estacion" />
            </div>

            <br><a href="https://github.com/SrPola/DWES-UD2-Angel_Cubero.git">Repositorio</a>
        </main>
    </body>
</html>