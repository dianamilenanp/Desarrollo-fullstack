<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logoHeladeria.ico" type="image/x-icon">

    <title>Frozen Magic</title>

</head>

<body>
<?php
include 'db/conexion.php';
$query = "SELECT * FROM helados WHERE estado=1";
?>
    <nav class="navbar">
            <div class="navbar-container container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="#seccionInicio" class="inicio">Inicio</a></li>
                    <li> <a href="#seccionProductos">Nuestros productos</a></li>
                    <li><a href="#seccionQuienesSomos">Sobre nosotros</a></li>
                    <li><a href="#seccionQuienesSomos">Contáctenos</a></li>
                    <li>
                        <a href="login.php">Ingresar</a>
                    </li> 
                </ul>
                <img src="img/logoHeladeria.png" alt="logo_empresa" class="logo" >
            </div>
    </nav>
    <section id="seccionInicio">
        <div class="descripcion">
            <h1>Helados hechos con pasión, ya probaste el tuyo?</h1>
            <P>¡Descubre el encanto de Frozen Magic y nuestros exquisitos helados artesanales!
               Te esperamos, sorprende a tu paladar, deleita tu corazón</P>
            <button class="whatsappButton">Realiza tu pedido</button>
        </div>
        <div class="producto">
            <img src="img/heladoInicio.png" alt="no se encontro">
        </div>
        <div class="circulos circulo-uno"></div>
        <div class="circulos circulo-dos"></div>
        <div class="circulos circulo-tres"></div>
    </section>
    <section id="seccionProductos">
        <h2>Nuestros productos</h2>
        <div class="carousel">
            <div class="slider">
                <?php 
                $daticos = mysqli_query($conexion, $query);
                if ($daticos) {
                    $i=1;
                    while ($datos2 = mysqli_fetch_array($daticos)){                      
                        $nombre = $datos2['nombre'];
                        echo '
                        <div class="slide"><img src="img/prod'.$i.'.jpg">
                        <p>'.$nombre.'</p>
                        <button class="whatsappButton">Pide el tuyo</button>
                    </div>
                        ';
                        $i++;
                    }
                }
                ?>   
            </div>
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
        </div>


    </section>
    <script src="js/archivo.js"></script>
    <section id="seccionQuienesSomos">
        <div class="imagen">
            <img src="img/quienesSomos.jpg" alt="no se encontro">
        </div>
        <div class="descripcion">
            <h2>Quienes somos</h2>
            <p>Somos un equipo apasionado y comprometido en brindar a nuestros clientes una experiencia única de sabores
                refrescantes. Desde nuestra fundación en 2010 en el corazón de la ciudad, nos hemos dedicado a elaborar
                helados artesanales con ingredientes de la más alta calidad y con un toque de creatividad en cada
                creación. Nuestro objetivo es asegurar que cada cucharada sea una explosión de sabor para nuestros
                clientes.</p>
        </div>
    </section>
    <footer>
        <div class="logo-footer">
            <img src="img/logoHeladeria.png" alt="">
        </div>
        <div class="menu">    
           <ul>
               <li>
                   <a href="#seccionInicio">Inicio</a>
               </li>
               <li>
                   <a href="#seccionProductos">Nuestros productos</a>
               </li>
               <li>
                   <a href="#seccionQuienesSomos">Sobre nosotros</a>
               </li>
             </ul>
        </div>
        <div class="redesSociales">
            <p>Siguenos!!</p>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
        </div>
        <p class="copiright">Copyright@frozen Magic</p>
    </footer>
</body>

</html>