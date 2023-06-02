<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logoHeladeria.ico" type="image/x-icon">

    <title>Frozen Magic</title>
</head>
<body>
<header>
        <div class="logo">
            <img src="img/logoHeladeria.png" alt="logo_empresa">
        </div>
        <nav>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle">&#9776;</label>
            <ul>
                <li>
                    <a href="index.php#seccionInicio">Inicio</a>
                </li>
                <li>
                    <a href="index.php#seccionProductos">Nuestros productos</a>
                </li>
                <li>
                    <a href="index.php#seccionQuienesSomos">Sobre nosotros</a>
                </li>
                <li>
                    <a href="index.php#seccionQuienesSomos">Contáctenos</a>
                </li> 
            </ul>
        </nav>
    </header>
    <div class="main-frame-dat">
    <form action="" method="GET">
        <div class="form-group">
            <label for="exampleFormControlInput1">Usuario</label>
            <input type="text" name="usuario" class="form-control" id="exampleFormControlInput1" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Contraseña</label>
            <input type="text" name="contraseña" class="form-control" id="exampleFormControlInput1" placeholder="Contraseña">
        </div>
       
        <button type="submit" name="Ingresar" id="Ingresar" class="btn btn-warning">Ingresar</button>
    </form>

    <?php

    if (isset($_GET['Ingresar'])) {
        $usuario = $_GET['usuario'];
        $contraseña = $_GET['contraseña'];
        
    if($usuario=="admin" && $contraseña=="admin"){
        header("Location: administrar.php");
    }else{
        echo "Usuario o contraseña incorrectos";
    }
        

    }

    ?>

    </div>
    <footer>
        <div class="logo">
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
        <p>Derechos reservados Diana Niño</p>
    </footer>
</body>

</html>