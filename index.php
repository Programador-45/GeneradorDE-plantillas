<!--así que de examen quiero que hagan un generador de plantilla web, 
osea que cuando den click en un botom se genere un nav, un body que tenga un hero
 y un parrafo, un footer y que tengan los estilos echos 
 para que cuando eso se genere salga ya con estilos
básicamente un generador de sitios web
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personaliza ya tu propio sitio web, para tu negocio online, 
en esta pagina encontraras diversos estilos, que puedes usar de ejemplo
para tu negocio a un modico precio, que esperas para entrar? (servidores no incluidos)" />
    <meta name="keywords" content="generador, sitios web, crear pagina, crear plantillas, 
plantillas, nav, body, footer" />
    <meta name="author" content="Website-Generator" />
    <meta name="copyright" content="Website-Generator" />
    <meta name="robots" content="index" />
    <!--GOOLGLEBOT NOS ANALIZA PARA INDEXARNOS-->
    <meta http-equiv="expires" content="43200" />
    <!--LUEGO DE 12 HORAS LIMPIA CACHE EN EL CLIENTE-->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ICO/Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style2.css">
    <title>Website-Generator</title>
</head>

<body>
    <header>
        <h3 class="logo">Website-Generator</h3>
        <nav>
            <ul>
                <li><a href="index.html"><i class="fa-solid fa-house"></i>INICIOS</a></li>
                <li><a href="nosotros.html"><i class="fa-sharp fa-solid fa-users"></i>NOSOTROS</a></li>
            </ul>
        </nav>
    </header>
</body>
<div class="gener">
    <!--MULTIPARTS/FORM-DATA noas ayuda espeficar si enviamos archivos en forma texto o algo mas compejo-->
    <form action="prueba.php" method="POST" class="kil" enctype="multipart/form-data">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" class="title" placeholder="Titulo del contenido">
        <label for="portada">PORTDA PRINCIPAL</label>
        <input type="file" name="portada" placeholder="PORTA DE LA PAGINAs" class="file">
        <label for="parrafo">PARRAFO</label>
        <textarea name="parafo" id="parrafp" cols="40" placeholder="DESCRIBA SU PRODUCTO"></textarea>
        <label for="piee">PIE DE PAGINA</label>
        <br>
        <textarea name="piee" id="pie" cols="40" placeholder="ESCRIBA PIE DE PAGINA"></textarea>
        <br>
        <div class="elcolor">
            <label for="color">Color para nav</label>
            <input type="color" name="color" id="color" class="color">
            <label for="color2">Color para pie</label>
            <input type="color" name="color2" id="color2" class="color2">
        </div>
        <br>
        <button name="boton">GENERAR</button>
    </form>
</div>

</main>
<footer>
    <div class="pie-pagina">
        <h2> CONTACTO </h2>
        <p>FACEBOOK: Website-Generator</p>
        <p>TikTOk: Website-Generator</p>
        <p>INSTAGRAN: Website-Generator</p>
        <p>TELEGRAN: 3015528160</p>
    </div>
    <div class="pie-pie">
        <h2>UNA APP WEB?</h2>
        <p>
            tambien ofrecremos apps web comuicate con nostros
        </p>

        <form action="" method="$_POST">
            <input type="text" placeholder="NOMBRE" name="nombre">
            <input type="text" name="servicio" placeholder="SERVICIO O PRODUCTO QUE OFRECE SU EMPRESA">
            <input type="email" name="email" id="" placeholder="CORREO">
            <input type="textarSea" placeholder="DESCRIBA QUE NECESITA, LOS COLORES DE SU EMPRESA, SU PUBLICO GENERAL
            PRODUCTO O SERVICIO">
        </form>
    </div>
</footer>

</html>