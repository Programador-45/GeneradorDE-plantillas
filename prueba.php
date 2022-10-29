    <?php
    /*
if(isset($_POST['boton'])){
    if(!empty($_POST['title']) && !empty($_POST['piee'])){
        $title = $_POST['title'];
        $piee = $_POST['piee'];
   
    }
}
*/
    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylee.css">
        <title>Document</title>
    </head>

    <body>
        <header class="head" name="color">
            <nav>
                <?php

                $title = $_POST['title'];
                echo "<h1>$title</h1>";


                ?>
            </nav>
        </header>

        <?php

        $portada = $_POST['portada'];
        echo '<img src="$portada">';


        $parafo = $_POST['parafo'];
        echo "<p>$parafo</p>";
        ?>
        <footer>
            <?php

            $piee = $_POST['piee'];
            echo $piee;


            ?>

        </footer>
    </body>

    </html>